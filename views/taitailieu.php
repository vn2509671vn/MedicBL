<!-- Add start Header-->
<?php require("../header.php");?>
<!-- Add end Header-->
<!-- Add start slider-->
<?php require("../slider.php");?>
<!-- Add end slider-->
<!-- Add start services-->
<?php require("../services.php");?>
<!-- Add end services-->
<!-- Add start models -->
<?php require("../models/vanban.php");
$listvb = getdocument($_SESSION['lang']);
?>
<!-- Add end models -->
<div class="container text-center">    
  <div class="row">
    <br>
    <!-- Left content-->
    <div class="col-md-8">
      <div class="col-md-12">
        <div class="row text-left">
          <div class="col-md-12 padding-left-0">
            <a class="text-left a-title"><?php echo $main['taitailieu']; ?></a>
          </div>
        </div>
        <br>
        <div class="row text-left">
          <!-- Start Table -->
          <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered table-full-width" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên văn bản</th>
                        <th>Loại văn bản</th>
                        <th>Thời gian</th>
                    </tr>
                </thead>
                <tbody>
                  <?php $iSTT = 1;?>
                  <?php while($vanban = mysql_fetch_array($listvb)):?>
                    <tr>
                        <td class="text-center"><?php echo $iSTT;?></td>
                        <td><a href="../admin/upload/vanban/tailieu/<?php echo $vanban['vanban_link'];?>"><?php echo $vanban['name'];?></a></td>
                        <td class="text-center">
                        <?php
                            $path = "../admin/upload/vanban/icon/";
                            switch ($vanban['vanban_type']) {
                              case 'word':
                                $path = "../admin/upload/vanban/icon/word.ico";
                                break;
                              case 'pdf':
                                $path = "../admin/upload/vanban/icon/pdf.ico";
                                break;
                              case 'excel':
                               $path = "../admin/upload/vanban/icon/excel.ico";
                                break;
                                case 'power':
                               $path = "../admin/upload/vanban/icon/power.ico";
                                break;
                              case 'rar':
                                $path = "../admin/upload/vanban/icon/rar.ico";
                                break;
                              default:
                                $path = "#";
                                break;
                            }
                        ?><image src="<?php echo $path;?>" class="max-height-20"></image></td>
                        <td><?php echo $vanban['vanban_date'];?></td>
                    </tr>
                  <?php $iSTT++;?>
                  <?php endwhile;?>
                </tbody>
            </table>
          </div>
          <!-- End Table -->
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
            <a href="danhbadienthoai.php" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['danhbadienthoai'];?></a>
            <a href="phanhoi_kh.php" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['phanhoikhachang'];?></a>
            <a href="360site.php" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['sodo360'];?></a>
            <a href="taitailieu.php" class="list-group-item active-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $main['taitailieu'];?></a>
          </div>
        </div>
      </div>
    <?php require("../right_content.php");?>
  </div>
</div>
</div>
<!-- Add start footer-->
<?php require("../footer.php");?>
<!-- Add end footer-->

<!-- Add start script active menu-->
<script type="text/javascript">
    selectorMenu("id6");
    $(document).ready(function() {
      $('#example').DataTable({
        "searching": false,
        "info": false
      });
      
      // Add Form seach
      var txtHTML = '<div class="dataTables_filter"><label>Search:<input type="search" id="tblSearch" class="form-control input-sm" placeholder="" aria-controls="example"></label></div>'
      $('#example_wrapper div:first div:nth-child(2)').append(txtHTML);
      
      // Search processed
      var $rows = $('#example tbody tr');
      $('#tblSearch').keyup(function() {
          var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
          val = bodauTiengViet(val);
          
          $rows.show().filter(function() {
              var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
              text = bodauTiengViet(text);
              return !~text.indexOf(val);
          }).hide();
      });
    });
</script>
<!-- Add end script active menu-->