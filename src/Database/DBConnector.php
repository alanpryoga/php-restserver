<?php

namespace PhpRestServer\Database;

/**
 * Database Connector
 */
class DBConnector
{
    /**
     * MySQLi connection
     *
     * @var \mysqli
     */
    private $connection;

    /**
     * Create DBConnector instance
     *
     * @return void
     */
    public function __construct($dbConfig)
    {
        $this->connection = new \mysqli(
            $dbConfig['host'],
            $dbConfig['username'],
            $dbConfig['password'],
            $dbConfig['dbname'],
            $dbConfig['port']
        );

        // Check connection
        if ($this->connection->connect_errno) {
            echo 'Failed to connect to MySQL: ' . $this->connection->connect_error;
            exit();
        }
    }

    /**
     * Get DB connection
     *
     * @return \mysqli
     */
    public function getConnection()
    {
        return $this->connection;
    }
}
