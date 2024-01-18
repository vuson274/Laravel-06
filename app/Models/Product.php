<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =['name','price','quantity','description'];
    public function category(){
        return $this->belongsToMany(Category::class);
    }

    public function images(){
        return $this->morphMany(Image::class,'imageable');
    }
}
