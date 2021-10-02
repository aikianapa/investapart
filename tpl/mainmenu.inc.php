<html>

<nav class="navbar navbar-expand-lg navbar-light px-0">
    <a class="navbar-brand" href="/">
        <img src="/thumb/200x45/src/{{_sett.logo.0.img}}" alt="{{_sett.header}}">
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
                <li><a href="/cms/login">Вход</a></li>
                <li><a href="/cms/img data-src=">Регистрация</a></li>
            </ul>
        </div>
    </wb-data>
</nav>
</html>