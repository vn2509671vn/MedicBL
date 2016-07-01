
<style type="text/css">
#dis{
	display:none;
}
#eventForm .form-control-feedback {
    top: 0;
    right: -15px;
}
</style>
<script>
$(document).ready(function() {
    $('#doctor_porn')
        .datepicker({
            autoclose: true,
            format: 'yyyy/mm/dd',
            startDate: '1800/01/01',
            endDate: '2020/12/30'
        });
});
</script>
    <div id="dis">
    <!-- here message will be displayed -->
	</div>
        
 	
	 <form method='post' id='emp-SaveForm' action="#">
 
    <table class='table table-bordered'>
        <input id="doctor_temp" type="text" value="1" name="doctor_temp" style='display:none;'  readonly="readonly"/>
        <tr>
            <td>
                <label class="control-label">
                Doctor Name VN
                </label>
            </td>
            <td><input type='text' name='doctor_name_vn' class='form-control' placeholder='EX : Nội trú' required /></td>
        </tr>
        <!--<tr>-->
        <!--    <td>-->
        <!--        <label class="control-label">-->
        <!--        Doctor Name EN-->
        <!--        </label>-->
        <!--    </td>-->
        <!--    <td><input type='text' name='doctor_name_en' class='form-control' placeholder='EX : Inpatient services' required></td>-->
        <!--</tr>-->
         <tr>
            <td>
                 <label class="control-label">
                     Porn
                 </label>
            </td>
             <td>
                <div class="form-group">
                        <div class="input-group input-append date" id="doctor_porn">
                            <input type="text" class="form-control" name="doctor_porn" />
                            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                    </div>
             </td>
         </tr>
        <!-- <tr>-->
        <!--    <td>-->
        <!--        <label class="control-label">Doctor Image</label>-->
        <!--    </td>-->
        <!--    <td>-->
        <!--        <input type="file" name="doctor_image"/>-->
        <!--        <input type="button" class="btn btn-info" value="Upload" onclick = "return changeBusiness()"/>-->
        <!--    </td>-->
        <!--</tr>-->
        <div class="form-group">
            <td>
                <label class="control-label">Doctor Image</label>
            </td>
            <td>
                <div class="">
                             <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="doctor_image" type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                             <input type="button" class="btn btn-info" value="Upload" onclick = "return changeBusiness()"/>
                </div>
            </td>    
                        
         </div>
         <tr>
            <td>
                <label class="control-label">
                Doctor Speciality
                </label>
            </td>
            <td>
                <select name="speciality_id" class="form-control">
                    <option value="" >Choose Doctor Speciality</option>
                    <?php
                    require_once '../../../../connect/dbconfig.php';
                    $stmt = $db_con->prepare("SELECT * FROM specialities");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <option value="<?php echo $row['speciality_id']; ?>"><?php echo $row['speciality_name']; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label class="control-label">
                Doctor ChuyenKhoa
                </label>
            </td>
            <td>
                <select name="chuyenkhoa_id" class="form-control">
                    <option value="" >Choose Doctor ChuyenKhoa</option>
                    <?php
                    require_once '../../../../connect/dbconfig.php';
                    $stmt = $db_con->prepare("SELECT * FROM chuyenkhoa");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <option value="<?php echo $row['chuyenkhoa_id']; ?>"><?php echo $row['chuyenkhoa_name']; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label class="control-label">
                Doctor Experience VN
                </label>
                </td>
            <td>
                <textarea id="doctor_experience_vn" name='doctor_experience_vn' class='form-control' placeholder='EX: We offer clean facilities and comprehensive medical services..' required />
                <script type=”text/javascript”>CKEDITOR.replace( 'doctor_experience_vn',
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
                <label class="control-label">
                Doctor Call
                </label>
            </td>
            <td><input type='number' name='doctor_call' class='form-control' placeholder='EX : 0919669112' required /></td>
        </tr>
        <tr>
            <td>
                <label class="control-label">
                Doctor Experience EN
                </label>
            </td>
            <td>
                <textarea id="doctor_experience_en" name='doctor_experience_en' class='form-control' placeholder='EX: We offer clean facilities and comprehensive medical services..' required />
                <script type=”text/javascript”>CKEDITOR.replace( 'doctor_experience_en',
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
                <label class="control-label">
                Doctor Qualification VN
                </label>
            </td>
            <td>
                <textarea id="doctor_qualification_vn" name='doctor_qualification_vn' class='form-control' placeholder='EX: We offer clean facilities and comprehensive medical services..' required />
                <script type=”text/javascript”>CKEDITOR.replace( 'doctor_qualification_vn',
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
                <label class="control-label">
                Doctor Qualification EN
                </label>
            </td>
            <td>
                <textarea id="doctor_qualification_en" name='doctor_qualification_en' class='form-control' placeholder='EX: We offer clean facilities and comprehensive medical services..' required />
                <script type=”text/javascript”>CKEDITOR.replace( 'doctor_qualification_en',
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
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Save this Record
			</button>  
            </td>
        </tr>
 
    </table>
</form>
     
