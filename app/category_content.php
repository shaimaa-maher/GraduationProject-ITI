<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category_content extends Model
{
    
    protected $fillable = [
        'category_id','content_id'
    ];
}
