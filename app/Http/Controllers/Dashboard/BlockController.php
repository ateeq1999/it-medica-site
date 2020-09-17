<?php

namespace App\Http\Controllers\Dashboard;

use App\Block;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class BlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $blocks=Block::when($request->search,function($q) use($request){
        return $q->whereTranslationLike('title','%'.$request->search.'%');
        })->latest()->paginate(5);
        return view('dashboard.blocks.index',compact('blocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.blocks.create');
        
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
            'name'=>'required|unique:blocks',
            'ar.*'=>'required|unique:block_translations,title',
            'ar.*'=>'required|unique:block_translations,description',
            'en.*'=>'required|unique:block_translations,title',
            'en.*'=>'required|unique:block_translations,description',
        ]);

        $request_data=$request->all();

        // dd($request_data);
        if($request->image){
            Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/blocks_images/'. $request->image->hashName()));
            $request_data['image']=$request->image->hashName();
        }

        Block::create($request_data);

        session()->flash('success',__('site.added_succefully'));
        
        return redirect()->route('dashboard.blocks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function show(Block $block)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function edit(Block $block)
    {
        return view('dashboard.blocks.edit',compact('Block'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Block $block)
    {
        $request->validate([
            'name'=>'required',
            'ar.*'=>'required',
            'ar.*'=>'required',
            'en.*'=>'required',
            'en.*'=>'required',
        ]);

        $request_data=$request->all();

        if($request->image){
            if($block->image !='default.jpg'){
                Storage::disk('public_uploads')->delete('/blocks_images/' .$block->image);
                Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
                })->save(public_path('uploads/blocks_images/'. $request->image->hashName()));
            }

            $request_data['image']=$request->image->hashName(); 
        }

        $block->update($request_data);

        session()->flash('success',__('site.updated_succefully'));
        return redirect()->route('dashboard.blocks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function destroy(Block $block)
    {
        if($block->image !='default.jpg'){
            Storage::disk('public_uploads')->delete('/blocks_images/' .$block->image);
        }
        $block->delete();
        session()->flash('success',__('site.deleted_succefully'));
        return redirect()->route('dashboard.blocks.index');

    }
}
