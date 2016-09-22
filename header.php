<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Medic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap-social.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.js"></script>
  <script src="../bootstrap/js/function.js"></script>
  <!-- Include IconHover -->
  <link rel="stylesheet" type="text/css" href="../IconHoverEffects/css/default.css" />
	<link rel="stylesheet" type="text/css" href="../IconHoverEffects/css/component.css" />
	<script src="../IconHoverEffects/js/modernizr.custom.js"></script>
  
  <!-- Plugin for Calendar -->
  <link rel="stylesheet" type="text/css" href="../datepicker/css/datepicker.css">
  <script src="../datepicker/js/bootstrap-datepicker.js" charset="UTF-8"></script>
  
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-579a1b6fd5569268"></script>
  
  <!-- Plugin for autocomplete -->
  <script src="../bootstrap/js/currency-autocomplete.js"></script>
  <script src="../bootstrap/js/jquery.autocomplete.js"></script>
  
  <!-- Plugin for image map -->
  <script src="../bootstrap/js/jquery.imagemapster.js"></script>
  
  <!-- Plugin for datatable-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
  <script type="text/javascript" src="../bootstrap/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="../bootstrap/js/dataTables.bootstrap.js"></script>
  
  <!-- Plugin for popup-->
  <!--<link rel="stylesheet" type="text/css" href="../jqueryPopup/css/magnific-popup.css" />-->
  <!--<script type="text/javascript" src="../jqueryPopup/js/magnific-popup.js"></script>-->
  
</head>
<?php
session_start();
function checkLang(){
  if (isset($_GET['lang'])){
      $_SESSION['lang'] = $_GET['lang'];
      $lang = $_SESSION['lang'];
      return "../languages/$lang.php";
  }
  else if (isset($_SESSION['lang'])){
     $lang = $_SESSION['lang'];
     return "../languages/$lang.php";
  }
  else{
    $_SESSION['lang'] = 'vi';
    return "../languages/vi.php";
  } 
}

require(checkLang());
require('../config.php');
require("../models/posts.php");
?>
<body>
      <div class="container margin-mid-5 padding-left-0">
        <!--<div class="col-md-12 text-right">-->
          
        <!--</div>-->
        <div class="col-md-9 col-xs-12 padding-left-0 padding-right-0">
          <img class="img-responsive" src="../images/logo/logo.jpg" width="auto" height="80">
        </div>
        <div class="col-md-3 col-xs-12 padding-left-0 padding-right-0">
          <p class="text-right"><image src="../images/footer/hotline.png" class="max-height-30"></image> <a class="text-error non-underline">1800969698</a></p>
          <h5 class="text-right non-marginTop"><?php echo $main['language']; ?>: <a href="#" id="Vi-lang"><image src="../images/flag/vietnam_flag.png" class="max-height-20"></image></a> | <a href="#" id="En-lang"><image src="../images/flag/United-Kingdom-flag.png" class="max-height-20"></image></a></h5>
          <form class="navbar-form navbar-right" role="search" action="search.php">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Tìm kiếm..." name="keyword">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-success">
                        <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
          </form>
        </div>
      </div>
 
      
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php
                require('../connect/config.php');
                if($_SESSION['lang'] == "en"){
	                $menungang = "select menu_id, menu_name_en as name, menu_link, menu_parent, menu_pos from menu where menu_parent=0";
                }
                else {
                  $menungang = "select menu_id, menu_name_vn as name, menu_link, menu_parent, menu_pos from menu where menu_parent=0";
                }
          			$menungang_1=mysql_query($menungang);
          			if($menungang_1 && mysql_num_rows($menungang_1)>0)
          			{
          				echo '<ul class="nav navbar-default navbar-nav">';
          				while ($menungang_2 = mysql_fetch_array($menungang_1))
          				{
          				  
          					//$menucon="select * from menu where menu_parent={$menungang_2["menu_id"]}";
          					if($_SESSION['lang'] == "en"){
    	                $menucon = "select menu_id, menu_name_en as name, menu_link, menu_parent, menu_pos from menu where menu_parent={$menungang_2["menu_id"]}";
                    }
                    else {
                      $menucon = "select menu_id, menu_name_vn as name, menu_link, menu_parent, menu_pos from menu where menu_parent={$menungang_2["menu_id"]}";
                    }
          					$menucon_1=mysql_query($menucon);
          					if($menucon_1 && mysql_num_rows($menucon_1)>0)
          					{
          					  
          					  echo "<li class='dropdown' id='id".$menungang_2['menu_id']."'>";
          						echo "<a class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false' href='" .$menungang_2['menu_link']. "'>".$menungang_2['name']."<span class='caret'></span></a>";
          						echo '<ul class="dropdown-menu dropdown-menu2" role="menu">';
          						while($menucon_2=mysql_fetch_array($menucon_1))
          						{
          							echo"<li><a href='". $menucon_2['menu_link'] ."'>" . $menucon_2['name'] . "</a></li>";
          						}
          						echo"</ul>";
          					  echo "</li>";
          					}
          					else
          					{
          						echo "<li id='id".$menungang_2['menu_id']."'><a href='". $menungang_2['menu_link'] ."'> ".$menungang_2['name']. "</a></li>";
          					}
          				}
          				echo"</ul>";
          			}
              ?>
              <!--</ul>-->
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>