<?php

namespace App\Controllers;

use Framework\Controller;

class HomeController extends Controller
{
    public function index(): void
    {
        view('home');
    }
}