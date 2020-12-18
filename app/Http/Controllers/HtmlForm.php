<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlForm extends Controller
{
    //
    function getData(Request $req)
    {
        return $req->input();
    }
}
