<?php

class Startup {
    private $_url = null;
    private $_controller = null;
    private $_controllerPath = 'controllers/';
    private $_modelPath = 'models/';
    private $_defaultFile = 'index.php';
    private $_errorFile = 'error.php';

    /**
     * Strats the Start_up
     * @return boolean
     */
    public function init() {
        $this->_getUrl(); //Sets the protected $_url
        //load the default controller if no URL is set
        if (empty($this->_url[0])) {//when ask for root directory
            $this->_loadDefaultController();
            return FALSE;
        }
        $this->_loadExistingController();
        $this->_callControllerMethord();
    }

    /**
     * Fetches the $_GET from 'url'
     */

    /**
     * Fetches the $_GET from 'url'
     */
    private function _getUrl() {
        $url = isset($_GET['url']) ? $_GET['url'] : null; //getting paramiters from url via htaccess
        $url = rtrim($url, '/'); //removing additional '/ ' from url
        $url = filter_var($url, FILTER_SANITIZE_URL); //removing unnecessory entries in url(like \%/)
        $this->_url = explode("/", $url); //deviding url into parts with '/'
    }

    /**
     * This loads if there is no GET parrameter passed
     */
    private function _loadDefaultController() {
        require $this->_controllerPath . $this->_defaultFile;
        $this->_controller = new Index(); //setting $controler to controllers->index
        $this->_controller->loadModel('index', $this->_modelPath); //loading index_model for initial loading
        $this->_controller->index(); //executing index function for rendering index page
    }

    /**
     * Load an exsiting controller if there is a GET parameter passed
     * @return boolean|string
     */
    private function _loadExistingController() {
        $file = $this->_controllerPath . $this->_url[0] . '.php'; // assigning controller
        if (file_exists($file)) {
            require $file; //getting files from controller
            $this->_controller = new $this->_url[0]; //setting $controler to controllers->$url[0].php
            $this->_controller->loadModel($this->_url[0], $this->_modelPath); //load models
            } else {
            $this->_error();
            return FALSE;
        }
    }

    private function _callControllerMethord() {
        $length = count($this->_url);
        //Make sure the methord is exisits
        If ($length > 1) {
            if (!method_exists($this->_controller, $this->_url[1])) {
                $this->_error();
            }
        }
        //Determine what to load
        switch ($length) {
            case 5:
                //Controller->Methord(Param1, Param2, Param3)
                $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4]);
                break;
            case 4:
                //Controller->Methord(Param1, Param2)
                $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3]);
                break;
            case 3:
                //Controller->Methord(Param1)
                $this->_controller->{$this->_url[1]}($this->_url[2]);
                break;
            case 2:
                //Controller->Methord()
                $this->_controller->{$this->_url[1]}();
                break;
            default:
                $this->_controller->index();
                break;
        }
    }

    /**
     * (optional) Set the custom path to controllers
     * @param srting $path
     */
    public function setControllerPath($path) {
        $this->_controllerPath = trim($path, '/') . '/';
    }

    /**
     * (optional) Set the custom path to models
     * @param srting $path
     */
    public function setModelPath($path) {
        $this->_modelPath = trim($path, '/') . '/';
    }

    /**
     * (optional) Set the custom path to the index file
     * @param srting $path use the file name of the controller, eg: index.php
     */
    public function setDefaultFile($path) {
        $this->_defaultFile = trim($path, '/') . '/';
    }

    /**
     * (optional) Set the custom path to the error file
     * @param srting $path use the file name the controller, eg: error.php
     */
    public function setErrorFile($path) {
        $this->_errorFile = trim($path, '/') . '/';
    }

    /**
     * Display an error page if nothing exisits
     * @return boolean|string
     */
    private function _error() {
        // echo 'Error being called';
        require $this->_controllerPath . $this->_errorFile;
        $this->_controller = new Error();
        $this->_controller->index();
        exit;
    }

}
