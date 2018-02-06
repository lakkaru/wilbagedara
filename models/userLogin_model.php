<?php

class userLogin_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    /*
     * checking user service number and password for login
     */

    public function userLogIn() {
//         echo"test";
//        die;
        $awaMemId = $_POST['awaMemId'];
        $password = Hash::create('md5', $_POST['password'], HASH_PASSWORD_KEY);
//        echo $password;
//        die;
        $result = $this->db->select('SELECT  awaMemId, name FROM members '
                . 'where awaMemId = :awaMemId AND password = :password', array(':awaMemId' => $awaMemId, ':password' => $password));
        $count = count($result);
//          echo $count;
//      die;
        if ($count > 0) {//if loged in
            // Session::init();
//            Session::set('role', $result[0]['role']);
            Session::set('loggedIn', 'user');
            Session::set('awaMemId', $result[0]['awaMemId']);
            Session::set('userName', $result[0]['name']);
//            echo Session::get('userName');
//            die;
            header('location: ../../index');
        } else {//if not logged in
            Session::init();
            Session::set('loggedIn', FALSE);
            header('location: ../user');
        }
    }
    public function officerLogIn() {
//         echo"test";
//        die;
        $rank = $_POST['rank'];
        $password = Hash::create('md5', $_POST['password'], HASH_PASSWORD_KEY);
//        echo $password;
//        die;
        $result = $this->db->select('SELECT   rank FROM officers '
                . 'where rank = :rank AND password = :password', array(':rank' => $rank, ':password' => $password));
        $count = count($result);
//          echo $count;
//      die;
        if ($count > 0) {//if loged in
            // Session::init();
//            Session::set('role', $result[0]['role']);
            Session::set('loggedIn', 'officer');
            Session::set('rank', $result[0]['rank']);
            Session::set('userName', $result[0]['rank'] .' තුමනි');
//            echo Session::get('userName');
//            die;
            header('location: ../../index');
        } else {//if not logged in
            Session::init();
            Session::set('loggedIn', FALSE);
            header('location: ../officer');
        }
    }
    
    public function userChangePassword($userData) {
//        print_r($officerData) ; die;
//        echo $officerData["rank"]; die;
        $result = $this->db->select('SELECT   * FROM members '
                . 'where awaMemId = :awaMemId AND password = :currentPassword', array(':awaMemId' => $userData["awaMemId"], ':currentPassword' => $userData["currentPassword"]));
        $count = count($result);
//          echo $count;die;
        if ($count> 0) {//if password maches
             $postData = array(
            'password' => $userData['newPassword']
        );
//             $officerData['rank']="'".$officerData['rank']."'";
           $message = $this->db->update('member', $postData, "awaMemId={$userData['awaMemId']}");
//           print_r($message); die;
        return $message;
        }else {//if not logged in
            Session::init();
            Session::set('password', FALSE);
            header('location: changePassword');
        }
        
    }
    public function officerChangePassword($officerData) {
//        print_r($officerData) ; die;
//        echo $officerData["rank"]; die;
        $result = $this->db->select('SELECT   * FROM officers '
                . 'where rank = :rank AND password = :currentPassword', array(':rank' => $officerData["rank"], ':currentPassword' => $officerData["currentPassword"]));
        $count = count($result);
//          echo $count;die;
        if ($count> 0) {//if password maches
             $postData = array(
            'password' => $officerData['newPassword']
        );
             $officerData['rank']="'".$officerData['rank']."'";
           $message = $this->db->update('officer', $postData, "rank={$officerData['rank']}");
//           print_r($message); die;
        return $message;
        }else {//if not logged in
            Session::init();
            Session::set('password', FALSE);
            header('location: changePassword');
        }
        
    }
}
