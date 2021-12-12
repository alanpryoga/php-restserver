<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Services\UserService;

class UserController
{
    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function create()
    {
        # code...
    }

    public function list()
    {
        // Get all users
        echo $this->userService
            ->getAllUsers();
    }

    public function detail($id)
    {
        # code...
    }

    public function update($id)
    {
        # code...
    }

    public function delete($id)
    {
        # code...
    }
}
