<?php
declare(strict_types=1);

namespace App\Services;

interface UserServiceInterface
{
    public function createUser();

    public function getAllUsers();

    public function getUserById($id);

    public function updateUser($id);

    public function deleteUser($id);
}
