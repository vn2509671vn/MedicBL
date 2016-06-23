﻿<?php
session_start();
include("../connect/config.php");
if(!isset($_SESSION['ses_name'])){
    header("location:../login.php");
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index, follow" /
    <meta name="keywords" content="Bệnh Viện Đa Khoa Thanh Vũ Medic" />
    <meta name="description" content="Bệnh Viện Đa Khoa Thanh Vũ Medic" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin - Bệnh Viện Đa Khoa Thanh Vũ Medic</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="assets/img/icon/icon_bv.ico" rel="shortcut icon" type="image/x-icon" />
    <script type="text/javascript" src="assets/js/jquery-1.11.3-jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $("#btn-view").hide();

            $("#btn-add").click(function(){
                $(".content-loader").fadeOut('slow', function()
                {
                    $(".content-loader").fadeIn('slow');
                    $(".content-loader").load('function/user/add_form.php');
                    $("#btn-add").hide();
                    $("#btn-view").show();
                });
            });

            $("#btn-view").click(function(){

                $("body").fadeOut('slow', function()
                {
                    $("body").load('index.php');
                    $("body").fadeIn('slow');
                    window.location.href="index.php";
                });
            });

        });
    </script>

    <script type="text/javascript">
        function check(){
            if(confirm("Bạn thật sự muốn thoát ?")){
                return true;
            }else{
                return false;
            }
        };
            
    </script>

</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index.php">THANH VU HOSPITAL</a>
        </div>

        <div class="header-right">

            <a href="function/contact/index.php" class="btn btn-info" title="Total of not contact"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
            <a href="function/booking/index.php" class="btn btn-primary" title="Total of no Booking"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
            <a href="logout.php" onclick="return check()" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

        </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
                    <div class="user-img-div">
                        <img src="assets/img/user.png" class="img-thumbnail" />

                        <div class="inner-text">

                            Xin chào <span style="color:#F30"><?php echo $_SESSION['ses_name']; ?></span>
                            <br />
                            <small>Last Login :

                                <?php
                                $sql_time = "select * from user where user_username='" . $_SESSION['ses_name'] ."'";
                                $qr_time = mysql_query($sql_time);
                                while ($qr_time_date  = mysql_fetch_array($qr_time)) {
                                    echo $qr_time_date['user_last_datetime'];
                                }


                                ?>
                            </small>
                        </div>
                    </div>

                </li>

                <?php
                if($_SESSION['ses_name'] == 'admin')
                {
                    ?>
                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>News<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="function/news/new/index.php"><i class="fa fa-toggle-on"></i>News Category</a>
                            </li>
                            <li>
                                <a href="function/news/post/index.php"><i class="fa fa-bell "></i>Posts</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Departments Doctors<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="function/general/department_type/index.php"><i class="fa fa-toggle-on"></i>Department Type</a>
                            </li>
                            <li>
                                <a href="function/general/department/index.php"><i class="fa fa-toggle-on"></i>Department</a>
                            </li>
                            <li>
                                <a href="function/general/doctor/index.php"><i class="fa fa-bell "></i>Doctors</a>
                            </li>
                            <li>
                                <a href="function/general/speciality/index.php"><i class="fa fa-flash "></i>Specialities</a>
                            </li>

                        </ul>
                    </li>
                    <?php
                }
                ?>
                <li>
                    <a href="function/contact/index.php"><i class="fa fa-flash "></i>Contacts</a>

                </li>
                <li>
                    <a href="function/booking/index.php"><i class="fa fa-key"></i>Booking</a>

                </li>
                <?php
                if($_SESSION['ses_name'] == 'admin')
                {
                    ?>
                    <li>
                        <a href="#"><i class="fa fa-yelp "></i>Services<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="function/services/service/index.php"><i class="fa fa-flash "></i>Hospital Services</a>
                            </li>
                            <li>
                                <a href="function/services/speciality/index.php"><i class="fa fa-key "></i>ChuyenKhoa List</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="function/users/index.php"><i class="fa fa-anchor "></i>Users</a>
                    </li>
                    <li>
                        <a href="function/menu/index.php"><i class="fa fa-bug "></i>Menu</a>
                    </li>
                    <li>
                        <a href="function/comment/index.php"><i class="fa fa-sign-in "></i>Comments</a>
                    </li>
                    <?php
                }
                ?>
                <li>
                    <a class="logout" onclick="return check()" title="logout" href="logout.php"><i class="fa fa-sign-in "></i>Logout</a>
                </li>
            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">DASHBOARD</h1>
<!--                    <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>-->

                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="main-box mb-red">
                            <a href="#">
                                <i class="fa fa-bolt fa-5x"></i>
                                <h5>Number Contacts</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box mb-dull">
                            <a href="#">
                                <i class="fa fa-plug fa-5x"></i>
                                <h5>Number Booking</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box mb-pink">
                            <a href="#">
                                <i class="fa fa-dollar fa-5x"></i>
                                <h5>Number Users</h5>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="container">
                        <h1 class="page-head-line">Users</h1>
                        <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Add Employee</button>
                        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View Employee</button>
                        <hr />

                        <div class="content-loader">

                            <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
                                <thead>
                                <tr>
                                    <th>Emp ID</th>
                                    <th>Emp Name</th>
                                    <th>department</th>
                                    <th>salary</th>
                                    <th>edit</th>
                                    <th>delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                require_once '../connect/dbconfig.php';

                                $stmt = $db_con->prepare("SELECT * FROM user ORDER BY user_id DESC");
                                $stmt->execute();
                                while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['user_id']; ?></td>
                                        <td><?php echo $row['user_name']; ?></td>
                                        <td><?php echo $row['user_username']; ?></td>
                                        <td><?php echo $row['user_password']; ?></td>
                                        <td align="center">
                                            <a id="<?php echo $row['user_id']; ?>" class="edit-link" href="#" title="Edit">
                                                <img src="assets/img/edit.png" width="20px" />
                                            </a></td>
                                        <td align="center"><a id="<?php echo $row['user_id']; ?>" class="delete-link" href="#" title="Delete">
                                                <img src="assets/img/delete.png" width="20px" />
                                            </a></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <?php
        include("footer.php");
    ?>
    ?>
    <!-- /. FOOTER  -->
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script src="fassets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/datatables.min.js"></script>
    <script type="text/javascript" src="assets/js/crud.js"></script>

    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $('#example').DataTable();

            $('#example')
                .removeClass( 'display' )
                .addClass('table table-bordered');
        });
    </script>
</body>
</html>