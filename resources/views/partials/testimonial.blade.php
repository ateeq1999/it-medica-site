<section class="testimonial" id="testimonial">
    <div class="container">
        <div class="row  mt-md-0 mt-lg-4">
            <div class="col-sm-6 text-white" data-aos="fade-up">
                <p class="font-weight-bold mb-3">{{ $test->title }}</p>
                <h3 class="font-weight-medium">{!!$test->description!!}</h3>
                <ul class="flipster-custom-nav">
                    <li class="flipster-custom-nav-item">
                        <a href="javascript:;" class="flipster-custom-nav-link" title="0"></a>
                    </li>
                    <li class="flipster-custom-nav-item">
                        <a href="javascript:;" class="flipster-custom-nav-link" title="1"></a>
                    </li>
                    <li class="flipster-custom-nav-item">
                        <a href="javascript:;" class="flipster-custom-nav-link" title="2"></a>
                    </li>
                    <li class="flipster-custom-nav-item">
                        <a href="javascript:;" class="flipster-custom-nav-link" title="3"></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6" data-aos="fade-up">
                <div id="testimonial-flipster">
                    <ul>
                        @foreach ($testimonials as $test)
                            <li>
                                <div class="testimonial-item">
                                    <img src="{{ $test->image_path }}" alt="icon" class="testimonial-icons">
                                    {!!$test->description!!}
                                    {!!$test->description!!}
                                    {!!$test->description!!}
                                    {{-- <h6 class="testimonial-author">{{ $test->author }}</h6>
                                    <p class="testimonial-destination">{{ $test->accounts }}</p> --}}
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>