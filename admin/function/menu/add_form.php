
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
            <td>Menu Name VN</td>
            <td><input type='text' name='menu_name_vn' class='form-control' placeholder='EX : Enter Menu Name VN' required /></td>
        </tr>
         <tr>
            <td>Menu Description VN</td>
            <td>
                <textarea id="menu_descriptt_vn" name='menu_descript_vn' class='form-control' placeholder=Ex: mô tả tin tức" required />
                <script type=”text/javascript”>CKEDITOR.replace('menu_descript_vn',
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
            <td>Menu Name EN</td>
            <td><input type='text' name='menu_name_en' class='form-control' placeholder='EX : Enter Menu Nam English' required></td>
        </tr>
        <tr>
            <td>Menu Description VN</td>
            <td>
                <textarea id="menu_descriptt_en" name='menu_descript_en' class='form-control' placeholder=Ex: mô tả tin tức" required />
                <script type=”text/javascript”>CKEDITOR.replace('menu_descript_en',
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
            <td>Menu Link</td>
            <td><input type='text' name='menu_link' class='form-control' placeholder='EX: Enter link' required></td>
        </tr>
         <tr>
            <td>
                <label class="control-label">Parent Menu </label>
            </td>
            <td>
                <select name="menu_id" class="form-control">
                    <?php
                    require_once '../../../connect/dbconfig.php';
                    $stmt = $db_con->prepare("SELECT * FROM menu where menu_parent=0");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <option value="<?php echo $row['menu_id']; ?>"><?php echo $row['menu_name_vn']; ?></option>
                        <?php
                    }
                    ?>
                </select>

            </td>
        </tr>
        <tr>
            <td>Menu Position</td>
            <td><input type='number' name='menu_pos' class='form-control' placeholder='EX: Enter Position of Menu' required></td>
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
     
