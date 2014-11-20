<?php
header('Content-Type: text/html; charset=utf-8');
require "/inc/db_con.php";
$con = new db_con();

echo "213";

/*$res = $con->query("select * from user_list;");
while($data = $res->fetch(PDO::FETCH_ASSOC)){
    echo $data["user_first_name"];
};*/

//session_start();
if(empty($_SESSION["id"])){$_SESSION["id"] = 123;};
//var_dump($_SESSION);
//session_destroy();
//echo "<hr>"
?>