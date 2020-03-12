<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.graygrids.com/themes/classix/classic/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Oct 2019 18:08:06 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="author" content="GrayGrids Team">
<title>Classix - Bootstrap 4 Classified Ads Template</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css">

<link rel="stylesheet" href="assets/fonts/all.min.css" type="text/css">

<link rel="stylesheet" href="assets/fonts/line-icons/line-icons.css" type="text/css">

<link rel="stylesheet" href="assets/extras/animate.css" type="text/css">

<link rel="stylesheet" href="assets/extras/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/extras/owl.theme.css" type="text/css">

<link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">

<link rel="stylesheet" href="assets/css/main.css" type="text/css">

<link rel="stylesheet" href="assets/css/responsive.css" type="text/css">
</head>
<body>

<div class="header">

<nav class="navbar navbar-expand-lg bg-inverse fixed-top scrolling-navbar">
<div class="container">
<div class="theme-header clearfix">

<div class="navbar-header">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-toggle="collapse" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
<span class="lni-menu"></span>
<span class="lni-menu"></span>
<span class="lni-menu"></span>
</button>
<a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
</div>
<div class="collapse navbar-collapse" id="main-navbar">
<ul class="navbar-nav mr-auto w-100 justify-content-end">
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Home
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="index.html">Home 1</a></li>
<li><a class="dropdown-item" href="index-v-2.html">Home 2</a></li>
<li><a class="dropdown-item" href="index-v-3.html">Home 3</a></li>
</ul>
</li>
<li class="nav-item">
<a class="nav-link" href="category.html">
Category
</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Pages
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="about.html">About Us</a></li>
<li><a class="dropdown-item" href="pricing.html">Pricing Table</a></li>
<li><a class="dropdown-item" href="ads-details.html">Ads Details</a></li>
<li><a class="dropdown-item" href="post-ads.html">Ads Post</a></li>
<li><a class="dropdown-item" href="404.html">404</a></li>
<li><a class="dropdown-item" href="faq.html">Faq</a></li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Blog
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="blog.html">Blog - Right Sidebar</a></li>
<li><a class="dropdown-item" href="blog-left-sideba.html">Blog - Left Sidebar</a></li>
<li><a class="dropdown-item" href="blog-full-width.html"> Blog full width </a></li>
<li><a class="dropdown-item" href="blog-details.html">Blog Details</a></li>
</ul>
</li>
<li class="nav-item">
<a class="nav-link" href="contact.html">
Contact
</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle active" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="lnr lnr-user"></i> My Account
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="account-home.html"><i class="lnr lnr-home"></i> Account Home</a></li>
<li><a class="dropdown-item" href="account-myads.html"><i class="lnr lnr-cart"></i> My Ads</a></li>
<li><a class="dropdown-item" href="account-favourite-ads.html"><i class="lnr lnr-heart"></i> Favourite ads</a></li>
<li><a class="dropdown-item" href="account-archived-ads.html"><i class="lnr lnr-file-add"></i> Archived</a></li>
<li><a class="dropdown-item" href="login.html"><i class="lnr lnr-lock"></i> Log In</a></li>
<li><a class="dropdown-item active" href="signup.html"><i class="lnr lnr-user"></i> Signup</a></li>
<li><a class="dropdown-item" href="forgot-password.html"><i class="lnr lnr-sync"></i> Forgot Password</a></li>
<li><a class="dropdown-item" href="account-close.html"><i class="lnr lnr-cross"></i>Account close</a></li>
</ul>
</li>
<li class="postadd">
<a class="btn btn-danger btn-post" href="post-ads.html"><span class="fas fa-plus-circle"></span> Post an Ad</a>
</li>
</ul>
</div>
</div>
</div>
<div class="mobile-menu" data-logo="assets/img/logo-mobile.png"></div>
</nav>

</div>


<div class="page-header" style="background: url(assets/img/banner1.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="page-title">Join Us</h2>
</div>
</div>
</div>
</div>
</div>


<section id="content">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-4">
<div class="page-login-form box">
<h3>
Register
</h3>
<form role="form" method="post" action="gravarsapato" class="login-form">
@csrf
<div class="form-group">
<div class="input-icon">
<i class="icon fas fa-envelope"></i>
<input type="text" id="sender-email" class="form-control" name="marca" placeholder="Marca">
</div>
 </div>
<div class="form-group">
<div class="input-icon">
<i class="icon fas fa-unlock-alt"></i>
<input type="number" class="form-control" name="numero" placeholder="Numero">
</div>
</div>
<div class="form-group">
<div class="input-icon">
<i class="icon fas fa-unlock-alt"></i>
<input type="text" class="form-control" name="cor" placeholder="Cor">
</div>
</div>

<input class="btn btn-common log-btn" value="Register" type="submit">
</form>
</div>
</div>
</div>
</div>
</section>


<footer>

<section class="footer-Content">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6 col-xs-12 wow fadeIn" data-wow-delay="0.2s">
<div class="widget">
<h3 class="block-title">About us</h3>
<div class="textwidget">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est, consectetur eget facilisis sed, auctor ut purus.</p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
<div class="widget">
<h3 class="block-title">Useful Links</h3>
<ul class="menu">
<li><a href="#">Home</a></li>
<li><a href="#">Categories</a></li>
<li><a href="#">FAQ</a></li>
<li><a href="#">Left Sidebar</a></li>
<li><a href="#">Pricing Plans</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">Full Width Page</a></li>
<li><a href="#">Terms of Use</a></li>
<li><a href="#">Privacy Policy</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-6 col-xs-12 wow fadeIn" data-wow-delay="0.6s">
<div class="widget">
<h3 class="block-title">Latest Tweets</h3>
<div class="twitter-content clearfix">
<ul class="twitter-list">
<li class="clearfix">
<span>
Platform to Download and Submit #Bootstrap Templates via @ProductHunt @GrayGrids
<a href="#">http://t.co/cLo2w7rWOx</a>
</span>
</li>
<li class="clearfix">
<span>
Introducing Bootstrap 4 Features: What’s new, What’s gone!
<a href="#">http://t.co/cLo2w7rWOx</a>
</span>
</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-xs-12 wow fadeIn" data-wow-delay="0.8s">
<div class="widget">
<h3 class="block-title">Random Ads</h3>
<ul class="featured-list">
<li>
<img alt="" src="assets/img/featured/img1.jpg">
<div class="hover">
<a href="#"><span>$49</span></a>
</div>
</li>
<li>
<img alt="" src="assets/img/featured/img2.jpg">
<div class="hover">
<a href="#"><span>$49</span></a>
</div>
</li>
<li>
<img alt="" src="assets/img/featured/img3.jpg">
<div class="hover">
<a href="#"><span>$49</span></a>
</div>
</li>
<li>
<img alt="" src="assets/img/featured/img4.jpg">
<div class="hover">
<a href="#"><span>$49</span></a>
</div>
</li>
<li>
<img alt="" src="assets/img/featured/img5.jpg">
<div class="hover">
<a href="#"><span>$49</span></a>
</div>
</li>
<li>
<img alt="" src="assets/img/featured/img6.jpg">
<div class="hover">
<a href="#"><span>$49</span></a>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</section>


<div id="copyright">
<div class="container">
<div class="row">
<div class="col-12">
<div class="site-info float-left">
<p>Designed and Developed by <a href="http://uideck.com/" rel="nofollow">UIdeck</a></p>
</div>
<div class="bottom-social-icons social-icon float-right">
<a class="facebook" target="_blank" href="https://web.facebook.com/GrayGrids"><i class="fab fa-facebook-f"></i></a>
<a class="twitter" target="_blank" href="https://twitter.com/GrayGrids"><i class="fab fa-twitter"></i></a>
<a class="dribble" target="_blank" href="https://dribbble.com/"><i class="fab fa-dribbble"></i></a>
<a class="flickr" target="_blank" href="https://www.flickr.com/"><i class="fab fa-flickr"></i></a>
<a class="youtube" target="_blank" href="https://youtube.com/"><i class="fab fa-youtube"></i></a>
<a class="google-plus" target="_blank" href="https://plus.google.com/"><i class="fab fa-google-plus"></i></a>
<a class="linkedin" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
</div>
</div>
</div>
</div>
</div>

</footer>


<a href="#" class="back-to-top">
<i class="fas fa-angle-up"></i>
</a>

<script type="text/javascript" src="assets/js/jquery-min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/color-switcher.js"></script>
<script type="text/javascript" src="assets/js/jquery.slicknav.js"></script>
<script type="text/javascript" src="assets/js/wow.js"></script>
<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="assets/js/form-validator.min.js"></script>
<script type="text/javascript" src="assets/js/contact-form-script.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
</body>

<!-- Mirrored from demo.graygrids.com/themes/classix/classic/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Oct 2019 18:08:06 GMT -->
</html>
