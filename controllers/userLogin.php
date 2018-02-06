<?php

Session::init();

class userLogin extends Controller {

    function __construct() {
        parent::__construct();
        $this->view->js = array('userLogin/js/default.js');
    }

//    function index() {
//
//        $this->view->title = 'User Login';
//        //if (!Session::get('loggedIn')) {
////            $this->view->login = false;
//        $this->view->render('userLogin/index');
//        //   } 
//        //  else {
//        //  Session::destroy();
//        //       $this->view->render('login/index'); //sending paramiters to View() at lib/view.php
//    }

    function user() {
        $this->view->title = 'User Login';
        $this->view->render('userLogin/index');
    }
    
    function officer() {
        $this->view->title = 'Officer Login';
        $this->view->render('OffLogin/index');
    }
    
    function changePassword() {//getting changepassword dialog
        $this->view->title = 'Change Password';
        $this->view->render('userLogin/changePassword');
    }

    function userLogIn($level) {
        if($level=="user"){
        $this->model->userLogIn();
        }
        if($level=="officer"){
        $this->model->OfficerLogIn();
        }
    }
    
    function changePasswordRun() {
        if(Session::get('loggedIn')=="user"){
            $userData = array(
                'awaMemId' => Session::get('awaMemId'),
                'currentPassword' =>  Hash::create('md5', $_POST['currentPassword'], HASH_PASSWORD_KEY),
                'newPassword' => Hash::create('md5', $_POST['newPassword'], HASH_PASSWORD_KEY)
            );
        $this->model->userChangePassword($userData);
        header('location: ../index');
        }
        if(Session::get('loggedIn')=="officer"){
            $officerData = array(
                'rank' => Session::get('rank'),
               'currentPassword' =>  Hash::create('md5', $_POST['currentPassword'], HASH_PASSWORD_KEY),
                'newPassword' => Hash::create('md5', $_POST['newPassword'], HASH_PASSWORD_KEY)
            );
        $this->model->OfficerChangePassword($officerData);
        header('location: ../index');
        }
    }
//    function OfficerLogIn() {
//        $this->model->OfficerLogIn();
//    }

    function logout() {
        Session::destroy();
        header('location:../index');
        exit;
    }

}
