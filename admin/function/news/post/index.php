﻿<?php
session_start();
include("../../../../connect/config.php");
if (!isset($_SESSION['ses_name'])) {
    header("location:../../../../login.php");
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="robots" content="index, follow"
    />
    <meta name="keywords" content="Bệnh Viện Đa Khoa Thanh Vũ Medic"/>
    <meta name="description" content="Bệnh Viện Đa Khoa Thanh Vũ Medic"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Admin - Bệnh Viện Đa Khoa Thanh Vũ Medic</title>
    <link href="../../../assets/css/bootstrap.css" rel="stylesheet"/>
    <link href="../../..//assets/css/font-awesome.css" rel="stylesheet"/>    <!--CUSTOM BASIC STYLES-->
    <link href="../../../assets/css/basic.css" rel="stylesheet"/>
    <link href="../../../assets/css/custom.css" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
    <link href="../../../assets/img/icon/icon_bv.ico" rel="shortcut icon" type="image/x-icon"/>
    <script type="text/javascript" src="../../../assets/editor/ckeditor/ckeditor.js" ></script>
    <script type="text/javascript" src="../../../assets/editor/ckfinder/ckfinder.js" ></script>
    <script type="text/javascript" src="../../../assets/js/jquery-1.11.3-jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $("#btn-view").hide();

            $("#btn-add").click(function () {
                $(".content-loader").fadeOut('slow', function () {
                    $(".content-loader").fadeIn('slow');
                    $(".content-loader").load('add_form.php');
                    $("#btn-add").hide();
                    $("#btn-view").show();
                });
            });

            $("#btn-view").click(function () {

                $("body").fadeOut('slow', function () {
                    $("body").load('index.php');
                    $("body").fadeIn('slow');
                    window.location.href = "index.php";
                });
            });

        });
    </script>
    <script type="text/javascript">
        function check() {
            if (confirm("Bạn thật sự muốn thoát ?")) {
                return true;
            } else {
                return false;
            }
        }
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
            <a class="navbar-brand" href="../../index.php">THANH VU HOSPITAL</a>
        </div>

        <div class="header-right">

            <a href="../../contact/contact.php" class="btn btn-info" title="New Message"><b>30 </b><i
                    class="fa fa-envelope-o fa-2x"></i></a>
            <a href="../../booking/book.php" class="btn btn-primary" title="New Booking"><b>40 </b><i
                    class="fa fa-bars fa-2x"></i></a>
            <a href="../../../logout.php" onclick="return check()" class="btn btn-danger" title="Logout"><i
                    class="fa fa-exclamation-circle fa-2x"></i></a>

        </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
                    <div class="user-img-div">
                        <img src="../../../assets/img/user.png" class="img-thumbnail"/>

                        <div class="inner-text">

                            Xin chào <span style="color:#F30"><?php echo $_SESSION['ses_name']; ?></span>
                            <br/>
                            <small>Last Login :

                                <?php
                                $sql_time = "select * from user where user_username='" . $_SESSION['ses_name'] . "'";
                                $qr_time = mysql_query($sql_time);
                                while ($qr_time_date = mysql_fetch_array($qr_time)) {
                                    echo $qr_time_date['user_last_datetime'];
                                }


                                ?>
                            </small>
                        </div>
                    </div>

                </li>

                <?php
                if ($_SESSION['ses_name'] == 'admin') {
                    ?>
                    <li>
                        <a href="../../../index.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>

                    <!-- BEGIN NEWS   ===================================================================-->
                    <li>
                        <a class="active-menu-top" href="#"><i class="fa fa-desktop "></i>News<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse in">
                            <li>
                                <a  href="../new/index.php"><i class="fa fa-toggle-on"></i>News Category</a>
                            </li>
                            <li>
                                <a class="active-menu" href="index.php"><i class="fa fa-bell "></i>Posts</a>
                            </li>
                        </ul>
                    </li>
                    <!--  END NEWS   ==========================================================================   -->

                    <!--  BEGIN Departments Doctors   ==========================================================================   -->


                    <li>
                        <a href="#"><i class="fa fa-yelp "></i>Departments Doctors <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../../general/department_type/index.php"><i class="fa fa-toggle-on"></i>Department Type</a>
                            </li>
                            <li>
                                <a href="../../general/department.php"><i class="fa fa-coffee"></i>Department</a>
                            </li>
                            <li>
                                <a href="../../general/doctor.php"><i class="fa fa-flash "></i>Doctors</a>
                            </li>
                            <li>
                                <a href="../../general/speciality.php"><i class="fa fa-key "></i>Specialities</a>
                            </li>
                        </ul>
                    </li>
                    <!--  END Departments Doctors   ==========================================================================   -->
                    <?php
                }
                ?>
                <!--  BEGIN CONTACTS   ==========================================================================   -->
                <li>
                    <a href="../../contact/contact.php"><i class="fa fa-flash "></i>Contacts</a>

                </li>
                <!--  END  CONTACTS    ==========================================================================   -->
                <!--  BEGIN BOOKING   ==========================================================================   -->

                <li>
                    <a href="../../booking/book.php"><i class="fa fa-anchor "></i>Booking</a>
                </li>

                <!--  END  BOOKING    ==========================================================================   -->


                <?php
                if ($_SESSION['ses_name'] == 'admin') {
                    ?>
                    <!--  BEGIN services   ==========================================================================   -->
                    <li>
                        <a href="#"><i class="fa fa-bicycle "></i>Services <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                            <li>
                                <a href="service.php"><i class="fa fa-desktop "></i>Hospital Services </a>
                            </li>
                            <li>
                                <a href="../speciality/index.php"><i class="fa fa-code "></i>ChuyenKhoa List</a>
                            </li>


                        </ul>
                    </li>

                    <!--  END services   ==========================================================================   -->
                    <!--  BEGIN USER   ==========================================================================   -->
                    <li>
                        <a href="../../users/index.php"><i class="fa fa-bug "></i>Users</a>
                    </li>

                    <!--  END USER   ==========================================================================   -->
                    <!--  BEGIN MENU   ==========================================================================   -->

                    <li>
                        <a href="../../menu/menu.php"><i class="fa fa-sign-in "></i>Menu</a>
                    </li>
                    <!--  END MENU   ==========================================================================   -->
                    <!--  BEGIN MENU   ==========================================================================   -->

                    <li>
                        <a href="../../comments/comment.php"><i class="fa fa-square-o "></i>Comments</a>
                    </li>
                    <!--  END MENU   ==========================================================================   -->
                    <?php
                }
                ?>
                <li>
                    <a onclick="return check()" title="logout" href="../../../logout.php"><i class="fa fa-sign-in "></i>Logout</a>
                </li>
            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="container">
                        <h1 class="page-head-line">POSTS</h1>
                        <button class="btn btn-info" type="button" id="btn-add"><span
                                class="glyphicon glyphicon-pencil"></span> &nbsp; Add Posts
                        </button>
                        <button class="btn btn-info" type="button" id="btn-view"><span
                                class="glyphicon glyphicon-eye-open"></span> &nbsp; View Posts
                        </button>
                        <hr/>

                        <div class="content-loader">
                            <table cellspacing="0" width="100%" id="posts"
                                   class="table table-striped table-hover table-responsive">
                                <thead>
                                <tr>
                                    <th>Post ID</th>
                                    <th>Post Title VN</th>
                                    <th>Post Title EN</th>
                                    <th>Post Excerpt VN</th>
                                    <th>Post Excerpt EN</th>
                                    <th>Post Content VN</th>
                                    <th>Post Content EN</th>
                                    <th>Post Image</th>
                                    <th>Post Type</th>
                                    <th>Post View</th>
                                    <th>Post Date</th>
                                    <th>Post Status</th>
                                    <th>edit</th>
                                    <th>delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                require_once '../../../../connect/dbconfig.php';

                                $stmt = $db_con->prepare("SELECT * FROM posts ORDER BY post_date DESC");
                                $stmt->execute();
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    $post_title = $row['post_title'];
                                    $post_title = substr($post_title,0,80) . '...';
                                    $post_content = $row['post_content'];
                                    $post_content = substr($post_content,0,80) . '...';
                                    $post_excerpt = $row['post_excerpt'];
                                    $post_excerpt = substr($post_excerpt,0,80) . '...';

                                    $post_title_en = $row['post_title_en'];
                                    $post_title_en = substr($post_title_en,0,80) . '...';
                                    $post_content_en = $row['post_content_en'];
                                    $post_content_en = substr($post_content_en,0,80) . '...';
                                    $post_excerpt_en = $row['post_excerpt_en'];
                                    $post_excerpt_en = substr($post_excerpt_en,0,80) . '...';
                                    ?>
                                    <tr>
                                        <td><?php echo $row['post_id']; ?></td>
                                        <td><?php echo $post_title; ?></td>
                                        <td><?php echo $post_title_en; ?></td>
                                        <td><?php echo $post_excerpt; ?></td>
                                        <td><?php echo $post_excerpt_en; ?></td>
                                        <td><?php echo $post_content; ?></td>
                                        <td><?php echo $post_content_en; ?></td>
                                        <td><?php echo $row['post_image']; ?></td>
                                        <td><?php echo $row['cat_id']; ?></td>
                                        <td><?php echo $row['post_count']; ?></td>
                                        <td><?php echo $row['post_date']; ?></td>
                                        <td><?php echo $row['post_status']; ?></td>
                                        <td align="center">
                                            <a id="<?php echo $row['post_id']; ?>" class="edit-link" href="#"
                                               title="Edit">
                                                <img src="../../../assets/img/edit.png" width="20px"/>
                                            </a></td>
                                        <td align="center"><a id="<?php echo $row['post_id']; ?>" class="delete-link"
                                                              href="#" title="Delete">
                                                <img src="../../../assets/img/delete.png" width="20px"/>
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
<!--<script src="../../assets/js/jquery-1.10.2.js"></script>-->
<!-- BOOTSTRAP SCRIPTS -->
<script src="../../../assets/js/bootstrap.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="../../../assets/js/jquery.metisMenu.js"></script>

<!-- CUSTOM SCRIPTS -->
<script src="../../../assets/js/custom.js"></script>
<script src="../../../assets/js/jquery-1.12.3.min.js"></script>
<script src="../../../assets/js/crud.js" type="text/javascript"></script>
<script src="../../../assets/js/jquery.dataTables.min.js"></script>
<!--<script src="../../../assets/css/bootstrap.min.css"></script>-->
<script type="text/javascript" src="../../../assets/js/datatables.min.js"></script>-->

<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
        $('#posts').DataTable();

        $('#posts')
            .removeClass('display')
            .addClass('table table-bordered');
    });
</script>


</body>
</html>
