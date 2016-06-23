
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
            <td>Speciality Name VN</td>
            <td><input type='text' name='speciality_name' class='form-control' placeholder='EX : Thạc sĩ - Bác sĩ' required /></td>
        </tr>
        <tr>
            <td>Speciality Description VN</td>
            <td>
                <textarea id="speciality_descript" name='speciality_descript' class='form-control' placeholder='EX: Cung cáp các dịch vụ nội trú tốt nhất,.. ' required />
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
            <td><input type='text' name='speciality_name_en' class='form-control' placeholder='EX : Inpatient services' required></td>
        </tr>
        <tr>
            <td>Speciality Description EN</td>
            <td>
                <textarea id="speciality_descript_en" name='speciality_descript_en' class='form-control' placeholder='EX: We offer clean facilities and comprehensive medical services..' required />
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
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Save this Record
			</button>  
            </td>
        </tr>
 
    </table>
</form>
     
