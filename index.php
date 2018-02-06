<?php
require 'config.php';//database information
function __autoload($class){
    require LIBS. $class. ".php"; 
}

//getting start Load the Boostrap
$startup =new Startup();
$startup->init();