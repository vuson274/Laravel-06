<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Order;
use App\Models\PassPost;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function list(){
        // $list = Author::all();
        $list = Author::onlyTrashed()->get();
        dd($list);
    }

    public function find(){
        $author= Author::find(13);
        dd($author);
    }

    public function insert(){
        // for ($i =0; $i<3;$i++){
        //     $author = new Author();
        //     $author->name = "ten".$i;
        //     $author->save();
        // }
        Author::create([
                           'name'=>"ten5"
                       ]
        );

    }

    public function update(){
        // $author = Author::find(2);
        // $author->name = 'son';
        // $author->save();

        Author::where('id',2)->update([
            'name'=>'vu thanh son'
                                      ]);
    }

    public function delete(){
        // $author = Author::find(2);
        // $author->delete();

        // Author::where('id',20)->delete();
        Author::onlyTrashed()->where('id',20)->forceDelete();
    }

    public function paginate(){
        $list = Author::paginate(15);
        return view('home', compact('list'));
    }
    public function oneToOne(){
        // $author = Author::find(23);
        $passPost = PassPost::find(5);
        dd($passPost->author);
    }

    public function oneToMany(){
        // $author = Author::find(23);
        $book = Book::find(2);
        dd($book->author);
    }

    public function manyToMany(){
        // $book = Book::find(3);
        $order =Order::find(1);
        dd($order->books);
    }
}
