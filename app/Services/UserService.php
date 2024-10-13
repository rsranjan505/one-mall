<?php

namespace App\Services;

use App\Models\User;

class UserService extends BaseService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }


    public function getAllUsers()
    {
        return User::with('role','image')->where('user_type', 'admin_user')->latest(); // for datatable
    }

    public function getAllCustomers()
    {
        return User::with('role','image')->where('user_type', 'customer')->latest(); // for datatable
    }

    public function getUserById($id)
    {
        return User::with('role','image')->where('id', $id)->first();
    }

    public function createUser($data)
    {
        return User::create($data);
    }
}
