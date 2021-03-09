<!DOCTYPE html>

<?php include'navbar.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <title>page sign up</title>
</head>
<body>

    <div class="sign-up">

        <div class="signup-left">
          <p>Sign UP Now</p>
          <i class="far fa-check-circle"></i>
        </div>

        <div class="signup-right">
            <form class="formulaire-signup" name="inscription" action="">
              
                <p>USERNAME</p>
                <input   type="text" name="username" id="username"   >
                <p>EMAIL</p>
                <input  type="email" name="email" id="email"   >
                <p>ROLE</p>
                <select id="role" name="role" required >
                    <option></option>
                    <option>Enseignement </option>
                    <option>Apprenant</option>

                </select>
                <p>PASSWORD</p>
                <input  type="password" name="password" id="password"   >
                <p> REPEAT PASSWORD</p>
                <input  type="password" name="password-confirmation" id="password-confirmation" >

                <input type="submit" id="button-signup" value="Sign up">
                <span>        Or       <a href="login.html">       Log in</a></span>
               </form>
               <p style="color: red;font-size: 15px;" id="error"></p>

                
             
               

        </div>
    </div>
    <?php include'footer.php'; ?>
