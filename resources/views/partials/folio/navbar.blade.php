<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">DevFolio</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="index.html">@lang('site.home')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">@lang('site.about')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#service">@lang('site.services')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">@lang('site.projects')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#blog">@lang('site.blog')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">@lang('site.contactus')</a>
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