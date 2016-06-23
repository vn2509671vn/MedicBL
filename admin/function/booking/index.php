﻿<?php
    session_start();  
    include("../../../connect/config.php");
    if(!isset($_SESSION['ses_name'])){
        header("location:../../../index.php");
    }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index, follow" /
    <meta name="keywords" content="Bệnh Viện Đa Khoa Thanh Vũ Medic" />
    <meta name="description" content="Bệnh Viện Đa Khoa Thanh Vũ Medic" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin - Bệnh Viện Đa Khoa Thanh Vũ Medic</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../../assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="../../assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../../assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="../../assets/img/icon/icon_bv.ico" rel="shortcut icon" type="image/x-icon" />
    
    <script type="text/javascript">
    function check(){
        if(confirm("Bạn thật sự muốn thoát ?")){
            return true;
        }else{
            return false;
        }
    }
</script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                  
                <a class="navbar-brand" href="../index.php">THANH VU HOSPITAL</a>
            </div>

            <div class="header-right">

                <a href="message-task.php" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.php" class="btn btn-primary" title="New Booking"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="logout.php" onclick="return check()" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="../../assets/img/user.png" class="img-thumbnail" />

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
                                <a  href="../../index.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                            </li>
                            
                            <!-- BEGIN NEWS   ===================================================================-->   
                            <li>
                                <a  href="#"><i class="fa fa-desktop "></i>News<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a   href="../news/new.php"><i class="fa fa-toggle-on"></i>News Category</a>
                                    </li>
                                    <li>
                                        <a  href="../news/post.php"><i class="fa fa-bell "></i>Posts</a>
                                    </li>
                           
                                </ul>
                            </li>
                            <!--  END NEWS   ==========================================================================   -->

                            <!--  BEGIN Departments Doctors   ==========================================================================   -->


                            <li>
                            <a href="#"><i class="fa fa-yelp "></i>Departments Doctors <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="../general/department.php"><i class="fa fa-coffee"></i>Department</a>
                                    </li>
                                    <li>
                                        <a href="../general/doctor.php"><i class="fa fa-flash "></i>Doctors</a>
                                    </li>
                                    <li>
                                        <a href="../general/speciality.php"><i class="fa fa-key "></i>Specialities</a>
                                    </li>     
                                </ul>
                            </li>
                            <!--  END Departments Doctors   ==========================================================================   -->
                    <?php
                        }   
                    ?>
                    <!--  BEGIN CONTACTS   ==========================================================================   -->
                    <li>
                        <a  href="../contact/contact.php"><i class="fa fa-flash "></i>Contacts</a>
                        
                  </li>
                    <!--  END  CONTACTS    ==========================================================================   -->
                    <!--  BEGIN BOOKING   ==========================================================================   -->

                     <li>
                        <a class="active-menu" href="book.php"><i class="fa fa-anchor "></i>Booking</a>
                  </li>

                    <!--  END  BOOKING    ==========================================================================   -->




                    <?php
                        if($_SESSION['ses_name'] == 'admin')
                        {
                    ?>                            
                    <!--  BEGIN services   ==========================================================================   -->
                    <li>
                        <a href="#"><i class="fa fa-bicycle "></i>Services <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                             <li>
                                <a href="../services/service.php"><i class="fa fa-desktop "></i>Hospital Services </a>
                            </li>
                             <li>
                                <a href="../services/chuyenkhoa.php"><i class="fa fa-code "></i>ChuyenKhoa List</a>
                            </li>
                             
                           
                        </ul>
                    </li>

                    <!--  END services   ==========================================================================   -->                
                    <!--  BEGIN USER   ==========================================================================   -->  
                            <li>
                                <a href="../users/user.php"><i class="fa fa-bug "></i>Users</a>
                            </li>

                    <!--  END USER   ==========================================================================   -->  
                    <!--  BEGIN MENU   ==========================================================================   --> 

                            <li>
                                <a href="../menu/menu.php"><i class="fa fa-sign-in "></i>Menu</a>
                            </li>
                    <!--  END MENU   ==========================================================================   -->  
                    <!--  BEGIN MENU   ==========================================================================   --> 

                    <li>
                        <a  href="../comments/comment.php"><i class="fa fa-square-o "></i>Comments</a>
                    </li>
                    <!--  END MENU   ==========================================================================   -->  
                    <?php
                        }
                    ?>
                            <li>
                                <a onclick="return check()" title="logout" href="../../logout.php"><i class="fa fa-sign-in "></i>Logout</a>
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
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="main-box mb-red">
                            <a href="#">
                                <i class="fa fa-bolt fa-5x"></i>
                                <h5>Zero Issues</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box mb-dull">
                            <a href="#">
                                <i class="fa fa-plug fa-5x"></i>
                                <h5>40 Task In Check</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box mb-pink">
                            <a href="#">
                                <i class="fa fa-dollar fa-5x"></i>
                                <h5>200K Pending</h5>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">

                                <div id="reviews" class="carousel slide" data-ride="carousel">

                                    <div class="carousel-inner">
                                        <div class="item active">

                                            <div class="col-md-10 col-md-offset-1">

                                                <h4><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum. <i class="fa fa-quote-right"></i></h4>
                                                <div class="user-img pull-right">
                                                    <img src="../../assets/img/user.gif" alt="" class="img-u image-responsive" />
                                                </div>
                                                <h5 class="pull-right"><strong class="c-black">Lorem Dolor</strong></h5>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-10 col-md-offset-1">

                                                <h4><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum. <i class="fa fa-quote-right"></i></h4>
                                                <div class="user-img pull-right">
                                                    <img src="../../assets/img/user.png" alt="" class="img-u image-responsive" />
                                                </div>
                                                <h5 class="pull-right"><strong class="c-black">Lorem Dolor</strong></h5>
                                            </div>

                                        </div>
                                        <div class="item">
                                            <div class="col-md-10 col-md-offset-1">

                                                <h4><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing  Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum. <i class="fa fa-quote-right"></i></h4>
                                                <div class="user-img pull-right">
                                                    <img src="../../assets/img/user.gif" alt="" class="img-u image-responsive" />
                                                </div>
                                                <h5 class="pull-right"><strong class="c-black">Lorem Dolor</strong></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <!--INDICATORS-->
                                    <ol class="carousel-indicators">
                                        <li data-target="#reviews" data-slide-to="0" class="active"></li>
                                        <li data-target="#reviews" data-slide-to="1"></li>
                                        <li data-target="#reviews" data-slide-to="2"></li>
                                    </ol>
                                    <!--PREVIUS-NEXT BUTTONS-->

                                </div>

                            </div>

                        </div>
                        <!-- /. ROW  -->
                        <hr />

                        <div class="panel panel-default">

                            <div id="carousel-example" class="carousel slide" data-ride="carousel" style="border: 5px solid #000;">

                                <div class="carousel-inner">
                                    <div class="item active">

                                        <img src="../../assets/img/slideshow/1.jpg" alt="" />

                                    </div>
                                    <div class="item">
                                        <img src="../../assets/img/slideshow/2.jpg" alt="" />

                                    </div>
                                    <div class="item">
                                        <img src="../../assets/img/slideshow/3.jpg" alt="" />

                                    </div>
                                </div>
                                <!--INDICATORS-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example" data-slide-to="1"></li>
                                    <li data-target="#carousel-example" data-slide-to="2"></li>
                                </ol>
                                <!--PREVIUS-NEXT BUTTONS-->
                                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.REVIEWS &  SLIDESHOW  -->
                    <div class="col-md-4">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Recent Chat History
                            </div>
                            <div class="panel-body" style="padding: 0px;">
                                <div class="chat-widget-main">


                                    <div class="chat-widget-left">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </div>
                                    <div class="chat-widget-name-left">
                                        <h4>Amanna Seiar</h4>
                                    </div>
                                    <div class="chat-widget-right">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </div>
                                    <div class="chat-widget-name-right">
                                        <h4>Donim Cruseia </h4>
                                    </div>
                                    <div class="chat-widget-left">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </div>
                                    <div class="chat-widget-name-left">
                                        <h4>Amanna Seiar</h4>
                                    </div>
                                    <div class="chat-widget-right">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </div>
                                    <div class="chat-widget-name-right">
                                        <h4>Donim Cruseia </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter Message" />
                                    <span class="input-group-btn">
                                        <button class="btn btn-success" type="button">SEND</button>
                                    </span>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!--/.Chat Panel End-->
                </div>
                <!-- /. ROW  -->


                <div class="row">

                    <div class="col-md-8">
                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                <h4 class="list-group-item-heading">LIST GROUP HEADING</h4>
                                <p class="list-group-item-text" style="line-height: 30px;">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </a>
                        </div>
                        <br />
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0"></iframe>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <i class="fa fa-bell fa-fw"></i>Notifications Panel
                            </div>

                            <div class="panel-body">
                                <div class="list-group">

                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-twitter fa-fw"></i>3 New Followers
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-envelope fa-fw"></i>Message Sent
                                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-tasks fa-fw"></i>New Task
                                    <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-bolt fa-fw"></i>Server Crashed!
                                    <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-warning fa-fw"></i>Server Not Responding
                                    <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                                    </a>

                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-bolt fa-fw"></i>Server Crashed!
                                    <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-warning fa-fw"></i>Server Not Responding
                                    <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-shopping-cart fa-fw"></i>New Order Placed
                                    <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                                    </a>
                                </div>
                                <!-- /.list-group -->
                                <a href="#" class="btn btn-info btn-block">View All Alerts</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.Row-->
                <hr />
                <div class="row">

                    <div class="col-md-8">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>User No.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><span class="label label-danger">Mark</span></td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td><span class="label label-info">100090</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>100090</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Larry</td>
                                        <td><span class="label label-danger">the Bird</span> </td>
                                        <td>@twitter</td>
                                        <td>100090</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><span class="label label-success">Mark</span></td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td><span class="label label-info">100090</span></td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Larry</td>
                                        <td><span class="label label-primary">the Bird</span></td>
                                        <td>@twitter</td>
                                        <td>100090</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td><span class="label label-warning">Jacob</span></td>
                                        <td><span class="label label-success">Thornton</span></td>
                                        <td>@fat</td>
                                        <td><span class="label label-danger">100090</span></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Larry</td>
                                        <td><span class="label label-primary">the Bird</span></td>
                                        <td>@twitter</td>
                                        <td>100090</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td><span class="label label-warning">Jacob</span></td>
                                        <td><span class="label label-success">Thornton</span></td>
                                        <td>@fat</td>
                                        <td><span class="label label-danger">100090</span></td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td><span class="label label-success">Mark</span></td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td><span class="label label-info">100090</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>




                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Recent Comments Example
                            </div>
                            <div class="panel-body">
                                <ul class="media-list">

                                    <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle img-comments" src="../../assets/img/user.png" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Nulla gravida vitae  </h4>
                                                    Donec sit amet ligula enim. Duis vel condimentum massa.
              
              <!-- Nested media object -->
                                                    <div class="media">
                                                        <a class="pull-left" href="#">
                                                            <img class="media-object img-circle img-comments" src="../../assets/img/user.gif" />
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">Amet ligula enim</h4>
                                                            Donec sit amet ligula enim .
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <a class="pull-left" href="#">
                                                            <img class="media-object img-circle img-comments" src="../../assets/img/user.png" />
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">Donec t ligula enim</h4>
                                                            Donec sit amet  amet ligula enim . 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Row-->
                <hr />
                <div class="row" style="padding-bottom: 100px; `">
                    <div class="col-md-6">
                        <div id="comments-sec">
                            <h4><strong>Compose Support Ticket </strong></h4>
                            <hr />


                            <div class="form-group  ">
                                <label>Please Write a Subject Line</label>
                                <input type="text" class="form-control" required="required" placeholder="Enter Subject Of Ticket" />
                            </div>
                            <div class="form-group ">
                                <label>Please Enter Issue</label>
                                <textarea class="form-control" rows="8"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Compose &amp; Send Ticket</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-black">
                                <i class="fa fa-bicycle"></i>
                            </span>
                            <div class="text-box">
                                <p class="main-text">52 Important Issues to Fix </p>
                                <p>Please fix these issues to work smooth</p>
                                <p>Time Left: 30 mins</p>
                                <hr />
                                <p>
                                    <span class=" color-bottom-txt"><i class="fa fa-edit"></i>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn. 
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn. 
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn.
                             
                                    </span>


                                </p>
                                <hr />
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn. 
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn.
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.ROW-->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../../assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../../assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../../assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="../../assets/js/custom.js"></script>
    


</body>
</html>