<section class="our-process" id="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-6" data-aos="fade-up">
                <h5 class="text-dark">{{ $about->title }}</h5>
                <h3 class="font-weight-medium text-dark">{{ $test->title }}</h3>
                {{-- <h5 class="text-dark mb-3">Imagination will take us everywhere</h5> --}}
                <p class="font-weight-medium mb-4"> 
                    {!!$about->description!!}
                </p>
                {{-- <div class="d-flex justify-content-start mb-3">
                    <img src="{{ asset('site/images/tick.png') }}" alt="tick" class="mr-3 tick-icon"  >
                    <p class="mb-0">Lorem ipsum dolor sit amet, pretium pretium</p>
                </div>
                <div class="d-flex justify-content-start mb-3">
                    <img src="{{ asset('site/images/tick.png') }}" alt="tick" class="mr-3 tick-icon"  >
                    <p class="mb-0">Lorem ipsum dolor sit amet, pretium pretium</p>
                </div>
                <div class="d-flex justify-content-start">
                    <img src="{{ asset('site/images/tick.png') }}" alt="tick" class="mr-3 tick-icon"  >
                    <p class="mb-0">Lorem ipsum dolor sit amet, pretium pretium</p>
                </div> --}}
            </div>
            <div class="{{ app()->getLocale() == 'en' ? 'col-sm-6 text-right' : 'col-sm-6 text-left' }}" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <img src="{{ $about->image_path }}" alt="idea" class="img-fluid">
            </div>
        </div>
    </div>
</section>