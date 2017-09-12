<?php

class Router
{
    // Каждый роут - отдельный элемент массива с описанным путем,
    // нужным контроллером и методом этого контроллера который нужно вызвать
    private $routing = [
        '' => ['controller' => Controller::class, 'action' => 'index'],
        'posts' => ['controller' => Controller::class, 'action' => 'posts'],
    ];

    public function run(): array
    {
        $uriParts = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
        $action = array_shift($uriParts);

        if (array_key_exists($action, $this->routing)) {
            $controller = $this->routing[$action]['controller'];
            $action = $this->routing[$action]['action'];
            $data = $uriParts;
        } else {
            $controller = Controller::class;
            $action = 'error404';
            $data = [];
        }

        return compact('controller', 'action', 'data');
    }
}