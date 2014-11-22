<?php
    require_once '/config.php';
    
    $mail = $_POST["mail"];
    $pass = $_POST["password"];
    $role = $_POST["role"];
    
    $password_hash = md5(trim((string)$pass));
    
    $req_count_user = $con->query("select count(*) as count from user_list where user_mail = '". $mail ."' and user_role_id = ". $role ." and user_password = '". $password_hash ."'");
    $data = $req_count_user->fetch(PDO::FETCH_ASSOC);
    $res_count = $data["count"];
    
    if ((int)$res_count <> 0){
        $user_info = $con->query("select user_id, user_role_id from user_list where user_mail = '". $mail ."' and user_role_id = ". $role ." and user_password = '". $password_hash ."'");
        $data = $user_info->fetch(PDO::FETCH_ASSOC);
        $_SESSION["user_id"] = $data["user_id"];
        $_SESSION["role_id"] = $data["user_role_id"];
        switch ($data["user_role_id"]){
            case 1:
                echo "ДОКТОР<br>";
                break;
            case 2:
                header('Location: /usermain.php');
                break;
        }
    }
    else{
        echo 'Не верный логин/пароль';
    }
?>