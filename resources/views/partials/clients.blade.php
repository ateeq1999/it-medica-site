<section class="clients pt-5 mt-5"  data-aos="fade-up" data-aos-offset="-400">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="d-sm-flex justify-content-between align-items-center">
                    @foreach ($clients as $client)
                    <img src="{{ $client->image_path }}" alt="deloit" class="col-sm-3 ma-2 p-2 p-lg-0" data-aos="fade-down"  data-aos-offset="-400">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>