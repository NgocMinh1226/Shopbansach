@extends('index')
@section('content')

<style>
    .section-slider {
        display: none;
    }
</style>

<!-- MAIN CONTENT -->
<div style="margin-top: 145px;"></div>

@foreach($product_details as $key => $value)

<main class="detail-section">
    <section class="product-detail container grid detail-grid">
        <div class="detail-img-box">
            <img src="{{URL::to('/public/uploads/product/'.$value->product_image)}}" alt="" class="main-img" />
            <!-- <div class="detail-imgs">
                <div class="detail-img"></div>
                <div class="detail-img"></div>
                <div class="detail-img"></div>
                <div class="detail-img"></div>
            </div> -->
        </div>
        <div class="detail-text-box">
            <div class="main-info">
                <div class="title margin-bottom-lg">
                    <p class="author margin-bottom-sm">Tác giả: {{$value->product_author}}</p>
                    <h1 class="heading-secondary margin-bottom-md">
                        {{$value->product_name}}
                    </h1>
                    <div class="rating-box">
                        <div class="rating-icons padding-r-sm">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>

                        <p class="rating-numbe padding-l-sm padding-r-md">
                            <!-- ( Xem 370 đánh giá ) -->
                            Sản phẩm hiện có: {{$value->product_qty}}
                        </p>
                        <p class="rating-number padding-l-md">Đã bán {{$value->product_sold}}
                        </p>
                    </div>
                </div>

                <!-- pricing -->
                <div class="detail-pricing margin-bottom-lg">
                    <div class="pricing-box">
                        <p class="sell-price padding-r-md">
                            Giá sản phẩm: {{ number_format($value->product_price, 0, ',', '.') }}<span>đ</span></p>
                        <!-- <p class="original-price padding-r-md">
                             <span>đ</span> 
                        </p> -->
                    </div>
                    <div class="discount-box padding-r-sm">
                        <p class="discount"><span></span></p>
                    </div>
                </div>
            </div>

            <div class="relevant-books">
                <h1 class="heading-tertiary margin-bottom-md">Sách liên quan</h1>
                <div class="relevant-books-list">



                    @foreach($similar_products as $key1 => $value1)

                    <div class="relevant-book">
                        <a href="#" class="relevant-book-link">
                            <img src="{{URL::to('/public/uploads/product/'.$value1->product_image)}}" alt="Book's image" class="relevant-book-img" />
                            <p class="relevant-book-title">{{$value1->product_name}}</p>
                            <p class="relevant-book-price">{{number_format($value1->product_price)}}<span>đ</span></p>
                        </a>
                    </div>
                    @endforeach

                    <!-- <div class="relevant-book">
                        <a href="#" class="relevant-book-link">
                            <img src="{{asset('public/frontend/imgs/top-books/book2.jpeg')}}" alt="Book's image" class="relevant-book-img" />
                            <p class="relevant-book-title">Số đỏ (Tái bản 2020)</p>
                            <p class="relevant-book-price">60.000<span>đ</span></p>
                        </a>
                    </div>
                    <div class="relevant-book">
                        <a href="#" class="relevant-book-link">
                            <img src="{{asset('public/frontend/imgs/top-books/book3.jpeg')}}" alt="Book's image" class="relevant-book-img" />
                            <p class="relevant-book-title">Số đỏ (Tái bản 2020)</p>
                            <p class="relevant-book-price">60.000<span>đ</span></p>
                        </a>
                    </div>
                    <div class="relevant-book">
                        <a href="#" class="relevant-book-link">
                            <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book's image" class="relevant-book-img" />
                            <p class="relevant-book-title">Số đỏ (Tái bản 2020)</p>
                            <p class="relevant-book-price">60.000<span>đ</span></p>
                        </a>
                    </div>
                    <div class="relevant-book">
                        <a href="#" class="relevant-book-link">
                            <img src="{{asset('public/frontend/imgs/top-books/book2.jpeg')}}" alt="Book's image" class="relevant-book-img" />
                            <p class="relevant-book-title">Số đỏ (Tái bản 2020)</p>
                            <p class="relevant-book-price">60.000<span>đ</span></p>
                        </a>
                    </div>
                    <div class="relevant-book">
                        <a href="#" class="relevant-book-link">
                            <img src="{{asset('public/frontend/imgs/top-books/book3.jpeg')}}" alt="Book's image" class="relevant-book-img" />
                            <p class="relevant-book-title">Số đỏ (Tái bản 2020)</p>
                            <p class="relevant-book-price">60.000<span>đ</span></p>
                        </a>
                    </div> -->


                </div>
                <div class="dots">
                    <div class="dot active"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
                <button class="btn-right btn-circle">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>
                <button class="btn-left btn-circle">
                    <ion-icon name="chevron-back-outline"></ion-icon>
                </button>
            </div>




            <!-- detail information -->
            <div class="detail-infomation">
                <h1 class="heading-tertiary">Thông tin chi tiết</h1>
                <ul class="detail-info-list">
                    <li class="detail-item margin-bottom-sm">
                        <p class="detail-label">Tác giả:</p>
                        <p class="detail-content">{{$value->product_author}}</p>
                    </li>
                    <li class="detail-item margin-bottom-sm">
                        <p class="detail-label">Nhà xuất bản:</p>
                        <p class="detail-content">{{$value->publisher_name}}</p>
                    </li>
                    <li class="detail-item margin-bottom-sm">
                        <p class="detail-label">Năm xuất bản:</p>
                        <p class="detail-content">{{$value->publication_year}}</p>
                    </li>
                    <li class="detail-item margin-bottom-sm">
                        <p class="detail-label">Số trang:</p>
                        <p class="detail-content">{{$value->number_of_pages}}</p>
                    </li>
                    <li class="detail-item margin-bottom-sm">
                        <p class="detail-label">Kích thước:</p>
                        <p class="detail-content">{{$value->size}}</p>
                    </li>
                    <li class="detail-item margin-bottom-sm">
                        <p class="detail-label">Loại bìa:</p>
                        <p class="detail-content">{{$value->cover_type}}</p>
                    </li>
                    <li class="detail-item margin-bottom-sm">
                        <p class="detail-label">SKU:</p>
                        <p class="detail-content">{{$value->SKU}}</p>
                    </li>
                </ul>
            </div>

            <div class="book-description">
                <h1 class="heading-tertiary">Mô tả sách</h1>
                <p class="description">
                    {{$value->product_desc}}
                </p>
                <a class="more">Xem thêm</a>
            </div>
        </div>
        <form class="buy-form" action="{{URL::to('/save-cart')}}" method="post" onsubmit="return validateForm()">
            {{csrf_field()}}

            <input name="productid_hidden" type="hidden" value="{{$value->product_id}}" />
            <!-- <div class="detail-address margin-bottom-lg">
                <p class="shipped-address">
                    Giao đến: <span>An Ninh Tây, Tuy An, Phú Yên</span>
                </p>
                <a href="#" class="address-link">Đổi địa chỉ</a>
            </div> -->
            <p class="quantity-label margin-bottom-sm">Số lượng:</p>
            <div class="quantity-box margin-bottom-md">
                <button class="btn-decrease">-</button>
                <input type="number" min="1" value="1" name="qty" />

                <!-- <input type="text" class="form-control bg-secondary text-center" name="qty" value="1"> -->

                <button class="btn-increase">+</button>
            </div>
            <button class="btn btn-buy" type="submit">Thêm vào giỏ</button>
            <!-- <button class="btn btn-add-to-cart" >Thêm vào giỏ</button> -->


        </form>



        <!-- <script>
            function validateForm() {
                var qty = parseInt(document.getElementsByName("qty")[0].value);
                var max_qty = parseInt("{{$value->product_qty}}");
                if (qty > max_qty) {
                    alert('Số lượng sản phẩm vượt quá số lượng có sẵn. Bạn có muốn đặt theo số lượng có sẵn không?');
                    return false; 
                }
                return true; 
            }
        </script> -->

        <script>
            function validateForm() {
                var qtyInput = document.getElementsByName("qty")[0];
                var qty = parseInt(qtyInput.value);
                var max_qty = parseInt("{{$value->product_qty}}");

                if (qty > max_qty) {
                    alert('Số lượng sản phẩm vượt quá số lượng có sẵn. Bạn có muốn đặt theo số lượng có sẵn không?');
                    qtyInput.value = max_qty; // Gán lại giá trị tối đa vào trường nhập liệu
                    return false;
                }
                return true;
            }
        </script>


    </section>

    <!-- <div class="modal" id="myModal">
        <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <h2>Thêm thành công</h2>
            <p>Giỏ hàng đã được thêm vào sản phẩm</p>
            <button id="modalCloseButton">OK</button>
        </div>
    </div> -->
</main>





@endforeach
@endsection