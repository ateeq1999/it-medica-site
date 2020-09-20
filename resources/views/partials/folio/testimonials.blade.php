<div class="testimonials paralax-mf bg-image" style="background-image: url({{ asset('folio/assets/img/overlay-bg.jpg') }})">
    <div class="overlay-mf"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-mf" class="owl-carousel owl-theme">
                    @foreach ($testimonials as $test)
                        <div class="testimonial-box">
                            <div class="author-test">
                                <img src="{{ $test->image_path }}" alt="" class="rounded-circle b-shadow-a">
                                <span class="author">{{$test->title}}</span>
                            </div>
                            <div class="content-test">
                                <p class="description lead">
                                    {!!$test->description!!}
                                </p>
                                <span class="comit"><i class="fa fa-quote-right"></i></span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>