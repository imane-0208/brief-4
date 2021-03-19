<?php
require 'connection.php';


if(isset($_POST['submit'])){ 
    $idapprenant= $_POST['idapprenant'];
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $age= $_POST['naissance'];
    $email= $_POST['email'];
    $sector= $_POST['sector'];
    $firstname= $_POST['firstname'];

    $insert1="UPDATE  apprenant set  firstname='$firstname' ,lastname=' $lastname',age='$age',email='$email',sector='$sector'  WHERE id_apprenant=$idapprenant" ;
  
    mysqli_query($con,$insert1); 
    
    header('location:dashboard.php');
    
}



?>