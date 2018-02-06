<?php
session_start();
Session::set('menu', "index");
class index extends Controller {
    function __construct() {
        parent::__construct();
        $this->view->js = array('index/js/default.js');
        $this->view->css = array('index/css/default.css');
 }

    function index() {
        $this->view->title = 'විල්බාගෙදර';
        $this->view->render('index/index'); //sending paramiters to View() at lib/view.php
    }
}
