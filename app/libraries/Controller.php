<?php

abstract class Controller
{
    public $model;
    public function loadModel(string $model)
    {
        require_once(APPROOT . 'models/' . $model . '.php');
        $this->model = new $model();
    }
    public function render($vue, $data = [])
    {
        extract($data);
        require_once(APPROOT . 'views/inc/header.php');

        require_once(APPROOT . "views" . $vue . '.php');

        require_once(APPROOT . 'views/inc/footer.php');

    }
}
?>