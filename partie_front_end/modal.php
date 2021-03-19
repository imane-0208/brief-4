<!-- <?php include'navbar.php'; ?>
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
 
<div class="eddit">
  <a   href="#" class="bottom-eddit" > ADD NEW </a>
</div>

<div class="popup-add" >
  
     <form class="container-add" name="containeradd" action="">
   <div class="close"> <i class="far fa-times-circle"> </i> </div>
   <div class="icone-title" > <i   class="fas fa-tasks"></i>   </div>
   <div>  <i class="fas fa-user-circle"></i> <input  type="text" placeholder="   First Name"  pattern="[A-Za-z]{3}" ></div>
   <div>  <i class="fas fa-user-circle"></i> <input type="text" placeholder="   Last Name"  pattern="[A-Za-z]{3}"> </div>
   <div>  <i class="far fa-calendar-alt"></i> <input type="date" placeholder="    Date Of Birth"> </div>
   <div>  <i class="fas fa-envelope"></i> <input type="email" placeholder="    Email" pattern="^[a-zA-Z0-9.-]+[a-zA-Z0-9]+@[a-z]+.[a-z]{2,3}$"> </div>
   <div> <i class="fas fa-envelope"></i> <input type="text" placeholder="  Sector"  pattern="[A-Za-z]{3}"> </div>
   <div class="submit-add"> <input type="submit"  value="Add" > </div>
   <div style="color:red;"  id="erroradd">  </div>
     
</form> 

</div>
   


<script >
  
document.querySelector(".bottom-eddit").addEventListener("click", function () {

document.querySelector(".popup-add ").style.display = "flex";

})

document.querySelector(".close").addEventListener("click", function () {

document.querySelector(".popup-add ").style.display = "none";

})

document.forms["containeradd"].addEventListener("submit", function (e) {
var erreur;
var inputs = this.getElementsByTagName("input");



for (var i = 0; i < inputs.length; i++) {
    if (!inputs[i].value) {
        erreur = "Veuillez renseigner tous les champs";
        break;
    }

}

if (erreur) {
    e.preventDefault();
    document.querySelector("#erroradd").innerHTML = erreur;
    return false;
} else {
    alert('votre inscription est envoyer');
    document.querySelector("#erroradd").innerHTML = "";
}



})
</script>

</body>
</html> -->