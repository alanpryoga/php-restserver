<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\User;
use App\Services\UserService;

class UserController
{
    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    /**
     * Create user
     *
     * @return json
     */
    public function create()
    {
        // Validation

        // Create user instance

        // Call service and return json
    }

    /**
     * Get all users
     *
     * @return json
     */
    public function list()
    {
        // Get all users
        echo $this->userService
            ->getAllUsers();
    }

    /**
     * Get user by id
     *
     * @return json
     */
    public function detail($id)
    {
        // Get user by id
        echo $this->userService
            ->getUserById($id);
    }

    /**
     * Update user
     *
     * @return json
     */
    public function update($id)
    {
        // Validation

        // Create user instance

        // Call service and return json
    }

    /**
     * Delete user
     *
     * @return json
     */
    public function delete($id)
    {
        // Validation

        // Create user instance

        // Call service and return json
    }
}
