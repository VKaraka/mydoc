<?php
    require_once "/config.php";
    
    $name = $_POST["name"];
    $lastName = $_POST["lastname"];
    $patronymic = $_POST["patro"];
    $birthday = $_POST["birthday"];
    $birthday = "11-11-1990"; //ПОКА ДЛЯ ТЕСТА
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $password2 = $_POST["pass2"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $city = $_POST["city"];
    
    if (trim((string)$name) == ""){
        echo 'Имя не может быть пустым';
        exit();
    }
    
    if (trim((string)$lastName) == ""){
        echo 'Фамилия не может быть пустой';
        exit();
    }
    
    if (trim((string)$email) == ""){
        echo 'Email не может быть пустым';
        exit();
    }
    
    if (trim((string)$password) == "" || trim((string)$password2) == ""){
        echo 'Пароль не может быть пустым';
        exit();
    }
    
    if (trim((string)$password) != trim((string)$password2)){
        echo 'Пароли не совпадают';
        exit();
    }
    $password_hash = md5(trim((string)$password));
    
    $req_count_user = $con->query("select count(*) as count from user_list where user_mail = '". $email ."' and user_role_id = 2");
    $data = $req_count_user->fetch(PDO::FETCH_ASSOC);
    $res_count = $data["count"];
    
    if ((int)$res_count == 0){
        $qs =   "INSERT INTO user_list(user_first_name, user_last_name, user_patronymic, user_birthday, user_mail, user_password, user_mobile_phone, user_gender_id, user_city_id, user_role_id, user_approve)
            VALUES ('". $name ."', '". $lastName ."', '". $patronymic ."', '". $birthday ."', '". $email ."', '". $password_hash ."', '". $phone ."', ". $gender .", ". $city .", 2, 1)";
        $con->query($qs);
        header('Location: /');
    }
    else{
        echo 'Email уже занят';
        exit();
    }
?>