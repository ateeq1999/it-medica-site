@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1 >@lang('site.blogs')</h1>

            <ol class="breadcrumb">
            <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li class="active"> @lang('site.blogs')</li>

            </ol>
        </section>

        <section class="content">

                <div class="box box-primary">
                    <div class="box-header with border">
                        <h3 class="box-title" style="margin-bottom:15px">@lang('site.blogs')</h3>
                    <form action="{{route('dashboard.blogs.index')}}" method="get" >
                            <div class="row ">
                                <div class="col-md-4">
                                 <input type="text" name="search" class="form-control" placeholder="@lang('site.search')">

                                </div>

                                <div class="col-md-4">
                            <select name="category_id" class="form-control">
                            <option value="">@lang('site.all.categories')</option>
                                    @foreach ($categories as $category )
                           <option value="{{$category->id}}">{{$category->name}}</option>
                                      
                                    @endforeach
                            </select>
                                 </div>

                                <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>@lang('site.search')</button>
                                    @if (auth()->user()->hasPermission('create_users'))
                                        <a href="{{route('dashboard.blogs.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i>@lang('site.add')</a>
    
                                     @else 
                                        <a href="#" class="btn btn-info btn-sm disabled">@lang('site.create')</a>
        
                                    @endif
                               
                               
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="box-body">
                        @if($blogs->count()>0)
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>@lang('site.code')</th>
                                    <th>@lang('site.title')</th>
                                    <th>@lang('site.body')</th>
                                    <th>@lang('site.category')</th>
                                    <th>@lang('site.image')</th>
                                
                                    <th>@lang('site.action')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $index=>$blog )
                                    <tr>
                                    <td>{{$index + 1}}</td>
                                    <td>{{$blog->code}}</td>
                                    <td>{{$blog->title}}</td>
                                    <td>{!!$blog->body!!}</td>
                                    <td>{{$blog->category->title}}</td>
                                    <td><img src="{{$blog->image_path}}" style="width: 100px;" class="img-thumbnail"></td>

                                    <td>
                                    @if (auth()->user()->hasPermission('update_blogs'))
                                    <a href="{{route('dashboard.blogs.edit',$blog->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>@lang('site.edit')</a>

                                    @else 
                                    <a href="#" class="btn btn-info btn-sm disabled"><i class="fa fa-edit"></i>@lang('site.edit')</a>
    
                                         @endif
                                    
                                    @if (auth()->user()->hasPermission('delete_blogs'))
                                       <form action="{{route('dashboard.blogs.destroy',$blog->id)}}"  method="POST" style="display:inline">
                                            {{csrf_field()}}
                                            {{method_field('delete')}}
                                            <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i>@lang('site.delete')</button>
    
                                        </form>
                                    @else 
                                        <button class="btn btn-danger disabled"><i class="fa fa-trash"></i>@lang('site.delete')</button>
                                        
                                    @endif
                                   
                                    </td>
                                    </tr>
                                    
                                @endforeach
                            </tbody>
                            
                        </table>
                        {{$blogs->links()}}
                        @else
                    <h2>@lang('site.data_not_blogs_found')</h2>
                    @endif
                     </div>
                </div>
        </section>
    </div>
    

@endsection