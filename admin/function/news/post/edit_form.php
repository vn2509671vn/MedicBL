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
        <tr>
            <td>Post Title VN</td>
            <td><input type='text' name='post_title' class='form-control' value='<?php echo $row['post_title']; ?>' required /></td>
        </tr>

        <tr>
            <td>Post Title EN</td>
            <td><input type='text' name='post_title_en' class='form-control' value='<?php echo $row['post_title_en']; ?>' required></td>
        </tr>
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
            <td>
                Upload Images
            </td>
            <td>
                <label class="control-label">Profile Img.</label>
                <input class="input-group" type="file" name="user_image" accept="image/*" />
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
     
