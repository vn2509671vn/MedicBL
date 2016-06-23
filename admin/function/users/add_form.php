
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
            <td>Name</td>
            <td><input type='text' name='user_name' class='form-control' placeholder='EX : Trung Ut' required /></td>
        </tr>
 
        <tr>
            <td>Account</td>
            <td><input type='text' name='user_username' class='form-control' placeholder='EX : Enter Account' required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type='password' name='user_password' class='form-control' placeholder='EX: Enter password' required></td>
        </tr>
        <tr>
            <td>Is Admin</td>
            <td><input type='radio' name='user_admin' class='form-control' value="admin"></td>
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
     
