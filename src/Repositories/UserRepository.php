<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Models\User;
use App\MySqlConnector;

class UserRepository implements UserRepositoryInterface
{
    private $mysqlConnector;

    public function __construct()
    {
        $this->mysqlConnector = new MySqlConnector();
    }

    public function createUser()
    {
        // code...
    }

    public function getAllUsers()
    {
        // Compose sql query
        $sql = 'select * from `users`';

        // Do sql query
        $result = $this->mysqlConnector->getConnection()
            ->query($sql);

        // Return result as array of object
        $rows = [];
        while ($row = $result->fetch_assoc()) {
            $user = new User($row['id'], $row['name'], $row['username'], $row['password']);
            $rows[] = $user;
        }

        return $rows;
    }

    public function getUserById($id)
    {
        $sql = 'select * from `users` where `id` = ?';
    }

    public function updateUser($id)
    {

    }

    public function deleteUser($id)
    {

    }
}
