<div id="container" class="row well ">  
    <div class="col-lg-12">
        <legend class="lead">සාමාජික තොරතුරු යාවත්කාල කිරීම  <button type="submit" form="editSaveForm" class="btn btn-success">නව තොරතුරු ඇතුලු කරන්න&nbsp;<span class="glyphicon glyphicon-plus"></span></button><a href="javascript:history.go(-1)"><span class="glyphicon glyphicon-backward" ></span>&nbsp;ආපසු&nbsp;<span class="glyphicon glyphicon-backward" ></span></a></legend>
    </div>
    <div class="col-lg-4  well">
        <form method="post" id="editSaveForm" class="form-horizontal container-fluid" action="<?php echo URL; ?>awamangala/editSave" >  
                <div class="form-group">
                    <div class=" col-lg-4">
                        <label for="joinedDate" class="control-label"><span class="badge">සාමාජිකත්වය ලැබූ දිනය :-</span></label>
                    </div>
                    <div class="col-lg-8">
                        <input id="joinedDate" type="text" class="form-control birthday" name="joinedDate" value="<?php echo $this->memberList[0]['mem'][0] ['joinedDate']?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-4">
                        <label for="updatedDate" class="control-label"><span class="badge">යාවත්කාල කල දිනය :-</span></label>
                    </div>
                    <div class="col-lg-8">
                        <input id="updatedDate" type="text" class="form-control birthday" name="updatedDate" value="<?php echo $this->memberList[0]['mem'][0] ['updatedDate']?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-4">
                        <label for="awaMemId" class="control-label"><span class="badge">සාමාජික අංකය :- </span></label>
                    </div>
                    <div class="col-lg-8">
                        <input id="awaMemId" type="number" class="form-control" readonly name="awaMemId" value="<?php echo $this->memberList[0]['mem'][0] ['awaMemId']?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-4">
                        <label for="name" class="control-label"><span class="badge">සාමාජිකයගේ නම :- </span></label>
                    </div>
                    <div class="col-lg-8">
                        <input id="name" type="text" class="form-control" name="name" value="<?php echo $this->memberList[0]['mem'][0] ['name']?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-4">
                        <label for="area" class="control-label"><span class="badge">  ප්‍රදේශය:- </span></label>
                    </div>
                    <div class="col-lg-8">
                        <select name ="area" class="form-control" required><!--area input field-->
                            <!--<option name="select" selected disabled >---තෝරන්න---</option>-->
                            <option name="aluthwathu" <?php if($this->memberList[0]['mem'][0] ['area']=='අලුත්වතු ගංගොඩ')echo 'selected'?>value="අලුත්වතු ගංගොඩ">අලුත්වතු ගංගොඩ</option>
                            <option name="kahambili" <?php if ($this->memberList[0]['mem'][0] ['area']== 'කහඹිලියාව') echo 'selected' ?> value="කහඹිලියාව">කහඹිලියාව</option>
                            <option name="godaviti" <?php if ($this->memberList[0]['mem'][0] ['area']== 'ගොඩවිටිගෙදර') echo 'selected' ?>  value="ගොඩවිටිගෙදර">ගොඩවිටිගෙදර</option>
                            <option name="kolon"  <?php if ($this->memberList[0]['mem'][0] ['area']== 'කොලොන්ගස්යාය') echo 'selected' ?> value="කොලොන්ගස්යාය">කොලොන්ගස්යාය</option>
                            <option name="meda" <?php if ($this->memberList[0]['mem'][0] ['area']== 'මැද ගංගොඩ') echo 'selected' ?> value="මැද ගංගොඩ">මැද ගංගොඩ</option>
                            <option name="mahawathu 1" <?php if ($this->memberList[0]['mem'][0] ['area']== 'මහවතු ගංගොඩ 1') echo 'selected' ?> value="මහවතු ගංගොඩ 1">මහවතු ගංගොඩ 1</option>
                            <option name="mahawathu 2" <?php if ($this->memberList[0]['mem'][0] ['area']== 'මහවතු ගංගොඩ 2') echo 'selected' ?> value="මහවතු ගංගොඩ 2">මහවතු ගංගොඩ 2</option>
                            <option name="walaw 1" <?php if ($this->memberList[0]['mem'][0] ['area']== 'වලව්  ගංගොඩ 1') echo 'selected' ?>value="වලව්  ගංගොඩ 1">වලව්  ගංගොඩ 1</option>
                            <option name="walaw 2" <?php if ($this->memberList[0]['mem'][0] ['area']== 'වලව්  ගංගොඩ 2') echo 'selected' ?> value="වලව්  ගංගොඩ 2">වලව්  ගංගොඩ 2</option>
                            <option name="wewailhala" <?php if ($this->memberList[0]['mem'][0] ['area']== 'වැව ඉහළ') echo 'selected' ?> value="වැව ඉහළ">වැව ඉහළ</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-4">
                        <label for="address" class="control-label"><span class="badge">ලිපිනය :-</span></label>
                    </div>
                    <div class="col-lg-8">
                        <input id="address" type="text" class="form-control" name="address" value="<?php echo $this->memberList[0]['mem'][0] ['address']?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-4">
                        <label for="email" class="control-label"><span class="badge">විද්‍යුත් ලිපිනය :-</span></label>
                    </div>
                    <div class="col-lg-8">
                        <input id="email" type="text" class="form-control" name="email" value="<?php echo $this->memberList[0]['mem'][0] ['email']?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-4">
                        <label  class="control-label"><span class="badge">දුරකතන අංකය :- </span></label>
                    </div>
                    <div class="col-lg-8">
                        <label  for="resTel" class="control-label"><span class="badge">නිවස:- </span></label>
                        <input id="resTel" type="number" class="form-control" name="resTel" value="<?php echo $this->memberList[0]['mem'][0] ['resTel']?>">
                        <label  for="mobTel" class="control-label"><span class="badge">ජංගම :- </span></label>
                        <input id="mobTel" type="number" class="form-control" name="mobTel" value="<?php echo $this->memberList[0]['mem'][0] ['mobTel']?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-4">
                        <label for="birthday" class="control-label"><span class="badge">උපන් දිනය :-</span></label>
                    </div>
                    <div class="col-lg-8">
                        <input id="birthday" type="text" class="form-control " name="birthday" value="<?php echo $this->memberList[0]['mem'][0] ['birthday']?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-4">
                        <label for="nic" class="control-label"><span class="badge">හැඳුනුම්පත් අංකය :-</span></label>
                    </div>
                    <div class="col-lg-8">
                        <input id="nic" type="text" class="form-control" name="nic" value="<?php echo $this->memberList[0]['mem'][0] ['nic']?>">
                    <a href="http://eservices.elections.gov.lk/myVoterRegistration.aspx"  target="_blank" >චන්ද හිමි නාම ලේඛනය පිරික්සන්න</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8  well">
                <div class="form-group row">
                    <div class=" col-lg-2">
                        <label for="exPay" class="control-label"><span class="badge">අතිරේක ගෙවීම් රුපියල් :-</span></label>
                    </div>
                    <div class="col-lg-2">
                        <input id="exPayRu" type="number" class="form-control" min="0" name="exPayRu" value="<?php if(isset($this->memberList[0]['expay'][0])){echo $this->memberList[0]['expay'][0] ['amount'];}?>">
                    </div>
                    <div class="col-lg-8">
                        <label>කරුණාකර ඉවත් කල යුතු යැපෙන්නන්ගේ නම් මකා දමන්න.</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-2" >
                        <label for="repName" class="control-label"><span class="badge">නියෝජිත යැපෙන්නා :-</span></label>
                    </div>
                    <div class="col-lg-3 flp0">
                        <input id="repName" type="text" class="form-control" name="repName" value="<?php  if(isset($this->memberList[0]['rep'][0])){ echo $this->memberList[0]['rep'][0] ['name'];}?>">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="repRel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                    </div>
                    <div class=" col-lg-2 flp0">
                        <select class="form-control" id='repRel' name="repRel" >                         
                            <option <?php if (! isset($this->memberList[0]['rep'][0])) echo 'selected' ?> disabled name="select">තෝරන්න</option>
                            <option <?php if ((isset($this->memberList[0]['rep'][0])) && $this->memberList[0]['rep'][0] ['relationship'] == "මව") echo 'selected' ?> name="mother">මව</option>
                            <option <?php if ((isset($this->memberList[0]['rep'][0])) && $this->memberList[0]['rep'][0] ['relationship'] == "පියා") echo 'selected' ?> name="father">පියා</option>
                            <option <?php if ((isset($this->memberList[0]['rep'][0])) && $this->memberList[0]['rep'][0] ['relationship'] == "බිරිඳ") echo 'selected' ?> name="wife">බිරිඳ</option>
                            <option <?php if ((isset($this->memberList[0]['rep'][0])) && $this->memberList[0]['rep'][0] ['relationship'] == "සැමියා") echo 'selected' ?> name="husbond">සැමියා</option>
                            <option <?php if ((isset($this->memberList[0]['rep'][0])) && $this->memberList[0]['rep'][0] ['relationship']  == "දුව") echo 'selected' ?> name="daughter">දුව</option>
                            <option <?php if ((isset($this->memberList[0]['rep'][0])) && $this->memberList[0]['rep'][0] ['relationship'] == "පුතා") echo 'selected' ?> name="son">පුතා</option>
                            <option <?php if ((isset($this->memberList[0]['rep'][0])) && $this->memberList[0]['rep'][0] ['relationship'] == "සහෝදරිය") echo 'selected' ?> name="sister">සහෝදරිය</option>
                            <option <?php if ((isset($this->memberList[0]['rep'][0])) && $this->memberList[0]['rep'][0] ['relationship'] == "සහෝදරයා") echo 'selected' ?> name="brother">සහෝදරයා</option>
                            <option <?php if ((isset($this->memberList[0]['rep'][0])) && $this->memberList[0]['rep'][0] ['relationship'] == "වෙනත්") echo 'selected' ?> name="other">වෙනත්</option>>          
                        </select> 
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="repBirthday" class="control-label"><span class="badge">උපන් දිනය :-</span></label>
                    </div>
                    <div class="col-lg-2">
                        <input id="repBirthday" type="text" class="form-control birthday" name="repBirthday" value="<?php  if (isset($this->memberList[0]['rep'][0])){echo $this->memberList[0]['rep'][0] ['birthday'];}?>">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <input type="button"  id="dep1Btn" class=" btn form-control btn-info"  value="ඊලඟ">
                    </div>
                </div>
                <div class="form-group" id="dep2" <?php if (count($this->memberList[0]['dep'])<1) echo 'hidden' ?>>
                    <div class=" col-lg-2">
                        <label for="dep2Name" class="control-label"><span class="badge">දෙවැනි යැපෙන්නා :-</span></label>
                    </div>
                    <div class="col-lg-3 flp0">
                        <input id="dep2Name" type="text" class="form-control" name="dep2Name" value="<?php if(isset($this->memberList[0]['dep'][0])){echo $this->memberList[0]['dep'][0] ['name'];}?>">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep2Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                    </div>
                    <div class=" col-lg-2 flp0">
                        <select class="form-control" id='depRel' name="dep2Rel" >
                             <option <?php if (! isset($this->memberList[0]['dep'][0])) echo 'selected' ?> disabled  name="select">තෝරන්න</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][0])) && $this->memberList[0]['dep'][0] ['relationship'] == "මව") echo 'selected' ?> name="mother">මව</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][0])) && $this->memberList[0]['dep'][0] ['relationship'] == "පියා") echo 'selected' ?> name="father">පියා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][0])) && $this->memberList[0]['dep'][0] ['relationship'] == "බිරිඳ") echo 'selected' ?> name="wife">බිරිඳ</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][0])) && $this->memberList[0]['dep'][0] ['relationship'] == "සැමියා") echo 'selected' ?> name="husbond">සැමියා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][0])) && $this->memberList[0]['dep'][0] ['relationship']  == "දුව") echo 'selected' ?> name="daughter">දුව</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][0])) && $this->memberList[0]['dep'][0] ['relationship'] == "පුතා") echo 'selected' ?> name="son">පුතා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][0])) && $this->memberList[0]['dep'][0] ['relationship'] == "සහෝදරිය") echo 'selected' ?> name="sister">සහෝදරිය</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][0])) && $this->memberList[0]['dep'][0] ['relationship'] == "සහෝදරයා") echo 'selected' ?> name="brother">සහෝදරයා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][0])) && $this->memberList[0]['dep'][0] ['relationship'] == "වෙනත්") echo 'selected' ?> name="other">වෙනත්</option>>          
                        </select>  
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep2Birthday" class="control-label"><span class="badge">උපන් දිනය :-</span></label>
                    </div>
                    <div class="col-lg-2">
                        <input id="dep2Birthday" type="text" class="form-control birthday" name="dep2Birthday" value="<?php if (isset($this->memberList[0]['dep'][0])){echo $this->memberList[0]['dep'][0] ['birthday'];}?>">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <input type="button"  id="dep2Btn" class=" btn form-control btn-info"  value="ඊලඟ">
                    </div>
                </div>
                <div class="form-group" id="dep3" <?php if (count($this->memberList[0]['dep'])<2) echo 'hidden' ?>>
                    <div class=" col-lg-2">
                        <label for="dep3Name" class="control-label"><span class="badge">තෙවැනි යැපෙන්නා :-</span></label>
                    </div>
                    <div class="col-lg-3 flp0">
                        <input id="dep3Name" type="text" class="form-control" name="dep3Name" value="<?php if(isset($this->memberList[0]['dep'][1])){echo $this->memberList[0]['dep'][1] ['name'];}?>">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep3Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                    </div>
                    <div class=" col-lg-2 flp0">
                        <select class="form-control" id='depRel' name="dep3Rel" >
                             <option <?php if (! isset($this->memberList[0]['dep'][1])) echo 'selected' ?>  disabled name="select">තෝරන්න</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][1])) && $this->memberList[0]['dep'][1] ['relationship'] == "මව") echo 'selected' ?> name="mother">මව</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][1])) && $this->memberList[0]['dep'][1] ['relationship'] == "පියා") echo 'selected' ?> name="father">පියා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][1])) && $this->memberList[0]['dep'][1] ['relationship'] == "බිරිඳ") echo 'selected' ?> name="wife">බිරිඳ</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][1])) && $this->memberList[0]['dep'][1] ['relationship'] == "සැමියා") echo 'selected' ?> name="husbond">සැමියා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][1])) && $this->memberList[0]['dep'][1] ['relationship']  == "දුව") echo 'selected' ?> name="daughter">දුව</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][1])) && $this->memberList[0]['dep'][1] ['relationship'] == "පුතා") echo 'selected' ?> name="son">පුතා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][1])) && $this->memberList[0]['dep'][1] ['relationship'] == "සහෝදරිය") echo 'selected' ?> name="sister">සහෝදරිය</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][1])) && $this->memberList[0]['dep'][1] ['relationship'] == "සහෝදරයා") echo 'selected' ?> name="brother">සහෝදරයා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][1])) && $this->memberList[0]['dep'][1] ['relationship'] == "වෙනත්") echo 'selected' ?> name="other">වෙනත්</option>>          
                        </select>   
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep3Birthday" class="control-label"><span class="badge">උපන් දිනය :-</span></label>
                    </div>
                    <div class="col-lg-2">
                        <input id="dep3Birthday" type="text" class="form-control birthday" name="dep3Birthday" value="<?php if (isset($this->memberList[0]['dep'][1])){echo $this->memberList[0]['dep'][1] ['birthday'];}?>">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <input type="button"  id="dep3Btn" class=" btn form-control btn-info"  value="ඊලඟ">
                    </div>
                </div>
                <div class="form-group" id="dep4" <?php if (count($this->memberList[0]['dep'])<3) echo 'hidden' ?>>
                    <div class=" col-lg-2">
                        <label for="dep4Name" class="control-label"><span class="badge">සිව්වැනි යැපෙන්නා :-</span></label>
                    </div>
                    <div class="col-lg-3 flp0">
                        <input type="text" class="form-control" name="dep4Name" value="<?php if(isset($this->memberList[0]['dep'][2])){echo $this->memberList[0]['dep'][2] ['name'];}?>">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep4Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                    </div>
                    <div class=" col-lg-2 flp0">
                        <select class="form-control" id='depRel' name="dep4Rel" >
                             <option <?php if (! isset($this->memberList[0]['dep'][2])) echo 'selected' ?>  disabled name="select">තෝරන්න</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][2])) && $this->memberList[0]['dep'][2] ['relationship'] == "මව") echo 'selected' ?>name="mother">මව</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][2])) && $this->memberList[0]['dep'][2] ['relationship'] == "පියා") echo 'selected' ?> name="father">පියා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][2])) && $this->memberList[0]['dep'][2] ['relationship'] == "බිරිඳ") echo 'selected' ?> name="wife">බිරිඳ</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][2])) && $this->memberList[0]['dep'][2] ['relationship'] == "සැමියා") echo 'selected' ?> name="husbond">සැමියා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][2])) && $this->memberList[0]['dep'][2] ['relationship']  == "දුව") echo 'selected' ?> name="daughter">දුව</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][2])) && $this->memberList[0]['dep'][2] ['relationship'] == "පුතා") echo 'selected' ?> name="son">පුතා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][2])) && $this->memberList[0]['dep'][2] ['relationship'] == "සහෝදරිය") echo 'selected' ?> name="sister">සහෝදරිය</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][2])) && $this->memberList[0]['dep'][2] ['relationship'] == "සහෝදරයා") echo 'selected' ?> name="brother">සහෝදරයා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][2])) && $this->memberList[0]['dep'][2] ['relationship'] == "වෙනත්") echo 'selected' ?> name="other">වෙනත්</option>>          
                        </select>  
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep4Birthday" class="control-label"><span class="badge">උපන් දිනය :-</span></label>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" class="form-control birthday" name="dep4Birthday"value="<?php if (isset($this->memberList[0]['dep'][2])){echo $this->memberList[0]['dep'][2] ['birthday'];}?>">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <input type="button"  id="dep4Btn" class=" btn form-control btn-info"  value="ඊලඟ">
                    </div>
                </div>
                <div class="form-group" id="dep5" <?php if (count($this->memberList[0]['dep'])<4) echo 'hidden' ?>>
                    <div class=" col-lg-2">
                        <label for="dep5Name" class="control-label"><span class="badge">පස්වැනි යැපෙන්නා :-</span></label>
                    </div>
                    <div class="col-lg-3 flp0">
                        <input  type="text" class="form-control" name="dep5Name" value="<?php if(isset($this->memberList[0]['dep'][3])){echo $this->memberList[0]['dep'][3] ['name'];}?>">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep5Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                    </div>
                    <div class=" col-lg-2 flp0">
                        <select class="form-control"  name="dep5Rel" >
                            <option <?php if (! isset($this->memberList[0]['dep'][3])) echo 'selected' ?>  disabled name="select">තෝරන්න</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][3])) && $this->memberList[0]['dep'][3] ['relationship'] == "මව") echo 'selected' ?>name="mother">මව</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][3])) && $this->memberList[0]['dep'][3] ['relationship'] == "පියා") echo 'selected' ?> name="father">පියා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][3])) && $this->memberList[0]['dep'][3] ['relationship'] == "බිරිඳ") echo 'selected' ?> name="wife">බිරිඳ</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][3])) && $this->memberList[0]['dep'][3] ['relationship'] == "සැමියා") echo 'selected' ?> name="husbond">සැමියා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][3])) && $this->memberList[0]['dep'][3] ['relationship']  == "දුව") echo 'selected' ?> name="daughter">දුව</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][3])) && $this->memberList[0]['dep'][3] ['relationship'] == "පුතා") echo 'selected' ?> name="son">පුතා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][3])) && $this->memberList[0]['dep'][3] ['relationship'] == "සහෝදරිය") echo 'selected' ?> name="sister">සහෝදරිය</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][3])) && $this->memberList[0]['dep'][3] ['relationship'] == "සහෝදරයා") echo 'selected' ?> name="brother">සහෝදරයා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][3])) && $this->memberList[0]['dep'][3] ['relationship'] == "වෙනත්") echo 'selected' ?> name="other">වෙනත්</option>>          
                        </select>  
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep5Birthday" class="control-label"><span class="badge">උපන් දිනය :-</span></label>
                    </div>
                    <div class="col-lg-2">
                        <input  type="text" class="form-control birthday" name="dep5Birthday" value="<?php if (isset($this->memberList[0]['dep'][3])){echo $this->memberList[0]['dep'][3] ['birthday'];}?>">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <input type="button"  id="dep5Btn" class=" btn form-control btn-info"  value="ඊලඟ">
                    </div>
                </div>
                <div class="form-group" id="dep6" <?php if (count($this->memberList[0]['dep'])<5) echo 'hidden' ?>>
                    <div class=" col-lg-2">
                        <label for="dep6Name" class="control-label"><span class="badge">සයවැනි යැපෙන්නා :-</span></label>
                    </div>
                    <div class="col-lg-3 flp0">
                        <input type="text" class="form-control" name="dep6Name" value="<?php if(isset($this->memberList[0]['dep'][4])){echo $this->memberList[0]['dep'][4] ['name'];}?>">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep6Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                    </div>
                    <div class=" col-lg-2 flp0">
                        <select class="form-control" name="dep6Rel" >
                            <option <?php if (! isset($this->memberList[0]['dep'][4])) echo 'selected' ?> disabled name="select">තෝරන්න</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][4])) && $this->memberList[0]['dep'][4] ['relationship'] == "මව") echo 'selected' ?> name="mother">මව</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][4])) && $this->memberList[0]['dep'][4] ['relationship'] == "පියා") echo 'selected' ?> name="father">පියා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][4])) && $this->memberList[0]['dep'][4] ['relationship'] == "බිරිඳ") echo 'selected' ?> name="wife">බිරිඳ</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][4])) && $this->memberList[0]['dep'][4] ['relationship'] == "සැමියා") echo 'selected' ?> name="husbond">සැමියා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][4])) && $this->memberList[0]['dep'][4] ['relationship']  == "දුව") echo 'selected' ?> name="daughter">දුව</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][4])) && $this->memberList[0]['dep'][4] ['relationship'] == "පුතා") echo 'selected' ?> name="son">පුතා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][4])) && $this->memberList[0]['dep'][4] ['relationship'] == "සහෝදරිය") echo 'selected' ?> name="sister">සහෝදරිය</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][4])) && $this->memberList[0]['dep'][4] ['relationship'] == "සහෝදරයා") echo 'selected' ?> name="brother">සහෝදරයා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][4])) && $this->memberList[0]['dep'][4] ['relationship'] == "වෙනත්") echo 'selected' ?> name="other">වෙනත්</option>>          
                        </select>  
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep6Birthday" class="control-label"><span class="badge">උපන් දිනය :-</span></label>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" class="form-control birthday" name="dep6Birthday" value="<?php if (isset($this->memberList[0]['dep'][4])){echo $this->memberList[0]['dep'][4] ['birthday'];}?>">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <input type="button"  id="dep6Btn" class=" btn form-control btn-info"  value="ඊලඟ">
                    </div>
                </div>
                <div class="form-group" id="dep7" <?php if (count($this->memberList[0]['dep'])<6) echo 'hidden' ?>>
                    <div class=" col-lg-2">
                        <label for="dep7Name" class="control-label"><span class="badge">සත්වැනි යැපෙන්නා :-</span></label>
                    </div>
                    <div class="col-lg-3 flp0">
                        <input type="text" class="form-control" name="dep7Name"value="<?php if(isset($this->memberList[0]['dep'][5])){echo $this->memberList[0]['dep'][5] ['name'];}?>">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep7Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                    </div>
                    <div class=" col-lg-2 flp0">
                        <select class="form-control" name="dep7Rel" >
                             <option <?php if (! isset($this->memberList[0]['dep'][5])) echo 'selected' ?> disabled name="select">තෝරන්න</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][5])) && $this->memberList[0]['dep'][5] ['relationship'] == "මව") echo 'selected' ?> name="mother">මව</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][5])) && $this->memberList[0]['dep'][5] ['relationship'] == "පියා") echo 'selected' ?> name="father">පියා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][5])) && $this->memberList[0]['dep'][5] ['relationship'] == "බිරිඳ") echo 'selected' ?> name="wife">බිරිඳ</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][5])) && $this->memberList[0]['dep'][5] ['relationship'] == "සැමියා") echo 'selected' ?> name="husbond">සැමියා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][5])) && $this->memberList[0]['dep'][5] ['relationship']  == "දුව") echo 'selected' ?> name="daughter">දුව</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][5])) && $this->memberList[0]['dep'][5] ['relationship'] == "පුතා") echo 'selected' ?> name="son">පුතා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][5])) && $this->memberList[0]['dep'][5] ['relationship'] == "සහෝදරිය") echo 'selected' ?> name="sister">සහෝදරිය</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][5])) && $this->memberList[0]['dep'][5] ['relationship'] == "සහෝදරයා") echo 'selected' ?> name="brother">සහෝදරයා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][5])) && $this->memberList[0]['dep'][5] ['relationship'] == "වෙනත්") echo 'selected' ?> name="other">වෙනත්</option>>          
                        </select>  
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep7Birthday" class="control-label"><span class="badge">උපන් දිනය :-</span></label>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" class="form-control birthday" name="dep7Birthday" value="<?php if (isset($this->memberList[0]['dep'][5])){echo $this->memberList[0]['dep'][5] ['birthday'];}?>">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <input type="button"  id="dep7Btn" class=" btn form-control btn-info"  value="ඊලඟ">
                    </div>
                </div>
                <div class="form-group" id="dep8" <?php if (count($this->memberList[0]['dep'])<7) echo 'hidden' ?>>
                    <div class=" col-lg-2">
                        <label for="dep8Name" class="control-label"><span class="badge">අටවැනි යැපෙන්නා :-</span></label>
                    </div>
                    <div class="col-lg-3 flp0">
                        <input type="text" class="form-control" name="dep8Name" value="<?php if(isset($this->memberList[0]['dep'][6])){echo $this->memberList[0]['dep'][6] ['name'];}?>">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep8Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                    </div>
                    <div class=" col-lg-2 flp0">
                        <select class="form-control" name="dep8Rel" >
                            <option <?php if (! isset($this->memberList[0]['dep'][6])) echo 'selected' ?> disabled name="select">තෝරන්න</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][6])) && $this->memberList[0]['dep'][6] ['relationship'] == "මව") echo 'selected' ?>  name="mother">මව</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][6])) && $this->memberList[0]['dep'][6] ['relationship'] == "පියා") echo 'selected' ?> name="father">පියා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][6])) && $this->memberList[0]['dep'][6] ['relationship'] == "බිරිඳ") echo 'selected' ?> name="wife">බිරිඳ</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][6])) && $this->memberList[0]['dep'][6] ['relationship'] == "සැමියා") echo 'selected' ?> name="husbond">සැමියා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][6])) && $this->memberList[0]['dep'][6] ['relationship']  == "දුව") echo 'selected' ?> name="daughter">දුව</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][6])) && $this->memberList[0]['dep'][6] ['relationship'] == "පුතා") echo 'selected' ?> name="son">පුතා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][6])) && $this->memberList[0]['dep'][6] ['relationship'] == "සහෝදරිය") echo 'selected' ?> name="sister">සහෝදරිය</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][6])) && $this->memberList[0]['dep'][6] ['relationship'] == "සහෝදරයා") echo 'selected' ?> name="brother">සහෝදරයා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][6])) && $this->memberList[0]['dep'][6] ['relationship'] == "වෙනත්") echo 'selected' ?> name="other">වෙනත්</option>>          
                        </select>  
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep8Birthday" class="control-label"><span class="badge">උපන් දිනය :-</span></label>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" class="form-control birthday" name="dep8Birthday" value="<?php if (isset($this->memberList[0]['dep'][6])){echo $this->memberList[0]['dep'][6] ['birthday'];}?>">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <input type="button"  id="dep8Btn" class=" btn form-control btn-info"  value="ඊලඟ">
                    </div>
                </div>
                <div class="form-group" id="dep9" <?php if (count($this->memberList[0]['dep'])<8) echo 'hidden' ?>>
                    <div class=" col-lg-2">
                        <label for="dep10Name" class="control-label"><span class="badge">නවවැනි යැපෙන්නා :-</span></label>
                    </div>
                    <div class="col-lg-3 flp0">
                        <input type="text" class="form-control" name="dep9Name" value="<?php if(isset($this->memberList[0]['dep'][7])){echo $this->memberList[0]['dep'][7] ['name'];}?>">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep9Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                    </div>
                    <div class=" col-lg-2 flp0">
                        <select class="form-control" name="dep9Rel" >
                             <option <?php if (! isset($this->memberList[0]['dep'][7])) echo 'selected' ?> disabled name="select">තෝරන්න</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][7])) && $this->memberList[0]['dep'][7] ['relationship'] == "මව") echo 'selected' ?>  name="mother">මව</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][7])) && $this->memberList[0]['dep'][7] ['relationship'] == "පියා") echo 'selected' ?> name="father">පියා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][7])) && $this->memberList[0]['dep'][7] ['relationship'] == "බිරිඳ") echo 'selected' ?> name="wife">බිරිඳ</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][7])) && $this->memberList[0]['dep'][7] ['relationship'] == "සැමියා") echo 'selected' ?> name="husbond">සැමියා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][7])) && $this->memberList[0]['dep'][7] ['relationship']  == "දුව") echo 'selected' ?> name="daughter">දුව</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][7])) && $this->memberList[0]['dep'][7] ['relationship'] == "පුතා") echo 'selected' ?> name="son">පුතා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][7])) && $this->memberList[0]['dep'][7] ['relationship'] == "සහෝදරිය") echo 'selected' ?> name="sister">සහෝදරිය</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][7])) && $this->memberList[0]['dep'][7] ['relationship'] == "සහෝදරයා") echo 'selected' ?> name="brother">සහෝදරයා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][7])) && $this->memberList[0]['dep'][7] ['relationship'] == "වෙනත්") echo 'selected' ?> name="other">වෙනත්</option>>          
                        </select>  
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep9Birthday" class="control-label"><span class="badge">උපන් දිනය :-</span></label>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" class="form-control birthday" name="dep9Birthday" value="<?php if (isset($this->memberList[0]['dep'][7])){echo $this->memberList[0]['dep'][7] ['birthday'];}?>">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <input type="button"  id="dep9Btn" class=" btn form-control btn-info"  value="ඊලඟ">
                    </div>
                </div>
                <div class="form-group" id="dep10" <?php if (count($this->memberList[0]['dep'])<9) echo 'hidden' ?>>
                    <div class=" col-lg-2">
                        <label for="dep10Name" class="control-label"><span class="badge">දසවැනි යැපෙන්නා :-</span></label>
                    </div>
                    <div class="col-lg-3 flp0">
                        <input type="text" class="form-control" name="dep10Name" value="<?php if(isset($this->memberList[0]['dep'][8])){echo $this->memberList[0]['dep'][8] ['name'];}?>">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep10Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                    </div>
                    <div class=" col-lg-2 flp0">
                        <select class="form-control" name="dep10Rel" >
                            <option <?php if (! isset($this->memberList[0]['dep'][8])) echo 'selected' ?> disabled name="select">තෝරන්න</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][8])) && $this->memberList[0]['dep'][8] ['relationship'] == "මව") echo 'selected' ?>  name="mother">මව</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][8])) && $this->memberList[0]['dep'][8] ['relationship'] == "පියා") echo 'selected' ?> name="father">පියා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][8])) && $this->memberList[0]['dep'][8] ['relationship'] == "බිරිඳ") echo 'selected' ?> name="wife">බිරිඳ</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][8])) && $this->memberList[0]['dep'][8] ['relationship'] == "සැමියා") echo 'selected' ?> name="husbond">සැමියා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][8])) && $this->memberList[0]['dep'][8] ['relationship']  == "දුව") echo 'selected' ?> name="daughter">දුව</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][8])) && $this->memberList[0]['dep'][8] ['relationship'] == "පුතා") echo 'selected' ?> name="son">පුතා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][8])) && $this->memberList[0]['dep'][8] ['relationship'] == "සහෝදරිය") echo 'selected' ?> name="sister">සහෝදරිය</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][8])) && $this->memberList[0]['dep'][8] ['relationship'] == "සහෝදරයා") echo 'selected' ?> name="brother">සහෝදරයා</option>
                            <option <?php if ((isset($this->memberList[0]['dep'][8])) && $this->memberList[0]['dep'][8] ['relationship'] == "වෙනත්") echo 'selected' ?> name="other">වෙනත්</option>>          
                        </select>  
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep10Birthday" class="control-label"><span class="badge">උපන් දිනය :-</span></label>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" class="form-control birthday" name="dep10Birthday" value="<?php if (isset($this->memberList[0]['dep'][8])){echo $this->memberList[0]['dep'][8] ['birthday'];}?>">
                    </div>
                   
                </div>            
    </div>   
   

<!--    <form method="post" id="searchIdForm" class="form-horizontal container-fluid" action="<?php echo URL; ?>awamangala/searchId" >  
        <div class="form-group">
            <div class=" col-lg-1">
                <label for="awaMemId" class="control-label"><span class="badge">සාමාජික අංකය :- </span></label>
            </div>
            <div class="col-lg-2">
                <input id="awaMemId" type="number" class="form-control" name="awaMemId" autofocus>
            </div>
            <div class="row col-lg-4" style="text-align: left">
                <button type="button" id="searchId" class="btn btn-success">සොයන්න&nbsp;<span class="glyphicon glyphicon-search"></span></button>
                <button type="reset"  class="btn btn-warning">නව තොරතුරු ඉවත් කරන්න&nbsp;<span class="glyphicon glyphicon-refresh"></span></button>
            </div>
        </div>-->
    </form>
</div>