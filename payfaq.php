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
    <button type="button" class="collapsible">What forms of payment do you accept?</button>
<div class="content">
  <p>L'inverse accepts the following forms of payment for online purchases: </p>
  <ol>
    <li>Visa</li>
    <li>Mastercard</li>
    <li>American Express</li>
    <li>Discover</li>
    <li>PayPal</li>
    <li>OVO</li>
    <li>DANA</li>
  </ol>
  <p>When placing an order, your billing address must match the information linked to your payment
    method. If your payment is declined, please contact your bank or financial institution for assistance.</p>
</div>
<button type="button" class="collapsible">Can I use multiple methods of payment?</button>
<div class="content">
  <p>At this time, we only accept one form of payment per order.</p>
</div>
<button type="button" class="collapsible">When will I be charged for my purchase?</button>
<div class="content">
  <p>For most items (excluding Made to Order and personalized items), you will not be charged until your order is shipped.
    A temporary hold will be placed on your credit card for the full amount when you place your order.
    Once we have verified your card details and received credit authorization, we will prepare your order for shipping
    and charge the full amount. Please allow up to two business days to prepare your order for shipment.</p>
  <p>Made to Order items and personalized items require full payment at the time the order is placed.
    Once the order is received, L'inverse Customer Services will contact you to confirm the order and
    process the payment.</p>
</div>
<button type="button" class="collapsible">Will I be charged sales tax?</button>
<div class="content">
  <p>Orders placed are subject to applicable state, local and county sales tax.
    Your order confirmation will reflect an estimated sales tax and order total based on the shipping
    zip code entered when your order was placed. The actual sales tax will be applied at the time of shipment
    and may vary from the estimated tax. You will not be charged for your order until it has shipped. </p>
</div>
<button type="button" class="collapsible">Can I cancel or modify my order?</button>
<div class="content">
  <p>Orders for items available for immediate purchase cannot be cancelled or modified once they have been placed.
    If you would like to return your item, please refer to our
    <a href="indexlinverse.php?page=return"><u>Returns</u></a> section. </p>
  <p>Made to Order and personalized items, including DIY orders, cannot be canceled or modified.
    These items are considered final sale and cannot be returned.</p>
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
