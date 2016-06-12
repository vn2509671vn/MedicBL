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
<?php require("../models/homepage.php");?>
$posts = get_4new_post();
<!-- Add end model-->
<div class="container text-center">    
  <div class="row">
    <br>
    <!-- Left content-->
    <div class="col-md-8">
      <div class="col-sm-12">
        <h3 class="text-left text-green">Tin tức</h3>
        <hr class="divider">
        <div class="row text-left">
          <div class="col-sm-4"><a href="#" class=""><img src="http://placehold.it/1280X720" class="img-responsive"></a>
          </div>
          <div class="col-sm-8">
            <h3 class="title">How to Fight Fraud with Artificial Intelligence and Intelligent Analytics</h3>
            <p class="text-muted"><span class="glyphicon glyphicon-calendar"></span> July 23, 2014 @ 1:30 PM</p>
            <p>Could artificial intelligence have been used to prevent the high-profile Target breach? The concept is not so far-fetched. Organizations such as Mastercard and RBS WorldPay have long relied on artificial intelligence to detect fraudulent transaction patterns and prevent card.</p>
            <p class="text-muted">Presented by <a href="#">ThangTGM</a></p>
          </div>
        </div>
        <hr class="divider">
        <div class="row text-left">
          <div class="col-sm-4"><a href="#" class=""><img src="http://placehold.it/1280X720" class="img-responsive"></a>
          </div>
          <div class="col-sm-8">
            <h3 class="title">Big Payment Data: Leveraging Transactional Data to Ensure an Enterprise Approach to Risk Management</h3>
            <p class="text-muted"><span class="glyphicon glyphicon-calendar"></span> July 23, 2014 @ 1:30 PM</p>
            <p>60% of organizations were exposed to actual or attempted fraud loss last year. As fraud and risk increases year over year, the amount of data being collected increases as well.</p>
            <p class="text-muted">Presented by <a href="#">ThangTGM</a></p>
          </div>
        </div>
        <hr class="divider">
        <div class="row text-left">
          <div class="col-sm-4"><a href="#" class=""><img src="http://placehold.it/1280X720" class="img-responsive"></a>
          </div>
          <div class="col-sm-8">
            <h3 class="title">Big Payment Data: Leveraging Transactional Data to Ensure an Enterprise Approach to Risk Management</h3>
            <p class="text-muted"><span class="glyphicon glyphicon-calendar"></span> July 23, 2014 @ 1:30 PM</p>
            <p>60% of organizations were exposed to actual or attempted fraud loss last year. As fraud and risk increases year over year, the amount of data being collected increases as well.</p>
            <p class="text-muted">Presented by <a href="#">ThangTGM</a></p>
          </div>
        </div>
        <hr class="divider">
        <div class="row text-left">
          <div class="col-sm-4"><a href="#" class=""><img src="http://placehold.it/1280X720" class="img-responsive"></a>
          </div>
          <div class="col-sm-8">
            <h3 class="title">Big Payment Data: Leveraging Transactional Data to Ensure an Enterprise Approach to Risk Management</h3>
            <p class="text-muted"><span class="glyphicon glyphicon-calendar"></span> July 23, 2014 @ 1:30 PM</p>
            <p>60% of organizations were exposed to actual or attempted fraud loss last year. As fraud and risk increases year over year, the amount of data being collected increases as well.</p>
            <p class="text-muted">Presented by <a href="#">ThangTGM</a></p>
          </div>
        </div>
        <hr class="divider">
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
    selectorMenu("homepage");
</script>
<!-- Add end script active menu-->