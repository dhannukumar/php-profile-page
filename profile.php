<!DOCTYPE html>
<html>
<head>
	<title>proflie</title>
</head>
<style type="text/css">
	body{
		background-color: blue;	
	}
	.main-container{
		border: 2px solid black;
		display: block;
		height: 700px;
		width: 99.5%;
		background-image: url(img13.jpg);
	}
	.main{
		display: block;
		/*background-image: url('');*/
	}
	.text{
		margin-top: 5%;
		margin-left: 28%;
		border: 2px solid black;
		width: 50%;
		height: 60px;
		background-color: white;
		align-items: center;
		justify-content: center;
		display: flex;
		border-radius: 15px 15px 15px 15px;
	}
	.img1{
		position: relative;
		overflow: hidden;
		padding: 5%;
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.img img{
		 max-width: 100%;
   		-moz-transition: all 0.3s;
  		-webkit-transition: all 0.3s;
  		transition: all 0.3s;
	}
	.img1:hover img{
		-moz-transform: scale(1.1);
  		-webkit-transform: scale(1.1);
  		transform: scale(1.1);
	}
	.box{
		/*padding: 5%;*/
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.box1, .box2{
		border: 2px solid black;
		height: 60px;
		width: 350px;
		border-radius: 10px 10px 10px 10px;
		justify-content: center;
		text-align: center;
		background-color: orange;
		align-items: center;
		display: flex;
	}
	.box1, .box2:hower{

	}
</style>
<body> 
<!--
	<?php 
	include('login.php');
	?>
-->
	<div class="main-container">
		<div class="main">
			<div class="text">
				<p style="color: orange; font-size: 30px;">Welcome to My Profile Page</p>
			</div>
			<div class="img1">
				<img src="study1.jpg" style="border-radius: 50%; height: 300px; width: 300px; margin-right: 20%;">
				<img src="study2.jpg" style="border-radius: 50%; height: 300px; width: 300px;">
			</div>
			<div class="box">
				<button  type="button" class="box1" style="margin-right: 20%;"><a href="register.php" style="text-decoration: none; color: white; font-size: 15px;">Register and Create a<br> New Profile Page</a></button>
				<button type="button" class="box2"><a href="login.php" style="text-decoration: none; color: white; font-size: 15px;">Login and Edit an<br> Existing Profile Page</a></button>
			</div>
		</div>
	</div>
</body>
</html>