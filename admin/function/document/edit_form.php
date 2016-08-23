<?php
require_once '../../../connect/dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM vanban WHERE vanban_id=:id");
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
    <input id="vanban_update_temp" type="text" value="<?php echo $row[$vanban_link]; ?>" name="vanban_update_temp" style='display:none;'  readonly="readonly"/>
    <input name="id" type="text" value="<?php echo $row[vanban_id]; ?>" style='display:none;'  readonly="readonly"/>
        <tr>
            <td>
                <label class="control-label">Name VN</label>
            </td>
            <td><input type='text' name='vanban_name_vn' value="<?php echo $row[vanban_name_vn]; ?>" class='form-control' required /></td>
        </tr>

        <tr>
            <td>
                <label class="control-label">Name VN EN</label>
            </td>
            <td><input type='text' name='vanban_name_en' value="<?php echo $row[vanban_name_en]; ?>" class='form-control'  required></td>
        </tr>
        <tr class="form-group">
            <td>
                <label class="control-label">Link</label>
            </td>
            <td>
                 <input id="vanban_file" value="<?php echo $row[vanban_link]; ?>" type="file" class="filestyle" data-icon="false">
                 <input type="button" class="btn btn-info" value="Upload" onclick = "return updateFile()"/>
            </td>    
                        
         </tr>
         <tr>
            <td>
                <label class="control-label">Type</label>
            </td>
            <td>
                <select name="vanban_type" class="form-control">
                        <option <?php if($row['vanban_type'] == word)
                                {
                                    echo " selected='selected'";
                                }?> value="word">Word</option>
                        <option <?php if($row['vanban_type'] == rar)
                                {
                                    echo " selected='selected'";
                                }?> value="rar">Rar</option>
                        <option<?php if($row['vanban_type'] == excel)
                                {
                                    echo " selected='selected'";
                                }?>  value="excel">Excel</option>
                        <option <?php if($row['vanban_type'] == pdf)
                                {
                                    echo " selected='selected'";
                                }?>  value="pdf">Pd</option>
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
     
