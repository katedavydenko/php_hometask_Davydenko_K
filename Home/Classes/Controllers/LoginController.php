<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Rendering\Rendering;
use Phpcourse\Myproject\Classes\Traits\DebugTrait;


class LoginController
{
    use DebugTrait;
    public function index(): void
    {
        $data = ['title' => 'Login', 'content' => 'auth/login'];
        new Rendering($data);
        self::debugConsole('LoginController');
    }
}
