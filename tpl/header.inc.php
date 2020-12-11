<html>
<!-- header.inc.php -->
<header class="nav-on-top">
    <div class="top-header bg-secondary border-bottom-1-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-9 col-xl-8">
                    <ul class="list-style-1 icon-primary color-white d-flex">
                        <li><i class="fa fa-map-marker"></i> {{_sett.address}}</li>
                        <li><i class="fa fa-phone"></i> {{_sett.phone}}</li>
                        <li><i class="fa fa-envelope"></i> {{_sett.email}}</li>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-3 col-xl-4">
                    <ul class="social-media-1 d-flex color-white-a float-right">
                        <wb-include wb-tpl="social.inc.php"/>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="header" class="nav-header header-four bg-secondary py-10 border-bottom-1-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <wb-include wb="tpl=mainmenu.inc.php" />
                </div>
            </div>
        </div>
    </div>
</header>

</html>