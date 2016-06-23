
<style type="text/css">
#dis{
	display:none;
}
</style>


	
    
    <div id="dis">
    <!-- here message will be displayed -->
	</div>
        
 	
	 <form method='post' id='emp-SaveForm' action="#">
 
    <table class='table table-bordered'>
 
        <tr>
            <td>Department Name VN</td>
            <td><input type='text' name='department_name_vn' class='form-control' placeholder='EX : Nội tim mạch' required /></td>
        </tr>
        <tr>
            <td>Department Description VN</td>
            <td>
                <textarea id="department_descript_vn" name='department_descript_vn' class='form-control' placeholder='EX: Cung cáp các dịch vụ nội trú tốt nhất,.. ' required />
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
            <td><input type='text' name='department_name_en' class='form-control' placeholder='EX : Inpatient services' required></td>
        </tr>
        <tr>
            <td>Department Description EN</td>
            <td>
                <textarea id="department_descript_en" name='department_descript_en' class='form-control' placeholder='EX: We offer clean facilities and comprehensive medical services..' required />
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
                        <option value="<?php echo $row['department_type_id']; ?>"><?php echo $row['department_type_name_vn']; ?></option>
                        <?php
                    }
                    ?>
                </select>

            </td>
        </tr>
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Save this Record
			</button>  
            </td>
        </tr>
 
    </table>
</form>
     
