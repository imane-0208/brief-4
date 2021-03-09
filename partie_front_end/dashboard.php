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
				<li><a href="#" class="active" >Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact US</a></li>
				<li><a href="#">Student Infos</a></li>
				<li><a href="#">Log Out</a></li>
				
			</ul>
		</nav>
	</header>

    <div class="dash">
    <div class="head_dash">
		<div class="title_dash"><h2>Student Infos</h2></div>
		<div class="btn_dash">
			<div><button><i class="far fa-plus-square"></i>  <span>add new </span></button>
			<input type="text" placeholder="search"></div>
		</div>
	</div>
	<div class="dash_content">
		<table>
			<tr>
				<th class="none"></th>
				<th class="none">Id</th>
				<th>First name</th>
				<th>Last name</th>
				<th class="none">age</th>
				<th>Email</th>
				<th class="none">Sector</th>
				<th>Operation</th>
			</tr>
			<tr class="data">
				<td class="none"><span><i class="far fa-user"></span></i></td>
				<td class="none">1</td>
				<td>Ihab</td>
				<td>Slimi</td>
				<td class="none">18</td>
				<td>ihabslimi@gmail.com</td>
				<td class="none">SVT</td>
				<td><span class="edit"><i class="fas fa-pencil-alt"></i></span>  <span class="delete"><i class="fas fa-trash"></i></span></td>
			</tr>
			<tr class="data">
				<td class="none"><span><i class="far fa-user"></span></i></td>
				<td class="none">1</td>
				<td>Ihab</td>
				<td>Slimi</td>
				<td class="none">18</td>
				<td>ihabslimi@gmail.com</td>
				<td class="none">SVT</td>
				<td><span class="edit"><i class="fas fa-pencil-alt"></i></span>  <span class="delete"><i class="fas fa-trash"></i></span></td>
			</tr>
			<tr class="data">
				<td class="none"><span><i class="far fa-user"></span></i></td>
				<td class="none">1</td>
				<td>Ihab</td>
				<td>Slimi</td>
				<td class="none">18</td>
				<td>ihabslimi@gmail.com</td>
				<td class="none">SVT</td>
				<td><span class="edit"><i class="fas fa-pencil-alt"></i></span>  <span class="delete"><i class="fas fa-trash"></i></span></td>
			</tr>
			<tr class="data">
				<td class="none"><span><i class="far fa-user"></span></i></td>
				<td class="none">1</td>
				<td>Ihab</td>
				<td>Slimi</td>
				<td class="none">18</td>
				<td>ihabslimi@gmail.com</td>
				<td class="none">SVT</td>
				<td><span class="edit"><i class="fas fa-pencil-alt"></i></span>  <span class="delete"><i class="fas fa-trash"></i></span></td>
			</tr>
            
		</table>
	</div>
    </div>


	
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