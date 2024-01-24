<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable =['name','author_id','price','description'];
    public function author(){
        return $this->belongsTo(Author::class);
    }
    public function orders(){
        return $this->belongsToMany(Order::class,'book_orders','book_id','order_id');
    }

    public function images(){
        return $this->morphMany(Image::class,'imageable');
    }
}
