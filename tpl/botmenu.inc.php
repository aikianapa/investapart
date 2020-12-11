			<div class="col-md-6 col-lg-3">
				<div class="footer-widget color-gray-light mt-sm-30">
					<h3 class="color-white line-bottom pb-15 mb-20">Остались вопросы?</h3>
					<div class="widget-content color-primary">
						<ul class="widget-contact">
							<li>
								Звоните
								<span class="color-white">{{_sett.phone}}</span>
							</li>
							<li>
								Пишите
								<span class="color-white">{{_sett.email}}</span>
							</li>
							<li>
								Free Consultation
								<span class="color-white">Fill Out Form</span>
							</li>
						</ul>
					</div>
				</div>
            </div>
            <wb-data wb="table=pages&item=botmenu&field=prop">
			<div class="col-md-6 col-lg-3">
				<div class="footer-widget color-gray-light mt-sm-30" wb-tree="from=data&branch=about&children=false">
					<h3 class="color-white line-bottom pb-15 mb-20">{{name}}</h3>
					<div class="widget-content hover-white-primary">
						<ul class="quick-links">
                            <wb-foreach wb="from=children">
    							<li><a href="{{data.url}}">{{name}}</a></li>
                            </wb-foreach>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-6">
				<div class="footer-widget color-gray-light mt-md-30" wb-tree="from=data&branch=links&children=false">
					<h3 class="color-white line-bottom pb-15 mb-20">{{name}}</h3>
					<div class="widget-content hover-white-primary">
						<ul class="quick-links">
                            <wb-foreach wb="from=children">
    							<li><a href="{{data.url}}">{{name}}</a></li>
                            </wb-foreach>
						</ul>
					</div>
				</div>
            </div>
            </wb-data>
