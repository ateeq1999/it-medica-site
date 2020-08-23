<section id="home" class="home mt-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-banner">
                    <div class="d-sm-flex justify-content-between mt-5">
                        <div data-aos="zoom-in-up">
                            <div class="banner-title">
                                <h3 class="font-weight-medium">{{ $home->title }}</h3>
                            </div>
                            <p class="mt-3"> 
                                {!!$home->description!!}
                            </p>
                            <a href="#" style="background-color: black !important; border-color: black !important" class="btn btn-danger text-white mt-3">@lang('site.more')</a>
                        </div>
                        <div class="mt-5 mt-lg-0">
                            <img src="{{ $home->image_path }}" alt="marsmello" class="img-fluid" data-aos="zoom-in-up">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>