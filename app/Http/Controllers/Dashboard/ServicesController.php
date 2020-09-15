<?php

namespace App\Http\Controllers\Dashboard;

use App\Service;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $services=Service::when($request->search,function($q) use($request){
        return $q->whereTranslationLike('name','%'.$request->search.'%');
        })->latest()->paginate(5);
        return view('dashboard.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.services.create');
        
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
            'ar.*'=>'required|unique:service_translations,name',
            'ar.*'=>'required|unique:service_translations,description',
            'en.*'=>'required|unique:service_translations,name',
            'en.*'=>'required|unique:service_translations,description',
        ]);

        $request_data=$request->all();

        dd($request_data);

        if($request->image){
            Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/services_images/'. $request->image->hashName()));
            $request_data['image']=$request->image->hashName();
        }

        Service::create($request_data);

        session()->flash('success',__('site.added_succefully'));
        
        return redirect()->route('dashboard.services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('dashboard.services.edit',compact('Service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'ar.*'=>'required',
            'ar.*'=>'required',
            'en.*'=>'required',
            'en.*'=>'required',
        ]);

        $request_data=$request->all();

        if($request->image){
            if($service->image !='default.jpg'){
                Storage::disk('public_uploads')->delete('/services_images/' .$service->image);
                Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
                })->save(public_path('uploads/services_images/'. $request->image->hashName()));
            }

            $request_data['image']=$request->image->hashName(); 
        }

        $service->update($request_data);

        session()->flash('success',__('site.updated_succefully'));
        return redirect()->route('dashboard.services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        if($service->image !='default.jpg'){
            Storage::disk('public_uploads')->delete('/services_images/' .$service->image);
        }
        $service->delete();
        session()->flash('success',__('site.deleted_succefully'));
        return redirect()->route('dashboard.services.index');

    }
}
