<?php

class Database {
    protected $connection;
    protected $statement;

    public function __construct($config, $username='root', $password='') {
        // extract parameters
        $host   = $config['host'];
        $port   = $config['port'];
        $dbname = $config['dbname'];

        // create connection
        $this->connection = new mysqli($host, $username, $password, $dbname, $port) or die("Something went wrong.");
    }

    public function query($q, $params = []) {
        // prepare
        $this->statement = mysqli_prepare($this->connection, $q);
        if (!$this->statement) {
            throw new Exception("Something went wrong.");
        }
        // bind parameters dynamically
        if (isset($params)) {
            $types = '';
            foreach ($params as $param) { // int, string, double, blob
                if     (is_int($param))
                    $types = $types . "i";
                elseif (is_string($param))
                    $types = $types . "s";
                elseif (is_double($param))
                    $types = $types . "d";
                else 
                    $types = $types . "b";
            }
            if ($types != '') $this->statement->bind_param($types, ...$params);
        }

        // execute
        $this->statement->execute();
        if (!$this->statement) {
            throw new Exception("Faulty execution.");
        }
        $result = [
            'result'        => $this->statement->get_result(),
            'affected_rows' => $this->statement->affected_rows
        ];
        return $result;
    }

    public function select($q, $params = []) {
        $result = $this->query($q, $params)['result'];
        if ($result->num_rows >= 1) {
            $results = $result->fetch_all(MYSQLI_ASSOC);
            return $results;
        }
    }

    /**
    * TBD
    */
    public function modify($q, $params = []) {
        $result = $this->query($q, $params)['affected_rows'];
        return $result;
    }
}