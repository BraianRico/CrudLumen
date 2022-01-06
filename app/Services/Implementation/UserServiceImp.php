<?php

namespace App\Services\Implementation;

use App\Models\User;
use App\Services\Interface\UserServiceInterface;

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
    function createUser(array $user)
    {
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
