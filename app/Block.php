<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use \Astrotomic\Translatable\Translatable;

    protected $guarded= [];
    
    public $translatedAttributes = ['title', 'description'];
   
    protected $appends=['image_path'];

    public function getImagePathAttribute(){
        return asset('uploads/blocks_images/'.$this->image);
    }
}
