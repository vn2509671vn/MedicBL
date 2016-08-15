<style type="text/css">
    #dis {
        display: none;
    }
    #eventForm .form-control-feedback {
    top: 0;
    right: -15px;
}
</style>


<div id="dis">
    <!-- here message will be displayed -->
</div>


<form method='post' enctype="multipart/form-data"  id='emp-SaveForm' action="#">

    <table class='table table-bordered'>
        <input id="ehos_temp" type="text" value="1" name="ehos_temp" style='display:none;'  readonly="readonly"/>
        <tr>
            <td>
                <label class="control-label">Name VN</label>
            </td>
            <td><input type='text' name='infor_name' class='form-control' required /></td>
        </tr>

        <tr>
            <td>
                <label class="control-label">Name VN EN</label>
            </td>
            <td><input type='text' name='infor_name_en' class='form-control'  required></td>
        </tr>
        <tr class="form-group">
            <td>
                <label class="control-label">Logo</label>
            </td>
            <td>
                <div class="">
                             <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="department_image" type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                             <input type="button" class="btn btn-info" value="Upload" onclick = "return addInfor()"/>
                </div>
            </td>    
                        
         </tr>
        <tr>
            <td>
                <label class="control-label">Address VN</label>
            </td>
            <td>
                <textarea id="infor_address" name='infor_address' class='form-control' required>
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
            <td><input type='text' name='infor_phone' class='form-control' required /></td>
        </tr>
        <tr>
            <td>
                <label class="control-label">Fax</label>
            </td>
            <td><input type='text' name='infor_fax' class='form-control' required /></td>
        </tr>
        
        <tr class="form-group">
            <td>
                <label class="control-label">Advertise 1</label>
            </td>
            <td>
                <div class="">
                             <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="department_position_image" type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                             <input type="button" class="btn btn-info" value="Upload" onclick = "return addInfor()"/>
                </div>
            </td>    
                        
         </tr>
         <tr class="form-group">
            <td>
                <label class="control-label">Advertise 2</label>
            </td>
            <td>
                <div class="">
                             <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="department_position_image" type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                             <input type="button" class="btn btn-info" value="Upload" onclick = "return addInfor()"/>
                </div>
            </td>    
                        
         </tr>
         <tr class="form-group">
            <td>
                <label class="control-label">Advertise 3</label>
            </td>
            <td>
                <div class="">
                             <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="department_position_image" type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                             <input type="button" class="btn btn-info" value="Upload" onclick = "return addInfor()"/>
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
     
