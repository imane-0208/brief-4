<?php

require 'connection.php';


if(isset($_POST['submit'])){ 
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $date_birth= $_POST['date_birth'];
    $email= $_POST['email'];
    $sector= $_POST['sector'];

    $insert="INSERT INTO apprenant (firstname,lastname,age,email,sector,id_role) VALUES('$first_name','$last_name','$date_birth',' $email', '$sector',1)";
  
    mysqli_query($con,$insert); 
    
    header('location:dashboard.php');
   
}


?>