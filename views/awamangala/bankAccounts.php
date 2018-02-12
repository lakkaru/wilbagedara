<div id="" class="container-fluid ">  
    <div class="row well ">
        <!--        <div class="">
                    <div class="row ">-->
        <div class="col-xs-12 ">
            <legend class="lead">බැංකු ගිණුම් තොරතුරු</legend>
        </div>
        <!--</div>-->
        <!--<div class="row">-->
        <!--<div class="col-xs-12">-->
        <form method="post" id="searchAccForm" class="form-horizontal" action="<?php echo URL; ?>awamangala/searchAcc" >  
            <div class="form-group row">
                <div class=" col-xs-3 col-md-1">
                    <label for="fromDate" class="control-label "><span class="badge">සිට</span></label>
                </div>
                <div class="col-xs-5 col-md-3">
                <div class="col-lg-7">
                        <input id="fromDate" type="text" class="form-control datepicker" name="fromDate" >
                    </div>
                </div>
                <div class=" col-xs-3 col-md-1">
                    <label for="toDate" class="control-label "><span class="badge">දක්වා</span></label>
                </div>
                <div class="col-xs-5 col-md-3">
                <div class="col-lg-7">
                        <input id="toDate" type="text" class="form-control datepicker" name="toDate" >
                    </div>
                </div>
                <div class="col-lg-5">
                        <select name="account" id="acccount" class="form-control">
                            <option value="">ගිණුම් සියල්ල</option>
                            <option value="">විල්බාගෙදර සණස</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-1 col-md-2" >
                    <button type="button" id="searchDiv" class="btn btn-success">සොයන්න&nbsp;<span class="glyphicon glyphicon-search"></span></button>
                </div>
                <div class="col-xs-1 col-md-2" >
                    <button type="button" id="searchDiv" class="btn btn-success">ඇතුලත් කරන්න&nbsp;<span class="glyphicon glyphicon-plus"></span></button>
                </div>
            </div>
        </form>
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
    </div>

    <!--<div class="container-fluid">-->
    <div class="row  panel">
        <!--<div class=" panel ">-->
        <!--<div class="container-fluid">-->
        <!--<div class="row">-->
        <!--<div class="col-xs-12">-->
        <table id="bankAccounts" class="table table-striped table-bordered DataTable " cellspacing="0"  role="grid">
            <thead>
                <tr role="row">
                    <th   rowspan="1" colspan="1"  >දිනය</th>
                    <th    rowspan="1" colspan="1"  >බැංකුව</th>
                    <th    rowspan="1" colspan="1"  >ගිණුම් අංකය</th>
                    <th   rowspan="1" colspan="1"  >කාරණය</th>
                    <th    rowspan="1" colspan="1"  >වර්තමාන ශේෂය</th>
                </tr>
            </thead>
            <tbody >

            </tbody>
        </table>
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
    </div>
</div>

