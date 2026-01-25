<?php

namespace App\core;

class Controler
{
    public string $layout = 'main';
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }
    public function render($view, $params)
    {
        return Application::$app->router->renderView($view, $params);

    }

    public function redirect(string $string)
    {
        header("Location: $string");
        exit;
    }

}