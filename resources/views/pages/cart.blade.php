@extends('index')
@section('content')

<style>
    .section-slider {
        display: none;
    }
</style>

<div style="margin-top: 135px;"></div>
<!-- MAIN CONTENT -->
<main>
    <section class="cart-section">
        <h2 class="container heading-secondary cart-title margin-bottom-super">
            Giỏ hàng
        </h2>

        <div class="container grid cart-grid">
            <div class="cart-main">
                <div class="book-container">
                    <h1 class="cart-head">Sách đã thêm</h1>
                    <?php
                    $content = Cart::content();
                    // // Sử dụng print_r
                    // echo '<pre>';
                    // print_r($content);
                    // echo '</pre>';
                    // 
                    ?>

                    @if($content->isNotEmpty())
                    @foreach($content as $v_content)


                    <div class="cart-book">
                        <!-- <form action="#" > -->
                        <form class="cart-book__form" action="{{URL::to('/update-cart-quantity')}}" method="post">
                            {{csrf_field()}}
                            <!-- <input type="checkbox" class="checkbox margin-right-md" /> -->

                            <div class="img-box margin-right-sm">
                                <img class="cart-img" src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" alt="img" />
                            </div>
                            <p class="cart-book-title margin-right-super">
                                {{$v_content->name}}
                            </p>

                            <div class="price-tag margin-right-super">
                                <p class="price-tag__sale">{{number_format($v_content->price)}}<span>đ</span></p>
                                <!-- <p class="price-tag__origin">100.000<span>đ</span></p> -->
                            </div>

                            <!-- <form action="{{URL::to('/update-cart-quantity')}}" method="post"> -->


                            <div class="quantity-box__cart quantity-box margin-right-super">
                                <!-- <button type="button" class="btn-decrease">-</button> -->
                                <input style="width: 70px; border-radius: 10px; color: #000; padding: 10px 5px; border: 1px solid #1a8e8b" name="cart_quantity" value="{{$v_content->qty}}" type="number" min="1" value="1" />
                                <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart">
                                <!-- <button type="button" class="btn-increase">+</button> -->
                                <button type="submit" value="Cập nhật" name="update_qty" style="width: 70px; border-radius: 10px ;margin-left: 10px;background-color: #1a8e8b; color: #fff; padding: 10px 5px; border: none; cursor: pointer;">Cập nhật</button>

                            </div>

                            <!-- JavaScript -->


                            <div class="price-tag margin-right-super">
                                <p class="price-tag__sale">
                                    <?php
                                    $subtotal = $v_content->price * $v_content->qty;
                                    echo number_format($subtotal);
                                    ?><span>đ</span></p>
                                <!-- <p class="price-tag__origin">100.000<span>đ</span></p> -->
                            </div>


                            <a onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không?')" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}" title="Delete" data-toggle="tooltip" class="btn btn-sm btn-primary">
                                <ion-icon class="delete-icon" name="trash-outline"></ion-icon>
                            </a>

                            <!-- </form> -->

                        </form>

                        <!-- <button class="btn-detele-item">

                        </button> -->
                    </div>
                    @endforeach

                    @else
                    
                    <div class="cart-book">
                        <h3>Giỏ hàng trống!</h3>
                    </div>
                    @endif


                </div>

                <!-- <div class="address-section">
                    <h1 class="cart-head">Thông tin nhận hàng</h1>
                    <form action="#" method="POST" class="address-form address-form_cart">
                        <div class="address-group">
                            <div class="form-control">
                                <label for="fullName">Họ và tên</label>
                                <input type="text" class="user-name" id="fullName" name="fullName" required />
                            </div>

                            <div class="form-control">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" required />
                            </div>

                            <div class="form-control">
                                <label for="phone">Số điện thoại</label>
                                <input type="tel" id="phone" name="phone" required />
                            </div>
                            <div class="form-control">
                                <label for="province">Tỉnh / Thành phố</label>
                                <select id="province" name="province" required>
                                    <option value="">Chọn tỉnh (thành phố)</option>
                                    <option value="province1">Province 1</option>
                                    <option value="province2">Province 2</option>
                                </select>
                            </div>

                            <div class="form-control">
                                <label for="district">Quận / Huyện</label>
                                <select id="district" name="district" required>
                                    <option value="">Chọn quận (huyện)</option>
                                </select>
                            </div>

                            <div class="form-control">
                                <label for="city">Phường / Xã</label>
                                <select id="ward" name="ward" required>
                                    <option value="">Chọn phường (xã)</option>
                                </select>
                            </div>

                            <div class="form-control">
                                <label for="street">Đường</label>
                                <input type="text" id="street" name="street" required />
                            </div>

                            <div class="form-control">
                                <label for="description">Thêm mô tả</label>
                                <textarea type="textarea" id="description" name="description" rows="4" cols="30"></textarea>
                            </div>
                        </div>
                    </form>
                </div> -->
            </div>
            <aside class="customer-info">
                <!-- <div class="address-box">
                    <div class="address-header">
                        <p class="address-heading">Giao tới</p>
                        <a href="#" class="change-address__link">Thay đổi</a>
                    </div>
                    <div class="info">
                        <p class="info-name padding-r-md">Bùi Thanh Duy</p>
                        <p class="info-phone padding-l-md">0383314133</p>
                    </div>
                    <address class="info-address">
                        <span>Nhà</span>
                        1/2 đường số 7, Phường Bình Thọ, Thành phố Thủ Đức, Hồ Chí Minh
                    </address>
                </div> -->
                <!-- payment method -->
                <!-- <div class="payment-method">
                    <h2 class="payment-method-title">Phương thức thanh toán</h2>
                    <div class="payment-method-options">
                        <label class="payment-method-option">
                            <input type="radio" name="paymentMethod" value="creditCard" />
                            <span class="payment-method-option-text">Thẻ tín dụng</span>
                        </label>
                        <label class="payment-method-option">
                            <input type="radio" name="paymentMethod" value="paypal" />
                            <span class="payment-method-option-text">PayPal</span>
                        </label>
                        <label class="payment-method-option">
                            <input checked type="radio" name="paymentMethod" value="bankTransfer" />
                            <span class="payment-method-option-text" selected>Tiền mặt</span>
                        </label>
                    </div>
                </div> -->

                <div class="total-price-section">
                    <h2 class="price-title">Thanh toán</h2>
                    <div class="subtotal">
                        <span>Tạm tính:</span>
                        <p><span class="">{{Cart::subtotal()}}</span><span>đ</span></p>
                    </div>
                    <div class="shipping">
                        <span>Phí ship:</span>
                        <p><span class="money">0</span><span>đ</span></p>
                    </div>
                    <div class="subtotal">
                        <span>Giảm giá:</span>
                        <p><span class="money">0</span><span>đ</span></p>
                    </div>
                    <div class="subtotal">
                        <span>Tổng tiền:</span>
                        <p>
                            <span class="money">{{Cart::subtotal()}}</span><span>đ</span>
                        </p>
                    </div>
                </div>


                <?php
                $customer_id = Session::get('customer_id');
                if ($customer_id != null) {
                ?>
                    <?php
                    if (Cart::subtotal() == 0) {
                    ?>
                        <a href="">
                            <!-- <button class="btn btn-block btn-primary my-3 py-3">Vui lòng thêm sản phẩm vào giỏ hàng!</button> -->
                        </a>
                    <?php
                    } else {
                    ?>
                        <a style="text-decoration: none;" href="{{ URL::to('/checkout') }}">
                            <button class="btn btn--radius btn-order">Tiến hành thanh toán</button>
                        </a>
                    <?php
                    }
                    ?>
                <?php
                } else {
                ?>
                    <a style="text-decoration: none;" href="{{ URL::to('/dangnhap') }}">
                        <!-- <button class="btn btn-block btn-primary my-3 py-3">Vui lòng đăng nhập!</button> -->
                        <button class="btn btn--radius btn-order">Vui lòng đăng nhập</button>
                    </a>
                <?php
                }
                ?>
            </aside>
        </div>
    </section>
</main>

@endsection