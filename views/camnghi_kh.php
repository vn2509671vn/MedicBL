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
            <a class="text-left a-title line-hight-nor"><?php echo $main['camnghi']; ?></a>
          </div>
        </div>
        <br>
        <div id = "list_post" class="col-md-12">
          
        </div>
      </div>
      <div class="col-md-12">
        <div class="row text-left">
          <div class="col-md-12">
            <a class="text-left a-title"><?php echo $main['guicamnghi']; ?></a>
          </div>
        </div>
        <br>
        <form class="form-horizontal" role="form" id="insert_camnghi" action="../models/ajax_insert_camnghi.php" method="post" enctype="multipart/form-data">
        	<div class="form-group">
        		<label for="name" class="col-md-2 control-label">Họ Tên:</label>
        		<div class="col-md-10">
        			<input type="text" class="form-control" id="name" name="name" placeholder="Vui lòng nhập họ tên" value="">
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="message" class="col-md-2 control-label">Nội dung:</label>
        		<div class="col-md-10">
        			<textarea class="form-control" rows="4" name="message" id="message"></textarea>
        		</div>
        	</div>
        	<div class="form-group">
            <!-- Code upload image-->
            <label for="message" class="col-md-2 control-label">Hình đại diện:</label>
            <div class="col-md-10">
              <div class="input-group image-preview">
                  <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                  <span class="input-group-btn">
                      <!-- image-preview-clear button -->
                      <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                          <span class="glyphicon glyphicon-remove"></span> Clear
                      </button>
                      <!-- image-preview-input -->
                      <div class="btn btn-default image-preview-input">
                          <span class="glyphicon glyphicon-folder-open"></span>
                          <span class="image-preview-input-title">Browse</span>
                          <input type="file" accept="image/png, image/jpeg, image/gif" name="fileToUpload" id="fileToUpload"/> <!-- rename it -->
                      </div>
                  </span>
              </div><!-- /input-group image-preview [TO HERE]--> 
            </div>
            <!-- Code end upload image-->
          </div>
        	
        </form>
        <div class="form-group">
        		<div class="col-md-10 col-md-offset-2">
        			<input type="button" id="submit" class="btn btn-success" value="Gửi"/>
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
            <a href="gioithieu.php" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['gioithieuchung']; ?></a>
              <a href="tamnhinsumenh.php" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['tamnhinsumenh']; ?></a>
              <a href="visaochontv.php" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['visaochon']; ?></a>
              <a href="camnghi_kh.php" class="list-group-item active-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['camnghi']; ?></a>
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
    selectorMenu("id2");
</script>
<!-- Add end script active menu-->
<script type="text/javascript">
  function pagination(page){
      $.ajax ({
          type: "POST",
          url: "../models/ajax_camnghikhachhang.php",
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
    
    $("#submit").click(function(){
      var name = $('#name').val();
      var message = $('#message').val();
      var err = false;
      
      if(name == ""){
        err = true;
        $('#name').addClass("focus_error");
      }
      else {
        $('#name').removeClass("focus_error");
      }
      
      if(message == ""){
        err = true;
        $('#message').addClass("focus_error");
      }
      else {
        $('#message').removeClass("focus_error");
      }
      
      if(err == true){
        alert("VUI LÒNG ĐIỀN ĐỦ THÔNG TIN!!!");
      }
      else {
        $('#insert_camnghi').submit();
      }
    });
  });
  
$(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});
</script>