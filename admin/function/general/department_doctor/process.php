<?php
session_start();

if($_POST['id']){
                    require_once '../../../../connect/dbconfig.php';
                    $stmt = $db_con->prepare('select *  from doctors dt
                                        left join chuyenkhoa ck on dt.chuyenkhoa_id = ck.chuyenkhoa_id
                                        left join department dp on ck.chuyenkhoa_id = dp.department_chuyenkhoa_id
                                        where dp.department_id =' . $_POST['id'] );
                    $stmt->execute();
                    $count = $stmt->rowCount();
                    if($count>0){
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <input type="checkbox" name="doctor[]" id="doctor" value="<?php echo $row['doctor_id']; ?>">
                            <?php echo $row['doctor_name_vn']; ?>
                        </input>
                        <?php
                        }
                    }
                    else{
                        echo "Hiện tại không có bác sĩ nào thuộc khoa phòng này";
                    }
}
?>
