<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //index class
    public function index()
    {
        return view("index");
    }
}
