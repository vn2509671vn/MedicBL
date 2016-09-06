<!-- Add start Header-->
<?php require("../header.php");?>
<!-- Add end Header-->
<!-- Add start slider-->
<?php require("../slider.php");?>
<!-- Add end slider-->
<!-- Add start services-->
<?php require("../services.php");?>
<!-- Add end services-->
<?php require("../models/ketquaxetnghiem.php");
$mabenhnhan = $_GET['mabenhnhan'];
$ngaychinhdinh = $_GET['ngaychidinh'];
$date = date_create($ngaychinhdinh);
$date = date_format($date, 'Y-m-d H:i:s');
$patient = getPatien($mabenhnhan,$date);
$lstKetQua = getKetqua($patient['sid']);
?>
<div class="container text-center">    
  <div class="row">
    <br>
    <!-- Left content-->
    <div class="col-md-8">
      <div class="col-md-12">
        <div class="row text-left">
          <div class="col-md-12 padding-left-0">
            <a class="text-left a-title"><?php echo $main['ketquaxetnghiem']; ?></a>
          </div>
        </div>
        <br>
        <!-- Main Content -->
        <div class="col-md-12 text-left padding-left-0 border-bottom">
          <div class="form-group">
            <label class="col-md-6 control-label">Bệnh nhân: <?php echo $patient['tenbenhnhan'];?></label>
            <label class="col-md-3 control-label">Năm sinh: <?php echo $patient['namsinh'];?></label>
            <label class="col-md-3 control-label">Giới tính: <?php echo ($patient['gioitinh'] == M)?$main['nam']:$main['nu'];?></label>
          </div>
          <div class="form-group">
            <label class="col-md-12 control-label">Địa chỉ: <?php echo $patient['diachi'];?></label>
          </div>
          <div class="form-group">
            <label class="col-md-6 control-label">Bác sĩ chỉ định: <?php echo $patient['tenbacsi'];?></label>
            <label class="col-md-6 control-label">Chuẩn đoán: <?php echo $patient['chandoan'];?></label>
          </div>
          <div class="form-group">
            <label class="col-md-12 control-label">Ngày chỉnh định: <?php echo date_format(date_create($patient['ngaychidinh']),"d/m/Y H:i:s");?></label>
          </div>
        </div>
        <div class="col-md-12 table-responsive margin-top-10px padding-left-0 padding-right-0">
          <table class="table ketquaxn width-100per">
                <thead class="border-table">
                    <tr>
                        <th class="border-table text-center">YÊU CẦU XÉT NGHIỆM</th>
                        <th class="border-table text-center">CSBT</th>
                        <th class="border-table text-center">Kết quả</th>
                        <th class="border-table text-center">Đơn vị tính</th>
                        <th class="border-table text-center">Tiền sử</th>
                    </tr>
                </thead>
                <tbody>
                  <?php $tmp = "";?>
                  <?php while($kq = mysql_fetch_array($lstKetQua)):?>
                    <?php if($kq['tennhomxn'] != $tmp):?>
                    <tr class="border-table">
                      <td colspan="5" class="text-left border-table text-bold"><?php echo $kq['tennhomxn'];?></td>
                    </tr>
                    <?php 
                      $tmp = $kq['tennhomxn'];
                      endif;
                    ?>
                    <tr class="border-table">
                        <td class="text-center border-table"><?php echo $kq['tenxetnghiem'];?></td>
                        <td class="text-center border-table"><?php echo $kq['chisobinhthong'];?></td>
                        <td class="text-center border-table <?php echo ($kq['batthuong'])?'text-error':'';?>"><?php echo $kq['ketqua'];?></td>
                        <td class="text-center border-table"><?php echo $kq['donvi'];?></td>
                        <td class="text-center border-table">
                          <?php 
                            $tiensu = getTienSu($patient['mayte'], $kq['maxetnghiem'], $date);
                            if($tiensu){
                              echo $tiensu['ketqua'] . " - ( " . date_format(date_create($tiensu['ngaychidinh']),'d/m/Y') . " )";
                            }
                          ?>
                        </td>
                  <?php endwhile;?>
                </tbody>
          </table>
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
          <!-- Main right content -->
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
    selectorMenu("id4");
</script>
<!-- Add end script active menu-->