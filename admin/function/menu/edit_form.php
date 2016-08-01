<?php
include_once '../../../connect/dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM menu WHERE menu_id=:id");
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
 		<input type='hidden' name='id' value='<?php echo $row['menu_id']; ?>' />
        <tr>
            <td>Menu Name VN</td>
            <td><input type='text' name='menu_name_vn' class='form-control'  value='<?php echo $row['menu_name_vn'];  ?>' required /></td>
        </tr>
         <tr>
            <td>Menu Description VN</td>
            <td>
                <textarea id="menu_descript_vn" name='menu_descript_vn' class='form-control' required>
                    <?php echo $row['menu_descript_vn']; ?>
                </textarea>
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
            <td><input type='text' name='menu_name_en' class='form-control' value='<?php echo $row['menu_name_en']; ?>' required></td>
        </tr>
        <tr>
            <td>Menu Description VN</td>
            <td>
                <textarea id="menu_descriptt_en" name='menu_descript_en' class='form-control'  required>
                    <?php echo $row['menu_descript_en']; ?>
                </textarea>
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
            <td><input type='text' name='menu_link' class='form-control' value='<?php echo $row['menu_link']; ?>' required></td>
        </tr>
        <tr>
            <td>
                <label class="control-label">
                Menu Parent
                </label>
            </td>
            <td>
                <select name="menu_id" class="form-control">
                    <option value="" >Choose Menu Parent</option>
                    <?php
                    $menuid = $row['menu_parent'];
                    require_once '../../../connect/dbconfig.php';
                    $stmt1 = $db_con->prepare("SELECT * FROM menu where menu_parent=0");
                    $stmt1->execute();
                    while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <option value="<?php echo $row1['menu_id']; ?>"
                                <?php if($row1['menu_id'] == $menuid){
                                    echo 'selected';
                                }?>
                        >
                            <?php echo $row1['menu_name_vn']; ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Menu Position</td>
            <td><input type='number' name='menu_pos' class='form-control' value='<?php echo $row['menu_pos']; ?>' required></td>
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
     
