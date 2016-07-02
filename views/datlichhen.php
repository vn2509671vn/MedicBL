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
            <a class="text-left a-title"><?php echo $main['datlichhen'];?></a>
          </div>
        </div>
        <br>
        <div class="row text-left">
        <!-- Thông tin bệnh nhân-->
         <div class="col-md-6 col-xs-12">
           <h4>Bạn muốn đặt hẹn khám cho</h4>
           <div class="col-md-6"><label class="radio-inline"><input type="radio" name="rdio" checked="checked" id="banthan" value="banthan"/> Bản thân</label></div>
           <div class="col-md-6"><label class="radio-inline"><input type="radio" name="rdio" id="nguoithan" value="nguoithan"/> Người thân</label></div>
           <br>
           <h4>Thông tin bệnh nhân</h4>
           <div class="col-md-6 margin-mid-5 col-xs-6">
             <select class="form-control" id="gioitinh">
               <option value="Null">Giới Tính</option>
               <option value="Nam">Nam</option>
               <option value="Nu">Nữ</option>
             </select>
           </div>
           <div class="col-md-6 margin-mid-5 col-xs-6">
             <select class="form-control" id="dotuoi">
               <option value="Null" selected>Độ Tuổi</option>
               <?php for($i = 1; $i <= 100; $i++):?>
               <option value="<?php echo $i;?>"><?php echo $i;?></option>
               <?php endfor;?>
             </select>
           </div>
           <div class="col-md-12 padding-left-0 padding-right-0" id="thongtinbenhnhan">
             <div class="col-md-12 margin-mid-5">
               <input type="text" name="benhnhan_name" placeholder="Họ tên bệnh nhân" class="form-control" id="benhnhan_name"/>
             </div>
             <div class="col-md-12 margin-mid-5 nguoithan_name" style="display:none;">
               <input type="text" name="nguoithan_name" placeholder="Nhập họ tên" class="form-control" id="nguoithan_name"/>
             </div>
             <div class="col-md-12 margin-mid-5">
               <input type="text" name="benhnhan_email" placeholder="Email bệnh nhân" class="form-control" id="benhnhan_email"/>
             </div>
             <div class="col-md-12 margin-mid-5">
               <input type="text" name="benhnhan_phone" placeholder="Số điện thoại bệnh nhân" maxlenght="11" class="form-control" id="benhnhan_phone" />
             </div>
           </div>
         </div>
         <!-- Thông tin lịch hẹn -->
         <div class="col-md-6 col-xs-12">
           <h4>Thông tin lịch hẹn</h4>
           <div class="col-md-12">
              <select class="form-control" id="chuyenkhoa_id">
                  <option value="Null">Chọn Chuyên Khoa</option>
                  <?php while($list_chuyenkhoa = mysql_fetch_array($chuyenkhoa)):?>
                  <option value="<?php echo $list_chuyenkhoa['chuyenkhoa_id'];?>"><?php echo $list_chuyenkhoa['name'];?></option>
                  <?php endwhile;?>
              </select>
            </div>
            <div class="col-md-12 margin-mid-5" id="bacsi">
              
            </div>
            <div class="col-md-12 margin-mid-5">
              <div class="form-group">
                <input class="easyui-datetimebox" required style="width:100%" value="<?php echo date('Y/m/d H:i:s'); ?>" data-format="dd/MM/yyyy hh:mm:ss">
              </div>
            </div>
         </div>
         
         <!-- Button submit-->
         <div class="col-md-12 col-xs-12 text-center margin-mid-5">
           <button type="button" class="btn btn-success">Đặt lịch</button>
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
              <a href="timbacsi.php" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['timbacsi'];?></a>
              <a href="datlichhen.php" class="list-group-item active-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['datlichhen'];?></a>
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
    $('#chuyenkhoa_id').on('change',function(){
      var id = this.value;
      if(id != "Null"){
        $.ajax({
          url:"../models/ajax_doctor_combobox.php",  
          method:"post",  
          data:{chuyenkhoa_id:id},  
          dataType:"text",  
          success:function(data)  
          {  
            $('#bacsi').html(data);
          }  
        });
      }
      else {
        $('#bacsi').html('');
      }
    });
    
    // Calendar
    $(function() {
    $('#datetimepicker1').datetimepicker({
      language: 'pt-BR'
    });
    
    // Change radio button
    // $('#element1_id').attr('placeholder','Some New Text 1');
    $('input[type=radio]').change( function() {
      if($(this).val() == "banthan"){
        $(".nguoithan_name").hide();
        $("#benhnhan_name").attr("placeholder", "Họ tên bệnh nhân");
        $("#benhnhan_email").attr("placeholder", "Email bệnh nhân");
        $("#benhnhan_phone").attr("placeholder", "Số điện thoại bệnh nhân");
      }
      else {
        $(".nguoithan_name").show();
        $("#nguoithan_name").attr("placeholder", "Họ tên người thân");
        $("#benhnhan_name").attr("placeholder", "Họ tên bệnh nhân");
        $("#benhnhan_email").attr("placeholder", "Email người thân");
        $("#benhnhan_phone").attr("placeholder", "Số điện thoại người thân");
      }
    });
    
    $('#benhnhan_phone').keypress(function (event) {
        var keycode;

        keycode = event.keyCode ? event.keyCode : event.which;

        if (!(event.shiftKey == false && (keycode == 46 || keycode == 8 ||
                keycode == 37 ||keycode == 39 || (keycode >= 48 && keycode <= 57)))) {
            event.preventDefault();
        }
    });

  });
</script>
<!-- Add end script active menu-->