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
        <input id="vanban_temp" type="text" value="1" name="vanban_temp" style='display:none;'  readonly="readonly"/>
        <tr>
            <td>
                <label class="control-label">Name VN</label>
            </td>
            <td><input type='text' name='vanban_name_vn' class='form-control' required /></td>
        </tr>

        <tr>
            <td>
                <label class="control-label">Name VN EN</label>
            </td>
            <td><input type='text' name='vanban_name_en' class='form-control'  required></td>
        </tr>
        <tr class="form-group">
            <td>
                <label class="control-label">Link</label>
            </td>
            <td>
                 <input id="vanban_file" type="file" class="filestyle" data-icon="false">
                 <input type="button" class="btn btn-info" value="Upload" onclick = "return addFile()"/>
            </td>    
                        
         </tr>
         <tr>
            <td>
                <label class="control-label">Type</label>
            </td>
            <td>
                <select name="vanban_type" class="form-control">
                        <option value="word">Word</option>
                        <option value="rar">Rar</option>
                        <option value="excel">Excel</option>
                        <option value="pdf">Pd</option>
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
     
