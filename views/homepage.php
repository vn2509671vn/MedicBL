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
<?php require("../models/homepage.php");
$posts = get_4new_post();
?>
<!-- Add end model-->
<div class="container text-center">    
  <div class="row">
    <br>
    <!-- Left content-->
    <div class="col-md-8">
      <div class="col-md-12">
        <div class="row text-left">
          <div class="col-md-12 padding-left-0">
            <a class="text-left a-title"><?php echo $main['tintuc'];?></a>
          </div>
        </div>
        <br>
        <?php while($post = mysql_fetch_assoc($posts)): ?>
        <div class="row text-left">
          <div class="col-md-4"><a href="post_chitiet.php?id=<?php echo $post['post_id'];?>&cat_id=<?php echo $post['cat_id'];?>" class=""><img src="../admin/upload/tintuc/<?php echo $post['post_image'];?>" class="img-responsive"></a>
          </div>
          <div class="col-md-8">
            <h4 class="title uppercase"><a href="post_chitiet.php?id=<?php echo $post['post_id'];?>&cat_id=<?php echo $post['cat_id'];?>"><?php echo $post['post_title'];?></a></h4>
            <p class="text-muted"><span class="glyphicon glyphicon-calendar"></span> <?php echo $post['post_date'];?></p>
            <p><?php echo $post['post_excerpt'];?></p>
          </div>
        </div>
        <hr class="divider">
        <?php endwhile;?>
        </div>
      </div>
      
    <!-- Right content-->
    <?php require("../right_home.php");?>
  </div>
</div>
<!-- Add start footer-->
<?php require("../footer.php");?>

<!-- Add end footer-->
<!-- Add start script active menu-->
<script type="text/javascript">
    selectorMenu("id1");
</script>
<!-- Add end script active menu-->