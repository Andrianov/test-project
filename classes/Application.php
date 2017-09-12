<?php

class Application
{
    public function run()
    {
        $router = new Router;
        $routerData = $router->run();

        $controllerName = $routerData['controller']; // выбор нужного контроллера
        $actionName = $routerData['action']; // выбор нужного экшна

        $controller = new $controllerName();
        $result = $controller->$actionName($routerData['data']);

        $view = new View($result);
        $view->render();
    }
}