<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =['name','quantity','price'];
    public function categories(){
        return $this->morphToMany(Category::class,'categoriesable');
    }
}
