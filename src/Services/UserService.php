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

    }

    public function getAllUsers()
    {
        // Set content type as json
        header('Content-type: application/json');

        // Get all users
        $users = $this->userRepository
            ->getAllUsers();

        // Return result as json
        $rows = [];
        foreach ($users as $user) {
            $item = [
                'id' => $user->getId(),
                'name' => $user->getName(),
                'username' => $user->getUsername(),
                'password' => $user->getPassword(),
            ];

            $rows[] = $item;
        }

        return json_encode($rows);
    }

    public function getUserById($id)
    {

    }

    public function updateUser($id)
    {

    }

    public function deleteUser($id)
    {

    }
}
