<?php
include_once '../../../../connect/dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM posts WHERE post_id=:id");
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
        <input type='hidden' name='id' value='<?php echo $row['post_id']; ?>' />
 		<input id="post_temp" type="text" value="<?php echo $row['post_image']; ?>" name="post_temp" style='display:none;'  readonly="readonly"/>
        <tr>
            <td>Post Title VN</td>
            <td><input type='text' name='post_title' class='form-control' value='<?php echo $row['post_title']; ?>' required /></td>
        </tr>

        <tr>
            <td>Post Title EN</td>
            <td><input type='text' name='post_title_en' class='form-control' value='<?php echo $row['post_title_en']; ?>' required></td>
        </tr>
        <tr>
            <td>
                <label class="control-label">
                Post Category
                </label>
            </td>
            <td>
                <select name="cat_id" class="form-control">
                    <option value="" >Choose Post Category</option>
                    <?php
                    $post_cat_id = $row['cat_id'];
                    require_once '../../../../connect/dbconfig.php';
                    $stmt1 = $db_con->prepare("SELECT * FROM category");
                    $stmt1->execute();
                    while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <option value="<?php echo $row1['cat_id']; ?>"
                                <?php if($row1['cat_id'] == $post_cat_id){
                                    echo " selected='selected'";
                                }?>
                        >
                            <?php echo $row1['cat_title_vn']; ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label class="control-label">Post Status</label>
            </td>
            <td>
                <label>
                    <input type="radio" name="post_status" value="1" <?php if($row['post_status'] == 1){ echo "checked";} ?> > OK
                </label>
                <label>
                    <input type="radio" name="post_status" value="0" <?php if($row['post_status'] == 0){ echo "checked";} ?> > NOT OK
                </label>
            </td>
        </tr>
        <div class="form-group">
            <td>
                <label class="control-label">Post Image</label>
            </td>
            <td>
                <div class="">
                             <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;">
                                    <img src="../../../upload/tintuc/<?php echo $row['post_image']; ?>"> </img>
                                </div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="post_image" type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                             <input type="button" class="btn btn-info" value="Upload" onclick = "return changePost()"/>
                </div>
            </td>
         </div>
        <tr>
            <td>Post Excerpt VN</td>
            <td>
                <textarea id="post_excerpt" name='post_excerpt' class='form-control'
                          placeholder='EX: Cung cáp các dịch vụ nội trú tốt nhất,.. ' required>
                    <?php echo $row['post_excerpt'];?>
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
            <td>Post Excerpt EN</td>
            <td>
                <textarea id="post_excerpt_en" name='post_excerpt_en' class='form-control'
                          placeholder='EX: Cung cáp các dịch vụ nội trú tốt nhất,.. ' required>
                    <?php echo $row['post_excerpt_en'];?>
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
            <td>Post Content VN</td>
            <td>
                <textarea id="post_content" name='post_content' class='form-control'
                          placeholder='EX: Cung cáp các dịch vụ nội trú tốt nhất,.. ' required>
                    <?php echo $row['post_content'];?>
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
            <td>Post Content EN</td>
            <td>
                <textarea id="post_content_en" name='post_content_en' class='form-control'
                          placeholder='EX: Cung cáp các dịch vụ nội trú tốt nhất,.. ' required>
                    <?php echo $row['post_content_en'];?>
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
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Save Updates
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
