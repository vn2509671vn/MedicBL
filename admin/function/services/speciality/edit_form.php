<?php
include_once '../../../../connect/dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT ck.chuyenkhoa_id,ck.chuyenkhoa_name,ck.chuyenkhoa_name_en,ck.chuyenkhoa_descript,ck.chuyenkhoa_descript_en,sv.services_id,sv.services_name,ck.chuyenkhoa_muinhon FROM chuyenkhoa ck LEFT JOIN services sv on ck.services_id = sv.services_id WHERE chuyenkhoa_id=:id");
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
 		<input type='hidden' name='id' value='<?php echo $row['chuyenkhoa_id']; ?>' />
        <tr>
            <td>ChuyenKhoa Name VN</td>
            <td><input type='text' name='chuyenkhoa_name' class='form-control' value='<?php echo $row['chuyenkhoa_name']; ?>' required /></td>
        </tr>
        <tr>
            <td>ChuyenKhoa Name EN</td>
            <td><input type='text' name='chuyenkhoa_name_en' class='form-control' value='<?php echo $row['chuyenkhoa_name_en']; ?>' required /></td>
        </tr>
<!--        =========================================================================-->
        <tr>
            <td>Services Description VN</td>
            <td>
                <textarea id="chuyenkhoa_descript" name='chuyenkhoa_descript' class='form-control'
                          placeholder='EX: Cung cáp các dịch vụ nội trú tốt nhất,.. ' required>
                    <?php echo $row['chuyenkhoa_descript'];?>
                </textarea>
                <script type=”text/javascript”>CKEDITOR.replace('chuyenkhoa_descript',
                    {
                        filebrowserBrowseUrl: '../../../assets/editor/ckfinder/ckfinder.html',
                        filebrowserImageBrowseUrl: '../../../assets/editor/ckfinder/ckfinder.html?type=Images',
                        filebrowserUploadUrl: '../../../assets/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        filebrowserImageUploadUrl: '../../../assets/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
                    });
                </script>
            </td>
        </tr>
<!--        =========================================================================-->
        <tr>
            <td>Services Description EN</td>
            <td>
                <textarea id="chuyenkhoa_descript_en" name='chuyenkhoa_descript_en' class='form-control'
                          placeholder='EX: Cung cáp các dịch vụ nội trú tốt nhất,.. ' required>
                    <?php echo $row['chuyenkhoa_descript_en'];?>
                </textarea>
                <script type=”text/javascript”>CKEDITOR.replace('chuyenkhoa_descript_en',
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
            <td>Into Services</td>
            <td>
                <select name="services_id" class="form-control">
                    <?php
                    $services_id = $row['services_id'];
                    $stmt1=$db_con->prepare("SELECT * FROM services");
                    $stmt1->execute();
                        while($row1=$stmt1->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <option
                                value="<?php echo $row1['services_id']; ?>"
                                <?php if($row1['services_id'] == $services_id){
                                    echo " selected='selected'";
                                }?>
                            >
                                <?php echo $row1['services_name']; ?>
                            </option>
                            <?php
                        }
                    ?>
                </select>

            </td>
        </tr>
        <tr>
            <td>
                ChuyenKhoa Leading
            </td>
            <td>
                <label>
                    <input type="radio" name="chuyenkhoa_muinhon" value="1"
                        <?php if($row['chuyenkhoa_muinhon'] == 1){ echo "checked";} ?>> YES
                </label>
                <label>
                    <input type="radio" name="chuyenkhoa_muinhon" value="0" <?php if($row['chuyenkhoa_muinhon'] == 0){ echo "checked";} ?>> NO
                </label>
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
     
