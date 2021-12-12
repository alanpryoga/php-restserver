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
        // Compose sql query
        $sql = 'insert into `users` (`name`, `username`, `password`) values (?, ?, ?)';

        // Do sql query
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
        // Compose sql query
        $sql = 'select * from `users` where `id` = ?';

        // Do sql query
        $stmt = $this->mysqlConnector->getConnection()
            ->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();

        $result = $stmt->get_result();

        // TODO: Add validation if row exists or not

        // Return result as object
        $row = $result->fetch_assoc();
        $user = new User($row['id'], $row['name'], $row['username'], $row['password']);

        return $user;
    }

    public function updateUser($id)
    {
        // Compose sql query
        $sql = 'update `users` set `name`=?, `username`=?, `password`=? where `id`=?';

        // Do sql query
    }

    public function deleteUser($id)
    {
        // Compose sql query
        $sql = 'delete from `users` where `id`=?';

        // Do sql query
    }
}
