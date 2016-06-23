<?php
include_once '../../../../connect/dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM specialities WHERE speciality_id=:id");
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
 		<input type='hidden' name='id' value='<?php echo $row['speciality_id']; ?>' />
        <tr>
            <td>Speciality Name VN</td>
            <td><input type='text' name='speciality_name' class='form-control' value="<?php echo $row['speciality_name'];  ?>" required /></td>
        </tr>
        <tr>
            <td>Speciality Description VN</td>
            <td>
                <textarea id="speciality_descript" name='speciality_descript' class='form-control' required>
                    <?php echo $row['speciality_descript']; ?>
                </textarea>
                <script type=”text/javascript”>CKEDITOR.replace('speciality_descript',
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
            <td>Speciality Name EN</td>
            <td><input type='text' name='speciality_name_en' class='form-control'  value="<?php echo $row['speciality_name_en']; ?>" required></td>
        </tr>
        <tr>
            <td>Speciality Description EN</td>
            <td>
                <textarea id="speciality_descript_en" name='speciality_descript_en' class='form-control' placeholder='EX: We offer clean facilities and comprehensive medical services..' required>
                    <?php echo $row['speciality_descript_en']; ?>
                </textarea>
                <script type=”text/javascript”>CKEDITOR.replace( 'speciality_descript_en',
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
     
