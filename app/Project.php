<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use \Astrotomic\Translatable\Translatable;

    protected $guarded= [];
    public $translatedAttributes = ['name', 'description'];
    protected $appends=['image_path'];

    public function getImagePathAttribute(){
        return asset('uploads/projects_images/'.$this->image);
    }

    public function getNameAttribute($value){
        return ucfirst($value);
    }
}
