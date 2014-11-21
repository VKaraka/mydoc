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
        echo 'ВОШЛИ<br>';
        switch ($role) {
            case 1:
                echo "ДОКТОР<br>";
                //header('Location: /');
                break;
            case 2:
                echo "ПАЦИЕНТ<br>";
                //header('Location: /');
                break;
        }
        $_SESSION["user_id"] = 123;
    }
    else{
        echo 'НЕ ВОШЛИ';
    }
    
    echo $mail . '<br>';
    echo $pass . '<br>';
    echo $role . '<br>';
?>