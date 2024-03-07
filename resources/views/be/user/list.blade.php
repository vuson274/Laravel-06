@extends('be.layout')
@section('content')
    <div class="col-lg-12">
        <h2>Danh Mục</h2>
        <div class="text-right">
            <a class="btn btn-success" href="{{route('admin.category.add')}}">Thêm</a>
        </div>
        <div><hr></div>
        <div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên danh mục</th>
                    <th scope="col">Thao tác</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection