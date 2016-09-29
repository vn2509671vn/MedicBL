<?php
include_once '../../../connect/dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM infor_hos WHERE infor_id=:id");
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
        <input type='hidden' name='id' value='<?php echo $row['infor_id']; ?>' />
        <input id="logo_temp" type="text" value="<?php echo $row['infor_image']; ?>" name="logo_temp" style='display:none;'  readonly="readonly"/>
        <input id="advertise1_temp" type="text" value="<?php echo $row['infor_advertise1']; ?>" name="advertise1_temp" style='display:none;'  readonly="readonly"/>
        <input id="advertise2_temp" type="text" value="<?php echo $row['infor_advertise2']; ?>" name="advertise2_temp" style='display:none;'  readonly="readonly"/>
        <input id="advertise3_temp" type="text" value="<?php echo $row['infor_advertise3']; ?>" name="advertise3_temp" style='display:none;'  readonly="readonly"/>
        <tr>
            <td>
                <label class="control-label">Name VN</label>
            </td>
            <td><input type='text' name='infor_name' class='form-control' value="<?php echo $row['infor_name'];  ?>" required /></td>
        </tr>

        <tr>
            <td>
                <label class="control-label">Name VN EN</label>
            </td>
            <td><input type='text' name='infor_name_en' class='form-control' value="<?php echo $row['infor_name_en'];  ?>"  required></td>
        </tr>
        <tr>
            <td>
                <label class="control-label">Slogan</label>
            </td>
            <td><input type='text' name='infor_content' class='form-control' value="<?php echo $row['infor_content'];  ?>" required /></td>
        </tr>
        <tr class="form-group">
            <td>
                <label class="control-label">Logo</label>
            </td>
            <td>
                <div class="addLogo">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;">
                            <img src="../../../images/logo/<?php echo $row['infor_image']; ?>"> </img>
                        </div>
                        <div>
                            <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input id="infor_logo" name="infor_logo" type="file"></span>
                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                        </div>
                    </div>
                     <input type="button" class="btn btn-info" value="Upload" onclick = "return addLogo()"/>
                </div>
            </td>    
                        
         </tr>
        <tr>
            <td>
                <label class="control-label">Address VN</label>
            </td>
            <td>
                <textarea id="infor_address" name='infor_address' class='form-control' required>
                <?php echo $row['infor_address'];?>
                </textarea>
                <script type=”text/javascript”>CKEDITOR.replace('infor_address',
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
            <td>
                <label class="control-label">Address EN</label>
            </td>
            <td>
                <textarea id="infor_address_en" name='infor_address_en' class='form-control' required>
                    <?php echo $row['infor_address_en'];?>
                </textarea>
                <script type=”text/javascript”>CKEDITOR.replace('infor_address_en',
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
            <td>
                <label class="control-label">Phone</label>
            </td>
            <td><input type='text' name='infor_phone' class='form-control'  value="<?php echo $row['infor_phone'];  ?>" required /></td>
        </tr>
        <tr>
            <td>
                <label class="control-label">Email</label>
            </td>
            <td><input type='text' name='infor_email' class='form-control'  value="<?php echo $row['infor_email'];  ?>" required /></td>
        </tr>
        <tr>
            <td>
                <label class="control-label">Fax</label>
            </td>
            <td><input type='text' name='infor_fax' class='form-control'  value="<?php echo $row['infor_fax'];  ?>" required /></td>
        </tr>
        
        <tr class="form-group">
            <td>
                <label class="control-label">Advertise 1</label>
            </td>
            <td>
                <div class="addAdvertise1">
                             <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;">
                                    <img src="../../upload/infor_hos/<?php echo $row['infor_advertise1']; ?>"> </img>
                                </div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input id="infor_addAdvertise1" name="infor_addAdvertise1" type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                             <input type="button" class="btn btn-info" value="Upload" onclick = "return addAdvertise1()"/>
                </div>
            </td>    
                        
         </tr>
         <tr class="form-group">
            <td>
                <label class="control-label">Advertise 2</label>
            </td>
            <td>
                <div class="addAdvertise2">
                             <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;">
                                    <img src="../../upload/infor_hos/<?php echo $row['infor_advertise2']; ?>"> </img>
                                </div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input id="infor_addAdvertise2" name="infor_addAdvertise2" type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                             <input type="button" class="btn btn-info" value="Upload" onclick = "return addAdvertise2()"/>
                </div>
            </td>    
                        
         </tr>
         <tr class="form-group">
            <td>
                <label class="control-label">Advertise 3</label>
            </td>
            <td>
                <div class="addAdvertise3">
                             <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;">
                                    <img src="../../upload/infor_hos/<?php echo $row['infor_advertise3']; ?>"> </img>
                                </div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input id="infor_addAdvertise3" name="infor_addAdvertise3" type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                             <input type="button" class="btn btn-info" value="Upload" onclick = "return addAdvertise3()"/>
                </div>
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
     
