<div class="row well ">  
    <div class="col-lg-12">
        <legend class="lead">සමාජිකත්වයක් ඇතුල් කිරීම </legend>
    </div>
    <div class="col-lg-12">
        <form method="post" id="addMember" class="form-horizontal " action="<?php echo URL; ?>awamangala/create" >         
            <div class="col-lg-4  well">
                <div class="form-group">
                    <div class=" col-lg-4">
                        <label for="joinedDate" class="control-label"><span class="badge">දිනය :-</span></label>
                    </div>
                    <div class="col-lg-8">
                        <input id="joinedDate" type="text" class="form-control datepicker" name="joinedDate" >
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
                <div class="form-group">
                    <div class=" col-lg-4">
                        <label for="name" class="control-label"><span class="badge">සාමාජිකයගේ නම :- </span></label>
                    </div>
                    <div class="col-lg-8">
                        <input id="name" type="text" class="form-control" name="name" required>
                    </div>
                </div>
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
                        <label for="address" class="control-label"><span class="badge">ලිපිනය :-</span></label>
                    </div>
                    <div class="col-lg-8">
                        <input id="address" type="text" class="form-control" name="address">
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-4">
                        <label for="email" class="control-label"><span class="badge">විද්‍යුත් ලිපිනය :-</span></label>
                    </div>
                    <div class="col-lg-8">
                        <input id="email" type="text" class="form-control" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-4">
                        <label  class="control-label"><span class="badge">දුරකතන අංකය :- </span></label>
                    </div>
                    <div class="col-lg-8">
                        <label  for="resTel" class="control-label"><span class="badge">නිවස:- </span></label>
                        <input id="resTel" type="number" class="form-control" name="resTel">
                        <label  for="mobTel" class="control-label"><span class="badge">ජංගම :- </span></label>
                        <input id="mobTel" type="number" class="form-control" name="mobTel">
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-4">
                        <label for="birthday" class="control-label"><span class="badge">උපන් දිනය :-</span></label>
                    </div>
                    <div class="col-lg-8">
                        <input id="birthday" type="text" class="form-control datepicker" name="birthday">
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-4">
                        <label for="nic" class="control-label"><span class="badge">හැඳුනුම්පත් අංකය :-</span></label>
                       
                    </div>
                    <div class="col-lg-8">
                        <input id="nic" type="text" class="form-control" name="nic" >
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
                        <input id="exPayRu" type="number" class="form-control" min="0" name="exPayRu" placeholder=0>
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-lg-2" >
                        <label for="repName" class="control-label"><span class="badge">නියෝජිත යැපෙන්නා :-</span></label>
                    </div>
                    <div class="col-lg-3 flp0">
                        <input id="repName" type="text" class="form-control" name="repName">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="repRel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                    </div>
                    <div class=" col-lg-2 flp0">
                        <select class="form-control" id='repRel' name="repRel" >
                            <option name="select" selected disabled >තෝරන්න</option>
                            <option name="mother">මව</option>
                            <option name="father">පියා</option>
                            <option name="wife">බිරිඳ</option>
                            <option name="husbond">සැමියා</option>
                            <option name="daughter">දුව</option>
                            <option name="son">පුතා</option>
                            <option name="sister">සහෝදරිය</option>
                            <option name="brother">සහෝදරයා</option>
                            <option name="other">වෙනත්</option>>          
                        </select> 
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="repBirthday" class="control-label"><span class="badge">උපන් දිනය :-</span></label>
                    </div>
                    <div class="col-lg-2">
                        <input id="repBirthday" type="text" class="form-control datepicker" name="repBirthday">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <input type="button"  id="dep1Btn" class=" btn form-control btn-info"  value="ඊලඟ">
                    </div>
                </div>
                <div class="form-group" id="dep2" hidden>
                    <div class=" col-lg-2">
                        <label for="dep2Name" class="control-label"><span class="badge">දෙවැනි යැපෙන්නා :-</span></label>
                    </div>
                    <div class="col-lg-3 flp0">
                        <input id="dep2Name" type="text" class="form-control" name="dep2Name">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep2Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                    </div>
                    <div class=" col-lg-2 flp0">
                        <select class="form-control" id='depRel' name="dep2Rel" >
                            <option name="select" selected disabled >තෝරන්න</option>
                            <option name="mother">මව</option>
                            <option name="father">පියා</option>
                            <option name="wife">බිරිඳ</option>
                            <option name="husbond">සැමියා</option>
                            <option name="daughter">දුව</option>
                            <option name="son">පුතා</option>
                            <option name="sister">සහෝදරිය</option>
                            <option name="brother">සහෝදරයා</option>
                            <option name="other">වෙනත්</option>>          
                        </select> 
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep2Birthday" class="control-label"><span class="badge">උපන් දිනය :-</span></label>
                    </div>
                    <div class="col-lg-2">
                        <input id="dep2Birthday" type="text" class="form-control datepicker" name="dep2Birthday">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <input type="button"  id="dep2Btn" class=" btn form-control btn-info"  value="ඊලඟ">
                    </div>
                </div>
                <div class="form-group" id="dep3" hidden>
                    <div class=" col-lg-2">
                        <label for="dep3Name" class="control-label"><span class="badge">තෙවැනි යැපෙන්නා :-</span></label>
                    </div>
                    <div class="col-lg-3 flp0">
                        <input id="dep3Name" type="text" class="form-control" name="dep3Name">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep3Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                    </div>
                    <div class=" col-lg-2 flp0">
                        <select class="form-control" id='depRel' name="dep3Rel" >
                            <option name="select" selected disabled >තෝරන්න</option>
                            <option name="mother">මව</option>
                            <option name="father">පියා</option>
                            <option name="wife">බිරිඳ</option>
                            <option name="husbond">සැමියා</option>
                            <option name="daughter">දුව</option>
                            <option name="son">පුතා</option>
                            <option name="sister">සහෝදරිය</option>
                            <option name="brother">සහෝදරයා</option>
                            <option name="other">වෙනත්</option>>          
                        </select> 
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep3Birthday" class="control-label"><span class="badge">උපන් දිනය :-</span></label>
                    </div>
                    <div class="col-lg-2">
                        <input id="dep3Birthday" type="text" class="form-control datepicker" name="dep3Birthday">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <input type="button"  id="dep3Btn" class=" btn form-control btn-info"  value="ඊලඟ">
                    </div>
                </div>
                <div class="form-group" id="dep4" hidden>
                    <div class=" col-lg-2">
                        <label for="dep4Name" class="control-label"><span class="badge">සිව්වැනි යැපෙන්නා :-</span></label>
                    </div>
                    <div class="col-lg-3 flp0">
                        <input type="text" class="form-control" name="dep4Name">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep4Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                    </div>
                    <div class=" col-lg-2 flp0">
                        <select class="form-control" id='depRel' name="dep4Rel" >
                            <option name="select" selected disabled >තෝරන්න</option>
                            <option name="mother">මව</option>
                            <option name="father">පියා</option>
                            <option name="wife">බිරිඳ</option>
                            <option name="husbond">සැමියා</option>
                            <option name="daughter">දුව</option>
                            <option name="son">පුතා</option>
                            <option name="sister">සහෝදරිය</option>
                            <option name="brother">සහෝදරයා</option>
                            <option name="other">වෙනත්</option>>          
                        </select> 
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep4Birthday" class="control-label"><span class="badge">උපන් දිනය :-</span></label>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" class="form-control datepicker" name="dep4Birthday">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <input type="button"  id="dep4Btn" class=" btn form-control btn-info"  value="ඊලඟ">
                    </div>
                </div>
                <div class="form-group" id="dep5" hidden>
                    <div class=" col-lg-2">
                        <label for="dep5Name" class="control-label"><span class="badge">පස්වැනි යැපෙන්නා :-</span></label>
                    </div>
                    <div class="col-lg-3 flp0">
                        <input  type="text" class="form-control" name="dep5Name">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep5Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                    </div>
                    <div class=" col-lg-2 flp0">
                        <select class="form-control"  name="dep5Rel" >
                            <option name="select" selected disabled >තෝරන්න</option>
                            <option name="mother">මව</option>
                            <option name="father">පියා</option>
                            <option name="wife">බිරිඳ</option>
                            <option name="husbond">සැමියා</option>
                            <option name="daughter">දුව</option>
                            <option name="son">පුතා</option>
                            <option name="sister">සහෝදරිය</option>
                            <option name="brother">සහෝදරයා</option>
                            <option name="other">වෙනත්</option>>          
                        </select> 
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep5Birthday" class="control-label"><span class="badge">උපන් දිනය :-</span></label>
                    </div>
                    <div class="col-lg-2">
                        <input  type="text" class="form-control datepicker" name="dep5Birthday">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <input type="button"  id="dep5Btn" class=" btn form-control btn-info"  value="ඊලඟ">
                    </div>
                </div>
                <div class="form-group" id="dep6" hidden>
                    <div class=" col-lg-2">
                        <label for="dep6Name" class="control-label"><span class="badge">සයවැනි යැපෙන්නා :-</span></label>
                    </div>
                    <div class="col-lg-3 flp0">
                        <input type="text" class="form-control" name="dep6Name">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep6Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                    </div>
                    <div class=" col-lg-2 flp0">
                        <select class="form-control" name="dep6Rel" >
                            <option name="select" selected disabled >තෝරන්න</option>
                            <option name="mother">මව</option>
                            <option name="father">පියා</option>
                            <option name="wife">බිරිඳ</option>
                            <option name="husbond">සැමියා</option>
                            <option name="daughter">දුව</option>
                            <option name="son">පුතා</option>
                            <option name="sister">සහෝදරිය</option>
                            <option name="brother">සහෝදරයා</option>
                            <option name="other">වෙනත්</option>>          
                        </select> 
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep6Birthday" class="control-label"><span class="badge">උපන් දිනය :-</span></label>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" class="form-control datepicker" name="dep6Birthday">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <input type="button"  id="dep6Btn" class=" btn form-control btn-info"  value="ඊලඟ">
                    </div>
                </div>
                <div class="form-group" id="dep7" hidden>
                    <div class=" col-lg-2">
                        <label for="dep7Name" class="control-label"><span class="badge">සත්වැනි යැපෙන්නා :-</span></label>
                    </div>
                    <div class="col-lg-3 flp0">
                        <input type="text" class="form-control" name="dep7Name">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep7Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                    </div>
                    <div class=" col-lg-2 flp0">
                        <select class="form-control" name="dep7Rel" >
                            <option name="select" selected disabled >තෝරන්න</option>
                            <option name="mother">මව</option>
                            <option name="father">පියා</option>
                            <option name="wife">බිරිඳ</option>
                            <option name="husbond">සැමියා</option>
                            <option name="daughter">දුව</option>
                            <option name="son">පුතා</option>
                            <option name="sister">සහෝදරිය</option>
                            <option name="brother">සහෝදරයා</option>
                            <option name="other">වෙනත්</option>>          
                        </select> 
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep7Birthday" class="control-label"><span class="badge">උපන් දිනය :-</span></label>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" class="form-control datepicker" name="dep7Birthday">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <input type="button"  id="dep7Btn" class=" btn form-control btn-info"  value="ඊලඟ">
                    </div>
                </div>
                <div class="form-group" id="dep8" hidden>
                    <div class=" col-lg-2">
                        <label for="dep8Name" class="control-label"><span class="badge">අටවැනි යැපෙන්නා :-</span></label>
                    </div>
                    <div class="col-lg-3 flp0">
                        <input type="text" class="form-control" name="dep8Name">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep8Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                    </div>
                    <div class=" col-lg-2 flp0">
                        <select class="form-control" name="dep8Rel" >
                            <option name="select" selected disabled >තෝරන්න</option>
                            <option name="mother">මව</option>
                            <option name="father">පියා</option>
                            <option name="wife">බිරිඳ</option>
                            <option name="husbond">සැමියා</option>
                            <option name="daughter">දුව</option>
                            <option name="son">පුතා</option>
                            <option name="sister">සහෝදරිය</option>
                            <option name="brother">සහෝදරයා</option>
                            <option name="other">වෙනත්</option>>          
                        </select> 
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep8Birthday" class="control-label"><span class="badge">උපන් දිනය :-</span></label>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" class="form-control datepicker" name="dep8Birthday">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <input type="button"  id="dep8Btn" class=" btn form-control btn-info"  value="ඊලඟ">
                    </div>
                </div>
                <div class="form-group" id="dep9" hidden>
                    <div class=" col-lg-2">
                        <label for="dep10Name" class="control-label"><span class="badge">නවවැනි යැපෙන්නා :-</span></label>
                    </div>
                    <div class="col-lg-3 flp0">
                        <input type="text" class="form-control" name="dep9Name">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep9Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                    </div>
                    <div class=" col-lg-2 flp0">
                        <select class="form-control" name="dep9Rel" >
                            <option name="select" selected disabled >තෝරන්න</option>
                            <option name="mother">මව</option>
                            <option name="father">පියා</option>
                            <option name="wife">බිරිඳ</option>
                            <option name="husbond">සැමියා</option>
                            <option name="daughter">දුව</option>
                            <option name="son">පුතා</option>
                            <option name="sister">සහෝදරිය</option>
                            <option name="brother">සහෝදරයා</option>
                            <option name="other">වෙනත්</option>>          
                        </select> 
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep9Birthday" class="control-label"><span class="badge">උපන් දිනය :-</span></label>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" class="form-control datepicker" name="dep9Birthday">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <input type="button"  id="dep9Btn" class=" btn form-control btn-info"  value="ඊලඟ">
                    </div>
                </div>
                <div class="form-group" id="dep10" hidden>
                    <div class=" col-lg-2">
                        <label for="dep10Name" class="control-label"><span class="badge">දසවැනි යැපෙන්නා :-</span></label>
                    </div>
                    <div class="col-lg-3 flp0">
                        <input type="text" class="form-control" name="dep10Name">
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep10Rel" class="control-label"><span class="badge">ඥාතිත්වය  :-</span></label>
                    </div>
                    <div class=" col-lg-2 flp0">
                        <select class="form-control" name="dep10Rel" >
                            <option name="select" selected disabled >තෝරන්න</option>
                            <option name="mother">මව</option>
                            <option name="father">පියා</option>
                            <option name="wife">බිරිඳ</option>
                            <option name="husbond">සැමියා</option>
                            <option name="daughter">දුව</option>
                            <option name="son">පුතා</option>
                            <option name="sister">සහෝදරිය</option>
                            <option name="brother">සහෝදරයා</option>
                            <option name="other">වෙනත්</option>>          
                        </select> 
                    </div>
                    <div class=" col-lg-1 flp0">
                        <label for="dep10Birthday" class="control-label"><span class="badge">උපන් දිනය :-</span></label>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" class="form-control datepicker" name="dep10Birthday">
                    </div>

                </div>            
            </div>   
            <div class="row col-lg-12" style="text-align: center">
                <button type="submit" class="btn btn-success">තොරතුරු ඇතුල් කරන්න&nbsp;<span class="glyphicon glyphicon-plus"></span></button>
                <button id="reset" type="reset"  class="btn btn-warning">නව තොරතුරු ඉවත් කරන්න&nbsp;<span class="glyphicon glyphicon-refresh"></span></button>
            </div>
        </form>
    </div>
</div>