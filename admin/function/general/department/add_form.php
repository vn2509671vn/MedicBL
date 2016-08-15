
<style type="text/css">
#dis{
	display:none;
}
#eventForm .form-control-feedback {
    top: 0;
    right: -15px;
}
</style>


	
    
    <div id="dis">
    <!-- here message will be displayed -->
	</div>
        
 	
	 <form method='post' id='emp-SaveForm' action="#">
 
    <table class='table table-bordered'>
        <input id="department_temp" type="text" value="1" name="department_temp" style='display:none;'  readonly="readonly"/>
        <input id="department_position_temp" type="text" value="1" name="department_position_temp" style='display:none;'  readonly="readonly"/>
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
        <tr class="form-group">
            <td>
                <label class="control-label">Department Image</label>
            </td>
            <td>
                <div class="">
                             <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input id="department_image" name="department_image" type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                             <input type="button" class="btn btn-info" value="Upload" onclick = "return addDepartment()"/>
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
                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input id="department_position_image" name="department_position_image" type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                             <input type="button" class="btn btn-info" value="Upload" onclick = "return addDepartment_Position()"/>
                </div>
            </td>    
                        
         </tr>
        <tr>
            <td>Department ChuyenKhoa</td>
            <td>
                <select name="chuyenkhoa_id" class="form-control">
                    <?php
                    require_once '../../../../connect/dbconfig.php';
                    $stmt = $db_con->prepare("SELECT * FROM chuyenkhoa");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <option value="<?php echo $row['chuyenkhoa_id']; ?>"><?php echo $row['chuyenkhoa_name']; ?></option>
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
     
