<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

p {
font-family: garamond;
color:#242526;
font-size: 18px;
}

h2 {
font-size: 2em;
font-family: calibri;
}

form {
  font-family: Arial;
}

.container {
  background-color: black;
}
.container2 {
  background-color: black;
  color: white;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

input[type=text], input[type=submit] {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type=checkbox] {
  margin-top: 16px;
}

input[type=submit] {
  background-color: black;
  color: white;
  border: none;
}

input[type=submit]:hover {
  opacity: 0.8;
}
</style>
<body>
  <center>
  <h1 style="color:black"><b>CONTACT US</b></h1>
  <hr>
  <p> Have any questions? You could contact us at : </p>
  <p><i class="fa fa-envelope"></i> support.linverse@gmail.com</p>
  <p><i class="fa fa-instagram"></i> l_inverse.zpt</p>
  <p> or through our ZEPETO account : </p>
  <img src="assets/images/contactme.jpg" style= "height:258px" "width:230px">
</center><br>

<br><br>
<form action="/action_page.php">
  <div class="container2">
    <center>
    <h2>SUBSCRIBE TO OUR NEWSLETTER?</h2>
    <label>Subscribe to get 15% on your 1st purchase, receive updates, access to exclusive deals, and more!</label>
  </center>
  </div>

  <div class="container" style="background-color:white">
    <input type="text" placeholder="Email address" name="mail" required>
    <label style="color:black">
      <input type="checkbox" checked="checked" name="subscribe"> Weekly Newsletter
    </label>
  </div>

  <div class="container">
    <input type="submit" value="Subscribe">
  </div>
</form>
<br>

</body>
</html>
