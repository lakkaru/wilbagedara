<div  id="container" class="row well ">  
    <div class="col-lg-12">
        <legend class="lead">නිදහස් සමාජිකත්වයක් ඇතුල් කිරීම</legend>
    </div>
    <div class="col-lg-12">
        <form method="post" id="addMember" class="form-horizontal " action="<?php echo URL; ?>awamangala/createReleasedMem" >         
            <div class="col-lg-4  well">
                <!--                <div class="form-group">
                                    <div class=" col-lg-4">
                                        <label for="date" class="control-label"><span class="badge">දිනය :-</span></label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input id="date" type="text" class="form-control datepicker" name="date" >
                                    </div>
                                </div>-->
                <div class="form-group">
                    <div class=" col-lg-4">
                        <label for="awaMemId" class="control-label"><span class="badge">සාමාජික අංකය :- </span></label>
                    </div>
                    <div class="col-lg-8">
                        <input id="awaMemId" type="number" class="form-control" name="awaMemId" required>
                    </div>
                </div>
                <!--                <div class="form-group">
                                    <div class=" col-lg-4">
                                        <label for="name" class="control-label"><span class="badge">සාමාජිකයගේ නම :- </span></label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input id="name" type="text" class="form-control" name="name" required>
                                    </div>
                                </div>-->
                <div class="form-group">
                    <div class=" col-lg-4">
                        <label for="area" class="control-label"><span class="badge">  ප්‍රදේශය:- </span></label>
                    </div>
                    <div class="col-lg-8">
                        <select name ="area" class="form-control" required><!--area input field-->
                            <option name="select" selected disabled >---තෝරන්න---</option>
                            <option name="aluthwathu">අලුත්වතු ගංගොඩ</option>
                            <option name="kahambili" >කහඹිලියාව</option>
                            <option name="godaviti">ගොඩවිටිගෙදර</option>
                            <option name="kolon">කොලොන්ගස්යාය</option>
                            <option name="meda">මැද ගංගොඩ</option>
                            <option name="mahawathu 1">මහවතු ගංගොඩ 1</option>
                            <option name="mahawathu 2">මහවතු ගංගොඩ 2</option>
                            <option name="walaw 1">වලව්  ගංගොඩ 1</option>
                            <option name="walaw 2">වලව්  ගංගොඩ 2</option>
                            <option name="wewailhala">වැව ඉහළ</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-4">
                        <label for="reson" class="control-label"><span class="badge"> හේතුව:- </span></label>
                    </div>
                    <div class="col-lg-8">
                        <select name ="reson" class="form-control" required><!--area input field-->
                            <option name="select" selected disabled >---තෝරන්න---</option>
                            <option name="senior">ජේෂ්ඨ සාමාජිකත්වය</option>
                            <option name="ill" >අසනීප තත්වය</option>
                            <option name="officer" >නිළධාරී</option>
                            <option name="other">වෙනත්</option>
                            <!--                            <option name="kolon">කොලොන්ගස්යාය</option>
                                                        <option name="meda">මැද ගංගොඩ</option>
                                                        <option name="mahawathu 1">මහවතු ගංගොඩ 1</option>
                                                        <option name="mahawathu 2">මහවතු ගංගොඩ 2</option>
                                                        <option name="walaw 1">වලව්  ගංගොඩ 1</option>
                                                        <option name="walaw 2">වලව්  ගංගොඩ 2</option>
                                                        <option name="wewailhala">වැව ඉහළ</option>-->
                        </select>
                    </div>
                </div>

                <div class="row col-lg-12" style="text-align: center">
                    <button type="submit" class="btn btn-success">ඇතුල් කරන්න&nbsp;<span class="glyphicon glyphicon-plus"></span></button>
                    <!--<button id="reset" type="reset"  class="btn btn-warning">නව තොරතුරු ඉවත් කරන්න&nbsp;<span class="glyphicon glyphicon-refresh"></span></button>-->
                </div>
            </div>
        </form>
        <div class="col-lg-8">
            <div class="row well">
                <div class="container-fluid  form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <table id="areaMembers" class="table table-striped table-bordered " cellspacing="0" width="100%" role="grid">
                                <thead>
                                    <tr role="row">
                                        <th    rowspan="1" colspan="1"  >සාමාජික අංකය</th>
                                        <!--<th    rowspan="1" colspan="1"  >නම</th>-->
                                        <th    rowspan="1" colspan="1"  >හේතුව</th>
                                        <!--<th   rowspan="1" colspan="1"  >ජංගම</th></tr>-->
    <!--                                    <th    rowspan="1" colspan="1">City</th>
                                        <th   rowspan="1" colspan="1"  >Related</th>
                                        <th class="no-sort"  rowspan="1" colspan="1">Mobile</th>
                                        <th class="no-sort"   rowspan="1" colspan="1"  >View</th>-->
    <!--                                    <th class="no-sort"   rowspan="1" colspan="1"  >Edit</th>-->
                                        <th class="no-sort"   rowspan="1" colspan="1"  >ඉවත් කරන්න</th></tr>
                                </thead>
    <!--                            <tfoot>
                                    <tr role="row">
                                        <th    rowspan="1" colspan="1"  >Member ID</th>
                                        <th   rowspan="1" colspan="1"  >Name</th></tr>
                                </tfoot>-->
                                <tbody><?php
                                    foreach ($this->freeList as $key => $value) {
                                        echo '<tr>';
                                        echo '<td>' . $value['awaMemId'] . '</td>';
//                                    echo '<td>' . $value['name'] . '</td>';
                                        echo '<td>' . $value['reson'] . '</td>';
//                                    echo '<td>' . $value['related'] . '</td>';
//                                    echo '<td>' . $value['mobTel'] . '</td>';
//                                    echo '<td style="text-align: center;"><a href=" ' . URL . 'viewer/view/' . $value['viewerId'] . ' "><span class="glyphicon glyphicon-eye-open" style="color:blue; text-align: center"></span>';
//                                    echo '<td style="text-align: center;"><a href=" ' . URL . 'viewer/edit/' . $value['viewerId'] . ' "><span class="glyphicon glyphicon-edit" style="color:blue; text-align: center"></span>';
                                        echo '<td style="text-align: center;"><a href=" ' . URL . 'awamangala/deleteReleasedMem/' . $value['awaMemId'] . ' " class="deleteButton"><span class="glyphicon glyphicon-trash" style="color:red"></td>';
//                                    echo '</tr>';
                                    }
                                    ?></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
