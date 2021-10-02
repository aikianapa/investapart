
	<div class="looking-property">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="property-looking">
						<div class="row">
                        <wb-data wb="table=pages&item=widget_faq&field=prop">
                            <wb-foreach wb="from=data">
							<div class="col-md-6 col-lg-3">
								<div class="text-thumbnail text-center bg-secondary py-40 px-30 color-white color-white-a box-shadow-gray">
									<a class="mb-20" href="{{data.link}}">
										<h4>Что такое<br>{{name}}</span></h4>

									<p class="mb-20">{{data.text}}</p>
									<span class="d-block bg-primary icon-white flat-small" wb-if='"{{data.image.0.img}}"==""'>
										<i class="flaticon-rental"></i>
									</span>

									<span class="d-block icon-white flat-small" wb-if='"{{data.image.0.img}}">""'>
										<img data-src="/thumbc/140x140/src/{{data.image.0.img}}" alt="{{name}}" class="rounded-circle" />
									</span>
									</a>
								</div>
							</div>
                            </wb-foreach>
                        </wb-data>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>