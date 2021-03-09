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
				<li><a href="index.php" class="active" >Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="contact_us.php">Contact Us</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="sign_up.php">Sign Up</a></li>
				<li><a href="#"><i class="fas fa-search"></i></a></li>
			</ul>
		</nav>
	</header>


	



	
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
  
</body>
</html>