
<?php
session_start();
include 'connection.php';
echo"rafyh";
if(isset($_POST['submit'])){ 
 
  $idapprenant = $_SESSION["id"];
  $delete="DELETE FROM  apprenant  WHERE  apprenant.id_apprenant=$idapprenant " ;
  echo"oussama";
  mysqli_query($con,$delete); 
 header('location:dashboard.php');
}