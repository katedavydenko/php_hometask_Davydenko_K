<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;
use Phpcourse\Myproject\Classes\Traits\DebugTrait;


class NewsController implements ControllerMethodName
{
    use DebugTrait;
    public function index(): void
    {
        $data = ['title' => 'News', 'content' => 'pages/news'];
        $user = [ 'name' => '"Курс валют 18 квітня: гривня зміцнилася на "чорному ринку"',
            'article' => 'У вівторок, 18 квітня, гривня після тижня ослаблення зміцнилася до долара та євро на "чорному ринку", але в касах банків курс залишився майже без змін.',
        'date' => '4/18/2023', 'name1' => '"Маск хоче створити конкурента ChatGPT"',
            'article2' => 'Мільярдер Ілон Маск хоче запустити платформу штучного інтелекту, яку він називає "TruthGPT", щоб кинути виклик таким чатботам як ChatGPT від OpenAI та Bard від Google.', 'name3' => '"Українські юристи зможуть надавати послуги у Литві - міністерство юстиції"',
            'date2' => '4/15/2023', 'article3' => 'Міністерство юстиції Литви планує надати можливість юристам третіх країн з професійними званнями, зокрема з України, надавати юридичні послуги в Литві та користуватися гарантіями адвокатської діяльності.', 'date3' => '3/29/2023'];

        $data['user'] = $user;
        new Rendering($data);
        self::debugConsole('NewsController');
    }
}
