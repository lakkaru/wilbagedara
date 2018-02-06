<!--for login dialog-->
<div id="loginDialog" hidden title="නිළධාරී ඇතුල් වීම">
    <form action="userLogIn/officer" method="post" class="loginForm"><!--fires the login ->run() with submit-->
        <div class="form-group">
            <label class="control-label col-lg-6">තනතුර </label>
            <div class="col-lg-6">
                <select class="form-control" name="rank">
                    <option selected disabled>තෝරන්න</option>
                    <option>සභාපති</option>
                    <option>ලේකම්</option>
                    <option>භාණ්ඩාගාරික</option>
                    <option>කාරක සභික</option>                    
                </select><br/>
            </div>
            <label class="control-label col-lg-6">මුර පදය</label>
            <div class="col-lg-6">
                <input type="password" name="password" class="form-control"/><br/>
            </div>
            <?php
            if (Session::get('loggedIn') === FALSE) {
                echo '<p id="mismatch" style="color:red">තනතුර සහ මුරපදය නොගැලපේ.</p>';
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
