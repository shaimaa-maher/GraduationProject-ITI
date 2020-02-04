<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = [
        'job_name'
    ];
    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function categories(){
        return $this->belongsToMany(Category::class,'career_categories','career_id','category_id');
    }
}
