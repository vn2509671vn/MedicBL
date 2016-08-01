<?php 
    function getdotors_bychuyenkhoaID($chuyenkhoa_id, $lang){
        if($lang == 'en'){
            $query = "select dt.doctor_id, dt.doctor_name_en as name, dt.doctor_image as image ";
        }
        else {
            $query = "select dt.doctor_id, dt.doctor_name_vn as name, dt.doctor_image as image ";
        }
        $query .= "from doctors as dt, chuyenkhoa as ck ";
        $query .= "where dt.chuyenkhoa_id = ck.chuyenkhoa_id and ck.chuyenkhoa_id = $chuyenkhoa_id";
        return mysql_query($query);
    }
    
    function getdoctor_detail($doctor_id, $lang){
        if($lang == 'en'){
            $query = "select dt.doctor_id, 
            dt.doctor_name_en as name, 
            dt.doctor_image as image, 
            dt.doctor_experience_en as experience, 
            dt.doctor_qualification_en as qualification,
            sp.speciality_name_en as speciality_name,
            ck.chuyenkhoa_name_en as chuyenkhoa_name,
            ck.chuyenkhoa_id 
            ";
        }
        else {
            $query = "select dt.doctor_id, 
            dt.doctor_name_vn as name, 
            dt.doctor_image as image, 
            dt.doctor_experience_vn as experience, 
            dt.doctor_qualification_vn as qualification,
            sp.speciality_name as speciality_name,
            ck.chuyenkhoa_name as chuyenkhoa_name,
            ck.chuyenkhoa_id 
            ";
        }
        $query .= "from doctors as dt, specialities as sp, chuyenkhoa as ck ";
        $query .= "where dt.doctor_speciality_id = sp.speciality_id and dt.chuyenkhoa_id = ck.chuyenkhoa_id and dt.doctor_id = $doctor_id";
        return mysql_query($query);
    }
    
    function getdoctorlist($lang){
        if($lang == 'en'){
            $query = "select dt.doctor_id, 
            dt.doctor_name_en as name, 
            dt.doctor_image as image, 
            dt.doctor_experience_en as experience, 
            dt.doctor_qualification_en as qualification,
            sp.speciality_name_en as speciality_name,
            ck.chuyenkhoa_name_en as chuyenkhoa_name,
            ck.chuyenkhoa_id 
            ";
        }
        else {
            $query = "select dt.doctor_id, 
            dt.doctor_name_vn as name, 
            dt.doctor_image as image, 
            dt.doctor_experience_vn as experience, 
            dt.doctor_qualification_vn as qualification,
            sp.speciality_name as speciality_name,
            ck.chuyenkhoa_name as chuyenkhoa_name,
            ck.chuyenkhoa_id 
            ";
        }
        $query .= "from doctors as dt, specialities as sp, chuyenkhoa as ck ";
        $query .= "where dt.doctor_speciality_id = sp.speciality_id and dt.chuyenkhoa_id = ck.chuyenkhoa_id";
        return mysql_query($query);
    }
?>