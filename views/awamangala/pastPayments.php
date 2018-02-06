<div id="container" class="row well ">  
    <div class="col-lg-12">
        <legend class="lead">පසු ගිය මුදල් ගෙවීම් සොයා බැලීම </legend>
    </div>
    <form method="post" id="searchPaymentsForm" class="form-horizontal container-fluid" action="<?php echo URL; ?>awamangala/searchPayments" >  
        <div class="form-group" <?php  if (Session::get('rank')<> 'භාණ්ඩාගාරික') {echo "hidden";};?>>
            <div class=" col-lg-1">
                <label for="awaMemId" class="control-label"><span class="badge">සාමාජික අංකය </span></label>
            </div>
            <div class="col-lg-1">
                <?php  if (Session::get('loggedIn')== 'user') {
                    $awaMemId=Session::get('awaMemId');
                    $readOnly="readOnly";
                }
                else{
                    $awaMemId='';
                    $readOnly="";
                }?>
                <input id="awaMemId" type="number" class="form-control" name="awaMemId" autofocus value="<?php echo $awaMemId?>" <?php echo $readOnly?> />
            </div>
<!--            <div class=" col-lg-1">
                <label for="from" class="control-label  frp0"><span class="badge">සිට </span></label>
            </div>
            <div class="col-lg-2 flp0">
                <input id="from" type="text" class="form-control datepicker" name="from" />
            </div>
            <div class=" col-lg-1">
                <label for="to" class="control-label  frp0"><span class="badge">දක්වා</span></label>
            </div>
            <div class="col-lg-2 flp0">
                <input id="to" type="text" class="form-control datepicker" name="to" />
            </div>-->
            <div class="row col-lg-10" style="text-align: left">
                <button type="button" id="searchPayments" class="btn btn-success">සොයන්න&nbsp;<span class="glyphicon glyphicon-search"></span></button>
                <!--<button type="submit" id="editId" form="editIdForm"class="btn btn-info" disabled>යාවත්කාල කරන්න&nbsp;<span class="glyphicon glyphicon-edit"></span></button>-->
                <span id="notUsed" hidden>සාමාජික අංකය භාවිතා කර නොමැත.</span>
<!--<button type="reset"  class="btn btn-warning">නව තොරතුරු ඉවත් කරන්න&nbsp;<span class="glyphicon glyphicon-refresh"></span></button>-->
            </div>
        </div>
    </form>
    <div class="col-lg-8">
        <div class="row well">
            <div class=" panel">
                <div class="row">
                    <div class="col-lg-12">
                        <table id="paymentsTable" class="table table-striped table-bordered sinhalaDataTable" cellspacing="0" width="100%" role="grid">
                            <thead>
                                <tr role="row">
                                    <th    rowspan="1" colspan="1"  >දිනය</th>
                                    <th    rowspan="1" colspan="1"  >කාරණය</th>
                                    <th    rowspan="1" colspan="1"  >මුදල</th>
                                    <!--<th   rowspan="1" colspan="1"  >ජංගම</th></tr>-->
<!--                                    <th    rowspan="1" colspan="1">City</th>
                                    <th   rowspan="1" colspan="1"  >Related</th>
                                    <th class="no-sort"  rowspan="1" colspan="1">Mobile</th>
                                    <th class="no-sort"   rowspan="1" colspan="1"  >View</th>-->
<!--                                    <th class="no-sort"   rowspan="1" colspan="1"  >Edit</th>
                                    <th class="no-sort"   rowspan="1" colspan="1"  >Delete</th></tr>-->
                            </thead>
<!--                            <tfoot>
                                <tr role="row">
                                    <th    rowspan="1" colspan="1"  >Member ID</th>
                                    <th   rowspan="1" colspan="1"  >Name</th></tr>
                            </tfoot>-->
                           <tbody><?php
                                foreach ($this->pastPayments as $key => $value) {
                                    echo '<tr>';
                                    echo '<td>' . $value['date'] . '</td>';
                                    echo '<td>' . $value['reson'] . '</td>';
                                    echo '<td>' . $value['amount'] . '</td>';
//                                    echo '<td>' . $value['related'] . '</td>';
//                                    echo '<td>' . $value['mobTel'] . '</td>';
//                                    echo '<td style="text-align: center;"><a href=" ' . URL . 'viewer/view/' . $value['viewerId'] . ' "><span class="glyphicon glyphicon-eye-open" style="color:blue; text-align: center"></span>';
//                                    echo '<td style="text-align: center;"><a href=" ' . URL . 'viewer/edit/' . $value['viewerId'] . ' "><span class="glyphicon glyphicon-edit" style="color:blue; text-align: center"></span>';
//                                    echo '<td style="text-align: center;"><a href=" ' . URL . 'viewer/Delete/' . $value['viewerId'] . ' " class="deleteButton"><span class="glyphicon glyphicon-trash" style="color:red"></td>';
                                    echo '</tr>';
                                }
//                                ?></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

