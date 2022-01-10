<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/images/logo.jpg" type="image/ico" />

    <title> L'inverse Official Website</title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="assets/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="assets/css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            <center>
            &nbsp; <a href="indexlinverse.php"><img src="assets/images/logo.jpg" style= "height:30px" "width:30px">
            <span><font size="5.5" color="white"> L'INVERSE </font></span></a>
            </center>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="assets/images/zepetouser.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Giselle</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="indexlinverse.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron"></span></a>
                  </li>
                  <li><a href="#"><i class="fa fa-shopping-bag"></i> Items <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="indexlinverse.php?page=itemslist">List</a></li>
                      <li><a href="indexlinverse.php?page=additems">Add Items</a></li>
                      <li><a href="indexlinverse.php?page=showcase">New Arrivals</a></li>
                      <li><a href="indexlinverse.php?page=discount">Discount</a></li>
                      <li><a href="indexlinverse.php?page=laststock">Last Stock</a></li>
                      <li><a href="indexlinverse.php?page=reviews">Reviews</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-book"></i> Guides <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="indexlinverse.php?page=care">Clothing Care Guide</a></li>
                      <li><a href="indexlinverse.php?page=size">Size Chart</a></li>
                      <li><a href="indexlinverse.php?page=faq">FAQs</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-phone"></i> Contact Us <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="indexlinverse.php?page=contact">Contact Information</a></li>
                      <li><a href="indexlinverse.php?page=survey">Customer Survey</a></li>
                    </ul>
                  </li>
                    <li><a><i class="fa fa-building"></i> Other Clothing Line <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="indexlinverse.php?page=subsidiary">Introduction</a></li>
                        <li><a href="#">L'inverse Sports</a></li>
                        <li><a href="#">L'inverse Executive</a></li>
                        <li><a href="#">Ophium</a></li>
                        <li><a href="#">Emushii</a></li>
                        <li><a href="#">Traditional Heritage</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-gear"></i> Settings <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="#">Settings 1</a></li>
                        <li><a href="#">Settings 2</a></li>
                      </ul>
                    </li>
                </ul>
                  <ul class="nav side-menu">
                    <li><a href="indexlinverse.php?page=cart"><i class="fa fa-shopping-cart"></i> Shopping Cart <span class="fa fa-chevron"></span></a>
                    </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings" href="#">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen" href="#">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock" href="#">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="index.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" >
                  <a href="#" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="assets/images/zepetouser.png" alt="">Giselle
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="#"> Profile</a>
                    <a class="dropdown-item" href="indexlinverse.php?page=cart"> Shopping Cart <span class="fa fa-chevron"></span></a>
                      <a class="dropdown-item"  href="#">
                        <span class="badge bg-red pull-right">2</span>
                        <span>Accounts</span>
                      </a>
                    <a class="dropdown-item"  href="index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content - HALAMAN UTAMA ISI DISINI -->
        <div class="right_col" role="main">
      <?php
      $queries = array();
      parse_str($_SERVER['QUERY_STRING'], $queries);
      error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
      switch ($queries['page']) {
      	case 'itemslist':
      		# code...
      		include 'itemslist.php';
      		break;
      	case 'additems':
      		# code...
      		include 'formitems.php';
      		break;
        case 'edititems':
        		# code...
        	include 'edit.php';
        	break;
        case 'edit_items_save':
          	# code...
          include 'edit.php';
          break;
        case 'discount':
          	# code...
          include 'discount.php';
          break;
        case 'bwc' :
            # code...
          include 'blackwintercoat.php';
          break;
        case 'discount2':
          	# code...
          include 'discountp2.php';
          break;
        case 'laststock':
          	# code...
          include 'laststock.php';
          break;
        case 'laststock':
          	# code...
          include 'laststock.php';
          case 'lsc' :
            # code...
            include 'linversesportycrop.php';
            break;
        case 'laststock':
          	# code...
            include 'laststock.php';
            case 'bjc' :
              # code...
              include 'blackjapanesecrane.php';
              break;
        case 'laststock':
          	# code...
            include 'laststock.php';
            case 'cbwd' :
              # code...
              include 'classicblackwooldress.php';
              break;
        case 'showcase':
        		# code...
        	include 'newitems.php';
        	break;
        case 'showcase2':
        		# code...
          include 'newitemsp2.php';
        	break;
        case 'blackdragondress' :
          # code...
         include 'blackdragondress.php';
         break;
        case 'together' :
            # code...
          include 'together.php';
          break;
        case 'imod' :
            # code...
          include 'imod.php';
          break;
        case 'mna1' :
            # code...
          include 'monoargyle1.php';
          break;
        case 'littlesavage' :
           # code...
           include 'littlesavage.php';
           break;
        case 'semiarmymonodress' :
            # code...
            include 'semiarmymonodress.php';
            break;
        case 'helper' :
            # code...
            include 'helper.php';
            break;
        case 'lclassic' :
            # code...
            include 'lclassic.php';
            break;
        case 'reviews':
          # code...
          include 'reviews.php';
          break;
        case 'survey':
          	# code...
          include 'survey.php';
          break;
        case 'contact':
          	# code...
          include 'contact.php';
          break;
        case 'unsubscribe':
            # code...
          include 'unsubscribe.php';
          break;
        case 'cart':
          	# code...
          include 'cart.php';
          break;
        case 'payment' :
            # code...
          include 'payment.php';
          break;
        case 'cancel' :
            # code...
            include 'newitems.php';
            break;
        case 'shipment' :
            # code...
            include 'shipping.php';
            break;
        case 'faq':
            # code...
            include 'faq.php';
            break;
        case 'c19':
            # code...
            include 'covidfaq.php';
            break;
        case 'payguide':
            # code...
            include 'payfaq.php';
            break;
        case 'shipguide':
            # code...
            include 'shipfaq.php';
            break;
        case 'legalreturn':
            # code...
            include 'legalreturn.php';
            break;
        case 'return':
            # code...
            include 'returnfaq.php';
            break;
        case 'accfaq':
            # code...
            include 'accfaq.php';
            break;
        case 'size':
            # code...
            include 'sizechart.php';
            break;
        case 'womensize':
            # code...
            include 'womensize.php';
            break;
        case 'mensize':
            # code...
            include 'mensize.php';
            break;
        case 'care':
            # code...
            include 'clothingcare.php';
            break;
        case 'subsidiary' :
            # code...
            include 'subsidiary.php';
            break;
        default:
		          #code...
		      include 'home.php';
		      break;
        }
        ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="row">
          <div class="col-md-4">
          <p2>NEED HELP?</p>
          <p2><a href="indexlinverse.php?page=contact">Contact Us</a></p>
          <p2><a href="indexlinverse.php?page=shipfaq">Shipping Service</a></p>
          <p2><a href="indexlinverse.php?page=payfaq">Payment Options</a></p>
          <p2><a href="indexlinverse.php?page=care">Clothing Care</a></p>
          <p2><a href="indexlinverse.php?page=faq">FAQs</a></p>
          <p2><a href="indexlinverse.php?page=unsubscribe">Unsubscribe</a></p>
        </div>
          <div class="col-md-4">
            <p2>THE COMPANY</p>
            <p2><a href="indexlinverse.php?page=#">About Us</a></p>
            <p2><a href="indexlinverse.php?page=subsidiary">Subsidiary</a></p>
            <p2><a href="indexlinverse.php?page=#">L'inverse Sport</a></p>
            <p2><a href="indexlinverse.php?page=#">L'inverse Executive</a></p>
            <p2><a href="indexlinverse.php?page=#">Ophium</a></p>
            <p2><a href="indexlinverse.php?page=#">Emushii</a></p>
            <p2><a href="indexlinverse.php?page=#">Traditional Heritage</a></p>
          </div>
          <div class="col-md-4">
          <p2>FIND US ON</p>
          <p2><a href="https://play.google.com/store/apps/details?id=me.zepeto.main&hl=en&gl=US">Zepeto</a></p>
          <p2><a href="indexlinverse.php?page=#">Facebook</a></p>
          <p2><a href="indexlinverse.php?page=#">Twitter</a></p>
          <p2><a href="indexlinverse.php?page=#">Instagram</a></p>
          <p2><a href="indexlinverse.php?page=#">Youtube</a></p>
        </div>
      </div>
          <br>
          <center>Copyright &copy; 2020-2022 L'inverse - All rights reserved.</center>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="assets/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="assets/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="assets/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="assets/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="assets/skycons/skycons.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="assets/js/custom.min.js"></script>

  </body>
</html>
