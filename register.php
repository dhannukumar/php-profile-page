<!DOCTYPE html>
<html>
	<head>
		<title>Register Page</title>
		<style>
			
			#rest{border-radius: 10px 10px 10px 10px;
				 width: 500px;
				
				margin: 10px;
				
	
				text-align: center;
				background-color: orange;
				
				
			}
			#west{border-radius: 10px 10px 10px 10px;
				text-align: center;
				background-color: #37C9CC;
			}
			input{border-radius: 10px 10px 10px 10px;
				text-align: center;
				width: 350px;
				height: 50px;
			}
			#container{
				
				 
			}
		
		</style>
	</head>
<body style="display: flex; justify-content: center;)">
	
	<?php
	
	if (!isset($_POST['submit'])){
		?>
	<div id="container">	
	<div id="rest">
		<h1 style="padding-top: 10px; color: white; font-size: 40px;">Step1</h1>
		<p style="padding-bottom:10px; color: blue; font-size: 20px;">CREATE A PROFILE ACCOUNT</p>
	</div>
		
		<div id="west">
			<h1 style="padding-top: 10px; color: white; font-size: 40px;">WELCOME</h1>
			<p style="color: blue; font-size: 20px;">New Parents Start Here</p>
			<form action="#" method="post">
			<input type="text" name="name" placeholder="Name......"><br><br>
			<input type="text" name="name1" placeholder="UserName......."><br><br>
			<input type="password" name="password" placeholder="Password...."><br><br>
			<input type="password" name="password1" placeholder="Confirm-Password....."><br><br>
			<input type="text" name="email" placeholder="Email......"><br><br>
			<input type="text" name="email1" placeholder="Confirm-email....."><br><br>
				
			<input type="submit" name="submit" style="margin: 10px; font-size: 20px; color: #AA0000;"><br>

		   </form>
		</div>
	</div>	
	<?php } else{
		$name = $_POST['name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		?>
	<div style="width:100%; height: 100px; background-color: yellowgreen; display: flex; flex-direction: column; align-items: center;">
	<?php
		// echo "<div style='width: 100%; height: 50px; background-color: blue;'>";
		echo " your name is : $name </br>";
		// echo "</div>";
		echo "your password is : $password </br>";
		echo "your email id is : $email </br>";
	}
	?>
	</div>

</body>
</html>