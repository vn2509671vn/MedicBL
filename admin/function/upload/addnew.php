<?php

error_reporting(~E_NOTICE); // avoid notice

require_once 'dbconfig.php';

if (isset($_POST['btnsave'])) {
    $username = $_POST['user_name'];// user name
    $userjob = $_POST['user_job'];// user email

    $imgFile = $_FILES['user_image']['name'];
    $tmp_dir = $_FILES['user_image']['tmp_name'];
    $imgSize = $_FILES['user_image']['size'];

    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date  = date('Y-m-d H:i:s');
    $cat_id =2;
    $post_status=1;
    $post_count=1;
    if (empty($username)) {
        $errMSG = "Please Enter Username.";
    } else if (empty($userjob)) {
        $errMSG = "Please Enter Your Job Work.";
    } else if (empty($imgFile)) {
        $errMSG = "Please Select Image File.";
    } else {
        $upload_dir = 'user_images/'; // upload directory

        $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension

        // valid image extensions
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

        // rename uploading image
        $userpic = rand(1000, 1000000) . "." . $imgExt;

        // allow valid image file formats
        if (in_array($imgExt, $valid_extensions)) {
            // Check file size '5MB'
            if ($imgSize < 5000000) {
                move_uploaded_file($tmp_dir, $upload_dir . $userpic);
            } else {
                $errMSG = "Sorry, your file is too large.";
            }
        } else {
            $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
    }
    // if no error occured, continue ....
    if (!isset($errMSG)) {

        $stmt = $db_con->prepare("INSERT INTO `posts`(`post_date`, `post_title`, `post_title_en`, `post_content`, `post_content_en`, `post_excerpt`, `post_excerpt_en`, `post_image`, `post_status`, `cat_id`, `post_count`) 
        VALUES(:p1,:p2,:p3,:p4,:p5,:p6,:p7,:p8,:p9,:p10,:p11)");

        $stmt->bindParam(":p1", $date);
        $stmt->bindParam(":p2", $username);
        $stmt->bindParam(":p3", $username);
        $stmt->bindParam(":p4", $userjob);
        $stmt->bindParam(":p5", $userjob);
        $stmt->bindParam(":p6", $username);
        $stmt->bindParam(":p7", $userjob);
        $stmt->bindParam(":p8", $userpic);
        $stmt->bindParam(":p9", $post_status);
        $stmt->bindParam(":p10", $cat_id);
        $stmt->bindParam(":p11", $post_count);
        if ($stmt->execute()) {
            $successMSG = "new record succesfully inserted ...";
            
        } else {
            $errMSG = "error while inserting....";
        }
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Upload, Insert, Update, Delete an Image using PHP MySQL - Coding Cage</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

</head>
<body>

<div class="container">


    <div class="page-header">
        <h1 class="h2">add new user. <a class="btn btn-default" href="index.php"> <span
                    class="glyphicon glyphicon-eye-open"></span> &nbsp; view all </a></h1>
    </div>


    <?php
    if (isset($errMSG)) {
        ?>
        <div class="alert alert-danger">
            <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
        </div>
        <?php
    } else if (isset($successMSG)) {
        ?>
        <div class="alert alert-success">
            <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
    }
    ?>

    <form method="post" enctype="multipart/form-data" class="form-horizontal">

        <table class="table table-bordered table-responsive">
            
            <tr>
                <td><label class="control-label">Username.</label></td>
                <td><input class="form-control" type="text" name="user_name" placeholder="Enter Username"
                           value="<?php echo $username; ?>"/></td>
            </tr>

            <tr>
                <td><label class="control-label">Profession(Job).</label></td>
                <td><input class="form-control" type="text" name="user_job" placeholder="Your Profession"
                           value="<?php echo $userjob; ?>"/></td>
            </tr>

            <tr>
                <td><label class="control-label">Profile Img.</label></td>
                <td><input class="input-group" type="file" name="user_image" accept="image/*"/></td>
            </tr>

            <tr>
                <td colspan="2">
                    <button type="submit" name="btnsave" class="btn btn-default">
                        <span class="glyphicon glyphicon-save"></span> &nbsp; save
                    </button>
                </td>
            </tr>

        </table>

    </form>

</div>


<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>