<?php
include_once '../../../../connect/dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM category WHERE cat_id=:id");
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
 		<input type='hidden' name='id' value='<?php echo $row['cat_id']; ?>' />
        <tr>
            <td>Categogy Title VN</td>
            <td><input type='text' name='cat_title_vn' class='form-control' value='<?php  echo $row['cat_title_vn']; ?>' required /></td>
        </tr>

        <tr>
            <td>Categogy Title EN</td>
            <td><input type='text' name='cat_title_en' class='form-control' value='<?php echo $row['cat_title_en']; ?>' required/></td>
        </tr>
        <tr>
            <td>Categogy Descript VN</td>
            <td><textarea name='cat_descrip_vn' class='form-control' required><?php echo $row['cat_descrip_vn']; ?></textarea></td>
        </tr>
        <tr>
            <td>Categogy Descript EN</td>
            <td><textarea name='cat_descrip_en' class='form-control' required><?php echo $row['cat_descrip_en']; ?></textarea></td>
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