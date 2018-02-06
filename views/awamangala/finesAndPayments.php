<?php
if (Session::get('rank') == 'භාණ්ඩාගාරික') {//for edit and input fields
    $access = '';
    $hidden = '';
} else {
    $access = 'disabled';
    $hidden = 'hidden';
}
?>

<div class="row well ">  
    <div class="col-lg-12">
        <legend class="lead">සාමාජික මුදල සහ වෙනත් අය කිරීම් </legend>
    </div>
    <div class="col-lg-12">
        <form method="post" id="editFinesAndPayments" class="form-horizontal " action="<?php echo URL; ?>awamangala/createFinesAndPayments" >         
            <div class="col-lg-6  well">
                <div class="form-group">
                    <div class=" col-lg-6">
                        <label for="date" class="control-label"><span class="badge">දිනය :-</span></label>
                    </div>
                    <div class="col-lg-3">
                        <input id="date" type="text" class="form-control datepicker" name="date" <?php echo $access; ?>>
                    </div>
                    <div class="col-lg-3">
<!--                        <input id="date" type="text" class="form-control datepicker" name="date" >-->
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-6">
                        <label for="membership" class="control-label"><span class="badge">සාමාජික මුදල :- </span></label>
                    </div>
                    <div class="col-lg-3">
                        <input id="membership" type="number" class="form-control" name="membership" <?php echo $access; ?> value="<?php echo $this->finesAndPaymentsList[0]['membership'][0]['amount'];?>"/>
                    </div>
                    <div class="col-lg-3"  <?php echo $hidden; ?>>
                        <button type="button" id="editMembership" class="form-control  btn-danger edit" name="editMembership" >වෙනස් කරන්න</button>
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-6">
                        <label for="attendance" class="control-label"><span class="badge">මහා සභාවට නොපැමිනීම :-</span></label>
                    </div>
                    <div class="col-lg-3">
                        <input id="attendance" type="number" class="form-control" name="attendance" <?php echo $access; ?> value="<?php echo $this->finesAndPaymentsList[0]['attendance'][0]['amount'];?>"/>
                    </div>
                    <div class="col-lg-3" <?php echo $hidden; ?>>
                        <button id="editAttendance" class="form-control  btn-danger edit" name="editAttendance">වෙනස් කරන්න </button>
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-6">
                        <label for="comWorks" class="control-label"><span class="badge">ශ්‍රමදානයට සහභාගී නොවීම :-</span></label>
                    </div>
                    <div class="col-lg-3">
                        <input id="comWorks" type="number" class="form-control" name="comWorks" <?php echo $access; ?> value="<?php echo $this->finesAndPaymentsList[0]['comWorks'][0]['amount'];?>"/>
                    </div>
                    <div class="col-lg-3"  <?php echo $hidden; ?>>
                        <button id="editComWorks" class="form-control  btn-danger edit" name="editComWorks">වෙනස් කරන්න </button>
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-6">
                        <label for="cemetry" class="control-label"><span class="badge">සුසාන භූමියේ කටයුතු වලට සහභාගී නොවීම :-</span></label>
                    </div>
                    <div class="col-lg-3">
                        <input id="cemetry" type="number" class="form-control" name="cemetry" <?php echo $access; ?> value="<?php echo $this->finesAndPaymentsList[0]['cemetry'][0]['amount'];?>"/>
                    </div>
                    <div class="col-lg-3"  <?php echo $hidden; ?>>
                        <button id="editCemetry" class="form-control  btn-danger edit" name="editCemetry" >වෙනස් කරන්න</button>
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-6">
                        <label for="funaral" class="control-label"><span class="badge">අවමංගල්‍යට සහභාගී නොවීම :-</span></label>

                    </div>
                    <div class="col-lg-3">
                        <input id="funaral" type="number" class="form-control" name="funaral" <?php echo $access; ?> value="<?php echo $this->finesAndPaymentsList[0]['funaral'][0]['amount'];?>"/>
                    </div>
                    <div class="col-lg-3" <?php echo $hidden; ?>>
                        <button id="editFunaral" class="form-control  btn-danger edit" name="editFunaral">වෙනස් කරන්න </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>