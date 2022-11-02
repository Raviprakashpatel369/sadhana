<?php
session_start();
/* $_SESSION["user_id"] = ""; */
if(!empty($_SESSION["userId"])) {
    require_once 'view/602.php';
} else {
    require_once 'view/login-form.php';
}
?>