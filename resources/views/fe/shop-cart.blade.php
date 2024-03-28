@extends('fe.layout')
@section('content')

    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Cart</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Cart</li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- Cart Page Start -->
    <div class="container-fluid py-5">
        @if(session('CART'))
        <div class="container py-5">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Products</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(session('CART') as $cart)
                    <tr>
                        <th scope="row">
                            <div class="d-flex align-items-center">
                                <img src="{{asset($cart['product']->images[0]->path)}}" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="">
                            </div>
                        </th>
                        <td>
                            <p class="mb-0 mt-4">{{$cart['product']['name']}}</p>
                        </td>
                        <td>
                            <p class="mb-0 mt-4">{{number_format($cart['product']['price'], 0) }}</p>
                        </td>
                        <td>
                            <div class="input-group quantity mt-4" style="width: 100px;">
                                <div class="input-group-btn">
                                    <span class="qtybtn" quantity="-1" id = "{{$cart['product']['id']}}" name="{{$cart['quantity']}}" class="btn btn-sm btn-minus rounded-circle bg-light border" >
                                        <i class="fa fa-minus"></i>
                                    </span>
                                </div>
                                <input type="text"  min="1" class="form-control form-control-sm text-center border-0" value="{{$cart['quantity']}}">
                                <div class="input-group-btn">
                                    <span  class="qtybtn" quantity="1" id ="{{$cart['product']['id']}}" name="{{$cart['quantity']}}" class="btn btn-sm btn-plus rounded-circle bg-light border">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="mb-0 mt-4">{{number_format($cart['product']['price']* $cart['quantity'], 0) }}</p>
                        </td>
                        <td>
                            <span  id="{{$cart['product']['id']}}" class="del-cart btn btn-md rounded-circle bg-light border mt-4" >
                                <i class="fa fa-times text-danger"></i>
                            </span>
                        </td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-5">
                <input type="text" class="border-0 border-bottom rounded me-5 py-3 mb-4" placeholder="Coupon Code">
                <button class="btn border-secondary rounded-pill px-4 py-3 text-primary" type="button">Apply Coupon</button>
            </div>
            <div class="row g-4 justify-content-end">
                <div class="col-8"></div>
                <div class="col-sm-8 col-md-7 col-lg-6 col-xl-4">
                    <div class="bg-light rounded">
                        <div class="p-4">
                            <h1 class="display-6 mb-4">Cart <span class="fw-normal">Total</span></h1>
                            <div class="d-flex justify-content-between mb-4">
                                <h5 class="mb-0 me-4">Subtotal:</h5>
                                <p class="mb-0">{{number_format($total,0)}}</p>
                            </div>
                            <div class="d-flex justify-content-between">
{{--                                <h5 class="mb-0 me-4">Shipping</h5>--}}
{{--                                <div class="">--}}
{{--                                    <p class="mb-0">Flat rate: 30,000</p>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                        <div class="py-4 mb-4 border-top border-bottom d-flex justify-content-between">
                            <h5 class="mb-0 ps-4 me-4">Total</h5>
                            <p class="mb-0 pe-4">{{number_format($total,0)}}</p>
                        </div>
                        <a  href="{{route('checkout')}}" class="btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4" type="button">Proceed Checkout</a>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
    <!-- Cart Page End -->
@endsection