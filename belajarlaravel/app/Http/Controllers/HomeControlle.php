<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControlle extends Controller
{
    public function index() {
        return view('index');
    }
}
