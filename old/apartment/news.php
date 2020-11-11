<meta data-wb="role=include&template=wrapper.inc.php">

<div append="main">
	<section class="short-image no-padding blog-short-title">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-lg-12 short-image-title">
				<h5 class="subtitle-margin second-color">наши</h5>
				<h1 class="second-color">Новости</h1>
				<div class="short-title-separator"></div>
			</div>
		</div>
	</div>
	</section>


	<section class="section-dark section-top-shadow">
		<div class="container page-blog-grid1-container">
			<meta data-wb="role=variable&var=np_var" value="it">
			<div class="row" data-wb="role=foreach&form=news&sort=date:d&size=10">
				<meta data-wb="role=variable&var=np_step" data-wb-where='_ndx > 3' data-wb-if='"{{_var.np_step}}"="" OR "{{_var.np_step}}"="2"' value="1" else="2">
				<meta data-wb="role=variable&var=np_var" data-wb-where='"{{_var.np_step}}"="1"' data-wb-if='"{{_var.np_var}}"="it"' value="ti" else="it">
				<meta data-wb="role=variable&var=np_pos" data-wb-if='"{{_var.np_pos}}"="right"' value="left" else="right">
				<meta data-wb="role=variable&var=np_pos" data-wb-where='"{{_ndx}}"="2" OR "{{_ndx}}"="3"' value="right">
				<meta data-wb="role=variable&var=np_var" data-wb-where='"{{_ndx}}"="3"' value="ti">
				<div class="col-xs-12 col-lg-6 blog-grid1-left-col" data-wb-where='_ndx="1"'>
					<article class="big-blog-grid1-item zoom-cont">
						<figure class="pull-left"><a href="/news/{{id}}/"><img data-wb="role=thumbnail&width=600&height=600" src="0" alt="" class="zoom" data-wb-where='"{{images.0.img}}">""' /></a></figure>
						<div class="blog-grid1-post-content pull-left">
							<div class="blog-grid1-topline">
								<div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>{{_env.user.first_name}}</div>
								<div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>{{date("d.m.Y",{{strtotime(date)}})}}</div>
								<div class="clearfix"></div>
							</div>
							<a href="/news/{{id}}/" class="blog-grid1-title"><h4>{{header}}</h4></a>
							<div class="blog-grid1-separator"></div>
							<p>{{wbGetWords({{text}},10)}}...</p>
							<a href="/news/{{id}}/" class="blog-grid1-button-right">
								<span>подробно</span>
								<div class="blog-grid1-triangle"></div>
							</a>
						</div>
					</article>
				</div>

				<div class="col-xs-12 col-lg-6 blog-grid1-{{_var.np_pos}}-col"  data-wb-where='_ndx > "1" AND "{{_var.np_var}}" = "it"'>
					<article class="blog-grid1-item zoom-cont">
						<figure class=""><a href="/news/{{id}}/"><img data-wb="role=thumbnail&width=300&height=300" src="0" alt="" class="zoom" data-wb-where='"{{images.0.img}}">""' /></a></figure>
						<div class="blog-grid1-post-content">
							<div class="blog-grid1-topline">
								<div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>{{_env.user.first_name}}</div>
								<div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>{{date("d.m.Y",{{strtotime(date)}})}}</div>
								<div class="clearfix"></div>
							</div>
							<a href="/news/{{id}}/" class="blog-grid1-title"><h4>{{header}}</h4></a>
							<div class="blog-grid1-separator"></div>
							<p>{{wbGetWords({{text}},10)}}...</p>
							<a href="/news/{{id}}/" class="blog-grid1-button">
								<span>подробно</span>
								<div class="blog-grid1-triangle"></div>
							</a>
						</div>
					</article>
				</div>

				<div class="col-xs-12 col-lg-6 blog-grid1-{{_var.np_pos}}-col"  data-wb-where='_ndx > "1" AND "{{_var.np_var}}" = "ti"'>
					<article class="blog-grid1-item zoom-cont">
						<div class="blog-grid1-post-content">
							<div class="blog-grid1-topline">
								<div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>{{_env.user.first_name}}</div>
								<div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>{{date("d.m.Y",{{strtotime(date)}})}}</div>
								<div class="clearfix"></div>
							</div>
							<a href="/news/{{id}}/" class="blog-grid1-title"><h4>{{header}}</h4></a>
							<div class="blog-grid1-separator"></div>
							<p>{{wbGetWords({{text}},10)}}...</p>
							<a href="/news/{{id}}/" class="blog-grid1-button-right">
								<span>подробно</span>
								<div class="blog-grid1-triangle"></div>
							</a>
						</div>
						<figure class=""><a href="/news/{{id}}/"><img data-wb="role=thumbnail&width=300&height=300" src="0" alt="" class="zoom" data-wb-where='"{{images.0.img}}">""' /></a></figure>

					</article>
				</div>
			</div>

		</div>
	</section>
</div>
