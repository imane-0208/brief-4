<?php include'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <title>contact-us</title>
   
</head>
<body>
       
    <h2 class="title-contact">  Contact us</h2>

    <center> <form class="formualire-contact" action="">

    
        <input  type="text"  placeholder="    Name*" required >
        <input  type="email" placeholder="    E-mail*" required >
        <input  type="tel" placeholder="    Phone*" required >
        <input  type="text" placeholder="    Subject*" required >
        <textarea id="contact-message" placeholder="  Message..." rows="10" cols="84" required ></textarea>
        <input type="submit" id="button-contact" value="Envoyer">

       </form>
    </center>

    <h2 class="title-information"> Contact information</h2>

    <div class="contact-information">

      <div class="blok1">
          <img src="images/pin (1).svg" alt="icone localisation">
          <p>Youcode Safi, Avenue <br>Zerktouni, Safi</p>
      </div>

      <div class="blok2">
          <img src="images/mail (1).svg" alt="icone email">
          <p> info@demmolink.org</p>
      </div>

      <div class="blok3">
          <img src="images/phone (1).svg" alt="icone phone">
          <p>Call Us:1-800-123-1234</p>
      </div>
        
    </div>


    <h2 class="title-localisation">  Our Localisation</h2>

    
     <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3372.68046476342!2d-9.237707885460496!3d32.29356788112057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac211719897669%3A0x6f59fa5bb517f58a!2sYouCode%20Safi!5e0!3m2!1sfr!2sma!4v1613463084128!5m2!1sfr!2sma" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


        <?php include'footer.php'; ?>