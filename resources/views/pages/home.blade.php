@extends('welcome')
@section('content')

{{-- slider --}}
<div class="container__slider">
    <img src="{{asset('frontend/images/Slider/slider-6.jpg')}}" alt="" class="container__slider-img fade ">
    <img src="{{asset('frontend/images/Slider/slider-4.jpg')}}" alt="" class="container__slider-img fade ">
    <img src="{{asset('frontend/images/Slider/slider-3.jpg')}}" alt="" class="container__slider-img fade ">
    <img src="{{asset('frontend/images/Slider/slider-2.jpg')}}" alt="" class="container__slider-img fade ">
</div>

{{-- best seller --}}
<div class="product-best-sellers grid">
    <div class="product-best-sellers__title">
        <h3>SẢN PHẨM BÁN CHẠY</h3>
    </div>

    <div class="row">
        <div class="col-2 col-3 column-5 product-best-sellers__item">
            <a href="" class="product-best-sellers__link">
                <div class="item__img-wrap">
                    <img src="{{asset('frontend/images/SP_Ban_Chạy/7 - Đầm dệt kim hai màu - 8.575.000.jpg')}}" alt="" class="item__img">
                </div>
                <div class="item__name-wrap">
                    <h3 class="item__name">Đầm dệt kim hai màu</h3>
                    <span class="item__price">8.575.000 ₫</span>
                </div>
                <button class="item__btn">
                    <span>XEM SẢN PHẨM</span>
                </button>
            </a>
        </div>
        <div class="col-2 col-3 column-5 product-best-sellers__item">
            <a href="" class="product-best-sellers__link">
                <div class="item__img-wrap">
                    <img src="{{asset('frontend/images/SP_Ban_Chạy/2 - Áo khoác cardigan len phối hình thêu (8.575.000).jpg')}}" alt="" class="item__img">
                </div>
                <div class="item__name-wrap">
                    <h3 class="item__name">Áo khoác cardigan len phối hình thêu</h3>
                    <span class="item__price">8.575.000 ₫</span>
                </div>
                <button class="item__btn">
                    <span>XEM SẢN PHẨM</span>
                </button>
            </a>
        </div>
        <div class="col-2 col-3 column-5 product-best-sellers__item c-display-none m-display-none">
            <a href="" class="product-best-sellers__link">
                <div class="item__img-wrap">
                    <img src="{{asset('frontend/images/SP_Ban_Chạy/3 - Áo thun cotton phối hình (2.975.000).jpg')}}" alt="" class="item__img">
                </div>
                <div class="item__name-wrap">
                    <h3 class="item__name">Áo thun cotton phối hình</h3>
                    <span class="item__price">2.975.000 ₫</span>
                </div>
                <button class="item__btn">
                    <span>XEM SẢN PHẨM</span>
                </button>
            </a>
        </div>
        <div class="col-2 col-3 column-5 product-best-sellers__item c-display-none">
            <a href="" class="product-best-sellers__link">
                <div class="item__img-wrap">
                    <img src="{{asset('frontend/images/SP_Ban_Chạy/6 - QUẦN SHORT IN HỌA TIẾT - 5.075.000.jpg')}}" alt="" class="item__img">
                </div>
                <div class="item__name-wrap">
                    <h3 class="item__name">Quầnshort in hoạt tiết</h3>
                    <span class="item__price">5.075.000 ₫</span>
                </div>
                <button class="item__btn">
                    <span>XEM SẢN PHẨM</span>
                </button>
            </a>
        </div>
        <div class="col-2 col-3 column-5 product-best-sellers__item c-display-none m-display-none">
            <a href="" class="product-best-sellers__link">
                <div class="item__img-wrap">
                    <img src="{{asset('frontend/images/SP_Ban_Chạy/8 - Đầm dệt kim - 7.875.000.jpg')}}" alt="" class="item__img">
                </div>
                <div class="item__name-wrap">
                    <h3 class="item__name">Đầm dệt kim</h3>
                    <span class="item__price">7.875.000 ₫</span>
                </div>
                <button class="item__btn">
                    <span>XEM SẢN PHẨM</span>
                </button>
            </a>
        </div>
    </div>

    <div class="product-best-sellers__border-bottom">
        <hr>
    </div>
</div>

{{-- Category banner --}}
<div class="category-banner-block grid">
    <div class="row c-flex-wrap">
        <div class="col-1 c-mr-0 column-2 mr-4vw">
            <a href="./html/thoitrangnamJeans.html">
                <div class="category-banner-item category-banner-item__male">
                    <div class="label-box">
                        <div class="label-wrap">
                            <h4>THỜI TRANG NAM</h4>
                            <span>
                                <p>Xem ngay</p>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-1 column-2">
            <a href="./html/thoitrangnuJeans.html">
                <div class="category-banner-item category-banner-item__female ">
                    <div class="label-box">
                        <div class="label-wrap">
                            <h4>THỜI TRANG NỮ</h4>
                            <span>
                                <p>Xem ngay</p>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row c-flex-wrap c-mt-0 mt-4vw">
        <div class="col-1 c-mr-0 column-3 mr-4vw">
            <a href="./html/TuinamTuideocheo.html">
                <div class="category-banner-item  category-banner-item__bag ">
                    <div class="label-box">
                        <div class="label-wrap">
                            <h4>Túi xách</h4>
                            <span>
                                <p>Xem ngay</p>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-2 c-mr-0 column-3 mr-4vw">
            <a href="./html/giaydepNamSneaker.html">
                <div class="category-banner-item category-banner-item__shoe">
                    <div class="label-box">
                        <div class="label-wrap">
                            <h4>Giày dép</h4>
                            <span>
                                <p>Xem ngay</p>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-2 column-3">
            <a href="./html/phukienNamDongho.html">
                <div class="category-banner-item category-banner-item__other">
                    <div class="label-box">
                        <div class="label-wrap">
                            <h4>Phụ kiện</h4>
                            <span>
                                <p>Xem ngay</p>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection
