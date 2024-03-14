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
            Thông tin thanh toán
        </h2>
        <form class="needs-validation was-validated" action="{{URL::to('/save-checkout-customer')}}" method="post">
            {{csrf_field()}}

            <div class="container grid cart-grid">
                <div class="cart-main">

                    <div class="book-container">
                        <h1 class="cart-head">Đơn hàng</h1>
                        <?php

                        $content = Cart::content();
                        // Sử dụng print_r
                        // echo '<pre>';
                        // print_r($content);
                        // echo '</pre>';
                        
                        ?>

                        @if($content->isNotEmpty())
                        <?php
                        $i = 1;
                        ?>
                        @foreach($content as $v_content)

                        <div class="cart-book">
                            <!-- <form action="#"> -->
                            <div class="cart-book__form">
                                <!-- <input type="checkbox" class="checkbox margin-right-md" /> -->
                                <div class="img-box margin-right-super">
                                    <h1>
                                        <?php
                                        echo $i;
                                        $i++;
                                        ?>
                                    </h1>
                                </div>

                                <div class="img-box margin-right-super">
                                    <img class="cart-img" src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" alt="img" />
                                </div>

                                <p class="cart-book-title margin-right-super">
                                    {{$v_content->name}}
                                </p>

                                <div class="price-tag margin-right-super">
                                    <p class="price-tag__sale">{{number_format($v_content->price)}}<span>đ</span></p>
                                    <!-- <p class="price-tag__origin">100.000<span>đ</span></p> -->
                                </div>

                                <!-- <form> -->

                                <div class="quantity-box__cart quantity-box margin-right-super">
                                    <!-- <button type="button" class="btn-decrease">-</button> -->
                                    <input style="width: 70px; background-color: #1a8e8b ;border-radius: 10px; color: #000; padding: 10px 5px; border: 1px solid #1a8e8b" name="cart_quantity" value="{{$v_content->qty}}" type="number" min="1" value="1" />
                                    <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart">
                                    <!-- <button type="button" class="btn-increase">+</button> -->
                                    <!-- <button type="submit" value="Cập nhật" name="update_qty" style="width: 70px; border-radius: 10px ;margin-left: 10px;background-color: #1a8e8b; color: #fff; padding: 10px 5px; border: none; cursor: pointer;">Cập nhật</button> -->

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

                                <!-- <a onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không?')" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}" title="Delete" data-toggle="tooltip" class="btn btn-sm btn-primary">
                                    <ion-icon class="delete-icon" name="trash-outline"></ion-icon>
                                    </a> -->
                                <!-- </form> -->
                            </div>
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
                    <div class="address-section">
                        <h1 class="cart-head">Thông tin nhận hàng</h1>

                        <div class="address-group">
                            <div class="form-control">
                                <label for="shipping_name">Họ và tên</label>
                                <input type="text" class="user-name" id="shipping_name" name="shipping_name" required />
                            </div>

                            <div class="form-control">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="shipping_email" required />
                            </div>

                            <div class="form-control">
                                <label for="shipping_phone">Số điện thoại</label>
                                <input type="tel" id="shipping_phone" name="shipping_phone" required />
                            </div>

                            <div class="form-control">
                                <label for="shipping_address">Địa chỉ</label>
                                <input type="text" id="shipping_address" name="shipping_address" required />
                            </div>


                            <!-- <div class="form-control">
                                <label for="shipping_city">Tỉnh / Thành phố</label>
                                <select id="shipping_city" name="shipping_city" required>
                                    <option value="">Chọn tỉnh (thành phố)</option>
                                    <option value="Hanoi">Hà Nội</option>
                                    <option value="HoChiMinhCity">Thành phố Hồ Chí Minh</option>
                                    <option value="DaNang">Đà Nẵng</option>
                                    <option value="HaiPhong">Hải Phòng</option>
                                    <option value="CanTho">Cần Thơ</option>
                                    <option value="Hue">Thừa Thiên Huế</option>
                                    <option value="NhaTrang">Nha Trang</option>
                                    <option value="Vinh">Vinh</option>
                                    <option value="BuonMaThuot">Buôn Ma Thuột</option>
                                    <option value="QuangNinh">Quảng Ninh</option>
                                    <option value="NhaTrang">Nha Trang</option>
                                    <option value="Vinh">Vinh</option>
                                    <option value="BuonMaThuot">Buôn Ma Thuột</option>
                                    <option value="QuyNhon">Quy Nhơn</option>
                                    <option value="CanTho">Cần Thơ</option>
                                    <option value="BienHoa">Biên Hòa</option>
                                    <option value="LongXuyen">Long Xuyên</option>
                                    <option value="TamKy">Tam Kỳ</option>
                                    <option value="MyTho">Mỹ Tho</option>
                                    <option value="RachGia">Rạch Giá</option>
                                    <option value="VungTau">Vũng Tàu</option>
                                    <option value="PhanThiet">Phan Thiết</option>
                                    <option value="CaMau">Cà Mau</option>
                                    <option value="HaLong">Hạ Long</option>
                                    <option value="YenBai">Yên Bái</option>
                                    <option value="LaoCai">Lào Cai</option>
                                    <option value="SonLa">Sơn La</option>
                                    <option value="HoaBinh">Hòa Bình</option>
                                    <option value="HaTinh">Hà Tĩnh</option>
                                    <option value="QuangBinh">Quảng Bình</option>
                                    <option value="QuangTri">Quảng Trị</option>
                                    <option value="ThuaThienHue">Thừa Thiên-Huế</option>
                                    <option value="BacKan">Bắc Kạn</option>
                                    <option value="LangSon">Lạng Sơn</option>
                                    <option value="TuyenQuang">Tuyên Quang</option>
                                    <option value="HaGiang">Hà Giang</option>
                                    <option value="CaoBang">Cao Bằng</option>
                                    <option value="BacNinh">Bắc Ninh</option>
                                    <option value="PhuTho">Phú Thọ</option>
                                    <option value="VinhPhuc">Vĩnh Phúc</option>
                                    <option value="BacGiang">Bắc Giang</option>
                                    <option value="ThaiNguyen">Thái Nguyên</option>
                                    <option value="LangSon">Lạng Sơn</option>
                                    <option value="BacLieu">Bạc Liêu</option>
                                    <option value="CaoLanh">Cao Lãnh</option>
                                    <option value="SocTrang">Sóc Trăng</option>
                                    <option value="TraVinh">Trà Vinh</option>
                                    <option value="ViThanh">Vị Thanh</option>
                                    <option value="BaoLoc">Bảo Lộc</option>
                                    <option value="DongHoi">Đồng Hới</option>
                                    <option value="BenTre">Bến Tre</option>
                                    <option value="TayNinh">Tây Ninh</option>
                                    <option value="ThuDauMot">Thủ Dầu Một</option>
                                    <option value="BacNinh">Bắc Ninh</option>
                                    <option value="BimSon">Bỉm Sơn</option>
                                    <option value="HaiDuong">Hải Dương</option>
                                    <option value="NamDinh">Nam Định</option>
                                    <option value="LongKhanh">Long Khánh</option>
                                    <option value="PhanRangThapCham">Phan Rang-Tháp Chàm</option>
                                    <option value="SaDec">Sa Đéc</option>
                                    <option value="ViThanh">Vị Thanh</option>

                                </select>
                            </div>

                            <div class="form-control">
                                <label for="shipping_district">Quận / Huyện</label>
                                <select id="shipping_district" name="shipping_district" required>
                                    <option value="">Chọn quận (huyện)</option>
                                </select>
                            </div>

                            <div class="form-control">
                                <label for="shipping_note">Phường / Xã</label>
                                <select id="shipping_note" name="shipping_note" required>
                                    <option value="">Chọn phường (xã)</option>
                                </select>
                            </div> -->


                            <div class="form-control">
                                <label for="shipping_note">Ghi chú</label>
                                <input type="text" id="shipping_note" name="shipping_note" placeholder="Có thể bỏ trống .."/>
                            </div>

                        </div>
                    </div>


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
                    <div class="payment-method">
                        <h2 class="payment-method-title">Phương thức thanh toán</h2>
                        <div class="payment-method-options">
                            <!-- <label class="payment-method-option">
                                <input type="radio" name="paymentMethod" value="creditCard" />
                                <span class="payment-method-option-text">Thẻ tín dụng</span>
                            </label>
                            <label class="payment-method-option">
                                <input type="radio" name="paymentMethod" value="paypal" />
                                <span class="payment-method-option-text">PayPal</span>
                            </label> -->

                            <label class="payment-method-option">
                                <input checked type="radio" name="payment_option" value="2" />
                                <span class="payment-method-option-text" selected>Tiền mặt</span>
                            </label>
                        </div>
                    </div>

                    <div class="total-price-section">
                        <h2 class="price-title">Thanh toán</h2>
                        <div class="subtotal">
                            <span>Tạm tính:</span>
                            <p><span class="">{{Cart::subtotal()}}</span><span>đ</span></p>
                        </div>
                        <!-- <div class="shipping">
                            <span>Phí ship:</span>
                            <p><span class="money">0</span><span>đ</span></p>
                        </div> -->
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


                    <a style="text-decoration: none;">
                        <button  type="submit" name="send_order" class="btn btn--radius btn-order">Đặt sách</button>
                    </a>

                </aside>
            </div>

        </form>
    </section>
</main>

@endsection