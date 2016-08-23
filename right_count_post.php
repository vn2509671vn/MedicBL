<?php 
  $list_docnhieu = gettinduocnhieu($_SESSION['lang']);
?>
<div class="col-sm-12 padding-left-0 margin-bottom-10px">
  <div class="row text-left">
    <div class="col-sm-12">
      <a class="text-left a-title"><?php echo $main['tindocnhieu'];?></a>
    </div>
  </div>
  <br>
  <div class="col-sm-12">
  <?php while($tindocnhieu = mysql_fetch_array($list_docnhieu)):?>
    <div class="media text-left">
      <div class="media-left">
        <a class="media-left" href="post_chitiet.php?cat_id=<?php echo $tindocnhieu['cat_id'];?>&id=<?php echo $tindocnhieu['post_id'];?>">
          <img src="../admin/upload/tintuc/<?php echo $tindocnhieu['post_image'];?>" class="media-object" width="80">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading capitalize"><a href="post_chitiet.php?cat_id=<?php echo $tindocnhieu['cat_id'];?>&id=<?php echo $tindocnhieu['post_id'];?>"><?php echo $tindocnhieu['title'];?></a></h4>
        <p class="text-muted"><span class="glyphicon glyphicon-calendar"></span> <?php echo $tindocnhieu['post_date'];?></p>
      </div>
    </div>
  <?php endwhile;?>
  </div>
  <br>
</div>