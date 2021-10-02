<!DOCTYPE html>
<html lang="en">
<!-- object.php -->
<wb-include wb="tpl=head.inc.php" />

<body ___oncontextmenu___="return false;">

	<div id="scroll" style="display: none;">
		<i class="fa fa-angle-up"></i>
	</div>

	<wb-include wb="tpl=header.inc.php" />
	<wb-var object="{{id}}" />

	<div class="page-banner overlay-black" style="padding: 40px 0; background-image:url(/thumb/1920x400/src{{images.0.img}});">
		<div class="container h-100">
			<div class="row h-100 align-items-center">
				<div class="col-md-12 col-lg-12">
						<div class="row">
							<div class="col-md-12 col-lg-8">
								<div class="single-property position-relative color-white">
									<span class="bg-primary z-index-1 px-15 py-5 mr-20">{{price_min}} - {{price_max}}</span>
									<h3 class="color-primary mt-15">{{name}}</h3>
									<span class="address icon-primary f-14 mt-5">
										<i class="fa fa-map-marker"></i>{{address}}</span>
									<ul class="property-features icon-primary d-table f-14 mt-15">
										<li wb-tree="item=city&branch={{district}}&children=false">
											<nobr>
												<i class="fa fa-map-o" aria-hidden="true"></i>{{name}}</nobr>
										</li>
										<li wb-tree="item=city&branch={{metro}}&children=false">
											<nobr>
												<i class="fa fa-subway" aria-hidden="true"></i>{{name}}</nobr>
										</li>
									</ul>
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
							</div>
							<div class="col-md-12 col-lg-6">
								<ul class="list-by-tag hover-secondery-primary">
									<li>Корпусов :
										<span>{{count({{buildings.data}})}}</span>
									</li>
									<li>Этажей :
										<span> {{levels_min}}
											<span wb-if='"{{levels_min}}"!="{{levels_max}}"'> - {{levels_max}}</span>
										</span>
									</li>
									<li>Цена:
										<span>{{price_min}} - {{price_max}}</span>
									</li>
									<li>Площадь :
										<span>{{square_min}} м
											<sup>2</sup> - {{square_max}} м
											<sup>2</sup>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="border-top-1-gray py-30">
						<h3 class="color-secondary line-bottom pb-15 mb-20">Расположение на карте</h3>
						<div wb="module=yamap" height="400">
							<geopos data="{{geopos.0}}" />
						</div>
					</div>
					<div class="border-top-1-gray py-30">
						<h3 class="color-secondary line-bottom pb-15 mb-20">Предложения</h3>

						<div id="accordion" class="accordion-style-two" wb-tree="item=types&branch=units&parent=false">
							<div class="card border-0 mb-10">
								<div class="st-top border-0 d-inline-block position-relative card-header p-0 bg-light" id="headingone">
									<button class="d-block border-0 bg-gray px-30 py-15 w-100 text-left" data-toggle="collapse" data-target="#a{{id}}" aria-expanded="true"
									 aria-controls="collapseone">
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
														<td wb-tree="form=objects&item={{_var.object}}&field=buildings&branch={{building}}">
															<wb>{{name}}</wb>
														</td>
														<td class="text-center">{{section}}</td>
														<td class="text-right">{{square}}&nbsp;м
															<sup>2</sup>
														</td>
														<td class="text-right">
															<a href="/unit/{{id}}/">{{price}}</a>
														</td>
														<td>
															<a href="/unit/{{id}}/">
																<i class="fa fa-link"></i>
															</a>
														</td>
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
						<wb-include wb="tpl=widget-feedback.inc.php" />
						<wb-include wb="tpl=widget-latestprop.inc.php" />
				</div>
			</div>
		</div>
	</section>

		<wb-include wb="tpl=footer.inc.php" />
		<wb-include wb="tpl=scripts.inc.php" />
</body>

</html>