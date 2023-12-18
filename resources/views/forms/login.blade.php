
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
    <div class="form_container">
        <div  class="form-sign-in">
            <div class="sign-in-wrapper">

                <h1>Đăng nhập</h1>
                <div class="sign-in-box-left l-6 m-6 c-12">
                    <form action="" method="get">
                        <div class="input-box">
                            <h3>E-mail</h3>
                            <input type="email" class="input-email" placeholder="Địa chỉ email">

                            <h3>Password</h3>
                            <input type="password" class="input-password" placeholder="Mật khẩu">

                        </div>

                        <button>
                            Đăng nhập
                        </button>

                        <div class="forget-wrapper">
                            <a href="">Quên mật khẩu</a>
                        </div>

                        <div class="connect-other-account">
                            <div class="line-wrapper">
                                <div class="line"></div>
                                <span>Hoặc</span>
                                <div class="line"></div>
                            </div>

                            <div class="connect-other-account-wrapper">
                                <div class="connect-other-account-box connect-other-box-facebook">
                                    <div style="margin-right: 6px;" class="connect-other-account__icon">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </div>
                                    <div class="connect-other-account__name">
                                        Facebook
                                    </div>
                                </div>
                                <div class="connect-other-account-box connect-other-box-google">
                                    <div style="margin-right: 6px;" class="connect-other-account__icon">
                                        <i class="fa-brands fa-google-plus-g"></i>
                                    </div>
                                    <div class="connect-other-account__name">
                                        Google
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="haven-account-wrapper">
                            <h5>Bạn là thành viên mới?</h5>

                            <a class="button-sign-up" href="{{Route('pages_register')}}">Đăng kí ngay</a>
                        </div>
                    </form>
                </div>
                <div class="sign-in-box-right l-6 m-6 c-0">
                    <div class="connect-other-wrapper">
                        <div class="connect-other-box connect-other-box-facebook">
                            <div style="margin-right: 6px;" class="icon-connect-other">
                                <i class="fa-brands fa-facebook-f"></i>
                            </div>
                            <div class="connect-content">
                                <span>Đăng nhập bằng Facebook</span>
                            </div>
                        </div>
                    </div>
                    <div class="connect-other-wrapper">
                        <div class="connect-other-box connect-other-box-google">
                            <div style="margin-left: 6px;" class="icon-connect-other">
                                <i class="fa-brands fa-google-plus-g"></i>
                            </div>
                            <div class="connect-content">
                                <span>Đăng nhập bằng Google</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="or-box c-0">Or</div>
            </div>
        </div>
    </div>
    <script src="{{asset('frontend/js/main.js')}}" ></script>
</html>


