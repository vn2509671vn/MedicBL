<?php
include_once '../../../../connect/dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM department WHERE department_id=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	$department_chuyenkhoa_id= $row['department_chuyenkhoa_id'];
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
 		<input id="change_department_temp" type="text" value="<?php echo $row['department_images'] ?>" name="change_department_temp" style='display:none;'  readonly="readonly"/>
        <input id="change_department_position_temp" type="text" value="<?php echo $row['department_position'] ?>" name="change_department_position_temp" style='display:none;'  readonly="readonly"/>
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
        <tr class="form-group">
            <td>
                <label class="control-label">Department Image</label>
            </td>
            <td>
                <div class="">
                             <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;">
                                    <img src="../../../upload/image_department/<?php echo $row['department_images']; ?>"> </img>
                                </div>
                                
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input id="change_department_image" name="change_department_image" type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                             <input type="button" class="btn btn-info" value="Upload" onclick = "return changeDepartment()"/>
                </div>
            </td>
         </tr>
        <tr class="form-group">
            <td>
                <label class="control-label">Department Position Image</label>
            </td>
            <td>
                <div class="">
                             <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;">
                                    <img src="../../../upload/image_department/<?php echo $row['department_position']; ?>"> </img>
                                </div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input id="change_department_position_image" name="change_department_position_image" type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                             <input type="button" class="btn btn-info" value="Upload" onclick = "return changeDepartment_Position()"/>
                </div>
            </td>
         </tr>
        <tr>
            <td>Department Chuyenkhoa</td>
            <td>
                <select name="department_chuyenkhoa_id" class="form-control">
                    <?php
                    require_once '../../../../connect/dbconfig.php';
                    $stmt = $db_con->prepare("SELECT * FROM chuyenkhoa");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <option <?php if($row['chuyenkhoa_id'] == $department_chuyenkhoa_id) {echo 'selected';} ?> value="<?php echo $row['chuyenkhoa_id']; ?>"><?php echo $row['chuyenkhoa_name']; ?></option>
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
     
