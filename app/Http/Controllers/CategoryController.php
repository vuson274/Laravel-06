<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list(){
        $list = Category::orderBy('id','DESC')->get();
        return view('category.list', compact('list'));
    }

    public function add(){
        return view('category.add');
    }

    public function doAdd(Request $request){
        try {
            $data = $request->all();
            unset($data['_token']);
            Category::create($data);
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->route('admin.category.list');
    }

    public function update($id){
        $category= Category::find($id);
        return view('category.edit',compact('category'));
    }

    public function doUpdate(Request $request){
        try {
            $data = $request->all();
            unset($data['_token']);
            Category::where('id',$data['id'])->update($data);
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->route('admin.category.list');
    }

    public function delete($id){
        Category::where('id',$id)->delete();
        return redirect()->route('admin.category.list');
    }
}
