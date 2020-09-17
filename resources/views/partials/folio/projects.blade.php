<section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
      	<div class="row">
			<div class="col-sm-12">
				<div class="title-box text-center">
					<h3 class="title-a" style="align-self: center !important">
					{{ $project->title }}
					</h3>
					<p class="subtitle-a">
					{!!$project->description!!}
					</p>
					<div class="line-mf"></div>
				</div>
        	</div>
    	</div>
		<div class="row">
			@foreach ($projects as $proj)
				<div class="col-md-4">
					<div class="work-box">
						<a href="{{ asset('folio/assets/img/banner_img.jpg') }}" data-gall="portfolioGallery" class="venobox">
							<div class="work-img">
							<img src="{{ $proj->image_path }}" alt="" class="img-fluid">
							</div>
						</a>
						<div class="work-content">
							<div class="row">
								<div class="col-sm-8">
									<h2 class="w-title">{{ $proj->title }}</h2>
									<div class="w-more">
									<span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="w-like">
									<a href="portfolio-details.html"> <span class="ion-ios-plus-outline"></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
    </div>
</section>