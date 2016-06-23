<?php
include_once '../../../../connect/dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM user WHERE user_id=:id");
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
 		<input type='hidden' name='id' value='<?php echo $row['user_id']; ?>' />
        <tr>
            <td>Name</td>
            <td><input type='text' name='user_name' class='form-control' value='<?php echo $row['user_name']; ?>' required /></td>
        </tr>

        <tr>
            <td>Account</td>
            <td><input type='text' name='user_username' class='form-control' value='<?php echo $row['user_username']; ?>' required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type='password' name='user_password' class='form-control' value='<?php echo $row['user_password']; ?>' required></td>
        </tr>
        <tr>
            <td>Is Admin</td>
            <td><input type='radio' name='user_admin' class='form-control' value='<?php echo $row['user_admin']; ?>'></td>
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
     
