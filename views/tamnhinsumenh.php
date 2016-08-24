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
<?php
$hosInfo = mysql_fetch_array(gettamnhinsumenh($_SESSION['lang']));
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
            <a class="text-left a-title"><?php echo $main['tamnhinsumenh'];?></a>
          </div>
        </div>
        <br>
        <div class="row text-left">
          <div class="col-md-12">
            <h3 class="title color-golden"><?php echo $hosInfo['title']; ?></h3>
            <p class="text-muted"><span class="glyphicon glyphicon-calendar"></span> <?php echo date_format(date_create($hosInfo['post_date']),"d/m/Y H:i:s"); ?></p>
            <?php echo $hosInfo['content']; ?>
          </div>
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
              <a href="gioithieu.php" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['gioithieuchung']; ?></a>
              <a href="tamnhinsumenh.php" class="list-group-item active-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['tamnhinsumenh']; ?></a>
              <a href="visaochontv.php" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['visaochon']; ?></a>
              <a href="camnghi_kh.php" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['camnghi']; ?></a>
            </div>
          </div>
        </div>
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
    selectorMenu("id2");
</script>
<!-- Add end script active menu-->