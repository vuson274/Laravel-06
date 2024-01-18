<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function list(){
        $list = User::orderBy('id','DESC')->get();
        return view('user.list', compact('list'));
    }

    public function add(){
        return view('user.add');
    }

    public function doAdd(Request $request){
        try {
            $data = $request->all();
            unset($data['_token']);
            $data['password'] = Hash::make($data['password']);
            User::create($data);
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->route('admin.user.list');
    }

    public function update($id){
        $user = User::find($id);
        return view('user.edit',compact('user'));
    }

    public function doUpdate(Request $request){
        try {
            $data = $request->all();
            unset($data['_token']);
            $user = User::find($data['id']);
            if ($data['password']==""||$data['password']==null){
                $data['password']= $user->password;
            }else{
                $data['password']= Hash::make($data['password']);
            }
            User::where('id',$data['id'])->update($data);
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->route('admin.user.list');
    }

    public function delete($id){
        User::where('id',$id)->delete();
        return redirect()->route('admin.user.list');
    }
}
