<?php

namespace Phpcourse\Myproject\Classes\Rendering;
use Latte;
use Phpcourse\Myproject\Classes\Traits\DebugTrait;

class Rendering{
    use DebugTrait;
        public function __construct()
        {
            var_dump('Rendering');


            $latte = new Latte\Engine;
            $latte->setTempDirectory('C:\Users\User22\PhpstormProjects\php_hometask_Davydenko_K\vendor\latte\tempdir');
            $hello = ['hello' => 'hello'];
            $latte->render('C:\Users\User22\PhpstormProjects\php_hometask_Davydenko_K\Home\public\templates\default\index.tpl', $hello);
            self::debugConsole('Rendering');
        }
}
