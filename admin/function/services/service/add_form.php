
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
            <td>Services Name VN</td>
            <td><input type='text' name='services_name' class='form-control' placeholder='EX : Nội trú' required /></td>
        </tr>
 
        <tr>
            <td>Services Name EN</td>
            <td><input type='text' name='services_name_en' class='form-control' placeholder='EX : Inpatient services' required></td>
        </tr>
        <tr>
            <td>Services Sort</td>
            <td><input type='number' name='services_sort' class='form-control' placeholder='EX : number sort' required></td>
        </tr>
        <tr>
            <td>Services Description VN</td>
            <td>
                <textarea id="descript_vn" name='services_descript' class='form-control' placeholder='EX: Cung cáp các dịch vụ nội trú tốt nhất,.. ' required />
                <script type=”text/javascript”>CKEDITOR.replace('descript_vn',
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
            <td>Services Description EN</td>
            <td>
                <textarea id="descript_en" name='services_descript_en' class='form-control' placeholder='EX: We offer clean facilities and comprehensive medical services..' required />
                <script type=”text/javascript”>CKEDITOR.replace( 'descript_en',
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
     
