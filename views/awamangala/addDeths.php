<div id="container" class="row well ">  
    <div class="col-lg-12">
        <legend class="lead">මිය ගිය අය ඇතුල් කිරීම </legend>
    </div>
    <div class="col-lg-12">
        <form method="post" id="addDethsForm" class="form-horizontal validateForm" action="<?php echo URL; ?>awamangala/createDeths" >         
            <div class="col-lg-4  well">
                <div class="form-group">
                    <div class=" col-lg-4">
                        <label for="date" class="control-label"><span class="badge">දිනය :-</span></label>
                    </div>
                    <div class="col-lg-8">
                        <input id="date" type="text" class="form-control datepicker" name="date" />
                        <!--<input type="button" id="add"value='Test'/>-->
                    </div>
                </div>
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
                        <label for="name" class="control-label"><span class="badge">සාමාජික අංකය :- </span></label>
                    </div>
                    <div class="col-lg-8">
                        <input id="name" type="text" class="form-control" name="name" required>
                    </div>
                </div>-->
<div class="form-group" hidden>
                    <div class=" col-lg-4">
                        <label for="area" class="control-label"><span class="badge">ප්‍රදේශය :- </span></label>
                    </div>
                    <div class="col-lg-8">
                        <input id="area" type="text" class="form-control" name="area" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-4">
                        <label for="name" class="control-label"><span  class="badge">  නම:- </span></label>
                        <!--<label for="name" class="control-label"><span  class="">  </span></label>-->
                    </div>
                    <div class="col-lg-8">
                        <select id='name' name ="name" class="form-control" required>
                            <!--<option name="select" selected disabled >---තෝරන්න---</option>-->
<!--                            <option name="aluthwathu">සභාපති</option>
                            <option name="kahambili" >ලේකම්</option>
                            <option name="godaviti">භාණ්ඩාගාරික</option>
                            <option name="kolon">උප සභාපති</option>
                            <option name="meda">උප ලේකම්</option>
                            <option name="mahawathu 1">කාරක සභික</option>
                            <option name="mahawathu 2">ප්‍රධාන සංවිධායක</option>
                            <option name="walaw 1">වලව්  ගංගොඩ 1</option>
                            <option name="walaw 2">වලව්  ගංගොඩ 2</option>
                            <option name="wewailhala">වැව ඉහළ</option>-->
                        </select>
                    </div>
                </div>
               
  
            <div class="row col-lg-12" style="text-align: center">
                <button type="submit" class="btn btn-success">තොරතුරු ඇතුල් කරන්න&nbsp;<span class="glyphicon glyphicon-plus"></span></button>
                <!--<button id="reset" type="reset"  class="btn btn-warning">නව තොරතුරු ඉවත් කරන්න&nbsp;<span class="glyphicon glyphicon-refresh"></span></button>-->
            </div>
        </form>
    </div>
</div>
</div>