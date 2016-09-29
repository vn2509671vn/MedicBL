<?php
if(isset($_SESSION['ses_name'])){
    header("location:admin/index.php");
}
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
    <script type="text/javascript" src="admin/assets/js/jquery-1.11.3-jquery.min.js"></script>
    <script type="text/javascript">
        function check_login() {
                var user = $('#user_name').val();
                var pass = $('#user_pass').val();
                $.ajax({
                    type: "POST",
                    url: "check_login.php",
                    data :{
                      user_name: user,
                      user_pass: pass,  
                    } ,
                    datatype: 'text',
                    success: function (data) {
                        var check = data;
                        if(check == 0){
                            alert("dang nhap thanh cong");
                            document.location='admin/index.php';
                        }
                        else if(check == 1){
                            alert("Please Enter Username!!!");
                        }
                        else if(check == 2){
                            alert("Please Enter Password!!!");
                        }
                    },
                });
        }
    </script>
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
                                <form role="form" action="" method="post">
                                    <hr />
                                    <h5>Enter Details to Login</h5>
                                       <br />
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input id="user_name" class="user_name" name="user_name" type="text" class="form-control" placeholder="Your Username " />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input id="user_pass" class="user_pass" type="password" name="user_pass" class="form-control"  placeholder="Your Password" />
                                        </div> 
                                        <input class="check_temp" id="check_temp" type="text" value="1" name="check_temp" style='display:none;'  readonly="readonly"/>
                                        
                                     <input class="btn btn-primary " type="button" name="ok" value="Đăng nhập" onclick="return check_login()" />
                                    <hr />
                                </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>
<script src="admin/assets/js/jquery-1.12.3.min.js"></script>
</body>
</html>
