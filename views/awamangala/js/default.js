
$(document).ready(function () {
    var noOfDep = 1;
    $('#dep1Btn').click(function () {
        $('#dep2').show();
    });
    $('#dep2Btn').click(function () {
        $('#dep3').show();
    });
    $('#dep3Btn').click(function () {
        $('#dep4').show();
    });
    $('#dep4Btn').click(function () {
        $('#dep5').show();
    });
    $('#dep5Btn').click(function () {
        $('#dep6').show();
    });
    $('#dep6Btn').click(function () {
        $('#dep7').show();
    });
    $('#dep7Btn').click(function () {
        $('#dep8').show();
    });
    $('#dep8Btn').click(function () {
        $('#dep9').show();
    });
    $('#dep9Btn').click(function () {
        $('#dep10').show();
    });
    $('#reset').click(function () {
        $('#dep2').hide();
        $('#dep3').hide();
        $('#dep4').hide();
        $('#dep5').hide();
        $('#dep6').hide();
        $('#dep7').hide();
        $('#dep8').hide();
        $('#dep9').hide();
        $('#dep10').hide();
    });


/////searching member with member id
    $("#searchId").click(function () {
        for (i = 0; i < 9; i++) {//hiding dependants fields
            $('#dep' + (i + 2)).hide();
        }
//       alert('Search');
        var urlSearchId = $('#searchIdForm').attr('action');
        var data = $('#searchIdForm').serialize();
//       alert (data);
        $.post(urlSearchId, data, function (callback) {//posting data to get return value
            var memCount = (callback[0].mem).length; //for member availblity
//            alert(memCount);
            if (memCount === 0) {//showing member not available and clearing input fields
                $('#notUsed').show();
                $('#editId').prop('disabled', true);
                $('#resetPassword').prop('disabled', true);
                $('#delForm').hide(); //hidding delete member fields
                var elements = document.getElementsByTagName("input");
                for (var ii = 0; ii < elements.length; ii++) {
                    if (elements[ii].type == "text" || elements[ii].type == "number") {
                        elements[ii].value = "";
                    }
                }
            } else {
                $('#notUsed').hide();
                $('#editId').prop('disabled', false);
                $('#resetPassword').prop('disabled', false);
                $('#delForm').show(); //shoving delete member fields           
            }
            $('#joinedDate').val(callback[0].mem[0].joinedDate);
            $('#updatedDate').val(callback[0].mem[0].updatedDate);
            $('#memId').val(callback[0].mem[0].awaMemId);
            $('#name').val(callback[0].mem[0].name);
            $('#area').val(callback[0].mem[0].area);
            $('#address').val(callback[0].mem[0].address);
            $('#email').val(callback[0].mem[0].email);
            $('#resTel').val(callback[0].mem[0].resTel);
            $('#mobTel').val(callback[0].mem[0].mobTel);
            $('#birthday').val(callback[0].mem[0].birthday);
            $('#nic').val(callback[0].mem[0].nic);
            var exPayCount = (callback[0].expay).length; //for exPay
            if (exPayCount === 0) {
                $('#exPayRu').val(0);
            } else {
                $('#exPayRu').val(callback[0].expay[0].amount);
            }
            var repCount = (callback[0].rep).length; //for rep
            // alert(repCount);
            if (repCount === 0) {
                $('#repName').val("නැත");
                $('#repRel').val("");
                $('#repAge').val("");
            } else {
                $('#repName').val(callback[0].rep[0].name);
                $('#repRel').val(callback[0].rep[0].relationship);
                var dob = new Date(callback[0].rep[0].birthday); //finding age
                var today = new Date();
                var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
                $('#repAge').val(age);
            }
            var depCount = (callback[0].dep).length; //for dependants names
//             alert(depCount);
            for (i = 0; i < (depCount); i++) {
                $('#dep' + (i + 2)).show();
                $('#dep' + (i + 2) + 'Name').val(callback[0].dep[i].name);
                $('#dep' + (i + 2) + 'Rel').val(callback[0].dep[i].relationship);
                var dob = new Date(callback[0].dep[i].birthday); //finding age
                var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
                $('#dep' + (i + 2) + 'Age').val(age);
            }
        }, 'json');
        return false;
    }); //end of serching member by id




/////////////////////////////////////////////// strat of serching payments
    $("#searchPayments").click(function () {
//       alert('Search');
        var urlSearchPyments = $('#searchPaymentsForm').attr('action');
        var data = $('#searchPaymentsForm').serialize();
//       alert (data);
        $.post(urlSearchPyments, data, function (callback) {//posting data to get return value
            var memCount = (callback[0].mem).length; //for member availblity
//            alert(memCount);
            if (memCount === 0) {//showing member not available
                $('#notUsed').show();
            } else {
                $('#notUsed').hide();
            }
            $('#paymentsTable').DataTable({
             
        "data": callback[0].payments,
                "columns": [{
                "data": "date"
                }, {
                "data": "reson"
                }, {
                "data": "amount"
                }, 
                ],
                destroy: true, //avoid multy initializing data table
        });
        }, 'json');
        return false;
    }); //end of serching payments

/////////////////////////////////////////////////

/////////////////////////////////////////////// strat of serching fines and dues
    $("#searchFines").click(function () {
//       alert('Search');
        var urlFines = $('#searchFinesForm').attr('action');
        var data = $('#searchFinesForm').serialize();
//       alert (data);
        $.post(urlFines, data, function (callback) {//posting data to get return value
            var memCount = (callback[0].mem).length; //for member availblity
//            alert(memCount);
            if (memCount === 0) {//showing member not available
                $('#notUsed').show();
            } else {
                $('#notUsed').hide();
            }
            $('#finesTable').DataTable({
              
        "data": callback[0].fines,
                "columns": [{
                "data": "date"
                }, {
                "data": "reson"
                }, {
                "data": "amount"
                }, 
                ],
                destroy: true, //avoid multy initializing data table
        });
        }, 'json');
        return false;
    }); //end of serching payments

/////////////////////////////////////////////////
    /////resetting member password
    $("#resetPassword").click(function () {
//            alert("clicked");
        var urlSearchIdFrom = $('#searchIdForm').attr('action');
//            alert(urlSearchIdFrom);
        var urlResetPassword = (urlSearchIdFrom.substring(0, 40)).concat('resetPassword');//change to 38 when upload to web
//            alert(urlResetPassword);
        var data = $('#searchIdForm').serialize();
        //       alert (data);
        $.post(urlResetPassword, data, function () {
            $('#resetted').show();
            $('#resetted').fadeOut(4000);
        }, 'json');
        return false;
    })
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////////////////////
    /////resetting fines and payments
    $(".edit").click(function () {
        var urlEditFinesAndPayments = $('#editFinesAndPayments').attr('action');
         var data = $('#editFinesAndPayments').serialize();
            var catagory=(event.target.id);//getting id of the edit buttons
//            alert(catagory);
       
 switch (catagory){
     case "editMembership":
//          alert(catagory);
         urlEditFinesAndPayments=(urlEditFinesAndPayments).concat("/membership");
         $.post(urlEditFinesAndPayments, data, function (callback) {
             $("#membership").val(callback[0].membership[0].amount);
         }, 'json');
         
         break;
     case "editAttendance":
//              alert(catagory);
         urlEditFinesAndPayments=(urlEditFinesAndPayments).concat("/attendance");
         $.post(urlEditFinesAndPayments, data, function (callback) {
             $("#attendance").val(callback[0].attendance[0].amount);
         }, 'json');
         
         break;
     case "editComWorks":
         urlEditFinesAndPayments=(urlEditFinesAndPayments).concat("/comWorks");
         $.post(urlEditFinesAndPayments, data, function (callback) {
             $("#comWorks").val(callback[0].comWorks[0].amount);
         }, 'json');
         
         break;
     case "editCemetry":
         urlEditFinesAndPayments=(urlEditFinesAndPayments).concat("/cemetry");
         $.post(urlEditFinesAndPayments, data, function (callback) {
             $("#cemetry").val(callback[0].cemetry[0].amount);
         }, 'json');
         
         break;
     case "editFunaral":
         urlEditFinesAndPayments=(urlEditFinesAndPayments).concat("/funaral");
         $.post(urlEditFinesAndPayments, data, function (callback) {
             $("#funaral").val(callback[0].funaral[0].amount);
         }, 'json');
         
         break;
 } 
//        var urlSearchIdFrom = $('#searchIdForm').attr('action');
////            alert(urlSearchIdFrom);
//        var urlResetPassword = (urlSearchIdFrom.substring(0, 40)).concat('resetPassword');//change to 38 when upload to web
////            alert(urlResetPassword);
//        var data = $('#searchIdForm').serialize();
//        //       alert (data);
//        $.post(urlResetPassword, data, function () {
//            $('#resetted').show();
//            $('#resetted').fadeOut(4000);
//        }, 'json');
        return false;
    })
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $("#searchDiv").click(function () {//members search by devision
        var urlMem = $('#searchDivForm').attr('action');
        var data = $('#searchDivForm').serialize();
        $.post(urlMem, data, function (callback) {//posting data to get return value
//              alert(callback[0].awaMemId);
            $('#areaMembers').DataTable({
             
                "data": callback,
                "columns": [{
                        "data": "awaMemId"
                    }, {
                        "data": "name"
                    }, {
                        "data": "resTel"
                    }, {
                        "data": "mobTel"
                    },
                ],
                destroy: true, //avoid multy initializing data table
            });
        }, 'json');
//        alert(members);
        return false;
    });

    ///////////////////////////////////////////////////////////////////////

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $("#searchAcc").click(function () {//members search by devision
        var urlMem = $('#searchAccForm').attr('action');
        var data = $('#searchAccForm').serialize();
        $.post(urlMem, data, function (callback) {//posting data to get return value
//              alert(callback[0].awaMemId);
            $('#bankAccounts').DataTable({
             
                "data": callback,
                "columns": [{
                        "data": "bank"
                    }, {
                        "data": "accNo"
                    }, {
                        "data": "date"
                    }, {
                        "data": "deposit"
                    }, {
                        "data": "interest"
                    }, {
                        "data": "withdrowal"
                    }, {
                        "data": "balance"
                    },
                ],
                destroy: true, //avoid multy initializing data table
            });
        }, 'json');
//        alert(members);
        return false;
    });

    ///////////////////////////////////////////////////////////////////////
    $('#awaMemId').click(function () {//member search for deth adding
        $('#name').find('option').remove().end(); //removing option values in select
        $('#area').val(''); //removing values in area
    });
    $('#awaMemId').change(function () {//member search for deth adding
        fillNameArea();
    });
    $('#awaMemId').keyup(function () {//member search for deth adding
        fillNameArea();
    });
    $(".birthday").datepicker({//setting common datepicker
        dateFormat: 'yy-mm-dd',
    });

//////////////////////////////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////////////////////////////////////////////////////////
    $("#removeDialog").dialog({//removing a member from job list temparaly
        modal: true,
        bgiframe: true,
        width: 400,
        height: 200,
        autoOpen: false
    });
    $('.removeButton').on('click', function (e) {
        var href = $(this).attr('href'); //getting href of the removeDialog link
//        alert(href);
        $("#removeDialog").dialog("open");
        e.preventDefault();
        $("#removeDialog").dialog('option', 'buttons', {
            "ඉවත් කරන්න": function () {
                $reson = $("#reson").val();
//               alert(href.concat($reson));
                window.location.href = href.concat($reson);
            },
            "අවලංගු කරන්න": function () {
                $(this).dialog("close");
            }
        })
    }); //end of removeDialog confirmation



    ////////// highlighting table cells on attendance
    var attended = [];
    $("#attendance td").click(function () {
        if (!$(this).html() == '') {//disabling empty cells
            if ($(this).hasClass("attended")) {
                $(this).removeClass('attended')
            } else {
                $(this).addClass('attended');
            }
            attended = []; //creating attended array
            $('.attended').each(function () {
                attended.push($(this).text());
            });
            var total = attended.length;
//        alert(total);
            $("#total").text('  ' + total + '   ');
        }
    });
    $("#addAttendance").on('click', function () {
        var urlAttendance = $('#attendanceForm').attr('action');
//     alert(urlAttendance);
//     alert(attended);
        var date = $("#date").val();
        sendAttendanceAjax(urlAttendance, date, attended);
    });
//    
    $('#releasedMembers').DataTable( {
//        "language": {
//            "lengthMenu": "පේලි _MENU_ ක් පෙන්වන්න",
//            "search": "සොයන්න",
//            "zeroRecords": "සමාවන්න, කිසිවක් හමුවූයේ නැත.",
//            "info": "පෙන්වන්නේ පිටු _PAGES_ න් _PAGE_",
//            "infoEmpty": "තොරතුරු කිසිවක් නැත.",
//            "infoFiltered": "(සම්පූර්ණ පේලි _MAX_ න් සොයාගන්නා ලදී.)",
//            "paginate": {
//                "first":      "ප්‍රථම",
//                "last":       "අවසාන",
//                "next":       "ඊලඟ",
//                "previous":   "පෙර"
//            },
//        }
    } );
    
    $('#deths').DataTable( {});
    $('#officers').DataTable( {});
    
}); //////end of document ready

/////////////////////////////////////////////////////////////////////////////////////

//function copyToClipboard(element) {
////    alert("blure");
//  var $temp = $("<input>");
//  $("body").append($temp);
//  $temp.val($(element).text()).select();
//  document.execCommand("copy");
//  alert($temp);
//  $temp.remove();
//}

//////////////////////////////////////////////////////////////////////////////////
function fillNameArea() {
    var urlDeth = $('#addDethsForm').attr('action');
    var urlDethSearch = urlDeth.replace('createDeths', 'searchId');
    var data = $('#awaMemId').serialize();
    $.post(urlDethSearch, data, function (callback) {//posting data to get return value
        var depCount = (callback[0].dep).length;
        var repCount = (callback[0].rep).length;
        $('#area').val(callback[0].mem[0].area);
        $('#name').find('option').remove().end(); //removing option values in select  
        $('#name').append($('<option>', {value: (callback[0].mem[0].name), selected: true, text: (callback[0].mem[0].name)}, '</option>'));
        for (i = 0; i < repCount; i++) {
            $('#name').append($('<option>', {value: (callback[0].rep[i].name), text: (callback[0].rep[i].name)}, '</option>'));
        }
        for (i = 0; i < depCount; i++) {
            $('#name').append($('<option>', {value: (callback[0].dep[i].name), text: (callback[0].dep[i].name)}, '</option>'));
        }
        $('#name').append($('<option>', {value: ("ආගන්තුක"), text: ("ආගන්තුක")}, '</option>'));
    }, 'json');
    return false;
}


/////////////////////////////////////////////////////////////////////////////////////////////////////////Strat  of payments
function addPaymentTableItem() {//adding data to table in payments
    if ($("#paymentsForm").valid()) {//if required values available
        var date = $("#date").val();
        var awaMemId = $("#awaMemId").val();
        var amount = $("#amount").val();
        $("#payments tr:last").after("<tr><td>" + date + "</td><td>" + awaMemId + "</td><td>" + amount + "</td><td><span class='glyphicon glyphicon-trash delete' id='" + awaMemId + "'style='color:red'></td></tr>");
        $("#awaMemId").val('');
        $("#amount").val('');
    }
    $('#payments td span').on('click', function () {
        $(this).parent().parent().remove(); //removing table row
    });
}

function createPaymentsArray() {//getting payments table data into myTableArray and ajax for sending data to db
//    alert('clicked');
    var myTableArray = [];
    $("table#payments tr").each(function () {
        var arrayOfThisRow = [];
        var tableData = $(this).find('td');
        if (tableData.length > 0) {
            tableData.each(function () {
                arrayOfThisRow.push($(this).text());
            });
            myTableArray.push(arrayOfThisRow);
        }
    });
    var urlPayments = $('#paymentsForm').attr('action');
    sendPaymentTableAjax(urlPayments, myTableArray);
}

function sendPaymentTableAjax(url, data) {
//    alert(url);
//    alert(data);
    var ajaxData = JSON.stringify(data);
    $.ajax({
        type: "POST",
        url: url,
        data: {data: ajaxData},
        cache: false,
        success: function () {
            $("#payments").empty();
            window.location.reload();
        }
    });
}

///////////////////////////////////////////////////////////////////////// End of payments


//////////////////////////////////////////////////////////////////////// strat  of fines
function addFineTableItem() {//adding data to table in payments
    if ($("#finesForm").valid()) {//if required values available
        var date = $("#date").val();
        var awaMemId = $("#awaMemId").val();
        var reson = $("#reson").val();
        var amount = $("#amount").val();
        $("#fines tr:last").after("<tr><td>" + date + "</td><td>" + awaMemId + "</td><td>" + reson + "</td><td>" + amount + "</td><td><span class='glyphicon glyphicon-trash delete' id='" + awaMemId + "'style='color:red'></td></tr>");
        $("#awaMemId").val('');
        $("#reson").val('');
        $("#amount").val('');
    }
    $('#fines td span').on('click', function () {
        $(this).parent().parent().remove(); //removing table row
    });
}

function createFineArray() {//getting finess table data into myTableArray and ajax for sending data to db
//    alert('clicked');
    var myTableArray = [];
    $("table#fines tr").each(function () {
        var arrayOfThisRow = [];
        var tableData = $(this).find('td');
        if (tableData.length > 0) {
            tableData.each(function () {
                arrayOfThisRow.push($(this).text());
            });
            myTableArray.push(arrayOfThisRow);
        }
    });
    var urlFines = $('#finesForm').attr('action');
    sendFinesTableAjax(urlFines, myTableArray);
}

function sendFinesTableAjax(url, data) {
//    alert(url);
//    alert(data);
    var ajaxData = JSON.stringify(data);
    $.ajax({
        type: "POST",
        url: url,
        data: {data: ajaxData},
        cache: false,
        success: function () {
            $("#fines").empty();
            window.location.reload();
        }
    });
}


///////////////////////////////////////////////////////////////////////// End of fines


////////////////////////////////////////////////////////////////////////strat of Extra funds Due
function addExtraFundsDueTableItem() {//adding data to table in payments
    if ($("#extraFundsForm").valid()) {//if required values available
        var date = $("#date").val();
        var awaMemId = $("#awaMemId").val();
        var amount = $("#amount").val();
        $("#extraFunds tr:last").after("<tr><td>" + date + "</td><td>" + awaMemId + "</td><td>" + amount + "</td><td><span class='glyphicon glyphicon-trash delete' id='" + awaMemId + "'style='color:red'></td></tr>");
        $("#awaMemId").val('');
        $("#amount").val('');
    }
    $('#extraFunds td span').on('click', function () {
        $(this).parent().parent().remove(); //removing table row
    });
}

function createExtraFundsDueArray() {//getting finess table data into myTableArray and ajax for sending data to db
//    alert('clicked');
    var myTableArray = [];
    $("table#extraFunds tr").each(function () {
        var arrayOfThisRow = [];
        var tableData = $(this).find('td');
        if (tableData.length > 0) {
            tableData.each(function () {
                arrayOfThisRow.push($(this).text());
            });
            myTableArray.push(arrayOfThisRow);
        }
    });
    var urlExtraFundsDue = $('#extraFundsForm').attr('action');
    sendExtraFundsDueTableAjax(urlExtraFundsDue, myTableArray);
}

function sendExtraFundsDueTableAjax(url, data) {
//    alert(url);
//    alert(data);
    var ajaxData = JSON.stringify(data);
    $.ajax({
        type: "POST",
        url: url,
        data: {data: ajaxData},
        cache: false,
        success: function () {
            $("#extraFunds").empty();
            window.location.reload();
        }
    });
}

//////////////////////////////////////////////////////////////////////// Endof Extra funds Due


function sendAttendanceAjax(url, date, data) {
//    alert(url);
//    alert(data);
    var ajaxDate = JSON.stringify(date);
    var ajaxData = JSON.stringify(data);
    $.ajax({
        type: "POST",
        url: url,
        data: {data: ajaxData, date: ajaxDate},
        cache: false,
        success: function () {
            window.location.reload();
        }
    });
}

