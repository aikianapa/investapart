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
								<img data-src='/thumbc/300x300/src/{{images.0.img}}' class="rounded-circle pc-30" />
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
								<img data-src='/thumbc/300x300/src/{{images.0.img}}' class="rounded-circle pc-30" />
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
						<img src="/thumbc/870x665/src/{{images.0.img}}" alt="{{header}}">
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
	<!-- About us End

==================================================================-->
	<!-- Property Looking Start
==================================================================-->
	<div class="looking-property">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="property-looking">
						<div class="row">
							<div class="col-md-6 col-lg-3">
								<div class="text-thumbnail text-center bg-secondary py-40 px-30 color-white color-white-a box-shadow-gray">
									<a class="mb-20" href="index-7.html#">
										<h4>Modern Villa</h4>
									</a>
									<p class="mb-20">Fames elementum sollicitud pretiuma aenean consequat curabitur hendrerit.</p>
									<span class="d-block bg-primary icon-white flat-small">
										<i class="flaticon-house-2"></i>
									</span>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="text-thumbnail text-center bg-secondary py-40 px-30 mt-sm-30 color-white color-white-a box-shadow-gray">
									<a class="mb-20" href="index-7.html#">
										<h4>Family House</h4>
									</a>
									<p class="mb-20">Fames elementum sollicitud pretiuma aenean consequat curabitur hendrerit.</p>
									<span class="d-block bg-primary icon-white flat-small">
										<i class="flaticon-rental"></i>
									</span>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="text-thumbnail text-center bg-secondary py-40 px-30 mt-md-30 color-white color-white-a box-shadow-gray">
									<a class="mb-20" href="index-7.html#">
										<h4>Town House</h4>
									</a>
									<p class="mb-20">Fames elementum sollicitud pretiuma aenean consequat curabitur hendrerit.</p>
									<span class="d-block bg-primary icon-white flat-small">
										<i class="flaticon-hotel"></i>
									</span>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="text-thumbnail text-center bg-secondary py-40 px-30 mt-md-30 color-white color-white-a box-shadow-gray">
									<a class="mb-20" href="index-7.html#">
										<h4>Appartment</h4>
									</a>
									<p class="mb-20">Fames elementum sollicitud pretiuma aenean consequat curabitur hendrerit.</p>
									<span class="d-block bg-primary icon-white flat-small">
										<i class="flaticon-rental"></i>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Property Looking End
==================================================================-->
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
								<img src="/thumbc/725x635/src/{{images.0.img}}" alt="image">
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
							<img src="{{_var.base}}/images/property/2.jpg" alt="image">
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
	<!-- Properties Thumbnail End
==================================================================-->
	<!-- Top Agencies Start
==================================================================-->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-6">
					<div class="side-title pb-30">
						<span class="small-title color-primary position-relative line-primary">Hot</span>
						<h2 class="title mb-20 color-secondary">Top Agencies</h2>
						<p>Luctus posuere facilisi eros auctor lacinia litora. Convall aptent nisy parturient scelerisq. Nullam fringil condimen
							integer mauris lacus aliquam, quam massa lobortis commod proin magna.</p>
					</div>
				</div>
				<div class="col-md-12 col-lg-12">
					<div class="row">
						<div class="col-md-12 col-lg-6">
							<div class="agencies mt-30 py-40 px-30 bg-gray hover-secondery-primary">
								<div class="row">
									<div class="col-md-12 col-lg-12 col-xl-4 d-flex align-items-center">
										<a href="index-7.html#">
											<img src="{{_var.base}}/images/partner/1.png" alt="image">
										</a>
									</div>
									<div class="col-md-12 col-lg-12 col-xl-8">
										<div class="agencies-content">
											<a href="index-7.html#">
												<h4>Homelax Builders</h4>
											</a>
											<span class="mt-5 mb-30 d-block">11-13 Whitehall, London SW1A 2DD, UK</span>
											<ul>
												<li>
													<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
														Properties
														<span class="number">57</span>
													</div>
												</li>
												<li>
													<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
														Featured
														<span class="number">36</span>
													</div>
												</li>
												<li>
													<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
														Agents
														<span class="number">18</span>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6">
							<div class="agencies mt-30 py-40 px-30 bg-gray hover-secondery-primary">
								<div class="row">
									<div class="col-md-12 col-lg-12 col-xl-4 d-flex align-items-center">
										<a href="index-7.html#">
											<img src="{{_var.base}}/images/partner/2.png" alt="image">
										</a>
									</div>
									<div class="col-md-12 col-lg-12 col-xl-8">
										<div class="agencies-content">
											<a href="index-7.html#">
												<h4>Landex Builders</h4>
											</a>
											<span class="mt-5 mb-30 d-block">366 Glenmore Ave, Brooklyn, USA.</span>
											<ul>
												<li>
													<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
														Properties
														<span class="number">89</span>
													</div>
												</li>
												<li>
													<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
														Featured
														<span class="number">43</span>
													</div>
												</li>
												<li>
													<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
														Agents
														<span class="number">24</span>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6">
							<div class="agencies mt-30 py-40 px-30 bg-gray hover-secondery-primary">
								<div class="row">
									<div class="col-md-12 col-lg-12 col-xl-4 d-flex align-items-center">
										<a href="index-7.html#">
											<img src="{{_var.base}}/images/partner/3.png" alt="image">
										</a>
									</div>
									<div class="col-md-12 col-lg-12 col-xl-8">
										<div class="agencies-content">
											<a href="index-7.html#">
												<h4>Nester Builders</h4>
											</a>
											<span class="mt-5 mb-30 d-block">40 Tower Avenue, Melbourne, Australia.</span>
											<ul>
												<li>
													<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
														Properties
														<span class="number">47</span>
													</div>
												</li>
												<li>
													<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
														Featured
														<span class="number">26</span>
													</div>
												</li>
												<li>
													<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
														Agents
														<span class="number">12</span>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6">
							<div class="agencies mt-30 py-40 px-30 bg-gray hover-secondery-primary">
								<div class="row">
									<div class="col-md-12 col-lg-12 col-xl-4 d-flex align-items-center">
										<a href="index-7.html#">
											<img src="{{_var.base}}/images/partner/4.png" alt="image">
										</a>
									</div>
									<div class="col-md-12 col-lg-12 col-xl-8">
										<div class="agencies-content">
											<a href="index-7.html#">
												<h4>Realhome Builders</h4>
											</a>
											<span class="mt-5 mb-30 d-block">11-13 Whitehall, London SW1A 2DD, UK</span>
											<ul>
												<li>
													<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
														Properties
														<span class="number">57</span>
													</div>
												</li>
												<li>
													<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
														Featured
														<span class="number">36</span>
													</div>
												</li>
												<li>
													<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
														Agents
														<span class="number">18</span>
													</div>
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
		</div>
	</section>
	<!-- Top Agencies End
==================================================================-->
	<!-- Testimonials Start
==================================================================-->
	<section class="feedback overlay-black" style="background: url({{_var.base}}/images/background/18.jpg) center center /cover fixed;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="main-title w-50 mx-auto d-table color-white text-center mb-30">
						<span class="small-title color-primary position-relative line-2-primary">Testimonial</span>
						<h2 class="title mb-20 color-white">What Our Client's Say</h2>
						<span class="sub-title">Sociis eget dui hendrerit urna felis euismod viverra. Inceptos habitasse augue quisque facilisis per. Nibh justo massa
							suscipit.</span>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="owl-carousel slide-2 mt-30">
						<div class="feedback-item p-30 bg-secondary color-white">
							<div class="feedback-details">
								<p>Massa sapien nunc justo sem turpis nonummy Ullamcorpe suscipit ad auctor magnis ante eu aptent id sociis. Cursus
									volutpat faucibus litora Dolor sollicitudin orci praesent penatibus.</p>
							</div>
							<div class="author-info mt-30">
								<img src="{{_var.base}}/images/testimonial/1.jpg" alt="image">
								<div class="author-name">
									<h5 class="mb-5 color-primary">Jimmy Carry</h5>
								</div>
							</div>
						</div>
						<div class="feedback-item p-30 bg-secondary color-white">
							<div class="feedback-details">
								<p>Massa sapien nunc justo sem turpis nonummy Ullamcorpe suscipit ad auctor magnis ante eu aptent id sociis. Cursus
									volutpat faucibus litora Dolor sollicitudin orci praesent penatibus.</p>
							</div>
							<div class="author-info mt-30">
								<img src="{{_var.base}}/images/testimonial/2.jpg" alt="image">
								<div class="author-name">
									<h5 class="mb-5 color-primary">Lora Luis</h5>
								</div>
							</div>
						</div>
						<div class="feedback-item p-30 bg-secondary color-white">
							<div class="feedback-details">
								<p>Massa sapien nunc justo sem turpis nonummy Ullamcorpe suscipit ad auctor magnis ante eu aptent id sociis. Cursus
									volutpat faucibus litora Dolor sollicitudin orci praesent penatibus.</p>
							</div>
							<div class="author-info mt-30">
								<img src="{{_var.base}}/images/testimonial/3.jpg" alt="image">
								<div class="author-name">
									<h5 class="mb-5 color-primary">John Carter</h5>
								</div>
							</div>
						</div>
						<div class="feedback-item p-30 bg-secondary color-white">
							<div class="feedback-details">
								<p>Massa sapien nunc justo sem turpis nonummy Ullamcorpe suscipit ad auctor magnis ante eu aptent id sociis. Cursus
									volutpat faucibus litora Dolor sollicitudin orci praesent penatibus.</p>
							</div>
							<div class="author-info mt-30">
								<img src="{{_var.base}}/images/testimonial/4.jpg" alt="image">
								<div class="author-name">
									<h5 class="mb-5 color-primary">Ketty Perry</h5>
								</div>
							</div>
						</div>
						<div class="feedback-item p-30 bg-secondary color-white">
							<div class="feedback-details">
								<p>Massa sapien nunc justo sem turpis nonummy Ullamcorpe suscipit ad auctor magnis ante eu aptent id sociis. Cursus
									volutpat faucibus litora Dolor sollicitudin orci praesent penatibus.</p>
							</div>
							<div class="author-info mt-30">
								<img src="{{_var.base}}/images/testimonial/2.jpg" alt="image">
								<div class="author-name">
									<h5 class="mb-5 color-primary">Albert Cole</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonials End
==================================================================-->
	<!-- Popular City Start
==================================================================-->
	<section class="gallery bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main-title w-75 mx-auto d-table text-center mb-30">
						<span class="small-title color-primary position-relative line-2-primary">Choose Best Place to Buy</span>
						<h2 class="title mb-20 color-secondary">Popular Cities</h2>
						<span class="sub-title">Congue commodo ipsum, risus urna nisi. Primis velit turpis sollicitudin. Felis aptent sagittis aliquet turpis et tristique
							montes vestibulum rutrum. Scelerisque viverra ac ridiculus enim. Curabitur.</span>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="row">
						<div class="col-lg-12">
							<div class="gallery-img overflow-hidden position-relative mt-30 overlay-secondary">
								<img src="{{_var.base}}/images/gallery/1.jpg" alt="image">
								<div class="cities-info">
									<h5>
										<a class="color-white" href="index-7.html#">New York</a>
									</h5>
									<span class="color-gray-light mt-5 d-inline-block">20 Properties</span>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="gallery-img overflow-hidden position-relative mt-30 overlay-secondary">
								<img src="{{_var.base}}/images/gallery/2.jpg" alt="image">
								<div class="cities-info">
									<h5>
										<a class="color-white" href="index-7.html#">Las Vegas</a>
									</h5>
									<span class="color-gray-light mt-5 d-inline-block">15+ Properties</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="gallery-img overflow-hidden position-relative mt-30 overlay-secondary">
						<img src="{{_var.base}}/images/gallery/3.jpg" alt="image">
						<div class="cities-info">
							<h5>
								<a class="color-white" href="index-7.html#">San Francisco</a>
							</h5>
							<span class="color-gray-light mt-5 d-inline-block">42 Properties</span>
						</div>
					</div>
					<div class="gallery-img overflow-hidden position-relative mt-30 overlay-secondary">
						<img src="{{_var.base}}/images/gallery/4.jpg" alt="image">
						<div class="cities-info">
							<h5>
								<a class="color-white" href="index-7.html#">California</a>
							</h5>
							<span class="color-gray-light mt-5 d-inline-block">35+ Properties</span>
						</div>
					</div>

				</div>
				<div class="col-lg-3">
					<div class="gallery-img overflow-hidden position-relative mt-30 overlay-secondary">
						<img src="{{_var.base}}/images/gallery/6.jpg" alt="image">
						<div class="cities-info">
							<h5>
								<a class="color-white" href="index-7.html#">Melbourne</a>
							</h5>
							<span class="color-gray-light mt-5 d-inline-block">20+ Properties</span>
						</div>
					</div>
					<div class="gallery-img overflow-hidden position-relative mt-30 overlay-secondary">
						<img src="{{_var.base}}/images/gallery/7.jpg" alt="image">
						<div class="cities-info">
							<h5>
								<a class="color-white" href="index-7.html#">Moscow</a>
							</h5>
							<span class="color-gray-light mt-5 d-inline-block">30+ Properties</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<wb-include wb="tpl=footer.inc.php" />
	<wb-include wb="tpl=scripts.inc.php" />
</body>

</html>