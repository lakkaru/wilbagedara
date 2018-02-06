<div id="" class="container-fluid ">  
    <div class="row well ">
        <!--        <div class="">
                    <div class="row ">-->
        <div class="col-xs-12 ">
            <legend class="lead">ගංගොඩ සාමාජික තොරතුරු සෙවීම </legend>
        </div>
        <!--</div>-->
        <!--<div class="row">-->
        <!--<div class="col-xs-12">-->
        <form method="post" id="searchDivForm" class="form-horizontal" action="<?php echo URL; ?>awamangala/searchDiv" >  
            <div class="form-group row">
                <div class=" col-xs-3 col-md-1">
                    <label for="division" class="control-label "><span class="badge">ගංගොඩ :- </span></label>
                </div>
                <div class="col-xs-5 col-md-3">
                    <select name ="division" class="form-control " required>area input field
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
                </div>

                <div class="col-xs-1 col-md-2" >
                    <button type="button" id="searchDiv" class="btn btn-success">සොයන්න&nbsp;<span class="glyphicon glyphicon-search"></span></button>
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
        <table id="areaMembers" class="table table-striped table-bordered DataTable " cellspacing="0"  role="grid">
            <thead>
                <tr role="row">
                    <th    rowspan="1" colspan="1"  >සාමාජික අංකය</th>
                    <th    rowspan="1" colspan="1"  >නම</th>
                    <th    rowspan="1" colspan="1"  >ස්ථාවර</th>
                    <th   rowspan="1" colspan="1"  >ජංගම</th>
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

