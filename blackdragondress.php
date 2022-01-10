<!DOCTYPE html>
<html>
<style>
body{
background:#eee;
}

/*panel*/
.panel {
    border: none;
    box-shadow: none;
}

.panel-heading {
    border-color:#eff2f7 ;
    font-size: 16px;
    font-weight: 300;
}

.panel-title {
    color: #2A3542;
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 0;
    margin-top: 0;
    font-family: 'Open Sans', sans-serif;
}

/*product list*/

.prod-cat li a{
    border-bottom: 1px dashed #d9d9d9;
}

.prod-cat li a {
    color: #3b3b3b;
}

.prod-cat li ul {
    margin-left: 30px;
}

.prod-cat li ul li a{
    border-bottom:none;
}
.prod-cat li ul li a:hover,.prod-cat li ul li a:focus, .prod-cat li ul li.active a , .prod-cat li a:hover,.prod-cat li a:focus, .prod-cat li a.active{
    background: none;
    color: #ff7261;
}

.pro-lab{
    margin-right: 20px;
    font-weight: normal;
}

.pro-sort {
    padding-right: 20px;
    float: left;
}

.pro-page-list {
    margin: 5px 0 0 0;
}

.product-list img{
    width: 100%;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
}

.product-list .pro-img-box {
    position: relative;
}
.adtocart {
    background: #fc5959;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    color: #fff;
    display: inline-block;
    text-align: center;
    border: 3px solid #fff;
    left: 45%;
    bottom: -25px;
    position: absolute;
}

.adtocart i{
    color: #fff;
    font-size: 25px;
    line-height: 42px;
}

.pro-title {
    color: #5A5A5A;
    display: inline-block;
    margin-top: 20px;
    font-size: 16px;
}

.product-list .price {
    color:#fc5959 ;
    font-size: 15px;
}

.pro-img-details {
    margin-left: -15px;
}

.pro-img-details img {
    width: 100%;
}

.pro-d-title {
    font-size: 16px;
    margin-top: 0;
}

.product_meta {
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
    padding: 10px 0;
    margin: 15px 0;
}

.product_meta span {
    display: block;
    margin-bottom: 10px;
}
.product_meta a, .pro-price{
    color:#fc5959 ;
}

.pro-price, .amount-old {
    font-size: 18px;
    padding: 0 10px;
}

.amount-old {
    text-decoration: line-through;
}

.quantity {
    width: 120px;
}

.pro-img-list {
    margin: 10px 0 0 -15px;
    width: 100%;
    display: inline-block;
}

.pro-img-list a {
    float: left;
    margin-right: 10px;
    margin-bottom: 10px;
}

.pro-d-head {
    font-size: 18px;
    font-weight: 300;
}
</style>
<body>
  <div class="container bootdey">
  <div class="col-md-12">
  <section class="panel">
        <div class="panel-body">
            <div class="col-md-6">
                <div class="pro-img-details">
                    <img src="assets/images/blackdragondress.png" style= "height:370px" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <h4 class="pro-d-title">
                    <a href="#" class="">
                        Black Dragon Dress
                    </a>
                </h4>
                <p>
                    Designed with the formidable heroine in mind, this oriental inspired dress is expected to make you
                    feel like the powerful, confident, and mysterious warrior. With the strong combination of black and
                    gold, this dress brings out a majestic aura which is accompanied with the gold dragon ornament at the
                    center. The flowery touches on the skirts adds a feminine feel on the dress.
                </p>
                <div class="product_meta">
                    <span class="posted_in"> <strong>Categories:</strong> <a rel="tag" href="#">Dress</a>, <a rel="tag" href="#">Women</a>, <a rel="tag" href="#">Gold</a>, <a rel="tag" href="#">Black</a></span>
                    <span class="tagged_as"><strong>Tags:</strong> <a rel="tag" href="#">womens</a></span>
                </div>
                <div class="m-bot15"> <strong>Price : </strong> <span class="pro-price"> $110.00</span></div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="quantiy" placeholder="1" class="form-control quantity">
                </div>
                <p>
                    <a href="indexlinverse.php?page=cart" button class="btn btn-round btn-dark" type="button"><i class="fa fa-shopping-cart"></i> Add to Cart</button></a>
                </p>
            </div>
        </div>
    </section>
    </div>
    </div>

</body>
</html>
