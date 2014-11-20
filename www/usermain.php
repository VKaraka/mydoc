<?php
    require_once 'config.php';
    $title = 'User';
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title;?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
        
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <div id="main">
            <div id="header">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">myDoc</a>
                        </div>
                
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <!--li class="active"><a href="#">Link</a></li-->
                                <li><a href="#">Link</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">One more separated link</a></li>
                                    </ul>   
                                </li>
                            </ul>

                            <form class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>

                            <ul class="nav navbar-nav" style="float: right;">
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </div>                
                    </div>
                </nav>
            </div>
            <div id="content">
                asdads asdads asdads asdads asdads asdads asdads 
                asdads asdads asdads asdads asdads asdads asdads 
                asdads asdads asdads asdads asdads asdads asdads 
                asdads asdads asdads asdads asdads asdads asdads 
                asdads asdads asdads asdads asdads asdads asdads 
                asdads asdads asdads asdads asdads asdads asdads 
                asdads asdads asdads asdads asdads asdads asdads 
                asdads asdads asdads asdads asdads asdads asdads 
                asdads asdads asdads asdads asdads asdads asdads 
                asdads asdads asdads asdads asdads asdads asdads 
                asdads asdads asdads asdads asdads asdads asdads 
                asdads asdads asdads asdads asdads asdads asdads 
                asdads asdads asdads asdads asdads asdads asdads 
                asdads asdads asdads asdads asdads asdads asdads 
                asdads asdads asdads asdads asdads asdads asdads 
                asdads asdads asdads asdads asdads asdads asdads 
                asdads asdads asdads asdads asdads asdads asdads 
                asdads asdads asdads asdads asdads asdads asdads 
                asdads asdads asdads asdads asdads asdads asdads 
                asdads asdads asdads asdads asdads asdads asdads 
                asdads asdads asdads asdads asdads asdads asdads 
                asdads asdads asdads asdads asdads asdads asdads 
                asdads asdads asdads asdads asdads asdads asdads 
                asdads asdads asdads asdads asdads asdads asdads 
                
            </div>
            <div id="footer">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <span class="navbar-brand">&copy; Karaka</span>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </body>
</html>