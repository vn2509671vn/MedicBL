<?php
    session_start();
    include("../../../connect/config.php");
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
        	    var temp_app = 'booking_approve_temp' + id;
        	    var temp = document.getElementById(temp_app).value;
        	    var cl = ".accept-link .img_accept" + id;
        	    if(temp==0){
                    $(cl).attr("src", "../../assets/img/accept.png");
                    alert("Approved ID:" + id);
        	    }
        	    else{
        	        $(cl).attr("src", "../../assets/img/reject.png");
        	        alert("UnApproved ID:" + id);
        	    }
                 $.ajax({
					url: 'process.php',
					type: 'POST',
					dataType: 'text',
					data: "id=" + id,
					success: function(data){
						document.getElementById(temp_app).value = data;
					}
				});
            });
            $(".sms-doctor-link").click(function()
        	{
        	    var idsms = $(this).attr("id");
        	    var temp_app = 'status_doctor_temp' + idsms;
        	    var temp = document.getElementById(temp_app).value;
        	    var cl = ".sms-doctor-link .img_accept" + idsms;
        	    
        	    //Khai bao cac bien day du lieu cho VNPT
        	    
        	    
        	    var strREQID = "";        	        var strLABELID = "";        	    var strTEMPLATEID = "";        	    var strNUM = "";
        	    var strCONTENT = "Thông báo: ";     var strCONTRACTID = "";             var strCONTRACTTYPEID = "";        	var strSCHEDULETIME = "";
        	    var strISTELCOSUB = "";        	    var strAGENTID = "";        	    var strAPIUSER = "";        	    var strAPIPASS = "";
        	    var strUSERNAME = "";        	    var strURL = "";        	        var strMOBLELIST = "";
        	    
        	    
        	    //Thong bao goi cho bac si
        	    
        	    
        	    var status_doctor_sms = "";        	var doctor_name = "";        	    var customer_phone = "";
        	    var chuyenkhoa = "";        	    var customer_name = "";        	    var booking_date = "";
        	    var code = "";                      var code_desc = "";
        	    var result_code= "";
        	    if(temp==0){
                    $.ajax({
    					url : 'sms_process.php',
                        type : 'get',
                        dataType : 'json',
    					data: "idsms=" + idsms,
                        success : function (result){
    						$.each (result, function (key, item){
                                    strREQID +=  item['strMOBLELIST'];                                    strLABELID +=  item['strLABELID'];
                                    strTEMPLATEID +=  item['strTEMPLATEID'];                              strCONTRACTID +=  item['strCONTRACTID'];
                                    strCONTENT +=  item['strCONTENT'];                                    strREQID +=  item['strREQID'];
                                    strCONTRACTTYPEID +=  item['strCONTRACTTYPEID'];                      strSCHEDULETIME +=  item['strSCHEDULETIME'];
                                    strISTELCOSUB +=  item['strISTELCOSUB'];                              strAGENTID +=  item['strAGENTID'];
                                    strAPIUSER +=  item['strAPIUSER'];                                    strAPIPASS +=  item['strAPIPASS'];
                                    strUSERNAME +=  item['strUSERNAME'];                                  strMOBLELIST +=  item['strMOBLELIST'];
                                    
                                    status_doctor_sms +=  item['status_doctor_sms'];                      doctor_name +=  item['doctor_name'];
                                    customer_phone +=  item['customer_phone'];                            chuyenkhoa +=  item['chuyenkhoa'];
                                    customer_name +=  item['customer_name'];                              booking_date +=  item['booking_date'];
                            });
    					},
    					complete:function()
    					{
                            strCONTENT+=""; 
                            $.ajax({
                                type: "post",
                                url: 'sms.php',
                                dataType:'json',
                                data: {
                                    "RQST":[{
                                        "name": "SEND_SMS_LIST",
                                    }]
                        //             "RQST":[{
                        // 				"name": "SEND_SMS_LIST",
                        // 				"REQID": strREQID,
                        // 				"LABELID": strLABELID,
                        // 				"TEMPLATEID": strTEMPLATEID,
                        // 				"PARAMS":[{
                        // 					"NUM": strNUM,
                        // 					"CONTENT": strCONTENT,
                        // 				}],
                        // 				"CONTRACTID": strCONTRACTID,
                        // 				"CONTRACTTYPEID": strCONTRACTTYPEID,
                        // 				"SCHEDULETIME": strSCHEDULETIME,
                        // 				"MOBILELIST": strMOBLELIST,
                        // 				"ISTELCOSUB": strISTELCOSUB,
                        // 				"AGENTID": strAGENTID,
                        // 				"APIUSER": strAPIUSER,
                        // 				"APIPASS": strAPIPASS,
                        // 				"USERNAME": strUSERNAME,
                    			 //   }]
                    			},
                                success: function(data)
                                {
                                    $.each (data, function (key, item){
                                        code +=  item['ERROR_CODE'];
                                        code_desc +=  item['ERROR_DESC'];
                                    });
                                },
                                complete: function()
                                {
                                    if(code==1){
                                        $.ajax({
                                            url : 'sms_process.php',
                                            type : 'get',
                                            dataType : 'text',
                        					data: "id=" + idsms,
                                            success: function(data){
                                                if(data = 1){
                                                    document.getElementById(temp_app).value=1;
                                                    alert("Da goi sms thanh cong");
                                                    $(cl).attr("src", "../../assets/img/accept.png");
                                                }
                                                else{
                                                    alert("Hien tai chua the doi duoc SMS cho Bac Si");
                                                }
                                            },
                                        });
                                    }
                                    else{
                                        alert(code_desc);
                                    }
                                }, // kết thúc complete của cập nhật trạng thái gởi sms doctor
                            });
                        },
                    });
        	    }
        	    else{
        	        alert("Id is sended!!! Not sent continue");
        	    }
            });
            
            
            
            
            $(".sms-customer-link").click(function()
        	{
        	    var idsms_cus = $(this).attr("id");
        	    var temp_app_cus = 'status_customer_temp' + idsms_cus;
        	    var temp_cus = document.getElementById(temp_app_cus).value;
        	    var cl_cus = ".sms-customer-link .img_accept" + idsms_cus;
        	    
        	    if(temp_cus==0){
                    $.ajax({
    					url : 'sms_process.php',
                        type : 'get',
                        dataType : 'xml',
    					data: "idsms_cus=" + idsms_cus,
                        success : function (result){
    						alert(result);
    						$(result).find('RPLY').each (function (key, val){
                                code +=  $(val).find('ERROR_CODE').text();
                                code_desc +=  $(val).find('ERROR_DESC').text();
                            });
                            alert(code);
    					},
                    });
        	    }
        	    else{
        	        alert("Id is sended!!! Not sent continue");
        	    }
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
                    <a href="../contact/index.php"><i class="fa fa-flash "></i>Contacts</a>

                </li>
                <!--  END  CONTACTS    ==========================================================================   -->
                <!--  BEGIN BOOKING   ==========================================================================   -->

                <li>
                    <a class="active-menu"  href="../booking/index.php"><i class="fa fa-anchor "></i>Booking</a>
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
                        <a href="../menu/index.php"><i class="fa fa-sign-in "></i>Menu</a>
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
                        <h1 class="page-head-line">Booking</h1>
                        <hr/>
                        <div class="content-loader">
                            <table cellspacing="0" width="100%" id="booking"
                                   class="table table-striped table-hover table-responsive">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name Relatives</th>
                                    <th>Name Patient</th>
                                    <th>Call Phone</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Email</th>
                                    <th>Booking Date</th>
                                    <th>ChuyenKhoa</th>
                                    <th>Doctor</th>
                                    <th>SMS Doctor</th>
                                    <th>SMS Customer</th>
                                    <th>Approve</th>
                                    <th>delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                require_once '../../../connect/dbconfig.php';

                                $stmt = $db_con->prepare("SELECT * FROM booking b
                                                            left join chuyenkhoa ck on b.booking_chuyenkhoa_id = ck.chuyenkhoa_id
                                                            left join doctors d on b.booking_doctor_id = d.doctor_id
                                                                ORDER BY booking_approve ASC, booking_id");
                                $stmt->execute();
                                $count =1;
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $row['booking_name_relatives']; ?></td>
                                        <td><?php echo $row['booking_name']; ?></td>
                                        <td><?php echo $row['booking_cellphone']; ?></td>
                                        <td><?php echo $row['booking_gender']; ?></td>
                                        <td><?php echo $row['booking_age']; ?></td>
                                        <td><?php echo $row['booking_email']; ?></td>
                                        <td><?php echo $row['booking_date']; ?></td>
                                        <td><?php echo $row['chuyenkhoa_name']; ?></td>
                                        <td><?php echo $row['doctor_name_vn']; ?></td>
                                        <!--  START
                                            CHECKING SMS DOCTOR
                                        -->
                                        <td align="center">
                                            <?php
                                            if($row['booking_doctor_id'] == null) {
                                                    echo "NOT Doctor";
                                                }
                                                else {
                                                    if($row['booking_status_doctor'] == 0){
                                            ?> 
                                                    <a id="<?php echo $row['booking_id']; ?>" class="sms-doctor-link" href="#" title="Click to Send SMS Doctor">
                                                        <img class='img_accept<?php echo $row['booking_id']; ?>' src="../../assets/img/sms.png" width="40px"/>
                                                    </a>
                                                    <input id="status_doctor_temp<?php echo $row['booking_id']; ?>" type="text" value="<?php echo $row['booking_status_doctor']; ?>" name="status_doctor_temp" style='display:none;'  readonly="readonly"/>
                                                    <?php    
                                                        }
                                                        else if($row['booking_status_doctor'] == 1){
                                                    ?>
                                                    <a id="<?php echo $row['booking_id']; ?>" title="Sended">
                                                       <img src="../../assets/img/accept.png" width="40px"/>
                                                    </a>
                                                    <?php
                                                        }
                                                
                                                    }
                                                    ?>
                                        </td>
                                        <!--  END
                                            CHECKING SMS DOCTOR
                                        -->
                                        <!--  START
                                            CHECKING SMS CUSTOMER
                                        -->
                                        <td align="center">
                                            <?php
                                                    if($row['booking_status_customer'] == 0){
                                            ?> 
                                                    <a id="<?php echo $row['booking_id']; ?>" class="sms-customer-link" href="#" title="Click to Send SMS Doctor">
                                                        <img class='img_accept<?php echo $row['booking_id']; ?>' src="../../assets/img/sms.png" width="40px"/>
                                                    </a>
                                                    <input id="status_customer_temp<?php echo $row['booking_id']; ?>" type="text" value="<?php echo $row['booking_status_customer']; ?>" name="status_customer_temp" style='display:none;'  readonly="readonly"/>
                                                    <?php    
                                                        }
                                                        else if($row['booking_status_customer'] == 1){
                                                    ?>
                                                    <a id="<?php echo $row['booking_id']; ?>" title="Sended">
                                                       <img src="../../assets/img/accept.png" width="40px"/>
                                                    </a>
                                                    <?php
                                                        }
                                                    ?>
                                        </td>
                                        <!--  END
                                            CHECKING SMS CUSTOMER
                                        -->
                                        <!--  START
                                            APPROVE BOOKING
                                        -->
                                        <td align="center">
                                            <a id="<?php echo $row['booking_id']; ?>" class="accept-link" 
                                               title="Click to Approve">
                                                <img class='img_accept<?php echo $row['booking_id']; ?>' <?php if($row['booking_approve']==0){ ?> src="../../assets/img/reject.png" <?php } else { ?> src="../../assets/img/accept.png" <?php }?>  width="40px"/>
                                            </a>
                                            <input id="booking_approve_temp<?php echo $row['booking_id']; ?>" type="text" value="<?php echo $row['booking_approve']; ?>" name="booking_approve_temp"  style='display:none;'  readonly="readonly" />
                                    
                                        </td>
                                        <!--  END
                                            APPROVE BOOKING
                                        -->
                                        <td align="center"><a id="<?php echo $row['booking_id']; ?>" class="delete-link"
                                                              href="#" title="Delete">
                                                <img src="../../assets/img/delete.png" width="40px"/>
                                            </a>
                                        </td>
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

<script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script> <!-- Them vao ngay 0809 -->
<script src="../../assets/js/custom.js"></script>
<script src="../../assets/js/jquery-1.12.3.min.js"></script>
<script src="../../assets/js/crud.js" type="text/javascript"></script>
<script type="text/javascript" src="../../assets/js/datatables.min.js"></script>
<script type="text/javascript" src="../../assets/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.1/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="../../assets/js/pdfmake.min.js"></script>
<script src="../../assets/js/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.1/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js"></script>


<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
     $('#booking')
            .removeClass('display')
            .addClass('table table-bordered');
        $('#booking').DataTable( {
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
