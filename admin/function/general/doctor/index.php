<?php
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

    <!-- BOOTSTRAP STYLES-->
    <link href="../../../assets/css/bootstrap.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../../../assets/css/datepicker.min.css" type="text/css" />
    <link rel="stylesheet" href="../../../assets/css/datepicker3.min.css" type="text/css" />
    <link rel="stylesheet" href="../../../assets/css/bootstrap-fileupload.min.css" type="text/css" />
    <link href="../../../assets/css/buttons.dataTables.min.css" rel="stylesheet"/>
    <link href="../../../assets/css/datatables.min.css" rel="stylesheet"/>
    <!-- FONTAWESOME STYLES-->
    <link href="../../..//assets/css/font-awesome.css" rel="stylesheet"/>
    <!--CUSTOM BASIC STYLES-->
    <link href="../../../assets/css/basic.css" rel="stylesheet"/>
    <!--CUSTOM MAIN STYLES-->
    <link href="../../../assets/css/custom.css" rel="stylesheet"/>
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
    <link href="../../../assets/img/icon/icon_bv.ico" rel="shortcut icon" type="image/x-icon"/>
    <script type="text/javascript" src="../../../assets/editor/ckeditor/ckeditor.js" ></script>
    <script type="text/javascript" src="../../../assets/editor/ckfinder/ckfinder.js" ></script>
    <script type="text/javascript" src="../../../assets/js/jquery-1.11.3-jquery.min.js"></script>
    <script type="text/javascript">
    function changeBusiness(){
         var data = new FormData($('#emp-SaveForm')[0]);
            $.ajax({
				    type:"POST",
                    url:"insert.php",
                    data:data,
                    mimeType: "multipart/form-data",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success:function(data)
                      {
            				var image = data;
                            document.getElementById('doctor_temp').value = image;
                            alert("Uploaded Image: " + image);
                       }
        				});
      
    }
    function changeDoctor(){
         var data = new FormData($('#emp-UpdateForm')[0]);
            $.ajax({
				    type:"POST",
                    url:"insert.php",
                    data:data,
                    mimeType: "multipart/form-data",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success:function(data)
                      {
            				var image = data;
                            document.getElementById('doctor_temp').value = image;
                            alert("Uploaded Image: " + image);
                       }
        				});
      
    }
</script>
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
            <a class="navbar-brand" href="../../../../views/pagehome.php">THANH VU HOSPITAL</a>
        </div>

        <div class="header-right">

            <a href="../contact/index.php" class="btn btn-info" title="New Message">
                <b>
                    <?php
                        require_once '../../../../connect/dbconfig.php';
                        $stmt4 = $db_con->prepare("SELECT * FROM contact b where b.contact_approve = 0");
                        $stmt4->execute();
                        $count4 = $stmt4->rowCount();
                        echo $count4;
                    ?> 
                </b><i
                    class="fa fa-envelope-o fa-2x"></i></a>
            <a href="../booking/index.php" class="btn btn-primary" title="New Booking">
                <b>
                    <?php
                        require_once '../../../../connect/dbconfig.php';
                        $stmt3 = $db_con->prepare("SELECT * FROM booking b where b.booking_approve = 0");
                        $stmt3->execute();
                        $count3 = $stmt3->rowCount();
                        echo $count3;
                    ?> 
                </b><i
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
                    <li>
                        <a href="../../about_hos/index.php"><i class="glyphicon glyphicon-info-sign"></i>About</a>
                    </li>
                    <!-- BEGIN NEWS   ===================================================================-->
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>News<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../../news/new/index.php"><i class="fa fa-toggle-on"></i>News Category</a>
                            </li>
                            <li>
                                <a href="../../news/post/index.php"><i class="fa fa-bell "></i>Posts</a>
                            </li>
                        </ul>
                    </li>
                    <!--  END NEWS   ==========================================================================   -->

                    <!--  BEGIN Departments Doctors   ==========================================================================   -->


                    <li>
                        <a class="active-menu-top" href="#"><i class="fa fa-yelp "></i>Departments Doctors <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse in">
                            <li>
                                <a href="../department_doctor/index.php"><i class="fa fa-toggle-on"></i>Department Doctor</a>
                            </li>
                            <li>
                                <a href="../department/index.php"><i class="fa fa-coffee"></i>Department</a>
                            </li>
                            <li>
                                <a class="active-menu" href="../doctor/index.php"><i class="fa fa-flash "></i>Doctors</a>
                            </li>
                            <li>
                                <a  href="../speciality/index.php"><i class="fa fa-key "></i>Specialities</a>
                            </li>
                        </ul>
                    </li>
                    <!--  END Departments Doctors   ==========================================================================   -->
                    <?php
                }
                ?>
                <!--  BEGIN CONTACTS   ==========================================================================   -->
                <li>
                    <a href="../../contact/index.php"><i class="fa fa-flash "></i>Contacts</a>

                </li>
                <!--  END  CONTACTS    ==========================================================================   -->
                <!--  BEGIN BOOKING   ==========================================================================   -->

                <li>
                    <a href="../../booking/index.php"><i class="fa fa-anchor "></i>Booking</a>
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
                                <a href="../../services/service/index.php"><i class="fa fa-desktop "></i>Hospital Services </a>
                            </li>
                            <li>
                                <a href="../../services/speciality/index.php"><i class="fa fa-code "></i>ChuyenKhoa List</a>
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
                        <a href="../../menu/index.php"><i class="fa fa-sign-in "></i>Menu</a>
                    </li>
                    <!--  END MENU   ==========================================================================   -->
                    <!--  BEGIN MENU   ==========================================================================   -->

                    <li>
                        <a href="../../comments/index.php"><i class="fa fa-square-o "></i>Feeling Customer</a>
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
                        <h1 class="page-head-line">Doctors</h1>
                        <button class="btn btn-info" type="button" id="btn-add"><span
                                class="glyphicon glyphicon-pencil"></span> &nbsp; Add Doctor
                        </button>
                        <button class="btn btn-info" type="button" id="btn-view"><span
                                class="glyphicon glyphicon-eye-open"></span> &nbsp; View Doctor
                        </button>
                        <hr/>

                        <div class="content-loader">
                            <table cellspacing="0" width="100%" id="doctors"
                                   class="table table-striped table-hover table-responsive">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Doctor Name VN</th>
                                    <th>Doctor Name EN</th>
                                    <th>Doctor Born</th>
                                    <th>Doctor Speciality</th>
                                    <th>Doctor Image</th>
                                    <th>Doctor Experience VN</th>
                                    <th>Doctor Experience EN</th>
                                    <th>Doctor Call</th>
                                    <th>Doctor Qualification VN</th>
                                    <th>Doctor Qualification EN</th>
                                    <th>Doctor ChuyenKhoa</th>
                                    <th>edit</th>
                                    <th>delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                require_once '../../../../connect/dbconfig.php';

                                $stmt = $db_con->prepare("SELECT * FROM doctors dt 
                                left join specialities sp on dt.doctor_speciality_id = sp.speciality_id
                                left join chuyenkhoa ck on dt.chuyenkhoa_id = ck.chuyenkhoa_id ORDER BY doctor_id DESC");
                                $stmt->execute();
                                $count = 1;
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    $doctor_name_vn = $row['doctor_name_vn'];
                                    $doctor_name_en = $row['doctor_name_en'];
                                    $doctor_porn = $row['doctor_born'];
                                    $doctor_speciality_id = $row['speciality_name'];
                                    $doctor_image = $row['doctor_image'];
                                    $doctor_experience_vn = $row['doctor_experience_vn'];
                                    $doctor_experience_vn = substr($doctor_experience_vn,0,80) . '...';
                                    $doctor_experience_en = $row['doctor_experience_en'];
                                    $doctor_experience_en = substr($doctor_experience_en,0,80) . '...';
                                    $doctor_call = $row['doctor_call'];
                                    $doctor_qualification_vn = $row['doctor_qualification_vn'];
                                    $doctor_qualification_vn = substr($doctor_qualification_vn,0,80) . '...';
                                    $doctor_qualification_en = $row['doctor_qualification_en'];
                                    $doctor_qualification_en = substr($doctor_qualification_en,0,80) . '...';
                                    $doctor_chuyenkhoa_id = $row['chuyenkhoa_name'];
                                    ?>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $doctor_name_vn; ?></td>
                                        <td><?php echo $doctor_name_en; ?></td>
                                        <td><?php echo $doctor_porn; ?></td>
                                        <td><?php echo $doctor_speciality_id; ?></td>
                                        <td><?php echo $doctor_image; ?></td>
                                        <td><?php echo $doctor_experience_vn; ?></td>
                                        <td><?php echo $doctor_experience_en; ?></td>
                                        <td><?php echo $doctor_call; ?></td>
                                        <td><?php echo $doctor_qualification_vn; ?></td>
                                        <td><?php echo $doctor_qualification_en; ?></td>
                                        <td><?php echo $doctor_chuyenkhoa_id; ?></td>
                                        <td align="center">
                                            <a id="<?php echo $row['doctor_id']; ?>" class="edit-link" href="#"
                                               title="Edit">
                                                <img src="../../../assets/img/edit.png" width="20px"/>
                                            </a></td>
                                        <td align="center"><a id="<?php echo $row['doctor_id']; ?>" class="delete-link"
                                                              href="#" title="Delete">
                                                <img src="../../../assets/img/delete.png" width="20px"/>
                                            </a></td>
                                    </tr>
                                    <?php
                                    $count = $count+1;
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
<?php include("../../../footer.php");  ?>
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
<script src="../../../assets/js/bootstrap-fileupload.js"></script>   <!--- Moi them vao ngay 2606  -->
<script src="../../../assets/js/crud.js" type="text/javascript"></script>
<script src="../../../assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../../../assets/js/datatables.min.js"></script>
<script type="text/javascript" src="../../../assets/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript" src="../../../assets/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.1/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.1/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js"></script>

<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
        $('#doctors')
            .removeClass('display')
            .addClass('table table-bordered');
        $('#doctors').DataTable({
            "scrollX": true,
            "scrollY": 510,
            "scrollCollapse": true,
            "dom":'<<"row"<"col-sm-4"B><"col-sm-4"l><"col-sm-4"f>>t<"row"<"col-sm-6"i><"col-sm-6"p>>>',
             "buttons": [
                 'excel', 'pdf', 'print'
             ]
        });
        
    });
</script>


</body>
</html>
