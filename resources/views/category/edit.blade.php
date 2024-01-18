@extends('layout')
@section('content')
    <h2>Thêm user</h2>
    <form action="{{route('admin.category.doUpdate')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">Name</label>
            <input type="text" class="form-control" id="id" name="id" value="{{$category->id}}" readonly>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection