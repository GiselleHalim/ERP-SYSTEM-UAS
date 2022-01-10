<div class="container" style="margin-top:20px">
  <center><h1 style="color:black">NEW ARRIVALS</h1></center>
  <hr>

<!DOCTYPE html>
<html>
<head>
<style>

/* E-commerce */
.product-box {
  padding: 0;
  border: 1px solid #e7eaec;
}
.product-box:hover,
.product-box.active {
  border: 1px solid transparent;
  -webkit-box-shadow: 0 3px 7px 0 #a8a8a8;
  -moz-box-shadow: 0 3px 7px 0 #a8a8a8;
  box-shadow: 0 3px 7px 0 #a8a8a8;
}
.product-imitation {
  text-align: center;
  padding: 90px 0;
  background-color: #f8f8f9;
  color: #bebec3;
  font-weight: 600;
}
.cart-product-imitation {
  text-align: center;
  padding-top: 30px;
  height: 80px;
  width: 80px;
  background-color: #f8f8f9;
}
.product-imitation.xl {
  padding: 120px 0;
}
.product-desc {
  padding: 20px;
  position: relative;
}
.ecommerce .tag-list {
  padding: 0;
}
.ecommerce .fa-star {
  color: #d1dade;
}
.ecommerce .fa-star.active {
  color: #f8ac59;
}
.ecommerce .note-editor {
  border: 1px solid #e7eaec;
}
table.shoping-cart-table {
  margin-bottom: 0;
}
table.shoping-cart-table tr td {
  border: none;
  text-align: right;
}
table.shoping-cart-table tr td.desc,
table.shoping-cart-table tr td:first-child {
  text-align: left;
}
table.shoping-cart-table tr td:last-child {
  width: 80px;
}
.product-name {
  font-size: 16px;
  font-weight: 600;
  color: #676a6c;
  display: block;
  margin: 2px 0 5px 0;
}
.product-name:hover,
.product-name:focus {
  color: #1ab394;
}
.product-price {
  font-size: 14px;
  font-weight: 600;
  color: #ffffff;
  background-color: black;
  padding: 6px 12px;
  position: absolute;
  top: -32px;
  right: 0;
}
.product-detail .ibox-content {
  padding: 30px 30px 50px 30px;
}
.image-imitation {
  background-color: #f8f8f9;
  text-align: center;
  padding: 200px 0;
}
.product-main-price small {
  font-size: 10px;
}
.product-images {
  margin: 0 20px;
}

.ibox {
  clear: both;
  margin-bottom: 25px;
  margin-top: 0;
  padding: 0;
}
.ibox.collapsed .ibox-content {
  display: none;
}
.ibox.collapsed .fa.fa-chevron-up:before {
  content: "\f078";
}
.ibox.collapsed .fa.fa-chevron-down:before {
  content: "\f077";
}
.ibox:after,
.ibox:before {
  display: table;
}
.ibox-title {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  background-color: #ffffff;
  border-color: #e7eaec;
  border-image: none;
  border-style: solid solid none;
  border-width: 3px 0 0;
  color: inherit;
  margin-bottom: 0;
  padding: 14px 15px 7px;
  min-height: 48px;
}
.ibox-content {
  background-color: #ffffff;
  color: inherit;
  padding: 15px 20px 20px 20px;
  border-color: #e7eaec;
  border-image: none;
  border-style: solid solid none;
  border-width: 1px 0;
}
.ibox-footer {
  color: inherit;
  border-top: 1px solid #e7eaec;
  font-size: 90%;
  background: #ffffff;
  padding: 10px 15px;
}

.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 800px;
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

</style>
</head>
<body>
	<div class="mySlides fade">
	  <a href="indexlinverse.php?page=lclassic"><img src="assets/images/banner.png" style="width:100%"></a>
	</div>

	<div class="mySlides fade">
		<img src="assets/images/banner11.png" style="width:100%">
	</div>

	<div class="mySlides fade">
		<img src="assets/images/banner4.png" style="width:100%">
	</div>
	</div>
	<br>

	<div style="text-align:center">
	  <span class="dot" onclick="currentSlide(1)"></span>
	  <span class="dot" onclick="currentSlide(2)"></span>
		<span class="dot" onclick="currentSlide(3)"></span>
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
<br>

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <div class="container">
  <div class="row">
    <div class="col-md-3">
        <div class="ibox">
            <div class="ibox-content product-box">
                <img src="assets/images/together.jpg" style= "height:258px" "width:230px">
                <div class="product-desc">
                    <span class="product-price">
                        $30
                    </span>
                    <small class="text-muted">Top</small>
                    <a href="indexlinverse.php?page=together" class="product-name"> Together </a>

                    <div class="small m-t-xs">
                        "Started with a little bit, now I don't know how to quit."
                    </div><br>
                    <div class="m-t text-righ">

                        <a href="indexlinverse.php?page=together" class="btn btn-xs btn-outline btn-dark">Info <i class="fa fa-long-arrow-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="ibox">
            <div class="ibox-content product-box">
                <img src="assets/images/imod.png" style= "height:258px" "width:230px">
                <div class="product-desc">
                    <span class="product-price">
                        $50
                    </span>
                    <small class="text-muted">Mini Dress</small>
                    <a href="indexlinverse.php?page=imod" class="product-name"> My Own Demon </a>

                    <div class="small m-t-xs">
                        "Started with a little bit, now I don't know how to quit."
                    </div><br>
                    <div class="m-t text-righ">

                        <a href="indexlinverse.php?page=imod" class="btn btn-xs btn-outline btn-dark">Info <i class="fa fa-long-arrow-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="ibox">
            <div class="ibox-content product-box">
                <img src="assets/images/helper1.png" style= "height:258px" "width:230px">
                <div class="product-desc">
                    <span class="product-price">
                        $50
                    </span>
                    <small class="text-muted">Outwear</small>
                    <a href="indexlinverse.php?page=helper" class="product-name"> A Little Bit of Something </a>

                    <div class="small m-t-xs">
                        "Started with a little bit, now I don't know how to quit."
                    </div><br>
                    <div class="m-t text-righ">

                        <a href="indexlinverse.php?page=helper" class="btn btn-xs btn-outline btn-dark">Info <i class="fa fa-long-arrow-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <div class="col-md-3">
          <div class="ibox">
              <div class="ibox-content product-box">
                  <img src="assets/images/littlesavage.png" style= "height:258px" "width:230px">
                  <div class="product-desc">
                      <span class="product-price">
                          $25/piece
                      </span>
                      <small class="text-muted">Top, Bottom</small>
                      <a href="indexlinverse.php?page=littlesavage" class="product-name"> Little Savage </a>

                      <div class="small m-t-xs">
                          "Acting as if they are innocent even if their outfit states a rebellion."
                      </div><br>
                      <div class="m-t text-righ">

                          <a href="indexlinverse.php?page=littlesavage" class="btn btn-xs btn-outline btn-dark">Info <i class="fa fa-long-arrow-right"></i> </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-3">
          <div class="ibox">
              <div class="ibox-content product-box">
                <img src="assets/images/blackdragondress.png" style= "height:258px" "width:230px">
                  <div class="product-desc">
                      <span class="product-price">
                          $110
                      </span>
                      <small class="text-muted">Dress</small>
                      <a href="indexlinverse.php?page=blackdragondress" class="product-name"> Black Dragon Dress </a>



                      <div class="small m-t-xs">
                          "The tale of a heroine and her dragon who saved the world."
                      </div><br>
                      <div class="m-t text-righ">

                          <a href="indexlinverse.php?page=blackdragondress" class="btn btn-xs btn-outline btn-dark">Info <i class="fa fa-long-arrow-right"></i> </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-3">
          <div class="ibox">
              <div class="ibox-content product-box">
                  <img src="assets/images/semiarmymonodress.png" style= "height:258px" "width:230px">
                  <div class="product-desc">
                      <span class="product-price">
                          $100
                      </span>
                      <small class="text-muted">Dress</small>
                      <a href="indexlinverse.php?page=semiarmymonodress" class="product-name"> Semi Army Mono Dress </a>

                      <div class="small m-t-xs">
                          "A dress that is worth it for the trendsetter."
                      </div><br>
                      <div class="m-t text-righ">

                          <a href="indexlinverse.php?page=semiarmymonodress" class="btn btn-xs btn-outline btn-dark">Info <i class="fa fa-long-arrow-right"></i> </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-3">
          <div class="ibox">
              <div class="ibox-content product-box">
                  <img src="assets/images/lc1.png" style= "height:258px" "width:230px">
                  <div class="product-desc">
                      <span class="product-price">
                          $15
                      </span>
                      <small class="text-muted">Top</small>
                      <a href="indexlinverse.php?page=lclassic" class="product-name"> L'inverse Classic </a>

                      <div class="small m-t-xs">
                          "Suitable for every style that you wish."
                      </div><br>
                      <div class="m-t text-righ">

                          <a href="indexlinverse.php?page=lclassic" class="btn btn-xs btn-outline btn-dark">Info <i class="fa fa-long-arrow-right"></i> </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-3">
          <div class="ibox">
              <div class="ibox-content product-box">
                  <img src="assets/images/monoargyle1.png" style= "height:258px" "width:230px">
                  <div class="product-desc">
                      <span class="product-price">
                          $25
                      </span>
                      <small class="text-muted">Top</small>
                      <a href="indexlinverse.php?page=mna1" class="product-name"> Mono Shade Argyle Vest </a>

                      <div class="small m-t-xs">
                          "One of the trendiest thing ever! Grab one now!"
                      </div><br>
                      <div class="m-t text-righ">
                          <a href="indexlinverse.php?page=mna1" class="btn btn-xs btn-outline btn-dark">Info <i class="fa fa-long-arrow-right"></i> </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</div>
</div>
    <a href="indexlinverse.php?page=showcase2" button class="btn btn-dark pull-right"><i class="fa fa-arrow-right"></i> Next </button></a>
    <br><br><br>
</body>
</html>
