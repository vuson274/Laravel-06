<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use HasFactory,SoftDeletes;

    // protected $table ='author';
    protected $fillable=['name'];

    public function passPost(){
        return $this->hasOne(PassPost::class);
    }

    public function books(){
        return $this->hasMany(Book::class);
    }
}
