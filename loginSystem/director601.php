<?php

/* $_SESSION["user_id"] = ""; */
session_start() ;
function myFunction($x) {
    global $batchid;
	$batchid = $x;
 }
if (isset($_GET['batchid'])) {
    myFunction($_GET['batchid']);
}
if(!empty($_SESSION["userId"])) {
    require_once 'view/601.php';
} else {
    require_once 'view/login-form.php';
}
?>