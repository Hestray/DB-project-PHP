<?php

namespace Core;
use Exception;
use mysqli;


class Database {
    protected $connection;
    protected $statement;

    /** 
     * Creates the connection to the database with the given parameters
     */
    public function __construct($config, $username='root', $password='') {
        // extract parameters
        $host   = $config['host'];
        $port   = $config['port'];
        $dbname = $config['dbname'];

        // create connection
        $this->connection = new mysqli($host, $username, $password, $dbname, $port) or die("Something went wrong.");
    }

    /**
     * Prepares and executes a query. Use this for complex queries. Otherwise use select or modify.
     * @param string $q is the query to be executed
     * @param array $params is any variables that must be requested from user and used within the query
     * @return array the result(s) of the query in case of success, otherwise throws Exception 
     */
    public function query($q, $params = []) {
        // prepare
        try {
            $this->statement = mysqli_prepare($this->connection, $q);
        } catch (Exception $e) {
            abort(Response::NOT_FOUND);
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
        try {
            $this->statement->execute();
        } catch (Exception $e) {
            abort(Response::NOT_FOUND);
        }

        // rearrange result
        $result = [
            'result'        => $this->statement->get_result(),
            'affected_rows' => $this->statement->affected_rows
        ];
        return $result;
    }

    /**
     * This method is used for DML with SELECT
     * @param string $q is the select query to be executed
     * @param $params are the parameters that need to be transmitted in case of WHERE conditions
     * @return array & bool an integer if the query was executed successfully, false otherwise
     */
    public function select($q, $params = []) {
        $result = $this->query($q, $params)['result'];
        if ($result->num_rows >= 1) {
            $results = $result->fetch_all(MYSQLI_ASSOC);
            return $results;
        }
        return false;
    }

    /**
     * This method is used for DMLs with UPDATE, INSERT or DELETE
     * @param string $q is the query to execute
     * @param $params are the parameters that need to be transmitted in case of WHERE conditions
     * @return array & bool an integer if the query was executed successfully, false otherwise
     */
    public function modify($q, $params = []) {
        $result = $this->query($q, $params);
        if ($result['affected_rows'] >= 1) return $result;
        return false;
    }

    public function lastInsertID() {
        return $this->connection->insert_id;
    }
}