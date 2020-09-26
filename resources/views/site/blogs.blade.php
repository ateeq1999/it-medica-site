@extends('layouts.folio')

@section('content')
  <div class="intro intro-single route bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="intro-title mb-4">{{ $blog_block->title }}</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="{{ route('site.home') }}">@lang('site.company-name')</a>
            </li>
            <li class="breadcrumb-item">
              <a href="#">@lang('site.home')</a>
            </li>
            <li class="breadcrumb-item active">@lang('site.blogs')</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <main id="main">

    <!-- ======= Blog Single Section ======= -->
    <section class="blog-wrapper sect-pt4" id="blog">
      <div class="container">
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
                  <div class="post-author">
                    <a href="{{ route('site.blogs.show', $blog->id ) }}">
                      <span class="author">@lang('site.open')</span>
                    </a>
                  </div>
                  <div class="post-date">
                    <span class="ion-ios-clock-outline"></span> {{$blog->created_at}}
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->
@endsection