<!-- Add start model-->
<?php require("../models/right_content.php");
$chuyenkhoa_muinhon = getchuyenkhoa_muinhon($_SESSION['lang']);
?>
<!-- Add end model-->
    <!-- Right content-->
    <!--<div class="col-sm-4">-->
      <!--<div class="row text-left">-->
      <!--  <div class="col-sm-12">-->
      <!--    <a class="text-left a-title"><?php echo $main['tienich'];?></a>-->
      <!--  </div>-->
      <!--</div>-->
      <!--<br>-->
      <br>
        <div class="row">
            <div class="col-md-12 col-sd-12 col-xs-12">
              <a href="bantinsuckhoe.php"><img src="../images/tailieu/healthnews.jpg" width=100% class="img-responsive"></a>
            </div>
        </div>
      <br>
      <div class="row">
          <div class="col-md-12">
            <a href="#"><img src="http://placehold.it/1280X720" class="img-responsive"></a>
          </div>
      </div>
      <br>
      <div class="row">
          <div class="col-md-12">
            <a href="#"><img src="http://placehold.it/1280X720" class="img-responsive"></a>
          </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="row text-left margin-bottom-10px">
            <div class="col-md-12 col-sd-12 col-xs-12">
              <a class="text-left a-title"><?php echo $main['chuyenkhoamuinhon'];?></a>
            </div>
          </div>
          <div class="panel panel-default text-left">
            <?php while($list_chuyenkhoa_muinhon = mysql_fetch_assoc($chuyenkhoa_muinhon)): ?>
              <a href="#" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $list_chuyenkhoa_muinhon['name']; ?></a>
            <?php endwhile;?>
            </div>
        </div>
      </div>
      <br>
      <div class="row">
          <div class="col-md-12">
            <iframe width="100%" height="auto" src="../_html5/Project1.html"></iframe>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12">
            <iframe width="100%" height="auto" src="https://www.youtube.com/embed/KgMt0dtr4Vc" frameborder="0" allowfullscreen></iframe>
          </div>
      </div>
    <!--</div>-->