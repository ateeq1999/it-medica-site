<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use \Astrotomic\Translatable\Translatable;

    protected $guarded= [];
    
    public $translatedAttributes = ['title', 'body'];
   
    protected $appends=['image_path'];

    public function getImagePathAttribute(){
        return asset('uploads/blogs_images/'.$this->image);
    }
    
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
