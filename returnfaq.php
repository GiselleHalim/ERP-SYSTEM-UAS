<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>

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
    <button type="button" class="collapsible">How can I return a product I purchased online?</button>
<div class="content">
  <p>Returns may be made by mail. The return window for online purchases is 30 days from the date of delivery.
    You may return items by selecting "Return this Item" from your MyInverse account under order details,
    through your delivery confirmation email or by contacting a Client Advisor. Once the request has been approved,
    your prepaid shipping label will be emailed to you or will be available for download in your MyInverse account.</p>

  <p>To facilitate a seamless process and a timely refund, please follow the return instructions below:</p>
  <p><strong>Return by mail:</strong></p>
  <ol>
  <li>Start the return process by:</li>
    <ul>
    <li>Clicking here,</li>
    <li>Selecting “Return this Item” from your MyInverse account under Order Details,</li>
    <li>Clicking through your delivery confirmation email, or</li>
    <li>Contacting a Client Advisor.</li>
  </ul><br>
  <li>Pack the item(s) you wish to return in the original packaging.</li>
  <li>Once your return request has been approved, please proceed with choosing one of the following options:</li>
  <ul>
  <li>Download your prepaid shipping label from your MyInverse account,</li>
  <li>Access prepaid shipping label in your return confirmation email, or</li>
  <li>Access prepaid shipping label QR code in your return confirmation email.</li>
</ul><br>
  <li>Print the prepaid shipping label and attach it to the package. For QR code returns,
    bring your package to a SiCepat location and a team member will print your label using the QR code.</li>
  <li>Call SiCepat at +62.123.456 to schedule a pickup or bring the package to the nearest location.
    All returns shipped using the prepaid shipping label are complimentary.</li>
  <li>Once received in the warehouse, returns will be processed within approximately 7-10 business days and
    credited back to the original form of payment. You will receive an email confirmation when your return
    has been completed. Please note any shipping charges incurred at the time of purchase are non-refundable.</li>
  </ol>
  <p>Please note, all items included in the package must match those you selected while generating your prepaid shipping label.</p>
  <p>Please refer to our <a href="#"><u>Online Return Policy</u></a> for more information.</p>
</div>
<button type="button" class="collapsible">What is your online return policy? How many days do I have to return a product?</button>
<div class="content">
  <p>Eligible returns of products purchased on L'inverse may be made by mail.
    Items must be returned in accordance with the requirements outlined below, within 30 days from the date of delivery to the
    L'inverse return address listed on the return shipping label.</p>
  <p>Returned merchandise must meet the below requirements in order to be accepted for a refund:</p>
  <ul>
  <li>All items must be in original condition with original tags attached.
    Merchandise that has been worn, used, altered or damaged will not be accepted.</li>
  <li>Certain items such as sunglasses and ready-to-wear are shipped with a return tag attached.
    Returns on these specific items will only be honored if the label remains intact.</li>
  <li>Made to Order, DIY and personalized items and lingerie products
    (including but not limited to bras, panties, swimwear and tights) are final sale and cannot be returned.</li>
  </ul>
  <p>All items must match those identified in return request.</p>
</div>
<button type="button" class="collapsible">How long does it take for a refund to be issued?</button>
<div class="content">
  <p>Merchandise returned by mail to the warehouse will be processed within approximately 7-10 business days from receipt.
    You will receive an email confirmation when your return has been completed. Refunds will be credited back to the original
    form of payment. Visa, Mastercard, American Express and Discover prepaid gift cards will be reimbursed to the original card
    used. </p>
  </div>
<button type="button" class="collapsible">Are delivery charges refundable?</button>
<div class="content">
  <p>Any original shipping charges incurred at the time of purchase are non-refundable.</p>
</div>
<button type="button" class="collapsible">Can I return a personalized item?</button>
<div class="content">
  <p>Monogrammed, Made to Order and DIY items are final sale. Once an order has successfully been placed,
    it cannot be cancelled, modified or returned for a refund. </p>
</div>
<button type="button" class="collapsible">How do I exchange an item I purchased online?</button>
<div class="content">
  <p>We are happy to facilitate exchanges for online purchases. To request an exchange,
    please contact our Client Advisors at +62.427.789.
    Returned merchandise must meet the conditions and guidelines listed in the Online Return Policy
    in order to be accepted for an exchange. Please note exchanges are subject to merchandise availability.</p>
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
