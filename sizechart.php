<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
    p {
    font-family: garamond;
    color:#242526;
    font-size: 18px;
    }

    nav {
        display: flex;
        justify-content: space-between;
    }

    .nav-links {
        flex: 1;
        text-align: center;
    }

    .nav-links ul li {
        list-style: none;
        display: inline-block;
        padding: 4px 50px;
        position: relative;
    }

    .nav-links ul li a {
        color: black;
        text-decoration: none;
        font-size: 20px;
    		font-weight: bold;
    }

    .nav-links ul li::after {
        content: "";
        width: 0%;
        height: 3px;
        background: #555555;
        display: block;
        margin: auto;
        transition: 0.7s;
    }

    .nav-links ul li:hover::after {
        width: 100%;
    }
    </style>
  </head>
  <body>
    <center>
    <h1 style="color:black">SIZE CHART</h1>
    <hr>
    <p>To make sure the clothes that you buy fits you perfectly, please see the guide to know your size.</p>
    <p>Click the menu to read the guides for each gender.</p>
  </center>
    <nav>
        <div class="nav-links" id="navLinks">
            <ul>
                <li><a href="indexlinverse.php?page=womensize">WOMEN</a></li>
                <li><a href="indexlinverse.php?page=mensize">MEN</a></li>
            </ul>
        </div>
    </nav>
  </body>
</html>
