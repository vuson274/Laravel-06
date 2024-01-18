@extends('layout')
@section('content')
    <h2>Thêm user</h2>
    <form action="{{route('admin.category.doAdd')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection