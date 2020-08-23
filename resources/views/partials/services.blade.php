<section class="our-services" id="services">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h5 class="text-dark">{{ $service->title }}</h5>
                <h3 class="font-weight-medium text-dark mb-5">{!!$service->description!!}</h3>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            @foreach ($services as $service)
                <div class="col-lg-4 col-md-4 col-sm-12 text-center {{ app()->getLocale() == 'ar' ? 'text-lg-right' : 'text-lg-left' }}">
                    <div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <img style="width: 40px;height: 40px;" src="{{ $service->image_path }}" alt="integrated-marketing" data-aos="zoom-in">
                        <h6 class="text-dark mb-3 mt-4 font-weight-medium">
                            {{ $service->title }}
                        </h6>
                        {!!$service->description!!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>