<?php
require_once '../../../connect/dbconfig.php';
	if($_POST)
	{
	    $id = $_POST['id'];
	    $stmt = $db_con->prepare("SELECT * FROM contact where contact_id=:id");
        $stmt->bindParam(":id", $id);
		$stmt->execute();
		echo '<div class="content-loader">';
                            echo '<table cellspacing="0" width="100%" id="contact"
                                   class="table table-striped table-hover table-responsive">';
                                echo '<thead>';
                                echo '<tr>';
                                    echo '<th>ID</th>';
                                    echo '<th>Title</th>';
                                    echo '<th>Content</th>';
                                    echo '<th>Code</th>';
                                    echo '<th>Name</th>';
                                    echo '<th>Porn</th>';
                                    echo '<th>Mail</th>';
                                    echo '<th>Phone</th>';
                                    echo '<th>Address</th>';
                                    echo '<th>Feedback</th>';
                                    echo '<th>Contact with Customer</th>';
                                    echo '<th>Booking Date</th>';
                                echo '</tr>';
                                echo '</thead>';
                                echo '<tbody>';
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    echo '<tr>';
                                        echo '<td>' . $count .'</td>';
                                        echo '<td>' . $row['contact_user_title'] . '</td>';
                                        echo '<td>' . $row['contact_user_content'] .'</td>';
                                        echo '<td>' . $row['contact_maso_bn'] . '</td>';
                                        echo '<td>' . $row['contact_user_name'] . '</td>';
                                        echo '<td>' . $row['contact_ngaysinh'] . '</td>';
                                        echo '<td>' . $row['contact_user_mail'] . '</td>';
                                        echo '<td>' . $row['contact_user_phone'] . '</td>';
                                        echo '<td>' . $row['contact_user_address'] . '</td>';
                                        echo '<td>' . $row['contact_loaithacmac'] . '</td>';
                                        echo '<td>';
                                            if($row['contact_lienlac'] = 0)
                                                    {
                                                        echo "Liên lạc với KH";
                                                    }
                                                    else {
                                                        echo "Không liên lạc";
                                                    }
                                        echo '</td>';
                                        
                                        
                                        
                                        echo '<td>' . $row['contact_date'] . '</td>';
                                  	echo '</tr>';
                                echo '</tbody>';
                            echo '</table>';
	}
	}
?>