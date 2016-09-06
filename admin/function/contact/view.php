<?php
require_once '../../../connect/dbconfig.php';
	if($_POST)
	{
	    $id = $_POST['id'];
	    $stmt=$db_con->prepare("SELECT * FROM contact WHERE contact_id=:id");
    	$stmt->execute(array(':id'=>$id));	
	    $row=$stmt->fetch(PDO::FETCH_ASSOC);
	}
?>
    <div id="load_popup_modal_contant" class="" role="dialog">

    <div class="modal-dialog modal-md">
	<form role="form" class="form-inline" role="form" id="form_load_content_id">
    <!-- Start: Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title"><b><?php echo $row['contact_user_title']; ?></b></h2>
      </div>
	    <div id="validation-error"></div>
  <div class="cl"></div>
	    <div class="modal-body">
        	
                        <h3><b>Content: </b><?php echo $row['contact_user_content']; ?></h3>
                        <h3><b>Code: </b><?php echo $row['contact_maso_bn']; ?></h3>
                        <h3><b>Name: </b><?php echo $row['contact_user_name']; ?></h3>
                        <h3><b>Porn: </b><?php echo $row['contact_ngaysinh']; ?></h3>
                        <h3><b>Mail: </b><?php echo $row['contact_user_mail']; ?></h3>
                        <h3><b>Phone: </b><?php echo $row['contact_user_phone']; ?></h3>
                        <h3><b>Address: </b><?php echo $row['contact_user_address']; ?></h3>
                        <h3><b>Feedback: </b><?php echo $row['contact_loaithacmac']; ?></h3>
                        <h3><b>Contact with Customer: </b><?php if($row['contact_lienlac'] = 1)
                                        {
                                            echo "Yes";
                                        }
                                        else {
                                            echo "No";
                                        }
                                ?></h3>
                        <h3><b>Booking Date: </b><?php echo $row['contact_date']; ?></h3>
                        <h3><b>Accept: </b><img class='img_accept<?php echo $row['contact_id']; ?>' <?php if($row['contact_approve']==0){ ?> src="../../assets/img/reject.png" <?php } else { ?> src="../../assets/img/accept.png" <?php }?>  width="40px"/></h3>
                        
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	  </form>
      </div>
    </div>
  </div>
  </div>


