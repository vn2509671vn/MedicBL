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
          <div class="col-md-12 padding-left-0">
            <a class="text-left a-title"><?php echo $main['huongdankhambenh'];?></a>
          </div>
        </div>
        <br>
        <div id = "list_post" class="col-md-12">
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
              <a href="thanhtoanbaohiem.php" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['thanhtoanbaohiem']; ?></a>
              <a href="thekhachhang.php" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['thekhachhang']; ?></a>
              <a href="banhandientu.php" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['banhandientu']; ?></a>
              <a href="datlichhen.php" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['datlichhen']; ?></a>
              <a href="huongdankhambenh.php" class="list-group-item active-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['huongdankhambenh']; ?></a>
              <a href="lichtrucbacsi.php" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['lichtrucbacsi']; ?></a>
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
    selectorMenu("id4");
</script>
<script type="text/javascript">
function pagination(page){
    $.ajax ({
        type: "POST",
        url: "../models/ajax_huongdankhachhang.php",
        data: "page="+page,
        success: function(data_page) { 
            $("#list_post").html(data_page);
        }
    });
}

$(document).ready(function(){
  pagination(1);  
  $("nav[role='page'] > ul li").click(function(){
    var page = $(this).attr('page');
    pagination(page);
  });
});  
</script> 
<!-- Add end script active menu-->