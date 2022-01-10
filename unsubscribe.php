<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
    form {
      font-family: Arial;
    }

    .container {
      background-color: black;
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

    p {
      color: black;
    }

  </style>
  <body>
    <center>
    <h1 style="color:black">UNSUBSCRIBE</h1>
  </center>
  <hr><br>
    <form action="/action_page.php">
        <center>
        <p>Please enter your email address below and we will remove you from our mailing list.</p>
      </center>

      <div class="container" style="background-color:white">
        <input type="text" placeholder="Email address" name="mail" required>
      </div>

      <div class="container">
        <input type="submit" value="UNSUBSCRIBE">
      </div>
    </form>
  </body>
</html>
