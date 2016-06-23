
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
            <td>Department Type Name VN</td>
            <td><input type='text' name='department_type_name_vn' class='form-control' placeholder='EX : Phòng Ban Nội trú' required /></td>
        </tr>
        <tr>
            <td>Department Type Description VN</td>
            <td>
                <textarea id="department_type_descript_vn" name='department_type_descript_vn' class='form-control' placeholder='EX: Cung cáp các dịch vụ nội trú tốt nhất,.. ' required />
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
            <td><input type='text' name='department_type_name_en' class='form-control' placeholder='EX : Department Inpatient' required></td>
        </tr>

        <tr>
            <td>Department Type Description EN</td>
            <td>
                <textarea id="department_type_descript_en" name='department_type_descript_en' class='form-control' placeholder='EX: We offer clean facilities and comprehensive medical services..' required />
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
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Save this Record
			</button>  
            </td>
        </tr>
 
    </table>
</form>
     
