<html>

<wb-include wb="tpl=widget-bottom.inc.php" />

<footer class="bg-secondary pb-50" style="margin-top: -233px; padding-top: 313px;">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-md-4 col-lg-6">
				<div class="footer-logo"><a href="/">
                <img src="/thumb/200x45/src/{{_sett.logo.0.img}}" alt="{{_sett.header}}">
                </div>
			</div>
			<div class="col-sm-8 col-md-8 col-lg-6">
				<ul class="social-media-2 border-white large color-white-a float-right">
					<li class="mr-20 color-white"><strong>Соцсети:</strong></li>
					<wb-include wb-tpl="social.inc.php"/>
				</ul>
			</div>
			<hr class="border-bottom-1 w-100 my-50">

			<wb-include wb="tpl=botmenu.inc.php" />
			
		</div>
	</div>
</footer>
<div class="copyright bg-secondary color-white">
	<div class="container">
		<div class="row">
			<hr class="border-bottom-1 w-100 m-0">
			<div class="col-md-12 col-lg-12">
				<div class="py-15 text-center">
					{{_sett.logo1}}{{_sett.logo2}} @ {{date("Y")}}. {{_sett.slogan}}
				</div>
			</div>
		</div>
	</div>
</div>
</html>