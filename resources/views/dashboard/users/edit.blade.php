@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.users')</h1>

        <ol class="breadcrumb">
            <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
            <li><a href="{{route('dashboard.users.index')}}"> @lang('site.users')</a></li>
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
               <form action="{{route('dashboard.users.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('put')}}
                 <div class="form-group">
                     <label>@lang('site.first_name')</label>
                     <input type="text" name="first_name" placeholder="@lang('site.first_name')" class="form-control" value="{{$user->first_name}}">

                 </div>
                 <div class="form-group">
                        <label>@lang('site.last_name')</label>
                        <input type="text" name="last_name" placeholder="@lang('site.last_name')" class="form-control" value="{{$user->last_name}}">
   
                    </div>
                    <div class="form-group">
                            <label>@lang('site.email')</label>
                            <input type="email" name="email" placeholder="@lang('site.email')" class="form-control" value="{{$user->email}}">
       
                    </div>
                    <div class="form-group">
                            <label>@lang('site.image')</label>
                            <input type="file" name="image" placeholder="@lang('site.image')" class="form-control image">
       
                    </div>
                    <div class="form-group">
                    <img src="{{$user->image_path}}" style="width: 100px;" class="img-thumbnail image-preview" alt=""> 
       
                    </div>
                        <div class="form-group">
                            <label>@lang('site.permissions')</label>
                            
                            <div class="nav-tabs-custom">
                                @php
                                   $models=['users','categories','products'] ;
                                   $maps=['create','read','update','delete']
                                @endphp

                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                      @foreach ( $models as $index=>$model)
                                      <li class="nav-item">
                                      <a class="nav-link {{$index ==0 ? 'active' : ''}}" id="pills-home-tab" data-toggle="pill" href="#{{$model}}" role="tab" aria-controls="pills-home" aria-selected="true">@lang('site.' . $model)</a>
                                    </li>
                                          
                                      @endforeach      
                                    </ul>
                                          <div class="tab-content" id="pills-tabContent">
                                           @foreach ($models as $index=>$model)
                                          <div class="tab-pane {{$index==0 ? 'active' : ''}}" id="{{$model}}" role="tabpanel" aria-labelledby="pills-home-tab">
                                            @foreach ($maps as $map)
                                            <label><input type="checkbox" name="permissions[]" {{$user->hasPermission($map.'_'.$model) ? 'checked' : ''}} value="{{$map.'_'.$model}}">@lang('site.'.$map)</label>    
                                            @endforeach
                                              
                                            </div>
                                           @endforeach
                                            
                            </div>
                        </div>
                       


                        <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>@lang('site.edit')</button>
                        </div>
    

              
                </form>





                </div> <!--end of body-->
           </div>
        </section>
    </div>


@endsection