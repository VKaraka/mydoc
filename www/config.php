<?php
header('Content-Type: text/html; charset=utf-8');
require "/inc/db_con.php";
$con = new db_con();

session_start();
if(empty($_SESSION["user_id"])){$_SESSION["user_id"] = 0;};
if(empty($_SESSION["role_id"])){$_SESSION["role_id"] = 0;};
var_dump($_SESSION);
echo "<hr>"
?>