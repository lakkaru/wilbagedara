<div id="container" class="row well ">  
    <div class="col-lg-12">
        <legend class="lead">සියලුම මුදල් ගෙවීම් ඇතුල් කිරීම</legend>
    </div>
    <div class="col-lg-3">
        <form method="post" id="finesForm" class="form-horizontal validateForm" action="<?php echo URL; ?>awamangala/createFines" >         
            <div class="col-lg-12 well">
                <div class="form-group">
                    <div class=" col-lg-5">
                        <label for="date" class="control-label"><span class="badge">දිනය :-</span></label>
                    </div>
                    <div class="col-lg-7">
                        <input id="date" type="text" class="form-control datepicker" name="date" >
                    </div>
                </div>
                <!-- <div class="form-group">
                    <div class=" col-lg-5">
                        <label for="awaMemId" class="control-label"><span class="badge">සාමාජික අංකය :- </span></label>
                    </div>
                    <div class="col-lg-7">
                        <input id="awaMemId" type="number" class="form-control" min="0" name="awaMemId" autofocus required>
                    </div>
                </div> -->
                <div class="form-group row">
                    <div class=" col-lg-5">
                        <label for="reson" class="control-label"><span class="badge">කාරණය :-</span></label>
                    </div>
                    <div class="col-lg-7">
                        <input list="resonList" class="form-control" id="reson" name="reson" required/>
                        <datalist id="resonList">
                            <option value="">
                            <option value="">
                            <option value="">
                            <option value="">
                            <option value="">
                        </datalist>
                    </div>
                </div>
                <div class="form-group row">
                    <div class=" col-lg-5">
                        <label for="amount" class="control-label"><span class="badge">මුදල :-</span></label>
                    </div>
                    <div class="col-lg-7">
                        <input id="amount" type="number" class="form-control" min="0" name="amount" required>
                    </div>
                </div>
                <div class=" col-lg-6 frp0">
                    <input type="button" id="addItem"  class=" btn form-control btn-primary" onclick="addFineTableItem()" value="ඊලඟ">
                </div>
            </div>
        </form>
    </div>


    <div class="col-lg-9">
        <div class="row well">
            <div class="container-fluid  form-inline ">
                <div class="row">
                    <button id="addToDb" onclick="createFineArray()" class="btn btn-info center-block" style="margin-bottom: 20px">නව ගෙවීම් මුදල් තොරතුරු පද්ධතියට ඇතුලු කරන්න</button>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <table id="fines" class="table table-striped table-bordered " cellspacing="0" width="100%" role="grid">
                            <thead>
                                <tr role="row">
                                    <th    rowspan="1" colspan="1"  >දිනය</th>
                                    <!-- <th    rowspan="1" colspan="1"  >සාමාජික අංකය</th> -->
                                    <th    rowspan="1" colspan="1"  >කාරණය</th>
                                    <th    rowspan="1" colspan="1"  >මුදල</th>
                                    <th class="no-sort"   rowspan="1" colspan="1"  >ඉවත් කරන්න</th></tr>
                            </thead>
<!--                            <tfoot>
                                <tr role="row">
                                    <th    rowspan="1" colspan="1"  >Member ID</th>
                                    <th   rowspan="1" colspan="1"  >Name</th></tr>
                            </tfoot>-->
                            <tbody>
                                <tr hidden>
                                    <th    rowspan="1" colspan="1"  >දිනය</th>
                                    <th    rowspan="1" colspan="1"  >සාමාජික අංකය</th>
                                    <th    rowspan="1" colspan="1"  >කාරණය</th>
                                    <th    rowspan="1" colspan="1"  >මුදල</th>
                                    <th class="no-sort"   rowspan="1" colspan="1"  >ඉවත් කරන්න</th></tr>
                                <tr hidden>
                                   <th    rowspan="1" colspan="1"  >දිනය</th>
                                    <th    rowspan="1" colspan="1"  >සාමාජික අංකය</th>
                                    <th    rowspan="1" colspan="1"  >කාරණය</th>
                                    <th    rowspan="1" colspan="1"  >මුදල</th>
                                    <th class="no-sort"   rowspan="1" colspan="1"  >ඉවත් කරන්න</th></tr>
                            </tbody>
<!--                               <tfoot>
                             <tr role="row">
                                 </tr>
                         </tfoot>-->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div id="element"><span>Test</span></div>-->