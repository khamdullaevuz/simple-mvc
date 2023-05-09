<?php

namespace Controllers;

use Framework\Controller;

class TestController extends Controller
{
    public function test(): void
    {
        $this->view('test');
    }
}