@extends('be.layout')
@section('content')
    <div class="col-lg-12">
        <h2>Thêm tài khoản</h2>
    </div>
    <div><hr></div>
    <div>
        <form action="{{route('admin.product.doAdd')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Loại danh mục</label>
                <select  id="category_id" name="category_id" class="form-control" >
                    @foreach($categories as $category)
                        <option>{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name">Tên</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Giá</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="password">Số lượng</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="">Giảm giá</label>
                <select  id="sale_id" name="sale_id" class="form-control" >
                    @foreach($sales as $sale)
                        <option >{{$sale->percent}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="img">Image</label>
                <input type="file" class="form-control" id="img" name="img">
            </div>
            <div class="form-group">
                <label for="">Mô tả</label>
                <textarea  class="form-control ckeditor" id="editor" name="content"  value="" ></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
@endsection