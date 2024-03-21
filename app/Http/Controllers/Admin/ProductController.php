<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class ProductController extends Controller implements ICRUD
{
    //
    public function list()
    {
        $list = Product::all();
        return view('be.product.list', compact('list'));
    }

    public function add()
    {
        $categories = Category::all();
        $sales = Sale::all();
       return view('be.product.add', compact('categories', 'sales'));
    }

    public function doAdd(Request $request)
    {
        // TODO: Implement doAdd() method.
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
    }

    public function doEdit(Request $request)
    {
        // TODO: Implement doEdit() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
