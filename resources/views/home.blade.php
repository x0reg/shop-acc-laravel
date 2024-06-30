@extends('layouts.ClientMaster')
@section('content')
    <div class="nick-banner">
        <div class="container">
            <div class="row row10 rowmb5">
                <div class="col-md-4 order-2 order-md-1">
                    <div class="nick-tab">
                        <div class="tabs-m1">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#nap-the">
                                        Nạp thẻ
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#top">
                                        Top nạp thẻ
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab tab-pane fade active show" id="nap-the">
                                    <div class="form-m1">
                                        <form action="https://gametudong.com/deposit/card" method="POST">
                                            <input type="hidden" name="_token"
                                                value="9j2YsIomDA1dV3GZJgIPPvO4Pyr99lbJoS8cXbNP">
                                            <div class="row-item row row10 rowmb5">
                                                <div class="col-12" id="theCao">
                                                    <select class="form-control telco" name="telco[]" id=""
                                                        data-row="1">
                                                        <option data-index="0" value="VIETTEL">VIETTEL</option>
                                                        <option data-index="0" value="MOBIFONE">MOBIFONE</option>
                                                        <option data-index="0" value="VINAPHONE">VINAPHONE
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <div class="position-relative form-icon form-icon_right">
                                                        <input type="text" class="form-control" name="code[]"
                                                            data-row="1" placeholder="Mã thẻ">
                                                        <button type="button" class="copy-value form-button">
                                                            <i class="fas fa-paste"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="position-relative form-icon form-icon_right">
                                                        <input type="text" class="form-control" name="serial[]"
                                                            data-row="1" placeholder="Mã seri">
                                                        <button type="button" class="copy-value form-button">
                                                            <i class="fas fa-paste"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-12" id="menhGia">
                                                    <select class="form-control charging-amount" id="price"
                                                        data-row="1" name="amount[]">
                                                        <option data-index="0" selected value="">
                                                            -- Mệnh giá --
                                                        </option>
                                                        <option value="10000">10,000đ
                                                        </option>
                                                        <option value="20000">20,000đ
                                                        </option>
                                                        <option value="30000">30,000đ
                                                        </option>
                                                        <option value="50000">50,000đ
                                                        </option>
                                                        <option value="100000">100,000đ
                                                        </option>
                                                        <option value="200000">200,000đ
                                                        </option>
                                                        <option value="300000">300,000đ
                                                        </option>
                                                        <option value="500000">500,000đ
                                                        </option>
                                                        <option value="1000000">1,000,000đ
                                                        </option>
                                                    </select>
                                                    <input type="hidden" class="defaultAmount" data-telco="VIETTEL"
                                                        data-amount="10000,20000,30000,50000,100000,200000,300000,500000,1000000">
                                                    <input type="hidden" class="defaultAmount" data-telco="MOBIFONE"
                                                        data-amount="10000,20000,30000,50000,100000,200000,300000,500000">
                                                    <input type="hidden" class="defaultAmount" data-telco="VINAPHONE"
                                                        data-amount="10000,20000,30000,50000,100000,200000,300000,500000">
                                                </div>
                                            </div>
                                            <div class="text-center mt-2">
                                                <button type="submit" class="btn btn-theme_secondary">
                                                    <i class="fas fa-upload"></i>
                                                    Gửi thẻ cào
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab tab-pane fade" id="top">
                                    <div class="nick-top">
                                        <div class="nick-top_item">
                                            <div class="nick-top_item--icon  nick-top_item--first  ">
                                                <i class="fas fa-certificate"></i>
                                                <span class="placeholder ">
                                                    1
                                                </span>
                                            </div>
                                            <div class="nick-top_item--content">
                                                <span class="placeholder ">
                                                    Dao bao
                                                </span>
                                            </div>
                                            <div class="nick-top_item--price">
                                                2,090,000
                                            </div>
                                        </div>
                                        <div class="nick-top_item">
                                            <div class="nick-top_item--icon  nick-top_item--second  ">
                                                <i class="fas fa-certificate"></i>
                                                <span class="placeholder ">
                                                    2
                                                </span>
                                            </div>
                                            <div class="nick-top_item--content">
                                                <span class="placeholder ">
                                                    phan đào duy thanh
                                                </span>
                                            </div>
                                            <div class="nick-top_item--price">
                                                1,270,000
                                            </div>
                                        </div>
                                        <div class="nick-top_item">
                                            <div class="nick-top_item--icon  nick-top_item--third  ">
                                                <i class="fas fa-certificate"></i>
                                                <span class="placeholder ">
                                                    3
                                                </span>
                                            </div>
                                            <div class="nick-top_item--content">
                                                <span>
                                                    BAO
                                                </span>
                                            </div>
                                            <div class="nick-top_item--price">
                                                1,200,000
                                            </div>
                                        </div>
                                        <div class="nick-top_item">
                                            <div
                                                class="nick-top_item--icon                                                     ">
                                                <i class="fas fa-certificate"></i>
                                                <span class="placeholder ">
                                                    4
                                                </span>
                                            </div>
                                            <div class="nick-top_item--content">
                                                <span>
                                                    manhkon sợ iu
                                                </span>
                                            </div>
                                            <div class="nick-top_item--price">
                                                1,050,000
                                            </div>
                                        </div>
                                        <div class="nick-top_item">
                                            <div
                                                class="nick-top_item--icon                                                     ">
                                                <i class="fas fa-certificate"></i>
                                                <span class="placeholder ">
                                                    5
                                                </span>
                                            </div>
                                            <div class="nick-top_item--content">
                                                <span>
                                                    Vũ Thanh Bảo
                                                </span>
                                            </div>
                                            <div class="nick-top_item--price">
                                                1,000,000
                                            </div>
                                        </div>
                                        <div class="nick-top_item">
                                            <div
                                                class="nick-top_item--icon                                                     ">
                                                <i class="fas fa-certificate"></i>
                                                <span class="placeholder ">
                                                    6
                                                </span>
                                            </div>
                                            <div class="nick-top_item--content">
                                                <span>
                                                    Vũ Thanh Bảo
                                                </span>
                                            </div>
                                            <div class="nick-top_item--price">
                                                1,000,000
                                            </div>
                                        </div>
                                        <div class="nick-top_item">
                                            <div
                                                class="nick-top_item--icon                                                     ">
                                                <i class="fas fa-certificate"></i>
                                                <span class="placeholder ">
                                                    7
                                                </span>
                                            </div>
                                            <div class="nick-top_item--content">
                                                <span>
                                                    Vũ Thanh Bảo
                                                </span>
                                            </div>
                                            <div class="nick-top_item--price">
                                                1,000,000
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 order-1 order-md-2">
                    <div class="nick-banner_slider" id="nick-banner">
                        <div class="swiper">
                            <div class="swiper-wrapper h-auto">
                                <div class="swiper-slide h-auto">
                                    <div class="nick-banner_slider--item">
                                        <img src="https://gametudong.com/storage/images/36/65abeea3ee8ec_bannerfix.png"
                                            class="w-100 img-fluid" alt="">
                                        <a href="#" class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            {{-- <div class="row row10 rowmb5 mt-0">
                <div class="col-md-3 col-6">
                    <div class="nick-banner_slider--item nick-banner_js">
                        <img src="https://gametudong.com/storage/images/36/65ac20d12e995_HSNRFIX (1).png"
                            class="w-100 img-fluid" alt="">
                        <a href="/recharge/hsnr" class="stretched-link"></a>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="nick-banner_slider--item nick-banner_js">
                        <img src="https://gametudong.com/storage/images/36/65ac070acb5cf_thanh-ly-nick.png"
                            class="w-100 img-fluid" alt="">
                        <a href="/nick-import" class="stretched-link"></a>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="nick-banner_slider--item nick-banner_js">
                        <img src="https://gametudong.com/storage/images/36/65ac071d19732_napmomo.png"
                            class="w-100 img-fluid" alt="">
                        <a href="/wallet/deposit/vnd" class="stretched-link"></a>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="nick-banner_slider--item nick-banner_js">
                        <img src="https://gametudong.com/storage/images/36/65da18ba18fb2_ruttien.png"
                            class="w-100 img-fluid" alt="">
                        <a href="/wallet/withdraw/vnd" class="stretched-link"></a>
                    </div>
                </div>

            </div> --}}
        </div>
    </div>
    <div class="section-gap mt-0">
        <div class="container">
            <div class="alert alert-danger nick-marquee">
                <i class="fas fa-bell-on"></i>
                <marquee onmouseover="this.stop()" onmouseout="this.start()" behavior="scroll" scrolldelay="10">
                    <p><strong>GAMETUDONG.COM - KHÁCH HÀNG ĐẶT LÊN HÀNG ĐẦU ANH EM&nbsp;YÊN TÂM VỀ ĐỘ UY TÍN CỦA
                            SHOP</strong></p>
                </marquee>
            </div>
        </div>
    </div>
    <div class="section-gap">
        <div class="container">
            <div class="description text-center mb-4">
                <h1 class="custom-heading">DANH MỤC GAME</h1>
            </div>
            <div class="row row10 rowmb5">
                <div class="col-xl-3 col-lg-3 col-6">
                    <div class="nick-card card">
                        <div class="card-header border-0 rounded-0 p-0 bg-transparent position-relative">
                            <a href="https://gametudong.com/nick/nick-hoi-sinh-ngoc-rong-36">
                                <img src="https://cdn3.upanh.info/upload/server-sw3/acc-category-shopbacgaucom/46956/images/17.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <a href="">
                                    Shop Tài khoản Free fire giá rẻ
                                </a>
                            </div>
                            <div class="card-meta">
                                <div class="card-meta_item">
                                    Số tài khoản hiện có: <b>56,346</b>
                                </div>
                                <div class="card-meta_item">
                                    Đã bán: <b>3,210</b>
                                </div>
                            </div>
                            <div class="card-button text-center mt-3">
                                <a href="https://gametudong.com/nick/nick-hoi-sinh-ngoc-rong-36">
                                    <img src="https://gametudong.com/assets/default/images/nick/xem-tat-ca.gif"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-6">
                    <div class="nick-card card">
                        <div class="card-header border-0 rounded-0 p-0 bg-transparent position-relative">
                            <a href="https://gametudong.com/nick/hoi-sinh-sv3">
                                <img src="https://shopmobaviet.vn/storage/images/UGxDDIyQMt_1712020650.gif"
                                    alt="">
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <a href="https://gametudong.com/nick/hoi-sinh-sv3">
                                    Nick Liên Quân Vip
                                </a>
                            </div>
                            <div class="card-meta">
                                <div class="card-meta_item">
                                    Số tài khoản hiện có: <b>26,235</b>
                                </div>
                                <div class="card-meta_item">
                                    Đã bán: <b>13,558</b>
                                </div>
                            </div>
                            <div class="card-button text-center mt-3">
                                <a href="https://gametudong.com/nick/hoi-sinh-sv3">
                                    <img src="https://gametudong.com/assets/default/images/nick/xem-tat-ca.gif"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-6">
                    <div class="nick-card card">
                        <div class="card-header border-0 rounded-0 p-0 bg-transparent position-relative">
                            <a href="https://gametudong.com/nick/ngoc-rong-online-1">
                                <img src="https://gametudong.com/storage/images/36/65abacf69517d_BANNICKNRO.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <a href="https://gametudong.com/nick/ngoc-rong-online-1">
                                    Nick Ngọc Rồng Online - Super
                                </a>
                            </div>
                            <div class="card-meta">
                                <div class="card-meta_item">
                                    Số tài khoản hiện có: <b>363</b>
                                </div>
                                <div class="card-meta_item">
                                    Đã bán: <b>4,347</b>
                                </div>
                            </div>
                            <div class="card-button text-center mt-3">
                                <a href="https://gametudong.com/nick/ngoc-rong-online-1">
                                    <img src="https://gametudong.com/assets/default/images/nick/xem-tat-ca.gif"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-6">
                    <div class="nick-card card">
                        <div class="card-header border-0 rounded-0 p-0 bg-transparent position-relative">
                            <a href="https://gametudong.com/nick/hoi-sinh-sv3">
                                <img src="https://shopmobaviet.vn/storage/images/UGxDDIyQMt_1712020650.gif"
                                    alt="">
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <a href="https://gametudong.com/nick/hoi-sinh-sv3">
                                    Nick Liên Quân Vip
                                </a>
                            </div>
                            <div class="card-meta">
                                <div class="card-meta_item">
                                    Số tài khoản hiện có: <b>26,235</b>
                                </div>
                                <div class="card-meta_item">
                                    Đã bán: <b>13,558</b>
                                </div>
                            </div>
                            <div class="card-button text-center mt-3">
                                <a href="https://gametudong.com/nick/hoi-sinh-sv3">
                                    <img src="https://gametudong.com/assets/default/images/nick/xem-tat-ca.gif"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-gap">
        <div class="container">
            <div class="description text-center mb-4">
                <h1 class="custom-heading">DỊCH VỤ GAME</h1>
            </div>
            <div class="row row10 rowmb5">
                <div class="col-xl-3 col-lg-3 col-6">
                    <div class="nick-card card">
                        <div class="card-header border-0 rounded-0 p-0 bg-transparent position-relative">
                            <a href="/recharge/hsnr">
                                <img src="https://gametudong.com/storage/images/36/65ac2283335d5_HSNR.png" alt="">
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <a href="/recharge/hsnr">
                                    Bán vàng Hồi Sinh Ngọc Rồng
                                </a>
                            </div>
                            <div class="card-meta">
                                <div class="card-meta_item">
                                    Lượt mua: 5743
                                </div>
                            </div>
                            <div class="card-button text-center mt-3">
                                <a href="/recharge/hsnr">
                                    <img src="https://gametudong.com/assets/default/images/nick/xem-tat-ca.gif"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-6">
                    <div class="nick-card card">
                        <div class="card-header border-0 rounded-0 p-0 bg-transparent position-relative">
                            <a href="/recharge/san-dt-mabu">
                                <img src="https://gametudong.com/storage/images/36/65ad47a381a38_DETUFIX.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <a href="/recharge/san-dt-mabu">
                                    Săn đệ tử MaBư
                                </a>
                            </div>
                            <div class="card-meta">
                                <div class="card-meta_item">
                                    Lượt thuê: 91723
                                </div>
                            </div>
                            <div class="card-button text-center mt-3">
                                <a href="/recharge/san-dt-mabu">
                                    <img src="https://gametudong.com/assets/default/images/nick/xem-tat-ca.gif"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-6">
                    <div class="nick-card card">
                        <div class="card-header border-0 rounded-0 p-0 bg-transparent position-relative">
                            <a href="/recharge/san-dt-mabu">
                                <img src="https://gametudong.com/storage/images/36/65ad47a381a38_DETUFIX.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <a href="/recharge/san-dt-mabu">
                                    Săn đệ tử MaBư
                                </a>
                            </div>
                            <div class="card-meta">
                                <div class="card-meta_item">
                                    Lượt thuê: 91723
                                </div>
                            </div>
                            <div class="card-button text-center mt-3">
                                <a href="/recharge/san-dt-mabu">
                                    <img src="https://gametudong.com/assets/default/images/nick/xem-tat-ca.gif"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-6">
                    <div class="nick-card card">
                        <div class="card-header border-0 rounded-0 p-0 bg-transparent position-relative">
                            <a href="/recharge/nvthuehsnr">
                                <img src="https://gametudong.com/storage/images/36/65ac94d727b33_LAMTHUENHIEMVU.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <a href="/recharge/nvthuehsnr">
                                    Làm nhiệm vụ Hồi Sinh Ngọc Rồng
                                </a>
                            </div>
                            <div class="card-meta">
                                <div class="card-meta_item">
                                    Lượt thuê: 8125
                                </div>
                            </div>
                            <div class="card-button text-center mt-3">
                                <a href="/recharge/nvthuehsnr">
                                    <img src="https://gametudong.com/assets/default/images/nick/xem-tat-ca.gif"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-gap">
        <div class="container">
            <div class="description text-center mb-4">
                <h1 class="custom-heading">VÒNG QUAY MAY MẮN</h1>
            </div>
            <div class="row row10 rowmb5">
                <div class="col-xl-3 col-lg-3 col-6">
                    <div class="nick-card card">
                        <div class="card-header border-0 rounded-0 p-0 bg-transparent position-relative">
                            <a href="/recharge/hsnr">
                                <img src="https://gametudong.com/storage/images/36/65ac2283335d5_HSNR.png" alt="">
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <a href="/recharge/hsnr">
                                    Bán vàng Hồi Sinh Ngọc Rồng
                                </a>
                            </div>
                            <div class="card-meta">
                                <div class="card-meta_item">
                                    Lượt mua: 5743
                                </div>
                            </div>
                            <div class="card-button text-center mt-3">
                                <a href="/recharge/hsnr">
                                    <img src="https://gametudong.com/assets/default/images/nick/xem-tat-ca.gif"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-6">
                    <div class="nick-card card">
                        <div class="card-header border-0 rounded-0 p-0 bg-transparent position-relative">
                            <a href="/recharge/san-dt-mabu">
                                <img src="https://gametudong.com/storage/images/36/65ad47a381a38_DETUFIX.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <a href="/recharge/san-dt-mabu">
                                    Săn đệ tử MaBư
                                </a>
                            </div>
                            <div class="card-meta">
                                <div class="card-meta_item">
                                    Lượt thuê: 91723
                                </div>
                            </div>
                            <div class="card-button text-center mt-3">
                                <a href="/recharge/san-dt-mabu">
                                    <img src="https://gametudong.com/assets/default/images/nick/xem-tat-ca.gif"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-6">
                    <div class="nick-card card">
                        <div class="card-header border-0 rounded-0 p-0 bg-transparent position-relative">
                            <a href="/recharge/san-dt-mabu">
                                <img src="https://gametudong.com/storage/images/36/65ad47a381a38_DETUFIX.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <a href="/recharge/san-dt-mabu">
                                    Săn đệ tử MaBư
                                </a>
                            </div>
                            <div class="card-meta">
                                <div class="card-meta_item">
                                    Lượt thuê: 91723
                                </div>
                            </div>
                            <div class="card-button text-center mt-3">
                                <a href="/recharge/san-dt-mabu">
                                    <img src="https://gametudong.com/assets/default/images/nick/xem-tat-ca.gif"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-6">
                    <div class="nick-card card">
                        <div class="card-header border-0 rounded-0 p-0 bg-transparent position-relative">
                            <a href="/recharge/nvthuehsnr">
                                <img src="https://gametudong.com/storage/images/36/65ac94d727b33_LAMTHUENHIEMVU.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <a href="/recharge/nvthuehsnr">
                                    Làm nhiệm vụ Hồi Sinh Ngọc Rồng
                                </a>
                            </div>
                            <div class="card-meta">
                                <div class="card-meta_item">
                                    Lượt thuê: 8125
                                </div>
                            </div>
                            <div class="card-button text-center mt-3">
                                <a href="/recharge/nvthuehsnr">
                                    <img src="https://gametudong.com/assets/default/images/nick/xem-tat-ca.gif"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
