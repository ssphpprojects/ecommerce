<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo isset($page_title) ? $page_title: 'No Title'; ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/vendor/bootstrap-3.3.7/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/vendor/bootstrap-3.3.7/css/bootstrap-theme.min.css'); ?>" rel="stylesheet">
	<!-- Stylesheet -->
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<!-- Header Start -->
	<header id="fullHeader">
		<nav class="navbar navbar-default">
		  <div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="<?php echo site_url('home'); ?>">DigiCommerce</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo site_url('home'); ?>">Home</a></li>
				<li><a href="#">How it Work</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Level <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="<?php echo site_url('home/level/Basic/1'); ?>">Basic</a></li>
					<li><a href="<?php echo site_url('home/level/Intermediate/1'); ?>">Intermediate</a></li>
					<li><a href="<?php echo site_url('home/level/Advanced/1'); ?>">Advanced</a></li>
					<li><a href="<?php echo site_url('home/level/Professional/1'); ?>">Professional</a></li>
				  </ul>
				</li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="<?php echo site_url('home/allcategory'); ?>">All Categories</a></li>
					<li><a href="<?php echo site_url('home/category/CorePhp/1'); ?>">CorePhp</a></li>
					<li><a href="<?php echo site_url('home/category/Codeigniter/2'); ?>">Codeigniter</a></li>
				  </ul>
				</li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="<?php echo site_url('user/register'); ?>">Register</a></li>
					<li><a href="<?php echo site_url('user/login'); ?>">Login</a></li>
					<li><a href="<?php echo site_url('user/profile'); ?>">Profile</a></li>
					<li><a href="<?php echo site_url('user/logout'); ?>">Logout</a></li>
				  </ul>
				</li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</header>
	<!-- Header End -->
	<!-- Content Start -->
	<section id="fullSection" class="margin-top20">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="well">
					<?php echo form_open('home/search'); ?>
						<div class="input-group">
						  <input type="text" name="search" class="form-control" placeholder="Search Products...">
						  <span class="input-group-btn">
							<input type="submit" class="btn btn-primary" value="Search">
						  </span>
						</div><!-- /input-group -->
					<?php echo form_close(); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?php $this->load->view($content_view); ?>
				</div>
			</div>
		</div>
	</section>
	<!-- Content End -->
	
	<footer id="fullFooter" class="margin-top20">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h4>Links</h4>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">FAQ</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<h4>Links</h4>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">FAQ</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<h4>Links</h4>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">FAQ</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/vendor/jquery.min.js'); ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/vendor/bootstrap-3.3.7/js/bootstrap.min.js'); ?>"></script>
  </body>
</html>