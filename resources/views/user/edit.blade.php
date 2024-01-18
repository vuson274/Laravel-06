@extends('layout')
@section('content')
    <h2>Thêm user</h2>
    <form action="{{route('admin.user.doUpdate')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">Name</label>
            <input type="text" class="form-control" id="id" name="id" value="{{$user->id}}" readonly>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection