@extends('layout')
@section('content')
    <a class="btn btn-success" href="{{route('admin.category.add')}}">Thêm</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Thao tác</th>
        </tr>
        </thead>
        <tbody>
        @php
            $count = 0
        @endphp
        @foreach($list as $item)
            @php
                $count +=1;
            @endphp
        <tr>
            <th scope="row">{{$count}}</th>
            <td>{{$item->name}}</td>
            <td>
                <a href="{{route('admin.category.update',['id'=>$item->id])}}" class="btn btn-warning">Sửa</a>
                <a href="{{route('admin.category.delete',['id'=>$item->id])}}" class="btn btn-danger">Xóa</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection