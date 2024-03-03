@extends('index')
@section('content')

<style>
    .section-slider {
        display: none;
    }
</style>

<div style="margin-top: 135px;"></div>
<!-- MAIN CONTENT -->
<main class="category-books-section">
    <div class="category-page container grid grid-category">
        <nav class="sidebar">
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item">
                    <a href="index.html" class="sidebar-menu-link"><ion-icon class="start-icon" name="home-sharp"></ion-icon><span>Trang chủ</span></a>
                </li>
                <!-- dynamic part -->
                <li class="sidebar-menu-item category-item">
                    <a class="sidebar-menu-link">
                        <ion-icon class="start-icon" name="grid-sharp"></ion-icon><span>Danh mục</span>
                        <span class="end-icon">
                            <ion-icon name="chevron-forward-sharp"></ion-icon>
                            <ion-icon name="chevron-down-sharp"></ion-icon>
                        </span>
                    </a>
                    <ul class="sub-items">
                        <li class="sub-item">
                            <a href="#" class="sub-item-link">Văn học việt nam</a>
                        </li>
                        <li class="sub-item">
                            <a href="#" class="sub-item-link">Văn học nước ngoài</a>
                        </li>
                        <li class="sub-item">
                            <a href="#" class="sub-item-link">Thiếu nhi</a>
                        </li>
                        <li class="sub-item">
                            <a href="#" class="sub-item-link">Trinh thám</a>
                        </li>
                    </ul>
                </li>
                <!-- fix part -->
                <li class="sidebar-menu-item">
                    <a href="#" class="sidebar-menu-link"><ion-icon class="start-icon" name="call-sharp"></ion-icon><span>Liên hệ chúng tôi</span></a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="#" class="sidebar-menu-link"><ion-icon class="start-icon" name="people-sharp"></ion-icon><span>Về chúng tôi</span></a>
                </li>
            </ul>
        </nav>

        <div class="category-books">
            <h2 class="heading-secondary margin-bottom-super">
                Tiểu thuyết văn học
            </h2>
            <div class="books grid grid-4--columns">
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <a href="{{URL::to('/details-book')}}">
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="card-title">Cây cam ngọt của tôi</p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/frontend/imgs/top-books/book4.jpeg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">
                                Đắc nhân tâm sĩ diện hảo cây cam ngọt của tôi
                            </p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">Cây cam ngọt của tôi</p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">Cây cam ngọt của tôi</p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">Cây cam ngọt của tôi</p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">Cây cam ngọt của tôi</p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">Cây cam ngọt của tôi</p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">Cây cam ngọt của tôi</p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">Cây cam ngọt của tôi</p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">Cây cam ngọt của tôi</p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">Cây cam ngọt của tôi</p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">Cây cam ngọt của tôi</p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="pagination">
                <button class="pagination-btn prev" path="tieu-thuyet">
                    <ion-icon name="chevron-back-outline"></ion-icon>
                </button>

                <div class="pages">
                    <a href="#" class="pagination-btn active">1</a>
                    <a href="#" class="pagination-btn">2</a>
                    <a href="#" class="pagination-btn">3</a>
                    <a href="#" class="pagination-btn">4</a>
                    <a class="pagination-btn">...</a>
                </div>

                <button class="pagination-btn next" path="tieu-thuyet">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>
            </div>
        </div>
    </div>
</main>

@endsection