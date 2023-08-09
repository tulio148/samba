<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function create()
    {
        return view('users.register');
    }

    public function login()
    {
        return view('users.login');
    }
}
