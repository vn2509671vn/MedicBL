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
                    <a class="text-left a-title"><?php echo $main['doingubacsi'];?></a>
                  </div>
                </div>
                <br>
                <div class="col-md-12">
                    <div class="col-md-4 padding-right-0 padding-left-0">
                        <div class="thumbnail">
                            <a href="datlichhen.php?ck_id=<?php echo $detail['chuyenkhoa_id'];?>&dt_id=<?php echo $detail['doctor_id'];?>"><img src="../admin/upload/image_doctor/<?php echo $detail['image'];?>" class="img-responsive"></a>
                            <div class="caption">
                                <a href="datlichhen.php?ck_id=<?php echo $detail['chuyenkhoa_id'];?>&dt_id=<?php echo $detail['doctor_id'];?>" class="btn btn-success" role="button"><?php echo $main['datlich'];?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 text-left padding-right-0">
                        <div class="row form-group">
                            <div class = "col-md-4">
                            <h5 class="text-bold-goldden"><?php echo $main['hoten'];?></h5>
                            </div>
                            <div class="col-md-8 text-word-wrap margin-top-10px">
                                <?php echo $detail['name'];?>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class = "col-md-4">
                            <h5 class="text-bold-goldden"><?php echo $main['chuyenkhoa'];?></h5>
                            </div>
                            <div class="col-md-8 text-word-wrap margin-top-10px">
                                <?php echo $detail['chuyenkhoa_name'];?>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class = "col-md-4">
                            <h5 class="text-bold-goldden"><?php echo $main['trinhdo'];?></h5>
                            </div>
                            <div class="col-md-8 text-word-wrap margin-top-10px">
                                <?php echo $detail['speciality_name'];?>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class = "col-md-4">
                            <h5 class="text-bold-goldden"><?php echo $main['chungnhan'];?></h5>
                            </div>
                            <div class="col-md-8 text-word-wrap margin-top-10px">
                                <?php echo $detail['qualification'];?>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class = "col-md-4">
                            <h5 class="text-bold-goldden"><?php echo $main['kinhnghiem'];?></h5>
                            </div>
                            <div class="col-md-8 text-word-wrap margin-top-10px">
                                <?php echo $detail['experience'];?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Thumbnail slider -->
            <div class="col-md-12">
                <div class="carousel slide row" data-ride="carousel" data-type="multi" data-interval="2000" id="fruitscarousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-md-3"><a href="#"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
                        </div>
                        <div class="item">
                            <div class="col-md-3"><a href="#"><img src="http://placehold.it/300/e91e63/000000" class="img-responsive"></a></div>
                        </div>
                        <div class="item">
                            <div class="col-md-3"><a href="#"><img src="http://placehold.it/300/9c27b0/000000" class="img-responsive"></a></div>
                        </div>
                        <div class="item">
                            <div class="col-md-3"><a href="#"><img src="http://placehold.it/300/673ab7/000000" class="img-responsive"></a></div>
                        </div>
                        <div class="item">
                            <div class="col-md-3"><a href="#"><img src="http://placehold.it/300/4caf50/000000" class="img-responsive"></a></div>
                        </div>
                        <div class="item">
                            <div class="col-md-3"><a href="#"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive"></a></div>
                        </div>
                    </div>
                
                    <a class="left carousel-control" href="#fruitscarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                    <a class="right carousel-control" href="#fruitscarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a> 
                </div>
            </div>
            
        </div>
        
        <!-- Right content-->
        <div class="col-md-4">
          <div class="col-md-12">
          <?php require("../right_count_post.php");?>
          <?php require("../right_content.php");?>
          </div>
        </div>
    </div>
</div>
<!-- Add start footer-->
<?php require("../footer.php");?>
<!-- Add end footer-->