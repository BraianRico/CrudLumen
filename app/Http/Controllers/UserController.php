<?php

namespace App\Http\Controllers;

use App\Services\Implementation\UserServiceImpl;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     *
     * @var UserServicesImpl
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
}
