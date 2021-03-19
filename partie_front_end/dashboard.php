
<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<link rel="stylesheet" href="styles/style.css">
    <title>schoolary</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

	<header>
		<div class="logo">
            <img src="images/graduation.svg" alt="">
            <h6>Schoola<span>Ry</span></h6>
        </div>
		<div class="menu-toggle"></div>

		<nav>
			<ul>
				<li><a href="index.php" >Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="contact_us.php">Contact US</a></li>
				<li><a href="#">Student Infos</a></li>
				<li><a href="login.php">Log Out</a></li>
				
			</ul>
		</nav>
	</header>

	
	<center><h4>Student Infos</h4></center>

	
		<!-- <h2>Student Infos</h2> -->
		<div class="head_dash">
			<div> <a class="bottom-add" onclick="document.getElementById('popup-add').style.display = 'flex'"> <button><i class="far fa-plus-square"></i>  <span>add new </span></button></a> 
			<input type="text" placeholder="search"></div>
		</div>

<!-- html popup add -->
		<div class="popup-add" id="popup-add" >
  
     <form class="container-add" name="container-add" action="add-apprenant.php"  method="POST">
   <div class="close-add"> <i class="far fa-times-circle"> </i> </div>
   <div class="icone-title" > <i   class="fas fa-tasks"></i>   </div>
   <div>  <i class="fas fa-user-circle"></i> <input  type="text" placeholder="   First Name" name="first_name"   ></div>
   <div>  <i class="fas fa-user-circle"></i> <input type="text" placeholder="   Last Name" name="last_name" > </div>
   <div>  <i class="far fa-calendar-alt"></i> <input type="date" placeholder="    Date Of Birth" name="date_birth"> </div>
   <div>  <i class="fas fa-envelope"></i> <input type="email" placeholder="    Email" name="email" pattern="^[a-zA-Z0-9.-]+[a-zA-Z0-9]+@[a-z]+.[a-z]{2,3}$"> </div>
   <div> <i class="fas fa-envelope"></i> <input type="text" placeholder="  Sector" name="sector"  pattern="[A-Za-z]{3}"> </div>
   <div class="submit-add"> <input type="submit" name="submit" value="Add" > </div>
   <div style="color:red;"  id="error-add">  </div>
     
</form> 

</div>

<!-- html popup eddit -->

<div class="popup-edit" id="popup-edit" >
  
<form class="container-edit" name="container-edit" action="update.php" method="POST">
<div class="close-edit"> <i class="far fa-times-circle"> </i> </div>
<div class="icone-title" ><i class="fas fa-edit"></i>   </div>
                         <input  id="idapprenant"  name="idapprenant" type="number"    value"" >
<div>  <i class="fas fa-user-circle"></i> <input  id="firstname" name="firstname"  type="text" placeholder="   First Name"  value"" ></div>
<div>  <i class="fas fa-user-circle"></i> <input id="lastname" name="lastname" type="text" placeholder="   Last Name"   value""> </div>
<div>  <i class="far fa-calendar-alt"></i> <input id="naissance" name="naissance"   type="date" placeholder="    Date Of Birth" value""> </div>
<div>  <i class="fas fa-envelope"></i> <input id="email" name="email"  type="email" placeholder="    Email" pattern="^[a-zA-Z0-9.-]+[a-zA-Z0-9]+@[a-z]+.[a-z]{2,3}$" value""> </div>
<div> <i class="fas fa-envelope"></i> <input id="sector" name="sector" type="text" placeholder="  Sector"   value""> </div>
<div class="submit-edit"> <input type="submit" name="submit"  value="Edit" > </div>
<div style="color:red;"  id="error-edit">  </div>
  
</form>  

</div>

<!-- html popup delet -->
<div class="popup-delete" id="popup-delete">

   <div class="container-delete" name="container-delete" action="delete.php" method="POST" >
                               
     <div class="close-delete"> <i class="far fa-times-circle"> </i> </div> 
    <div class="icone-title"><i  class="fas fa-exclamation-triangle"></i> </div>
    <div> <p> Are sure you want continue this <br>operation! </p></div>
    <div class="submit-delet"> <a href="delete.php?del=<?php echo $row['id_apprenant']; ?>" type="submit" name="del"  value="Delete" >Submit</a> </div>
</div>
</div>
	
	<table>
  <!-- <caption>Statement Summary</caption> -->
  
  <thead>
            <tr>
				<th class="none"></th>
				<th class="none">Id</th>
				<th>First name</th>
				<th>Last name</th>
				<th class="none"> naissance</th>
				<th>Email</th>
				<th class="none">Sector</th>
				<th>Operation</th>
			</tr>
  </thead>
  <tbody>

  <?php
  $query="SELECT *FROM apprenant";
  $result=mysqli_query($con,$query); 
  
  while ($row = mysqli_fetch_array($result)) { ?>
    
    <tr class="data">
				<td data-label="" class="none"><span><i class="far fa-user"></span></i></td>
				<td data-label="Id" class="none"> <?php echo $row['id_apprenant'];?>   </td>
				<td data-label="First name">  <?php echo $row['firstname']; ?>   </td>
				<td data-label="Last name">  <?php echo $row['lastname']; ?>     </td>
				<td data-label="age" class="none">  <?php echo $row['age']; ?>    </td>
				<td data-label="Email">  <?php echo $row['email']; ?> </td>
				<td data-label="Sector" class="none">  <?php echo $row['sector']; ?>  </td>
        
        <?php $idapprenant= $row['id_apprenant'];?>
        <?php $firstname= $row['firstname'];?>
        <?php $lastname= $row['lastname'];?>
        <?php $age= $row['age'];?>
        <?php $email= $row['email'];?>
        <?php $sector= $row['sector'];?>


				<td data-label="Operation"><a class="botton-edit" ><span class="edit"><i onclick="edit('<?php echo $idapprenant; ?>','<?php echo  $firstname; ?>','<?php echo $lastname; ?>' , '<?php echo $age; ?>','<?php echo $email; ?>','<?php echo $sector; ?>')" class="fas fa-pencil-alt"></i></span> </a> 

                                   <a class="botton-delete" name="del1" href="delete.php?del=<?php echo $row['id_apprenant']; ?>"><span class="delete"><i class="fas fa-trash"></i></span></a>  </td>
			</tr>

            <?php } ?>
 

  

     	
  </tbody>
</table>


	
	<script src="https://kit.fontawesome.com/756f1fbb0c.js" crossorigin="anonymous"></script>
	<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <script>
	$(document).ready(function(){
		$('.menu-toggle').click(function(){
			$('.menu-toggle').toggleClass('active')
			$('nav').toggleClass('active')
		})
	})
	</script>

<script >


// donction du page eddi
	// popup add
  
  document.querySelector(".bottom-add").addEventListener("click", function () {
  
  document.querySelector(".popup-add ").style.display = "flex";
  
  })
  
  document.querySelector(".close-add").addEventListener("click", function () {
  
  document.querySelector(".popup-add ").style.display = "none";
  
  })
  
  document.forms["container-add"].addEventListener("submit", function (e) {
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
	  document.querySelector("#error-add").innerHTML = erreur;
	  return false;
  } else {
	  alert('votre inscription est envoyer');
	  document.querySelector("#error-add").innerHTML = "";
  }
  
  
  
  })

 
  var modal = document.getElementById('popup-edit');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
  var modal = document.getElementById('popup-delete');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal = document.getElementById('popup-add');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
  
//   popup delete
// document.querySelector(".botton-delete").addEventListener("click", function () {
  
//   document.querySelector(".popup-delete ").style.display = "flex";
  
//   })
  
  document.querySelector(".close-delete").addEventListener("click", function () {
  
  document.querySelector(".popup-delete ").style.display = "none";
  
  })


//   popup edit
// document.querySelector(".botton-edit").addEventListener("click", function () {
  
//   document.querySelector(".popup-edit ").style.display = "flex";
  
//   })
  
  document.querySelector(".close-edit").addEventListener("click", function () {
  
  document.querySelector(".popup-edit ").style.display = "none";
  
  })
  
  document.forms["container-edit"].addEventListener("submit", function (e) {
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
	  document.querySelector("#error-edit").innerHTML = erreur;
	  return false;
  } else {
	  alert('votre inscription est envoyer');
	  document.querySelector("#error-edit").innerHTML = "";
  }
  
  
  
  })


// console.log(id,name,email,pass,classe);


  </script>

  <script>

function edit(idapprenant,firstname,lastname,age,email,sector) {

document.querySelector('#popup-edit').style.display='flex'

document.querySelector('#idapprenant').value = idapprenant;
document.querySelector('#firstname').value = firstname;
document.querySelector('#lastname').value = lastname;
document.querySelector('#naissance').value = age;
document.querySelector('#email').value = email;
document.querySelector('#sector').value = sector;}
  </script>
  
</body>
</html>