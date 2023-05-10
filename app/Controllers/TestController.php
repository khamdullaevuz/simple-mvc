<?php

namespace App\Controllers;

use framework\Controller;
use framework\Request;

class TestController extends Controller
{
    public function test(Request $request): void
    {
        $data = $request->all();

        dd($data, "test");
    }

    public function console($args): void
    {
        dd($args);
    }
}