<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category_name'
    ];
    public function careers(){
        return $this->belongsToMany(Career::class);
    }
    public function contents(){
        return $this->belongsToMany(Content::class);
    }
}
