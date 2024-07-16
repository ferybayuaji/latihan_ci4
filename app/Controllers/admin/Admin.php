<?php

namespace App\Controllers\admin;


use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index($admin = '')
    {
        // return view('welcome_message');
        echo "Hello Admin $admin";
    }
}
