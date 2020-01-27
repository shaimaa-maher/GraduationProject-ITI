<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category_name'
    ];
    public function careers(){
        return $this->belongsToMany(Career::class,'career_id');
    }


    public function contents(){
        return $this->belongsToMany(Content::class,'category_content','category_id','content_id');
    }
}
