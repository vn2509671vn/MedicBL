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
            <a class="text-left a-title"><?php echo $main['ketquatimkiem']; ?></a>
          </div>
        </div>
        <br>
        <div id = "list_search" class="col-md-12">
                    
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
    <?php require("../right_content.php");?>
  </div>
</div>
</div>
<!-- Add start footer-->
<?php require("../footer.php");?>
<!-- Add end footer-->
<script type="text/javascript">
function pagination(page, keyword){
    $.ajax ({
        type: "POST",
        url: "../models/ajax_search.php",
        data:
        {
            page: page,
            keyword: keyword,
        },
        success: function(data_page) { 
            $("#list_search").html(data_page);  
        }
    });
}

$(document).ready(function(){
  var keyword = '<?php echo $_GET['keyword'];?>';
  pagination(1,keyword);  
  $("nav[role='page'] > ul li").click(function(){
    var page = $(this).attr('page');
    pagination(page);
  });
});  
</script> 