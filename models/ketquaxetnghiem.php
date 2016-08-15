<?php 
    function checkPatientInfo($id){
        $query = "select * from patient_info where sid = '$id'";
        $result = mysql_query($query);
         if (mysql_num_rows($result) != 0){
             return 1;
         }
         else {
             return 0;
         }
    }
    
    function checkKetqua($id,$maxetnghiem){
        $query = "select * from ketqua_xetnghiem where sid = '$id' and maxetnghiem = '$maxetnghiem'";
        $result = mysql_query($query);
         if (mysql_num_rows($result) != 0){
             return 1;
         }
         else {
             return 0;
         }
    }
    
    function insertPatientInfo($data){
        $sql = "Insert into patient_info(
                sid, 
                ngaychidinh, 
                stt, 
                mabenhnhan,
                mayte,
                tenbenhnhan,
                diachi,
                namsinh,
                gioitinh,
                chandoan,
                tendoituong,
                tennoichidinh,
                tenbacsi
                ) 
                value(
                '". $data['sid'] ."',
                '". $data['ngaychidinh'] ."',
                '". $data['stt'] ."',
                '". $data['mabenhnhan'] ."',
                '". $data['mayte'] ."',
                '". $data['tenbenhnhan'] ."',
                '". $data['diachi'] ."',
                '". $data['namsinh'] ."',
                '". $data['gioitinh'] ."',
                '". $data['chandoan'] ."',
                '". $data['tendoituong'] ."',
                '". $data['tennoichidinh'] ."',
                '". $data['tenbacsi'] ."'
                )";
        $result = mysql_query($sql);
        return $result;
    }
    
    function updatePatientInfo($data){
        $sql = "Update patient_info set 
                    ngaychidinh = '". $data['ngaychidinh'] ."', 
                    stt = '". $data['stt'] ."', 
                    mabenhnhan = '". $data['mabenhnhan'] ."',
                    mayte = '". $data['mayte'] ."',
                    tenbenhnhan = '". $data['tenbenhnhan'] ."',
                    diachi = '". $data['diachi'] ."',
                    namsinh = '". $data['namsinh'] ."',
                    gioitinh = '". $data['gioitinh'] ."',
                    chandoan = '". $data['chandoan'] ."',
                    tendoituong = '". $data['tendoituong'] ."',
                    tennoichidinh = '". $data['tennoichidinh'] ."',
                    tenbacsi = '". $data['tenbacsi'] ."' 
                Where sid = '". $data['sid'] ."'";
        $result = mysql_query($sql);
        return $result;
    }
    
    function insertKetqua($data){
        $sql = "Insert into ketqua_xetnghiem(
                sid, 
                maxetnghiem, 
                sophieuyeucau, 
                tenxetnghiem,
                ketqua,
                chisobinhthong,
                donvi,
                batthuong,
                tennhomxn,
                thutunhomxn
                ) 
                value(
                '". $data['sid'] ."',
                '". $data['maxetnghiem'] ."',
                '". $data['sophieuyeucau'] ."',
                '". $data['tenxetnghiem'] ."',
                '". $data['ketqua'] ."',
                '". $data['chisobinhthong'] ."',
                '". $data['donvi'] ."',
                '". $data['batthuong'] ."',
                '". $data['tennhomxn'] ."',
                '". $data['thutunhomxn'] ."'
                )";
        $result = mysql_query($sql);
        return $result;
    }
    
    function updateKetqua($data){
        $sql = "Update ketqua_xetnghiem set 
                    sophieuyeucau = '". $data['sophieuyeucau'] ."', 
                    tenxetnghiem = '". $data['tenxetnghiem'] ."',
                    ketqua = '". $data['ketqua'] ."',
                    chisobinhthong = '". $data['chisobinhthong'] ."',
                    donvi = '". $data['donvi'] ."',
                    batthuong = '". $data['batthuong'] ."',
                    tennhomxn = '". $data['tennhomxn'] ."',
                    thutunhomxn = '". $data['thutunhomxn'] ."' 
                Where sid = '". $data['sid'] ."' AND maxetnghiem = '". $data['maxetnghiem'] ."'";
        $result = mysql_query($sql);
        return $result;
    }
?>