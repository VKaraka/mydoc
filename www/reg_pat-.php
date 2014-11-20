<?php
    require_once "/config.php";
    
    $name = $_POST["name"];
    $lastNmae = $_POST["lastname"];
    $patronymic = $_POST["patro"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $password2 = $_POST["pass2"];
    
    if (trim((string)$name) == ""){
        echo 'Имя не может быть пустым';
        exit();
    }
    
    echo $name;
?>