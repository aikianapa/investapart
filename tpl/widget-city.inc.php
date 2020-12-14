	<section class="gallery bg-gray">
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-12">
                    <wb-data wb="table=pages&item=widget_city">
                        <div class="main-title w-75 mx-auto d-table text-center mb-30">
                            <span class="small-title color-primary position-relative line-2-primary">{{prop.data.subhead.name}}</span>
                            <h2 class="title mb-20 color-secondary">{{header}}</h2>
                            <span class="sub-title">{{text}}</span>
                        </div>
                    </wb-data>
	            </div>
	            <wb-data wb="table=admin&item=complex_data">
	                    <div class="col-lg-4">
	                        <div class="row">
	                            <div class="col-lg-12">
                                    <wb-var count="{{district_objects.0.count}}" />
	                                <div class="gallery-img overflow-hidden position-relative mt-30 overlay-secondary" wb-tree="item=city&branch={{district_objects.0.district}}&children=false">
	                                    <img data-src="/thumbc/350x180/src/{{data.image.0.img}}" alt="{{name}}" >
	                                    <div class="cities-info">
	                                        <h5>
	                                            <a class="color-white" href="/catalog">{{name}}</a>
	                                        </h5>
	                                        <span class="color-gray-light mt-5 d-inline-block">район: {{_var.count}}</span>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-lg-12">
                                    <wb-var count="{{district_objects.1.count}}" />
	                                <div class="gallery-img overflow-hidden position-relative mt-30 overlay-secondary" wb-tree="item=city&branch={{district_objects.1.district}}&children=false">
	                                    <img data-src="/thumbc/830x900/src/{{data.image.0.img}}" alt="{{name}}" >
	                                    <div class="cities-info">
	                                        <h5>
	                                            <a class="color-white" href="/catalog">{{name}}</a>
	                                        </h5>
	                                        <span class="color-gray-light mt-5 d-inline-block">район: {{_var.count}}</span>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-5">
                            <wb-var count="{{district_objects.2.count}}" />
	                        <div class="gallery-img overflow-hidden position-relative mt-30 overlay-secondary" wb-tree="item=city&branch={{district_objects.2.district}}&children=false">
	                            <img data-src="/thumbc/900x750/src/{{data.image.0.img}}" alt="{{name}}" >
	                            <div class="cities-info">
	                                <h5>
	                                    <a class="color-white" href="/catalog">{{name}}</a>
	                                </h5>
	                                <span class="color-gray-light mt-5 d-inline-block">район: {{_var.count}}</span>
	                            </div>
                            </div>
                            <wb-var count="{{district_objects.3.count}}" />
	                        <div class="gallery-img overflow-hidden position-relative mt-30 overlay-secondary" wb-tree="item=city&branch={{district_objects.3.district}}&children=false">
	                            <img data-src="/thumbc/900x382/src/{{data.image.0.img}}" alt="{{name}}" >
	                            <div class="cities-info">
	                                <h5>
	                                    <a class="color-white" href="/catalog">{{name}}</a>
	                                </h5>
	                                <span class="color-gray-light mt-5 d-inline-block">район: {{_var.count}}</span>
	                            </div>
	                        </div>

	                    </div>
	                    <div class="col-lg-3">
                            <wb-var count="{{district_objects.4.count}}" />
	                        <div class="gallery-img overflow-hidden position-relative mt-30 overlay-secondary" wb-tree="item=city&branch={{district_objects.4.district}}&children=false">
	                            <img data-src="/thumbc/600x750/src/{{data.image.0.img}}" alt="{{name}}" >
	                            <div class="cities-info">
	                                <h5>
	                                    <a class="color-white" href="/catalog">{{name}}</a>
	                                </h5>
	                                <span class="color-gray-light mt-5 d-inline-block">район: {{_var.count}}</span>
	                            </div>
                            </div>
                            <wb-var count="{{district_objects.5.count}}" />
	                        <div class="gallery-img overflow-hidden position-relative mt-30 overlay-secondary" wb-tree="item=city&branch={{district_objects.5.district}}&children=false">
	                            <img data-src="/thumbc/750x709/src/{{data.image.0.img}}" alt="{{name}}" >
	                            <div class="cities-info">
	                                <h5>
	                                    <a class="color-white" href="/catalog">{{name}}</a>
	                                </h5>
	                                <span class="color-gray-light mt-5 d-inline-block">район: {{_var.count}}</span>
	                            </div>
	                        </div>
	                    </div>
	          
	            </wb-data>
	        </div>
	    </div>
	</section>