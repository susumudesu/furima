<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('edit');
    }

    public function profile()
    {
        return view('profile');
    }

    public function address()
    {
        return view('address');
    }

}
