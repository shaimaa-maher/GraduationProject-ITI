<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = [
        'career_name'
    ];
    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
