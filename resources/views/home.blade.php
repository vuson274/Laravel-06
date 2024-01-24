@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            @foreach($list as $item)
            <div class="card col-md-3" style="width: 18rem;">
                <div class="card-body">
                    {{$item->name}}
                </div>
            </div>
            @endforeach
            <div style="display: flex; justify-content: center;">
                {{$list->links()}}
            </div>
        </div>
    </div>
@endsection
