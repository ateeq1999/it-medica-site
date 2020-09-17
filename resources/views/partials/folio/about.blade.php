<section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                {{-- <div class="row">
                  <div class="col-sm-6 col-md-5">
                    <div class="about-img">
                      <img src="{{ $about->image_path }}" class="img-fluid rounded b-shadow-a" alt="">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-7">
                    <div class="about-info">
                      <p><span class="title-s">@lang('site.name'): </span> <span>@lang('site.company-name')</span></p>
                      <p><span class="title-s">@lang('site.profile'): </span> <span>@lang('site.company-profile')</span></p>
                      <p><span class="title-s">@lang('site.email'): </span> <span>@lang('site.company-email')</span></p>
                      <p><span class="title-s">@lang('site.phone'): </span> <span>@lang('site.company-phone')</span></p>
                    </div>
                  </div>
                </div> --}}
                <div class="skill-mf">
                  <img src="{{ $about->image_path }}" class="img-fluid rounded b-shadow-a" alt="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                        {{ $about->title }}
                    </h5>
                  </div>
                  <p class="lead">
                    {!!$about->description!!}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>