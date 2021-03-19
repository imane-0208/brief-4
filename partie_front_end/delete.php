<?php
include 'connection.php';
?>
<?php

if(isset($_GET['del'])){ 
 
  $idapprenant = $_GET['del'];
  $delete="DELETE FROM  apprenant  WHERE  apprenant.id_apprenant=$idapprenant " ;

  mysqli_query($con,$delete); 
 header('location:dashboard.php');
}