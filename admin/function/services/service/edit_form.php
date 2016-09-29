<?php
include_once '../../../../connect/dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM services WHERE services_id=:id");
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
	<!--http://vietjack.com/cau-truc-du-lieu-va-giai-thuat/sap-xep-chen-trong-c.jsp-->
	<!--http://freetuts.net/thuat-toan-sap-xep-chen-trong-php-18.html-->
        
 	
	 <form method='post' id='emp-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type='hidden' name='id' value='<?php echo $row['services_id']; ?>' />
        <tr>
            <td>Services Name VN</td>
            <td><input type='text' name='services_name' class='form-control' value="<?php echo $row["services_name"]; ?>" required /></td>
        </tr>
 
        <tr>
            <td>Services Name EN</td>
            <td><input type='text' name='services_name_en' class='form-control' value="<?php echo $row["services_name_en"]; ?>" required></td>
        </tr>
        <tr>
            <td>Services Sort</td>
            <td><input type='number' name='services_sort' class='form-control' value="<?php echo $row["services_sort"]; ?>" required></td>
        </tr>
        <tr>
            <td>Services Description VN</td>
            <td>
                <textarea id="descript_vn" name='services_descript' class='form-control'  required >
                    <?php echo $row["services_descript"]; ?>
                </textarea>
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
                <textarea id="descript_en" name='services_descript_en' class='form-control' required >
                    <?php echo $row["services_descript_en"];  ?>
                </textarea>
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
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Save Updates
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
