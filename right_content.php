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
      <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3937.5422161982165!2d105.71858151522143!3d9.28513048748028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a109637bdecd2b%3A0x8efb538ee8adb88e!2zQuG7h25oIFZp4buHbiDEkGEgS2hvYSBUaGFuaCBWxak!5e0!3m2!1svi!2s!4v1464248210435" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    <!--</div>-->