
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
         
            <td>Department Name VN</td>
            <td>
                <input id="deparment_temp" type="text" value="1" name="deparment_temp" style='display:none;'  readonly="readonly"/>
                <select onchange="changeBusiness(this.value)" id="department_temp_id" name="department_temp_id" class="form-control">
                    <option value="">Choose Department</option>
                    <?php
                    require_once '../../../../connect/dbconfig.php';
                    $stmt = $db_con->prepare("SELECT * FROM department");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <option value="<?php echo $row['department_id']; ?>"><?php echo $row['department_name_vn']; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
            <tr style='display:none;' id='business'>
                <td>Doctor Name VN</td>
                <td id='message' >
                    
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
     
