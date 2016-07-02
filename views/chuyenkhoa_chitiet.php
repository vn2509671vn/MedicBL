<!-- Add start Header-->
<?php require("../header.php");?>
<!-- Add end Header-->
<!-- Add start slider-->
<?php require("../slider.php");?>
<!-- Add end slider-->
<!-- Add start services-->
<?php require("../services.php");?>
<!-- Add end services-->
<!-- Add start model-->
<?php require("../models/chuyenkhoa.php");
require("../models/doctors.php");
$infoDetail = mysql_fetch_array(getchuyenkhoa_detail($_GET['id'] ,$_SESSION['lang']));
$listDoctors = getdotors_bychuyenkhoaID($_GET['id'], $_SESSION['lang']);
$listChuyenkhoa = getchuyenkhoa_byID($infoDetail['services_id'], $_SESSION['lang']);
?>
<!-- Add end model-->
<div class="container text-center">    
  <div class="row">
    <br>
    <!-- Left content-->
    <div class="col-md-8">
      <div class="col-sm-12">
        <div class="row text-left">
          <div class="col-sm-12">
            <a class="text-left a-title"><?php echo $infoDetail['name']; ?></a>
          </div>
        </div>
        <br>
        <div class="row text-left">
          <!-- Test start -->
            <div class="col-md-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home"><?php echo $main['gioithieu'];?></a></li>
                    <li><a data-toggle="tab" href="#menu1"><?php echo $main['doingubacsi'];?></a></li>
                </ul>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                      <h3>Giới thiệu</h3>
                      <?php echo $infoDetail['descript']; ?>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                      <!--<h3>Đội ngũ bác sĩ</h3>-->
                      <div class="row margin-mid-5">
                        <?php while($doctor_list = mysql_fetch_array($listDoctors)):?>
                          <div class="col-sm-6 col-md-4 col-xs-12">
                            <div class="thumbnail">
                              <img src="../admin/upload/image_doctor/<?php echo $doctor_list['image']?>" alt="..." class="height-157">
                              <div class="caption">
                                <h3><?php echo $doctor_list['name']?></h3>
                                <p><a href="#" class="btn btn-primary" role="button"><?php echo $main['chitiet'];?></a></p>
                              </div>
                            </div>
                          </div>
                        <?php endwhile;?>
                       </div>
                    </div>
                </div>
            </div>
          <!-- Test end -->
        </div>
        </div>
      </div>

    <!-- Add start right content-->
    <div class="col-sm-4">
      <div class="col-sm-12">
        <div class="row text-left">
          <div class="col-sm-12">
            <a class="text-left a-title"><?php echo $main['tienich'];?></a>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default text-left">
              <?php while($chuyenkhoa_list = mysql_fetch_array($listChuyenkhoa)):?>
              <a href="chuyenkhoa_chitiet.php?id=<?php echo $chuyenkhoa_list['chuyenkhoa_id'];?>" class="list-group-item <?php echo ($chuyenkhoa_list['chuyenkhoa_id'] == $_GET['id'])?'active-item':'';?>"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $chuyenkhoa_list['name'];?></a>
              <?php endwhile;?>
            </div>
          </div>
        </div>
      <?php require("../right_content.php");?>
      </div>
    </div>
    <!-- Add end right content-->
  </div>
</div>
<!-- Add start footer-->
<?php require("../footer.php");?>
<!-- Add end footer-->

<!-- Add start script active menu-->
<script type="text/javascript">
    selectorMenu("chuyenkhoa");
</script>
<!-- Add end script active menu-->