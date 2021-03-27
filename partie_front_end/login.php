<?php include'navbar.php';
include'connection.php';


  if(isset($_POST['submit'])){
    
      $email=$_POST['email'];
      $password=$_POST['password'];

      $sql= "SELECT * FROM membre WHERE email= '".$email."' AND password_user='".$password."' AND id_role=1";
      $exec= mysqli_query($con,$sql);

      if(mysqli_num_rows($exec)==1){
        header('location:dashboard.php');
      }
      else{
        echo 'invalid login';
      }
  }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <title>page log in</title>
</head>
<body>
    <div class="log-in">
         

        <div class="login-left">
          <p>Login Now</p>
          <i class="far fa-check-circle"></i>
        </div>

        <div class="login-right">
            <p id="title-login">Log in</p>
            <form name="login" class="formulaire-login" action="login.php" method="POST">
               
                <label>  EMAIL  </label><br>
                <input  type="email" name="email" id="email"  >
                
                <label>  PASSWORD  </label><br>
                <input name="password"  type="password" id="password"  >

         <input type="submit" id="button-login" name="submit" value="Login">  

         <p style="color: red;font-size: 15px;text-align: center;" id="error2"></p>

               </form>


               

        </div>
    </div>
    <script src="validation-login.js"></script>
    <?php include'footer.php'; ?>
    </body>