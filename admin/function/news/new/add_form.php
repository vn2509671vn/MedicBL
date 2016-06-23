
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
            <td>Categogy Title VN</td>
            <td><input type='text' name='cat_title_vn' class='form-control' placeholder='Ex : Tin tức' required /></td>
        </tr>
 
        <tr>
            <td>Categogy Description VN</td>
            <td>
                <textarea id="cat_descrip_vn" name='cat_descrip_vn' class='form-control' placeholder=Ex: mô tả tin tức" required />
                <script type=”text/javascript”>CKEDITOR.replace('cat_descrip_vn',
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
            <td>Categogy Title EN</td>
            <td>
                <textarea  name='cat_title_en' class='form-control' placeholder='Ex: News.. ' required />
            </td>

        </tr>
        <tr>
            <td>Categogy Description EN</td>
            <td>
                <textarea id="cat_descrip_en" name='cat_descrip_en' class='form-control' placeholder=Ex: descript news.." required />
                <script type=”text/javascript”>CKEDITOR.replace('cat_descrip_en',
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
    		<span class="glyphicon glyphicon-plus"></span> Save Category
			</button>  
            </td>
        </tr>
 
    </table>
</form>
     
