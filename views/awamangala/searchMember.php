<div id="container" class="row well ">  
    <div class="col-lg-12">
        <legend class="lead">සාමාජික තොරතුරු සෙවීම </legend>
    </div>
    <form method="post" id="searchIdForm" class="form-horizontal container-fluid" action="<?php echo URL; ?>awamangala/searchId" >  
        <div class="form-group"  <?php  if (Session::get('rank')<> 'ලේකම්') {echo "hidden";};?>>
            <div class=" col-lg-1">
                <label for="awaMemId" class="control-label"><span class="badge">සාමාජික අංකය :- </span></label>
            </div>
            <div class="col-lg-2">
                <?php  if (Session::get('loggedIn')== 'user') {
                    $awaMemId=Session::get('awaMemId');
//                    $readOnly="readOnly";
                }
                else{
                    $awaMemId='';
//                    $readOnly="";
                }?>
                <input id="awaMemId" type="number" class="form-control" name="awaMemId" autofocus value="<?php echo $awaMemId?>" />
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
        <form method="post" id="editIdForm" class="form-horizontal container-fluid" action="<?php echo URL; ?>awamangala/editId" >  
        <div class="col-lg-4  well">
            <div class="form-group">
                <div class=" col-lg-5  flp0">
                    <label for="joinedDate" class="control-label"><span class="badge">සාමාජිකත්වය ලැබූ දිනය :-</span></label>
                </div>
                <div class="col-lg-7" >
                    <input id="joinedDate" type="text" class="form-control " name="joinedDate" readonly value="<?php if (isset($this->memberDataList[0]['mem'][0])){ echo $this->memberDataList[0]['mem'][0] ['joinedDate'];}?>" >
                </div>
            </div>
            <div class="form-group">
                <div class=" col-lg-5  flp0">
                    <label for="updatedDate" class="control-label"><span class="badge">තොරතුරු යාවත්කාල කල දිනය :-</span></label>
                </div>
                <div class="col-lg-7">
                    <input id="updatedDate" type="text" class="form-control " name="updatedDate" readonly  value="<?php if (isset($this->memberDataList[0]['mem'][0])){ echo $this->memberDataList[0]['mem'][0] ['updatedDate'];}?>">
                </div>
            </div>
            <div class="form-group">
                <div class=" col-lg-4 flp0">
                    <label for="memId" class="control-label"><span class="badge">සාමාජික අංකය :- </span></label>
                </div>
                <div class="col-lg-8">
                    <input id="memId" type="text" class="form-control" name="memId" readonly value="<?php if (isset($this->memberDataList[0]['mem'][0])){ echo $this->memberDataList[0]['mem'][0] ['awaMemId'];}?>">
                </div>
            </div>
            <div class="form-group">
                <div class=" col-lg-4 flp0">
                    <label for="name" class="control-label"><span class="badge">සාමාජිකයගේ නම :- </span></label>
                </div>
                <div class="col-lg-8">
                    <input id="name" type="text" class="form-control" name="name" readonly value="<?php if (isset($this->memberDataList[0]['mem'][0])){ echo $this->memberDataList[0]['mem'][0] ['name'];}?>">
                </div>
            </div>
            <div class="form-group">
                <div class=" col-lg-4 flp0">
                    <label for="area" class="control-label"><span class="badge">  ප්‍රදේශය:- </span></label>
                </div>
                <div class="col-lg-8">
                    <input id="area" type="text" class="form-control" name="area" readonly value="<?php if (isset($this->memberDataList[0]['mem'][0])){ echo $this->memberDataList[0]['mem'][0] ['area'];}?>">
                </div>
            </div>
            <div class="form-group">
                <div class=" col-lg-4 flp0">
                    <label for="address" class="control-label"><span class="badge">ලිපිනය :-</span></label>
                </div>
                <div class="col-lg-8">
                    <input id="address" type="text" class="form-control" name="address" readonly value="<?php if (isset($this->memberDataList[0]['mem'][0])){ echo $this->memberDataList[0]['mem'][0] ['address'];}?>">
                </div>
            </div>
            <div class="form-group">
                <div class=" col-lg-4 flp0">
                    <label for="email" class="control-label"><span class="badge">විද්‍යුත් ලිපිනය :-</span></label>
                </div>
                <div class="col-lg-8">
                    <input id="email" type="text" class="form-control" name="email" readonly value="<?php if (isset($this->memberDataList[0]['mem'][0])){ echo $this->memberDataList[0]['mem'][0] ['email'];}?>">
                </div>
            </div>
            <div class="form-group">
                <div class=" col-lg-4 flp0">
                    <label  class="control-label"><span class="badge">දුරකතන අංකය :- </span></label>
                </div>
                <div class="col-lg-8">
                    <label  for="resTel" class="control-label"><span class="badge">නිවස:- </span></label>
                    <input id="resTel" type="number" class="form-control" name="resTel" readonly value="<?php if (isset($this->memberDataList[0]['mem'][0])){ echo $this->memberDataList[0]['mem'][0] ['resTel'];}?>">
                    <label  for="mobTel" class="control-label"><span class="badge">ජංගම :- </span></label>
                    <input id="mobTel" type="number" class="form-control" name="mobTel" readonly value="<?php if (isset($this->memberDataList[0]['mem'][0])){ echo $this->memberDataList[0]['mem'][0] ['mobTel'];}?>">
                </div>
            </div>
            <div class="form-group">
                <div class=" col-lg-4 flp0">
                    <label for="birthday" class="control-label"><span class="badge">උපන් දිනය :-</span></label>
                </div>
                <div class="col-lg-8">
                    <input id="birthday" type="text" class="form-control datepicker" name="birthday" readonly value="<?php  if (isset($this->memberDataList[0]['mem'][0])){echo $this->memberDataList[0]['mem'][0] ['birthday'];}?>">
                </div>
            </div>
            <div class="form-group">
                <div class=" col-lg-4 flp0">
                    <label for="nic" class="control-label"><span class="badge">හැඳුනුම්පත් අංකය :-</span></label>
                </div>
                <div class="col-lg-8">
                    <input id="nic" type="text" class="form-control" name="nic" readonly value="<?php if (isset($this->memberDataList[0]['mem'][0])){echo $this->memberDataList[0]['mem'][0] ['nic'];}?>">
                </div>
            </div>
        </div>
        <div class="col-lg-8  well">
            <div class="form-group ">
                <div class=" col-lg-2">
                    <label for="exPay" class="control-label"><span class="badge">අතිරේක ගෙවීම් රුපියල් :-</span></label>
                </div>
                <div class="col-lg-2">
                    <input id="exPayRu" type="number" class="form-control" min="0" name="exPayRu" placeholder=0 readonly value="<?php if (isset($this->memberDataList[0]['expay'][0])){ echo $this->memberDataList[0]['expay'][0] ['amount'];}?>">
                </div>
                <div class="col-lg-8">
                    
                </div>
            </div>
            <div class="form-group" id="repdiv">
                <div class=" col-lg-2">
                    <label for="repName" class="control-label"><span class="badge">නියෝජිත යැපෙන්නා :-</span></label>
                </div>
                <div class="col-lg-3">
                    <input id="repName" type="text" class="form-control" name="repName" readonly value="<?php if (isset($this->memberDataList[0]['rep'][0])){ echo $this->memberDataList[0]['rep'][0] ['name'];}?>">
                </div> 
                <div class=" col-lg-2">
                    <label for="repRel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                </div>
                <div class="col-lg-2">
                    <input id="repRel" type="text" class="form-control" name="repRel" readonly value="<?php if (isset($this->memberDataList[0]['rep'][0])){echo $this->memberDataList[0]['rep'][0] ['relationship'];}?>">
                </div> 
                <div class=" col-lg-2">
                    <label for="repAge" class="control-label"><span class="badge">වයස අවුරුදු :-</span></label>
                </div>
                <div class="col-lg-1" style="text-align: left; padding: 0">
                    <input id="repAge" type="text" class="form-control" name="repAge" readonly value="<?php if (isset($this->memberDataList[0]['rep'][0])){echo( (date("Y-m-d"))-($this->memberDataList[0]['rep'][0] ['birthday']));}?>">
                </div> 
            </div>
            <div class="form-group" id="dep2" <?php if (count($this->memberDataList[0]['dep'])<1) echo 'hidden' ?>>
                <div class=" col-lg-2">
                    <label for="dep2Name" class="control-label"><span class="badge">දෙවැනි යැපෙන්නා :-</span></label>
                </div>
                <div class="col-lg-3">
                    <input id="dep2Name" type="text" class="form-control" name="dep2Name" readonly value="<?php if(isset($this->memberDataList[0]['dep'][0])){echo $this->memberDataList[0]['dep'][0] ['name'];}?>">
                </div>
                <div class=" col-lg-2">
                    <label for="dep2Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                </div>
                <div class="col-lg-2">
                    <input id="dep2Rel" type="text" class="form-control" name="dep2Rel" readonly  value="<?php if(isset($this->memberDataList[0]['dep'][0])){echo $this->memberDataList[0]['dep'][0] ['relationship'];}?>">
                </div> 
                <div class=" col-lg-2">
                    <label for="dep2Age" class="control-label"><span class="badge">වයස අවුරුදු :-</span></label>
                </div>
                <div class="col-lg-1" style="text-align: left; padding: 0">
                    <input id="dep2Age" type="text" class="form-control" name="dep2Age" readonly value="<?php if (isset($this->memberDataList[0]['dep'][0])){echo( (date("Y-m-d"))-($this->memberDataList[0]['dep'][0] ['birthday']));}?>">
                </div> 
            </div>
            <div class="form-group" id="dep3"  <?php if (count($this->memberDataList[0]['dep'])<2) echo 'hidden' ?>>
                <div class=" col-lg-2">
                    <label for="dep3Name" class="control-label"><span class="badge">තුන්වෙනි යැපෙන්නා :-</span></label>
                </div>
                <div class="col-lg-3">
                    <input id="dep3Name" type="text" class="form-control" name="dep3Name" readonly value="<?php if(isset($this->memberDataList[0]['dep'][1])){echo $this->memberDataList[0]['dep'][1] ['name'];}?>">
                </div>
                <div class=" col-lg-2">
                    <label for="dep3Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                </div>
                <div class="col-lg-2">
                    <input id="dep3Rel" type="text" class="form-control" name="dep3Rel" readonly value="<?php if(isset($this->memberDataList[0]['dep'][1])){echo $this->memberDataList[0]['dep'][1] ['relationship'];}?>">
                </div> 
                <div class=" col-lg-2">
                    <label for="dep3Age" class="control-label"><span class="badge">වයස අවුරුදු :-</span></label>
                </div>
                <div class="col-lg-1" style="text-align: left; padding: 0">
                    <input id="dep3Age" type="text" class="form-control" name="dep3Age" readonly  value="<?php if (isset($this->memberDataList[0]['dep'][1])){echo( (date("Y-m-d"))-($this->memberDataList[0]['dep'][1] ['birthday']));}?>">
                </div> 
            </div>
            <div class="form-group" id="dep4"  <?php if (count($this->memberDataList[0]['dep'])<3) echo 'hidden' ?>>
                <div class=" col-lg-2">
                    <label for="dep4Name" class="control-label"><span class="badge">හතරවෙනි යැපෙන්නා :-</span></label>
                </div>
                <div class="col-lg-3">
                    <input id="dep4Name" type="text" class="form-control" name="dep4Name" readonly value="<?php if(isset($this->memberDataList[0]['dep'][2])){echo $this->memberDataList[0]['dep'][2] ['name'];}?>">
                </div>
                <div class=" col-lg-2">
                    <label for="dep4Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                </div>
                <div class="col-lg-2">
                    <input id="dep4Rel" type="text" class="form-control" name="dep4Rel" readonly value="<?php if(isset($this->memberDataList[0]['dep'][2])){echo $this->memberDataList[0]['dep'][2] ['relationship'];}?>">
                </div> 
                <div class=" col-lg-2">
                    <label for="dep4Age" class="control-label"><span class="badge">වයස අවුරුදු :-</span></label>
                </div>
                <div class="col-lg-1" style="text-align: left; padding: 0">
                    <input id="dep4Age" type="text" class="form-control" name="dep4Age" readonly value="<?php if (isset($this->memberDataList[0]['dep'][2])){echo( (date("Y-m-d"))-($this->memberDataList[0]['dep'][2] ['birthday']));}?>">
                </div> 
            </div>
            <div class="form-group" id="dep5"  <?php if (count($this->memberDataList[0]['dep'])<4) echo 'hidden' ?>>
                <div class=" col-lg-2">
                    <label for="dep5Name" class="control-label"><span class="badge">පස්වෙනි යැපෙන්නා :-</span></label>
                </div>
                <div class="col-lg-3">
                    <input id="dep5Name" type="text" class="form-control" name="dep5Name" readonly value="<?php if(isset($this->memberDataList[0]['dep'][3])){echo $this->memberDataList[0]['dep'][3] ['name'];}?>">
                </div>
                <div class=" col-lg-2">
                    <label for="dep5Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                </div>
                <div class="col-lg-2">
                    <input id="dep5Rel" type="text" class="form-control" name="dep5Rel" readonly value="<?php if(isset($this->memberDataList[0]['dep'][2])){echo $this->memberDataList[0]['dep'][2] ['relationship'];}?>">
                </div> 
                <div class=" col-lg-2">
                    <label for="dep5Age" class="control-label"><span class="badge">වයස අවුරුදු :-</span></label>
                </div>
                <div class="col-lg-1" style="text-align: left; padding: 0">
                    <input id="dep5Age" type="text" class="form-control" name="dep5Age" readonly  value="<?php if (isset($this->memberDataList[0]['dep'][3])){echo( (date("Y-m-d"))-($this->memberDataList[0]['dep'][3] ['birthday']));}?>">
                </div> 
            </div>
            <div class="form-group" id="dep6"  <?php if (count($this->memberDataList[0]['dep'])<5) echo 'hidden' ?>>
                <div class=" col-lg-2">
                    <label for="dep6Name" class="control-label"><span class="badge">හයවෙනි යැපෙන්නා :-</span></label>
                </div>
                <div class="col-lg-3">
                    <input id="dep6Name" type="text" class="form-control" name="dep6Name" readonly value="<?php if(isset($this->memberDataList[0]['dep'][4])){echo $this->memberDataList[0]['dep'][4] ['name'];}?>">
                </div>
                <div class=" col-lg-2">
                    <label for="dep6Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                </div>
                <div class="col-lg-2">
                    <input id="dep6Rel" type="text" class="form-control" name="dep6Rel" readonly value="<?php if(isset($this->memberDataList[0]['dep'][4])){echo $this->memberDataList[0]['dep'][4] ['relationship'];}?>">
                </div> 
                <div class=" col-lg-2">
                    <label for="dep6Age" class="control-label"><span class="badge">වයස අවුරුදු :-</span></label>
                </div>
                <div class="col-lg-1" style="text-align: left; padding: 0">
                    <input id="dep6Age" type="text" class="form-control" name="dep6Age" readonly value="<?php if (isset($this->memberDataList[0]['dep'][4])){echo( (date("Y-m-d"))-($this->memberDataList[0]['dep'][4] ['birthday']));}?>">
                </div> 
            </div>
            <div class="form-group" id="dep7"  <?php if (count($this->memberDataList[0]['dep'])<6) echo 'hidden' ?>>
                <div class=" col-lg-2">
                    <label for="dep7Name" class="control-label"><span class="badge">හත්වෙනි යැපෙන්නා :-</span></label>
                </div>
                <div class="col-lg-3">
                    <input id="dep7Name" type="text" class="form-control" name="dep7Name" readonly value="<?php if(isset($this->memberDataList[0]['dep'][5])){echo $this->memberDataList[0]['dep'][5] ['name'];}?>">
                </div>
                <div class=" col-lg-2">
                    <label for="dep7Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                </div>
                <div class="col-lg-2">
                    <input id="dep7Rel" type="text" class="form-control" name="dep7Rel" readonly value="<?php if(isset($this->memberDataList[0]['dep'][5])){echo $this->memberDataList[0]['dep'][5] ['relationship'];}?>">
                </div> 
                <div class=" col-lg-2">
                    <label for="dep7Age" class="control-label"><span class="badge">වයස අවුරුදු :-</span></label>
                </div>
                <div class="col-lg-1" style="text-align: left; padding: 0">
                    <input id="dep7Age" type="text" class="form-control" name="dep7Age" readonly value="<?php if (isset($this->memberDataList[0]['dep'][5])){echo( (date("Y-m-d"))-($this->memberDataList[0]['dep'][5] ['birthday']));}?>">
                </div> 
            </div>
            <div class="form-group" id="dep8"  <?php if (count($this->memberDataList[0]['dep'])<7) echo 'hidden' ?>>
                <div class=" col-lg-2">
                    <label for="dep8Name" class="control-label"><span class="badge">අටවෙනි යැපෙන්නා :-</span></label>
                </div>
                <div class="col-lg-3">
                    <input id="dep8Name" type="text" class="form-control" name="dep8Name" readonly value="<?php if(isset($this->memberDataList[0]['dep'][6])){echo $this->memberDataList[0]['dep'][6] ['name'];}?>">
                </div>
                <div class=" col-lg-2">
                    <label for="dep8Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                </div>
                <div class="col-lg-2">
                    <input id="dep8Rel" type="text" class="form-control" name="dep8Rel" readonly value="<?php if(isset($this->memberDataList[0]['dep'][6])){echo $this->memberDataList[0]['dep'][6] ['relationship'];}?>">
                </div> 
                <div class=" col-lg-2">
                    <label for="dep8Age" class="control-label"><span class="badge">වයස අවුරුදු :-</span></label>
                </div>
                <div class="col-lg-1" style="text-align: left; padding: 0">
                    <input id="dep8Age" type="text" class="form-control" name="dep8Age" readonly value="<?php if (isset($this->memberDataList[0]['dep'][6])){echo( (date("Y-m-d"))-($this->memberDataList[0]['dep'][6] ['birthday']));}?>">
                </div> 
            </div>
            <div class="form-group" id="dep9"  <?php if (count($this->memberDataList[0]['dep'])<8) echo 'hidden' ?>>
                <div class=" col-lg-2">
                    <label for="dep9Name" class="control-label"><span class="badge">නවවෙනි යැපෙන්නා :-</span></label>
                </div>
                <div class="col-lg-3">
                    <input id="dep9Name" type="text" class="form-control" name="dep9Name" readonly value="<?php if(isset($this->memberDataList[0]['dep'][7])){echo $this->memberDataList[0]['dep'][7] ['name'];}?>">
                </div>
                <div class=" col-lg-2">
                    <label for="dep9Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                </div>
                <div class="col-lg-2">
                    <input id="dep9Rel" type="text" class="form-control" name="dep9Rel" readonly value="<?php if(isset($this->memberDataList[0]['dep'][7])){echo $this->memberDataList[0]['dep'][7] ['relationship'];}?>">
                </div> 
                <div class=" col-lg-2">
                    <label for="dep9Age" class="control-label"><span class="badge">වයස අවුරුදු :-</span></label>
                </div>
                <div class="col-lg-1" style="text-align: left; padding: 0">
                    <input id="dep9Age" type="text" class="form-control" name="dep9Age" readonly value="<?php if (isset($this->memberDataList[0]['dep'][7])){echo( (date("Y-m-d"))-($this->memberDataList[0]['dep'][7] ['birthday']));}?>">
                </div> 
            </div>
            <div class="form-group" id="dep10"  <?php if (count($this->memberDataList[0]['dep'])<9) echo 'hidden' ?>>
                <div class=" col-lg-2">
                    <label for="dep10Name" class="control-label"><span class="badge">දසවෙනි යැපෙන්නා :-</span></label>
                </div>
                <div class="col-lg-3">
                    <input id="dep10Name" type="text" class="form-control" name="dep10Name" readonly value="<?php if(isset($this->memberDataList[0]['dep'][8])){echo $this->memberDataList[0]['dep'][8] ['name'];}?>">
                </div>
                <div class=" col-lg-2">
                    <label for="dep10Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                </div>
                <div class="col-lg-2">
                    <input id="dep10Rel" type="text" class="form-control" name="dep10Rel" readonly value="<?php if(isset($this->memberDataList[0]['dep'][8])){echo $this->memberDataList[0]['dep'][8] ['relationship'];}?>">
                </div> 
                <div class=" col-lg-2">
                    <label for="dep10Age" class="control-label"><span class="badge">වයස අවුරුදු :-</span></label>
                </div>
                <div class="col-lg-1" style="text-align: left; padding: 0">
                    <input id="dep10Age" type="text" class="form-control" name="dep10Age" readonly value="<?php if (isset($this->memberDataList[0]['dep'][8])){echo( (date("Y-m-d"))-($this->memberDataList[0]['dep'][8] ['birthday']));}?>">
                </div> 
            </div>
        </div> 
        </form>
    </div>
</div>

