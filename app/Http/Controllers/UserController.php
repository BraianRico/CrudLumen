<?php

namespace App\Http\Controllers;

use App\Services\Implementation\UserServiceImpl;
use Illuminate\Http\Request;
use Users;

class UserController extends Controller
{
    /**
     *
     * @var UserServiceImpl
     */
    private $userService;

    /**
     *
     * @var Request
     */
    private $request;

    public function __construct(UserServiceImpl $userService, Request $request)
    {
        $this->userService = $userService;
        $this->request = $request;
    }

    function createUser()
    {
        $response = response("", 201);
        $this->userService->createUser($this->request->all());
        return $response;
    }

    function listUser()
    {
        return response($this->userService->listUser());
    }

    function searchUser(int $id)
    {
        return response($this->userService->searchUser($id));
    }
}
