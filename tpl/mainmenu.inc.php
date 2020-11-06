<html>
<nav class="navbar navbar-expand-lg navbar-light px-0">
    <a class="navbar-brand" href="index-7.html#">
        <img src="/thumbc/200x45/src/{{_sett.logo.0.img}}" alt="{{_sett.header}}">
    </a>
    <button class="toggle-btn" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <wb-data wb="table=pages&item=mainmenu&field=prop">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <wb-foreach wb-from="data">
                    <li class="nav-item" wb-if='"{{count({{children}})}}" == 0'>
                        <a class="nav-link" href="{{data.link}}" role="button">{{name}}</a>
                    </li>
                    <li class="nav-item dropdown" wb-if='"{{count({{children}})}}" > 0'>
                        <a class="nav-link dropdown-toggle" href="{{data.link}}" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">{{name}}</a>
                        <ul class="dropdown-menu shadow">
                            <wb-foreach wb-from="children">
                                <li wb-if='"{{count({{children}})}}" == 0'>
                                    <a class="dropdown-item" href="{{data.link}}">{{name}}</a>
                                </li>
                                <li class="dropdown" wb-if='"{{count({{children}})}}" > 0'>
                                    <a class="dropdown-item" href="{{data.link}}">{{name}}</a>
                                    <ul class="dropdown-menu shadow">
                                    <wb-foreach wb-from="children">
                                        <li>
                                        <a class="dropdown-item" href="property-thumbnail-full-width.html">
                                        {{name}}
                                        </a></li>
                                        </wb-foreach>
                                    </ul>
                                </li>
                            </wb-foreach>
                        </ul>

                        </a>
                    </li>
                </wb-foreach>
            </ul>
            <ul class="admin-info color-white-a">
                <li><a href="/cms/signin">Вход</a></li>
                <li><a href="/cms/signup">Регистрация</a></li>
            </ul>
        </div>
    </wb-data>
</nav>
<!--
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="/" role="button">Главная</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="index-7.html#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Listing</a>
                <ul class="dropdown-menu shadow">
                    <li class="dropdown">
                        <a class="dropdown-toggle dropdown-item" href="index-7.html#">Property</a>
                        <ul class="dropdown-menu shadow">
                            <li><a class="dropdown-item" href="property-grid-full-width.html">property Grid</a></li>
                            <li><a class="dropdown-item" href="property-list-full-width.html">Property List</a></li>
                            <li><a class="dropdown-item" href="property-thumbnail-full-width.html">Property
                                    Thumbnail</a></li>
                            <li><a class="dropdown-item" href="property-grid-left-sidebar.html">Property Grid Left
                                    Sidebar</a></li>
                            <li><a class="dropdown-item" href="property-list-left-sidebar.html">Property List Left
                                    Sidebar</a></li>
                            <li><a class="dropdown-item" href="property-thumbnail-left-sidebar.html">Property Thumbnail
                                    Left Sidebar</a></li>
                            <li><a class="dropdown-item" href="property-grid-right-sidebar.html">Property Grid Right
                                    Sidebar</a></li>
                            <li><a class="dropdown-item" href="property-list-right-sidebar.html">Property List Right
                                    Sidebar</a></li>
                            <li><a class="dropdown-item" href="property-thumbnail-right-sidebar.html">Property Thumbnail
                                    Right Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="single-property.html">Single Property</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle dropdown-item" href="index-7.html#">Booking Page</a>
                        <ul class="dropdown-menu shadow">
                            <li><a class="dropdown-item" href="booking.html">Booking Requests</a></li>
                            <li><a class="dropdown-item" href="booking-form.html">Book Now</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="submit-property.html">Submit Property</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="index-7.html#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Agents</a>
                <ul class="dropdown-menu shadow">
                    <li class="dropdown">
                        <a class="dropdown-toggle dropdown-item" href="index-7.html#">Agents</a>
                        <ul class="dropdown-menu shadow">
                            <li><a class="dropdown-item" href="agent-style-1-grid-left-sidebar.html">Agents One Grid
                                    Left</a></li>
                            <li><a class="dropdown-item" href="agent-style-1-grid-right-sidebar.html">Agents One Grid
                                    Right</a></li>
                            <li><a class="dropdown-item" href="agent-style-2-grid-left-sidebar.html">Agents Two Grid
                                    Left</a></li>
                            <li><a class="dropdown-item" href="agent-style-2-grid-right-sidebar.html">Agents Two Grid
                                    Right</a></li>
                            <li><a class="dropdown-item" href="agent-style-1-list-left-sidebar.html">Agents One List
                                    Left</a></li>
                            <li><a class="dropdown-item" href="agent-style-1-list-right-sidebar.html">Agents One List
                                    Right</a></li>
                            <li><a class="dropdown-item" href="agent-style-2-list-left-sidebar.html">Agents Two List
                                    Left</a></li>
                            <li><a class="dropdown-item" href="agent-style-2-list-right-sidebar.html">Agents Two List
                                    Right</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle dropdown-item" href="index-7.html#">Agency</a>
                        <ul class="dropdown-menu shadow">
                            <li><a class="dropdown-item" href="agency-grid-left-sidebar.html">Agency Grid Left
                                    Sidebar</a></li>
                            <li><a class="dropdown-item" href="agency-grid-right-sidebar.html">Agency Grid Right
                                    Sidebar</a></li>
                            <li><a class="dropdown-item" href="agency-list-left-sidebar.html">Agency List Left
                                    Sidebar</a></li>
                            <li><a class="dropdown-item" href="agency-list-right-sidebar.html">Agency List Right
                                    Sidebar</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="index-7.html#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Pages</a>
                <ul class="dropdown-menu shadow">
                    <li><a class="dropdown-item" href="about-us.html">About Us</a></li>
                    <li><a class="dropdown-item" href="services.html">Services</a></li>
                    <li><a class="dropdown-item" href="service-details.html">Service Details</a></li>
                    <li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
                    <li><a class="dropdown-item" href="faq.html">FAQ</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle dropdown-item" href="index-7.html#">Blog</a>
                        <ul class="dropdown-menu shadow">
                            <li><a class="dropdown-item" href="blog-full-width.html">Blog Full</a></li>
                            <li><a class="dropdown-item" href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                            <li><a class="dropdown-item" href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                            <li><a class="dropdown-item" href="blog-details-left-sidebar.html">Blog Details Left
                                    Sidebar</a></li>
                            <li><a class="dropdown-item" href="blog-details-right-sidebar.html">Blog Details Right
                                    Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="invoice.html">Invoice</a></li>
                    <li><a class="dropdown-item" href="login.html">Login</a></li>
                    <li><a class="dropdown-item" href="register.html">Signup</a></li>
                    <li><a class="dropdown-item" href="error.html">Error</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            <li class="nav-item">
                <form class="search-field">
                    <input type="search" class="search form-control" placeholder="Search Here" />
                    <span>
                        <i class="fa fa-search"></i>
                        <i class="fa fa-times"></i>
                    </span>
                </form>
            </li>
        </ul>
    -->

</html>