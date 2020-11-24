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
	<wb-var object="{{id}}" />

    <div class="page-banner overlay-black" style="padding: 150px 0; background-image:url(/thumb/1920x400/src{{images.0.img}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="page-banner-title color-primary">{{header}}</h1>
                    <div class="text-area w-50 mt-15 color-white">
                        
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
                                <a href="{{_route.uri}}">{{name}}</a>
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
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="mb-30">
					<div class="row">
						<div class="col-md-12 col-lg-8">
							<div class="single-property position-relative">
								<span class="bg-secondary color-white z-index-1 px-15 py-5 mr-20">{{price_min}} - {{price_max}}</span>
								<h3 class="color-secondary mt-15">{{name}}</h3>
								<span class="address icon-primary f-14 mt-5"><i class="fa fa-map-marker"></i>{{address}}</span>
								<ul class="property-features icon-primary d-table f-14 mt-15">
									<li wb-tree="item=city&branch={{district}}&children=false"><nobr><i class="fa fa-map-o" aria-hidden="true"></i>{{name}}</nobr></li>
									<li wb-tree="item=city&branch={{metro}}&children=false"><nobr><i class="fa fa-subway" aria-hidden="true"></i>{{name}}</nobr></li>
								</ul>
							</div>
						</div>
						<div class="col-md-12 col-lg-4">
							<div class="thumbnail-content float-right">
								<ul class="hover-option icon-white z-index-1 position-relative mt-md-30" style="opacity: 1; top: 0; right: 0;">
									<li>
										<a data-toggle="tooltip" data-placement="top" title="" href="single-property.html#" data-original-title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</li>
									<li>
										<a data-toggle="tooltip" data-placement="top" title="" href="single-property.html#" data-original-title="Compare"><i class="fa fa-random" aria-hidden="true"></i></a>
									</li>
									<li>
										<a data-toggle="tooltip" data-placement="top" title="" href="single-property.html#" data-original-title="Print" onclick="window.print()"><i class="fa fa-print" aria-hidden="true"></i></a>
									</li>
									<li>
										<a data-toggle="tooltip" data-placement="top" title="" href="single-property.html#" data-original-title="Share"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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
								<img data-src="/thumb/770x440/src/{{img}}" alt="image">
							</wb-foreach>
						</div>
				</div>
				<div class="border-top-1-gray py-30">
					<h3 class="color-secondary line-bottom pb-15 mb-20">Детали</h3>
					<div class="row">
						<div class="col-md-12 col-lg-6">
							<ul class="list-by-tag">
								<li wb-tree="item=city&branch={{district}}&children=false">Район : <span>{{name}}</span></li>
								<li wb-tree="item=city&branch={{metro}}&children=false">Метро : <span>{{name}}</span></li>
								<li wb-if='"{{metro_notice}}">""'>Расстрояние : <span>{{metro_notice}}</span></li>
								<li>Срок сдачи : <span>{{quart}}/{{year}}</span></li>
							</ul>
						</div>
						<div class="col-md-12 col-lg-6">
							<ul class="list-by-tag hover-secondery-primary">
								<li>Корпусов : <span>{{count({{buildings.data}})}}</span></li>
								<li>Этажей : <span> {{levels_min}}<span wb-if='"{{levels_min}}"!="{{levels_max}}"'> - {{levels_max}}</span></span></li>
								<li>Цена: <span>{{price_min}} - {{price_max}}</span></li>
								<li>Площадь : <span>{{square_min}} м<sup>2</sup> - {{square_max}} м<sup>2</sup></span></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="border-top-1-gray py-30">
					<h3 class="color-secondary line-bottom pb-15 mb-20">Расположение на карте</h3>
					<div wb="module=yamap" geopos="{{geopos.0.geopos}}" height="400" center="{{geopos.0.geopos}}">
							{{geopos}}
					</div>
				</div>
				<div class="border-top-1-gray py-30">
					<h3 class="color-secondary line-bottom pb-15 mb-20">Предложения</h3>
					
					<div id="accordion" class="accordion-style-two" wb-tree="item=types&branch=units&parent=false">
					  	<div class="card border-0 mb-10">
						    <div class="st-top border-0 d-inline-block position-relative card-header p-0 bg-light" id="headingone">
						        <button class="d-block border-0 bg-gray px-30 py-15 w-100 text-left" data-toggle="collapse" data-target="#a{{id}}" aria-expanded="true" aria-controls="collapseone">
						          {{name}}
						        </button>
						    </div>
							
						    <div id="a{{id}}" class="collapse" aria-labelledby="headingone" data-parent="#accordion">
					      		<div class="card-body">
								<table class="table table-condenced table-striped">
									<thead>
									<tr>
									<td>Корпус</td>
									<td class="text-center">Секция</td>
									<td class="text-right">Площадь</td>
									<td class="text-right">Цена</td>
									<td>&nbsp;</td>
									</tr>
									</thead>
									<tbody>
									<wb-foreach wb="table=units&sort=price:a" wb-filter='{"active":"on" , "object":"{{_var.object}}", "type":"{{id}}"}'>
									<tr>
										<td wb-tree="form=objects&item={{_var.object}}&field=buildings"><wb>{{name}}</wb></td>
										<td class="text-center">{{section}}</td>
										<td class="text-right">{{square}}&nbsp;м<sup>2</sup></td>
										<td class="text-right"><a href="/unit/{{id}}/">{{price}}</a></td>
										<td><a href="/unit/{{id}}/"><i class="fa fa-link"></i></a></td>
									</tr>
									<wb-empty>
										<tr class="empty">
										<td colspan="5">Нет доступных предложений</td>
										</tr>
									</wb-empty>
									</wb-foreach>
									</tbody>
								</table>
						      	</div>
						    </div>
					  	</div>
					</div>
					<wb-jq wb="$dom->find('#accordion .empty')->closest('.card')->remove()" />
					<wb-jq wb="$dom->find('#accordion .card:first-child .collapse')->addClass('show')" />
				</div>
			</div>
			<div class="col-md-12 col-lg-4">
				<div class="sidebar-widget bg-white mt-50 shadow py-40 px-30">
					<h3 class="color-secondary line-bottom pb-15 mb-20">Contact an Agent</h3>
					<div class="d-flex">
						<div class="contact-agent-image mr-20 float-left"><img data-src="/tpl/images/team/1.jpg" class="rounded-circle" alt="images"></div>
	                    <div class="align-self-center color-gray">
	                    	<h6 class="d-block mb-1 w-100 color-secondary">Andrew Gunservice</h6>
	                    	<p>fresher@info.com</p>
	                    	<p> (012) 234 567 890</p>
	                    </div>
					</div>
					<form action="single-property.html#" method="post" class="mt-30">
						<div class="row">
							<div class="form-group col-md-12">
								<input type="text" class="form-control bg-gray" placeholder="Your Name">
							</div>
							<div class="form-group col-md-12">
								<input type="email" class="form-control bg-gray" placeholder="Email Address">
							</div>
							<div class="form-group col-md-12">
								<input type="text" class="form-control bg-gray" placeholder="Phone">
							</div>
							<div class="form-group col-md-12">
								<textarea class="form-control bg-gray" rows="4" placeholder="Type Your Massage"></textarea>
							</div>
							<div class="col-lg-12"><button type="submit" class="btn btn-primary w-100">Send Message</button></div>
						</div>
					</form>
				</div>
				<div class="sidebar-widget bg-white mt-50 shadow py-40 px-30">
					<h3 class="color-secondary line-bottom pb-15 mb-20">Latest Properties</h3>
					<div class="owl-carousel slide-1 owl-dots-none">
						<div class="property-item">
							<div class="property-img position-relative overflow-hidden overlay-secondary-4">
								<img data-src="/tpl/images/property/5.jpg" alt="image">
								<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">New</span>
								<ul class="hover-option position-absolute icon-white z-index-1">
									<li>
										<a data-toggle="tooltip" data-placement="top" title="Wishlist" href="single-property.html#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</li>
									<li>
										<a data-toggle="tooltip" data-placement="top" title="Compare" href="single-property.html#"><i class="fa fa-random" aria-hidden="true"></i></a>
									</li>
								</ul>
								<div class="meta-property icon-primary color-white z-index-1">
									<ul>
										<li><i class="fa fa-calendar"></i> 06/27/2020</li>
										<li><i class="fa fa-user"></i> James Bond</li>
									</ul>
								</div>
							</div>
							<div class="property-content bg-white pt-30 pb-50">
								<a class="color-secondary mb-5" href="single-property.html"><h5>Park Avanue Apartment.</h5></a>
								<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>Urbis Building Cathedral Gardens, UK</span>
								<ul class="about-property list-half icon-primary d-table f-14 mb-30 mt-20">
									<li><i class="flaticon-fit-screen"></i>200 sqft</li>
									<li><i class="flaticon-hotel"></i>6 Bedrooms</li>
									<li><i class="flaticon-bathtub"></i>4 Bathrooms</li>
									<li><i class="flaticon-garage"></i>1 Garage</li>
								</ul>
								<div class="property-cost color-white list-half w-100">
									<ul>
										<li>For Rent</li>
										<li>1.2k <sub>/Month</sub></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="property-item">
							<div class="property-img position-relative overflow-hidden overlay-secondary-4">
								<img data-src="/tpl/images/property/1.jpg" alt="image">
								<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">New</span>
								<ul class="hover-option position-absolute icon-white z-index-1">
									<li>
										<a data-toggle="tooltip" data-placement="top" title="Wishlist" href="single-property.html#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</li>
									<li>
										<a data-toggle="tooltip" data-placement="top" title="Compare" href="single-property.html#"><i class="fa fa-random" aria-hidden="true"></i></a>
									</li>
								</ul>
								<div class="meta-property icon-primary color-white z-index-1">
									<ul>
										<li><i class="fa fa-calendar"></i> 06/27/2020</li>
										<li><i class="fa fa-user"></i> James Bond</li>
									</ul>
								</div>
							</div>
							<div class="property-content bg-white pt-30 pb-50">
								<a class="color-secondary mb-5" href="single-property.html"><h5>Villa on Grand Avenue</h5></a>
								<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>366 Glenmore Ave, Brooklyn, USA.</span>
								<ul class="about-property list-half icon-primary d-table f-14 mb-30 mt-20">
									<li><i class="flaticon-fit-screen"></i>200 sqft</li>
									<li><i class="flaticon-hotel"></i>3 Bedrooms</li>
									<li><i class="flaticon-bathtub"></i>2 Bathrooms</li>
									<li><i class="flaticon-garage"></i>1 Garage</li>
								</ul>
								<div class="property-cost color-white list-half w-100">
									<ul>
										<li>For Rent</li>
										<li>1.8k <sub>/Month</sub></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="property-item">
							<div class="property-img position-relative overflow-hidden overlay-secondary-4">
								<img data-src="/tpl/images/property/4.jpg" alt="image">
								<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">New</span>
								<ul class="hover-option position-absolute icon-white z-index-1">
									<li>
										<a data-toggle="tooltip" data-placement="top" title="Wishlist" href="single-property.html#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</li>
									<li>
										<a data-toggle="tooltip" data-placement="top" title="Compare" href="single-property.html#"><i class="fa fa-random" aria-hidden="true"></i></a>
									</li>
								</ul>
								<div class="meta-property icon-primary color-white z-index-1">
									<ul>
										<li><i class="fa fa-calendar"></i> 06/27/2020</li>
										<li><i class="fa fa-user"></i> James Bond</li>
									</ul>
								</div>
							</div>
							<div class="property-content bg-white pt-30 pb-50">
								<a class="color-secondary mb-5" href="single-property.html"><h5>Park Avanue Apartment.</h5></a>
								<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>11-13 Whitehall, London, UK</span>
								<ul class="about-property list-half icon-primary d-table f-14 mb-30 mt-20">
									<li><i class="flaticon-fit-screen"></i>200 sqft</li>
									<li><i class="flaticon-hotel"></i>3 Bedrooms</li>
									<li><i class="flaticon-bathtub"></i>2 Bathrooms</li>
									<li><i class="flaticon-garage"></i>1 Garage</li>
								</ul>
								<div class="property-cost color-white list-half w-100">
									<ul>
										<li>For Rent</li>
										<li>1.8k <sub>/Month</sub></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Single Property End
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
								<img data-src="/tpl/images/partner/1.png" alt="Image not found!">
								<img data-src="/tpl/images/partner/2.png" alt="Image not found!">
								<img data-src="/tpl/images/partner/3.png" alt="Image not found!">
								<img data-src="/tpl/images/partner/4.png" alt="Image not found!">
								<img data-src="/tpl/images/partner/5.png" alt="Image not found!">
								<img data-src="/tpl/images/partner/6.png" alt="Image not found!">
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
    <wb-include wb="tpl=footer.inc.php" />
    <wb-include wb="tpl=scripts.inc.php" />
</body>
</html>