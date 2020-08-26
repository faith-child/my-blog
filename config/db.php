<?php
  
  $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  
  if(mysqli_connect_errno()){
    
    echo 'Faied to connect to SQL' . mysqli_connect_errno();
  }
 ?>
