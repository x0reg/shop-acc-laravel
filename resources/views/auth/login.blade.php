@extends('layouts.ClientMaster')
@section('content')
    <div class="section-breadcrumb">
        <div class="container">
            <ol class="breadcrumb bg-transparent rounded-0 mb-0 p-0">
                <li class="breadcrumb-item">
                    <a href="">Trang chủ</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="">Đăng nhập</a>
                </li>
            </ol>
        </div>
    </div>
    <div class="container mt-5" style="margin-bottom: 5rem">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Đăng nhập</h2>
                        <form>
                            <div class="mb-3">
                                <label for="username" class="form-label">Tên tài khoản</label>
                                <input type="email" class="form-control" id="username" value="test@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mật khẩu</label>
                                <input type="password" class="form-control" id="password" value="•••••••">
                            </div>
                            <div class="mb-3 remember-forgot">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="remember" checked>
                                    <label class="form-check-label" for="remember">Ghi nhớ</label>
                                </div>
                                <a href="" class="text-danger">Quên mật khẩu?</a>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Đăng nhập</button>
                        </form>
                        <div class="text-center mt-3">
                            <span>Nếu Chưa Có Tài Khoản ? </span><a href="{{ route('form.register') }}"
                                class="text-success">ĐĂNG KÍ NGAY</a>
                        </div>
                        <hr>
                        <div class="text-center mt-3">
                            <p>Hoặc đăng nhập bằng</p>
                            <div class="social-login-buttons">
                                <button class="btn btn-google">
                                    <img src="https://www.google.com/favicon.ico" alt="Google" width="20"> Google
                                </button>
                                <button class="btn btn-facebook">
                                    <img src="https://www.facebook.com/favicon.ico" alt="Facebook" width="20"> Facebook
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
