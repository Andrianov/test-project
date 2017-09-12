<?php

class BaseController
{
    protected $layout;
    protected $template;
    protected $type;
    protected $data;

    protected function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    protected function wrapData()
    {
        return [
            'result' => $this->data,
            'template' => $this->template,
            'layout' => $this->layout,
            'type' => $this->type
        ];
    }
}