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
require("../models/doctors.php");
$chuyenkhoa = getchuyenkhoa($_SESSION['lang']);
$bacsi = getdoctorlist($_SESSION['lang']);
if(isset($_GET['ck_id']) && isset($_GET['dt_id'])){
  $chuyenkhoa_id = $_GET['ck_id'];
  $doctor_id = $_GET['dt_id'];
}
?>
<!-- Add end model-->

<div class="container text-center">    
  <div class="row">
    <br>
    <!-- Left content-->
    <div class="col-md-8">
      <div class="col-md-12">
        <div class="row text-left">
          <div class="col-md-12">
            <a class="text-left a-title"><?php echo $main['datlichhen'];?></a>
          </div>
        </div>
        <br>
        <div class="row text-left">
        <!-- Thông tin bệnh nhân-->
         <div class="col-md-6 col-xs-12">
           <h4><?php echo $main['banmuonkhamchoai'];?></h4>
           <div class="col-md-6"><label class="radio-inline"><input type="radio" name="rdio" checked="checked" id="banthan" value="banthan"/> <?php echo $main['banthan'];?></label></div>
           <div class="col-md-6"><label class="radio-inline"><input type="radio" name="rdio" id="nguoithan" value="nguoithan"/> <?php echo $main['nguoithan'];?></label></div>
           <br>
           <h4><?php echo $main['thongtinbenhnhan'];?></h4>
           <div class="col-md-6 margin-mid-5 col-xs-6">
             <select class="form-control" id="gioitinh">
               <option value="Null"><?php echo $main['gioitinh'];?></option>
               <option value="Nam"><?php echo $main['nam'];?></option>
               <option value="Nu"><?php echo $main['nu'];?></option>
             </select>
           </div>
           <div class="col-md-6 margin-mid-5 col-xs-6">
             <select class="form-control" id="dotuoi">
               <option value="Null" selected><?php echo $main['dotuoi'];?></option>
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
               <input type="text" name="benhnhan_phone" placeholder="Số điện thoại bệnh nhân" class="form-control" id="benhnhan_phone" />
             </div>
           </div>
         </div>
         <!-- Thông tin lịch hẹn -->
         <div class="col-md-6 col-xs-12">
           <h4><?php echo $main['thongtinlichhen'];?></h4>
           <div class="col-md-12">
              <select class="form-control" id="chuyenkhoa_id">
                  <option value="Null"><?php echo $main['chonchuyenkhoa'];?></option>
                  <?php while($list_chuyenkhoa = mysql_fetch_array($chuyenkhoa)):?>
                  <option value="<?php echo $list_chuyenkhoa['chuyenkhoa_id'];?>" <?php if($chuyenkhoa_id == $list_chuyenkhoa['chuyenkhoa_id']) echo "selected";?>><?php echo $list_chuyenkhoa['name'];?></option>
                  <?php endwhile;?>
              </select>
            </div>
            <div class="col-md-12 margin-mid-5" id="bacsi">
              <?php if ($doctor_id):?>
                <select class="form-control" id="doctor_id">
                  <option value="Null"><?php echo $main['chonbacsi'];?></option>
                  <?php while($list_bacsi = mysql_fetch_array($bacsi)):?>
                  <option value="<?php echo $list_bacsi['doctor_id'];?>" <?php if($doctor_id == $list_bacsi['doctor_id']) echo "selected";?>><?php echo $list_bacsi['name'];?></option>
                  <?php endwhile;?>
                </select>
              <?php endif;?>
            </div>
            <div class="col-md-12 margin-mid-5">
              <div class="form-group">
                <div class='input-group date'>
                    <input class="col-md-3 form-control datepicker" id="datepicker" type="text"  />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
              </div>
            </div>
            <!-- Capcha -->
            <div class="col-md-12 col-xs-12 margin-mid-5 padding-left-0 padding-right-0">
                <div class="col-md-12 col-xs-12">
                  <div class="col-md-6 col-xs-6 padding-left-0 padding-right-0">
                    <input type="text" name="txtCaptcha" class="form-control" id="txtCaptcha"/>
                  </div>
                  <div class="col-md-6 col-xs-6">
                    <img src="../models/random_image.php" />
                  </div>
                </div>
            </div>
         </div>
         
         <!-- Button submit-->
         <div class="col-md-12 col-xs-12 text-center margin-mid-5">
           <button type="button" class="btn btn-success" id="datlich"><?php echo $main['datlich'];?></button>
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
              <a href="timbacsi.php" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['timbacsi'];?></a>
              <a href="datlichhen.php" class="list-group-item active-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['datlichhen'];?></a>
              <a href="#" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['benhandientu'];?></a>
              <a href="#" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['timphong'];?></a>
            </div>
          </div>
        </div>
        <br>
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
    $(document).ready(function(){
      $('#datepicker').datepicker({
        autoclose: true,
        format: 'dd/mm/yyyy',
        onRender: function(date) {
            return date.valueOf() < new Date().valueOf() ? 'disabled' : '';
        }
      }).on('changeDate', function (ev) {
          (ev.viewMode == 'days') ? $(this).datepicker('hide') : '';      
      });
    })
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
    // $(function() {
    
    // Change radio button
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
    
    // Check phone number
    $('#benhnhan_phone').keypress(function (event) {
        var keycode;
        keycode = event.keyCode ? event.keyCode : event.which;
        if (!(event.shiftKey == false && (keycode == 46 || keycode == 8 ||
                keycode == 37 ||keycode == 39 || (keycode >= 48 && keycode <= 57)))) {
            event.preventDefault();
        }
    });

    $("#datlich").click(function(){
      var err = validateForm();
      var benhnhan_email = $('#benhnhan_email').val();
      var benhnhan_name = $('#benhnhan_name').val();
      var benhnhan_phone = $('#benhnhan_phone').val();
      var nguoithan_name = $('#nguoithan_name').val();
      var gioitinh = $("#gioitinh").val();
      var dotuoi = $("#dotuoi").val();
      var chuyenkhoa_id = $("#chuyenkhoa_id").val();
      var doctor_id = $("#doctor_id").val();
      var date = $("#datepicker").val();
      var txtCapcha = $('#txtCaptcha').val();
      if (err == false) {
        $.ajax({
          url:"../models/ajax_datlich.php",  
          method:"post",  
          data:{
            email: benhnhan_email,
            benhnhan_hoten: benhnhan_name,
            nguoithan_hoten: nguoithan_name,
            phone: benhnhan_phone,
            gioitinh: gioitinh,
            dotuoi: dotuoi,
            chuyenkhoa: chuyenkhoa_id,
            doctor: doctor_id,
            date: date,
            txtCapcha: txtCapcha
          },  
          dataType:"text",  
          success:function(data)
          {  
            if(data == 1){
              alert("ĐẶT LỊCH THÀNH CÔNG. BỘ PHẬN CSKH SẼ LIÊN HỆ VỚI BẠN ĐỂ XÁC NHẬN THÔNG QUA SỐ ĐIỆN THOẠI");
              location.reload();
            }
            else if(data == 0){
              alert("THẤT BẠI");
            }
            else if (data == 2){
              alert("MÃ LỆNH KHÔNG HỢP LỆ!");
            }
          }  
        });
      }
      else{
        alert("VUI LÒNG ĐIỀN ĐẦY ĐỦ VÀ ĐÚNG THÔNG TIN YÊU CẦU");
      }
    });

    function validateForm(){
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      var benhnhan_email = $('#benhnhan_email').val();
      var benhnhan_name = $('#benhnhan_name').val();
      var benhnhan_phone = $('#benhnhan_phone').val();
      var nguoithan_name = $('#nguoithan_name').val();
      var gioitinh = $("#gioitinh").val();
      var dotuoi = $("#dotuoi").val();
      var chuyenkhoa_id = $("#chuyenkhoa_id").val();
      var doctor_id = $("#doctor_id").val();
      var nguoidangky = $('input[type=radio]').val();
      var date = $("#datepicker").val();
      
      var err = false;

      if (benhnhan_email == "") {
        // $('#benhnhan_email').addClass("focus_error");
        // err = true;
        $('#benhnhan_email').removeClass("focus_error");
      }
      else if(!emailReg.test(benhnhan_email)){
        $('#benhnhan_email').addClass("focus_error");
        err = true;
      }
      // else {
      //   $('#benhnhan_email').removeClass("focus_error");
      // }

      if (benhnhan_name == "") {
        $('#benhnhan_name').addClass("focus_error");
        err = true;
      }
      else {
        $('#benhnhan_name').removeClass("focus_error");
      }

      if (benhnhan_phone == "") {
        $('#benhnhan_phone').addClass("focus_error");
        err = true;
      }
      else {
        if(benhnhan_phone.length == 10 || benhnhan_phone.length == 11){
          $('#benhnhan_phone').removeClass("focus_error");
        }
        else {
           $('#benhnhan_phone').addClass("focus_error");
           err = true;
        }
      }

      if(nguoidangky == "nguoithan"){
        if (nguoithan_name == "") {
          $('#nguoithan_name').addClass("focus_error");
          err = true;
        }
        else {
          $('#nguoithan_name').removeClass("focus_error");
        }
      }

      if(gioitinh == "Null"){
        $('#gioitinh').addClass("focus_error");
        err = true;
      }
      else {
        $('#gioitinh').removeClass("focus_error");
      }

      if(dotuoi == "Null"){
        $('#dotuoi').addClass("focus_error");
        err = true;
      }
      else {
        $('#dotuoi').removeClass("focus_error");
      }

      if(chuyenkhoa_id == "Null"){
        $('#chuyenkhoa_id').addClass("focus_error");
        err = true;
      }
      else {
        $('#chuyenkhoa_id').removeClass("focus_error");
        // if(doctor_id == "Null"){
        //   $('#doctor_id').addClass("focus_error");
        //     err = true;
        // }
        // else {
        //   $('#doctor_id').removeClass("focus_error");
        // }
      }
      return err;
    }
  // });
</script>
<!-- Add end script active menu-->