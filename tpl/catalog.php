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
    <!-- Property Grid Start
==================================================================-->
    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="top-filter pb-15">

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs border-0 navbar-tab-view mt-sm-15" id="myTab" role="tablist" style="line-height: 20px;">
                                    <li class="nav-item w-50">
                                        <a class="nav-link ___active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                            <i class="fa fa-building-o" aria-hidden="true"></i> Апарт-отели</a>
                                    </li>
                                    <li class="nav-item w-50">
                                        <a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                            <i class="fa fa-columns" aria-hidden="true"></i> Апартаменты</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-12">
                    <div class="tab-content  border-top-1-gray" id="myTabContent">
                        <div class="tab-pane fade ___show ___active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <form class="adbanced-form-two amenities-list border-bottom-1-gray" id="catalogFilter">
                                        <div class="row  pb-40">
                                            <div class="form-group col-lg-4 col-md-6 col-12 pt-15">
                                                <div class="select-wrapper position-relative">
                                                    <select wb-tree="item=city&branch=districts&parent=false&children=false&sort=name" wb-change="#catalogFilter [name=metro]"
                                                        placeholder="Район..." name="district" class="form-control has-val">
                                                        <option value="{{id}}" data-district="{{id}}">{{name}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-4 col-md-6 col-6 pt-15">
                                                <div class="select-wrapper position-relative">
                                                    <select wb-tree="item=city&branch=districts->%district%&parent=false&children=false&sort=name" wb-strict="false" placeholder="Метро..."
                                                        name="metro" class="form-control has-val">
                                                        <option value="{{id}}" data-metro="{{id}}" data-district='%district%'>{{name}}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class=" col-lg-4 col-md-6 col-6 pt-15">
                                                <button type="button" class="btn btn-primary d-table mx-auto w-100" wb-change="filter=#catalogFilter&target=#catalogList">Показать</button>
                                            </div>


                                            <div class="form-group col-lg-6 col-md-6 col-6 pt-15">
                                                <div class="price_range">
                                                    <div class="price-filter" wb-data="table=admin&item=complex_data">
                                                        <wb-data wb='table=admin&item=complex_data'>
                                                            <span>
                                                                <input class="filter_range" type="text" name="square__minmax" dimension="&nbsp;кв.м" value="{{intval({{square_min}})}}; {{intval({{square_max}})}}"
                                                                />
                                                            </span>
                                                        </wb-data>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-6 col-md-6 col-6 pt-15">
                                                <div class="price_range">
                                                    <div class="price-filter" wb-data="table=admin&item=complex_data">
                                                        <wb-data wb='table=admin&item=complex_data'>
                                                            <span>
                                                                <input class="filter_range" type="text" name="price__minmax" dimension="&nbsp;₽" step="10000" value="{{intval({{price_min}})}}; {{intval({{price_max}})}}" />
                                                            </span>
                                                        </wb-data>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row" id="catalogList">
                                <wb-foreach wb='table=objects&size={{_sett.page_size}}&sort=name&bind=site.catalogList' wb-filter="{'active':'on'}">
                                    <div class="col-md-12 col-lg-6 col-xl-4">
                                        <div class="property-thumbnail mt-30">
                                            <div class="property-img position-relative overflow-hidden overlay-secondary-4">
                                                <img src="/thumbc/555x485/src/{{images.0.img}}" alt="name">
                                                <div class="thumbnail-content z-index-1 color-white-a color-white">
                                                    <span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For Sale
                                                    </span>
                                                    <ul class="hover-option position-absolute icon-white z-index-1">
                                                        <li>
                                                            <a data-toggle="tooltip" data-placement="top" title="Wishlist" href="#">
                                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a data-toggle="tooltip" data-placement="top" title="Compare" href="#">
                                                                <i class="fa fa-random" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <a class="color-secondary mb-5" href="/object/{{id}}/{{wbFurlGenerate({{name}})}}/">
                                                        <div class="hover-content py-30 px-20 overlay-hover-gradient">

                                                            <div class="thumbnail-title z-index-1 position-relative">
                                                                <span class="thumbnail-price bg-white color-secondary px-15 mb-10 d-table">
                                                                    {{quart}} квартал {{year}}</span>

                                                                <h4>{{name}}</h4>

                                                                <span class="address icon-primary f-14">
                                                                    <i class="fa fa-map-marker"></i>{{address}}&nbsp;</span>
                                                            </div>

                                                            <ul class="about-property icon-primary d-table f-14 z-index-1 position-relative">
                                                                <li wb-tree="item=city&branch={{district}}&children=false">
                                                                    <i class="fa fa-map-o" aria-hidden="true"></i>
                                                                    <span>{{name}}</span>
                                                                </li>
                                                                <li wb-tree="item=city&branch={{metro}}&children=false">
                                                                    <i class="fa fa-subway" aria-hidden="true"></i>
                                                                    <span>{{name}}</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <wb-empty>
                                        <div class="col-12">
                                            <div class="alert alert-info w-100 my-20 p-20">К сожалению, по выбранным критериям ничего не найдено.</div>
                                        </div>
                                    </wb-empty>
                                </wb-foreach>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <form class="adbanced-form-two amenities-list border-bottom-1-gray" id="apartFilter">
                                        <div class="row  pb-40">
                                            <div class="form-group col-lg-4 col-md-6 col-12 pt-15">
                                                <div class="select-wrapper position-relative">
                                                    <select wb-tree="item=city&branch=districts&parent=false&children=false&sort=name" wb-change="#apartFilter [name=metro],#apartFilter [name=object]"
                                                        placeholder="Район..." name="district" class="form-control has-val">
                                                        <option value="{{id}}" data-district="{{id}}">{{name}}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-4 col-md-6 col-6 pt-15">
                                                <div class="select-wrapper position-relative">
                                                    <select wb-tree="item=city&branch=districts->%district%&parent=false&children=false&sort=name" wb-strict="false" placeholder="Метро..."
                                                        wb-change="#apartFilter [name=object]" name="metro" class="form-control has-val">
                                                        <option value="{{id}}" data-metro="{{id}}" data-district='%district%'>{{name}}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-4 col-md-6 col-6 pt-15">
                                                <div class="select-wrapper position-relative">
                                                    <select wb-change="#apartFilter [name=building]" name="object" class="form-control has-val" placeholder="Комплекс...">
                                                        <wb-foreach wb="table=objects" wb-filter='{"district":"%district%","metro":"%metro%","active":"on"}' wb-strict="false">
                                                            <option value="{{id}}">{{name}}</option>
                                                        </wb-foreach>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-4 col-md-6 col-6 pt-15">
                                                <div class="select-wrapper position-relative">
                                                    <select wb-tree="form=objects&item=%value%&field=buildings" name="building" class="form-control" placeholder="Корпус...">
                                                        <option value="{{id}}" data-sections="{{data.sections}}">
                                                            {{name}}</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-4 col-md-6 col-6 pt-15">
                                                <div class="select-wrapper position-relative">
                                                    <select wb-tree="item=types&branch=units&parent=false" placeholder="Тип..." name="type" class="form-control">
                                                        <option value="{{id}}">{{name}}</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class=" col-lg-4 col-md-6 col-6 pt-15">
                                                <button type="button" class="btn btn-primary d-table mx-auto w-100" wb-change="filter=#apartFilter&target=#apartList">Показать</button>
                                            </div>

                                            <div class="form-group col-lg-6 col-md-6 col-6 pt-15">
                                                <div class="price_range">
                                                    <div class="price-filter" wb-data="table=admin&item=complex_data">
                                                        <wb-data wb='table=admin&item=complex_data'>
                                                            <span>
                                                                <input class="filter_range" type="text" name="square__range" dimension="&nbsp;кв.м" value="{{intval({{square_min}})}}; {{intval({{square_max}})}}"
                                                                />
                                                            </span>
                                                        </wb-data>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-6 col-md-6 col-6 pt-15">
                                                <div class="price_range">
                                                    <div class="price-filter" wb-data="table=admin&item=complex_data">
                                                        <wb-data wb='table=admin&item=complex_data'>
                                                            <span>
                                                                <input class="filter_range" type="text" name="price__range" dimension="&nbsp;₽" step="10000" value="{{intval({{price_min}})}}; {{intval({{price_max}})}}"
                                                                />
                                                            </span>
                                                        </wb-data>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row" id="apartList">
                                <wb-foreach wb='table=units&size={{_sett.page_size}}&sort=name&bind=site.apartList'>

                                    <div class="col-md-12 col-lg-6 col-xl-4">
                                        <div class="property-thumbnail mt-30">
                                            <div class="property-img position-relative overflow-hidden overlay-secondary-4">
                                                <img src="/thumbc/555x485/src/{{images.0.img}}" alt="name">
                                                <div class="thumbnail-content z-index-1 color-white-a color-white">
                                                    <span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">
                                                        {{square}} кв.м.
                                                        <span wb-tree="item=types&branch={{type}}&children=false">
                                                            <span>{{name}}</span>
                                                        </span>
                                                    </span>

                                                    <ul class="hover-option position-absolute icon-white z-index-1">
                                                        <li>
                                                            <a data-toggle="tooltip" data-placement="top" title="Wishlist" href="#">
                                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <a class="color-secondary mb-5" href="/object/{{id}}/{{wbFurlGenerate({{name}})}}/">
                                                        <div class="hover-content py-30 px-20 overlay-hover-gradient">

                                                            <div class="thumbnail-title z-index-1 position-relative">

                                                                <span class="thumbnail-price bg-white color-secondary px-15 mb-10 d-table">
                                                                    {{price}}₽</span>
                                                                <wb-data wb="table=objects&item={{object}}">
                                                                    <h4 class="text-truncate">{{name}}</h4>

                                                                    <span class="address icon-primary f-14">
                                                                        <i class="fa fa-map-marker"></i>{{address}}&nbsp;</span>
                                                                </wb-data>
                                                            </div>

                                                            <ul class="about-property icon-primary d-table f-14 z-index-1 position-relative">
                                                                <li class="text-truncate" wb-tree="item=city&branch={{district}}&children=false">
                                                                    <i class="fa fa-map-o" aria-hidden="true"></i>
                                                                    <nobr>{{name}}</nobr>
                                                                </li>
                                                                <li class="text-truncate" wb-tree="item=city&branch={{metro}}&children=false">
                                                                    <i class="fa fa-subway" aria-hidden="true"></i>
                                                                    <nobr>{{name}}</nobr>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <wb-empty>
                                        <div class="col-12">
                                            <div class="alert alert-info w-100 my-20 p-20">К сожалению, по выбранным критериям ничего не найдено.</div>
                                        </div>
                                    </wb-empty>
                                </wb-foreach>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Property Grid End
==================================================================-->
    <!--  Partners and Subscribe Form Start
==================================================================-->
    <div class="patner-subscribe bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="bg-white shadow py-80">
                        <div class="row">
                            <div class="col-md-12 col-lg-6 px-60 border-right">
                                <div class="side-title pb-30">
                                    <span class="small-title color-primary position-relative line-primary">Partners</span>
                                    <h2 class="title mb-20 color-secondary">Our Popular Fellows!</h2>
                                    <p>Luctus posuere facilisi eros auctor lacinia litora. Convall aptent nisy parturient scelerisq.
                                        Nullam fringil condimen integer mauris lacus aliquam, quam massa lobortis commod
                                        proin magna.</p>
                                </div>
                                <div class="owl-carousel partners mt-30">
                                    <img src="tpl/images/partner/1.png" alt="Image not found!">
                                    <img src="tpl/images/partner/2.png" alt="Image not found!">
                                    <img src="tpl/images/partner/3.png" alt="Image not found!">
                                    <img src="tpl/images/partner/4.png" alt="Image not found!">
                                    <img src="tpl/images/partner/5.png" alt="Image not found!">
                                    <img src="tpl/images/partner/6.png" alt="Image not found!">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 px-60">
                                <div class="side-title pb-30 text-right mt-md-50">
                                    <span class="small-title color-primary position-relative line-right-primary">Newsletter</span>
                                    <h2 class="title mb-20 color-secondary">Get Update Now!</h2>
                                    <p>Luctus posuere facilisi eros auctor lacinia litora. Convall aptent nisy parturient scelerisq.
                                        Nullam fringil condimen integer mauris lacus aliquam, quam massa lobortis commod
                                        proin magna.</p>
                                </div>
                                <form class="news-letter bg-gray mt-30">
                                    <div class="form-group position-relative">
                                        <input class="form-control" type="text" name="email" placeholder="Subscribe">
                                        <button class="bg-gray color-secondary">
                                            <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
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