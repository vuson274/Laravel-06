@extends('be.layout')
@section('content')
    <div class="col-lg-12">
        <h2>Thêm Danh Mục</h2>
    </div>
    <div><hr></div>
    <div>
        <form action="{{route('admin.category.doAdd')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Tên danh mục</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
@endsection