<?php

class awamangala_model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function releasedMemList() {
        return $this->db->select('SELECT * FROM released', array());
    }

    public function memberList() {
        return $this->db->select('SELECT awaMemId FROM members', array());
    }

    public function meetingDateList() {
        return $this->db->select('SELECT date FROM meetingattendance ORDER BY date', array());
    }

    public function lastMonthAttendanceList() {
        return $this->db->select('SELECT attendance FROM meetingattendance ORDER BY date DESC LIMIT 1 ', array());
    }

    public function twoMonthsAgoAttendanceList() {
        return $this->db->select('SELECT attendance FROM meetingattendance ORDER BY date DESC LIMIT 1, 1 ', array());
    }

    public function threeMonthsAgoAttendanceList() {
        return $this->db->select('SELECT attendance FROM meetingattendance ORDER BY date DESC LIMIT 2, 1 ', array());
    }

    public function meetingAttendanceList() {
        return $this->db->select('SELECT * FROM meetingattendance ORDER BY date DESC LIMIT 1 ', array());
    }

    public function meetingAttendanceListDate($date) {
        return $this->db->select('SELECT * FROM meetingattendance WHERE date=:date  LIMIT 1 ', array('date' => $date));
    }
    
    public function finesList($awaMemId) {
        return $this->db->select('SELECT * FROM finesanddues WHERE awaMemId=:awaMemId  ORDER BY date DESC  ', array(':awaMemId' => $awaMemId));
    }
    
    public function fineTypes() {
        return $this->db->select('SELECT distinct reson FROM finesandpayments   ORDER BY date DESC  ', array());
    }
    
    public function finesAndPaymentsList() {
         $membership = $this->db->select('SELECT * FROM finesandpayments  WHERE reson=:reson ORDER BY date DESC LIMIT 1' , array(':reson' => 'සාමාජික මුදල'));
        $attendance = $this->db->select('SELECT * FROM finesandpayments  WHERE reson=:reson ORDER BY date DESC LIMIT 1' , array(':reson' => 'මහා සභාවට නොපැමිනීම'));
        $comWorks = $this->db->select('SELECT * FROM finesandpayments  WHERE reson=:reson ORDER BY date DESC LIMIT 1' , array(':reson' => 'ශ්‍රම දානයට සහභාගී නොවීම්'));
        $cemetry = $this->db->select('SELECT * FROM finesandpayments  WHERE reson=:reson ORDER BY date DESC LIMIT 1' , array(':reson' => 'සුසාන භූමියේ කටයුතු වලට සහභාගී නොවීම'));
        $funaral = $this->db->select('SELECT * FROM finesandpayments  WHERE reson=:reson ORDER BY date DESC LIMIT 1' , array(':reson' => 'අවමංගල්‍යට සහභාගී නොවීම'));
        $misbehaviour = $this->db->select('SELECT * FROM finesandpayments  WHERE reson=:reson ORDER BY date DESC LIMIT 1' , array(':reson' => 'ව්‍යවස්ථාව උල්ලංගනය'));
        
        $result[]=array("membership"=>$membership, 'attendance'=>$attendance, 'comWorks'=>$comWorks, 'cemetry'=>$cemetry, 'funaral'=>$funaral, 'misbehaviour'=>$misbehaviour);
        return $result;
    }

    function createMember($memData) {
//    print_r($memData);die;
        $message = $this->db->insert('members', array(
            'joinedDate' => $memData['joinedDate'],
            'awaMemId' => $memData['awaMemId'],
            'name' => $memData['name'],
            'address' => $memData['address'],
//            'address' => $memData['address'],
            'email' => $memData['email'],
            'area' => $memData['area'],
            'resTel' => $memData['resTel'],
            'mobTel' => $memData['mobTel'],
            'birthday' => $memData['birthday'],
            'nic' => $memData['nic'],
            'password' => Hash::create('md5', '1234', HASH_PASSWORD_KEY),
        ));
        return $message;
    }

    function createReleasedMem($memData) {
//    print_r($memData);die;
        $message = $this->db->insert('released', array(
//            'date' => $memData['date'],
            'awaMemId' => $memData['awaMemId'],
//            'name' => $memData['name'],
//            'address' => $memData['address'],
//            'address' => $memData['address'],
//            'email' => $memData['email'],
            'area' => $memData['area'],
            'reson' => $memData['reson']
//            'mobTel' => $memData['mobTel'],
//            'birthday' => $memData['birthday'],
//            'nic' => $memData['nic'],
        ));
        return $message;
    }

    function exPay($exPay) {
//    echo $exPay['exPay'] ;die;
        $message = $this->db->insert('extrapay', array(
            'awaMemId' => $exPay['awaMemId'],
            'amount' => $exPay['exPay']
        ));
        return $message;
    }

    function createRep($repData) {
//    print_r($repData);die;
        $message = $this->db->insert('representatives', array(
            'awaMemId' => $repData['awaMemId'],
            'name' => $repData['name'],
            'relationship' => $repData['repRel'],
            'birthday' => $repData['birthday'],
        ));
        return $message;
    }

    function createDep($depData) {
//    print_r($depData);die;
        $message = $this->db->insert('dependants', array(
            'awaMemId' => $depData['awaMemId'],
            'name' => $depData['name'],
            'relationship' => $depData['relationship'],
            'birthday' => $depData['birthday'],
        ));
        return $message;
    }

    function createOfficer($officerData) {
//    print_r($officerData);die;
        $message = $this->db->insert('officers', array(
            'awaMemId' => $officerData['awaMemId'],
            'rank' => $officerData['rank'],
            'year' => $officerData['year'],
            'password' => Hash::create('md5', '4321', HASH_PASSWORD_KEY),
        ));
        return $message;
    }

    function searchId($awaMemId) {//getting member Id infor
//     echo $awaMemId;die;
//     $result = $this->db->select('SELECT * FROM members WHERE  awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
        $memResult = $this->db->select('SELECT * FROM members  WHERE awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
        $repResult = $this->db->select('SELECT name, relationship, birthday FROM representatives WHERE awaMemId=:awaMemId', array(':awaMemId' => $awaMemId));
        $depResult = $this->db->select('SELECT name, relationship, birthday FROM dependants WHERE  awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
        $exResult = $this->db->select('SELECT amount FROM extrapay WHERE awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
        $result[] = array("mem" => $memResult, "rep" => $repResult, "dep" => $depResult, "expay" => $exResult);
//        print_r($result);die;
//        $data=  utf8_encode($result);
//        echo json_encode($result);
//        echo utf8_encode($result);
        return $result;
    }
    function ajaxSearchId($awaMemId) {//getting member Id infor
//     echo $awaMemId;die;
//     $result = $this->db->select('SELECT * FROM members WHERE  awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
        $memResult = $this->db->select('SELECT * FROM members  WHERE awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
        $repResult = $this->db->select('SELECT name, relationship, birthday FROM representatives WHERE awaMemId=:awaMemId', array(':awaMemId' => $awaMemId));
        $depResult = $this->db->select('SELECT name, relationship, birthday FROM dependants WHERE  awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
        $exResult = $this->db->select('SELECT amount FROM extrapay WHERE awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
        $result[] = array("mem" => $memResult, "rep" => $repResult, "dep" => $depResult, "expay" => $exResult);
//        print_r($result);die;
//        $data=  utf8_encode($result);
        echo json_encode($result);
//        echo utf8_encode($result);
    }
    
    function searchPayments($awaMemId) {//getting pastpayments for a user payment search
     $paymentsResult = $this->db->select('SELECT * FROM pastpayments WHERE awaMemId = :awaMemId  ORDER BY date DESC' , array(':awaMemId' => $awaMemId));
     return $paymentsResult;
    }
    
    function ajaxSearchPayments($awaMemId) {//getting pastpayments for treasure payment search
//     echo $awaMemId;die;
//     $result = $this->db->select('SELECT * FROM members WHERE  awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
        $memResult = $this->db->select('SELECT * FROM members  WHERE awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
//        $dueResult = $this->db->select('SELECT date, amount FROM duepayments WHERE awaMemId=:awaMemId', array(':awaMemId' => $awaMemId));
//        $membershipResult = $this->db->select('SELECT date, amount FROM membershippayments WHERE  awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
//        $shareResult = $this->db->select('SELECT date, amount FROM sharepayments WHERE awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
        $paymentsResult = $this->db->select('SELECT * FROM pastpayments WHERE awaMemId = :awaMemId  ORDER BY date DESC' , array(':awaMemId' => $awaMemId));
//        $result[] = array("mem" => $memResult, "due" => $dueResult, "mem" => $membershipResult, "share" => $shareResult);
        $result[] = array("mem" => $memResult, "payments" => $paymentsResult);
//        print_r($result);die;
//        $data=  utf8_encode($result);
        echo json_encode($result);
        
//        echo utf8_encode($result);
    }
    function ajaxSearchFines($awaMemId) {//getting pastpayments for treasure payment search
//     echo $awaMemId;die;
//     $result = $this->db->select('SELECT * FROM members WHERE  awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
        $memResult = $this->db->select('SELECT * FROM members  WHERE awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
//        $dueResult = $this->db->select('SELECT date, amount FROM duepayments WHERE awaMemId=:awaMemId', array(':awaMemId' => $awaMemId));
//        $membershipResult = $this->db->select('SELECT date, amount FROM membershippayments WHERE  awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
//        $shareResult = $this->db->select('SELECT date, amount FROM sharepayments WHERE awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
        $finesResult = $this->db->select('SELECT * FROM finesanddues WHERE awaMemId = :awaMemId  ORDER BY date DESC' , array(':awaMemId' => $awaMemId));
//        $result[] = array("mem" => $memResult, "due" => $dueResult, "mem" => $membershipResult, "share" => $shareResult);
        $result[] = array("mem" => $memResult, "fines" => $finesResult);
//        print_r($result);die;
//        $data=  utf8_encode($result);
        echo json_encode($result);
        
//        echo utf8_encode($result);
    }

    function ajaxResetPassword($awaMemId) {//getting member Id infor
//     echo $awaMemId;die;
//     $result = $this->db->select('SELECT * FROM members WHERE  awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
//        $memResult = $this->db->select('SELECT * FROM members  WHERE awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
//        $repResult = $this->db->select('SELECT name, relationship, birthday FROM representatives WHERE awaMemId=:awaMemId', array(':awaMemId' => $awaMemId));
//        $depResult = $this->db->select('SELECT name, relationship, birthday FROM dependants WHERE  awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
//        $exResult = $this->db->select('SELECT amount FROM extrapay WHERE awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
//        $result[] = array("mem" => $memResult, "rep" => $repResult, "dep" => $depResult, "expay" => $exResult);
//        print_r($result);die;
//        $data=  utf8_encode($result);
        $postData = array(
            'password' => Hash::create('md5', '1234', HASH_PASSWORD_KEY)
        );
//             $officerData['rank']="'".$officerData['rank']."'";
        $result = $this->db->update('members', $postData, "awaMemId=$awaMemId");
//           print_r($message); die;
//        return $message;
        echo json_encode($result);
//        echo utf8_encode($result);
    }

    function ajaxPayments($payments, $paymentType) {//getting membership payments infor
        $count = count($payments);
        for ($i = 0; $i < $count; $i++) {
            $message = $this->db->insert($paymentType, array(
                'date' => $payments[$i][0],
                'awaMemId' => $payments[$i][1],
                'amount' => $payments[$i][2]
            ));
        };
        return $message;
    }

    function ajaxFines($fines) {//getting fines infor
        $count = count($fines);
        for ($i = 0; $i < $count; $i++) {
            $message = $this->db->insert(fines, array(
                'date' => $fines[$i][0],
                'awaMemId' => $fines[$i][1],
                'reson' => $fines[$i][2],
                'amount' => $fines[$i][3]
            ));
        };
        return $message;
    }

    function ajaxExtraFundsDue($extraFunds) {//getting extra funds due infor
        $count = count($extraFunds);
        for ($i = 0; $i < $count; $i++) {
            $message = $this->db->insert(extrafundsdue, array(
                'date' => $extraFunds[$i][0],
                'awaMemId' => $extraFunds[$i][1],
//                'reson' => $fines[$i][2],
                'amount' => $extraFunds[$i][2]
            ));
        };
        return $message;
    }

    function ajaxAttendance($date, $attendance, $attendanceType) {//
        $message = $this->db->insert($attendanceType, array(
            'date' => $date,
            'attendance' => serialize($attendance)//seralizing array data
        ));
        return $message;
    }
    
    function ajaxCreateFinesAndPayments($date, $catagory, $amount) {//getting finesAndpayments infor
        $message = $this->db->insert('finesandpayments', array(
            'date' => $date,
            'reson' => $catagory,
            'amount' => $amount,
        ));
        $membership = $this->db->select('SELECT * FROM finesandpayments  WHERE reson=:reson ORDER BY date DESC LIMIT 1' , array(':reson' => 'membership'));
        $attendance = $this->db->select('SELECT * FROM finesandpayments  WHERE reson=:reson ORDER BY date DESC LIMIT 1' , array(':reson' => 'attendance'));
        $comWorks = $this->db->select('SELECT * FROM finesandpayments  WHERE reson=:reson ORDER BY date DESC LIMIT 1' , array(':reson' => 'comWorks'));
        $cemetry = $this->db->select('SELECT * FROM finesandpayments  WHERE reson=:reson ORDER BY date DESC LIMIT 1' , array(':reson' => 'cemetry'));
        $funaral = $this->db->select('SELECT * FROM finesandpayments  WHERE reson=:reson ORDER BY date DESC LIMIT 1' , array(':reson' => 'funaral'));
        
        $result[]=array("membership"=>$membership, 'attendance'=>$attendance, 'comWorks'=>$comWorks, 'cemetry'=>$cemetry, 'funaral'=>$funaral);
        echo json_encode($result);
    }

    function lastJobMember() {
        $result = $this->db->select('SELECT awaMemId FROM cemetry  ORDER BY date DESC LIMIT 1', array()); //getting last jobs member
        $lastMemId = $result[0]['awaMemId'];
        return $lastMemId;
    }

    function memArea($awaMemId) {
        $result = $this->db->select('SELECT area FROM members  WHERE awaMemId=:awaMemId', array(':awaMemId' => $awaMemId)); //getting  member area
        if ($result) {
            $memArea = $result[0]['area'];
            return $memArea;
        } else {
            return false;
        }
    }

    function searchJobs($dethMemId) {//getting deth member Id infor
        $lastMemId = $this->lastJobMember();
        $dethMemArea = $this->memArea($dethMemId);
        $today = date('Y-m-d');
        //getting last time released members
        $lastReleased = $this->db->select('SELECT  members.awaMemId, members.name FROM members join tempreleased   WHERE tempreleased.awaMemId=members.awaMemId AND tempreleased.date < :date', array(':date' => $today));
//        print_r($lastReleased); die;
        $noOfReleased = count($lastReleased);
        $requiredNewMem = 15 - $noOfReleased;
//        $val=settype($requiredNewMem, "string");
//        echo gettype($requiredNewMem); die;
//getting members who are not in released members, temp released members, deth member and deth member area committee members
        $cemJobsResult = $this->db->select('SELECT * FROM woretemp   WHERE awaMemId > :lastMemId AND awaMemId<>:dethMemId AND NOT EXISTS (SELECT awaMemId FROM committeearea where woretemp.awaMemId=committeearea.awaMemId AND committeearea.area<>:dethMemArea)  ORDER BY awaMemId ASC LIMIT 0,' . $requiredNewMem, array(':lastMemId' => $lastMemId, ':dethMemId' => $dethMemId, ':dethMemArea' => $dethMemArea));
        $finalCemJobsResult = array_merge($lastReleased, $cemJobsResult);
//        echo "<pre>";
//        print_r($finalCemJobsResult); 
//        echo "</pre>";die;
        $funJobsResult = $this->db->select('SELECT * FROM woretemp   WHERE awaMemId > :lastMemId AND awaMemId<>:dethMemId AND NOT EXISTS (SELECT awaMemId FROM committeearea where woretemp.awaMemId=committeearea.awaMemId AND committeearea.area<>:dethMemArea)  ORDER BY awaMemId ASC LIMIT ' . $requiredNewMem . ' , 15', array(':lastMemId' => $lastMemId, ':dethMemId' => $dethMemId, ':dethMemArea' => $dethMemArea));
      $finalJobsResult = array($finalCemJobsResult, $funJobsResult);
        return($finalJobsResult);
    }

    function searchJobsFunaral($dethMemId) {//getting member Id infor
        $jobsResult = $this->db->select('SELECT * FROM jobsmem  WHERE awaMemId > :awaMemId ORDER BY awaMemId ASC LIMIT 15', array(':awaMemId' => $dethMemId));
        return($jobsResult);
    }

    function searchOfficers($year) {//getting member Id infor
        $officerResult = $this->db->select('SELECT mem.name, mem. area, mem.awaMemId, off.rank, off.year FROM members AS mem JOIN officers AS off ON mem.awaMemId=off.awaMemId  WHERE off.year = :year', array(':year' => $year));
        return ($officerResult);
    }

    public function officerList($year) {
//        echo $year ;die;
        $officerList = $this->db->select('SELECT mem.name, mem. area, mem.awaMemId, of.rank, of.year FROM members AS mem JOIN officers AS of ON mem.awaMemId=of.awaMemId  WHERE of.year = :year', array(':year' => $year));
        return $officerList;
    }

    public function dethsList($year) {
//        echo ('%' . $year. '%') ;die;
        $dethsList = $this->db->select('SELECT * FROM deths  WHERE date like :year', array(':year' => '%' . $year . '%'));
//        print_r($officerList); die;
        $result[]=array('dethList'=>$dethsList, 'year'=>$year);
        return $result;
    }

    function ajaxSearchDiv($division) {//getting divisional members
        switch ($division) {
            case '1':
                $division = 'අලුත්වතු ගංගොඩ';
                break;
            case '2':
                $division = 'කහඹිලියාව';
                break;
            case '3':
                $division = 'ගොඩවිටිගෙදර';
                break;
            case '4':
                $division = 'කොලොන්ගස්යාය';
                break;
            case '5':
                $division = 'මැද ගංගොඩ';
                break;
            case '6':
                $division = 'මහවතු ගංගොඩ 1';
                break;
            case '7':
                $division = 'මහවතු ගංගොඩ 2';
                break;
            case '8':
                $division = 'වලව් ගංගොඩ 1';
                break;
            case '9':
                $division = 'වලව්  ගංගොඩ 2';
                break;
            case '10':
                $division = 'වැව ඉහළ';
                break;
        }
//     echo $awaMemId;die;
//     $result = $this->db->select('SELECT * FROM members WHERE  awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
        $result = $this->db->select('SELECT awaMemId, name, resTel, mobTel FROM members  WHERE area = :area', array(':area' => $division));
//        $repResult = $this->db->select('SELECT name, relationship, birthday FROM representatives WHERE awaMemId=:awaMemId', array(':awaMemId' => $awaMemId));
//        $depResult = $this->db->select('SELECT name, relationship, birthday FROM dependants WHERE  awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
//        $exResult = $this->db->select('SELECT amount FROM extrapay WHERE awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
//       $result=$memResul
//        print_r($result);die;
//        $data=  utf8_encode($result);
        echo json_encode($result);
//        echo utf8_encode($result);
    }

    function editMember($awaMemId) {//getting member details for editing
        $memResult = $this->db->select('SELECT * FROM members  WHERE awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
        $repResult = $this->db->select('SELECT name, relationship, birthday FROM representatives WHERE awaMemId=:awaMemId', array(':awaMemId' => $awaMemId));
        $depResult = $this->db->select('SELECT name, relationship, birthday FROM dependants WHERE  awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
        $exResult = $this->db->select('SELECT amount FROM extrapay WHERE awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
        $result[] = array("mem" => $memResult, "rep" => $repResult, "dep" => $depResult, "expay" => $exResult);
        return $result;
//       echo '<pre>';
//       print_r ($result); 
//       echo '</pre>';
//       die;
    }

    public function editSaveMem($memData) {
//           echo"<pre>";
//           print_r($memData);
//               echo"</pre>";
//           die;
        $postData = array(
            'joinedDate' => $memData['joinedDate'],
            'updatedDate' => $memData['updatedDate'],
            'awaMemId' => $memData['awaMemId'],
            'name' => $memData['name'],
            'address' => $memData['address'],
            'address' => $memData['address'],
            'email' => $memData['email'],
            'area' => $memData['area'],
            'resTel' => $memData['resTel'],
            'mobTel' => $memData['mobTel'],
            'birthday' => $memData['birthday'],
            'nic' => $memData['nic'],
        );
        $message = $this->db->update('members', $postData, "awaMemId={$memData['awaMemId']}");
        return $message;
    }

    function editSaveExPay($exPay) {
//    echo $exPay['exPay'] ;die;
        $postData = array(
            'awaMemId' => $exPay['awaMemId'],
            'amount' => $exPay['exPay']
        );
        $message = $this->db->update('extrapay', $postData, "awaMemId={$exPay['awaMemId']}");
        return $message;
    }

    function editSaveRep($repData) {
//    print_r($repData);die;
        $postData = array(
            'awaMemId' => $repData['awaMemId'],
            'name' => $repData['name'],
            'relationship' => $repData['repRel'],
            'birthday' => $repData['birthday'],
        );
        $message = $this->db->update('representatives', $postData, "awaMemId={$repData['awaMemId']}");
        return $message;
    }

    function deleteDep($awaMemId) {
//         $awaMemId=$depData['awaMemId'];
//        echo $awaMemId; die;
        $this->db->delete('dependants', "awaMemId=$awaMemId", 10);
    }

    function editSaveDep($depData) {

        $message = $this->db->insert('dependants', array(
            'awaMemId' => $depData['awaMemId'],
            'name' => $depData['name'],
            'relationship' => $depData['relationship'],
            'birthday' => $depData['birthday'],
        ));
//    print_r($depData);die;
//         $postData=array(
//            'awaMemId' => $depData['awaMemId'],
//            'name' =>  $depData['name'],
//            'relationship' =>$depData['relationship'],
//           'birthday' => $depData['birthday'],
//        );
//         print_r($postData);die;
//        $message = $this->db->update('dependants', $postData, "awaMemId={$depData['awaMemId']}");
        return $message;
//         print_r($postData);die;
//        $message = $this->db->update('dependants', $postData, "awaMemId={$depData['awaMemId']}");
//        return $message;
    }

    public function createDeleted($delData) {//recording deleted member infor
//        print_r($delData); die;
        $message = $this->db->insert('deleted', array(
            'awaMemId' => $delData['awaMemId'],
            'name' => $delData['name'],
            'deletedDate' => $delData['deletedDate'],
            'reson' => $delData['reson'],
            'detail' => $delData['detail'],
        ));
        return $message;
    }

    public function createDeths($dethsData) {//recording deleted member infor
//        print_r($dethsData);die;
        $message = $this->db->insert('deths', array(
            'awaMemId' => $dethsData['awaMemId'],
            'name' => $dethsData['name'],
            'date' => $dethsData['date'],
            'area' => $dethsData['area'],
//            'detail' => $delData['detail'],
        ));
        return $message;
    }

    public function createJobsRemove($jobsRemoveData) {//recording temp removed member infor
//        print_r($dethsData);die;
        $awaMemId = $jobsRemoveData['awaMemId'];
        $today = date('Y-m-d');
//        $this->db->delete('tempreleased', "awaMemId=$awaMemId AND date<'$today'", 1);//removing old released infor if again releasing the member
        $message = $this->db->insert('tempreleased', array(
            'awaMemId' => $jobsRemoveData['awaMemId'],
            'reson' => $jobsRemoveData['reson'],
            'date' => $jobsRemoveData['date'],
//            'area' => $dethsData['area'],
//            'detail' => $delData['detail'],
        ));
        return $message;
    }

    public function addColumn($table, $name, $type) {
//        echo $type; die;
//        if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {//checking for admin
        $message = $this->db->addColumn($table, $name, $type);
//        } else {//non admin users
//            $message = $this->db->delete('diesel', "dieselId=$dieselId AND serviceNumber='{$_SESSION['serviceNumber']}'");
//        }
        return $message;
    }

public function bankAccounts(){//serching bank acount details
    $message = $this->db->select('SELECT * FROM bankaccounts  WHERE awaMemId = :awaMemId', array(':awaMemId' => $awaMemId));
}

    public function deleteMem($awaMemId) {
//        if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {//checking for admin
        $message = $this->db->delete('members', "awaMemId=$awaMemId", 1);
//        } else {//non admin users
//            $message = $this->db->delete('diesel', "dieselId=$dieselId AND serviceNumber='{$_SESSION['serviceNumber']}'");
//        }
        return $message;
    }

    public function deleteRep($awaMemId) {
//        if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {//checking for admin
        $message = $this->db->delete('representatives', "awaMemId=$awaMemId", 1);
//        } else {//non admin users
//            $message = $this->db->delete('diesel', "dieselId=$dieselId AND serviceNumber='{$_SESSION['serviceNumber']}'");
//        }
        return $message;
    }

    public function deleteReleasedMem($awaMemId) {
//        if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {//checking for admin
        $message = $this->db->delete('released', "awaMemId=$awaMemId", 1);
//        } else {//non admin users
//            $message = $this->db->delete('diesel', "dieselId=$dieselId AND serviceNumber='{$_SESSION['serviceNumber']}'");
//        }
        return $message;
    }

    public function officerDelete($awaMemId) {
//        if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {//checking for admin
        $message = $this->db->delete('officers', "awaMemId=$awaMemId", 1);
//        } else {//non admin users
//            $message = $this->db->delete('diesel', "dieselId=$dieselId AND serviceNumber='{$_SESSION['serviceNumber']}'");
//        }
        return $message;
    }

    public function dethsDelete($awaMemId) {
//        if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {//checking for admin
        $message = $this->db->delete('deths', "awaMemId=$awaMemId", 1);
//        } else {//non admin users
//            $message = $this->db->delete('diesel', "dieselId=$dieselId AND serviceNumber='{$_SESSION['serviceNumber']}'");
//        }
        return $message;
    }

    public function deleteMeetingAttendanceDate($date) {
//        print_r($date); die;
        $message = $this->db->delete('meetingattendance', "date='$date'", 1);
//        print_r($message);die;
        return $message;
    }

    public function resetTempReleased() {//removing  temp released members on today
//        if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {//checking for admin
        $today = date("Y-m-d");
//        echo $today; die;
        $message = $this->db->delete('tempreleased', "date='$today'", 30);
//        print_r($message);die;
//        } else {//non admin users
//            $message = $this->db->delete('diesel', "dieselId=$dieselId AND serviceNumber='{$_SESSION['serviceNumber']}'");
//        }
        return $message;
    }

}
