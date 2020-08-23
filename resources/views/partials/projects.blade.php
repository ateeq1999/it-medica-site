<section class="our-projects" id="projects">
    <div class="container">
        <div class="row mb-5">
            <div class="col-sm-12">
                <div class="d-sm-flex justify-content-between align-items-center mb-2">
                    <h3 class="font-weight-medium text-dark ">{{ $project->title }}</h3>
                    <div><a href="#" class="btn btn-outline-primary">@lang('site.more')</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-5" data-aos="fade-up">
        <div class="owl-carousel owl-theme">
            @foreach ($projects as $proj)
                <div class="item">
                    <img src="{{ $proj->image_path }}" alt="slider">
                </div>
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="row pt-5 mt-5 pb-5 mb-5">
            <div class="col-sm-3">
                <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-down">
                    <img src="{{ asset('site/images/satisfied-client.svg') }}" alt="satisfied-client" class="mr-3">
                    <div>
                        <h4 class="font-weight-bold text-dark mb-0"><span class="scVal">0</span>%</h4>
                        <h5 class="text-dark mb-0">@lang('site.satisfied')</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-up">
                    <img src="{{ asset('site/images/finished-project.svg') }}" alt="satisfied-client" class="mr-3">
                    <div>
                        <h4 class="font-weight-bold text-dark mb-0"><span class="fpVal">0</span></h4>
                        <h5 class="text-dark mb-0">@lang('site.finished')</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-down">
                    <img src="{{ asset('site/images/team-members.svg') }}" alt="Team Members" class="mr-3">
                    <div>
                        <h4 class="font-weight-bold text-dark mb-0"><span class="tMVal">0</span></h4>
                        <h5 class="text-dark mb-0">@lang('site.team')</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-up">
                    <img src="{{ asset('site/images/our-blog-posts.svg') }}" alt="Our Blog Posts" class="mr-3">
                    <div>
                        <h4 class="font-weight-bold text-dark mb-0"><span class="bPVal">0</span></h4>
                        <h5 class="text-dark mb-0">@lang('site.blogs')</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>