$(document).ready(function () {
    var URL="http://localhost/wilbagedara/"
   

    ///////////////////////////for login Dialog
  
    $("#loginDialog").dialog({
        modal: true,
        bgiframe: true,
        width: 400,
        height: 290,
        autoOpen: true
        
    });
    $("#loginDialog").dialog('option', 'buttons', {
        "ඇතුල් වීම": function() {
            $('#submitLogin').click();//submitting login details to loginrun
        },
        "අවලංගු කරන්න": function() {
            $(this).dialog("close");
            window.location = URL.concat('index');//direct to index page
        }
    });
//for serviceNumber & password mismatch popup
$('#mismatch').delay(2000).fadeOut(400);
//////////////////////////////////End of login dialog


    ///////////////////////////for changePassword Dialog
    $("#changePasswordDialog").dialog({
        modal: true,
        bgiframe: true,
        width: 400,
        height: 350,
        autoOpen: true
        
    });
    $("#changePasswordDialog").dialog('option', 'buttons', {
        "යලි පිහිටුවන්න": function() {
            $('#submitLogin').click();//submitting login details to userLogin/changePassword
        },
        "අවලංගු කරන්න": function() {
            $(this).dialog("close");
            window.location = URL.concat('index');//direct to index page
        }
    });
//for serviceNumber & password mismatch popup
$('#mismatch').delay(2000).fadeOut(400);
//////////////////////////////////End of changePassword dialog



    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
			event.preventDefault(); 
			event.stopPropagation(); 
			$(this).parent().siblings().removeClass('open');
			$(this).parent().toggleClass('open');});	
(jQuery);//dropdown menu arrengement in android

//$('.dropdown a.test').on("click", function(e){
//    $(this).next('ul').toggle();
//    e.stopPropagation();
//    e.preventDefault();
//  });

    $(".datepicker").datepicker({//setting common datepicker
        dateFormat: 'yy-mm-dd',

    });
    $(".datepicker").datepicker('setDate', new Date());
    $(".datepicker").keydown(function (e) {
        e.preventDefault();
        return false;
    });

    $('#success').delay(1500).slideUp(1000); //fading out success div at header
    $('#noAccess').delay(1500).slideUp(1000); //fading out success div at header
    $('#error').delay(1500).slideUp(1000); //fading out success div at header

//    $('.dataTable').DataTable({
//        "aaSorting": [[0, 'desc']],
//        "bJQueryUI": true,
//        "pageLength": 5,
//        "ordering": true,
//        columnDefs:
//                [{orderable: false,
//                        targets: "no-sort"},
//                ]
//    });//jquery data table
//    $('.dataTable_wrapper').width('100%');


//    $('.dataTable').DataTable();

    // For delete confirmation
    $("#deleteDialog").dialog({
        modal: true,
        bgiframe: true,
        width: 400,
        height: 200,
        autoOpen: false
    })
//            .css("background", "#A7C0C4");
    $(".deleteLink").click(function (e) {
        var href = $(this).attr('href'); //getting href of the Delete link
        $("#deleteDialog").dialog("open");
        e.preventDefault();
        $("#deleteDialog").dialog('option', 'buttons', {
            "ඔව්": function () {
                window.location.href = href;
            },
            "අවලංගු කරන්න": function () {
                $(this).dialog("close");
            }
        });
    }); //end of delete confirmation
    
    $(".deleteButton").click(function (e) {//deleteing a record with form submitting
        $("#deleteDialog").dialog("open");
        e.preventDefault();
        $("#deleteDialog").dialog('option', 'buttons', {
            "ඔව්": function () {
            $(".deleteForm").submit();
            },
            "අවලංගු කරන්න": function () {
                $(this).dialog("close");
            }
        });
    }); //end of delete confirmation
    
//    // For add confirmation
//    $("#addDialog").dialog({
//        modal: true,
//        bgiframe: true,
//        width: 400,
//        height: 200,
//        autoOpen: false
//    })
////            .css("background", "#A7C0C4");
//    $(".addButton").click(function (e) {
//        var href = $(this).attr('href'); //getting href of the add link
//        $("#addDialog").dialog("open");
//        e.preventDefault();
//        $("#addDialog").dialog('option', 'buttons', {
//            "ඔව්": function () {
//                window.location.href = href;
//            },
//            "අවලංගු කරන්න": function () {
//                $(this).dialog("close");
//            }
//        });
//    }); //end of add confirmation

    $("#logoutDialog").dialog({
        modal: true,
        bgiframe: true,
        width: 400,
        height: 200,
        autoOpen: false
    });

    $('#logout').on('click', function (e) {
        var href = $(this).attr('href'); //getting href of the logoutDialog link
        $("#logoutDialog").dialog("open");
        e.preventDefault();
        $("#logoutDialog").dialog('option', 'buttons', {
            "ඔව්": function () {
                window.location.href = href;
            },
            "අවලංගු කරන්න": function () {
                $(this).dialog("close");
            }
        })
    }); //end of logoutDialog confirmation

    $("li.disabled").click(function (e) {//dissabling unautorized menu items
        e.preventDefault();
    });
    
// /////////////////////////////////////   form validation
$('.validateForm').validate({
        rules: {
            awaMemId: "required",
            amount: "required",
            reson:"required",
                confirmPassword : {     
                    equalTo : "#newPassword"
                }
        },
        messages: {
            awaMemId: "සාමාජික අංකය ඇතුලු කරන්න",
            amount: "මුදල ඇතුලු කරන්න",
            confirmPassword:"අලුත් මුර පදය සමග නොගැලපේ",
            reson:"කාරණය ඇතුල් කරන්න",
        }
    });
    //////////////////////////End of form validaton
    
    $.extend( true, $.fn.dataTable.defaults, {//for sinhala dataTable
                "language": {
            "lengthMenu": "පේලි _MENU_ ක් පෙන්වන්න",
            "emptyTable":     "තොරතුරු නැත.",
            "search": "සොයන්න",
            "zeroRecords": "සමාවන්න, කිසිවක් හමුවූයේ නැත.",
            "info": "පෙන්වන්නේ පිටු _PAGES_ න් _PAGE_",
            "infoEmpty": "පෙන්වන්නේ පිටු  0 න් 0",
            "infoFiltered": "(සම්පූර්ණ පේලි _MAX_ න් සොයාගන්නා ලදී.)",
            "paginate": {
                "first":      "ප්‍රථම",
                "last":       "අවසාන",
                "next":       "ඊලඟ",
                "previous":   "පෙර"
            },
        },
    });
}); 
 
 