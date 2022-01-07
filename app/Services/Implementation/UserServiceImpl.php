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

    /**
     * List User
     */
    function listUser()
    {
        return $this->model->get();
    }

    /**
     * Search User
     */
    function SearchUser(int $id)
    {
        return $this->model::where('id', $id)->get();
    }

    /**
     * Create User
     */
    function createUser(array $user)
    {
        $user['password'] = Hash::make($user['password']);
        $this->model->create($user);
    }

    /**
     * Updata User
     */
    function updateUser(array $user, int $id)
    {
        $user['password'] = Hash::make($user['password']);
        $this->model->where('id', $id)
            ->first()
            ->fill($user)
            ->save();
    }
    function deleteUser(int $id)
    {
    }
    function restoreUser(int $id)
    {
    }
}
