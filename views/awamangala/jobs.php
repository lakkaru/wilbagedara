<div id="container" class="row well ">  
    <div class="col-lg-12">
        <legend class="lead">අවමංගල්‍ය අවස්ථාවක වැඩ බෙදා දීම</legend>
    </div>
    <form method="post" id="searchJobsForm" class="form-horizontal container-fluid" action="<?php echo URL; ?>awamangala/searchJobsMem" >  
        <div class="form-group noPrint">
            <div class=" col-lg-2">
                <label for="dethMemId" class="control-label"><span class="badge">මියගිය අයට අයත් සාමාජික අංකය :- </span></label>
            </div>
            <div class=" col-lg-1">
                <input id="dethMemId" name="dethMemId" type="number" min="1" class="form-control">
            </div>
            <!--            <div class="col-lg-2">
                            <select name ="division" class="form-control" required>area input field
                                        <option name="select" selected disabled >---තෝරන්න---</option>
                                        <option name="aluthwathu" value="1">අලුත්වතු ගංගොඩ</option>
                                        <option name="kahambili"  value="2">කහඹිලියාව</option>
                                        <option name="godaviti" value="3">ගොඩවිටිගෙදර</option>
                                        <option name="kolon" value="4">කොලොන්ගස්යාය</option>
                                        <option name="meda" value="5">මැද ගංගොඩ</option>
                                        <option name="mahawathu 1" value="6">මහවතු ගංගොඩ 1</option>
                                        <option name="mahawathu 2" value="7">මහවතු ගංගොඩ 2</option>
                                        <option name="walaw 1" value="8">වලව්  ගංගොඩ 1</option>
                                        <option name="walaw 2" value="9">වලව්  ගංගොඩ 2</option>
                                        <option name="wewailhala" value="10">වැව ඉහළ</option>
                                    </select>
                        </div>-->
                        <!--<input type="text" id="memId"/>-->
            <div class="row col-lg-5" style="text-align: left">
                <button type="submit" id="searchJobs" class="btn btn-success">සකසන්න&nbsp;<span class="glyphicon glyphicon-import"></span></button>
                <a href="<?php echo URL; ?>awamangala/resetJobsList"><button type="button" id="resetJobs" class="btn btn-warning">නැවත අරඹන්න&nbsp;<span class="glyphicon glyphicon-repeat"></span></button></a>
                <!--<button type="submit" id="editId" form="editIdForm"class="btn btn-info" disabled>යාවත්කාල කරන්න&nbsp;<span class="glyphicon glyphicon-edit"></span></button>-->
                <!--<span id="notUsed" hidden>සාමාජික අංකය භාවිතා කර නොමැත.</span>-->
<!--<button type="reset"  class="btn btn-warning">නව තොරතුරු ඉවත් කරන්න&nbsp;<span class="glyphicon glyphicon-refresh"></span></button>-->
            </div>
        </div>
    </form>
    <div class="col-lg-12">
        <!--<div class="row well">-->
            <!--<div class="container-fluid  form-inline dt-bootstrap">-->
            <!--<page size="A4">-->
                <div class="row">
                    <div class="col-lg-6">
                        <table id="jobsMem"  class="table table-striped table-bordered " cellspacing="0" width="100%" role="grid">
                            <thead>
                                <tr role="row">
                                    <th    rowspan="1" colspan="1"  >සාමාජික අංකය</th>
                                    <th    rowspan="1" colspan="1"  >නම</th>
                                    <th class="no-sort noPrint"   rowspan="1" colspan="1"  >ඉවත් කරන්න</th></tr>
                            </thead>
                            <tbody><?php
                                foreach ($this->jobsList[0] as $key => $value) {
                                    echo '<tr>';
                                    echo '<td>' . $value['awaMemId'] . '</td>';
                                    echo '<td>' . $value['name'] . '</td>';
                                    echo '<td class="noPrint" style="text-align: center;"><a href=" ' . URL . 'awamangala/cemJobsRemove/' . $value['awaMemId'] . ' /" class="removeButton"><span class="glyphicon glyphicon-trash" style="color:red"></td>';
                                    echo '</tr>';
                                }                              
                                ?></tbody>
                        </table>
                    </div>
                    <div class="col-lg-6">
                        <table  id="jobsMem2" class="table table-striped table-bordered " cellspacing="0" width="100%" role="grid">
                            <thead>
                                <tr role="row">
                                    <th    rowspan="1" colspan="1"  >සාමාජික අංකය</th>
                                    <th    rowspan="1" colspan="1"  >නම</th>
                                    <th class="no-sort noPrint"   rowspan="1" colspan="1"  >ඉවත් කරන්න</th></tr>
                            </thead>
                            <tbody><?php
                                foreach ($this->jobsList[1] as $key => $value) {
                                    echo '<tr>';
                                    echo '<td>' . $value['awaMemId'] . '</td>';
                                    echo '<td>' . $value['name'] . '</td>';
                                    echo '<td class="noPrint" style="text-align: center;"><a href=" ' . URL . 'awamangala/cemJobsRemove/' . $value['awaMemId'] . ' /" class="removeButton"><span class="glyphicon glyphicon-trash" style="color:red"></td>';
                                    echo '</tr>';
                                }
//                                
                                ?></tbody>
                        </table>
                    </div>
                </div>
            <!--</page>-->
            <!--</div>-->
        <!--</div>-->
    </div>
</div>
