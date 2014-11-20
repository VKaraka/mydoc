<?php
    require_once "/config.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            $title = "Регистрация пациента";
            require_once "header.php";
        ?>
    </head>
    <body>
        <div id="main">
            <div id="header">
            </div>
            <div id="content">
                <form class="form-horizontal" role="form" action="/reg_pat-.php" method="POST">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Имя</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Фамилия</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="lastname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Отчество</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="patro">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="mail" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Пароль</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="pass">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Повторите пароль</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="pass2">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">День рождения</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="birthday">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Номер телефона</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Пол</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="gender">
                                <?php
                                    $res = $con->query("select gender_id, gender_name from gender_list");
                                    while($data = $res->fetch(PDO::FETCH_ASSOC)){
                                        echo "<option value='". $data["gender_id"] ."'>". $data["gender_name"] ."</option>";
                                    };
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Зарегестрироваться</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>