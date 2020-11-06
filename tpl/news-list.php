<!DOCTYPE html>
<html lang="en">

<wb-include wb="tpl=head.inc.php" />

<body ___oncontextmenu___="return false;">
<!-- Start Back to top
=========================================================================-->
<div id="scroll" style="display: none;"><i class="fa fa-angle-up"></i></div>

<wb-include wb="tpl=header.inc.php" />

<!-- End Header
==================================================================-->
<!-- Page Banner Start
==================================================================-->
<div class="page-banner overlay-black" style="padding: 150px 0; background-image:url({{images.0.img}});">
	<div class="container h-100">
		<div class="row h-100 align-items-center">
			<div class="col-lg-12">
				<h1 class="page-banner-title color-primary">{{header}}</h1>
				<div class="text-area w-50 mt-15 color-white">
					{{text}}
				</div>
			</div>
		</div>
	</div>
</div>
<div class="bg-secondary">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb m-0 py-15 px-0 bg-transparent hover-white-primary">
				    <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i></a></li>
				    <li class="breadcrumb-item"><a href="{{_route.uri}}">{{header}}</a></li>
				  </ol>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- Page Banner End
==================================================================-->
<!-- Blog Thumbnail Start
==================================================================-->
<section>
	<div class="container">
		<div class="row">
			<wb-foreach wb="table=news&sort=date:d&size=12" wb-filter='{"active":"on"}'>
			<div class="col-md-12 col-lg-4">
				<div class="post-thumbnail hover-secondery-primary">
					<div class="post-img overflow-hidden">
						<a class="" href="/news/{{id}}/{{wbFurlGenerate({{header}})}}">
						<img src="/thumbc/370x244/src/{{images.0.img}}" alt="Image not found!">
						</a>
					</div>
					<div class="post-meta icon-primary color-secondary-a px-20 py-10 bg-gray">
						<ul class="post-info list-style-1 d-flex color-secondary">
							<li><i class="fa fa-user"></i> Admin</li>
							<li><a href="blog-full-width.html#"><i class="fa fa-comments-o"></i> 536</a></li>
							<li><a href="blog-full-width.html#"><i class="fa fa-share-alt"></i> 898</a></li>
						</ul>
					</div>
					<div class="post-content mt-20 color-secondary color-secondary-a">
						<div class="post-date w-25 float-left bg-gray mr-20 text-center">
							<div class="py-10"><span class="d-block">{{strftime("%d",strtotime({{date}}))}}</span>{{strftime("%h",strtotime({{date}}))}}</div>
							<div class="post-love py-5 bg-primary text-white">
								<i class="fa fa-calendar" aria-hidden="true"></i> {{strftime("%Y",strtotime({{date}}))}}
							</div>
						</div>
						<div class="text-area d-table">
							<a class="post-title mb-15" href="/news/{{id}}/{{wbFurlGenerate({{header}})}}"><h5>{{header}}</h5></a>
							<p wb-if='"{{meta_description}}" > ""'>{{meta_description}}</p>
							<p wb-if='"{{meta_description}}" == ""'>{{wbGetWords({{text}},20)}}</p>
							<a class="btn-more mt-15" href="/news/{{id}}/{{wbFurlGenerate({{header}})}}">Подробно</a>
						</div>
					</div>
				</div>
			</div>
			</wb-foreach>
		</div>
	</div>
</section>
<!-- Blog Thumbnail End
==================================================================-->
<!--  Partners and Subscribe Form Start
==================================================================-->
<div class="patner-subscribe">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="bg-white shadow py-80">
					<div class="row">
						<div class="col-md-12 col-lg-6 px-60 border-right">
							<div class="side-title pb-30">
								<span class="small-title color-primary position-relative line-primary">Partners</span>
								<h2 class="title mb-20 color-secondary">Our Popular Fellows!</h2>
								<p>Luctus posuere facilisi eros auctor lacinia litora. Convall aptent nisy parturient scelerisq. Nullam fringil condimen integer mauris lacus aliquam, quam massa lobortis commod proin magna.</p>
							</div>
							<div class="owl-carousel partners mt-30">
								<img src="images/partner/1.png" alt="Image not found!">
								<img src="images/partner/2.png" alt="Image not found!">
								<img src="images/partner/3.png" alt="Image not found!">
								<img src="images/partner/4.png" alt="Image not found!">
								<img src="images/partner/5.png" alt="Image not found!">
								<img src="images/partner/6.png" alt="Image not found!">
							</div>
						</div>
						<div class="col-md-12 col-lg-6 px-60">
							<div class="side-title pb-30 text-right mt-md-50">
								<span class="small-title color-primary position-relative line-right-primary">Newsletter</span>
								<h2 class="title mb-20 color-secondary">Get Update Now!</h2>
								<p>Luctus posuere facilisi eros auctor lacinia litora. Convall aptent nisy parturient scelerisq. Nullam fringil condimen integer mauris lacus aliquam, quam massa lobortis commod proin magna.</p>
							</div>
							<form class="news-letter bg-gray mt-30">
								<div class="form-group position-relative">
									<input class="form-control" type="text" name="email" placeholder="Subscribe">
									<button class="bg-gray color-secondary"><i class="fa fa-paper-plane"></i></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<wb-include wb="tpl=footer.inc.php" />
<wb-include wb="tpl=scripts.inc.php" />

</body>
</html>