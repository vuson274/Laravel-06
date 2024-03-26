@extends('be.layout')
@section('content')
    <div class="col-lg-12">
        <h2>Sản phẩm</h2>
        <div class="text-right">
            <a class="btn btn-success" href="{{route('admin.product.add')}}">Thêm</a>
        </div>
        <div><hr></div>
        <div>
            <table class="table" id="dataTable">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Số lượng đã bán</th>
                    <th scope="col">Thao tác</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $count = 0;
                @endphp
                @foreach($list as $item)
                    @php
                        $count+= 1;
                    @endphp
                    <tr>
                        <th scope="row">{{$count}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{number_format($item->price,0)}}</td>
                        <td>{{$item->quantity}}</td>
                        <td>
                            <img style="width: 100px" src="{{$item->images[0]->path}}">
                        </td>
                        <td>{{$item->sold}}</td>
                        <td>
                            <a  class="btn btn-warning" href="{{route('admin.user.edit', ['id'=> $item->id])}}">Sửa</a>
                            <a class=" btn btn-danger" href="{{route('admin.user.delete', ['id'=> $item->id])}}" onclick="confirm('Bạn có chắc chắn muốn xóa')">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection