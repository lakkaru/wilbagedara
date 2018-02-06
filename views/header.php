<!DOCTYPE html >
<html>
    <head>
        <title><?php
            if (isset($this->title)) {
                echo $this->title;
            } else {
                echo 'විල්බාගෙදර';
            }
            ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/dataTables.bootstrap.min.css"/><!--for data tables-->
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/jquery-ui.min.css"/><!--for dialog boxers-->
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/jquery-ui.theme.min.css"/>
        <link rel="stylesheet" href="<?php echo URL; ?>public/font-awesome-4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css"/> 


        <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-ui.min.js"></script><!--for dialog boxers-->
        <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.dataTables.min.js"></script><!--for data tables-->
        <script type="text/javascript" src="<?php echo URL; ?>public/js/dataTables.bootstrap.min.js"></script><!--for data tables-->
        <!--<script type="text/javascript" src="<?php echo URL; ?>public/js/chartsLoader.js"></script>-->
        <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>

        <?php
        if (isset($this->css)) {//linking default css file relawant to calling file
            foreach ($this->css as $css) {
                echo '<link rel="stylesheet" href="' . URL . 'views/' . $css . '"/>';
            }
        }
        ?>
        <?php
        if (isset($this->js)) {//getting default js file relawant to calling file
            foreach ($this->js as $js) {
                echo '<script type="text/javascript" src="' . URL . 'views/' . $js . '"></script>';
            }
        }
        ?>

    </head>

    <!--header body-->
    <body class="">
        <!--for logout confirm dialog-->
        <div id="logoutDialog" class="confDialog" hidden="" title="තහවුරු කරන්න">
            ඔබට පද්ධතියෙන් පිටවීමට අවශ්‍ය ද ?
        </div>

        <!--for deleting confirm dialog-->
        <div id="addDialog" class="confDialog" hidden="" title="තහවුරු කරන්න">
            ඇතුලත් කිරීමට අවශ්‍ය ද?
        </div>
        <!--for deleting confirm dialog-->
        <div id="deleteDialog" class="confDialog" hidden="" title="තහවුරු කරන්න">
            මකා දැමීමට අවශ්‍ය ද?
        </div>
        <!--for removing job member confirm dialog-->
        <div id="removeDialog" class="confDialog" hidden="" title="තහවුරු කරන්න">
            ඉවත් කරන හේතුව.&nbsp;&nbsp;
            <select id ='reson'>
                <option value="Nabour">ඥාතිත්වය</option>
                <option value="Emergency">හදිසි අවශ්‍යතාවයක්</option>
            </select>
        </div>
        <div class="container-fluid">
            <div class="row">
                <!--<div class="">-->
                    <div class="container-fluid navbar navbar-default navbar-fixed-top col-xs-12" role="navigation">
                        <div class="navbar-header ">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
                                <span class="sr-only">විල්බාගෙදර මෙනුව</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo URL ?>">විල්බාගෙදර මුල් පිටුව</a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">

                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">ආයුබෝවන්  <?php
//                                   
                                        if (Session::get('userName') <> '') {
//                            echo 'test';die;
                                            echo Session::get('userName');
                                        } else {
                                            echo ' පහතින් ඇතුල් වන්න';
                                        }
                                        ?><b class="caret"></b></a>
                                    <ul class="dropdown-menu ">
                                        <li>
                                            <?php if (Session::get('loggedIn') == FALSE): ?><a href="<?php echo URL; ?>userLogin/user" style="color: green" >සාමාජික ඇතුල් වීම <span class="glyphicon glyphicon-off"></span></a><li class="divider"></li>
                                            <?php endif; ?>
                                </li>
                                <li >
                                    <?php if (Session::get('loggedIn') == FALSE): ?><a href="<?php echo URL; ?>userLogin/officer" style="color: green" > නිළධාරී ඇතුල් වීම <span class="glyphicon glyphicon-off"></span></a><li class="divider"></li>
                                    <?php endif; ?>
                                            <?php if ((Session::get('loggedIn') == 'user') or ( Session::get('loggedIn') == 'officer')): ?><a id="logout" href="<?php echo URL; ?>userLogin/logout"  style="color: #F9621D" >පිටවීම<span class="glyphicon glyphicon-off"></span></a><li class="divider"></li>
                                            <?php endif; ?>

                                <li >
                                    <?php if (Session::get('loggedIn') <> FALSE): ?> <a href="<?php echo URL; ?>userLogin/changePassword"  style=" color:#660066" > මුර පදය යළි පිහිටුවීම <span class="glyphicon glyphicon-edit"></span></a>
                                    <?php endif; ?>
                                </li>
                            </ul>
                            </li>
                            </ul>
                            <ul class="nav navbar-nav">
                                <!--                        <li class="<?php
                                if (Session::get('menu') == "index"): echo"active";
                                endif;
                                ?> "><a href="<?php echo URL ?>" class="nav-link disabled">මුල් පිටුව</a></li>-->
                                <li class="  <?php
//                            if (Session::get('menu') == "awamangala"): echo"active";
//                            endif;
                                ?>">
                                    <a href="#" class="dropdown-toggle " data-toggle="dropdown">එක්සත් අවමංගල්‍යාධාර සමිතිය <b class="caret"></b></a>
                                    <ul class="dropdown-menu multi-level">
                                        <li class="dropdown-submenu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">සාමාජිකත්ව තොරතුරු</a>
                                            <ul class="dropdown-menu">
                                                <li <?php
                                                if (Session::get('rank') <> 'ලේකම්') {
                                                    echo "class='disabled'";
                                                }
                                                ?>><a href="<?php echo URL ?>awamangala/addMember">සාමාජිකත්වයක් ඇතුල් කිරීම</a></li>
                                                <li class="divider"></li>
                                                <li class="dropdown-submenu">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">සාමාජික තොරතුරු සෙවීම</a>
                                                    <ul class="dropdown-menu">
                                                        <li <?php
                                                        if ((Session::get('loggedIn') == FALSE) or ( Session::get('rank') <> 'ලේකම්')) {
                                                            echo "class='disabled'";
                                                        }
                                                        ?>><a href="<?php echo URL ?>awamangala/searchMember">සාමාජික අංකයෙන්</a></li>
                                                        <li class="divider"></li>
                                                        <li <?php
                                                        if (Session::get('loggedIn') <> 'officer') {
                                                            echo "class='disabled'";
                                                        }
                                                        ?>><a href="<?php echo URL ?>awamangala/searchDivision">ගංගොඩ වශයෙන්</a></li>
                                                    </ul>
                                                </li>
                                                <li class="divider"></li>
                                                <li <?php
                                                if (Session::get('rank') <> 'ලේකම්') {
                                                    echo "class='disabled'";
                                                }
                                                ?>><a tabindex="-1" href="<?php echo URL ?>awamangala/updateMember">තොරතුරු යාවත්කාල කිරීම</a></li>
                                                <li class="divider"></li>
                                                <li <?php
                                                if (Session::get('rank') <> 'ලේකම්') {
                                                    echo "class='disabled'";
                                                }
                                                ?>><a tabindex="-1" href="<?php echo URL ?>awamangala/deleteMember">සාමාජිකත්වයක් ඉවත්කිරීම</a></li>
                                                <li class="divider"></li>
                                                <li <?php
                                                if (Session::get('loggedIn') == FALSE) {
                                                    echo "class='disabled'";
                                                }
                                                ?>><a tabindex="-1" href="<?php echo URL ?>awamangala/releasedMember">නිදහස් සාමජිකයන්</a></li>
                                            </ul>
                                        <li class="divider"></li>
                                        <li class="dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">ගිණුම් තොරතුරු</a>
                                            <ul class="dropdown-menu">
                                                <li><a tabindex="-1" href="<?php echo URL ?>awamangala/finesAndPayments">සාමාජික මුදල සහ අය කිරීම්</a></li>
                                                <li class="divider"></li>
                                                <li class="dropdown-submenu">
                                                    <a href="#">හිඟ මුදල්</a>
                                                    <ul class="dropdown-menu">
                                                        <li <?php
                                                        if (Session::get('loggedIn') == FALSE) {
                                                            echo "class='disabled'";
                                                        }
                                                        ?>>
                                                            <a tabindex="-1" href="<?php echo URL ?>awamangala/fines">හිඟ මුදල් සොයා බැලීම</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li <?php
                                                        if (Session::get('rank') <> 'භාණ්ඩාගාරික') {
                                                            echo "class='disabled'";
                                                        }
                                                        ?>>
                                                            <a tabindex="-1" href="<?php echo URL ?>awamangala/addFines">හිඟ මුදල් ඇතුල් කිරීම</a>
                                                        </li>
                                                    </ul>
                                                <li class="divider"></li>
                                                <li <?php
                                                if ((Session::get('loggedIn') == FALSE)) {
                                                    echo "class='disabled'";
                                                }
                                                ?>><a tabindex="-1" href="<?php echo URL ?>awamangala/pastPayments">පසු ගිය මුදල් ගෙවීම් සොයා බැලීම</a></li>
                                                <li class="divider"></li>
                                                <li <?php
                                                if (Session::get('rank') <> 'භාණ්ඩාගාරික') {
                                                    echo "class='disabled'";
                                                }
                                                ?>><a tabindex="-1" href="<?php echo URL ?>awamangala/membershipPayments">සාමාජික මුදල් ලැබීම් ඇතුල් කිරීම</a></li>

                                                <li class="divider"></li>
                                                <li class="dropdown-submenu">
                                                    <a href="#">අතිරේක මුදල් ලැබීම් ඇතුල් කිරීම</a>
                                                    <ul class="dropdown-menu">
                                                        <li <?php
                                                        if (Session::get('rank') <> 'භාණ්ඩාගාරික') {
                                                            echo "class='disabled'";
                                                        }
                                                        ?>><a href="<?php echo URL ?>awamangala/duePayments">හිඟ මුදල් </a></li>
                                                        <li class="divider"></li>
                                                        <li <?php
                                                        if (Session::get('rank') <> 'භාණ්ඩාගාරික') {
                                                            echo "class='disabled'";
                                                        }
                                                        ?>><a href="<?php echo URL ?>awamangala/sharePayments">කොටස් මුදල්</a></li>
                                                    </ul>
                                                </li>
                                                <li class="divider"></li>
                                                <li <?php
                                                if (Session::get('rank') <> 'භාණ්ඩාගාරික') {
                                                    echo "class='disabled'";
                                                }
                                                ?>><a tabindex="-1" href="#">සියලුම මුදල් ගෙවීම් ඇතුල් කිරීම</a></li>

                                                <li class="divider"></li>
                                                <li <?php
                                                if (Session::get('loggedIn') == FALSE) {
                                                    echo "class='disabled'";
                                                }
                                                ?>><a tabindex="-1" href="#">අය වැය පිලිබඳ වාර්තා</a></li>
                                            </ul>
                                        </li>
                                        <li class="divider"></li>
                                        <li class="dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">අවමංගල්‍ය අවස්ථා</a>
                                            <ul class="dropdown-menu">
                                                <li  <?php
                                                if (Session::get('loggedIn') == FALSE) {
                                                    echo "class='disabled'";
                                                }
                                                ?>><a tabindex="-1" href="<?php echo URL ?>awamangala/deths">මියගිය අය</a></li>
                                                <li class="divider"></li>
                                                <li <?php
                                                if (Session::get('rank') <> 'ලේකම්') {
                                                    echo "class='disabled'";
                                                }
                                                ?>><a tabindex="-1" href="<?php echo URL ?>awamangala/jobs/">වැඩ බෙදා දීම</a></li>
                                                <li class="divider"></li>
                                                <li <?php
                                                if (Session::get('rank') <> 'භාණ්ඩාගාරික') {
                                                    echo "class='disabled'";
                                                }
                                                ?>><a tabindex="-1" href="<?php echo URL ?>awamangala/extraFundsDue">අතිරේක ආධාර හිඟ</a></li>
                                                <li class="divider"></li>
                                                <li class="dropdown-submenu">
                                                    <a href="<?php echo URL ?>awamangala/funaralAttendance">සහභාගීත්වය</a>
                                                    <ul class="dropdown-menu">
                                                        <li <?php
                                                        if (Session::get('loggedIn') == FALSE) {
                                                            echo "class='disabled'";
                                                        }
                                                        ?>><a href="#">සුසාන භූමියේ කටයුතු</a></li>
                                                        <li class="divider"></li>
                                                        <li <?php
                                                        if (Session::get('loggedIn') == FALSE) {
                                                            echo "class='disabled'";
                                                        }
                                                        ?>><a href="<?php echo URL ?>awamangala/funaralAttendance">අවමංගල්‍ය උත්සවය</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="divider"></li>
                                        <li class="dropdown-submenu"><a href="#"  class="dropdown-toggle" data-toggle="dropdown">මහා සභාව</a>
                                            <ul class="dropdown-menu">
                                                <li><a tabindex="-1" href="<?php echo URL ?>awamangala/deed">ව්‍යවස්ථාව</a></li>
                                                <li class="divider"></li>
                                                <li><a tabindex="-1" href="#">විශේෂ තීරණ</a></li>
                                                <li class="divider"></li>
                                                <li class="dropdown-submenu"><a href="#" class="dropdown-toggle " data-toggle="dropdown">පැමිණීම</a>
                                                    <ul class="dropdown-menu">
                                                        <li <?php
                                                        if (Session::get('rank') <> 'ලේකම්') {
                                                            echo "class='disabled'";
                                                        }
                                                        ?>><a tabindex="-1" href="<?php echo URL ?>awamangala/addMeetingAttendance">පැමිණීම ලකුණු කිරීම</a></li>
                                                        <li class="divider"></li>
                                                        <li <?php
                                                        if (Session::get('loggedIn') == FALSE) {
                                                            echo "class='disabled'";
                                                        }
                                                        ?>><a tabindex="-1" href="<?php echo URL ?>awamangala/viewMeetingAttendance">පැමිණීම සොයා බැලීම</a></li>
                                                        <!--<li><a tabindex="-1" href="<?php echo URL ?>awamangala/finesForAttendance">නොපැමිණීමේ දඩ</a></li>-->
                                                    </ul>
                                                </li>

                                        </li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li  class="dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">පෝරම ආකෘති</a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="#">සාමාජිකත්ව ඉල්ලුම්/යාවත්කාල කිරීම්</a></li>
                                        <li class="divider"></li>
                                        <li <?php
                                        if (Session::get('loggedIn') <> 'officer') {
                                            echo "class='disabled'";
                                        }
                                        ?>><a tabindex="-1" href="#">අත්සන් සටහන</a></li>
                                        <li class="divider"></li>
                                        <li <?php
                                        if (Session::get('loggedIn') <> 'officer') {
                                            echo "class='disabled'";
                                        }
                                        ?>><a tabindex="-1" href="#">මහා සභාවට පැමිණීම</a></li>
                                        <li class="divider"></li>
                                        <li <?php
                                        if (Session::get('loggedIn') <> 'officer') {
                                            echo "class='disabled'";
                                        }
                                        ?>><a tabindex="-1" href="#">සහභාගීත්ව සලකුණු කිරීම</a></li>
                                        <li class="divider"></li>
                                        <li <?php
                                        if (Session::get('loggedIn') <> 'officer') {
                                            echo "class='disabled'";
                                        }
                                        ?>><a tabindex="-1" href="#">මුදල් එකතු කිරීම</a></li>
                                        <li class="divider"></li>
                                        <li <?php
                                        if (Session::get('loggedIn') <> 'officer') {
                                            echo "class='disabled'";
                                        }
                                        ?>><a tabindex="-1" href="#">සාමාජික ගෙවිම් සටහන</a></li>
                                    </ul>
                                <li class="divider"></li>
                                <li><a href="<?php echo URL ?>awamangala/officers">නිළධාරී මණ්ඩලය</a></li>
                            </ul>
                            </li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"> සාසන වර්ධන සමිතිය <b class="caret"></b></a></li>
                            <li><a href="#" class="dropdown-toggle " data-toggle="dropdown"> තරුණ බෞද්ධ සමිතිය <b class="caret"></b></a></li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                <!--</div>-->
            </div>
        </div>



