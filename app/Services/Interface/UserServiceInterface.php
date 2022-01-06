<?php

namespace App\Services\Interface;

interface UserServiceInterface
{
    /**
     *
     * @return void
     */
    function listUser();

    /**
     *
     * @param integer $id
     * @return void
     */
    function SearchUser(int $id);

    /**
     *
     * @param array $user
     * @return void
     */
    function createUser(array $user);

    /**
     *
     * @param array $user
     * @param integer $id
     * @return void
     */
    function updateUser(array $user, int $id);

    /**
     *
     * @param integer $id
     * @return boolean
     */
    function deleteUser(int $id);

    /**
     * 
     * @param integer $id
     * @return boolean
     */
    function restoreUser(int $id);
}
