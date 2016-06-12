<!DOCTYPE html>
<html lang="en">
<head>
  <title>Medic Bạc Liêu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap-social.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.js"></script>
  <script src="../bootstrap/js/function.js"></script>
  <!-- include summernote css/js-->
  <link href="../editorPlugin/summernote.css" rel="stylesheet">
  <script src="../editorPlugin/summernote.js"></script>
</head>
<?php
session_start();
function checkLang(){
  if (isset($_GET['lang'])){
      $_SESSION['lang'] = $_GET['lang'];
      $lang = $_SESSION['lang'];
      return "../languages/$lang.php";
  }
  else if (isset($_SESSION['lang'])){
     $lang = $_SESSION['lang'];
     return "../languages/$lang.php";
  }
  else{
    return "../languages/vi.php";
  } 
}

require(checkLang());
?>
<body>
      <div class="container">
        <div class="col-md-6 col-xs-4">
          <img src="../images/logo/bl-logo-transparentsm.png" width="auto" height="80">
        </div>
        <div class="col-md-6 col-xs-8">
          <h5 class="text-right non-marginTop"><?php echo $main['language']; ?>: <a href="#" id="Vi-lang"><?php echo $main['vi'];?></a> | <a href="#" id="En-lang"><?php echo $main['en'];?></a></h5>
          <form class="navbar-form navbar-right" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Tìm kiếm...">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-success">
                        <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
          </form>
        </div>
      </div>
 
      
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-default navbar-nav">
                <li id="homepage"><a href="homepage.php">TRANG CHỦ</a></li>
                <li class="dropdown" id = "camnghi_kh">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >GIỚI THIỆU <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">GIỚI THIỆU CHUNG</a></li>
                    <li><a href="#">TẦM NHÌN - SỨ MỆNH</a></li>
                    <li><a href="#">VÌ SAO CHỌN THANH VŨ MEDIC BẠC LIỆU</a></li>
                    <li><a href="camnghi_kh.php">CẢM NGHĨ KHÁCH HÀNG</a></li>
                  </ul>
                </li>
                <li class="dropdown" id="chuyenkhoa">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >DỊCH VỤ Y KHOA <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="chuyenkhoa.php">CÁC CHUYÊN KHOA</a></li>
                    <li><a href="banggia.php">BẢNG GIÁ CHUNG</a></li>
                    <li><a href="#">KIỂM TRA SỨC KHỎE TÔNG QUÁT</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >DÀNH CHO KHÁCH HÀNG <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">THANH TOÁN BẢO HIỂM</a></li>
                    <li><a href="#">THẺ KHÁCH HÀNG</a></li>
                    <li><a href="#">BỆNH ÁN ĐIỆN TỬ</a></li>
                    <li><a href="#">HẸN LỊCH KHÁM</a></li>
                    <li><a href="#">HƯỚNG DẪN KHÁCH KHÁM</a></li>
                    <li><a href="#">LỊCH TRỰC BÁC SĨ</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >TIN TỨC - SỰ KIỆN <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">CHƯƠNG TRÌNH ƯU ĐÃI</a></li>
                    <li><a href="#">TIN TỨC - HOẠT ĐỘNG</a></li>
                    <li><a href="#">BẢN TIN SỨC KHỎE</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >LIÊN HỆ <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">DANH BẠ ĐIỆN THOẠI</a></li>
                    <li><a href="#">PHẢN HỒI KHÁCH HÀNG</a></li>
                    <li><a href="#">SƠ ĐỒ 360</a></li>
                    <li><a href="#">SƠ ĐỒ GOOGLE MAP</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>