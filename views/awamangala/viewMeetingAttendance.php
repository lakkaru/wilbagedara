<div  id="container" class="row well ">
    <table id="attendanceView" class="table  table-bordered ">
        <thead>
            <?php
//        $array = $this->meetingAttendanceList[0];
            if (!empty($this->meetingAttendanceList)) {
                $array = $this->meetingAttendanceList[0];
                $serial = $array['attendance'];
                $data = unserialize($serial);
            } else {
                $data = [];
            }
            $length = count($data);
            ?>
            <tr><th colspan="10">මහා සභාවට පැමිණීම සොයා බැලීම <?php if (isset($array['date'])) echo $array['date'] ?>
                    <form method="post" id="attendanceViewForm" class=" " action="<?php echo URL; ?>awamangala/viewMeetingAttendanceDate" >
                        <span class="badge"> දිනය :- </span> <select id="dateSelect" name ="dateSelect" onchange="this.form.submit()" ><!--date select field-->
                            <option selected disabled>තෝරන්න</option>
                            <?php
                            $count = count($this->meetingDateList);
                            for ($i = 0; $i < $count; $i++) {
                                echo ('<option>' . $this->meetingDateList[$i]['date'] . '</option>');
                            }
//                             
                            ?>

                        </select>
                        <span class="badge"> එකතුව :- </span><span id="total" ><?php echo $length ?></span> 
                        <button  type="button"onclick="" class="btn btn-info fr" style=""><a href=" <?php echo  URL . 'awamangala/deleteMeetingAttendanceDate/' . $array['date'] ; ?>" class="deleteLink"><span class="glyphicon glyphicon-trash" style="color:red"></span></a></button></form></th></tr>
        </thead>
        <?php
        $idArray = array();
        foreach ($this->memberList as $awaMemId) {//getting array with key
            foreach ($awaMemId as $memId) {//removing key from array
                array_push($idArray, $memId); //creating values array
            }
        }
        for ($i = 1; $i < 31; $i++) {
            echo('<tr>');
            $num = $i;
            for ($x = 0; $x < 10; $x++) {
                if (in_array($num, $data)) {
                    echo("<td class='attended'>");
                } else {
                    echo ('<td>');
                }
                if (in_array($num, $idArray)) {
                    echo($num);
                } else {
                    echo('');
                }
//                echo($num);
                echo('</td>');
                $num = $num + 30;
            };
        }
        ?>
        <!--    </table>-->
</div>
