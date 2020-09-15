<?php

namespace App\Http\Controllers\Dashboard;

use App\Project;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $projects=Project::when($request->search,function($q) use($request){
        return $q->whereTranslationLike('name','%'.$request->search.'%');
        })->latest()->paginate(5);
        return view('dashboard.projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.projects.create');
        
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
            'ar.*'=>'required|unique:project_translations,name',
            'ar.*'=>'required|unique:project_translations,description',
            'en.*'=>'required|unique:project_translations,name',
            'en.*'=>'required|unique:project_translations,description',
        ]);

        $request_data=$request->all();

        if($request->image){
            Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/projects_images/'. $request->image->hashName()));
            $request_data['image']=$request->image->hashName();
        }

        Project::create($request_data);

        session()->flash('success',__('site.added_succefully'));
        
        return redirect()->route('dashboard.projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('dashboard.projects.edit',compact('Project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'ar.*'=>'required',
            'ar.*'=>'required',
            'en.*'=>'required',
            'en.*'=>'required',
        ]);

        $request_data=$request->all();

        if($request->image){
            if($project->image !='default.jpg'){
                Storage::disk('public_uploads')->delete('/projects_images/' .$project->image);
                Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
                })->save(public_path('uploads/projects_images/'. $request->image->hashName()));
            }

            $request_data['image']=$request->image->hashName(); 
        }

        $project->update($request_data);

        session()->flash('success',__('site.updated_succefully'));
        return redirect()->route('dashboard.projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        if($project->image !='default.jpg'){
            Storage::disk('public_uploads')->delete('/projects_images/' .$project->image);
        }
        $project->delete();
        session()->flash('success',__('site.deleted_succefully'));
        return redirect()->route('dashboard.projects.index');

    }
}
