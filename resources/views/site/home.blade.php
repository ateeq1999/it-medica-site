@extends('layouts.mysite')

@section('content')
    <div class="page-body-wrapper">
        @include('partials.home', [ 'home' => $home ])
        @include('partials.services', [ 'services' => $services, 'service' => $service ])
        @include('partials.about', [ 'about' => $about, 'test' => $test ])
        @include('partials.projects', [ 'projects' => $projects,  'project' => $project ])
        @include('partials.testimonial', [ 'testimonials' => $testimonials ])
        {{-- next --}}
        @include('partials.clients', [ 'clients' => $clients ])
        @include('partials.pricing', [ 'pricing' => $pricing ])
        @include('partials.contactus', [ 'contactus' => $contactus ])
    </div>
@endsection