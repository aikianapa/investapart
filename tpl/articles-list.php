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
			<wb-foreach wb="table=news&sort=date:d&size={{_sett.page_size}}" wb-filter="{'active':'on','type':'article'}">
			<div class="col-md-12 col-lg-4">
				<div class="post-thumbnail hover-secondery-primary">
					<div class="post-img overflow-hidden">
						<a class="" href="/news/{{id}}/{{wbFurlGenerate({{header}})}}">
						<img src="/thumbc/370x244/src/{{images.0.img}}" alt="Image not found!">
						</a>
					</div>

					<div class="post-content mt-20 color-secondary color-secondary-a">
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

<wb-include wb="tpl=footer.inc.php" />
<wb-include wb="tpl=scripts.inc.php" />

</body>
</html>