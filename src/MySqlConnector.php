<?php
declare(strict_types=1);

namespace App;

/**
 * MySql Connector
 */
class MySqlConnector
{
    /**
     * MySql connection
     *
     * @var \mysqli
     */
    private $connection;

    /**
     * Create MySqlConnector instance
     *
     * @return void
     */
    public function __construct()
    {
        // Load database configuration
        $dbConfiguration = require __DIR__ . '/../config/database.php';

        // Connect to mysql
        $this->connection = new \mysqli(
            $dbConfiguration['host'],
            $dbConfiguration['username'],
            $dbConfiguration['password'],
            $dbConfiguration['dbname'],
            (int) $dbConfiguration['port']
        );

        // Check connection
        if ($this->connection->connect_errno) {
            echo 'Failed to connect to MySQL: ' . $this->connection->connect_error;
            exit();
        }
    }

    /**
     * Get MySql connection
     *
     * @return \mysqli
     */
    public function getConnection()
    {
        return $this->connection;
    }
}
