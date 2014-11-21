<?php
    require_once 'config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            $title = "Main Page";
            require_once "/header.php";
        ?>
    </head>
    <body>
        <div id="main">
            <div id="header">
            </div>
            <div id="content">
                <form class="form-horizontal" role="form" action="login-.php" method="post">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" name="mail">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Пароль</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Город</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="role">
                                <?php
                                    $res = $con->query("select role_id, role_name from role_list");
                                    while($data = $res->fetch(PDO::FETCH_ASSOC)){
                                        echo "<option value='". $data["role_id"] ."'>". $data["role_name"] ."</option>";
                                    };
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Вход</button>
                        </div>
                    </div>
                </form>
            </div>
            <div id="header">
            </div>
        </div>
    </body>
</html>