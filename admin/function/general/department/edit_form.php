<?php
include_once '../../../../connect/dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM department WHERE department_id=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	$department_type = $row['department_type_id'];
}

?>
<style type="text/css">
#dis{
	display:none;
}
</style>


	
    
    <div id="dis">
    
	</div>
        
 	
	 <form method='post' id='emp-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type='hidden' name='id' value='<?php echo $row['department_id']; ?>' />
        <tr>
            <td>Department Name VN</td>
            <td><input type='text' name='department_name_vn' class='form-control' value='<?php echo $row['department_name_vn']; ?>' required /></td>
        </tr>
        <tr>
            <td>Department Description VN</td>
            <td>
                <textarea id="department_descript_vn" name='department_descript_vn' class='form-control' placeholder='EX: Cung cáp các dịch vụ nội trú tốt nhất,.. ' required>
                    <?php echo $row['department_descript_vn'];  ?>    
                </textarea>
                <script type=”text/javascript”>CKEDITOR.replace('department_descript_vn',
                    {
                        filebrowserBrowseUrl: '../../../assets/editor/ckfinder/ckfinder.html',
                        filebrowserImageBrowseUrl: '../../../assets/editor/ckfinder/ckfinder.html?type=Images',
                        filebrowserUploadUrl: '../../../assets/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        filebrowserImageUploadUrl: '../../../assets/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
                    });

                </script>
            </td>
        </tr>
        <tr>
            <td>Department Name EN</td>
            <td><input type='text' name='department_name_en' class='form-control' value='<?php echo $row['department_name_en']; ?>'  required></td>
        </tr>
        <tr>
            <td>Department Description EN</td>
            <td>
                <textarea id="department_descript_en" name='department_descript_en' class='form-control' required>
                    <?php echo $row['department_descript_en']; ?>
                </textarea>
                <script type=”text/javascript”>CKEDITOR.replace( 'department_descript_en',
                    {
                        filebrowserBrowseUrl: '../../../assets/editor/ckfinder/ckfinder.html',
                        filebrowserImageBrowseUrl: '../../../assets/editor/ckfinder/ckfinder.html?type=Images',
                        filebrowserUploadUrl: '../../../assets/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        filebrowserImageUploadUrl: '../../../assets/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
                    });
                </script>
            </td>
        </tr>
        <tr>
            <td>Department Image</td>
            <td><input type='file' name='department_images' class='form-control' required></td>
        </tr>
        <tr>
            <td>Department Position</td>
            <td><input type='file' name='department_postion' class='form-control' required></td>
        </tr>
        <tr>
            <td>Department Type</td>
            <td>
                <select name="department_type_id" class="form-control">
                    <?php
                    require_once '../../../../connect/dbconfig.php';
                    $stmt = $db_con->prepare("SELECT * FROM department_type");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <option <?php if($row[department_type_id] == $department_type) {echo 'selected';} ?> value="<?php echo $row['department_type_id']; ?>"><?php echo $row['department_type_name_vn']; ?></option>
                        <?php
                    }
                    ?>
                </select>

            </td>
        </tr>
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Save Updates
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
