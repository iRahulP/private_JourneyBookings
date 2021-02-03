<?php

	require'includes/connect.php';
	session_start();


	if(isset($_SESSION['username'])){
		header('Location: index.php');
	}

?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
  
  
      <link rel="stylesheet" href="css1/style.css">

  
</head>

<body>
  <body>
<div class="container">
	<section id="content">
		<form action="" method="POST">
			<h1>Login Form</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="username" />
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password" />
			</div>
			<div>
				<input name ="submit" type="submit" value="Let me in" />
			</div>
<div><a href="Register.php">No Account, <b>Regster Instead</b></a>
</div>
		
		</form><!-- form -->
	</section><!-- content -->
</div><!-- container -->
</body>
  
    <script  src="js1/index.js"></script>

<?php
	if(isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password'])){

		$password = $_POST['password'];
		$username = $_POST['username'];

		$q = "SELECT username,password FROM login WHERE username = '$username' && password = '$password'";

		$result = $db->query($q);
		$rea =  $result->num_rows;
		if($rea == 1){
			$_SESSION['username'] = $username;
			header("Location: index.php");			
		} else {
			echo "Error";
		}

	}

?>
</body>
</html>
