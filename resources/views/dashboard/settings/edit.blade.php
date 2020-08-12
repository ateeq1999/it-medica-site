@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.settings')</h1>

        <ol class="breadcrumb">
            <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
            <li><a href="{{route('dashboard.settings.index')}}"> @lang('site.settings')</a></li>
            <li class="active"> @lang('site.edit')</li>
            
        </ol>
        </section>

        <section class="content">

           <div class="box box-primary">
               <div class="box-header">
                   <h3 class="box-title">@lang('site.edit')</h3>
               </div>
               <div class="box-body">
                @include('partials._errors')
                <form action="{{route('dashboard.settings.update',$setting->id)}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('put')}}
    
                    <div class="form-group">
                        <label>@lang('site.profiles')</label>
                        <select name="profile_id" class="form-control">
                            <option value="">@lang('site.all.profiles')</option>
                        
                            @foreach ($profiles as $profile )
                                <option value="{{$profile->id}}" {{$setting->id==$profile->id ? 'selected' : ''}}>{{$profile->title}}</option>
                            @endforeach
                        </select>
                    </div>
    
                    @foreach (config('translatable.locales') as $locale)
                    
                        <div class="form-group">
                            <label>@lang('site.' .$locale. '.title')</label>
                            <input type="text" name="{{$locale}}[title]"  class="form-control" value="{{$setting->title}}">
                        </div>
                  
                        <div class="form-group">
                            <label>@lang('site.' .$locale.'.description')</label>
                            <textarea  name="{{$locale}}[description]"  class="form-control ckeditor" >{{$setting->description}}</textarea>
                        </div>
                        
                    @endforeach

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>@lang('site.edit')</button>
                    </div>
              
                </form>





                </div> <!--end of body-->
           </div>
        </section>
    </div>


@endsection