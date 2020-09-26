<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll" href="#page-top">
            <img class="justify-content-center" width="160" height="80" src="{{ asset('folio/assets/img/logo.jpg') }}" alt="Logo">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
        </button>
        <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll active" href="{{ route('site.home') }}">@lang('site.home')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="{{ route('site.home') }}#service">@lang('site.services')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="{{ route('site.home') }}#about">@lang('site.about')</a>
                </li>
                {{-- <li class="nav-item">
                <a class="nav-link js-scroll" href="{{ route('site.home') }}#work">@lang('site.projects')</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="{{ route('site.home') }}#blog">@lang('site.blog')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="{{ route('site.home') }}#contact">@lang('site.contactus')</a>
                </li>
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li class="nav-item">
                        <a class="nav-link js-scroll" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
  </nav>