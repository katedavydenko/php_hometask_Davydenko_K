<?php

namespace Phpcourse\Myproject\Classes;

use Monolog\Level;
use Phpcourse\Myproject\Classes\Controllers\NotFoundController;
use Phpcourse\Myproject\Classes\Router\Router;
use Phpcourse\Myproject\Classes\Traits\DebugTrait;
use Monolog\Handler\FirePHPHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
class StartApplication
{
    use DebugTrait;
    private string $URI;
    // об'єкт класу Router буде записаний в цю змінну
    private object $routerData;
    // просто константи
    const CONTROLLER = 1;
    const ACTION = 2;

    public function __construct(readonly Router $router, string $URI)
    {
        $this->URI = $URI;
        $this->routerData = $router;
        self::debugConsole('StartApplication');
    }
    public function run(): void{
        self::debugConsole('run()');
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('logs/main.log', Level::Debug));
        try{ // спробуємо знайти збіг нашого URI з патерном роутера
            $match = $this->routerData->findRoute($this->URI);
            $controller = $match[self::CONTROLLER];
            $action = $match[self::ACTION];
            (new $controller)->$action();
        }catch(\Throwable $e){
            (new NotFoundController)->showErrorPage(
                $e->getMessage(),
                $e->getCode(),
            );
        }

    }

}
