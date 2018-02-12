var callback = new Array();
$(document).ready(function() {
//    $("#searchDiv").click(function() {
//       alert('Search');
//        var awa_mem_id = $("#awa_mem_id").val();
//        $active_menu = $(".active_menu").val();
//        $.ajax({
//            dataType: "json",
//            method: "POST",
//            url: "./controller/search_member.php", //file name for data sending
//            data: {awa_mem_id: awa_mem_id}, //the sending data
//            success: function(callback) { //on success data returning
//                $records = (callback.pop() - 1);//counting rows
//                if ($active_menu == "search_member") {
//                    //alert ($(".active_menu").val());     
//                    if ($records > 1) {//for removing blank member id
//                        $("#member").html((callback[0].name) + "   -   " + (callback[0].area));//member details in head
//                        $("#member_tel").html((callback[0].mob_tel) + "   -   " + (callback[0].res_tel));//member details in head
//                        $("#member_data").html((callback[0].joined_date) + "   -   " + (callback[0].released) + "   -   " + (callback[0].remarks));//member details in head
//
//                    } else {
//                        $("#member").html("සාමජික අංකය භාවිතා කර නැත");
//                        $("#member_data").html('');
//                    }//end of table heading
//                    $("#dataTable").html("");//cls the table
//
//                    var i;
//                    for (i = 0; i < $records; i++) {
//                        $data = ("<tr><td>" + (i + 1) + "</td><td>" + (callback[i].dep_name) + "</td><td>" + (callback[i].relationship) + "</td></tr>");
//                        $("#dataTable").append($data);
//                    }
//                }//end of if search member
//
//                if ($active_menu === "update_member") {
//                    //alert ($(".active_menu").val());     
//                    if ($records > 1) {//for removing blank member id
//                        $(".form-control").prop('disabled', false);
//                        $("#name").val(callback[0].name);
//                        $("#area").val(callback[0].area);
//                        $("#res_tel").val(callback[0].res_tel);
//                        $("#res_tel").val(callback[0].res_tel);
//                        $("#mob_tel").val(callback[0].mob_tel);
//                        $("#free_member").prop('checked', true);
//
//                    } else {
//                        //$("#table_head").html("සාමජික අංකය භාවිතා කර නැත");
//                    }//end of table heading
//                    // $("#dataTable").html("");//cls the table
//
//                    /* var i;
//                     for (i = 0; i < $records; i++) {
//                     $data = ("<tr><td>" + (i + 1) + "</td><td>" + (callback[i].dep_name) + "</td><td>" + (callback[i].relationship) + "</td></tr>");
//                     $("#dataTable").append($data);
//                     
//                     }*/
//
//                }
//                ;
//            }
//        })//ajax
//                .error(function() {
//            alert("Anerror on ajax data sending.")
//        });//error function
//
//    });//member search by id click function

//--------------------------------------- search Acc details-------------------------------------------------------------------------------

//     $("#searchAcc").click(function() {
//         alert('clicked');
//         var from = $("#fromDate").val();
//         var to = $("#toDate").val();
//         // area = a;

//         $.ajax({
//             dataType: "json",
//             method: "POST",
//             url: "./controller/searchAcc.php", //file name for data sending
//             data: {from: from,
//                     to:to }, //the sending data
//             success: function(callback) { //on success data returning

//                 $records = (callback.pop() - 1);//counting rows
//                 $("#acc_datatable").html("");//cls for table
//                 var i;
//                 for (i = 0; i < $records; i++) {
//                     $data = ("<tr><td>" + (i + 1) + "</td><td>" + (callback[i].bank) + "</td><td>" + (callback[i].name) + "</td><td><input type='button' value='යාවත්කාල කරන්න'/></td><td><input type='button' value='ඉවත් කරන්න'/></td> </tr>");
//                     $("#area_datatable").append($data);

//                 }
//             }
//         })//ajax
//                 .error(function() {
//             alert("Anerror on ajax data sending.")
//         });//error function

//     });//click function
// //--------------------------------- search by area ------------------------------------------------------------------------------


});    //document ready


