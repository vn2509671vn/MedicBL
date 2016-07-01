<?php
include_once '../../../../connect/dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM department_type WHERE department_type_id=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
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
 		<input type='hidden' name='id' value='<?php echo $row['department_type_id']; ?>' />
        <tr>
            <td>Department Type Name VN</td>
            <td><input type='text' name='department_type_name_vn' class='form-control' value='<?php echo $row['department_type_name_vn'];?>' required /></td>
        </tr>
        <tr>
            <td>Department Type Description VN</td>
            <td>
                <textarea id="department_type_descript_vn" name='department_type_descript_vn' class='form-control'   required>
                    <?php echo $row['department_type_descript_vn'];?>
                </textarea>
                <script type=”text/javascript”>CKEDITOR.replace('department_type_descript_vn',
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
            <td>Deparment Type Name EN</td>
            <td><input type='text' name='department_type_name_en' class='form-control' value='<?php echo $row['department_type_name_en'];?>' required></td>
        </tr>

        <tr>
            <td>Department Type Description EN</td>
            <td>
                <textarea id="department_type_descript_en" name='department_type_descript_en' class='form-control'  required >
                    <?php echo $row['department_type_descript_en'];?>
                </textarea>
                <script type=”text/javascript”>CKEDITOR.replace( 'department_type_descript_en',
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
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Save Updates
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
