<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed"
                    data-toggle="collapse" data-target="#navbar" aria-expanded="false"
                    aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span> <span
                    class="icon-bar"></span> <span class="icon-bar"></span> <span
                    class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img alt="Mithat DURAK" src="http://mithatdurak.com/images/favicon.png">
            </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav  ">
                <li class="@yield('nav_home_class')"><a href="/">Home</a></li>
                <li class="@yield('nav_about_class')"><a href="about">About Me</a></li>
                <li class="@yield('nav_publications_class')"><a href="publications">Publications</a></li>
                <li class="@yield('nav_contact_class')"><a href="contact">Contact</a></li>
                <li class="@yield('nav_works_class')"><a href="works">Works</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>

