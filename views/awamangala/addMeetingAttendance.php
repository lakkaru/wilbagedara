<div  id="container" class="row well">
    <table id="attendance" class="table  table-bordered ui-responsive table-hover ">
        <thead>
            <tr><th colspan="10">මහා සභාවට පැමිණීම ලකුණු කිරීම
                    <form method="post" id="attendanceForm" class="form-horizontal " action="<?php echo URL; ?>awamangala/createAttendance/meetingattendance" >
                        <span class="badge"> දිනය :- </span> <input id="date" type="text" class="datepicker" name="date" >
                        <span class="badge"> එකතුව :- </span><span id="total" ></span> 
                        <button id="addAttendance" type="button"onclick="" class="btn btn-info fr" style="">තොරතුරු පද්ධතියට ඇතුලු කරන්න</button></form></th></tr>
        </thead>
        <?php
//        unset($this->memberList[0]);
//$array = array_values($this->memberList); 
        $idArray = array();
//        $lastMonthAttendanceList = array();
//        $twoMonthsAgoAttendanceList = array();
//        $threeMonthsAgoAttendanceList = array();

        foreach ($this->memberList as $awaMemId) {//getting array with awaMemId key
            foreach ($awaMemId as $memId) {//removing key from array
                array_push($idArray, $memId); //creating values array
            }
        }
        if (!empty($this->lastMonthAttendanceList)) {
            $lastMonthAttendanceList = unserialize($this->lastMonthAttendanceList[0]['attendance']); //last month attendance ids
        } else {
            $lastMonthAttendanceList = [];
        }
//        foreach ($a as $awaMemId) {//getting array with key
//            foreach ($awaMemId as $memId) {//removing key from array
//                array_push($lastMonthAttendanceList, $awaMemId);//creating values array
//            }
//        }
        if (!empty($this->twoMonthsAgoAttendanceList)) {
            $twoMonthsAgoAttendanceList = unserialize($this->twoMonthsAgoAttendanceList[0]['attendance']); //beforelast month attendance ids
        } else {
            $twoMonthsAgoAttendanceList = [];
        }
        if (!empty($this->threeMonthsAgoAttendanceList)) {
            $threeMonthsAgoAttendanceList = unserialize($this->threeMonthsAgoAttendanceList[0]['attendance']); //before two months attendance ids
        } else {
            $threeMonthsAgoAttendanceList = [];
        }
//            foreach ($awaMemId as $memId) {//removing key from array
//                array_push($beforLastMonthAttendanceList, $memId);//creating values array
//            }
//        }
//        print_r($idArray); die;

        $lastMonthAbsent = array_diff($idArray, $lastMonthAttendanceList);
//        print_r($lastMonthAbsent);die;
        $twoMonthsAgoAbsent = array_diff($idArray, $twoMonthsAgoAttendanceList);
//        print_r($twoMonthsAgoAbsent);die;
        $threeMonthsAgoAbsent = array_diff($idArray, $threeMonthsAgoAttendanceList);
//        print_r($threeMonthsAgoAbsent); die;

        $twoMonthsConcecative = array_intersect($lastMonthAbsent, $twoMonthsAgoAbsent);
//        print_r($twoMonthsConcecative); die;
        $threeMonthsConcecative = array_intersect($lastMonthAbsent, $twoMonthsAgoAbsent, $threeMonthsAgoAbsent);
//        print_r($threeMonthsConcecative);die;
//print_r($twoMonthsConcecative);die;
//        print_r($idArray);die;



        for ($i = 1; $i < 31; $i++) {
            echo('<tr>');
            $num = $i;
            for ($x = 0; $x < 10; $x++) {
                if (in_array($num, $threeMonthsConcecative)) {
                    echo('<td class="threeAbsent">');
                } else  if (in_array($num, $twoMonthsConcecative)) {
                        echo('<td class="twoAbsent">');
                    } else {
                        echo ("<td>");
                    }
//                }

                if (in_array($num, $idArray)) {//checking available memId and printing only them
                    echo($num);
                } else {
                    echo('');
                }
                echo('</td>');
                $num = $num + 30;
            };
            echo('</tr>');
        }
        ?>
    </table>
</div>
