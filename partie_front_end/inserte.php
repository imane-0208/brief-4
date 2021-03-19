<?php

require 'connection.php';


if(isset($_POST['submit'])){ 
    $username= $_POST['username'];
    $email= $_POST['email'];
    $role= $_POST['role'];
    $password= $_POST['password'];

    $insert="INSERT INTO membre (username,email,id_role,password_user) VALUES('$username','$email','$role','$password')";
  
    mysqli_query($con,$insert);
    
    header('location:login.php');

    
}


?>
