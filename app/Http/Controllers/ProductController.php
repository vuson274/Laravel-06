<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ProductController extends Controller
{
    public function oneToMany(){
        $book = Book::find(1);
        dd($book->images);
    }

    public function manyToMany(){
        // $categories = Category::find(3);
        // // $product = Product::find(2);
        // $post = Post::find(2);
        // dd($post->categories);
        $collection = collect([1,2,4]);
        $collect = Collection::make([3,4,5,7]);
        // $collect->each(function ($value, $key){
        //     echo $key;
        // });
        // $coll = $collect->map(function ($value, $key){
        //     return $value +=1;
        // });
        // $books = Book::all();
        // $book = $books->pluck('name');
        // $book = $books->filter(function ($value, $key){
        //     return $value->id >1;
        // });
        // $coll = $collect->reduce(function ($carry, $value){
        //     return $carry+$value;
        // });
        $coll = collect([
            'apple'=>[
                'name'=>'iphone13',
                'brand'=>'apple'
            ],
            'samsung'=>[
                'name'=>'galaxy S23',
                'brand'=>'samsung'
            ]
                        ]);
        $coll1 = $coll->flatten();
        dd($coll1);
    }

    public function file(){
        return view('file');
    }

    public function upload(Request $request){

        $files = $request->file('img');
        for ($i =0; $i< count($files);$i++){
            $file = $files[$i];
            $fileName= time().$i.$file->getClientOriginalName();
            $file->storeAs('product', $fileName,'public');
            $image = new Image();
            $image->imageable_id = 1;
            $image->imageable_type = Book::class;
            $image->path ='stograge/product'.$fileName;
            $image->save();
        }

    }
}
