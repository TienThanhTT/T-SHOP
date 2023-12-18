<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TN Shop</title>
    <link rel="icon" href="{{asset('frontend/images/NT2.png')}}" type="image/gif" sizes="20x20">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <!-- <link rel="stylesheet" href="./css/grid.css"> -->
    <link rel="stylesheet" href="{{asset('frontend/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/fonts/fontawesome-free-6.0.0-web/css/all.min.css')}}">
</head>
    <div class="container">
        <div  class="form-sign-up">
            <div class="sign-up-wrapper">

                <h1>Đăng kí</h1>
                <div class="sign-up-box-left l-6 m-6 c-12">
                    <form action="" method="POST">
                        @csrf
                        <div class="input-box">
                            <h3>E-mail</h3>
                            <input type="email" class="input-email" placeholder="Nhập địa chỉ email" name="email">

                            <h3>Username</h3>
                            <input type="text" class="input-user-name" placeholder="Nhập tên tài khoản" name="username">

                            <h3>Password</h3>
                            <input type="password" class="input-password" placeholder="Nhập mật khẩu" name="password">

                            <h3>Password</h3>
                            <input type="password" class="input-password" placeholder="Nhập lại mật khẩu" name="re_password">


                        </div>
                        <label for="agree" class="accept-rules-box">
                            <div class="accept-rules__checkbox">
                                <input style="display: none;" id="agree" name="agree" type="checkbox">
                                <label for="agree"></label>
                            </div>
                            <span>Tôi đồng ý với các quy tắc và điều kiện</span>
                        </label>
                        <button type="submit">
                            Tạo tài khoản
                        </button>

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
                            <h5>Bạn đã có tài khoản?</h5>
                            <span class="button-sign-in" href="">Đăng nhập</span>
                        </div>
                    </form>
                </div>
                <div class="sign-up-box-right l-6 m-6 c-0">
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
</html>
