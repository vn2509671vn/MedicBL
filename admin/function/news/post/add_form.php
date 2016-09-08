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

<div id="loadding" style="display:none" ><img style="width:100px;" src="../../../upload/image_doctor/loading.gif"></div>
<form method='post' enctype="multipart/form-data"  id='emp-SaveForm' action="#">

    <table class='table table-bordered'>
        <input id="post_temp" type="text" value="1" name="post_temp" style='display:none;'  readonly="readonly"/>
        <input id="post_slider_temp" type="text" value="1" name="post_slider_temp" style='display:none;'  readonly="readonly"/>
        <tr>
            <td>
                <label class="control-label">Post Title VN</label>
            </td>
            <td><input type='text' name='post_title' class='form-control' required /></td>
        </tr>

        <tr>
            <td>
                <label class="control-label">Post Title EN</label>
            </td>
            <td><input type='text' name='post_title_en' class='form-control'  required></td>
        </tr>
        <div class="form-group">
            <td>
                <label class="control-label">Post Image</label>
            </td>
            <td>
                <div class="">
                             <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span>
                                    <span class="fileupload-exists">Change</span><input name="post_image" id="post_image" type="file" accept='image/*'></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                             <input type="button" class="btn btn-info" value="Upload" onclick = "return addPost()"/>
                </div>
            </td>    
                        
         </div>
        <tr>
            <td>
                <label class="control-label">Post Status</label>
            </td>
            <td>
                <label>
                    <input type="radio" name="post_status" value="1"> OK
                </label>
                <label>
                    <input type="radio" name="post_status" value="0" checked> NOT OK
                </label>
            </td>
        </tr>
         <div class="form-group">
            <td>
                <label class="control-label">Slider Image</label>
            </td>
            <td>
                <div class="">
                             <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span>
                                    <span class="fileupload-exists">Change</span><input name="post_image_slider" id="post_image_slider" type="file" accept='image/*'></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                             <input type="button" class="btn btn-info" value="Upload" onclick = "return addSlider()"/>
                </div>
            </td>    
                        
         </div>
        <tr>
            <td>
                <label class="control-label">Post Slider</label>
            </td>
            <td>
                <label>
                    <input type="radio" name="post_slider" value="1"> OK
                </label>
                <label>
                    <input type="radio" name="post_slider" value="0" checked> NOT OK
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <label class="control-label">Into Categogy </label>
            </td>
            <td>
                <select name="cat_id" class="form-control">
                    <?php
                    require_once '../../../../connect/dbconfig.php';
                    $stmt = $db_con->prepare("SELECT * FROM category");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_title_vn']; ?></option>
                        <?php
                    }
                    ?>
                </select>

            </td>
        </tr>
        <tr>
            <td>
                <label class="control-label">Post Excerpt VN</label>
            </td>
            <td>
                <textarea id="post_excerpt" name='post_excerpt' class='form-control'
                          placeholder='EX: Cung cáp các dịch vụ nội trú tốt nhất,.. ' required>
                </textarea>
                <script type=”text/javascript”>CKEDITOR.replace('post_excerpt',
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
                <label class="control-label">Post Excerpt EN</label>
            </td>
            <td>
                <textarea id="post_excerpt_en" name='post_excerpt_en' class='form-control'
                          placeholder='EX: Cung cáp các dịch vụ nội trú tốt nhất,.. ' required>
                </textarea>
                <script type=”text/javascript”>CKEDITOR.replace('post_excerpt_en',
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
                <label class="control-label">Post Content VN</label>
            </td>
            <td>
                <textarea id="post_content" name='post_content' class='form-control'
                          placeholder='EX: Cung cáp các dịch vụ nội trú tốt nhất,.. ' required>
                </textarea>
                <script type=”text/javascript”>CKEDITOR.replace('post_content',
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
                <label class="control-label">Post Content EN</label>
            </td>
            <td>
                <textarea id="post_content_en" name='post_content_en' class='form-control'
                          placeholder='EX: Cung cáp các dịch vụ nội trú tốt nhất,.. ' required>
                </textarea>
                <script type=”text/javascript”>CKEDITOR.replace('post_content_en',
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
     
