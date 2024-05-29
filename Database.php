<?php

class Database {
    public $connection;
    public $statement;

    public function __construct($config, $username='root', $password='') {
        // extract parameters
        $host   = $config['host'];
        $port   = $config['port'];
        $dbname = $config['dbname'];

        // create connection
        $this->connection = mysqli_connect($host, $username, $password, $dbname, $port) or die("Something went wrong.");
    }

    public function query($q, $params = []) {
        // prepare
        $this->statement = mysqli_prepare($this->connection, $q);
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
        $result = [
            'result' => $this->statement->get_result(),
            'affected_rows' => $this->statement->affected_rows
        ];
        return $result;
    }

    public function get() {
        $result = $this->statement->get_result();
        return $result->fetch_all();
    }
}