<?php

namespace App\Services\Implementation;

use App\Models\User;
use App\Services\Interface\UserServiceInterface;
use Illuminate\Support\Facades\Hash;

class UserServiceImpl implements UserServiceInterface
{
    private $model;

    function __construct()
    {
        $this->model = new User();
    }

    function listUser()
    {
    }
    function SearchUser(int $id)
    {
    }

    /**
     * Create User
     */
    function createUser(array $user)
    {
        $user['password'] = Hash::make($user['password']);
        $this->model->create($user);
    }

    function updateUser(array $user, int $id)
    {
    }
    function deleteUser(int $id)
    {
    }
    function restoreUser(int $id)
    {
    }
}
