<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homepage extends Controller
{
    public function index()
    {
        return view('homepage'); // trả về trang test.blade.php
    }
}