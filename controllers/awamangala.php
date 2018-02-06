<?php

session_start();
Session::set('menu', "awamangala");

class awamangala extends Controller {

    function __construct() {
        parent::__construct();
        $this->view->js = array('awamangala/js/default.js');
        $this->view->css = array('awamangala/css/default.css');
    }

    function index() {
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
//        $this->view->grade09MathsList = $this->model->grade09MathsList();
        $this->view->render('awamangala/index'); //sending paramiters to View() at lib/view.php
    }

    function addMember() {
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
//        $this->view->grade09MathsList = $this->model->grade09MathsList();
        $this->view->render('awamangala/addMember'); //sending paramiters to View() at lib/view.php
    }

    function searchMember() {
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
        $this->view->memberDataList = $this->model->searchId(Session::get('awaMemId'));
        $this->view->render('awamangala/searchMember'); //sending paramiters to View() at lib/view.php
    }

    function searchDivision() {
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
//        $this->view->divisionList = $this->model->divisionListList();
        $this->view->render('awamangala/searchDivision'); //sending paramiters to View() at lib/view.php
    }

    function updateMember() {//for updating searced id
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
//        $this->view->grade09MathsList = $this->model->grade09MathsList();
        $this->view->render('awamangala/updateMember'); //sending paramiters to View() at lib/view.php
    }

    function deleteMember() {//for updating searced id
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
//        $this->view->grade09MathsList = $this->model->grade09MathsList();
        $this->view->render('awamangala/deleteMember'); //sending paramiters to View() at lib/view.php
    }

    function releasedMember() {//for updating searced id
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
        $this->view->freeList = $this->model->releasedMemList();
        $this->view->render('awamangala/releasedMember'); //sending paramiters to View() at lib/view.php
    }

    function officers() {//for updating searced id
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
        $this->view->officerList = $this->model->officerList(date("Y"));
        $this->view->render('awamangala/officers'); //sending paramiters to View() at lib/view.php
    }

    function deths() {//for updating searced id
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
        $this->view->dethsList = $this->model->dethsList(date("Y"));
        $this->view->render('awamangala/deths'); //sending paramiters to View() at lib/view.php
    }

    function jobs() {//for updating searced id
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
        $this->view->jobsList = $this->model->searchJobs(0);
        $this->view->funJobsList = $this->model->searchJobsFunaral(0);
        $this->view->render('awamangala/jobs'); //sending paramiters to View() at lib/view.php
    }

    function resetJobsList() {//for updating searced id
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
        $this->model->resetTempReleased();
        $this->view->jobsList = $this->model->searchJobs(0);
        $this->view->funJobsList = $this->model->searchJobsFunaral(0);
        $this->view->render('awamangala/jobs'); //sending paramiters to View() at lib/view.php
    }

    function addReleasedMember() {//for updating searced id
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
        $this->view->freeList = $this->model->releasedMemList();
        $this->view->render('awamangala/addReleasedMember'); //sending paramiters to View() at lib/view.php
    }

    function addOfficer() {//for updating searced id
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
//        $this->view->freeList = $this->model->releasedMemList();
        $this->view->render('awamangala/addOfficer'); //sending paramiters to View() at lib/view.php
    }

    function addDeths() {//for updating searced id
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
//        $this->view->freeList = $this->model->releasedMemList();
        $this->view->render('awamangala/addDeths'); //sending paramiters to View() at lib/view.php
    }
    function addFines() {//for adding fines
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
//        $this->view->freeList = $this->model->releasedMemList();
        $this->view->render('awamangala/addFines'); //sending paramiters to View() at lib/view.php
    }

    function deed() {//for updating searced id
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
//        $this->view->freeList = $this->model->releasedMemList();
        $this->view->render('awamangala/deed'); //sending paramiters to View() at lib/view.php
    }

    function membershipPayments() {//for membership payments
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
//        $this->view->freeList = $this->model->releasedMemList();
        $this->view->render('awamangala/membershipPayments'); //sending paramiters to View() at lib/view.php
    }
    function duePayments() {//for due payments
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
//        $this->view->freeList = $this->model->releasedMemList();
        $this->view->render('awamangala/duePayments'); //sending paramiters to View() at lib/view.php
    }
    function sharePayments() {//for share payments
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
//        $this->view->freeList = $this->model->releasedMemList();
        $this->view->render('awamangala/sharePayments'); //sending paramiters to View() at lib/view.php
    }
    
    function extraFundsDue() {//for share payments
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
//        $this->view->freeList = $this->model->releasedMemList();
        $this->view->render('awamangala/extraFundsDue'); //sending paramiters to View() at lib/view.php
    }
    function addMeetingAttendance() {//for share payments
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
        $this->view->lastMonthAttendanceList= $this->model->lastMonthAttendanceList();
        $this->view->twoMonthsAgoAttendanceList= $this->model->twoMonthsAgoAttendanceList();
        $this->view->threeMonthsAgoAttendanceList= $this->model->threeMonthsAgoAttendanceList();
        $this->view->memberList= $this->model->memberList();
        $this->view->render('awamangala/addMeetingAttendance'); //sending paramiters to View() at lib/view.php
        
    }
    function viewMeetingAttendance() {//for share payments
//        echo $date; die;
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
        $this->view->memberList= $this->model->memberList();
        $this->view->meetingDateList = $this->model->meetingDateList();
        $this->view->meetingAttendanceList = $this->model->meetingAttendanceList();
        $this->view->render('awamangala/viewMeetingAttendance'); //sending paramiters to View() at lib/view.php
    }
    
    function viewMeetingAttendanceDate() {
//        if (isset($_POST['dateSelect'])) {
            $date = $_POST['dateSelect'];
//        }
//        echo "$date"; die;
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
        $this->view->memberList= $this->model->memberList();
        $this->view->meetingDateList = $this->model->meetingDateList();
        $this->view->meetingAttendanceList = $this->model->meetingAttendanceListDate($date);
        $this->view->render('awamangala/viewMeetingAttendance'); //sending paramiters to View() at lib/view.php
    }
//    function viewMeetingAttendanceDate($date) {//for share payments
////        echo $date; die;
//        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
//        $this->view->meetingDateList = $this->model->meetingDateList();
//        $this->view->meetingAttendanceList = $this->model->meetingAttendanceList($date);
//        $this->view->render('awamangala/viewMeetingAttendance'); //sending paramiters to View() at lib/view.php
//    }
    function addFunaralAttendance() {//for share payments
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
//        $this->view->freeList = $this->model->releasedMemList();
        $this->view->render('awamangala/addFunaralAttendance'); //sending paramiters to View() at lib/view.php
    }
    
    function pastPayments() {//for share payments
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
        $this->view->pastPayments = $this->model->searchPayments(Session::get('awaMemId') );
        $this->view->render('awamangala/pastPayments'); //sending paramiters to View() at lib/view.php
    }
    
    function finesAndPayments() {//for share payments
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
        $this->view->finesAndPaymentsList = $this->model->finesAndPaymentsList();
        $this->view->render('awamangala/finesAndPayments'); //sending paramiters to View() at lib/view.php
    }
    
    function fines() {//for share payments
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
        $this->view->finesList = $this->model->finesList(Session::get('awaMemId'));
        $this->view->render('awamangala/fines'); //sending paramiters to View() at lib/view.php
    }

//    function addDeths() {//for updating searced id
//        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
////        $this->view->freeList = $this->model->releasedMemList();
//        $this->view->render('awamangala/addDeths'); //sending paramiters to View() at lib/view.php
//    }

    function editMember($awaMemId) {//editing searched id
        if (isset($_POST['memId'])) {
            $awaMemId = htmlspecialchars($_POST['memId']);
        }
//        echo "$awaMemId"; die;
        $this->view->title = 'එක්සත් අවමංගල්‍යාධාර සමිතිය';
        $this->view->memberList = $this->model->editMember($awaMemId);
        $this->view->render('awamangala/editMember'); //sending paramiters to View() at lib/view.php
    }

    function editSave() {//editing searched id
        $this->model->deleteDep($_POST['awaMemId']); //removing old dependants
        $memData = array(//adding member main details
            'joinedDate' => $_POST['joinedDate'],
            'updatedDate' => $_POST['updatedDate'],
            'awaMemId' => $_POST['awaMemId'],
            'name' => htmlspecialchars($_POST['name']),
            'address' => htmlspecialchars($_POST['address']),
            'address' => htmlspecialchars($_POST['address']),
            'email' => htmlspecialchars($_POST['email']),
            'area' => htmlspecialchars($_POST['area']),
            'resTel' => htmlspecialchars($_POST['resTel']),
            'mobTel' => htmlspecialchars($_POST['mobTel']),
            'birthday' => htmlspecialchars($_POST['birthday']),
            'nic' => htmlspecialchars($_POST['nic']),
        );
        $this->model->editSaveMem($memData);

        if ($_POST['exPayRu'] > 0) {//adding extra paying member in expay table
            $exPay = array(
                'exPay' => $_POST['exPayRu'],
                'awaMemId' => $_POST['awaMemId']);
            $this->model->editSaveExPay($exPay);
        }

        if (!($_POST['repRel']) == "") {//adding rep infromation
            $repData = array(
                'awaMemId' => $_POST['awaMemId'],
                'name' => $_POST['repName'],
                'repRel' => $_POST['repRel'],
                'birthday' => htmlspecialchars($_POST['repBirthday'])
            );
            $this->model->editSaveRep($repData);
        }
        if (!($_POST['dep2Name']) == "") {//adding dep2 infromation
//            echo $_POST['dep2Rel']; die;
            $depData = array(
                'awaMemId' => $_POST['awaMemId'],
                'name' => $_POST['dep2Name'],
                'relationship' => $_POST['dep2Rel'],
                'birthday' => htmlspecialchars($_POST['dep2Birthday'])
            );

            $this->model->editSaveDep($depData);
        }
        if (!($_POST['dep3Name']) == "") {//adding dep3 infromation
            $depData = array(
                'awaMemId' => $_POST['awaMemId'],
                'name' => $_POST['dep3Name'],
                'relationship' => $_POST['dep3Rel'],
                'birthday' => htmlspecialchars($_POST['dep3Birthday'])
            );
            $this->model->editSaveDep($depData);
        }
        if (!($_POST['dep4Name']) == "") {//adding dep4 infromation
            $depData = array(
                'awaMemId' => $_POST['awaMemId'],
                'name' => $_POST['dep4Name'],
                'relationship' => $_POST['dep4Rel'],
                'birthday' => htmlspecialchars($_POST['dep4Birthday'])
            );
            $this->model->editSaveDep($depData);
        }
        if (!($_POST['dep5Name']) == "") {//adding dep5 infromation
            $depData = array(
                'awaMemId' => $_POST['awaMemId'],
                'name' => $_POST['dep5Name'],
                'relationship' => $_POST['dep5Rel'],
                'birthday' => htmlspecialchars($_POST['dep5Birthday'])
            );
            $this->model->editSaveDep($depData);
        }
        if (!($_POST['dep6Name']) == "") {//adding dep6 infromation
            $depData = array(
                'awaMemId' => $_POST['awaMemId'],
                'name' => $_POST['dep6Name'],
                'relationship' => $_POST['dep6Rel'],
                'birthday' => htmlspecialchars($_POST['dep6Birthday'])
            );
            $this->model->editSaveDep($depData);
        }
        if (!($_POST['dep7Name']) == "") {//adding dep7 infromation
            $depData = array(
                'awaMemId' => $_POST['awaMemId'],
                'name' => $_POST['dep7Name'],
                'relationship' => $_POST['dep7Rel'],
                'birthday' => htmlspecialchars($_POST['dep7Birthday'])
            );
            $this->model->editSaveDep($depData);
        }
        if (!($_POST['dep8Name']) == "") {//adding dep8 infromation
            $depData = array(
                'awaMemId' => $_POST['awaMemId'],
                'name' => $_POST['dep8Name'],
                'relationship' => $_POST['dep8Rel'],
                'birthday' => htmlspecialchars($_POST['dep8Birthday'])
            );
            $this->model->editSaveDep($depData);
        }
        if (!($_POST['dep9Name']) == "") {//adding dep9 infromation
            $depData = array(
                'awaMemId' => $_POST['awaMemId'],
                'name' => $_POST['dep9Name'],
                'relationship' => $_POST['dep9Rel'],
                'birthday' => htmlspecialchars($_POST['dep9Birthday'])
            );
            $this->model->editSaveDep($depData);
        }
        if (!($_POST['dep10Name']) == "") {//adding dep10 infromation
            $depData = array(
                'awaMemId' => $_POST['awaMemId'],
                'name' => $_POST['dep10Name'],
                'relationship' => $_POST['dep10Rel'],
                'birthday' => htmlspecialchars($_POST['dep10Birthday'])
            );
            $this->model->editSaveDep($depData);
        }
//        $this->view->render('awamangala/updateMember'); //sending paramiters to View() at lib/view.php
        header('location: ' . URL . 'awamangala/updateMember');
    }

    function searchId() {//for updating a member
//        echo 'test'; die;
        if (isset($_POST['awaMemId'])) {
            $awaMemId = htmlspecialchars($_POST['awaMemId']);
//            echo $awaMemId; die;
            $this->model->ajaxSearchId($awaMemId);
        } else {
            return FALSE;
        }
    }
    
    function searchPayments() {//for updating a member
//        echo 'test'; die;
        if (isset($_POST['awaMemId'])) {
            $awaMemId = htmlspecialchars($_POST['awaMemId']);
//            echo $awaMemId; die;
            $this->model->ajaxSearchPayments($awaMemId);
        } else {
            return FALSE;
        }
    }
    
    function searchFines() {//for updating a member
//        echo 'test'; die;
        if (isset($_POST['awaMemId'])) {
            $awaMemId = htmlspecialchars($_POST['awaMemId']);
//            echo $awaMemId; die;
            $this->model->ajaxSearchFines($awaMemId);
        } else {
            return FALSE;
        }
    }
    
    function resetPassword() {//for updating a member

        if (isset($_POST['awaMemId'])) {
            $awaMemId = htmlspecialchars($_POST['awaMemId']);
//            echo $awaMemId; die;
            $this->model->ajaxResetPassword($awaMemId);
        } else {
            return FALSE;
        }
    }

    function searchDiv() {
//        echo 'test'; die;
        if (isset($_POST['division'])) {
            $division = htmlspecialchars($_POST['division']);
//            echo $division; die;
            $this->model->ajaxSearchDiv($division);
        } else {
            return FALSE;
        }
    }

    function createPayments($paymentType) {
        $payments = json_decode(stripslashes($_POST['data'])); //getting posted data
        $this->model->ajaxPayments($payments,$paymentType);
    }
    
    function createFines() {
        $fines = json_decode(stripslashes($_POST['data'])); //getting posted data
        $this->model->ajaxFines($fines);
    }
    
    function createExtraFundsDue() {
        $extraFunds = json_decode(stripslashes($_POST['data'])); //getting posted data
        $this->model->ajaxExtraFundsDue($extraFunds);
    }
    
    function createAttendance($attendanceType) {
//        echo 'date';die;
//        $date=$_POST['date'];
        $date = json_decode(stripslashes($_POST['date'])); //getting posted date
        $attendance = json_decode(stripslashes($_POST['data'])); //getting posted data
        $this->model->ajaxAttendance($date,$attendance, $attendanceType);
    }
    function createFinesAndPayments($catagory) {
//        echo $catagory;die;
//        $date='2017-08-01';
        $date = (stripslashes($_POST['date'])); //getting posted date
        $amount = (stripslashes($_POST[$catagory])); //getting posted data
//        $attendance = json_decode(stripslashes($_POST['data'])); //getting posted data
        $this->model->ajaxCreateFinesAndPayments($date, $catagory, $amount);
    }

    function searchJobsMem() {
//        echo 'test'; die;
        if (isset($_POST['dethMemId'])) {
            $dethMemId = htmlspecialchars($_POST['dethMemId']);
//            echo $dethMemId; die;
            $this->view->jobsList = $this->model->searchJobs($dethMemId);
//             $this->view->funJobsList = $this->model->searchJobsFunaral($dethMemId);
            $this->view->render('awamangala/jobs');
//             $this->view->jobsList = $this->model->jobsList( 0);
        } else {
            return FALSE;
        }
    }

    function searchOfficers() {
//        echo 'test'; die;
        if (isset($_POST['year'])) {
            $year = htmlspecialchars($_POST['year']);
//            echo $year; die;
//            
            $this->view->officerList = $this->model->searchOfficers($year);
            $this->view->render('awamangala/officers'); //sending paramiters to View() at lib/view.php
        } else {
            return FALSE;
        }
    }

    function searchDeths() {
//        echo 'test'; die;
        if (isset($_POST['year'])) {
            $year = htmlspecialchars($_POST['year']);
//            echo $division; die;
//            
            $this->view->dethsList = $this->model->dethsList($year);
            $this->view->render('awamangala/deths'); //sending paramiters to View() at lib/view.php
        } else {
            return FALSE;
        }
    }

    function create() {
//        echo  $_POST['awaMemId']; die;
        $memData = array(//adding member main details
            'joinedDate' => $_POST['joinedDate'],
            'awaMemId' => $_POST['awaMemId'],
            'name' => htmlspecialchars($_POST['name']),
            'address' => htmlspecialchars($_POST['address']),
            'address' => htmlspecialchars($_POST['address']),
            'email' => htmlspecialchars($_POST['email']),
            'area' => htmlspecialchars($_POST['area']),
            'resTel' => htmlspecialchars($_POST['resTel']),
            'mobTel' => htmlspecialchars($_POST['mobTel']),
            'birthday' => htmlspecialchars($_POST['birthday']),
            'nic' => htmlspecialchars($_POST['nic']),
        );
        $this->model->createMember($memData);

        if ($_POST['exPayRu'] > 0) {//adding extra paying member in expay table
            $exPay = array(
                'exPay' => $_POST['exPayRu'],
                'awaMemId' => $_POST['awaMemId']);
            $this->model->exPay($exPay);
        }

        if (!($_POST['repRel']) == "") {//adding rep infromation
            $repData = array(
                'awaMemId' => $_POST['awaMemId'],
                'name' => $_POST['repName'],
                'repRel' => $_POST['repRel'],
                'birthday' => htmlspecialchars($_POST['repBirthday'])
            );
            $this->model->createRep($repData);
        }
        if (!($_POST['dep2Rel']) == "") {//adding dep2 infromation
            $depData = array(
                'awaMemId' => $_POST['awaMemId'],
                'name' => $_POST['dep2Name'],
                'relationship' => $_POST['dep2Rel'],
                'birthday' => htmlspecialchars($_POST['dep2Birthday'])
            );
            $this->model->createDep($depData);
        }
        if (!($_POST['dep3Rel']) == "") {//adding dep3 infromation
            $depData = array(
                'awaMemId' => $_POST['awaMemId'],
                'name' => $_POST['dep3Name'],
                'relationship' => $_POST['dep3Rel'],
                'birthday' => htmlspecialchars($_POST['dep3Birthday'])
            );
            $this->model->createDep($depData);
        }
        if (!($_POST['dep4Rel']) == "") {//adding dep4 infromation
            $depData = array(
                'awaMemId' => $_POST['awaMemId'],
                'name' => $_POST['dep4Name'],
                'relationship' => $_POST['dep4Rel'],
                'birthday' => htmlspecialchars($_POST['dep4Birthday'])
            );
            $this->model->createDep($depData);
        }
        if (!($_POST['dep5Rel']) == "") {//adding dep5 infromation
            $depData = array(
                'awaMemId' => $_POST['awaMemId'],
                'name' => $_POST['dep5Name'],
                'relationship' => $_POST['dep5Rel'],
                'birthday' => htmlspecialchars($_POST['dep5Birthday'])
            );
            $this->model->createDep($depData);
        }
        if (!($_POST['dep6Rel']) == "") {//adding dep6 infromation
            $depData = array(
                'awaMemId' => $_POST['awaMemId'],
                'name' => $_POST['dep6Name'],
                'relationship' => $_POST['dep6Rel'],
                'birthday' => htmlspecialchars($_POST['dep6Birthday'])
            );
            $this->model->createDep($depData);
        }
        if (!($_POST['dep7Rel']) == "") {//adding dep7 infromation
            $depData = array(
                'awaMemId' => $_POST['awaMemId'],
                'name' => $_POST['dep7Name'],
                'relationship' => $_POST['dep7Rel'],
                'birthday' => htmlspecialchars($_POST['dep7Birthday'])
            );
            $this->model->createDep($depData);
        }
        if (!($_POST['dep8Rel']) == "") {//adding dep8 infromation
            $depData = array(
                'awaMemId' => $_POST['awaMemId'],
                'name' => $_POST['dep8Name'],
                'relationship' => $_POST['dep8Rel'],
                'birthday' => htmlspecialchars($_POST['dep8Birthday'])
            );
            $this->model->createDep($depData);
        }
        if (!($_POST['dep9Rel']) == "") {//adding dep9 infromation
            $depData = array(
                'awaMemId' => $_POST['awaMemId'],
                'name' => $_POST['dep9Name'],
                'relationship' => $_POST['dep9Rel'],
                'birthday' => htmlspecialchars($_POST['dep9Birthday'])
            );
            $this->model->createDep($depData);
        }
        if (!($_POST['dep10Rel']) == "") {//adding dep10 infromation
            $depData = array(
                'awaMemId' => $_POST['awaMemId'],
                'name' => $_POST['dep10Name'],
                'relationship' => $_POST['dep10Rel'],
                'birthday' => htmlspecialchars($_POST['dep10Birthday'])
            );
            $this->model->createDep($depData);
        }
        header('location: ' . URL . 'awamangala');
//        if (isset($message['success']) && $message['success']) {
//            header('location: ' . URL . 'diesel?success');
//        } else {
//            header('location: ' . URL . 'diesel?error');
//        }
    }

    function createReleasedMem() {
//        echo  $_POST['awaMemId']; die;
        $memData = array(//adding member main details
//            'date' => $_POST['date'],
            'awaMemId' => $_POST['awaMemId'],
//            'name' => htmlspecialchars($_POST['name']),
//            'address' => htmlspecialchars($_POST['address']),
//            'address' => htmlspecialchars($_POST['address']),
//            'email' => htmlspecialchars($_POST['email']),
            'area' => htmlspecialchars($_POST['area']),
            'reson' => htmlspecialchars($_POST['reson']),
//            'mobTel' => htmlspecialchars($_POST['mobTel']),
//            'birthday' => htmlspecialchars($_POST['birthday']),
//            'nic' => htmlspecialchars($_POST['nic']),
        );
        $this->model->createReleasedMem($memData);
        header('location: ' . URL . 'awamangala/addReleasedMember');
    }

    function createOfficer() {
//        echo  $_POST['awaMemId']; die;
        $officerData = array(//adding officer main details
            'year' => $_POST['year'],
            'awaMemId' => $_POST['awaMemId'],
            'rank' => htmlspecialchars($_POST['rank']),
        );
        $this->model->createOfficer($officerData);
        header('location: ' . URL . 'awamangala/officers');
    }

    function createDeths() {
//        echo  $_POST['awaMemId']; die;
        $dethsData = array(//adding member main details
            'date' => $_POST['date'],
            'awaMemId' => $_POST['awaMemId'],
            'name' => htmlspecialchars($_POST['name']),
            'area' => htmlspecialchars($_POST['area']),
//            'address' => htmlspecialchars($_POST['address']),
//            'email' => htmlspecialchars($_POST['email']),
//            'rank' => htmlspecialchars($_POST['rank']),
//            'reson' => htmlspecialchars($_POST['reson']),
//            'mobTel' => htmlspecialchars($_POST['mobTel']),
//            'birthday' => htmlspecialchars($_POST['birthday']),
//            'nic' => htmlspecialchars($_POST['nic']),
        );
        $this->model->createDeths($dethsData);
        header('location: ' . URL . 'awamangala/editMember/' . $_POST['awaMemId']);
    }

    function cemJobsRemove($removeMemId, $reson) {//reseting temp released members on today
//        echo  $removeMemId; 
//        echo  $reson; die;
        $jobsRemoveData = array(//adding member main details
//            'date' => date(today, Y/m/d),
            'date' => date("Y/m/d"),
            'awaMemId' => $removeMemId,
//            'name' => htmlspecialchars($_POST['name']),
//            'area' => htmlspecialchars($_POST['area']),
//            'address' => htmlspecialchars($_POST['address']),
//            'email' => htmlspecialchars($_POST['email']),
//            'rank' => htmlspecialchars($_POST['rank']),
            'reson' => $reson,
//            'mobTel' => htmlspecialchars($_POST['mobTel']),
//            'birthday' => htmlspecialchars($_POST['birthday']),
//            'nic' => htmlspecialchars($_POST['nic']),
        );
        $this->model->createJobsRemove($jobsRemoveData);
        header('location: ' . URL . 'awamangala/jobs');
    }

//    function addColumn() {
////        echo 'columns'; die;
//        for($i=6; $i<300; $i++){
//         $this->model->addColumn('meetingattendance', $i, 'tinyint(1)');
//        }
//    }
    
    function deleteId() {
        $delData = array(
            'awaMemId' => $_POST['memId'],
            'name' => $_POST['name'],
            'deletedDate' => $_POST['deletedDate'],
            'reson' => $_POST['reson'],
            'detail' => $_POST['detail']
        );
//             print_r($delData); die;
        if ($delData['reson'] <> 'වැරදි ඇතුලත් කිරීමක්') {//for not keeping records
//             print_r($delData); die;
            $this->model->createDeleted($delData);
        }
//         print_r($delData);
//         die;
        $this->model->deleteMem($_POST['memId']); //removing member
        $this->model->deleteRep($_POST['memId']); //removing representative
        $this->model->deleteDep($_POST['memId']); //removing dependants

        
            header('location: ' . URL . 'awamangala/deleteMember');
        
    }

    function deleteReleasedMem($awaMemId) {
//         $delData = array(
//                'awaMemId' => $_POST['memId'],
//                'name' => $_POST['name'],
//                'deletedDate' => $_POST['deletedDate'],
//                'reson' => $_POST['reson'],
//                'detail' => $_POST['detail']
//             );
////             print_r($delData); die;
//         if(!$delData['reson']=='වැරදි ඇතුලත් කිරීමක්'){
//         $this->model->createDeleted($delData);
//         }
//        echo $awaMemId; die;
        $message = $this->model->deleteReleasedMem($awaMemId); //removing released member
//         $this->model->deleteRep($_POST['memId']);//removing representative
//         $this->model->deleteDep($_POST['memId']);//removing dependants

        if (isset($message['success']) && $message['success']) {
            header('location: ' . URL . 'awamangala/releasedMember');
        }
    }

    function officerDelete($awaMemId) {
        $message = $this->model->officerDelete($awaMemId); //removing officer
//         $this->model->deleteRep($_POST['memId']);//removing representative
//         $this->model->deleteDep($_POST['memId']);//removing dependants

        if (isset($message['success']) && $message['success']) {
            header('location: ' . URL . 'awamangala/officers');
        }
    }

    function dethsDelete($awaMemId) {
        $message = $this->model->dethsDelete($awaMemId); //removing officer
//         $this->model->deleteRep($_POST['memId']);//removing representative
//         $this->model->deleteDep($_POST['memId']);//removing dependants

        if (isset($message['success']) && $message['success']) {
            header('location: ' . URL . 'awamangala/deths');
        }
    }
    
    function deleteMeetingAttendanceDate($date) {
        $message = $this->model->deleteMeetingAttendanceDate($date); //removing officer
            header('location: ' . URL . 'awamangala/viewMeetingAttendance');
    }

}
