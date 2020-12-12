<!DOCTYPE html>
<html lang="en">

<wb-include wb="tpl=head.inc.php" />

<body ___oncontextmenu___="return false;">

	<div id="scroll" style="display: none;">
		<i class="fa fa-angle-up"></i>
	</div>

	<wb-include wb="tpl=header.inc.php" />

	<div class="page-banner overlay-black" style="padding: 40px 0; background-image:url(/thumb/1920x400/src{{images.0.img}});">
		<div class="container h-100">
			<div class="row h-100 align-items-center">
				<div class="col-md-12 col-lg-12">
					<div class="mb-30">
						<div class="row">
							<div class="col-md-12 col-lg-8">
								<div class="single-property position-relative color-white">
									<span class="bg-primary z-index-1 px-15 py-5 mr-20" wb-tree="item=types&branch=units->{{type}}&children=false">
										<wb>{{name}}</wb>
									</span>
									<strong class="color-primary f-20">{{price}}</strong>
									<wb-data wb="table=objects&item={{object}}">
										<h3 class="color-primary mt-15">{{name}}</h3>
										<span class="address icon-primary f-14 mt-5">
											<i class="fa fa-map-marker"></i>{{address}}</span>
										<ul class="property-features icon-primary d-table f-14 mt-15">
											<li wb-tree="item=city&branch={{district}}&children=false">
												<i class="fa fa-map-o" aria-hidden="true"></i>
												<span>{{name}}</span>
											</li>
											<li wb-tree="item=city&branch={{metro}}&children=false">
												<i class="fa fa-subway" aria-hidden="true"></i>
												<span>{{name}}</span>
											</li>
										</ul>
									</wb-data>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="thumbnail-content float-right">
									<ul class="hover-option icon-white z-index-1 position-relative mt-md-30" style="opacity: 1; top: 0; right: 0;">
										<li>
											<a data-toggle="tooltip" data-placement="top" title="" href="single-property.html#" data-original-title="Wishlist">
												<i class="fa fa-heart-o" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a data-toggle="tooltip" data-placement="top" title="" href="single-property.html#" data-original-title="Compare">
												<i class="fa fa-random" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a data-toggle="tooltip" data-placement="top" title="" href="single-property.html#" data-original-title="Print" onclick="window.print()">
												<i class="fa fa-print" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a data-toggle="tooltip" data-placement="top" title="" href="single-property.html#" data-original-title="Share">
												<i class="fa fa-share-alt" aria-hidden="true"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
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
							<li class="breadcrumb-item">
								<a href="/">
									<i class="fa fa-home"></i>
								</a>
							</li>
							<li class="breadcrumb-item">
								<a href="/catalog/">Комплексы</a>
							</li>
							<li class="breadcrumb-item">
								<wb-data wb="table=objects&item={{object}}">
									<a href="/object/{{id}}/{{wbFurlGenerate({{name}})}}/">
										{{name}}
									</a>
								</wb-data>
							</li>
							<li class="breadcrumb-item">
								<a href="{{_route.uri}}" wb-tree="item=types&branch=units->{{type}}&children=false">
									<wb>{{name}}</wb>
								</a>
							</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- Page Banner End
==================================================================-->
	<!-- Single Property Start
==================================================================-->
	<section class="pt-0">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8">
					<div class="text-area mt-50">
						<h3 class="color-secondary line-bottom pb-15 mb-20">Описание</h3>
						{{text}}
					</div>
					<div class="product-slider py-30" wb-if='"{{images.0.img}}" > ""'>
						<div class="service-images owl-carousel slide-1 dot-on-slider">
							<wb-foreach wb="from=images">
								<img src="/thumb/770x440/src/{{img}}" alt="image">
							</wb-foreach>
						</div>
					</div>
					<div class="border-top-1-gray py-30">
						<h3 class="color-secondary line-bottom pb-15 mb-20">Детали</h3>
						<div class="row">
							<div class="col-md-12 col-lg-6">
								<wb-data wb="table=objects&item={{object}}">
									<ul class="list-by-tag">
										<li wb-tree="item=city&branch={{district}}&children=false">Район :
											<span>{{name}}</span>
										</li>
										<li wb-tree="item=city&branch={{metro}}&children=false">Метро :
											<span>{{name}}</span>
										</li>
										<li wb-if='"{{metro_notice}}">""'>Расстрояние :
											<span>{{metro_notice}}</span>
										</li>
										<li>Срок сдачи :
											<span>{{quart}}/{{year}}</span>
										</li>
									</ul>
									<wb-var building="{{buildings.data.{{_parent.building}}.name}}" />
									<wb-var geopos="{{geopos.0}}" />
									<wb-data>
							</div>
							<div class="col-md-12 col-lg-6">
								<ul class="list-by-tag hover-secondery-primary">
									<li>Корпус : {{_var.building}}</li>
									<li>Секция : {{section}}</li>
									<li>Площадь : {{square}}</li>
									<li>Отделка:
										<wb wb-if="'{{finish}}'>''">Да</wb>
										<wb wb-if="'{{finish}}'==''">Нет</wb>
									</li>
									<li>Цена: {{price}}</li>
								</ul>
							</div>
						</div>
					</div>


					<div class="border-top-1-gray py-30">
						<h3 class="color-secondary line-bottom pb-15 mb-20">Расположение на карте</h3>
						<div wb="module=yamap" height="400">
							<geopos data="{{_var.geopos}}" ></geopos>
						</div>
					</div>

				</div>
				<div class="col-md-12 col-lg-4">
					
						<wb-include wb="tpl=widget-feedback.inc.php" />
						<wb-include wb="tpl=widget-latestprop.inc.php" />

					</div>

				</div>
			</div>
		</div>
	</section>

		<wb-include wb="tpl=footer.inc.php" />
		<wb-include wb="tpl=scripts.inc.php" />
</body>

</html>