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

    <div class="page-banner overlay-black" style="padding: 150px 0; background-image:url(/thumb/1920x400/src{{images.0.img}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="page-banner-title color-primary">{{header}}</h1>
                    <div class="text-area w-50 mt-15 color-white">
                        {{text}}
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
                                <a href="{{_route.uri}}">{{header}}</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner End
==================================================================-->
<!-- Start Map 
==================================================================-->

<div wb-module="yamap" class="map-canvas contact">
[{"address": "Санкт-Петербург, наб.Макарова, д. 60\/1","title": "","geopos": "{{prop.data.geopos.data.value}}","zoom": "15","center": "{{prop.data.geopos.name}}"}]
</div>
<!-- End Map
==================================================================-->
<!-- Contact us Start
==================================================================-->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-7 col-xl-8">
				<form id="contact-form" method="post">
					<h3 class="color-secondary line-bottom pb-15 mb-30">Обратная связь</h3>
					<div class="row">
						<div class="form-group col-md-12 col-lg-6">
							<input type="text" name="name" class="form-control bg-gray" data-label="Имя" placeholder="Ваше имя*">
						</div>
						<div class="form-group col-md-12 col-lg-6">
							<input type="email" name="email" class="form-control bg-gray" placeholder="Эл.почта*">
						</div>
						<div class="form-group col-md-12 col-lg-12">
							<input type="text" id="subject" name="subject" class="form-control bg-gray" placeholder="Тема*">
						</div>
						<div class="form-group col-md-12 col-lg-12">
							<textarea class="form-control bg-gray" id="message" name="message" rows="7" data-label="Сообщение" placeholder="Напишите сообщение..."></textarea>
						</div>
						<div class="col-lg-12"><button type="buttom" data-ajax="/ajax/mail/" id="Send" class="btn btn-secondary">Отправить</button></div>
					</div>

					<div class="error-handel position-relative">
						<div id="success">Ваше сообщение успешно отправлено, спасибо.</div>
						<div id="error">Ошибка отправки сообщения. Пожалуйста, повторите позже.</div>
					</div>
				</form>
			</div>
			<div class="col-md-12 col-lg-5 col-xl-4">
				<h3 class="color-secondary line-bottom pb-15 mb-30 mt-md-50">{{header}}</h3>
				<ul class="contact-info icon-font-small icon-primary">
					<li>
						<i class="fa fa-phone"></i>
						<div class="d-inline-block">
							<strong class="d-block">Телефон</strong>
							<span>{{_var.phone}}&nbsp;</span>
						</div>
					</li>
					<li>
						<i class="fa fa-envelope"></i>
						<div class="d-inline-block">
							<strong class="d-block">Email</strong>
							<span>{{_var.email}}&nbsp;</span>
						</div>
					</li>
					<li>
						<i class="fa fa-map-marker"></i>
						<div class="d-inline-block">
							<strong class="d-block">Адрес</strong>
							<span>{{_var.address}}&nbsp;</span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>


    <wb-include wb="tpl=footer.inc.php" />
    <wb-include wb="tpl=scripts.inc.php" />

</body>

</html>