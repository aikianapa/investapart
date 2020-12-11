<!--  widget-bottom.inc.php -->
<div class="patner-subscribe">
	<div class="container">
		<div class="row">
            <wb-data wb="table=pages&item=widget_bottom&field=prop.data">
			<div class="col-md-12 col-lg-12">
				<div class="bg-white shadow py-80">
					<div class="row">
						<div class="col-md-12 col-lg-6 px-60 border-right">
							<div class="side-title pb-30">
								<span class="small-title color-primary position-relative line-primary">{{left.data.header}}</span>
								<h2 class="title mb-20 color-secondary">{{left.name}}</h2>
								<p>{{left.data.text}}</p>
							</div>
							<div class="owl-carousel partners mt-30">
                                <wb-foreach wb="from=left.data.images">
								    <img src="/thumbc/140x140/src/{{img}}" alt="Image">
                                </wb-foreach>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 px-60">
							<div class="side-title pb-30 text-right mt-md-50">
								<span class="small-title color-primary position-relative line-right-primary">{{right.data.header}}</span>
								<h2 class="title mb-20 color-secondary">{{right.name}}</h2>
								<p>{{right.data.text}}</p>
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
            </wb-data>
		</div>
	</div>

