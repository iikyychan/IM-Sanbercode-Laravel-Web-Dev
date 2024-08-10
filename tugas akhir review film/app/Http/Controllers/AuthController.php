<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function submit(Request $request) {
        $namaDepan = $request->input("fname");
        $namaBelakang = $request->input("lname");
        return view('page.welcome',['namaDepan' => $namaDepan, 'namaBelakang' => $namaBelakang]);
    }
}
