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
$services = getservices($_SESSION['lang']);
?>
<!-- Add end model-->
<div class="container text-center">    
  <div class="row">
    <br>
    <!-- Left content-->
    <div class="col-md-8">
      <div class="col-md-12">
        <div class="row text-left">
          <div class="col-md-12 padding-left-0">
            <a class="text-left a-title"><?php echo $main['cacchuyenkhoa']; ?></a>
          </div>
        </div>
        <br>
        <div class="row text-left">
          <!-- Test start -->
            <div class="col-md-12">
              <div class="panel-group" id="accordion">
                <?php while($service = mysql_fetch_assoc($services)):?>
                <div class="panel panel-default">
                  <div class="panel-heading cursor" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $service['services_id'];?>">
                    <h4 class="panel-title">
                      <?php $chuyenkhoa = getchuyenkhoa_byID($service['services_id'], $_SESSION['lang']);
                            $num_rows_chuyenkhoa = mysql_num_rows($chuyenkhoa);
                      ?>
                      <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $service['services_id'];?>">
                        <?php echo $service['name'];?> <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
                      </a>
                    </h4>
                  </div>
                  <div id="<?php echo $service['services_id'];?>" class="panel-collapse collapse">
                    <div class="panel-body">
                      <?php 
                            $num_cols = $num_rows_chuyenkhoa/8; // 8 items/column
                            $current_row = 0;
                            while($list_chuyenkhoa = mysql_fetch_assoc($chuyenkhoa)):
                      ?>
                      <?php if($current_row == 0 || $current_row == 8 || $current_row == 16 || $current_row == 24):?>
                      <div class="col-md-6">
                        <ul id="danhmucchuyenkhoa">
                          <?php $flag = TRUE;?>
                      <?php endif;?>
                          <li><a href="chuyenkhoa_chitiet.php?id=<?php echo $list_chuyenkhoa['chuyenkhoa_id'];?>"><?php echo $list_chuyenkhoa['name'];?></a></li>
                      <?php $current_row += 1;?>
                      <?php if($current_row == 7 || $current_row == 15 || $current_row == 23 || $current_row == 31):?>
                        </ul>
                      </div>
                      <?php $flag = FALSE;?>
                      <?php endif;?>
                      <?php if($flag==FALSE): ?>
                        </ul>
                      </div>
                      <?php endif;?>
                      <?php endwhile;?>
                      
                    </div>
                  </div>
                </div>
                </div>
                <?php endwhile;?>
              </div>
            </div>
          <!-- Test end -->
        </div>
      </div>
    </div>

    <!-- Add start right content-->
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
              <a href="chuyenkhoa.php" class="list-group-item active-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['cacchuyenkhoa'];?></a>
              <a href="banggia.php" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['bangiadichvu'];?></a>
              <a href="kiemtrasuckhoe.php" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['kiemtrasuckhoe'];?></a>
            </div>
          </div>
        </div>
      <?php require("../right_content.php");?>
      </div>
    </div>
    <!-- Add end right content-->
    </div>
  </div>
</div>
<!-- Add start footer-->
<?php require("../footer.php");?>
<!-- Add end footer-->

<!-- Add start script active menu-->
<script type="text/javascript">
    selectorMenu("id3");
</script>
<!-- Add end script active menu-->