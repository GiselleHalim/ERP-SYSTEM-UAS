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
    <button type="button" class="collapsible">Which products are available for purchase on L'inverse?</button>
<div class="content">
  <p>L'inverse offers products across all categories, including bags, accessories, shoes, and ready-to-wear.
    You can shop by runway look or discover our special collections. Custom Made to Order and personalized
    items are also available.</p>
</div>
<button type="button" class="collapsible">How many units of each product may I purchase?</button>
<div class="content">
<p>You may purchase up to five items per style.</p>
</div>
<button type="button" class="collapsible">What if an item is unavailable?</button>
<div class="content">
  <p>If an item or size you have selected is not available for purchase, you have to wait
    for the product to be restocked. List of products that will be restocked can be seen at <a href="indexlinverse.php?
    page=news"><u>News</u></a>.</p>
  <p>If you need additional assistance please <a href="indexlinverse.php?
  page=contact"><u>Contact Us</u></a>.</p>
</div>
<button type="button" class="collapsible">Where are L'inverse products made?</button>
<div class="content">
  <p>L'inverse products are crafted with the highest quality materials, design and workmanship.
    Most L'inverse products are made in Indonesia. Exceptions include bags, which are mainly manufactured in France
    and some accessories produced in the UK.</p>
  <p>In line with our mission of responsible shopping, we are constantly searching to
    find more sustainable materials and manufacturing processes to develop products that have a
    lower impact on the environment, while still upholding our commitment to superior craftsmanship and quality.</p>
</div>
<button type="button" class="collapsible">How do I know if a product I have is authentic? Does L'inverse guarantee the authenticity of all products sold?</button>
<div class="content">
  <p>L'inverse products are crafted with the highest quality materials, design and workmanship.
    “Made in Indonesia” is an integral part of the essence of L'inverse. It is a cultural approach,
    a know-how that took generations to build, and a genuine mission that has allowed L'inverse to become one
    of the world’s most desirable luxury fashion brands. Counterfeit L'inverse products are replicas or
    imitations of authentic L'inverse products that are aimed at misleading consumers and can be of poor quality,
    lacking the details and the craftsmanship which characterize authentic L'inverse goods and can sometimes be
    marked at higher prices.</p>
  <p>We guarantee the authenticity of all products purchased on L'inverse website. </p>
  <p>If you would like to report counterfeits or suspect websites, please send an email to counterfeit@linverse.com,
    providing as much descriptive information as possible about the products or the website. </p>
</div>
<button type="button" class="collapsible">How has L'inverse committed to sustainability and responsible shopping?</button>
<div class="content">
  <p>L'inverse is committed to implementing a culture of sustainability, with a responsible attitude towards
    the people and environment that make up our community. We are constantly searching to find more sustainable
    materials and manufacturing processes to develop products that have a lower impact on the environment,
    dream up innovative solutions and look after the people who help us achieve all of this.</p>
  <p>We have already begun our journey, crafting select products with the use of organic fabrics, recycled materials,
    metal-free tanning processes and scrap-less cutting. </p>
  <p>In an unprecedented commitment to sustainability leadership in luxury and fashion,
    L'inverse supply chain has become carbon neutral and we are dedicated to continuing our
    commitment within our Culture of Purpose.</p>
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
