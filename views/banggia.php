<!-- Add start Header-->
<?php require("../header.php");?>
<!-- Add end Header-->

<div class="container text-center">    
  <div class="row">
    <br>
    <!-- Left content-->
    <div class="col-sm-8">
      <div class="col-sm-12">
        <div class="row text-left">
          <div class="col-sm-12">
            <a class="text-left a-title"><?php echo $main['bangiadichvu']; ?></a>
          </div>
        </div>
        <br>
        <embed src="../document/lesson2.pdf" height="950px" width="100%" id="banggia"></embed>
      </div>
    </div>

    <!-- Right content-->
    <div class="col-sm-4">
      <div class="row text-left">
        <div class="col-sm-12">
          <a class="text-left a-title"><?php echo $main['tienich'];?></a>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> CÁC CHUYÊN KHOA</a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> BẢNG GIÁ CHUNG</a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> KIỂM TRA SỨC KHỎE TỔNG QUÁT</a>
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
    selectorMenu("chuyenkhoa");
</script>
<!-- Add end script active menu-->