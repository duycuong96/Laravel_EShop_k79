@extends('frontend.master.master')
@section('title','Thanh Toán')
@section('content')
<!-- main -->

<div class="colorlib-shop">
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-10 col-md-offset-1">
                <div class="process-wrap">
                    <div class="process text-center active">
                        <p><span>01</span></p>
                        <h3>Giỏ hàng</h3>
                    </div>
                    <div class="process text-center active">
                        <p><span>02</span></p>
                        <h3>Thanh toán</h3>
                    </div>
                    <div class="process text-center">
                        <p><span>03</span></p>
                        <h3>Hoàn tất thanh toán</h3>
                    </div>
                </div>
            </div>
        </div>
        {{-- chú ý mình đưa Form post lên đây nhé để bao trùm cả button submit --}}
        <form method="post" class="colorlib-form">
            @csrf
        <div class="row">
            <div class="col-md-7">
               
                    <h2>Chi tiết thanh toán</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fname">Họ & Tên</label>
                                {{-- chú ý mình bổ xung name cho các ô input nhé --}}
                                <input type="text" name="full" class="form-control" placeholder="First Name">
                                {{ showError($errors,'full') }}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="fname">Địa chỉ</label>
                                <input type="text" name="address" class="form-control"
                                    placeholder="Nhập địa chỉ của bạn">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="email">Địa chỉ email</label>
                                <input type="email" name="email" class="form-control"
                                    placeholder="Ex: youremail@domain.com">
                                    {{ showError($errors,'email') }}
                            </div>
                            <div class="col-md-6">
                                <label for="Phone">Số điện thoại</label>
                                <input type="text" name="phone" class="form-control"
                                    placeholder="Ex: 0123456789">
                                    {{ showError($errors,'phone') }}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">

                            </div>
                        </div>
                    </div>
          
            </div>
            <div class="col-md-5">
                <div class="cart-detail">
                    <h2>Tổng Giỏ hàng</h2>
                    <ul>
                        <li>

                            <ul>
                                <li><span>1 x Tên sản phẩm</span> <span>₫ 990.000</span></li>
                                <li><span>1 x Tên sản phẩm</span> <span>₫ 780.000</span></li>
                            </ul>
                        </li>

                        <li><span>Tổng tiền đơn hàng</span> <span>₫ 1.370.000</span></li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <p><button type="submit" class="btn btn-primary">Thanh toán</button></p>
                    </div>
                </div>

            </div>
        </div>
        </form>
    </div>
</div>

<!-- end main -->
@endsection
