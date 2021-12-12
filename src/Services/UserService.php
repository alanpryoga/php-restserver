<?php
declare(strict_types=1);

namespace App\Services;

use App\Repositories\UserRepository;

class UserService implements UserServiceInterface
{
    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function createUser()
    {
        // Code...
    }

    public function getAllUsers()
    {
        // Set content type as json
        header('Content-Type: application/json; charset=utf-8');

        // Get all users
        $users = $this->userRepository
            ->getAllUsers();

        // Return result as json
        $rows = [];
        foreach ($users as $user) {
            $row = [
                'id' => $user->getId(),
                'name' => $user->getName(),
                'username' => $user->getUsername(),
                'password' => $user->getPassword(),
            ];

            $rows[] = $row;
        }

        return json_encode($rows);
    }

    public function getUserById($id)
    {
        // Set content type as json
        header('Content-Type: application/json; charset=utf-8');

        // Get user by id
        $user = $this->userRepository
            ->getUserById($id);

        // Return result as json
        $row = [
            'id' => $user->getId(),
            'name' => $user->getName(),
            'username' => $user->getUsername(),
            'password' => $user->getPassword(),
        ];

        return json_encode($row);
    }

    public function updateUser($id)
    {
        // Code...
    }

    public function deleteUser($id)
    {
        // Code...
    }
}
