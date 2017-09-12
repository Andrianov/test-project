<?php

class Controller extends BaseController
{
    protected $type = 'html';
    protected $layout = 'default';
    protected $template = 'default';
    protected $data = [];

    protected function setLayout($name)
    {
        $this->layout = $name;
    }

    protected function setTemplate($name)
    {
        $this->template = $name;
    }

    public function index()
    {
        $this->setTemplate('index');

        return $this->wrapData();
    }

    public function error404()
    {
        $this->setTemplate('404');

        return $this->wrapData();
    }

    public function posts()
    {
        $this->setTemplate('posts');
        $this->assign('posts', [
            'asdasd',
            'asdwqeqwe',
            'asdqwehukqwu'
        ]);

        return $this->wrapData();
    }
}