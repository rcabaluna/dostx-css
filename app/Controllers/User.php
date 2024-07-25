<?php

namespace App\Controllers;

use App\Models\Usermodel;

class User extends BaseController
{
    public $userModel;

	public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function dashboard(){
        return view('user/dashboard');
    }
}