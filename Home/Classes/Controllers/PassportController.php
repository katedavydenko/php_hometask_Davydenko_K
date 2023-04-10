<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;
use Phpcourse\Myproject\Classes\Traits\DebugTrait;


class PassportController implements ControllerMethodName
{
    use DebugTrait;
    public function index(): void
    {
        $data = ['title' => 'Passport', 'content' => 'additional_pages/passport'];
        new Rendering($data);
        self::debugConsole('PassportController');
    }
}
