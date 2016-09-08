<?php
    session_start();
    require("connect/config.php");
?>

<?php
    include("check_login.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Admin Web</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="admin/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="admin/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />    
    <link href="admin/assets/img/icon/icon_bv.ico" rel="shortcut icon" type="image/x-icon" />
</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <h1>THANH VU HOSPITAL</h1>
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form role="form" action="login.php" method="post">
                                    <hr />
                                    <h5>Enter Details to Login</h5>
                                       <br />
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input name="user_name" type="text" class="form-control" placeholder="Your Username " />
                                            <input id="check_user" type="text" value="1" name="check_user" style='display:none;'  readonly="readonly"/>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="user_pass" class="form-control"  placeholder="Your Password" />
                                            <input id="check_pass" type="text" value="1" name="check_pass" style='display:none;'  readonly="readonly"/>
                                        </div>  
                                     <input class="btn btn-primary " type="submit" name="ok" value="Đăng nhập" />
                                    <hr />
                                </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
