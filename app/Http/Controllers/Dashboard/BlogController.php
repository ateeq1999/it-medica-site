<?php

namespace App\Http\Controllers\Dashboard;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories=Category::all();
        $blogs=Blog::when($request->search,function($q) use($request){
            return $q->whereTranslationLike('title','%'. $request->search .'%');
        })->when($request->category_id,function($q) use($request){
            return $q->where('category_id',$request->category_id);

        })->latest()->paginate(3);
        return view('dashboard.blogs.index',compact('categories','blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('dashboard.blogs.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'category_id'=>'required',
            'ar.*'=>'required|unique:blog_translations,title',
            'ar.*'=>'required',
            'en.*'=>'required|unique:blog_translations,title',
            'en.*'=>'required',
        ]);

        $request_data=$request->all();

        if($request->image){
            Image::make($request->image)->resize(666, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/blogs_images/'. $request->image->hashName()));
            $request_data['image']=$request->image->hashName();
        }

       Blog::create($request_data);

       session()->flash('success',__('site.added_succefully'));
       return redirect()->route('dashboard.blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $categories=Category::all();
        return view('dashboard.blogs.edit',compact('categories','blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'category_id*'=>'required',
            'ar.*'=>'required',
            'ar.*'=>'required',
            'en.*'=>'required',
            'en.*'=>'required',
        ]);

       $request_data=$request->all();

       if($request->image){
           if($blog->image !='default.jpg'){
            Storage::disk('public_uploads')->delete('/blogs_images/' .$blog->image);
            Image::make($request->image)->resize(666, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/blogs_images/'. $request->image->hashName()));
        }
            $request_data['image']=$request->image->hashName(); 
       }
        $blog->update($request_data);
       session()->flash('success',__('site.updated_succefully'));
       return redirect()->route('dashboard.blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if($blog->image !='default.jpg'){
            Storage::disk('public_uploads')->delete('/blogs_images/' .$blog->image);
        }
        $blog->delete();
        session()->flash('success',__('site.deleted_succefully'));
        return redirect()->route('dashboard.blogs.index');
    }
}
