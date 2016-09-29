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
            <a class="text-left a-title"><?php echo $main['benhandientu']; ?></a>
          </div>
        </div>
        <br>
        <!-- Main Content -->
        <div class="form-horizontal text-left">
          <div class="form-title text-center">
            <h3><?php echo $main['tracuuketqua'];?></h3>
            <p class="color-golden"><?php echo $main['tracuuketqua-warning'];?></p>
          </div>
          <div class="form-group">
        		<label class="col-md-4 control-label"><?php echo $main['mabenhnhan'];?>:</label>
        		<div class="col-md-4">
        			<div class="input-group">
        				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        				<input id="sid" class="form-control" type="text" placeholder="Mã bệnh nhân (SID)"/>
        			</div>
        		</div>
        	</div>
        	<div class="form-group">
        		<label class="col-md-4 control-label" for="customer-phone"><?php echo $main['ngaylaymau'];?>:</label>
        		<div class="col-md-4">
        			<div class="input-group">
        				<div class='input-group date'>
        				  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </span>
                  <input class="col-md-3 form-control datepicker" id="datepicker" type="text" placeholder="Ngày lấy mẫu"/>
                </div>
        			</div>
        		</div>
        	</div>
        	<div class="form-group">
        		<label class="col-md-4 control-label" for="customer-phone"><?php echo $main['maxacnhan'];?>:</label>
        		<div class="col-md-4">
        			<div class="input-group">
        				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        				<div class="col-md-10 col-xs-6 padding-left-0 padding-right-0">
                  <input type="text" name="txtCaptcha" class="form-control" id="txtCaptcha" placeholder="Nhập code"/>
                </div>
                <div class="col-md-2 col-xs-6">
                  <img src="../models/random_image.php" />
                </div>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-12 col-xs-12 text-center margin-mid-5">
           <button type="button" class="btn btn-success" id="xemketqua"><?php echo $main['xemketqua'];?></button>
          </div>
        </div>
        <div class="col-md-12 text-left padding-left-0">
					<p><strong><?php echo $main['tracuuketqua-mota-1'];?></strong>
  				<br>- Kết quả trên website chỉ mang giá trị tham khảo, quý khách vui lòng liên hệ với MedicBacLieu để có kết quả chính thức.
  				<br>- Kết quả trên website không bao gồm:
  				<br>✓ Tất cả các kết quả xét nghiệm cho khách hàng nội trú và khám sức khỏe.
  				<br>✓ Các kết quả xét nghiệm vi sinh, tế bào gốc, công nghệ GEN.
  				<br>✓ Các kết quả được trả sau 23h00 ngày hôm trước.
					</p>
        </div>
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
          <!-- Main right content -->
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
    selectorMenu("id4");
    function validateForm(){
      var sid = $('#sid').val();
      var datetime = $('#datepicker').val();
      var code = $('#txtCaptcha').val();
      var err = false;

      if (sid == "") {
        $('#sid').addClass("focus_error");
        err = true;
      }
      else {
        $('#sid').removeClass("focus_error");
      }
      
      if (datetime == "") {
        $('#datepicker').addClass("focus_error");
        err = true;
      }
      else {
        $('#datepicker').removeClass("focus_error");
      }
      
      if (code == "") {
        $('#txtCaptcha').addClass("focus_error");
        err = true;
      }
      else {
        $('#txtCaptcha').removeClass("focus_error");
      }
      
      return err;
    }
    $(document).ready(function(){
      $('#datepicker').datepicker({
        autoclose: true,
        format: 'dd-mm-yyyy',
      }).on('changeDate', function(e){
          $(this).datepicker('hide');
      });
      
      $('#xemketqua').click(function(){
        var err = validateForm();
        var sid = $('#sid').val();
        var datetime = $('#datepicker').val();
        var code = $('#txtCaptcha').val();
        var fullSID = "821502." + sid;
        if (err == false) {
          $.ajax({
            url:"../models/ajax_benhandientu.php", 
            method:"post",  
            data:{
              sid:fullSID,
              datetime:datetime,
              code: code
            },  
            dataType:"text",  
            success:function(data)  
            {  
              if(data == 0){
                location.href = "benhanchitiet.php?mabenhnhan="+fullSID+"&ngaychidinh="+datetime;
              }
              else if (data == 1){
                alert("THÔNG TIN BỆNH NHÂN CHƯA CHÍNH XÁC!");
              }
              else {
                alert("MÃ XÁC NHẬN KHÔNG HỢP LỆ!");
              }
            }  
          });
        }
        else {
          alert("VUI LÒNG ĐIỀN ĐẦY ĐỦ VÀ ĐÚNG THÔNG TIN YÊU CẦU");
        }
      });
    })
</script>
<!-- Add end script active menu-->