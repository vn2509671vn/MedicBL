<!-- Add start Header-->
<?php require("../header.php");?>
<!-- Add end Header-->
<?php
    require("../models/ketquaxetnghiem.php");
    $err = false;
    $mgsError = "";
    if(!isset($_GET['ngaychidinh'])){
        $err = true;
    }
    if(!isset($_GET['sid'])){
        $err = true;
    }
    if(!isset($_GET['stt'])){
        $err = true;
    }
    if(!isset($_GET['mabenhnhan'])){
        $err = true;
    }
    if(!isset($_GET['mayte'])){
        $err = true;
    }
    if(!isset($_GET['sophieuyeucau'])){
        $err = true;
    }
    if(!isset($_GET['tenbenhnhan'])){
        $err = true;
    }
    if(!isset($_GET['sdt'])){
        $err = true;
    }
    if(!isset($_GET['diachi'])){
        $err = true;
    }
    if(!isset($_GET['namsinh'])){
        $err = true;
    }
    if(!isset($_GET['gioitinh'])){
        $err = true;
    }
    if(!isset($_GET['chandoan'])){
        $err = true;
    }
    if(!isset($_GET['tendoituong'])){
        $err = true;
    }
    if(!isset($_GET['tennoichidinh'])){
        $err = true;
    }
    if(!isset($_GET['tenbacsi'])){
        $err = true;
    }
    if(!isset($_GET['maxetnghiem'])){
        $err = true;
    }
    if(!isset($_GET['tenxetnghiem'])){
        $err = true;
    }
    if(!isset($_GET['ketqua'])){
        $err = true;
    }
    if(!isset($_GET['chisobinhthong'])){
        $err = true;
    }
    if(!isset($_GET['donvi'])){
        $err = true;
    }
    if(!isset($_GET['batthuong'])){
        $err = true;
    }
    if(!isset($_GET['tennhomxn'])){
        $err = true;
    }
    if(!isset($_GET['thutunhomxn'])){
        $err = true;
    }
    
    if($err){
        $mgsError = "VUI LÒNG TRUYỀN ĐỦ CÁC PARAMETER CẦN THIẾT";
    }
    
    if(!$err){
        $data = array(
            'ngaychidinh' => $_GET['ngaychidinh'],
            'sid' => $_GET['sid'],
            'stt' => $_GET['stt'],
            'mabenhnhan' => $_GET['mabenhnhan'],
            'mayte' => $_GET['mayte'],
            'sophieuyeucau' => $_GET['sophieuyeucau'],
            'tenbenhnhan' => $_GET['tenbenhnhan'],
            'sdt' => $_GET['sdt'],
            'diachi' => $_GET['diachi'],
            'namsinh' => $_GET['namsinh'],
            'gioitinh' => $_GET['gioitinh'],
            'chandoan' => $_GET['chandoan'],
            'tendoituong' => $_GET['tendoituong'],
            'tennoichidinh' => $_GET['tennoichidinh'],
            'tenbacsi' => $_GET['tenbacsi'],
            'maxetnghiem' => $_GET['maxetnghiem'],
            'tenxetnghiem' => $_GET['tenxetnghiem'],
            'ketqua' => $_GET['ketqua'],
            'chisobinhthong' => $_GET['chisobinhthong'],
            'donvi' => $_GET['donvi'],
            'batthuong' => $_GET['batthuong'],
            'tennhomxn' => $_GET['tennhomxn'],
            'thutunhomxn' => $_GET['thutunhomxn']
            );
        if($data['sid'] == "" || $data['maxetnghiem'] == ""){
            $mgsError = "SID VÀ MAXETNGHIEM PHẢI KHÁC NULL";
        }
        else {
            $existPatient = checkPatientInfo($data['sid']);
            $existKQ = checkKetqua($data['sid'], $data['maxetnghiem']);
            if($existPatient == 1){
              $result_Patient = updatePatientInfo($data);
            }
            else {
                $result_Patient = insertPatientInfo($data);
            }
            
            if($existKQ == 1){
              $result_KQ = updateKetqua($data);
            }
            else {
                $result_KQ = insertKetqua($data);
            }
            
            if($result_Patient && $result_KQ){
                $mgsError = "LƯU KẾT QUẢ XÉT NGHIỆM THÀNH CÔNG";
            }
            else {
                $mgsError = "LƯU KẾT QUẢ XÉT NGHIỆM THẤT BẠI! VUI LÒNG KIỂM TRA LẠI QUERY";
            }
        }
    }
?>
<div class="container text-center">
    <div class="row margin-top-40px margin-bottom-10px">
     <p><?php echo $mgsError;?></p>
    </div>
</div>
<!-- Add start footer-->
<?php require("../footer.php");?>
<!-- Add end footer-->