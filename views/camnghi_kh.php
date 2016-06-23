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
    <div class="col-sm-8">
      <div class="col-sm-12">
        <div class="row text-left">
          <div class="col-sm-12">
            <a class="text-left a-title"><?php echo $main['camnghi']; ?></a>
          </div>
        </div>
        <br>
        <div class="row text-left">
          <div class="col-sm-12">
            <h3 class="title">How to Fight Fraud with Artificial Intelligence and Intelligent Analytics</h3>
            <p class="text-muted"><span class="glyphicon glyphicon-calendar"></span> July 23, 2014 @ 1:30 PM</p>
            <p>Could artificial intelligence have been used to prevent the high-profile Target breach? The concept is not so far-fetched. Organizations such as Mastercard and RBS WorldPay have long relied on artificial intelligence to detect fraudulent transaction patterns and prevent card.</p>
            <p class="text-muted">Presented by <a href="#">ThangTGM</a></p>
          </div>
        </div>
        <hr class="divider">
        <div class="row text-left">
          <div class="col-sm-12">
            <h3 class="title">Big Payment Data: Leveraging Transactional Data to Ensure an Enterprise Approach to Risk Management</h3>
            <p class="text-muted"><span class="glyphicon glyphicon-calendar"></span> July 23, 2014 @ 1:30 PM</p>
            <p>60% of organizations were exposed to actual or attempted fraud loss last year. As fraud and risk increases year over year, the amount of data being collected increases as well.</p>
            <p class="text-muted">Presented by <a href="#">ThangTGM</a></p>
          </div>
        </div>
        <hr class="divider">
      </div>
      <div class="col-sm-12">
        <div class="row text-left">
          <div class="col-sm-12">
            <a class="text-left a-title"><?php echo $main['guicamnghi']; ?></a>
          </div>
        </div>
        <br>
        <form class="form-horizontal" role="form" method="post" action="#">
        	<div class="form-group">
        		<label for="name" class="col-sm-2 control-label">Họ Tên:</label>
        		<div class="col-sm-10">
        			<input type="text" class="form-control" id="name" name="name" placeholder="Vui lòng nhập họ tên" value="">
        			<?php echo "<p class='text-danger'>$errName</p>";?>
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="message" class="col-sm-2 control-label">Nội dung:</label>
        		<div class="col-sm-10">
        			<textarea class="form-control" rows="4" name="message"></textarea>
        			<?php echo "<p class='text-danger'>$errMessage</p>";?>
        		</div>
        	</div>
        	<div class="form-group">
        		<div class="col-sm-10 col-sm-offset-2">
        			<input id="submit" name="submit" type="submit" value="Gửi" class="btn btn-success">
        		</div>
        	</div>
        	<div class="form-group">
        		<div class="col-sm-10 col-sm-offset-2">
        			<?php echo $result; ?>	
        		</div>
        	</div>
        </form>
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
            <a href="gioithieu.php" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> GIỚI THIỆU CHUNG</a>
            <a href="tamnhinsumenh.php" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> TẦM NHÌN - SỨ MỆNH</a>
            <a href="visaochontv.php" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> VÌ SAO CHỌN THANH VŨ MEDIC BẠC LIÊU</a>
            <a href="camnghi_kh.php" class="list-group-item active-item"><span class="glyphicon glyphicon-menu-right"></span> CẢM NGHĨ KHÁCH HÀNG</a>
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
    selectorMenu("gioithieu");
</script>
<!-- Add end script active menu-->