<?php

namespace PhpRestServer\Models;

/**
 * Base MVC model
 */
class BaseModel
{
    /**
     * DB Connector
     *
     * @var \PhpRestServer\Database\DBConnector;
     */
    protected $dbConnector;

    /**
     * Create BaseModel instance
     *
     * @return void
     */
    public function __construct()
    {
        $dbConfig = require __DIR__ . '/../../config/database.php';

        $this->dbConnector = new \PhpRestServer\Database\DBConnector($dbConfig);
    }
}
