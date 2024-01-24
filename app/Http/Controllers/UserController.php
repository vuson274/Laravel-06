<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getAll()
    {
        $user = DB::table('users')->where('id', "=", 1)->get();
        dd($user);
    }

    public function where()
    {
        $user = DB::table('users')->where('id', "=", 1)
                  ->where('id', "=", 3)->get();
        dd($user);
    }

    public function orWhere()
    {
        $user = DB::table('users')->where('id', ">", 5)
                  ->orwhere('name', "=", 'Liam Emard')->get();
        dd($user);
    }

    public function groupWhere()
    {
        $user = DB::table('users')->where('id', "=", 5)
                  ->orwhere(function ($query) {
                      $query->where('id', "=", 2)
                            ->where('name', "=", "Rachel Quigley");
                  })->get();
        dd($user);
    }

    public function first()
    {
        $user = DB::table('users')->first();
        dd($user);
    }

    public function select()
    {
        $user = DB::table('users')->select('name', 'email')->get();
        dd($user);
    }

    public function join()
    {
        $author = DB::table('authors')
                    ->join('books', 'authors.id', '=', 'books.author_id')
                    ->select('authors.*', 'books.name as books_name')->get();
        dd($author);
    }

    public function lelfJoin()
    {
        $author = DB::table('authors')
                    ->leftJoin('books', 'authors.id', '=', 'books.author_id')
                    ->select('authors.*', 'books.name as books_name')->get();
        dd($author);
    }

    public function rightJoin()
    {
        $author = DB::table('authors')
                    ->rightJoin('books', 'authors.id', '=', 'books.author_id')
                    ->select('authors.name', 'books.*')->get();
        dd($author);
    }

    public function insert(){
        DB::table('authors')->insert([[
            'name'=>"Thach Lam"],['name'=>"Nam Cao"]]);
    }

    public  function update(){
        Db::table('authors')->where('id',2)->update(
            ['name'=>'Vu trong Phung']
        );
    }

    public function delete(){
        Db::table('authors')->where('id',14)->delete();
    }


    public function oneToOne(){
       $user = User::find(1);
        dd($user->image);
    }

}
