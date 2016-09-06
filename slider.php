<?php 
  $arrImg = getSliderimg();
  $countImg = mysql_num_rows($arrImg);
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <?php if($countImg > 0):?>
        <?php for($nIndex = 0; $nIndex < $countImg; $nIndex++):?>
          <li data-target="#myCarousel" data-slide-to="<?php echo $nIndex;?>" class="<?php if($nIndex==0) echo 'active';?>"></li>
        <?php endfor;?>
      <?php else:?>
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      <?php endif;?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <?php if($countImg > 0):?>
        <?php $tmpIndex = 0;?>
        <?php while($slideImage = mysql_fetch_array($arrImg)):?>
          <div class="item <?php if($tmpIndex == 0) echo 'active';?>">
            <img src="../images/slider/<?php echo $slideImage['post_image'];?>" alt="Image">
            <div class="carousel-caption">
              <h3>Header</h3>
              <p>Container</p>
            </div>
            <div class="carousel-caption-left scroll-right">
              <p>Nơi chia sẻ yêu thương, nơi trao niềm tin chất lượng.</p>
            </div>
          </div>
        <?php $tmpIndex += 1;?>
        <?php endwhile;?>
      <?php else:?>
      <div class="item active">
        <img src="../images/slider/ghiphieu.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Header</h3>
          <p>Container</p>
        </div>
        <div class="carousel-caption-left scroll-right">
          <p>Container.....</p>
        </div>
      </div>
      <div class="item">
        <img src="../images/slider/khukham.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Header</h3>
          <p>Container.....</p>
        </div>
        <div class="carousel-caption-left scroll-right">
          <p>Container.....</p>
        </div>
      </div>
      <div class="item">
        <img src="../images/slider/xetnghiem.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Header</h3>
          <p>Container.....</p>
        </div>
        <div class="carousel-caption-left scroll-right">
          <p>Container.....</p>
        </div>
      </div>
      <?php endif;?>
      <!--<div class="item">-->
      <!--  <img src="http://placehold.it/1200x400?text=Another Image Maybe" alt="Image">-->
      <!--  <div class="carousel-caption">-->
      <!--    <h3>More Sell $</h3>-->
      <!--    <p>Mistake...</p>-->
      <!--  </div>      -->
      <!--</div>-->
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>