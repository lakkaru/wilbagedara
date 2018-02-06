<?php

class Controller {

    function __construct() {
        $this->view = new View(); //creating new view class of lib/view.php
    }

    /**
     * Loading model
     * @param string $name Name of the model
     * @param string $path Location of the models
     */
    public function loadModel($name, $modelPath = 'models/') {
        $path = $modelPath . $name . "_model.php";
        if (file_exists($path)) {
            require $modelPath . $name . "_model.php";
            $modelName = $name . '_model';
            $this->model = new $modelName();
        }
    }

    public function checkLogin() {//checking user role
        if (isset($_SESSION['role'])) {
            if (Session::get('loggedIn') == TRUE) {
                return TRUE;
            }
        }
    }

}
