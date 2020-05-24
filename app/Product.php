<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function images(){
        return $this->hasMany(Image::class)->where('thumbnail', false);
    }

    public function thumbnail(){
        return $this->hasOne(Image::class)->where('thumbnail', true);
    }
}
