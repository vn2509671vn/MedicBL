<?php  
 
 $output = '';  
 if(isset($_POST["export_excel"]))  
 {
     require_once '../../../connect/dbconfig.php';

            $stmt = $db_con->prepare("SELECT * FROM user ORDER BY user_id DESC");
            $stmt->execute();
            $count =1;
            $output .= '  
                    <table class="table" bordered="1">  
                         <tr>  
                              <th>Id</th>  
                              <th>First Name</th>  
                              <th>Last Name</th>  
                         </tr>';  
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $output .= '  
                         <tr>  
                              <td>' . $count . '</td>  
                              <td>' . $row["user_name"] . '</td>  
                              <td>' . $row["user_username"] . '</td>  
                         </tr>'; 
                    $count = $count +1;
               }  
           $output .= '</table>';  
           header("Content-Type: application/xls");   
           header("Content-Disposition: attachment; filename=download.xls");  
           echo $output;  
      }
 ?>  