<?php

class View
{
    private $data;
    private $template;
    private $layout;
    private $type;

    public function __construct(array $data)
    {
        $this->data = $data['result'];
        $this->template = $data['template'];
        $this->layout = $data['layout'];
        $this->type = $data['type'];
    }

    public function render()
    {
        foreach ($this->data as $key => $value) {
            $$key = $value;
        }

        ob_start();
        include "templates/{$this->template}.html";
        $content = ob_get_contents();
        ob_end_clean();

        include "layouts/{$this->layout}.html";
    }
}