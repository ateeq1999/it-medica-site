<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{ asset('site/images/logo.svg') }}" alt="Marshmallow"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="mdi mdi-menu"> </i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <div class="d-lg-none d-flex justify-content-between px-4 py-3 align-items-center">
                <img src="{{ asset('site/images/logo-dark.svg') }}" class="logo-mobile-menu" alt="logo">
                <a href="javascript:;" class="close-menu"><i class="mdi mdi-close"></i></a>
            </div>
            <ul class="navbar-nav ml-auto align-items-center">
                <li class="nav-item active">
                    <a class="nav-link" href="#home">@lang('site.home')<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">@lang('site.services')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">@lang('site.about')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">@lang('site.projects')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">@lang('site.team')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonial">@lang('site.clients')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger" style="background-color: black !important; border-color: black !important" href="#contact">@lang('site.phone-number')</a>
                </li>
            </ul>
        </div>
    </div>
</nav>