<?php
include_once '../config/config.php';
$con = new config();
if ($con->auth()){
    switch (@$_GET['mod']) {
        case 'workout': 
            include_once 'controller/workout.php';
            break;
        default: 
            include_once 'controller/home.php';
            break;
    }
} else {
    include_once 'controller/login.php';
}
?>