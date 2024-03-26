<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['category_id','name','price','quantity','description','sold','view','sale_id'];
    public function images(){
        return $this->morphMany(Image::class,'imageable');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
