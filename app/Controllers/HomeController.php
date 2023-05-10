<?php

namespace App\Controllers;

use framework\Controller;

class HomeController extends Controller
{
    public function index(): void
    {
        view('home');
    }
}