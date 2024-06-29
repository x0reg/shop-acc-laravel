<!DOCTYPE html>
<html>
@include('componets.TheHeader')

<body>
    <header id="header-m2" class="header-m2">
        @include('componets.TheNavBar')
    </header>
    <div id="main" class="main">
        @yield('content')
    </div>
    @include('componets.TheFooter')
    <script type=" text/javascript" src="{{ asset('assets/default/plugins/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/default/plugins/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('assets/default/plugins/swiper/swiper-bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/default/plugins/fancybox/fancybox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/default/js/app.js') }}"></script>
    @stack('js')
    <script>
        $(document).ready(function() {
            $('#global-modal').modal('show');
        });
    </script>
    <div id="global-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            Modal content
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Thông báo</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <p>
                    <p style="text-align: center;"><span style="font-size:18px;"><b><span style="color:#e74c3c;">Cập
                                    nhật giá vàng 2sv Hồi Sinh Ngọc Rồng: 10k nhận 53 thỏi vàng all mệnh
                                    giá</span></b><br />
                            <strong>&nbsp;Nạp ATM không chiết khấu, 10k ATM nhận 10k WEB</strong><br />
                            <strong>Nạp&nbsp;MoMo thì tạo đơn ATM xong dùng MoMo để quét QR thanh toán là
                                được</strong></span></p>

                    <p style="text-align: center;"><span style="font-size:18px;"><strong>Nhập nick qua tương lai
                                sll,&nbsp;Hỗ trợ inbox&nbsp;Zalo&nbsp;0965930975</strong><br />
                            <strong>or Facebook&nbsp;</strong><em><a href="https://www.facebook.com/BCT.ME/"><span
                                        style="color:#3498db;"><strong>&gt;Bùi Công
                                            Thượng&lt;</strong></span></a></em></span><br />
                        <span style="font-size:18px;"><strong>Tham gia box chat Zalo&nbsp;<em><a
                                        href="https://zalo.me/g/hpzwbp172"><span style="color:#3498db;">&gt;&gt; tại
                                            đây &lt;&lt;</span></a></em><br />
                                Tham gia GR FB&nbsp;</strong><em><a
                                    href="https://www.facebook.com/groups/325743964585637"><span
                                        style="color:#3498db;"><strong>&gt;&gt; tại đây
                                            &lt;&lt;</strong></span></a></em></span>
                    </p>

                    <p style="text-align: center;"><span style="font-size:18px;"><strong>Xem hướng dẫn đăng kí tài
                                khoản, nạp tiền, mua vàng mua nick&nbsp;</strong><em><a
                                    href="https://drive.google.com/file/d/1GfSw5kf4IljnBxFqkQzmfYMuIbX8HevW/view?usp=sharing"><span
                                        style="color:#3498db;"><strong>&gt;&gt; tại đây
                                            &lt;&lt;</strong></span></a></em></span></p>

                    <p style="text-align: center;">&nbsp;</p>
                    </p>
                </div>
                <div class="modal-footer">
                    <a href="#"
                        onclick="event.preventDefault(); document.getElementById('modal-close').submit();">
                        <button type="button" class="btn btn-warning">Đóng 2 giờ</button>
                    </a>
                    <form method="POST" action="modal-close" accept-charset="UTF-8" id="modal-close"
                        style="display: none;"><input name="_token" type="hidden"
                            value="9j2YsIomDA1dV3GZJgIPPvO4Pyr99lbJoS8cXbNP"></form>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
