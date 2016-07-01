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
$chuyenkhoa = getchuyenkhoa($_SESSION['lang']);
?>
<!-- Add end model-->

<div class="container text-center">    
  <div class="row">
    <br>
    <!-- Left content-->
    <div class="col-sm-8">
      <div class="col-sm-12">
        <div class="row text-left">
          <div class="col-sm-12">
            <a class="text-left a-title"><?php echo $main['timbacsi'];?></a>
          </div>
        </div>
        <br>
        <div class="row text-left">
          <div class="col-md-12">
              <div class="col-md-5 padding-left-0 margin-mid-5">
                <input type="text" class="form-control" id="doctor_name" placeholder="<?php echo $main['nhaptenbacsi'];?>" size="30">
              </div>
              <div class="col-md-5 padding-left-0 margin-mid-5">
                <select class="form-control" id="chuyenkhoa_id">
                    <option value="all"><?php echo $main['all-doctor'];?></option>
                    <?php while($list_chuyenkhoa = mysql_fetch_array($chuyenkhoa)):?>
                    <option value="<?php echo $list_chuyenkhoa['chuyenkhoa_id'];?>"><?php echo $list_chuyenkhoa['name'];?></option>
                    <?php endwhile;?>
                </select>
              </div>
              <button class="btn btn-default golden-background margin-mid-5" id="timkiemSubmit"><?php echo $main['timkiemSubmit'];?></button>
            
          </div>
          <div class="col-md-12 margin-mid-5 padding-left-0" id="doctor-grid">
            <div class="col-md-12 margin-mid-5 tex-center" id="doctor-grid-load">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Right content-->
    <div class="col-sm-4">
      <div class="col-sm-12">
        <div class="row text-left">
          <div class="col-sm-12">
            <a class="text-left a-title"><?php echo $main['tienich'];?></a>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default text-left">
              <a href="timbacsi.php" class="list-group-item active-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['timbacsi'];?></a>
              <a href="datlichhen.php" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['datlichhen'];?></a>
              <a href="#" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['benhandientu'];?></a>
              <a href="#" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['timphong'];?></a>
            </div>
          </div>
        </div>
      <?php require("../right_content.php");?>
      </div>
  </div>
</div>
<!-- Add start footer-->
<?php require("../footer.php");?>
<!-- Add end footer-->

<!-- Add start script active menu-->
<script type="text/javascript">
    // selectorMenu("gioithieu");
</script>
<script type="text/javascript">
function pagination(page){
    $('#doctor-grid-load').html("<img src='../admin/upload/image_doctor/loading.gif'/>").fadeIn('fast');
    $.ajax ({
        type: "POST",
        url: "../models/ajax_pagination_doctor.php",
        data: "page="+page,
        success: function(data_page) { 
            $('#doctor-grid-load').fadeOut('fast');
            $("#doctor-grid").html(data_page);  
        }
    });
}

$(document).ready(function(){
  pagination(1);  
  $("nav[role='page'] > ul li").click(function(){
    var page = $(this).attr('page');
    pagination(page);
  });
  $('#timkiemSubmit').click(function(){
    var txt = $('#doctor_name').val();
    var chuyenkhoa_id = $('#chuyenkhoa_id').val();
    $('#doctor-grid-load').html("<img src='../admin/upload/image_doctor/loading.gif'/>").fadeIn('fast');
    $.ajax({
      url:"../models/ajax_search_doctor.php",  
      method:"post",  
      data:{search:txt,chuyenkhoa_id:chuyenkhoa_id},  
      dataType:"text",  
      success:function(data)  
      {  
        $('#doctor-grid-load').fadeOut('fast');
        $('#doctor-grid').html(data);
      }  
    });
      $('#doctor-grid').addClass('padding-left-0');
      
  });
  
 });  
 </script> 
<!-- Add end script active menu-->