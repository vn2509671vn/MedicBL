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
            <a class="text-left a-title"><?php echo $main['phanhoikhachang']; ?></a>
          </div>
        </div>
        <br>
       <!-- Input main content -->
        <div class="row text-left">
           <div class="col-md-12 padding-left-0 padding-right-0">
             <div class="col-md-12">
               <div class="col-md-12 margin-mid-5 padding-left-0 padding-right-0">
                  <label class="col-md-3">
                    Loại thắc mắc:
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="loaithacmac" value="Khen ngợi">Khen ngợi
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="loaithacmac" value="Góp ý" checked>Góp ý
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="loaithacmac" value="Khiếu nại">Khiếu nại
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="loaithacmac" value="Thắc mắc chung">Thắc mắc chung
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="loaithacmac" value="Chi phí">Chi phí
                  </label>
               </div>
               <div class="col-md-12 margin-mid-5 padding-left-0 padding-right-0">
                  <label class="col-md-3">
                    Mã số bệnh nhân:
                  </label>
                  <div class="col-md-9">
                    <input type="text" name="benhnhan_maso" placeholder="Mã số bệnh nhân" class="form-control" id="benhnhan_maso"/>
                  </div>
               </div>
               <div class="col-md-12 margin-mid-5 padding-left-0 padding-right-0">
                 <label class="col-md-3">
                    Họ Tên:
                  </label>
                  <div class="col-md-9">
                     <input type="text" name="benhnhan_name" placeholder="Họ Tên" class="form-control" id="benhnhan_name"/>
                  </div>
               </div>
               <div class="col-md-12 margin-mid-5 padding-left-0 padding-right-0">
                <label class="col-md-3">
                    Ngày sinh:
                </label>
                <div class="col-md-9">
                  <div class='input-group date'>
                      <input class="form-control" id="datepicker" type="text" placeholder="Ngày sinh" />
                      <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
                </div>
               </div>
               <div class="col-md-12 margin-mid-5 padding-left-0 padding-right-0">
                  <label class="col-md-3">
                      Địa Chỉ:
                  </label>
                  <div class="col-md-9">
                   <input type="text" name="benhnhan_address" placeholder="Địa Chỉ" class="form-control" id="benhnhan_address"/>
                  </div>
               </div>
               <div class="col-md-12 margin-mid-5 padding-left-0 padding-right-0">
                <label class="col-md-3">
                      Email:
                </label>
                <div class="col-md-9">
                 <input type="text" name="benhnhan_email" placeholder="Email" class="form-control" id="benhnhan_email"/>
                </div>
               </div>
               <div class="col-md-12 margin-mid-5 padding-left-0 padding-right-0">
                <label class="col-md-3">
                      Số Điện Thoại:
                </label>
                <div class="col-md-9">
                 <input type="text" name="benhnhan_phone" placeholder="Số Điện Thoại" class="form-control" id="benhnhan_phone" />
                </div>
               </div>
             <!--</div>-->
             <!--<div class="col-md-7">-->
               <div class="col-md-12 margin-mid-5 padding-left-0 padding-right-0">
                <label class="col-md-3">
                      Tiêu Đề:
                </label>
                <div class="col-md-9">
                 <input type="text" name="benhnhan_title" placeholder="Tiêu Đề" class="form-control" id="benhnhan_title" />
                </div>
               </div>
               <div class="col-md-12 margin-mid-5 padding-left-0 padding-right-0">
                <label class="col-md-3">
                      Nội Dung:
                </label>
                <div class="col-md-9">
                 <textarea class="form-control" rows="5" id="benhnhan_content" placeholder="Nội Dung" id="benhnhan_content"></textarea>
                </div>
               </div>
               <div class="col-md-12 col-xs-12 margin-mid-5 padding-left-0 padding-right-0">
                <label class="col-md-3 col-xs-12">
                      Nhập mã lệnh:
                </label>
                <div class="col-md-9 col-xs-12">
                  <div class="col-md-5 col-xs-5 padding-left-0 padding-right-0">
                    <input type="text" name="txtCaptcha" class="form-control" id="txtCaptcha"/>
                  </div>
                  <div class="col-md-5 col-xs-5">
                    <img src="../models/random_image.php" />
                  </div>
                </div>
               </div>
               <div class="col-md-12 col-xs-12 margin-mid-5 padding-left-0 padding-right-0">
                <div class="col-md-offset-3 col-md-9 col-xs-12">
                 <input type="checkbox" id="myCheck"> Nhận phản hồi từ phía bệnh viện</label>
                </div>
               </div>
             </div>
             <div class="col-md-12 col-xs-12 text-center margin-mid-5">
               <button type="button" class="btn btn-success" id="guiphanhoi"><?php echo $main['guiphanhoi']; ?></button>
             </div>
           </div>
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
          <div class="panel panel-default text-left">
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['danhbadienthoai'];?></a>
            <a href="#" class="list-group-item active-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['phanhoikhachang'];?></a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['sodo360'];?></a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['googlemap'];?></a>
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
    selectorMenu("id6");
    $(document).ready(function(){
      $('#datepicker').datepicker({
        autoclose: true,
        format: 'dd/mm/yyyy',
      }).on('changeDate', function (ev) {
          (ev.viewMode == 'days') ? $(this).datepicker('hide') : '';      
      });
      
        $("#guiphanhoi").click(function(){
        var err = validateForm();
        var benhnhan_email = $('#benhnhan_email').val();
        var benhnhan_name = $('#benhnhan_name').val();
        var benhnhan_phone = $('#benhnhan_phone').val();
        var benhnhan_address = $('#benhnhan_address').val();
        var benhnhan_title = $('#benhnhan_title').val();
        var benhnhan_content = $('#benhnhan_content').val();
        var benhnhan_nhanphanhoi = document.getElementById("myCheck").checked;
        var benhnhan_textCap = $('#txtCaptcha').val();
        if(benhnhan_nhanphanhoi == true){
          benhnhan_nhanphanhoi = 1;
        }
        else {
          benhnhan_nhanphanhoi = 0;
        }
        var benhnhan_loaithacmac = $("input[name='loaithacmac']:checked").val();
        var benhnhan_maso = $('#benhnhan_maso').val();
        var benhnhan_ngaysinh = $('#datepicker').val();
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0!
        var yyyy = today.getFullYear();
        var date = mm+'/'+dd+'/'+yyyy;
  
        
        if (err == false) {
          $.ajax({
            url:"../models/ajax_phanhoikhachhang.php",  
            method:"post",  
            data:{
              email: benhnhan_email,
              benhnhan_hoten: benhnhan_name,
              benhnhan_address: benhnhan_address,
              phone: benhnhan_phone,
              title: benhnhan_title,
              content: benhnhan_content,
              date: date,
              nhanphanhoi: benhnhan_nhanphanhoi,
              loaithacmac: benhnhan_loaithacmac,
              maso: benhnhan_maso,
              ngaysinh: benhnhan_ngaysinh,
              txtCapcha: benhnhan_textCap
            },  
            dataType:"text",  
            success:function(data)
            {  
              // console.log(data);
              if(data == 1){
                alert("GỬI PHẢN HỒI THÀNH CÔNG. CẢM ƠN SỰ PHẢN HỒI CỦA BẠN!!!");
                location.reload();
              }
              else if(data == 0){
                alert("GỬI PHẢN HỒI THẤT BẠI!");
              }
              else if(data == 2){
                alert("MÃ LỆNH KHÔNG HỢP LỆ!");
              }
            }  
          });
        }
        else{
          alert("VUI LÒNG ĐIỀN ĐẦY ĐỦ VÀ ĐÚNG THÔNG TIN YÊU CẦU");
        }
      });
    });
    
    $('#benhnhan_phone').keypress(function (event) {
        var keycode;
        keycode = event.keyCode ? event.keyCode : event.which;
        if (!(event.shiftKey == false && (keycode == 46 || keycode == 8 ||
                keycode == 37 ||keycode == 39 || (keycode >= 48 && keycode <= 57)))) {
            event.preventDefault();
        }
    });

    function validateForm(txtCapcha){
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      var benhnhan_email = $('#benhnhan_email').val();
      var benhnhan_name = $('#benhnhan_name').val();
      var benhnhan_phone = $('#benhnhan_phone').val();
      var benhnhan_title = $('#benhnhan_title').val();
      var benhnhan_content = $('#benhnhan_content').val();
      var benhnhan_textCap = $('#txtCaptcha').val();
      var maCapCha = txtCapcha;
      
      var err = false;

      if (benhnhan_email == "") {
        $('#benhnhan_email').removeClass("focus_error");
      }
      else if(!emailReg.test(benhnhan_email)){
        $('#benhnhan_email').addClass("focus_error");
        err = true;
      }

      if (benhnhan_name == "") {
        $('#benhnhan_name').addClass("focus_error");
        err = true;
      }
      else {
        $('#benhnhan_name').removeClass("focus_error");
      }
      
      if (benhnhan_title == "") {
        $('#benhnhan_title').addClass("focus_error");
        err = true;
      }
      else {
        $('#benhnhan_title').removeClass("focus_error");
      }
      
      if (benhnhan_content == "") {
        $('#benhnhan_content').addClass("focus_error");
        err = true;
      }
      else {
        $('#benhnhan_content').removeClass("focus_error");
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
      
      // if(benhnhan_textCap == ""){
      //   $('#txtCaptcha').addClass("focus_error");
      //   err = true;
      // }
      // else {
      //   if(maCapCha != benhnhan_textCap){
      //     $('#txtCaptcha').addClass("focus_error");
      //     err = true;
      //   }
      //   else {
      //     $('#txtCaptcha').removeClass("focus_error");
      //   }
      // }
      return err;
    }
</script>
<!-- Add end script active menu-->