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
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#objects" role="tab" aria-controls="home" aria-selected="true">
                                            <i class="fa fa-building-o" aria-hidden="true"></i> Апарт-отели</a>
                                    </li>
                                    <li class="nav-item w-50">
                                        <a class="nav-link " id="contact-tab" data-toggle="tab" href="#units" role="tab" aria-controls="contact" aria-selected="false">
                                            <i class="fa fa-columns" aria-hidden="true"></i> Апартаменты</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-12">
                    <div class="tab-content  border-top-1-gray" id="myTabContent">
                        <div class="tab-pane fade show active" id="objects" role="tabpanel" aria-labelledby="home-tab" 
                        data-ajax="{'url':'/ajax/rendertpl/list_objects.inc.php','html':'#objects'}" auto once>

                        </div>
                        <div class="tab-pane fade" id="units" role="tabpanel" aria-labelledby="contact-tab"
                        data-ajax="{'url':'/ajax/rendertpl/list_units.inc.php','html':'#units'}" auto once>
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