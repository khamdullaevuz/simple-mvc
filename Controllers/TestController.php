<?php

namespace Controllers;

use Framework\Controller;
use Framework\Request;

class TestController extends Controller
{
    public function test(Request $request): void
    {
        $data = $request->all();
        dd($data, "test");
    }
}