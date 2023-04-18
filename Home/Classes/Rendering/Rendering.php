<?php

namespace Phpcourse\Myproject\Classes\Rendering;
use Latte;
use Phpcourse\Myproject\Classes\Traits\DebugTrait;

class Rendering{
    use DebugTrait;
        public function __construct($data)
        {
            var_dump('Rendering');


            $latte = new Latte\Engine;
            $latte->setTempDirectory('vendor\latte\tempdir');
            $latte = new Latte\Engine;
            $latte->render('templates\default\index.latte', $data);
            self::debugConsole('Rendering');
        }
}
