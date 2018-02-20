<!-- Modal Tutorial http://www.webslesson.info/2016/09/php-ajax-display-dynamic-mysql-data-in-bootstrap-modal.html   -->
<?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("127.0.0.1","sdonnellan","","AGRI1",3306);  
      $query = "SELECT * FROM MART WHERE MartId = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>ID</label></td>  
                     <td width="70%">'.$row["MartId"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["MartName"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Province</label></td>  
                     <td width="70%">'.$row["MartProvince"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Address</label></td>  
                     <td width="70%">'.$row["MartAddress"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Contact Number</label></td>  
                     <td width="70%">'.$row["MartContact"].'</td>  
                </tr>  
                <tr>  
                    <td width="30%"><label>Image</label></td>
                     <td width="70%"><img src="http://www.thatsfarming.com/uploads/news/1200x800_8-208a347d63693d952b7c8a3b7338ac58/4337-sixmilebridge.png" alt="" border=3 height=400 width=400></img></td>  
                </tr>  
            
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>