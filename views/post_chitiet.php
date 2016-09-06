<!-- Add start Header-->
<?php require("../header.php");?>
<!-- Add end Header-->
<!-- Add start slider-->
<?php require("../slider.php");?>
<!-- Add end slider-->
<!-- Add start services-->
<?php require("../services.php");?>
<!-- Add end services-->
<?php
$id = $_GET['id'];
$cat_id = $_GET['cat_id'];
addView($id);
$detail = mysql_fetch_array(getchitiet_byID($id, $_SESSION['lang']));
$listlienquan = getcactinlienquan($_SESSION['lang'], $detail['cat_id'], $id);
?>
<div class="container text-center">    
    <div class="row">
    <br>
        <!-- Left content-->
        <div class="col-md-8">
            <div class="col-md-12">
                <div class="row text-left">
                  <div class="col-md-12 padding-left-0">
                    <a class="text-left a-title"><?php echo $main['tintuc'];?></a>
                  </div>
                </div>
                <br>
                <div class="col-md-12 text-left">
                    <h3 class ="text-left uppercase"><?php echo $detail['title'];?></h3>
                    <p class="text-muted"><span class="glyphicon glyphicon-calendar"></span> <?php echo $detail['post_date']; ?></p>
                    <?php echo $detail['content'];?>
                </div>
                <!-- Add start facebook button -->
                <div class="col-md-12 text-left margin-top-10px">
                  <div class="addthis_native_toolbox"></div>
                </div>
                <!-- Add end facebook button -->
            </div>
            
            <div class="col-md-12 margin-top-40px">
                <div class="row text-left">
                  <div class="col-md-12">
                    <a class="text-left a-title"><?php echo $main['cacbaivietlienquan'];?></a>
                  </div>
                </div>
                <br>
                <div class="col-md-12 text-left">
                    <?php while($dslienquan = mysql_fetch_array($listlienquan)):?>
                      <div class="col-md-4 col-xs-12">
                        <div class="thumbnail">
                          <img src="../admin/upload/tintuc/<?php echo $dslienquan['post_image']?>" alt="..." class="height-157">
                          <div class="caption">
                            <a href="post_chitiet.php?cat_id=<?php echo $cat_id;?>&id=<?php echo $dslienquan['post_id'];?>" class="text-capitalize" ><?php echo $dslienquan['title']?></a>
                            <p class="text-muted"><span class="glyphicon glyphicon-calendar"></span> <?php echo $dslienquan['post_date']?></p>
                          </div>
                        </div>
                      </div>
                    <?php endwhile;?>
                </div>
            </div>
        </div>
        
        <!-- Right content-->
        <div class="col-md-4">
          <div class="col-md-12">
            <div class="row text-left">
              <div class="col-md-12">
                <a class="text-left a-title"><?php echo $main['tienich'];?></a>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-default text-left">
                  <a href="chuongtrinhkhuyenmai.php" class="list-group-item <?php if($cat_id==3) echo " active-item";?>"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['chuongtrinhkhuyenmai'];?></a>
                  <a href="tintuc.php" class="list-group-item <?php if($cat_id==1) echo " active-item";?>"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['tintuc-hoatdong'];?></a>
                  <a href="bantinsuckhoe.php" class="list-group-item <?php if($cat_id==2) echo " active-item";?>"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['bantinsuckhoe'];?></a>
                </div>
              </div>
            </div>
            <br>
          <?php require("../right_count_post.php");?>
          <?php require("../right_content.php");?>
          </div>
        </div>
    </div>
</div>
<!-- Add start footer-->
<?php require("../footer.php");?>
<!-- Add end footer-->

<!-- Add start script active menu-->
<script type="text/javascript">
    var menu = <?php echo $_GET['cat_id'];?>;
    if(menu == "13"){
      selectorMenu("id4");
    }
    else {
      selectorMenu("id5");
    }
</script>
<!-- Add end script active menu