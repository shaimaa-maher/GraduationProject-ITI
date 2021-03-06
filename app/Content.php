<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'content_name', 'content_details','image'
    ];

    public function categories(){
        return $this->belongsToMany(Category::class,'category_contents');
    }
}
