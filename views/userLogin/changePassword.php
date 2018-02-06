<!--for login dialog-->
<div id="changePasswordDialog" hidden title="මුර පදය යළි පිහිටුවීම" class="center-block">
    <form action="changePasswordRun" method="post" class="validateForm"><!--fires the login ->run() with submit-->
        
        <div class="form-group">
            <label class="control-label col-lg-7">වර්තමාන මුර පදය </label>
            <div class="col-lg-5">
                <input type="password" name="currentPassword" class="form-control input-sm"/><br/>
            </div>
            <label class="control-label col-lg-7">අලුත් මුර පදය</label>
            <div class="col-lg-5">
                <input type="password" id="newPassword" name="newPassword" class="form-control input-sm"/><br/>
            </div>
            <label class="control-label col-lg-7">තහවුරු කරන්න</label>
            <div class="col-lg-5">
                <input type="password" name="confirmPassword" class="form-control input-sm"/><br/>
            </div>
            <?php
            if (Session::get('password') === FALSE) {
                echo '<p id="mismatch" style="color:red; float: right">මුරපදය නොගැලපේ.</p>';
            }
            ?>
<!--            <div class="col-lg-5" >
                <a href="#" style="color: blue; font-weight: bold; text-decoration: underline">නිළධාරී ඇතුලුවීම</a>
            </div>-->
            <div class="col-lg-5" hidden>
                <input type="submit" id="submitLogin" />
            </div>
        </div>   
        
        
    </form>
</div>
<!--<div class='row' style="display:block;height:570px ;background-image: url('<?php echo URL ?>public/images/background.jpg')">
</div>-->
