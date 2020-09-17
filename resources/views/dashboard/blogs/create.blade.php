@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.blogs')</h1>

        <ol class="breadcrumb">
            <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
            <li><a href="{{route('dashboard.blogs.index')}}"> @lang('site.blogs')</a></li>
            <li class="active"> @lang('site.add')</li>
            
        </ol>
        </section>

        <section class="content">

           <div class="box box-primary">
               <div class="box-header">
                   <h3 class="box-title">@lang('site.add')</h3>
               </div>
               <div class="box-body">
                @include('partials._errors')
                
               <form action="{{route('dashboard.blogs.store')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('post')}}

                    <div class="form-group">
                        <label>@lang('site.categories')</label>
                        <select name="category_id" class="form-control">
                            <option value="">@lang('site.all.categories')</option>
                        
                            @foreach ($categories as $category )
                                <option value="{{$category->id}}" {{old('category_id')==$category->id ? 'selected' : ''}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    @foreach (config('translatable.locales') as $locale)

                        <div class="form-group">
                            <label>@lang('site.' .$locale. '.title')</label>
                            <input type="text" name="{{$locale}}[tilte]"  class="form-control" value="{{old($locale.'.title')}}">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.' .$locale.'.body')</label>
                            <textarea  name="{{$locale}}[body]"  class="form-control ckeditor" >{{old($locale.'.body')}}</textarea>
                        </div>
                        
                    @endforeach
                    </div>
                    {{--image and image preview--}}
                    <div class="form-group">
                        <label>@lang('site.image')</label>
                        <input type="file" name="image" placeholder="@lang('site.image')" class="form-control image">
                    </div>
                    <div class="form-group">
                        <img src="{{asset('uploads/blogs_images/default.jpg')}}" style="width: 100px;" class="img-thumbnail image-preview" alt=""> 
                    </div>

                    <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>@lang('site.add')</button>
                    </div>
    

              
                </form>





                </div> <!--end of body-->
           </div>
        </section>
    </div>


@endsection