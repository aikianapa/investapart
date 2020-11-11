<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="/apartment/">
	<title>Apartment - Premium Real Estate HMTL Site Template</title>
	<meta name="keywords" content="Download, Apartment, Premium, Real Estate, HMTL, Site Template, property, mortgage, CSS" />
	<meta name="description" content="Download Apartment - Premium Real Estate HMTL Site Template" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/loader.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="loader-bg"></div>
<div id="wrapper">

<!-- Page header -->
	<header>
		<div class="top-bar-wrapper">
			<div class="container top-bar">
				<div class="row">
					<div class="col-xs-5 col-sm-8">
						<div class="top-mail pull-left hidden-xs">
							<span class="top-icon-circle">
								<i class="fa fa-envelope fa-sm"></i>
							</span>
							<span class="top-bar-text">{{_var.email}}</span>
						</div>
						<div class="top-phone pull-left hidden-xxs">
							<span class="top-icon-circle">
								<i class="fa fa-phone"></i>
							</span>
							<span class="top-bar-text">{{_var.phone}}</span>
						</div>
						<div class="top-localization pull-left hidden-sm hidden-md hidden-xs">
							<span class="top-icon-circle pull-left">
								<i class="fa fa-map-marker"></i>
							</span>
							<span class="top-bar-text">One Brookings Drive St. Louis, Missouri 63130-4899, USA</span>
						</div>
					</div>
					<div class="col-xs-7 col-sm-4">
						<div class="top-social-last top-dark pull-right" data-toggle="tooltip" data-placement="bottom" title="Login/Register">
							<a class="top-icon-circle" href="index-map.html#login-modal" data-toggle="modal">
								<i class="fa fa-lock"></i>
							</a>
						</div>

						<div class="top-social pull-right">
							<a class="top-icon-circle" href="index-map.html#">
								<i class="fa fa-facebook"></i>
							</a>
						</div>
						<div class="top-social pull-right">
							<a class="top-icon-circle" href="index-map.html#">
								<i class="fa fa-twitter"></i>
							</a>
						</div>
						<div class="top-social pull-right">
							<a class="top-icon-circle" href="index-map.html#">
								<i class="fa fa-google-plus"></i>
							</a>
						</div>
						<div class="top-social pull-right">
							<a class="top-icon-circle" href="index-map.html#">
								<i class="fa fa-skype"></i>
							</a>
						</div>
					</div>
				</div>
			</div><!-- /.top-bar -->
		</div><!-- /.Page top-bar-wrapper -->
		<nav class="navbar main-menu-cont">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar icon-bar1"></span>
						<span class="icon-bar icon-bar2"></span>
						<span class="icon-bar icon-bar3"></span>
					</button>
					<a href="index.html" title="" class="navbar-brand">
						<img src="images/logo-dark.png" alt="Apartment - Premium Real Estate Template" />
					</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">

					<ul class="nav navbar-nav navbar-right" data-wb="role=tree&item=mainmenu">
				    <li>
				      <a href="{{data.link}}">{{name}}</a>
				    </li>
				  </ul>

				</div>
			</div>
		</nav><!-- /.mani-menu-cont -->
    </header>

<main></main>

    <footer class="large-cont">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-lg-3">
					<h4 class="second-color">Контакты<span class="special-color">.</span></h4>
					<div class="footer-title-separator"></div>
					<p class="footer-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<address>
						<span><i class="fa fa-map-marker"></i>00456 Some Address line</span>
						<div class="footer-separator"></div>
						<span><i class="fa fa-envelope fa-sm"></i><a href="mailto:{{_var.email}}">{{_var.email}}</a></span>
						<div class="footer-separator"></div>
						<span><i class="fa fa-phone"></i>{{_var.phone}}</span>
					</address>
					<div class="clear"></div>
				</div>
				<div class="col-xs-6 col-sm-6 col-lg-3">
					<h4 class="second-color">Меню<span class="special-color">.</span></h4>
					<div class="footer-title-separator"></div>

					<ul class="footer-ul" data-wb="role=tree&item=mainmenu&children=false">
				    <li>
							<span class="custom-ul-bullet"></span>
				      <a href="{{data.link}}">{{name}}</a>
				    </li>
				  </ul>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-3">
					<h4 class="second-color">Новости<span class="special-color">.</span></h4>
					<div class="footer-title-separator"></div>
					<div class="row" data-wb="role=foreach&form=news&sort=date:d&limit=2" data-wb-if='active="on"'>
						<div class="col-xs-6 col-sm-12">
							<article>
								<a href="/news/{{id}}/">
									<img data-wb="role=thumbnail&width=182&height=170" src="0" alt="" class="footer-blog-image" />
								</a>
								<div class="footer-blog-title"><a href="/news/{{id}}/">{{header}}</a></div>
								<div class="footer-blog-date"><i class="fa fa-calendar-o"></i>{{date("d.m.Y",{{strtotime(date)}})}}</div>
								<div class="clearfix"></div>
							</article>
							<div class="footer-blog-separator hidden-xs"></div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-3">
					<h4 class="second-color">newsletter<span class="special-color">.</span></h4>
					<div class="footer-title-separator"></div>
					<p class="footer-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<form class="form-inline footer-newsletter">
						<input type="email" class="form-control" id="exampleInputEmail2" placeholder="enter your email">
						<button type="submit" class="btn"><i class="fa fa-lg fa-paper-plane"></i></button>
					</form>
				</div>
			</div>
		</div>
    </footer>
	<footer class="small-cont">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6 small-cont">
					<img src="images/logo-light.png" alt="" class="img-responsive footer-logo" />
				</div>
				<div class="col-xs-12 col-md-6 footer-copyrights">
					&copy; Copyright <span>{{date("Y")}}</span> <a href="http://themeforest.net/user/johnnychaos?ref=johnnychaos" target="blank">Jan Skwara</a>. All rights reserved. Buy on <a href="http://themeforest.net/user/johnnychaos/portfolio?ref=johnnychaos" target="blank">Themeforest</a>.
				</div>
			</div>
		</div>
	</footer>
</div>

<!-- Move to top button -->

<div class="move-top">
	<div class="big-triangle-second-color"></div>
	<div class="big-icon-second-color"><i class="jfont fa-lg">&#xe803;</i></div>
</div>


<!-- jQuery  -->
    <meta data-wb="role=snippet&load=jquery">
		<script type="text/javascript" src="/engine/js/jquery-migrate.min.js"></script>
		<script type="text/javascript" src="js/jQuery/jquery-ui.min.js"></script>
		<script append="body" src="/engine/js/wbapp.js"></script>

		<meta data-wb="role=snippet&load=fontawesome4">

		<!--
				<meta data-wb="role=snippet&load=jquery">
				<meta data-wb="role=snippet">

-->
				<script type="wbapp">
						wbapp.loadScripts([
								,"bootstrap/bootstrap.min.js"
								,"js/plugins.js"
								,"mail/validate.js"
								,"js/apartment.js"
						],"all-ready");
						wbapp.loadStyles([
								"bootstrap/bootstrap.min.css"
								,"css/plugins.css"
								,"css/apartment-layout.css"
								,"css/apartment-colors-blue.css"

						]);
				</script>


	</body>
</html>
