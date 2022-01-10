<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<header>
L'inverse Official Website
</header>
<br>
<style>

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

h1 {
font-size: 3.5em;
font-family: algerian;
color:black;
}

p {
font-family: garamond;
letter-spacing: 1px;
color:#242526;
font-size: 18px;
text-align: justify;
}

p2 {
font-family: garamond;
letter-spacing: 2px;
color:#242526;
}

header {
	background: black;
	color: #fff;
	padding: 10px;
	font-size: 20px;
	font-family: arial;
  text-align: center;

}
	.mySlides {display: none}
	img {vertical-align: middle;}

	/* Slideshow container */
	.slideshow-container {
	  max-width: 1000px;
	  max-height: 600px;
	  position: relative;
	  margin: auto;
	}

	/* The dots/bullets/indicators */
	.dot {
	  cursor: pointer;
	  height: 0px;
	  width: 0px;
	  margin: 0 2px;
	  background-color: #bbb;
	  border-radius: 50%;
	  display: inline-block;
	  transition: background-color 0.6s ease;
	}

	.active, .dot:hover {
	  background-color: black;
	}

	/* Fading animation */
	.fade {
	  -webkit-animation-name: fade;
	  -webkit-animation-duration: 3s;
	  animation-name: fade;
	  animation-duration: 3s;
	}

	@-webkit-keyframes fade {
	  from {opacity: .4}
	  to {opacity: 1}
	}

	@keyframes fade {
	  from {opacity: .4}
	  to {opacity: 1}
	}

	/* On smaller screens, decrease text size */
	@media only screen and (max-width: 300px) {
	  .prev, .next,.text {font-size: 11px}
	}

	body, html {
	  height: 100%;
	  margin: 0;
	}

  .linverse {
      width: 80px;
      margin: auto;
      text-align: center;
      padding: 10px;
  }

  @media (max-width: 700px) {
      .linverse {
          posision: center;
      }
  }


  .linverse {
      width: 80%;
      margin: auto;
      text-align: center;
      padding-top: 100px;
  }

  .row {
      margin-top: 5%;
      display: flex;
      justify-content: space-between;
  }

  .linverse-col {
      flex-basis: 33%;
      background: rgba(120, 196, 173, 0.5);
      border-radius: 10px;
      margin-bottom: 5%;
      padding: 15px 10px;
      box-sizing: border-box;
      transition: 0.5s;
  }

  .linverse-col:hover {
      box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.2);
  }

  @media(max-width:700px) {
      .row {
          flex-direction: column;
      }
  }


  .style {
      width: 80%;
      margin: auto;
      text-align: center;
      padding-top: 50px;
  }

  .style-col {
      flex-basis: 32%;
      border-radius: 10px;
      margin-bottom: 30px;
      position: relative;
      overflow: hidden;
  }

  .style-col img {
      width: 100%;
      display: block;
  }

  .style h3 {
      color: #fff;
  }

  .layer {
      background: transparent;
      height: 100%;
      width: 100%;
      position: absolute;
      top: 0;
      left: 0;
      transition: 0.5s;
  }

  .layer:hover {
      background: rgba(120, 196, 173, 0.7);
      padding: 10px;
  }

  .layer h3 {
      width: 100%;
      font: weight 500px;
      color: #fff;
      font-size: 26px;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      position: absolute;
      opacity: 0;
      transition: 0.5s;
  }

  .layer:hover h3 {
      bottom: 49%;
      opacity: 1;
  }

</style>
</head>
<body>

	<div class="mySlides fade">
	  <img src="assets/images/2021season.png" style="width:100%">
	</div>

	<div class="mySlides fade">
			<a href="indexlinverse.php?page=discount"><img src="assets/images/bannerdiscount.png" style="width:100%"></a>
	</div>

	<div class="mySlides fade">
	  <img src="assets/images/banner9.png" style="width:100%">
	</div>

	<div class="mySlides fade">
			<a href="indexlinverse.php?page=laststock"><img src="assets/images/bannerlaststock.png" style="width:100%"></a>
	</div>

	<div class="mySlides fade">
		<img src="assets/images/banner3.png" style="width:100%">
	</div>

	<div class="mySlides fade">
		<a href="indexlinverse.php?page=bwc"><img src="assets/images/banner10.png" style="width:100%"></a>
	</div>


	<br>

	<div style="text-align:center">
	  <span class="dot" onclick="currentSlide(1)"></span>
	  <span class="dot" onclick="currentSlide(2)"></span>
		<span class="dot" onclick="currentSlide(3)"></span>
		<span class="dot" onclick="currentSlide(4)"></span>
		<span class="dot" onclick="currentSlide(5)"></span>
		<span class="dot" onclick="currentSlide(6)"></span>
	</div>

	<script>
	var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}
	</script>

			<nav>
					<div class="nav-links" id="navLinks">
							<ul>
									<li><a href="indexlinverse.php?page=home">ABOUT US</a></li>
									<li><a href="indexlinverse.php?page=showcase">NEW ARRIVALS</a></li>
									<li><a href="#">FEATURED</a></li>
									<li><a href="#">NEWS</a></li>
							</ul>
					</div>
			</nav>

    <section class="linverse">
         <h1>L'inverse</h1>
       <p>L'inverse is a brand that has established exclusively on Zepeto at July 2020. We are eager to satisfy our customers through endless choices of clothing that you can mix and match to your heart's content. Through versatile, stylish, and high quality clothes that you can get with an affordable price, we strive to make our customer needs a priority.</p>
       <p>"Extraordinary Style", L'inverse aims to make a breakthrough in the fashion world through a different approach in hope to encourage the wearer to start a 'rebel' so that everyone could feel confident in what they wear without having to worry about the current trends. In other words, everyone could be a trendsetter with their own style!</p>
       <br><br><br>
         <h1>What Makes Us Different?</h1>

         <div class="row">
             <div class="linverse-col">
                 <h4>QUALITY</h4>
                 <p>Made only with the best materials and by the best tailors, L'inverse provides you the joy and pleasure of wearing a
                 high-quality clothes anywhere you go.</p>
             </div>
             <div class="linverse-col">
                 <h4>STYLE</h4>
                 <p>With the help of the best designers, we aims to set the trends and standards to another level. Not limited to one style,
                 we continuously expands our range of styles from the casual attire to the most niche one.</p>
             </div>
             <div class="linverse-col">
                 <h4>SERVICE</h4>
                 <p>We couldn't possibly come this far without the help of our customers. To pay back the trust that we're given,
                 we strive to reach the expectations of our customers and to be available for them at any times.</p>
             </div>
         </div>
     </section>

     <section class="style">
         <h1>Our Style</h1>

         <div class="row">
             <div class="style-col">
                 <img src="assets/images/front4.png">
                 <div class="layer">
                     <h3>Stylish</h3>
                 </div>
             </div>
             <div class="style-col">
                 <img src="assets/images/front1.png">
                 <div class="layer">
                     <h3>Energetic</h3>
                 </div>
             </div>
             <div class="style-col">
                 <img src="assets/images/front3.png">
                 <div class="layer">
                     <h3>Sophisticated</h3>
                 </div>
             </div>
         </div>
     </section>
<br><br>
</body>
</html>
