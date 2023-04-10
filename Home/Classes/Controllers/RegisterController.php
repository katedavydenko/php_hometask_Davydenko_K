<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Rendering\Rendering;
use Phpcourse\Myproject\Classes\Traits\DebugTrait;


class RegisterController
{
    use DebugTrait;
    public function index(): void
    {
        $data = ['title' => 'Login', 'content' => 'auth/reg'];
        new Rendering($data);
        self::debugConsole('RegisterController');
    }
}
