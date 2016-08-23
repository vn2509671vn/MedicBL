<?php
session_start();
include("../../../connect/config.php");
include("process.php");
if (!isset($_SESSION['ses_name'])) {
    header("location:../../../login.php");
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="robots" content="index, follow"
    /
    <meta name="keywords" content="Bệnh Viện Đa Khoa Thanh Vũ Medic"/>
    <meta name="description" content="Bệnh Viện Đa Khoa Thanh Vũ Medic"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Admin - Bệnh Viện Đa Khoa Thanh Vũ Medic</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONTAWESOME STYLES-->
    <link href="../../assets/css/font-awesome.css" rel="stylesheet"/>
    
    <link href="../../assets/css/buttons.dataTables.min.css" rel="stylesheet"/>
    <!--CUSTOM BASIC STYLES-->
    <link href="../../assets/css/basic.css" rel="stylesheet"/>
    <!--CUSTOM MAIN STYLES-->
    <link href="../../assets/css/custom.css" rel="stylesheet"/>
    <link href="../../assets/css/datatables.min.css" rel="stylesheet"/>
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
    <link href="../../assets/img/icon/icon_bv.ico" rel="shortcut icon" type="image/x-icon"/>
    <script type="text/javascript" src="../../assets/js/jquery-1.11.3-jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $("#btn-view").hide();
            $("#btn-add").hide();
            $(".accept-link").click(function()
        	{
        	    var id = $(this).attr("id");
        	    var temp_cont = 'contact_temp' + id; // get class temp to inlcude id temp
        	    var temp = document.getElementById(temp_cont).value;
        	    var temp_class = ".accept-link .img_accept" + id;  //get class parent and children to change src img
        	    if(temp==0){
                    $(temp_class).attr("src", "../../assets/img/accept.png");
                    alert("UnApproved ID:" + id)
        	    }
        	    else{
        	        $(temp_class).attr("src", "../../assets/img/reject.png");
        	        alert("UnApproved ID:" + id)
        	    }
                $.ajax({
					url: 'process.php',
					type: 'POST',
					dataType: 'text',
					data: "id=" + id,
					success: function(data){
						$result = data;
						document.getElementById(temp_cont).value = data;
					}
				});
            });
//             $(".view").click(function()
//         	{
//         	    var id = $(this).attr("id");
//         	    $.ajax({
// 					url: 'view.php',
// 					type: 'POST',
// 					dataType: 'text',
// 					data: "id=" + id,
// 					success: function(data){
// 						$result = data;
// 						alert($result);
// 					}
// 				});
// 			});
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
            <a class="navbar-brand" href="../views/homepage.php">THANH VU HOSPITAL</a>
        </div>

        <div class="header-right">

            <a href="../contact/index.php" class="btn btn-info" title="New Message">
                <b>
                    <?php
                        require_once '../../../connect/dbconfig.php';
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
                        require_once '../../../connect/dbconfig.php';
                        $stmt3 = $db_con->prepare("SELECT * FROM booking b where b.booking_approve = 0");
                        $stmt3->execute();
                        $count3 = $stmt3->rowCount();
                        echo $count3;
                    ?> 
                </b><i
                    class="fa fa-bars fa-2x"></i></a>
            <a href="../../logout.php" onclick="return check()" class="btn btn-danger" title="Logout"><i
                    class="fa fa-exclamation-circle fa-2x"></i></a>

        </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
                    <div class="user-img-div">
                        <img src="../../assets/img/user.png" class="img-thumbnail"/>

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
                        <a href="../../index.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="../about_hos/index.php"><i class="glyphicon glyphicon-info-sign"></i>About</a>
                    </li>
                    <li>
                        <a href="../document/index.php"><i class="glyphicon glyphicon-book"></i>Documents</a>
                    </li>
                    <!-- BEGIN NEWS   ===================================================================-->
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>News<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../news/new/index.php"><i class="fa fa-toggle-on"></i>News Category</a>
                            </li>
                            <li>
                                <a href="../news/post/index.php"><i class="fa fa-bell "></i>Posts</a>
                            </li>
                        </ul>
                    </li>
                    <!--  END NEWS   ==========================================================================   -->

                    <!--  BEGIN Departments Doctors   ==========================================================================   -->


                    <li>
                        <a href="#"><i class="fa fa-yelp "></i>Departments Doctors <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../general/department_doctor/index.php"><i class="fa fa-toggle-on"></i>Department Doctor</a>
                            </li>
                            <li>
                                <a href="../general/department/index.php"><i class="fa fa-coffee"></i>Department</a>
                            </li>
                            <li>
                                <a href="../general/doctor/index.php"><i class="fa fa-flash "></i>Doctors</a>
                            </li>
                            <li>
                                <a href="../general/speciality/index.php"><i class="fa fa-key "></i>Specialities</a>
                            </li>
                        </ul>
                    </li>
                    <!--  END Departments Doctors   ==========================================================================   -->
                    <?php
                }
                ?>
                <!--  BEGIN CONTACTS   ==========================================================================   -->
                <li>
                    <a class="active-menu"  href="../contact/index.php"><i class="fa fa-flash "></i>Contacts</a>

                </li>
                <!--  END  CONTACTS    ==========================================================================   -->
                <!--  BEGIN BOOKING   ==========================================================================   -->

                <li>
                    <a  href="../booking/index.php"><i class="fa fa-anchor "></i>Booking</a>
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
                                <a href="../services/service/index.php"><i class="fa fa-desktop "></i>Hospital Services </a>
                            </li>
                            <li>
                                <a href="../services/speciality/index.php"><i class="fa fa-code "></i>ChuyenKhoa List</a>
                            </li>


                        </ul>
                    </li>

                    <!--  END services   ==========================================================================   -->
                    <!--  BEGIN USER   ==========================================================================   -->
                    <li>
                        <a href="../users/index.php"><i class="fa fa-bug "></i>Users</a>
                    </li>

                    <!--  END USER   ==========================================================================   -->
                    <!--  BEGIN MENU   ==========================================================================   -->

                    <li>
                        <a href="../menu/menu.php"><i class="fa fa-sign-in "></i>Menu</a>
                    </li>
                    <!--  END MENU   ==========================================================================   -->
                    <!--  BEGIN MENU   ==========================================================================   -->

                    <li>
                        <a href="../comments/index.php"><i class="fa fa-square-o "></i>Feeling Customer</a>
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
                    <div class="container">
                        <h1 class="page-head-line">Contacts</h1>
                        <hr/>
                        
                        <div class="content-loader">
                            <table cellspacing="0" width="100%" id="contact"
                                   class="table table-striped table-hover table-responsive">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Porn</th>
                                    <th>Mail</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Feedback</th>
                                    <th>Contact with Customer</th>
                                    <th>Booking Date</th>
                                    <th>Accept</th>
                                    <th>delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                require_once '../../../connect/dbconfig.php';

                                $stmt = $db_con->prepare("SELECT * FROM contact ORDER BY contact_date desc, contact_approve asc");
                                $stmt->execute();
                                $count =1;
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                    <tr id='<?php echo $row['contact_id']; ?>' class='view'>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $row['contact_user_title']; ?></td>
                                        <td><?php echo $row['contact_user_content']; ?></td>
                                        <td><?php echo $row['contact_maso_bn']; ?></td>
                                        <td><?php echo $row['contact_user_name']; ?></td>
                                        <td><?php echo $row['contact_ngaysinh']; ?></td>
                                        <td><?php echo $row['contact_user_mail']; ?></td>
                                        <td><?php echo $row['contact_user_phone']; ?></td>
                                        <td><?php echo $row['contact_user_address']; ?></td>
                                        <td><?php echo $row['contact_loaithacmac']; ?></td>
                                        <td>
                                            <?php if($row['contact_lienlac'] = 1)
                                                    {
                                                        echo "Liên lạc với KH";
                                                    }
                                                    else {
                                                        echo "Không liên lạc";
                                                    }
                                            ?>
                                        </td>
                                        
                                        
                                        
                                        <td><?php echo $row['contact_date']; ?></td>
                                        <td align="center">
                                            <a id="<?php echo $row['contact_id']; ?>" class="accept-link" 
                                               title="Click to Approve">
                                                <img class='img_accept<?php echo $row['contact_id']; ?>' <?php if($row['contact_approve']==0){ ?> src="../../assets/img/reject.png" <?php } else { ?> src="../../assets/img/accept.png" <?php }?>  width="40px"/>
                                            </a></td>
                                        <td align="center"><a id="<?php echo $row['contact_id']; ?>" class="delete-link"
                                                              href="#" title="Delete">
                                                <img src="../../assets/img/delete.png" width="40px"/>
                                            </a>
                                            <input id="contact_temp<?php echo $row['contact_id']; ?>" type="text" value="<?php echo $row['contact_approve'] ?>" name="contact_temp" style='display:none;'  readonly="readonly"/></td>
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
<?php include("../../footer.php");  ?>
<!-- /. FOOTER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<!--<script src="../../assets/js/jquery-1.10.2.js"></script>-->
<!-- BOOTSTRAP SCRIPTS -->
<script src="../../assets/js/bootstrap.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="../../assets/js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="../../assets/js/custom.js"></script>
<script src="../../assets/js/jquery-1.12.3.min.js"></script>
<script src="../../assets/js/crud.js" type="text/javascript"></script>
<script type="text/javascript" src="../../assets/js/datatables.min.js"></script>
<script type="text/javascript" src="../../assets/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.1/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.1/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js"></script>

<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
        $('#contact')
            .removeClass('display')
            .addClass('table table-bordered');
        $('#contact').DataTable( {
            "scrollX": true,
            "scrollY": 510,
            "scrollCollapse": true,
            "dom":'<<"row"<"col-sm-4"B><"col-sm-4"l><"col-sm-4"f>>t<"row"<"col-sm-6"i><"col-sm-6"p>>>',
             "buttons": [
                 'excel', 'pdf', 'print'
             ]
        } );
    });
</script>


</body>
</html>
