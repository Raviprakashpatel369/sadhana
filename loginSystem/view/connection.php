<?php 

$host="localhost";
$user="root";
$password="";
$db="sadhanaskills";

$con= mysqli_connect($host,$user,$password,$db);
$conn= mysqli_connect($host,$user,$password,$db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
