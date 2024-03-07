<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller implements ICRUD
{
    //
    public function list()
    {
        $list = Category::all();
        return view('be.category.list', compact('list'));
    }

    public function add()
    {
        return view('be.category.add');
    }

    public function doAdd(Request $request)
    {
        try {
            $data = $request->all();
            unset($data['_token']);
            Category::create($data);
        }catch (\Exception $exception){
           return redirect()->back()->with('error', "Thêm thất bại");
        }
        return redirect()->route('admin.category.list')->with('success', 'Thêm thành công');
    }

    public function edit($id)
    {
       $data = Category::find($id);
       return view('be.category.edit', compact('data'));
    }

    public function doEdit(Request $request)
    {

        try {
            $data = $request->all();
            unset($data['_token']);
            Category::where('id', $data['id'])->update($data);
        }catch (\Exception $exception){
            return redirect()->back()->with('error', "Sửa thất bại");
        }
        return redirect()->route('admin.category.list')->with('success', 'Sửa thành công');
    }

    public function delete($id)
    {
        try {
            Category::where('id', $id)->delete();
        }catch (\Exception $exception){
            return redirect()->back()->with('error', "Xóa thất bại");
        }
        return redirect()->back()->with('success', "Xóa thành công");
    }
}
