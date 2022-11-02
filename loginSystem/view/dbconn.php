<?php

$db = mysqli_connect("localhost","root","","test");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>