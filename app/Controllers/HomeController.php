<?php

namespace App\Controllers;

use framework\Controller;

class HomeController extends Controller
{
    public function index(): string
    {
        $message = "Salom dunyo";
        return view('home', compact('message'));
    }
}