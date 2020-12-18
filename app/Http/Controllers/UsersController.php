<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function viewLoad()
    {
        $data = ['pratik', 'bishal', 'bishu'];
        return view('users', ['users' => $data]); 

    }
}
