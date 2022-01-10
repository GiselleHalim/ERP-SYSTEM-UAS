<!DOCTYPE	html>
<html>
<head>
	<link rel="icon" href="assets/images/logo.jpg" type="image/ico" />
<title> L'inverse Official Website </title>
<link	rel="stylesheet"	type="text/css"	href="assets/css/login.css">
</head>
<body>
					<form	action="login.php"	method="post">
					 <h2>LOGIN</h2>
					 <?php	if	(isset($_GET['error']))	{	?>
					 <p	class="error"><?php	echo	$_GET['error'];	?></p>
					 <?php	}	?>
					 <label>Username</label>
					 <input	type="text"	name="uname"	placeholder="Username"><br>
					 <label>Password</label>
					 <input	type="password"	name="password"	placeholder="Password" id="password"><br>
					 <button	type="submit">Login</button>
					 <a href="signup.php" class="na">Create an account</a>
					</form>
</body>
</html>
