<!DOCTYPE html>
<html lang="en">

<wb-include wb="tpl=head.inc.php" />

<body ___oncontextmenu___="return false;">
	<!-- Start Back to top
=========================================================================-->
	<div id="scroll" style="display: none;">
		<i class="fa fa-angle-up"></i>
	</div>

	<wb-include wb="tpl=header.inc.php" />

	<!-- Map Start 
==================================================================-->
	<div class="home-map w-100 vh-100 position-relative">
		<div class="container-fluid h-100">
			<div class="row h-100 align-items-center">
				<div class="offset-lg-6 col-lg-6 col-md-8 offset-md-4">
					<div class="row">
						<form id="catalogFilter" class="adbanced-form-two form-banner amenities-list color-white my-50 px-30 form-on-banner z-index-1">
							<div class="row">
								<div class="col-12">
									<h2 class="mb-50">Поиск по карте</h2>
								</div>
								<div class="form-group col-6">
									<label class="form-control-label">Район</label>
									<div class="select-wrapper position-relative">
										<select wb-tree="item=city&branch=districts&parent=false&children=false&sort=name" wb-change="#catalogFilter [name=metro]"
										 placeholder="Район..." name="district" class="form-control has-val">
											<option value="{{id}}" data-district="{{id}}">{{name}}</option>
										</select>
									</div>
								</div>
								<div class="form-group col-6">
									<label class="form-control-label">Метро</label>
									<div class="select-wrapper position-relative">
										<select wb-tree="item=city&branch=districts->%district%&parent=false&children=false&sort=name" wb-strict="false" placeholder="Метро..."
										 name="metro" class="form-control has-val">
											<option value="{{id}}" data-metro="{{id}}" data-district='%district%'>{{name}}
											</option>
										</select>
									</div>
								</div>
								<div class="form-group col-6">
									<label class="form-control-label">Площадь</label>
									<div class="price_range">
										<div class="price-filter" wb-data="table=admin&item=complex_data">
											<wb-data wb='table=admin&item=complex_data'>
												<span>
													<input class="filter_range" type="text" name="square__minmax" dimension="&nbsp;кв.м" value="{{square_min * 1}}; {{square_max * 1}}" />
												</span>
											</wb-data>
										</div>
									</div>
								</div>

								<div class="form-group col-6">
									<label class="form-control-label">Цена</label>
									<div class="price_range">
										<div class="price-filter" wb-data="table=admin&item=complex_data">
											<wb-data wb='table=admin&item=complex_data'>
												<span>
													<input class="filter_range" type="text" name="price__minmax" dimension="&nbsp;₽" step="10000" value="{{price_min * 1}}; {{price_max * 1}}"/>
												</span>
											</wb-data>
										</div>
									</div>
								</div>

								<div class="form-group col-12 mt-50">
									<button class="btn btn-primary w-100 mt-15" type="button" wb-change="filter=#catalogFilter&target=#yamap">
										<i class="fa fa-search"></i> Поиск
									</button>
								</div>

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="map-home overlay-half-secondary vh-100" id="map" style="position: absolute; top: 0; left: 0; bottom: 0; width: 100%">
			<wb-data wb='table=admin&item=complex_data'>
			<div wb="module=yamap" center="" zoom="16" id="yamap" >
				<wb-foreach wb="table=objects" wb-filter="{'active':'on','square_min':{'$gte':'{{square_min}}'},'square_max':{'$lte':'{{square_max}}'} }" id="yamap">
					<geopos class="d-none" data="{{geopos.0}}" >
							<div>
								<b>{{name}}</b><br>
								{{geopos.0.address}}<br>
								<a href="/object/{{id}}/{{wbFurlGenerate({{name}})}}/">Подробно</a>
							</div>
					</geopos>
				</wb-foreach>
			</div>
			</wb-data>
		</div>
	</div>
	<!-- Map End 
==================================================================-->
	<!-- New & sale Home Start
=========================================================================-->
	<div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-6">
					<div class="row">
						<wb-foreach wb="table=news&limit=1&sort=data:d" wb-filter="{'active':'on','type':'news'}">
						<div class="thumbnail-angle-one overflow-hidden position-relative bg-secondary pt-50 px-50 pb-100 text-center flat-large icon-primary color-white">
							<span class="d-block">
								<img data-src='/thumbc/300x300/src/{{images.0.img}}' width="300" height="300" class="rounded-circle pc-30" />
							</span>
							<h4 class="my-30 color-white">{{header}}</h4>
							<p>{{wbGetWords({{text}},20)}}</p>
							<div class="btn-position x-center">
								<a class="btn btn-primary position-relative" href="/news">Все новости</a>
							</div>
						</div>
						</wb-foreach>
					</div>
				</div>
				<div class="col-md-12 col-lg-6">
					<div class="row">
						<wb-foreach wb="table=news&limit=1&sort=data:d" wb-filter="{'active':'on','type':'article'}">
						<div class="thumbnail-angle-two overflow-hidden position-relative bg-dark pt-50 px-50 pb-100 mt-md-50 text-center flat-large icon-primary color-white">
							<span class="d-block">
								<img data-src='/thumbc/300x300/src/{{images.0.img}}' width="300" height="300" class="rounded-circle pc-30" />
							</span>
							<h4 class="my-30 color-white">{{header}}</h4>
							<p>{{wbGetWords({{text}},20)}}</p>
							<div class="btn-position x-center">
								<a class="btn btn-primary position-relative" href="/articles">Все статьи</a>
							</div>
						</div>
						</wb-foreach>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- New & sale Home End
=========================================================================-->
	<!-- About us Start
==================================================================-->
	<section id="home1">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-7 col-xl-6">
					<div class="side-title mb-30 pr-30">
						<span class="small-title color-primary position-relative line-primary" 
						wb-if='"{{prop.data.subhead.active}}"=="on"'>
							{{prop.data.subhead.name}}
						</span>
						<h3 class="title mb-20 color-secondary">{{header}}</h3>
					</div>
					{{text}}
					<a class="btn btn-primary mt-30" href="index-7.html#"
					wb-if='"{{prop.data.link.active}}"=="on"'>
					{{prop.data.link.name}}
					</a>

				</div>
					<wb-jq wb="	$dom->find('ul')->addClass('list-half icon-primary my-20 d-table');
								$dom->find('ul li')->prepend('<i></i>');
								$dom->find('ul li i')->addClass('fa fa-check');" />

				<div class="col-md-12 col-lg-5 col-xl-6">
					<div class="fact-counter achievement mb-50">
						<div class="row">
							<wb-data wb="table=admin&item=complex_data">
							<div class="col-md-6 col-lg-6">
								<div class="counter count wow">
									<div class="counter-point d-inline-block">
										<h2 class="count-num color-primary display-4" data-speed="3000" data-stop="{{count_units}}">0</h2>
									</div>
									<h3 class="achievement-title color-secondary">Апартаментов</h3>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="counter count wow">
									<div class="counter-point d-inline-block">
										<h2 class="count-num color-primary display-4" data-speed="3000" data-stop="{{count_objects}}">0</h2>
									</div>
									<h3 class="achievement-title color-secondary">Комплексов</h3>
								</div>
							</div>
							</wb-data>
						</div>
					</div>
					<div class="position-relative">
						<img data-src="/thumbc/870x665/src/{{images.0.img}}" width="879" height="665" alt="{{header}}">
						<div class="bg-primary position-absolute color-white" style="display: inline-block; width: 180px; height: auto; padding: 40px 20px; bottom: -35px; left: 50px;">
							<h5 class="color-white">
								Перейти в каталог
							</h5>

							<a class="btn-round mt-20" href="/catalog">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<wb-include wb="tpl=widget-faq.inc.php" />

	<!-- Feautred Properties Start
=========================================================================-->
	<section class="featured-properties">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main-title w-75 mx-auto d-table text-center mb-30">
						<span class="small-title color-primary position-relative line-2-primary">Выбирайте лучшее</span>
						<h2 class="title mb-20 color-secondary">Наши комплексы</h2>
						<span class="sub-title">Выбирите комплекс в наиболее удобном для вас районе города из нашего каталога. Для вас мы отобрали предложения от надёжных застройщиков.</span>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="owl-carousel slide-3 owl-nav-side owl-dots-none mt-30 owl-loaded owl-drag">
					<wb-foreach wb-ajax="/api/query/objects/?active=on&__options=sort=_created:d;limit=4;trigger=beforeItemShow">
					<div class="property-item">
							<div class="property-img position-relative overflow-hidden overlay-secondary-4">
								<img data-src="/thumbc/725x635/src/{{images.0.img}}" width="725" height="635" alt="image">
								<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">от {{price_min}}</span>
								<ul class="hover-option position-absolute icon-white z-index-1">
									<li>
										<a data-toggle="tooltip" data-placement="top" title="В избранное" href="#">
											<i class="fa fa-heart-o" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a data-toggle="tooltip" data-placement="top" title="Подробно" href="/object/{{id}}/{{wbFurlGenerate({{name}})}}/">
											<i class="fa fa-list" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
								<div class="meta-property icon-primary color-white z-index-1">
									<ul>
										<li>
											<i class="fa fa-calendar"></i> {{quart}}/{{year}}</li>
										<li>
											<i class="fa fa-user"></i> James Bond</li>
									</ul>
								</div>
							</div>
							<div class="property-content bg-white pt-30 pb-50 px-30">
								<a class="color-secondary mb-5" href="/object/{{id}}/{{wbFurlGenerate({{name}})}}/">
									<h4>{{name}}</h4>

								<span class="address icon-primary f-14">
									<i class="fa fa-map-marker"></i>{{address}}</span>
								<ul class="about-property list-half icon-primary d-table f-14 mb-30 mt-20">
									<li>
										<i class="flaticon-fit-screen"></i>{{square_min}} - {{square_max}}</li>
									<li>
										<i class="flaticon-hotel"></i>3 Bedrooms</li>
									<li>
										<i class="flaticon-bathtub"></i>2 Bathrooms</li>
									<li>
										<i class="flaticon-garage"></i>1 Garage</li>
								</ul>
								</a>
							</div>
						</div>

					</div>
					</wb-foreach>
				</div>
			</div>
		</div>
	</section>
	<!-- Feautred Properties End
==================================================================-->
	<!-- Properties Thumbnail Start
==================================================================-->
	<section class="bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="main-title w-75 mx-auto d-table text-center mb-30">
						<span class="small-title color-primary position-relative line-2-primary">Обратите внимание</span>
						<h2 class="title mb-20 color-secondary">Новинки каталога</h2>
						<span class="sub-title">Congue commodo ipsum, risus urna nisi. Primis velit turpis sollicitudin. Felis aptent sagittis aliquet turpis et tristique
							montes vestibulum rutrum. Scelerisque viverra ac ridiculus enim. Curabitur.</span>
					</div>
				</div>
				<wb-foreach wb-ajax="/api/query/units/?active=on&__options=sort=_created:d;limit=4;trigger=beforeItemShow">
				<div class="col-md-12 col-lg-6">
					<div class="property-thumbnail mt-30">
						<div class="property-img position-relative overflow-hidden overlay-secondary-4">
							<img data-src="{{_var.base}}/images/property/2.jpg" alt="image">
							<div class="thumbnail-content z-index-1 color-white-a color-white">
								<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15"
								wb-tree="item=types&branch=units->{{type}}&children=false"><wb>{{name}}</wb></span>
								<ul class="hover-option position-absolute icon-white z-index-1">
									<li>
										<a data-toggle="tooltip" data-placement="top" title="В избранное" href="#">
											<i class="fa fa-heart-o" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a data-toggle="tooltip" data-placement="top" title="Подробно" href="/unit/{{id}}/">
											<i class="fa fa-list" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
								<div class="hover-content py-30 px-20 overlay-hover-gradient">
									<a class="color-secondary mb-5" href="/unit/{{id}}/">
									<div class="thumbnail-title pb-10 z-index-1 position-relative">
										<span class="thumbnail-price bg-white color-secondary px-15 mb-10 d-table">{{price}}</span>
										<a class="color-secondary mb-5" href="single-property.html">
											<h4>{{name}}</h4>
										</a>
										<span class="address icon-primary f-14">
											<i class="fa fa-map-marker"></i>{{address}}</span>
									</div>
									<ul class="about-property icon-primary d-table f-14 z-index-1 position-relative">
										<li>
											Площадь <span class="color-primary">{{square}}</span> м<sup>2</sup></li>
										<li>
											Цена <span class="color-primary">{{price}}</span></li>
									</ul>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				</wb-foreach>
			</div>
		</div>
	</section>

	<wb-include wb="tpl=widget-testimonials.inc.php" />
	<wb-include wb="tpl=widget-city.inc.php" />
	<wb-include wb="tpl=footer.inc.php" />
	<wb-include wb="tpl=scripts.inc.php" />
</body>

</html>