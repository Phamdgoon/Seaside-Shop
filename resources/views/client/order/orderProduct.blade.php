@extends('client.layouts.app')
@section('title', 'Order')
@section('content')

    <div class="order-container p-lr-100 p-t-30" style="background-color: #f5f5f5">
        <div class="order-address p-tb-40" style="background-color: #fff; border-radius: 10px">
            <div class="up m-l-30 p-b-10">
                <span class="fs-20" style="color: #bf6d72;"><i class="zmdi zmdi-pin p-r-10"></i>Địa chỉ nhận hàng</span>
            </div>
            <div class="down m-l-30">
                <span class="name p-r-10">{{ $user->account_name }}</span>
                <span class="phone p-r-10">{{ $user->phone_number }}</span>
                <span class="address">{{ $user->address }}</span>
            </div>
        </div>
        <div class="product m-t-10 p-tb-40" style="background-color: #fff; border-radius: 10px">
            <div class="m-l-30">
                <table class="scrollable-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th style="width: 450px">Sản phẩm</th>
                            <th>Kiểu sản phẩm</th>
                            <th>Size</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count = 1;
                        @endphp
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td style="display: flex">
                                <img src="{{ $imageUrl }}" alt="Product Image" width="50">
                                <b>{{ $product->name_product }}</b>
                            </td>
                            <td>{{ $productDetail->color }}</td>
                            <td>{{ $size }}</td>
                            <td>{{ number_format($productDetail->price, 0, ',', ',') }}</td>
                            <td>
                                {{ $quantity }}
                            </td>
                            <td>
                                {{ number_format($productDetail->price * $quantity, 0, ',', ',') }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="pay m-t-10 p-tb-40" style="background-color: #fff; border-radius: 10px">
            <div class="m-l-30 ">
                <span class="fs-20" style="color: #bf6d72; font-weight: 600">Phương thức thanh toán</span>
                <ul class="nav nav-tabs Payment-delivery p-lr-10 p-tb-10 m-lr-10" id="myTabs">
                    <li class="nav-item">
                        <a class="nav-link active" id="tab1" data-toggle="tab" href="#content1">Thanh toán khi nhận
                            hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab2" data-toggle="tab" href="#content2">Thanh toán qua VNPay</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="tab2" data-toggle="tab" href="#content3">Thanh toán qua PAYPAL</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="content1">
                        <h4 class="m-3" style="width: 300px;float:left">Thanh toán khi nhận hàng</h4>
                        <div class="d-flex flex-column align-items-end">
                            <div class="d-flex justify-content-between w-25 my-2 mx-4">
                                <p>Tổng tiền hàng</p>
                                <p>{{ number_format($productDetail->price * $quantity, 0, ',', ',') }}</p>
                            </div>
                            <div class="d-flex justify-content-between w-25 my-2 mx-4">
                                <p>Phí vận chuyển</p>
                                <p>20.000</p>
                            </div>

                            <div class="d-flex justify-content-between w-25 my-2 mx-4">
                                <p>Tổng thanh toán</p>
                                <p class="h4 text-danger ">
                                    {{ number_format($productDetail->price * $quantity + 20000, 0, ',', ',') }}</p>
                            </div>
                            <hr />
                            <form action="{{ route('saveOrder') }}" method="post">
                                @csrf
                                <input type="hidden" name="color" value="{{ $productDetail->id }}">
                                <input type="hidden" name="quantity" value="{{ $quantity }}">
                                <input type="hidden" name="size" value="{{ $size }}">
                                <button
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 mx-3 trans-04 js-addcart-detail"
                                    id="btnCart">
                                    Mua ngay
                                </button>
                            </form>                            
                        </div>
                    </div>

                    <div class="tab-pane fade" id="content2">
                        
                            <img class="m-3" style="width: 300px;float:left" src="https://vnpayqr.vn/wp-content/uploads/2021/10/Logo-VNPAY-QR.png" alt="">
                        
                        <div class="d-flex flex-column align-items-end">
                            <div class="d-flex justify-content-between w-25 my-2 mx-4">
                                <p>Tổng tiền hàng</p>
                                <p>{{ number_format($productDetail->price * $quantity, 0, ',', ',') }}</p>
                            </div>
                            <div class="d-flex justify-content-between w-25 my-2 mx-4">
                                <p>Phí vận chuyển</p>
                                <p>20.000</p>
                            </div>

                            <div class="d-flex justify-content-between w-25 my-2 mx-4">
                                <p>Tổng thanh toán</p>
                                <p class="h4 text-danger ">
                                    {{ number_format($productDetail->price * $quantity + 20000, 0, ',', ',') }}</p>
                            </div>
                            <hr />
                            <form action="{{ route('vnpay.payment') }}" method="POST">
                                @csrf
                                <input type="hidden" name="color" value="{{ $productDetail->id }}">
                                <input type="hidden" name="quantity" value="{{ $quantity }}">
                                <input type="hidden" name="size" value="{{ $size }}">
                                <button type="submit" name="redirect" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 mx-3 trans-04 js-addcart-detail"
                                id="btnCart">Mua ngay</button>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="content3">
                        <img class="m-3" style="width: 300px;float:left" src="https://www.yourtradebase.com/growth-hacking/img/logo/paypal.png" alt="">
                        <div class="d-flex flex-column align-items-end">
                            <div class="d-flex justify-content-between w-25 my-2 mx-4">
                                <p>Tổng tiền hàng</p>
                                <p>{{ number_format($productDetail->price * $quantity, 0, ',', ',') }}</p>
                            </div>
                            <div class="d-flex justify-content-between w-25 my-2 mx-4">
                                <p>Phí vận chuyển</p>
                                <p>20.000</p>
                            </div>

                            <div class="d-flex justify-content-between w-25 my-2 mx-4">
                                <p>Tổng thanh toán</p>
                                <p class="h4 text-danger ">
                                    {{ number_format($productDetail->price * $quantity + 20000, 0, ',', ',') }}</p>
                            </div>
                            <hr />
                            <form action="{{ route('paypal.payment') }}" method="POST">
                                @csrf
                                <input type="hidden" name="price" value="{{ $productDetail->price * $quantity + 20000 }}">
                                <input type="hidden" name="color" value="{{ $productDetail->id }}">
                                <input type="hidden" name="quantity" value="{{ $quantity }}">
                                <input type="hidden" name="size" value="{{ $size }}">
                                <button type="submit" name="redirect" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 mx-3 trans-04 js-addcart-detail"
                                id="btnCart">Mua ngay</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

