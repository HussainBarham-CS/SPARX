
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="@yield('show-logo')" width="70px" ><span class="text-primary">SPA</span>RX</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="@yield('home-link')">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="@yield('about-link')">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="@yield('services-link')">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="@yield('portfolio-link')">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="@yield('contact-link')">Contact</a>
                </li>


            </ul>
        </div>
    </div>
</nav>







