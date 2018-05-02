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

        $twoMonthsConcecative=$this->twoMonthsConcecative;
        $threeMonthsConcecative=$this->threeMonthsConcecative;
        $idArray=$this->idArray;
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
