<!--for login dialog-->
<div id="loginDialog" hidden title="සාමාජික ඇතුල් වීම" class="center-block container-fluid">
    <form action="userLogIn/user" method="post" class="loginForm"><!--fires the login ->run() with submit-->
        <div class="row form-group">
            <div class="col-md-7">
                <label class="control-label ">සාමාජික අංකය </label>
            </div>
            <div class="col-md-5">
                <input type="number" name="awaMemId" class="form-control input-sm" /><br/>
            </div>
            <div class="col-md-7">
                <label class="control-label ">මුර පදය</label>
            </div>
            <div class="col-md-5">
                <input type="password" name="password" class="form-control input-sm"/><br/>
            </div>
            <?php
            if (Session::get('loggedIn') === FALSE) {
                echo '<p id="mismatch" style="color:red">සාමාජික අංකය සහ මුරපදය නොගැලපේ.</p>';
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
