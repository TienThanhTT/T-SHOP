<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TN Shop</title>
    <link rel="icon" href="{{asset('frontend/images/NT2.png')}}" type="image/gif" sizes="20x20">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <!-- <link rel="stylesheet" href="./css/grid.css"> -->
    <link rel="stylesheet" href="{{asset('frontend/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/fonts/fontawesome-free-6.0.0-web/css/all.min.css')}}">
</head>
<body>
   <div class="main">
       <!-- Header -->
       <header class="header">
           <div class="grid__header">
               <div class="header__navbar">
                    <ul class="header__navbar-list nav-menu">
                        <li style="display: none;" class="header__navbar-item">
                            <a class="item-link" href="">
                                <i class="fa-solid fa-house"></i>
                            </a>
                        </li>
                        <!-- Menu on Tablet & Mobile -->
                        <div class="header__navbar-item navbar-item__menu l-display-none">
                            <label for="nav-mobile-input" class="item-link menu-icon" >
                                <i class="fa-solid fa-bars"></i>
                            </label>

                            <input hidden type="checkbox" name="" class="nav__input" id="nav-mobile-input">

                            <label for="nav-mobile-input" class="nav-overlay"></label>

                            <!-- Nav mobile -->
                            <nav class="nav__mobile">
                                <label for="nav-mobile-input" class="nav__mobile-close">
                                    <i class="fa-solid fa-xmark"></i>
                                </label>

                                <ul class="nav__mobile-list">
                                    <!-- Thoi trang nam -->
                                    <li>
                                        <label for="subnav-mobile-input-nam" class="nav__mobile-link">
                                            THỜI TRANG NAM
                                            <i class="icon-angle-right fa-solid fa-angle-right"></i>
                                        </label>

                                        <input hidden type="checkbox" name="" class="subnav__input" id="subnav-mobile-input-nam">

                                        <!-- Subnav mobile -->
                                        <div class="subnav__mobile-box">
                                            <label for="subnav-mobile-input-nam" class="subnav__mobile-return">
                                                <i class="fa-solid fa-arrow-left"></i>
                                            </label>

                                            <div class="subnav__mobile-list">
                                                <p>Quần</p>
                                                <ul>
                                                    <li>
                                                        <a href="./html/thoitrangnamJeans.html" class="subnav__mobile-link">Quần Jeans</a>
                                                    </li>
                                                    <li>
                                                        <a href="./html/thoitrangnamQuanShort.html" class="subnav__mobile-link">Quần short</a>
                                                    </li>
                                                    <li>
                                                        <a href="./html/thoitrangnamQuanTay.html" class="subnav__mobile-link">Quần tây</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="subnav__mobile-list">
                                                <p>Áo</p>
                                                <ul>
                                                    <li>
                                                        <a href="./html/thoitrangnamSoMi.html" class="subnav__mobile-link">Áo sơ mi</a>
                                                    </li>
                                                    <li>
                                                        <a href="./html/thoitrangnamAoThun.html" class="subnav__mobile-link">Áo thun</a>
                                                    </li>
                                                    <li>
                                                        <a href="./html/thoitrangnamAoHoodie.html" class="subnav__mobile-link">Áo hoodie</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Thoi trang nu -->
                                    <li>
                                        <label for="subnav-mobile-input-nu" class="nav__mobile-link">
                                            THỜI TRANG NỮ
                                            <i class="icon-angle-right fa-solid fa-angle-right"></i>
                                        </label>

                                        <input hidden type="checkbox" name="" class="subnav__input" id="subnav-mobile-input-nu">

                                        <!-- Subnav mobile -->
                                        <div class="subnav__mobile-box">
                                            <label for="subnav-mobile-input-nu" class="subnav__mobile-return">
                                                <i class="fa-solid fa-arrow-left"></i>
                                            </label>

                                            <div class="subnav__mobile-list">
                                                <p>Quần</p>
                                                <ul>
                                                    <li>
                                                        <a href="./html/thoitrangnuJeans.html" class="subnav__mobile-link">Quần Jeans</a>
                                                    </li>
                                                    <li>
                                                        <a href="./html/thoitrangnuQuanDai.html" class="subnav__mobile-link">Quần dài</a>
                                                    </li>
                                                    <li>
                                                        <a href="./html/thoitrangnuQuanShort.html" class="subnav__mobile-link">Quần short</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="subnav__mobile-list">
                                                <p>Áo</p>
                                                <ul>
                                                    <li>
                                                        <a href="./html/thoitrangnuAoKhoac.html" class="subnav__mobile-link">Áo khoác Blaze & Jacket</a>
                                                    </li>
                                                    <li>
                                                        <a href="./html/thoitrangnuAoSoMi.html" class="subnav__mobile-link">Áo sơ mi</a>
                                                    </li>
                                                    <li>
                                                        <a href="./html/thoitrangnuAoThun.html" class="subnav__mobile-link">Áo thun</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="subnav__mobile-list">
                                                <p>Váy</p>
                                                <ul>
                                                    <li>
                                                        <a href="./html/thoitrangnuChanVay.html" class="subnav__mobile-link">Chân váy</a>
                                                    </li>
                                                    <li>
                                                        <a href="./html/thoitrangnuDam.html" class="subnav__mobile-link">Đầm</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Tui xach -->
                                    <li>
                                        <label for="subnav-mobile-input-tui-xach" class="nav__mobile-link">
                                            TÚI XÁCH
                                            <i class="icon-angle-right fa-solid fa-angle-right"></i>
                                        </label>

                                        <input hidden type="checkbox" name="" class="subnav__input" id="subnav-mobile-input-tui-xach">

                                        <!-- Subnav mobile -->
                                        <div class="subnav__mobile-box">
                                            <label for="subnav-mobile-input-tui-xach" class="subnav__mobile-return">
                                                <i class="fa-solid fa-arrow-left"></i>
                                            </label>

                                            <div class="subnav__mobile-list">
                                                <p>Nam</p>
                                                <ul>
                                                    <li>
                                                        <a href="./html/tuiNamBalo.html" class="subnav__mobile-link">Balo</a>
                                                    </li>
                                                    <li>
                                                        <a href="./html/TuinamTuideocheo.html" class="subnav__mobile-link">Túi đeo chéo</a>
                                                    </li>
                                                    <li>
                                                        <a href="./html/TuinamTuilaptop.html" class="subnav__mobile-link">Túi đựng laptop</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="subnav__mobile-list">
                                                <p>Nữ</p>
                                                <ul>
                                                    <li>
                                                        <a href="./html/tuiNuTuideovai.html" class="subnav__mobile-link">Túi đeo vai</a>
                                                    </li>
                                                    <li>
                                                        <a href="./html/tuiNuTuideocheo.html" class="subnav__mobile-link">Túi đeo chéo</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Giay dep -->
                                    <li>
                                        <label for="subnav-mobile-input-giay-dep" class="nav__mobile-link">
                                            GIÀY DÉP
                                            <i class="icon-angle-right fa-solid fa-angle-right"></i>
                                        </label>

                                        <input hidden type="checkbox" name="" class="subnav__input" id="subnav-mobile-input-giay-dep">

                                        <!-- Subnav mobile -->
                                        <div class="subnav__mobile-box">
                                            <label for="subnav-mobile-input-giay-dep" class="subnav__mobile-return">
                                                <i class="fa-solid fa-arrow-left"></i>
                                            </label>

                                            <div class="subnav__mobile-list">
                                                <p>Nam</p>
                                                <ul>
                                                    <li>
                                                        <a href="./html/giaydepNamBoots.html" class="subnav__mobile-link">Boots</a>
                                                    </li>
                                                    <li>
                                                        <a href="./html/giaydepNamSneaker.html" class="subnav__mobile-link">Sneaker</a>
                                                    </li>
                                                    <li>
                                                        <a href="./html/giaydepNamSandal.html" class="subnav__mobile-link">Sandal</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="subnav__mobile-list">
                                                <p>Nữ</p>
                                                <ul>
                                                    <li>
                                                        <a href="./html/giaydepNuCaogot.html" class="subnav__mobile-link">Cao gót</a>
                                                    </li>
                                                    <li>
                                                        <a href="./html/giaydepNuBoots.html" class="subnav__mobile-link">Boots</a>
                                                    </li>
                                                    <li>
                                                        <a href="./html/giaydepNuSneaker.html" class="subnav__mobile-link">Sneaker</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Phu kien -->
                                    <li>
                                        <label for="subnav-mobile-input-phu-kien" class="nav__mobile-link">
                                            PHỤ KIỆN
                                            <i class="icon-angle-right fa-solid fa-angle-right"></i>
                                        </label>

                                        <input hidden type="checkbox" name="" class="subnav__input" id="subnav-mobile-input-phu-kien">

                                        <!-- Subnav mobile -->
                                        <div class="subnav__mobile-box">
                                            <label for="subnav-mobile-input-phu-kien" class="subnav__mobile-return">
                                                <i class="fa-solid fa-arrow-left"></i>
                                            </label>

                                            <div class="subnav__mobile-list">
                                                <p>Nam</p>
                                                <ul>
                                                    <li>
                                                        <a href="./html/phukienNamDongho.html" class="subnav__mobile-link">Đồng hồ</a>
                                                    </li>
                                                    <li>
                                                        <a href="./html/phukienNamvi.html" class="subnav__mobile-link">Ví</a>
                                                    </li>
                                                    <li>
                                                        <a href="./html/phukienNamThatlung.html" class="subnav__mobile-link">Thắt lưng</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="subnav__mobile-list">
                                                <p>Nữ</p>
                                                <ul>
                                                    <li>
                                                        <a href="./html/phukienNuDongho.html" class="subnav__mobile-link">Đồng hồ</a>
                                                    </li>
                                                    <li>
                                                        <a href="./html/phukienNuDaychuyen.html" class="subnav__mobile-link">Dây chuyền</a>
                                                    </li>
                                                    <li>
                                                        <a href="./html/phukienNuNuochoa.html" class="subnav__mobile-link">Nước hoa bỏ túi</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <ul class="custom-link">
                                    <label for="nav-mobile-input">
                                        <li class="js-user-icon-tablet">
                                            <span>
                                                <i class="custom-link-icon fa-solid fa-user"></i>
                                                Tài khoản
                                            </span>
                                        </li>
                                    </label>

                                    <li>
                                        <span>
                                            <i style="margin-right: 8px;" class="custom-link-icon fa-solid fa-shop"></i>
                                            Dịch vụ khách hàng
                                        </span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </ul>

                    <div class="header__logo">
                        <!-- <img src="./img/logo.png" alt="Logo-TN-shop"> -->
                        <a href="{{Route('pages_trang_chu')}}">TN-SHOP</a>
                    </div>

                    <ul class="header__navbar-list flex-right">
                        <li class="header__navbar-item header__navbar-item--has-notify">
                            <i class="fa-solid fa-bell"></i>

                            <!-- Thanh thong bao -->
                            <div class="header__notify-wrap">
                                <div class="header__notify">
                                    <header class="header__notify-header">
                                        <h3>Thông báo mới nhận</h3>
                                    </header>

                                    <ul class="header__notify-list">
                                        <li class="header__notify-item">
                                            <a href="" class="header__notify-link">
                                                    <img class="notify-item__img" src="{{asset('frontend/images/Nu_ChanVay_QuanShort/7 - CHÂN VÁY DỆT KIM - 6.475.000.jpg')}}" alt="">

                                                <div class="notify-item__content">
                                                    <span class="notify-item-name">Chân váy dệt kim</span>
                                                    <p class="notify-item-description">Hoàn tất đặt hàng</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="header__notify-item">
                                            <a href="" class="header__notify-link">
                                                    <img class="notify-item__img" src="./img/SP_Ban_Chạy/7 - Đầm dệt kim hai màu - 8.575.000.jpg" alt="">

                                                <div class="notify-item__content">
                                                    <span class="notify-item-name">Đầm dệt kim hai màu</span>
                                                    <p class="notify-item-description">Hoàn tất đặt hàng</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="header__notify-item">
                                            <a href="" class="header__notify-link">
                                                    <img class="notify-item__img" src="./img/SP_Ban_Chạy/2 - Áo khoác cardigan len phối hình thêu (8.575.000).jpg" alt="">

                                                <div class="notify-item__content">
                                                    <span class="notify-item-name">Áo khoác cardigan len phối hình thêu</span>
                                                    <p class="notify-item-description">Hoàn tất đặt hàng</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="header__notify-item header__notify-item--viewed">
                                            <a href="" class="header__notify-link">
                                                    <img class="notify-item__img" src="./img/SP_Ban_Chạy/3 - Áo thun cotton phối hình (2.975.000).jpg" alt="">

                                                <div class="notify-item__content">
                                                    <span class="notify-item-name">Áo thun cotton phối hình</span>
                                                    <p class="notify-item-description">Hoàn tất đặt hàng</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                    <footer class="header__notify-footer">
                                            <a href="" class="header__footer-btn">Xem tất cả</a>
                                    </footer>
                                </div>
                            </div>
                        </li>
                        <li class="header__navbar-item cart-icon">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </li>

                            <!-- Cart list -->
                            <section class="cart">
                                <h2>
                                    Giỏ hàng
                                </h2>
                                <div class="close-icon-wrapper">
                                    <i class="fa-solid fa-xmark"></i>
                                </div>

                                <form action="">
                                    <div class="form-cart-wrapper">
                                        <table>
                                            <thead>
                                                <tr style="user-select: none;">
                                                    <th>Sản phẩm</th>
                                                    <th>Giá</th>
                                                </tr>
                                            </thead>
                                            <tbody class="cart__tbody">
                                                <tr>
                                                    <td class="cart-product-img-name">
                                                        <img src="{{asset('frontend/images/AoSoMiNu/11-ÁO SƠ MI OVERSIZE-6.825.000.jpg')}}" alt="">
                                                        <span class="cart-product-name">ÁO SƠ MI OVERSIZE</span>
                                                    </td>
                                                    <td class="cart-product-price">
                                                        <p><span>6.825</span><span>.000</span><sup>₫</sup></p></td>
                                                    <td class="cart-product-amount">
                                                        <input type="number" value="1" min="1"><span>Xóa</span>
                                                    </td>
                                                <tr>
                                                    <td class="cart-product-img-name">
                                                        <img src="{{asset('frontend/images/AoKhoacNu/2-ÁO KHOÁC NHIỀU CHẤT LIỆU-12.775.000.jpg')}}" alt="">
                                                        <span class="cart-product-name">ÁO KHOÁC NHIỀU CHẤT LIỆU</span>
                                                    </td>
                                                    <td class="cart-product-price">
                                                        <p><span>12.775</span><span>.000</span><sup>₫</sup></p></td>
                                                    <td class="cart-product-amount">
                                                        <input type="number" value="1" min="1"><span>Xóa</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="cart-product-img-name">
                                                        <img src="./img/QuanTayNam/2 - QUẦN TÂY JERSEY - 7.875.000.jpg" alt="">
                                                        <span class="cart-product-name">QUẦN TÂY JERSEY</span>
                                                    </td>
                                                    <td class="cart-product-price">
                                                        <p><span>7.875</span><span>.000</span><sup>₫</sup></p></td>
                                                    <td class="cart-product-amount">
                                                        <input type="number" value="1" min="1"><span>Xóa</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="price-total">
                                        <p>Tổng tiền: <span>0</span><sup>₫</sup></p>
                                    </div>
                                    <div style="text-align: center;">
                                        <button class="Buy" onclick="pay()">Thanh toán</button>
                                    </div>

                                </form>
                            </section>

                        <!-- Dang nhap user -->
                        <li class="header__navbar-item-user header__navbar-item display-none">

                            <a href="{{Route('pages_login')}}">
                                <i class="fa-solid fa-user"></i>
                            </a>
                        </li>

                        <!-- Form dang ki -->
                        @yield('form_login_content')

                        <!-- Form dang nhap -->


                        <li class="header__navbar-item header__navbar-item-search">
                            <form class="form-mini-search" action="">
                                <div class="search-button-wrap">
                                    <div class="js-search-button search-button" >
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </div>
                                </div>
                                <div class="search-input-wrap">
                                    <input type="text" placeholder="Tìm kiếm sản phẩm...">
                                </div>
                                <div class="js-close-button close-button-wrap">
                                    <i class="fa-solid fa-xmark"></i>
                                </div>
                            </form>
                        </li>
                    </ul>
               </div>

               <div class="header-menu-wrap">
                   <div class="header-menu">
                       <ul class="menu-list display-none">
                           <li class="menu-item">
                               <a href="./html/thoitrangnamJeans.html">
                                   <span class="menu-item-name">Thời trang nam</span>
                                </a>

                                <div class="subnav">
                                    <div class="subnav-content ">
                                        <div class="subnav-header">
                                            <h5>Quần</h5>
                                        </div>
                                        <ul class="subnav-list">

                                            <li><a href="./html/thoitrangnamJeans.html">Jeans</a></li>
                                            <li><a href="./html/thoitrangnamQuanShort.html">Quần short</a></li>
                                            <li><a href="./html/thoitrangnamQuanTay.html">Quần tây</a></li>

                                        </ul>
                                    </div>

                                    <div class="subnav-content ">
                                        <div class="subnav-header">
                                            <h5>Áo</h5>
                                        </div>
                                        <ul class="subnav-list">
                                            <li><a href="./html/thoitrangnamSoMi.html">Sơ mi</a></li>
                                            <li><a href="./html/thoitrangnamAoThun.html">Áo thun</a></li>
                                            <li><a href="./html/thoitrangnamAoHoodie.html">Hoodie</a></li>

                                        </ul>
                                    </div>

                                </div>
                           </li>
                           <li class="menu-item">
                               <a href="./html/thoitrangnuJeans.html">
                                   <span class="menu-item-name">Thời trang nữ</span>
                                </a>

                                <div class="subnav">
                                    <div class="subnav-content ">
                                        <div class="subnav-header">
                                            <h5>Quần</h5>

                                        </div>
                                        <ul class="subnav-list">

                                            <li><a href="./html/thoitrangnuJeans.html">Jeans</a></li>
                                            <li><a href="./html/thoitrangnuQuanDai.html">Quần dài</a></li>
                                            <li><a href="./html/thoitrangnuQuanShort.html">Quần short</a></li>

                                        </ul>
                                    </div>

                                    <div class="subnav-content ">
                                        <div class="subnav-header">
                                            <h5>Áo</h5>
                                        </div>
                                        <ul class="subnav-list">

                                            <li><a href="./html/thoitrangnuAoKhoac.html">Áo khoác Blaze & Jacket</a></li>
                                            <li><a href="./html/thoitrangnuAoSoMi.html">Áo sơ mi</a></li>
                                            <li><a href="./html/thoitrangnuAoThun.html">Áo thun</a></li>

                                        </ul>
                                    </div>

                                    <div class="subnav-content ">
                                        <div class="subnav-header">
                                            <h5>Váy</h5>
                                        </div>
                                        <ul class="subnav-list">

                                            <li><a href="./html/thoitrangnuChanVay.html">Chân váy</a></li>
                                            <li><a href="./html/thoitrangnuDam.html">Đầm</a></li>
                                        </ul>
                                    </div>

                                </div>
                           </li>
                           <li class="menu-item">
                               <a href="./html/tuiNamBalo.html">
                                   <span class="menu-item-name">Túi xách</span>
                                </a>
                                <div class="subnav">
                                    <div class="subnav-content ">
                                        <div class="subnav-header">
                                            <h5>Nam</h5>
                                        </div>
                                        <ul class="subnav-list">

                                            <li><a href="./html/tuiNamBalo.html">balo</a></li>
                                            <li><a href="./html/TuinamTuideocheo.html">Túi đeo chéo nam</a></li>
                                            <li><a href="./html/TuinamTuilaptop.html">Túi xách đựng laptop</a></li>

                                        </ul>
                                    </div>

                                    <div class="subnav-content ">
                                        <div class="subnav-header">
                                            <h5>Nữ</h5>
                                        </div>
                                        <ul class="subnav-list">
                                            <li><a href="./html/tuiNuTuideovai.html">Túi đeo vai</a></li>
                                            <li><a href="./html/tuiNuTuideocheo.html">Túi đeo chéo</a></li>
                                        </ul>
                                    </div>

                                </div>
                           </li>
                           <li class="menu-item">
                               <a href="./html/giaydepNamSneaker.html">
                                   <span class="menu-item-name">Giày dép</span>
                                </a>

                                <div class="subnav">
                                    <div class="subnav-content ">
                                        <div class="subnav-header">
                                            <h5>Nam</h5>
                                        </div>
                                        <ul class="subnav-list">
                                            <li><a href="./html/giaydepNamBoots.html">Boots</a></li>
                                            <li><a href="{{URL::to('nam_sneaker')}}">Sneaker</a></li>
                                            <li><a href="{{URL::to('nam_sandal')}}">sandal</a></li>

                                        </ul>
                                    </div>

                                    <div class="subnav-content ">
                                        <div class="subnav-header">
                                            <h5>Nữ</h5>
                                        </div>
                                        <ul class="subnav-list">

                                            <li><a href="./html/giaydepNuCaogot.html">Cao gót</a></li>
                                            <li><a href="./html/giaydepNamSneaker.html">Sneaker</a></li>
                                            <li><a href="./html/giaydepNuBoots.html">Boots</a></li>

                                        </ul>
                                    </div>

                                </div>

                           </li>
                           <li class="menu-item">
                               <a href="./html/phukienNamDongho.html">
                                   <span class="menu-item-name">Phụ kiện</span>
                                </a>

                                <div class="subnav">
                                    <div class="subnav-content ">
                                        <div class="subnav-header">
                                            <h5>Nam</h5>
                                        </div>
                                        <ul class="subnav-list">

                                            <li><a href="./html/phukienNamDongho.html">Đồng hồ </a></li>
                                            <li><a href="./html/phukienNamvi.html">Ví</a></li>
                                            <li><a href="./html/phukienNamThatlung.html">Thắt lưng</a></li>

                                        </ul>
                                    </div>

                                    <div class="subnav-content ">
                                        <div class="subnav-header">
                                            <h5>Nữ</h5>
                                        </div>
                                        <ul class="subnav-list">

                                            <li><a href="./html/phukienNuDongho.html">Đồng hồ</a></li>
                                            <li><a href="./html/phukienNuDaychuyen.html">Dây chuyền</a></li>
                                            <li><a href="./html/phukienNuNuochoa.html">Nước hoa bỏ túi</a></li>

                                        </ul>
                                    </div>

                                </div>
                           </li>
                       </ul>
                   </div>
               </div>
           </div>

       </header>


       <!-- Body -->
        <div class="container">
            {{-- slide --}}
            <!-- Best sellers -->
            <!-- Category banner -->
            @yield('content')
            {{-- End best seller --}}


            @yield('sandal')
            @yield('nam_sneaker')




            <!-- Contact -->
            <div class="Contact-block">
                <div class="reinsurance-container">
                    <div class="row c-flex-direction">
                        <div class="column-4 reinsurance-item-wrap">
                            <div class="reinsurance-item">
                                 <a href="#" class="reinsurance-item-link">
                                    <span class="icon-wrap">
                                         <img src="{{asset('frontend/images/Icon - reinsurance/1.png')}}" alt="">
                                    </span>
                                    Cam kết
                                    <br>
                                    hàng chính hãng
                                 </a>
                            </div>
                        </div>
                        <div class="column-4 reinsurance-item-wrap">
                            <div class="reinsurance-item">
                                 <a href="#" class="reinsurance-item-link">
                                    <span class="icon-wrap">
                                         <img src="{{asset('frontend/images/Icon - reinsurance/2.png')}}" alt="">
                                    </span>
                                    Thanh toán an toàn
                                 </a>
                            </div>
                        </div>
                        <div class="column-4 reinsurance-item-wrap">
                            <div class="reinsurance-item">
                                 <a href="#" class="reinsurance-item-link">
                                    <span class="icon-wrap">
                                         <img src="{{asset('frontend/images/Icon - reinsurance/3.png')}}" alt="">
                                    </span>
                                    Theo dõi đơn hàng
                                 </a>
                            </div>
                        </div>
                        <div class="column-4 reinsurance-item-wrap border-none">
                            <div class="reinsurance-item">
                                 <a href="#" class="reinsurance-item-link">
                                    <span class="icon-wrap">
                                         <img src="{{asset('frontend/images/Icon - reinsurance/4.png')}}" alt="">
                                    </span>
                                    Hỗ trợ khách hàng
                                    <br>
                                    0929 052 864 (Nhật)
                                    <br>
                                    0326 732 416 (Thành)
                                 </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer">
            <div class="link-social-network-box">
                <div class="footer-logo-wrapper">
                    <span>TN-Shop</span>
                </div>

                <div class="social-network-icons-wrapper">
                    <ul class="social-network-icons__list">
                        <li class="social-network-icons__item">
                            <a href="" class="instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li class="social-network-icons__item">
                            <a href="" class="facebook">
                                <i class="fa-brands fa-facebook-square"></i>
                            </a>
                        </li>
                        <li class="social-network-icons__item">
                            <a href="" class="youtube">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </li>
                        <li class="social-network-icons__item">
                            <a href="" class="tiktok">
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                        </li>
                        <li class="social-network-icons__item">
                            <a href="" class="printerest">
                                <i class="fa-brands fa-pinterest"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="grid footer__container c-flex-wrap">
                <div class="footer__cty four-row">
                    <h3>công ty tn</h3>
                    <p>Trụ sở chính: 567 Lê Duẩn, TP.Buôn Mê Thuột</p>
                    <p>Địa chỉ liên hệ: </p>
                    <p>Số điện thoại: </p>
                    <p>Địa chỉ Email: </p>
               </div>
               <div class="footer__thuonghieu four-row">
                   <h3>thương hiệu </h3>
                   <li><a href="">Giới thiệu</a></li>
                   <li><a href="">Tin tức</a></li>
                   <li><a href="">Tuyển dụng</a></li>
                   <li><a href="">Liên hệ</a></li>
               </div>
               <div class="footer__hotro four-row">
                <h3>hỗ trợ </h3>
                <li><a href="">Hỏi đáp</a></li>
                <li><a href="">Chính sách vận chuyển</a></li>
                <li><a href="">Kiểm tra đơn hàng</a></li>
                <li><a href="">Quy định đổi hàng</a></li>
               </div>
               <div class="footer__download four-row">
                    <h3>tải ứng dụng </h3>
                    <li><a href="">Thông tin công ty</a></li>
                    <li><a href="">Điều khoản sử dụng</a></li>
                    <li><a href="">Chính sách bảo mật</a></li>
                    <li><a href="">Chính sách Cookie</a></li>

                    <img src="./img/bocongthuong.png" alt="">
                </div>
            </div>


        </footer>
   </div>

   <script>
       const navbar = document.querySelector('.header-menu-wrap');
       const header = document.querySelector('.header');

       let navPos = navbar.getBoundingClientRect().top;

            window.addEventListener("scroll", e => {
                let scrollPos = window.scrollY;
                if (scrollPos > navPos) {
                    navbar.classList.add('sticky');
                    header.classList.add('header-sticky')
                } else {
                    navbar.classList.remove('sticky');
                    header.classList.remove('header-sticky');
                }
            });
   </script>



        <!-- bắt sự kiến nhắn nút user - form đăng nhập - đăng kí-->
        {{-- <script>
             const signIn = document.querySelector('.form-sign-in');
             const closeButonSignInUser = document.querySelector('.sign-in-close-button');
             const signUplink = document.querySelector('.button-sign-up');

             const signUp = document.querySelector('.form-sign-up');
             const closeButonSignUpUser = document.querySelector('.sign-up-close-button');
             const signInlink = document.querySelector('.button-sign-in');

             const userIcon = document.querySelector('.header__navbar-item-user');
             const userIconTablet = document.querySelector('.js-user-icon-tablet');

             function showFormSignIn (){
                 signIn.classList.add('active');
             }
             function hideFormSignIn (){
                 signIn.classList.remove('active');
             }
             function showFormSignUp (){
                 signUp.classList.add('active');
             }
             function hideFormSignUp (){
                 signUp.classList.remove('active');
             }

             userIcon.addEventListener('click',showFormSignIn);
             userIconTablet.addEventListener('click',showFormSignIn);
             closeButonSignInUser.addEventListener('click',hideFormSignIn);
             signUplink.addEventListener('click',hideFormSignIn);
             signUplink.addEventListener('click',showFormSignUp);

             closeButonSignUpUser.addEventListener('click',hideFormSignUp);
             signInlink.addEventListener('click',hideFormSignUp);
             signInlink.addEventListener('click',showFormSignIn);
         </script> --}}

         {{-- show slide --}}
         <script>
            let slideIndex;

                function showslide() {
                    let i;
                    let slide= document.getElementsByClassName("container__slider-img");

                for (i = 0; i< slide.length; i++) {
                 slide[i].style.display= "none";
                }

                slide[slideIndex].style.display="block";
                slideIndex++;
                if (slideIndex > slide.length - 1 ) {
                    slideIndex = 0;

                }

                setTimeout(showslide,5000);
                }
                showslide(slideIndex=0);
        </script>

        <script src="{{asset('frontend/js/main.js')}}" ></script>
</body>
</html>
