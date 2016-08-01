<!-- Add start Header-->
<?php require("../header.php");?>
<!-- Add end Header-->
<!-- Add start slider-->
<?php require("../slider.php");?>
<!-- Add end slider-->
<!-- Add start services-->
<?php require("../services.php");?>
<!-- Add end services-->
<?php require("../models/doctors.php");
$id = $_GET['id'];
$detail = mysql_fetch_array(getdoctor_detail($id, $_SESSION['lang']));
?>
<div class="container text-center">    
    <div class="row">
    <br>
        <!-- Left content-->
        <div class="col-md-8">
            <div class="col-md-12">
                <div class="row text-left">
                  <div class="col-md-12">
                    <a class="text-left a-title"><?php echo $detail['name'];?></a>
                  </div>
                </div>
                <br>
                <div class="col-md-12">
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img src="../admin/upload/image_doctor/<?php echo $detail['image'];?>" class="img-responsive">
                            <div class="caption">
                                <a href="datlichhen.php?ck_id=<?php echo $detail['chuyenkhoa_id'];?>&dt_id=<?php echo $detail['doctor_id'];?>" class="btn btn-success" role="button"><?php echo $main['datlich'];?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 text-left">
                        <div class="row form-group">
                            <div class = "col-md-4">
                            <h4 class="text-bold-goldden"><?php echo $main['chuyenkhoa'];?></h4>
                            </div>
                            <div class="col-md-8 text-word-wrap margin-top-10px">
                                <?php echo $detail['chuyenkhoa_name'];?>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class = "col-md-4">
                            <h4 class="text-bold-goldden"><?php echo $main['trinhdo'];?></h4>
                            </div>
                            <div class="col-md-8 text-word-wrap margin-top-10px">
                                <?php echo $detail['speciality_name'];?>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class = "col-md-4">
                            <h4 class="text-bold-goldden"><?php echo $main['chungnhan'];?></h4>
                            </div>
                            <div class="col-md-8 text-word-wrap margin-top-10px">
                                <?php echo $detail['qualification'];?>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class = "col-md-4">
                            <h4 class="text-bold-goldden"><?php echo $main['kinhnghiem'];?></h4>
                            </div>
                            <div class="col-md-8 text-word-wrap margin-top-10px">
                                <?php echo $detail['experience'];?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Right content-->
        <div class="col-md-4">
          <div class="col-md-12">
            <!--<div class="row text-left">-->
            <!--  <div class="col-md-12">-->
            <!--    <a class="text-left a-title"><?php echo $main['tienich'];?></a>-->
            <!--  </div>-->
            <!--</div>-->
            <!--<br>-->
            <!--<div class="row">-->
            <!--  <div class="col-md-12">-->
            <!--    <div class="panel panel-default text-left">-->
            <!--      <a href="#" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['chuongtrinhkhuyenmai'];?></a>-->
            <!--      <a href="tintuc.php" class="list-group-item active-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['tintuc-hoatdong'];?></a>-->
            <!--      <a href="#" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['bantinsuckhoe'];?></a>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
            <!--<br>-->
          <?php require("../right_count_post.php");?>
          <?php require("../right_content.php");?>
          </div>
        </div>
    </div>
</div>
<!-- Add start footer-->
<?php require("../footer.php");?>
<!-- Add end footer-->