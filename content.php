<!-- Add start Header-->
<?php require("header.php");?>
<!-- Add end Header-->
<!-- Add start slider-->
<?php require("slider.php");?>
<!-- Add end slider-->

<div class="container text-center">    
  <div class="row">
    <br>
    <!-- Left content-->
    <div class="col-sm-8">
      <div class="col-sm-12">
        <h3 class="text-left text-green">Tin tức</h3>
        <hr class="divider">
        <div class="row">
          <div id="article_img" class="col-md-3">
            <img src="http://www.hoanmy.com/Data/Sites/2/userfiles/20/HMCL/CLB%20%C4%90T%C4%90/Poster%2040%20x%2060_40%20x%2060.jpg" width="100%"></img>
          </div>
          <div id="article_content" class="col-md-9">
            <div class="row text-left" id="article_title">
              <h3>Title 1</h3>
            </div>
            <div class="row text-left" id="article_date">
              <?php 
              $dateTime = getdate();
              echo "$dateTime[weekday], $dateTime[month] $dateTime[mday], $dateTime[year]";
              ?>
            </div>
            <div class="row text-left" id="article_main_content">
              <p>Cố gắng thoát khỏi những đêm dài vắng em
                  Chỉ mình anh với chiếc bóng trên tường
                  Lòng anh day dứt không yên chỉ cố gắng không ngã quỵ
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Right content-->
    <div class="col-sm-4">
      <h3 class="text-left text-green">Tiện ích</h3>
      <hr class="divider">
      <div class="row">
          <div class="col-sm-12">
            <iframe width="100%" height="auto" src="_html5/Project1.html"></iframe>
          </div>
      </div>
      <div class="row">
          <div class="col-sm-12">
            <iframe width="100%" height="auto" src="http://www.youtube.com/embed/KgMt0dtr4Vc" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
  </div>
</div>
<!-- Add start footer-->
<?php require("footer.php");?>
<!-- Add end footer-->