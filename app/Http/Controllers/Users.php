<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index($name)
    {
    //    return ['user' => "$name","age"=> 23];
            return "heelo from index";
    }
}
