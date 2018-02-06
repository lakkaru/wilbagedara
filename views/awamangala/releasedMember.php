<div id="container" class="row well ">  
    <div class="col-lg-12">
        <legend class="lead">නිදහස් සාමාජිකයන්  &nbsp;&nbsp; &nbsp;&nbsp;</legend>
        <div  <?php if (Session::get('rank') <> 'ලේකම්'){echo 'hidden';}; ?>>
        <form action="<?php echo URL ?>awamangala/addReleasedMember">
            <input class="btn btn-primary" type="submit" value="නව සාමාජිකයකු ඇතුල් කරන්න" >
        </form>
        </div>
<!--<input class="btn btn-primary" type="button" value="නව සාමාජිකයකු ඇතුල් කරන්න">-->
    </div>

    <div class="col-lg-8">
        <div class="row well">
            <div class="container-fluid  form-inline ">
                <div class="row panel">
                    <div class="col-lg-12">
                        <table id="releasedMembers" class="table table-striped table-bordered sinhalaDataTable " cellspacing="0" width="100%" role="grid">
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
                                  <?php  if (Session::get('rank') == 'ලේකම්') { echo '<th class="no-sort"   rowspan="1" colspan="1"  >ඉවත් කරන්න</th></tr>';}?>
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
                                   if (Session::get('rank') == 'ලේකම්') { echo '<td style="text-align: center;"><a href=" ' . URL . 'awamangala/deleteReleasedMem/' . $value['awaMemId'] . ' " class="deleteButton" ><span class="glyphicon glyphicon-trash" style="color:red"></td>';}
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
