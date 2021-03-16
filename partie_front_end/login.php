<?php include'navbar.php'; ?>
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
            <form name="login" class="formulaire-login" action="">
               
                <label>  EMAIL  </label><br>
                <input  type="email" name="email" id="email"  >
                
                <label>  PASSWORD  </label><br>
                <input name="password"  type="password" id="password"  >

         <input type="submit" id="button-login"  value="Login">  

         <p style="color: red;font-size: 15px;text-align: center;" id="error2"></p>

               </form>


               

        </div>
    </div>
    <script src="validation-login.js"></script>
    <?php include'footer.php'; ?>
    </body>