<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function products(){
        return $this->morphedByMany(Product::class,'categoriesable');
    }

    public function posts(){
        return $this->morphedByMany(Post::class,'categoriesable');
    }
}
