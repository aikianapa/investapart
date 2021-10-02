<!DOCTYPE html>
<html lang="en">
<!--  news-show.php -->
<wb-include wb="tpl=head.inc.php" />

<body ___oncontextmenu___="return false;">
    <!-- Start Back to top
=========================================================================-->
    <div id="scroll" style="display: none;"><i class="fa fa-angle-up"></i></div>

    <wb-include wb="tpl=header.inc.php" />

    <!-- End Header
==================================================================-->
    <!-- Page Banner Start
==================================================================-->
    <div>
		<wb-var wb-if='"{{type}}"=="news"' table="news" />
		<wb-var wb-if='"{{type}}"=="article"' table="articles" />
        <wb-data wb="table=pages&item={{_var.table}}">
            <div class="page-banner overlay-black" style="padding: 150px 0;background-image:url(/thumbc/1920x600/src/{{images.0.img}});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-12">
                            <h1 class="page-banner-title color-primary">{{header}}</h1>
                            <div class="text-area w-50 mt-15 color-white">
                                {{_parent.header}}
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
                                    <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="/news">{{header}}</a></li>
                                    <li class="breadcrumb-item"><a href="{{_route.uri}}">{{_parent.header}}</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </wb-data>
    </div>
    <!-- Page Banner End
==================================================================-->
    <!-- Blog Thumbnail Start
==================================================================-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="blog-item">
                        <div class="blog-img position-relative post-content">
                            <img src="/thumb/770x770/src/{{images.0.img}}" alt="{{header}}">
                            <div class="date post-date float-left bg-gray mr-20 text-center color-secondary">
                                <div class="py-10"><span
                                        class="d-block">{{strftime("%d",strtotime({{date}}))}}</span>{{strftime("%h",strtotime({{date}}))}}
                                </div>
                                <div class="post-love py-5 bg-primary text-white">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    {{strftime("%Y",strtotime({{date}}))}}
                                </div>
                            </div>
                        </div>
                        <div class="blog-info color-secondary-a">
                            <div class="post-meta icon-primary color-secondary-a pt-30 pb-15">
                                <ul class="post-info list-style-1 d-flex color-secondary">
                                    <li><i class="fa fa-user"></i> Admin</li>
                                    <li><a href="blog-details-right-sidebar.html#"><i class="fa fa-comments-o"></i>
                                            583</a></li>
                                    <li><a href="blog-details-right-sidebar.html#"><i class="fa fa-share-alt"></i>
                                            378</a></li>
                                </ul>
                            </div>
                            <h3 class="mb-20 color-secondary">{{header}}</h3>

                            {{text}}

                            <div class="row my-30" wb-if='"{{count({{images}})}}" > 1'>
                                <wb-foreach wb="from=images">
                                    <div class="col-lg-6 col-md-6 mt-30"><img src="{{img}}" alt="image"></div>
                                </wb-foreach>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="blog-sidebar color-secondary-a mt-md-50">
                        <!-- Search form -->
                        <form class="form-inline position-relative shadow">
                            <input class="form-control w-100 mb-0" type="search" placeholder="Search"
                                aria-label="Search">
                            <button class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                        <!-- Categories -->
                        <div class="widget py-50 px-30 bg-white mt-50 shadow">
                            <h3 class="color-secondary line-bottom pb-15 mb-30">Categories</h3>
                            <ul class="widget-catogory">
                                <li><a href="blog-details-right-sidebar.html#">Classic</a></li>
                                <li><a href="blog-details-right-sidebar.html#">Mordan</a></li>
                                <li><a href="blog-details-right-sidebar.html#">Overlay Title</a></li>
                                <li><a href="blog-details-right-sidebar.html#">Mosonry Title</a></li>
                                <li><a href="blog-details-right-sidebar.html#">Mosonry Grid</a></li>
                                <li><a href="blog-details-right-sidebar.html#">Blog List</a></li>
                                <li><a href="blog-details-right-sidebar.html#">Blog Full-Width</a></li>
                            </ul>
                        </div>
                        <!-- Recent News -->
                        <div class="widget py-50 px-30 bg-white mt-50 shadow">
                            <h3 class="color-secondary line-bottom pb-15 mb-30">Recent News</h3>
                            <ul class="widget-news">
                                <li>
                                    <h6><a class="post-widget-title" href="blog-details-right-sidebar.html#">Pellentes
                                            bibendum felis soc feugy tempus suscipit bibendum.</a></h6>
                                    <div class="post-meta color-gray mt-5 f-14">
                                        <span class="d-inline-block">10 Mar 2020</span>
                                        <a class="d-inline-block color-gray float-right"
                                            href="blog-details-right-sidebar.html#">02 Comments</a>
                                    </div>
                                </li>
                                <li>
                                    <h6><a class="post-widget-title" href="blog-details-right-sidebar.html#">Pellentes
                                            bibendum felis soc feugy tempus suscipit bibendum.</a></h6>
                                    <div class="post-meta color-gray mt-5 f-14">
                                        <span class="d-inline-block">10 Mar 2020</span>
                                        <a class="d-inline-block color-gray float-right"
                                            href="blog-details-right-sidebar.html#">02 Comments</a>
                                    </div>
                                </li>
                                <li>
                                    <h6><a class="post-widget-title" href="blog-details-right-sidebar.html#">Pellentes
                                            bibendum felis soc feugy tempus suscipit bibendum.</a></h6>
                                    <div class="post-meta color-gray mt-5 f-14">
                                        <span class="d-inline-block">10 Mar 2020</span>
                                        <a class="d-inline-block color-gray float-right"
                                            href="blog-details-right-sidebar.html#">02 Comments</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Widget Archive -->
                        <div class="widget py-50 px-30 bg-white mt-50 shadow">
                            <h3 class="color-secondary line-bottom pb-15 mb-30">Archive</h3>
                            <ul class="widget-archive">
                                <li><a href="blog-details-right-sidebar.html#">February 2020</a></li>
                                <li><a href="blog-details-right-sidebar.html#">January 2020</a></li>
                                <li><a href="blog-details-right-sidebar.html#">December 2019</a></li>
                                <li><a href="blog-details-right-sidebar.html#">November 2019</a></li>
                                <li><a href="blog-details-right-sidebar.html#">October 2019</a></li>
                            </ul>
                        </div>
                        <!-- Widget Tags -->
                        <div class="widget py-50 px-30 bg-white mt-50 d-inline-block shadow">
                            <h3 class="color-secondary line-bottom pb-15 mb-30">Poppular Tags</h3>
                            <ul class="widget-tags">
                                <li><a href="blog-details-right-sidebar.html#">Realestate,</a></li>
                                <li><a href="blog-details-right-sidebar.html#">Property,</a></li>
                                <li><a href="blog-details-right-sidebar.html#">House,</a></li>
                                <li><a href="blog-details-right-sidebar.html#">Land,</a></li>
                                <li><a href="blog-details-right-sidebar.html#">Bootstrap4,</a></li>
                                <li><a href="blog-details-right-sidebar.html#">Business,</a></li>
                                <li><a href="blog-details-right-sidebar.html#">Corporate,</a></li>
                                <li><a href="blog-details-right-sidebar.html#">Agent,</a></li>
                                <li><a href="blog-details-right-sidebar.html#">Nonprofit</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Thumbnail End
==================================================================-->


    <wb-include wb="tpl=footer.inc.php" />
    <wb-include wb="tpl=scripts.inc.php" />
    <script>
    $('.blog-item blockquote').each(function() {
        let bq = $(this).text();
        $(this)
            .addClass('bg-gray color-secondary text-center p-30 my-30')
            .html('<p class="m-0"><strong>' + bq + '</strong></p>')
            .prepend('<span class="mb-15 color-primary"><i class="fa fa-quote-left"></i></span>');
    });
    </script>

</body>

</html>