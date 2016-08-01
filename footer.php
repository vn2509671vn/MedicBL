<?php require("../models/menu.php");
$listmenu = getparentmenu($_SESSION['lang']);
?>
<a href="#" class="scrollup">Go Top</a>
<footer class="container-fluid text-center">
   <div class="container text-left">
       <div class="col-md-9 padding-left-0">
           <div class="col-md-12 font-size-12">
               <ul class="nav navbar-default navbar-nav border-right">
                   <?php while($menu = mysql_fetch_array($listmenu)):?>
                   <li><a id="footerid<?php echo $menu['menu_id'];?>" href="<?php echo $menu['menu_link'];?>"><?php echo $menu['name'];?></a></li>
                   <?php endwhile;?>
               </ul>
           </div>
           <div class="col-md-12">
               <p><h4>BỆNH VIỆN ĐA KHOA THANH VŨ MEDIC</h4></p>
               <p>
                 ĐỊA CHỈ: 183 BÀ TRIỆU, PHƯỜNG 03, TP. BẠC LIÊU, TỈNH BẠC LIÊU
                 <br>
                 ĐIỆN THOẠI: 0781.3820225
                 <br>
                 FAX: 0781.3956958
                 <br>
                 Email: ketoan@medicbaclieu.com
               </p>
           </div>
       </div>
       <div class="col-md-3">
        <p><h4><?php echo $main['ketnoivoichungtoi'];?></h4></p>
        <a target='_BLANK' href='https://www.facebook.com/B%E1%BB%87nh-Vi%E1%BB%87n-%C4%90a-Khoa-Thanh-V%C5%A9-Medicbaclieu-826797614118654/timeline' class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></a>
        <a target='_BLANK' class="btn btn-social-icon btn-google"><span class="fa fa-google"></span></a>
        <a target='_BLANK' class="btn btn-social-icon btn-youtube"><span class="fa fa-youtube"></span></a>
        <a target='_BLANK' href='rss.php' class="btn btn-social-icon btn-rss"><span class="fa fa-rss-square"></span></a>
       </div>
   </div>
</footer>
</body>
</html>