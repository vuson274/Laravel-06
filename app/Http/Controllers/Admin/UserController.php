<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller implements ICRUD
{
    //
    public function list()
    {
        $list = User::all();
        return view('be.user.list', compact('list'));
    }

    public function add()
    {
        return view('be.user.add');
    }

    public function doAdd(Request $request)
    {

        try {
            DB::beginTransaction();
            $data = $request->all();
            $img = $data['img'];
            unset($data['_token']);
            unset($data['img']);
            $data['password'] = Hash::make($data['password']);
            $user = User::create($data);
            $fileName = time().$img->getClientOriginalName();
            $img->storeAs('/user', $fileName,'public');
            $image = new Image();
            $image->path = '/storage/user/'.$fileName;
            $image->imageable_id = $user->id;
            $image->imageable_type = User::class;
            $image->save();
            DB::commit();
        }catch (\Exception $exception){
            DB::rollBack();
            return redirect()->back()->with('error', "Thêm thất bại");
        }
        return redirect()->route('admin.user.list')->with('success',"Thêm thành công");
    }

    public function edit($id)
    {
       $user = User::find($id);
       return view('be.user.edit', compact('user'));
    }

    public function doEdit(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            $user = User::find($data['id']);
            $file = $request->file('img');
            unset($data['_token']);
            unset($data['img']);
            $data['password'] = Hash::make($data['password']);
            User::where('id', $data['id'])->update($data);
            if (empty($file)){
                $image['path'] = $user->image->path;
            } else {
                $idImage  = $user->image->id;
                $fileName = time() . $file->getClientOriginalName();
                $file->storeAs('/user', $fileName, 'public');
                $image = new Image();
                $image['imageable_id']   = $user->id;
                $image['imageable_type'] = User::class;
                $image['path']           = '/storage/user/' . $fileName;
                Image::where('id', $idImage)->delete();
                $image->save();}
            DB::commit();
        }catch (\Exception $exception){
            DB::rollBack();
            return redirect()->back()->with('error', "Sửa thất bại");
        }
        return redirect()->route('admin.user.list')->with('success',"Sửa thành công");
    }

    public function delete($id)
    {
        $user = User::find($id);
        $idImage  = $user->image;
        try {
            $user->delete();
            Image::where('id', $idImage)->delete();

        }catch (\Exception $exception){
            return redirect()->back()->with('error', "Xóa thất bại");
        }
        return redirect()->back()->with('success', "Xóa thành công");
    }
}
