<?php
class Error extends Controller {
    function __construct() {
        parent::__construct();
    }
 function index(){
     $this->view->title='404 Error';
        $this->view->render('error/index');//sending paramiters to View() at lib/view.php
    }
}
