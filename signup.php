<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body>

<style>
body {
  background-color: black;
}
</style>

     <form action="signup-check.php" method="post">
     	<h2>Sign Up</h2>


          <label>Name</label>
                         <input type="text"
                      name="name"
                      placeholder="Name"><br>


     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password" id="password"><br>

          <label>Re-enter your password</label>
          <input type="password"
                 name="re_password"
                 placeholder="Password" id="re_password">
           		  <script>
           								 function myFunction() {
             							 var x = document.getElementById("password");
                           var y = document.getElementById("re_password");
             						 if (x.type === "password" && y.type === "password") {
               				 x.type = "text";
                       y.type = "text;"
             			 } else {
               	 x.type = "password";
                 y.type = "password";
             	}
           	}
           </script>

     	<button type="submit">Sign Up</button>
          <a href="index.php">Already have an account?</a>
     </form>
</body>
</html>
