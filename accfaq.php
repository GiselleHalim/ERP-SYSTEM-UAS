<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>

    .collapsible {
      background-color: #777;
      color: white;
      cursor: pointer;
      padding: 18px;
      width: 100%;
      border: none;
      text-align: left;
      outline: none;
      font-size: 15px;
    }

    .active, .collapsible:hover {
      background-color: black;
    }

    .content {
      padding: 0 18px;
      display: none;
      overflow: hidden;
      background-color: #f1f1f1;
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
        padding: 9px 50px;
        position: relative;
    }

    .nav-links ul li a {
        color: #111111;
        text-decoration: none;
        font-size: 16px;
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

    p, li, button {
    font-family: garamond;
    color: black;
    font-size: 16px;
    text-align: justify;
    }

    label {
      font-family: garamond;
      text-align: center;
      color: black;
      font-size: 16px;
    }

</style>
  </head>
  <body>
      <center>
      <h1 style="color:black">FREQUENTLY ASKED QUESTIONS</h1>
    </center>
    <hr><br>
    <nav>
        <div class="nav-links" id="navLinks">
            <ul>
                <li><a href="indexlinverse.php?page=faq">GENERAL</a></li>
                <li><a href="indexlinverse.php?page=c19">COVID-19 INQUIRIES</a></li>
                <li><a href="indexlinverse.php?page=payguide">PAYMENTS</a></li>
                <li><a href="indexlinverse.php?page=shipguide">SHIPPING</a></li>
                <li><a href="indexlinverse.php?page=return">RETURNS</a></li>
                <li><a href="indexlinverse.php?page=care">CARE</a></li>
                <li><a href="indexlinverse.php?page=accfaq">ACCOUNT</a></li>
                <li><a href="indexlinverse.php?page=contact">CONTACT US</a></li>
            </ul>
        </div>
    </nav>
<br><br>
    <button type="button" class="collapsible">What is a MyInverse?</button>
<div class="content">
  <p>MyInverse means complete access to our digital world. Our insider community is the first to
    shop the latest designs. Streamline your shopping experience by saving time at checkout by adding your
    shipping and payment details in one place and simply log in to track your order.  With a MyInverse account,
    you can curate your own tailor-made collection by adding items to your wish list and receive personalized
    advice from our Client Advisors.</p>
</div>
<button type="button" class="collapsible">How can I create a MyInverse?</button>
<div class="content">
  <p>Visit our registration page <a href="#">(<u>here</u>)</a> so we can welcome you into the House.</p>
</div>
<button type="button" class="collapsible">How do I modify or delete MyInverse?</button>
<div class="content">
  <p>To modify your personal information, including name, date of birth and email address,
    visit the Account Settings section under My Account.
    <p><a href="#"><u>Log into your account</u></a></p>
  <p>To delete your account, please <a href="indexlinverse.php?page=contact"><u>Contact Us</u>.</a></p>
</div>
<button type="button" class="collapsible">How do I sign up for the latest on what’s happening at L'inverse?</button>
<div class="content">
  <p>Subscribe to receive L'inverse emails with the latest collection launches, news and more.
    You can subscribe by creating and logging into your account and selecting to receive L'inverse emails
    under Account Settings.</p>
    <p><a href="#"><u>Log into your account</u></a></p>
</div>
<button type="button" class="collapsible">How can I unsubscribe to the L'inverse's mailing list?</button>
<div class="content">
  <p><a href="indexlinverse.php?page=unsubscribe"><u>Unsubscribe</u></a> to be removed from our mailing list.</p>
</div>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
  <br><br><br>
  <center>
  <label>Still have questions?</label>
  <br>
  <a href="indexlinverse.php?page=contact" class="btn btn-xs btn-outline btn-dark">Contact Us </a>
</center><br>
  </body>
</html>
