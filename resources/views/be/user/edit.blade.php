@extends('be.layout')
@section('content')
    <div class="col-lg-12">
        <h2>Sửa tài khoản</h2>
    </div>
    <div><hr></div>
    <div>
        <form action="{{route('admin.user.doEdit')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">id</label>
                <input type="text" class="form-control" id="id" name="id" value="{{$user->id}}" readonly>
            </div>
            <div class="form-group">
                <label for="name">Tên</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" class="form-control" id="phone" name="phone" value="{{$user->phone}}">
            </div>
            <div class="form-group">
                <label for="img">Image</label>
                <input type="file" class="form-control" id="img" name="img">
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
@endsection