<section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              {{$blog_section->title}}
            </h3>
            <p class="subtitle-a">
              {!!$blog_section->description!!}
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach ($blogs as $blog)
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="{{ route('site.blogs.show', $blog->id ) }}"><img src="{{ $blog->image_path }}" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">{{ $blog->category->name }}</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="{{ route('site.blogs.show', $blog->id ) }}">{{ $blog->title }}</a></h3>
                <p class="card-description">
                  {!!$blog->body!!}
                </p>
              </div>
              <div class="card-footer">
                <div class="post-date">
                  <span class="ion-ios-clock-outline"></span> {{$blog->created_at}}
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <div class="row mt-5">
        <div class="col-md-12 col-sm-12 d-flex justify-content-center">
            <a href="{{ route('site.blogs') }}" class="button button-a button-big button-rouded text-white">@lang('site.view_all')</a>
        </div>
      </div>
    </div>
  </section>

