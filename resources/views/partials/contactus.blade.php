<section class="contactus" id="contact">
    <div class="container">
        <div class="row mb-5 pb-5">
            <div class="col-sm-5" data-aos="fade-up" data-aos-offset="-500">
                <img src="{{ $contactus->image_path }}" alt="contact" class="img-fluid">
            </div>
            <div class="col-sm-7" data-aos="fade-up" data-aos-offset="-500">
                <h3 class="font-weight-medium text-dark mt-5 mt-lg-0">{{ $contactus->title }}</h3>
                <h5 class="text-dark mb-5">{!!$contactus->description!!}</h5>
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="@lang('site.name')*">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="email" class="form-control" id="mail" placeholder="@lang('site.email')*">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-control" placeholder="@lang('site.message')*" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <a href="#" class="btn btn-secondary">@lang('site.send')</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>