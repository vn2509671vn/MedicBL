<!-- Add start Header-->
<?php require("../header.php");?>
<!-- Add end Header-->
<!-- Add start slider-->
<?php require("../slider.php");?>
<!-- Add end slider-->
<!-- Add start services-->
<?php require("../services.php");?>
<!-- Add end services-->
<div class="container text-center">    
  <div class="row">
    <br>
    <!-- Left content-->
    <div class="col-md-8">
      <div class="col-md-12">
        <div class="row text-left">
          <div class="col-md-12">
            <a class="text-left a-title"><?php echo $main['danhbadienthoai']; ?></a>
          </div>
        </div>
        <br>
        <embed src="../document/lesson2.pdf" height="950px" width="100%" id="banggia"></embed>
      </div>
    </div>

    <!-- Right content-->
    <div class="col-md-4">
      <div class="row text-left">
        <div class="col-md-12">
          <a class="text-left a-title"><?php echo $main['tienich'];?></a>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default text-left">
            <a href="danhbadienthoai.php" class="list-group-item active-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['danhbadienthoai'];?></a>
            <a href="phanhoi_kh.php" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['phanhoikhachang'];?></a>
            <a href="360site.php" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['sodo360'];?></a>
            <a href="taitailieu.php" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['taitailieu'];?></a>
          </div>
        </div>
      </div>
    <?php require("../right_content.php");?>
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