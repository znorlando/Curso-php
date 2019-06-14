 <?php
 
 $conn = new mysqli("localhost", "root", "", "cursophp7"); 

 if ($conn->connect_error) {
     

    echo "Error: " .$conn->connect_error;
  



 }
 
 ?>