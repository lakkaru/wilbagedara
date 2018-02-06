<div id="container" class="row well ">  
    <div class="col-lg-12">
        <legend class="lead">සාමාජිකත්වයක් ඉවත් කිරීම </legend>
    </div>
    <form method="post" id="searchIdForm" class="form-horizontal container-fluid" action="<?php echo URL; ?>awamangala/searchId" >  
        <div class="form-group">
            <div class=" col-lg-1">
                <label for="awaMemId" class="control-label"><span class="badge">සාමාජික අංකය :- </span></label>
            </div>
            <div class="col-lg-2">
                <input id="awaMemId" type="number" class="form-control" name="awaMemId" autofocus>
            </div>
            <div class="row col-lg-5" style="text-align: left">
                <button type="button" id="searchId" class="btn btn-success">සොයන්න&nbsp;<span class="glyphicon glyphicon-search"></span></button>
                <!--<button type="submit" id="editId" form="editIdForm"class="btn btn-info" disabled>යාවත්කාල කරන්න&nbsp;<span class="glyphicon glyphicon-edit"></span></button>-->
                <span id="notUsed" hidden>සාමාජික අංකය භාවිතා කර නොමැත.</span>
<!--<button type="reset"  class="btn btn-warning">නව තොරතුරු ඉවත් කරන්න&nbsp;<span class="glyphicon glyphicon-refresh"></span></button>-->
            </div>
        </div>
    </form>
    <div class="col-lg-12">
        <form method="post" id="" class="form-horizontal container-fluid deleteForm" action="<?php echo URL; ?>awamangala/deleteId" >  
            <div id="delForm" class="col-lg-4  well" hidden>
                <div class="form-group" hidden >
                    <div class=" col-lg-4 flp0">
                        <label for="memId" class="control-label"><span class="badge">සාමාජික අංකය :- </span></label>
                    </div>
                    <div class="col-lg-8">
                        <input id="memId" type="text" class="form-control" name="memId" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-4 flp0">
                        <label for="name" class="control-label"><span class="badge">සාමාජිකයගේ නම :- </span></label>
                    </div>
                    <div class="col-lg-8">
                        <input id="name" type="text" class="form-control" name="name" readonly required>
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-4  flp0">
                        <label for="deletedDate" class="control-label"><span class="badge">ඉවත් කල දිනය :-</span></label>
                    </div>
                    <div class="col-lg-8">
                        <input id="deletedDate" type="text" class="form-control datepicker" name="deletedDate" >
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-4 flp0">
                        <label for="reson" class="control-label"><span class="badge">  ඉවත් කිරීමට හේතුව- </span></label>
                    </div>
                    <div class="col-lg-8 ">
                        <select class="form-control" id='reson' name="reson" required>                         
                            <option selected disabled></option>
                            <option  name="request">ඉල්ලා අස්වීම</option>
                            <option  name="nopay">හිඟ මුදල් නොගෙවීම</option>
                            <option  name="outres">බළ ප්‍රදේශයෙන් ඉවත්වීම</option>
                            <option  name="abson">මහ සභාවට සහභාගී නොවීම</option>
                            <option  name="break">ව්‍යවස්ථාව උල්ලංගනය කිරීම</option>
                            <option  name="wrong">වැරදි ඇතුලත් කිරීමක්</option>
                        </select> 

                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-4 flp0">
                        <label for="detail" class="control-label"><span class="badge">වෙනත් තොරතුරු :-</span></label>
                    </div>
                    <div class="col-lg-8">
                        <textarea id="detail" type="text" class="form-control" name="detail" required></textarea>
                    </div>
                </div>
                <div>
                    <input type="button" style="float: right" class="btn btn-warning deleteButton" value="ඉවත් කරන්න">
                </div>
            </div> 
        </form>
    </div>
</div>

