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

    table.Table {
      width: 100%;
      background-color: #ffffff;
      border-collapse: collapse;
      border-width: 2px;
      border-color: #363636;
      border-style: solid;
      color: #000000;
    }

    table.Table td, table.Table th {
      border-width: 2px;
      border-color: #363636;
      border-style: solid;
      padding: 2px;
    }

    table.Table thead {
      background-color: #737373;
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
    <button type="button" class="collapsible">Which shipping options are available and what are the costs?</button>
<div class="content">
  <p>For items available for immediate purchase, you may select from the following shipping services. </p>
  <table class="Table">
    <thead>
      <tr>
        <th>Shipping Services</th>
        <th>Shipping Fee</th>
        <th>Delivery Estimate</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Free Standard Shipping (Member Only)</td>
        <td>Free</td>
        <td>4-7 business days</td>
      </tr>
      <tr>
        <td>Standard Shipping</td>
        <td>Cell</td>
        <td>4-7 business days</td>
      </tr>
      <tr>
        <td>Next Day Shipping</td>
        <td>Cell</td>
        <td>2-4 business days</td>
      </tr>
      <tr>
        <td>Express Shipping</td>
        <td>Cell</td>
        <td>1-2 business days</td>
      </tr>
      <tr>
        <td>Cargo Shipping</td>
        <td>Cell</td>
        <td>5-7 business days</td>
      </tr>
    </tbody>
  </table>
<br>
  <p>Your order will be shipped within the same business day if the order is placed by 2 pm on the same day and
    you will receive a shipping confirmation email with delivery details. <u>Delivery timing is estimated from the
    time your order is placed</u>. All orders are processed Monday through Friday, excluding holidays.
    Deliveries are made Monday to Friday from 9am - 8pm. An adult signature will be required upon delivery.
    L'inverse cannot be held responsible for any unanticipated delivery delays beyond our control.</p>
</div>
<button type="button" class="collapsible">How can I track my order status?</button>
<div class="content">
  <p>Once your item(s) have shipped you will receive a confirmation email where you will find a link to track your order.
    In order to check the status of your shipment just click on the link, here you will also have the option of opting in for
    text updates. You will receive an email confirmation once your order has been delivered.</p>
</div>
<button type="button" class="collapsible">Are there any delivery restrictions? Can I ship internationally?</button>
<div class="content">
  <p>The following delivery restrictions apply:</p>
  <ul>
    <li>Purchases may not be shipped to P.O. boxes, APO/FPO addresses, hotels, freight forwarders or to any address
      outside of your country.</li>
    <li>If you would like to ship an order internationally, you may shop from that country’s
      website or <a href="indexlinverse.php?page=contact"><u>Contact Us</u></a> and a Client Advisor will assist you. </li>
    <li>Items can only be shipped to one address per order.
      To ship to multiple addresses, please place a separate order for each location. </li>
  </ul>
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
