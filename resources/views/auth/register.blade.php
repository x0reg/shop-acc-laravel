@extends('layouts.ClientMaster')
@section('content')
    <div class="section-breadcrumb">
        <div class="container">
            <ol class="breadcrumb bg-transparent rounded-0 mb-0 p-0">
                <li class="breadcrumb-item">
                    <a href="">Trang chủ</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="">Đăng Kí</a>
                </li>
            </ol>
        </div>
    </div>
    <div class="container mt-5" style="margin-bottom: 5rem;border-radius:20px">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Đăng Kí Tài Khoản</h2>
                        <form>
                            <div class="mb-3">
                                <label for="username" class="form-label">Họ và tên</label>
                                <input type="text" class="form-control" id="name" placeholder="Họ và tên">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Tên tài khoản</label>
                                <input type="text" class="form-control" id="username" placeholder="Tên đăng nhập">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mật khẩu</label>
                                <input type="password" class="form-control" id="password" placeholder="•••••••">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Nhập Lại Mật khẩu</label>
                                <input type="password" class="form-control" id="password" placeholder="•••••••">
                            </div>
                            <button type="submit" class="btn btn-success w-100">Đăng Kí</button>
                        </form>
                        <div class="text-center mt-3">
                            <span>Đã có tài khoản? </span><a href="{{ route('form.login') }}" class="text-danger">Đăng Nhập
                                ngay</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
