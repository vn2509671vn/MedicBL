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
                sdt,
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
                '". $data['sdt'] ."',
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
                    sdt = '". $data['sdt'] ."',
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
    
    function getPatien($mabenhnhan, $ngaychidinh){
        $sql = "select * from patient_info where mabenhnhan = '$mabenhnhan' and ngaychidinh = '$ngaychidinh'";
        $query = mysql_query($sql);
        $result = mysql_fetch_array($query);
        return $result;
    }
    
    function getKetqua($sid){
        $sql = "select * from ketqua_xetnghiem where sid = '$sid' ORDER BY tennhomxn ASC";
        $result = mysql_query($sql);
        return $result;
    }
    
    function getTienSu($mayte, $maxetnghiem, $ngaychidinh){
        $sql = "SELECT a.maxetnghiem, a.tenxetnghiem, a.ketqua, b.ngaychidinh 
        FROM ketqua_xetnghiem a, patient_info b 
        WHERE a.maxetnghiem = '$maxetnghiem' 
        and b.mayte = '$mayte' 
        and a.sid = b.sid 
        and b.ngaychidinh < '$ngaychidinh' 
        ORDER BY b.ngaychidinh DESC 
        LIMIT 0,1";
        $query = mysql_query($sql);
        $result = mysql_fetch_array($query);
        return $result;
    }
?>