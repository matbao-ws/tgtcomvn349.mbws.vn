{{-- FOOTER ARCHITECTURE WITH LEGAL INFO --}}
<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col">
                <div class="brand-logo mb-3">
                    <img src="{{ asset('client-assets/images/logo-tgt.png') }}" alt="TGT TIMEX Logo" class="brand-logo-img footer-logo-img">
                </div>
                <p style="margin-top:0.85rem; font-size:0.9rem; line-height:1.65;">
                    <strong>CÔNG TY CỔ PHẦN XUẤT NHẬP KHẨU THƯƠNG MẠI TGT</strong><br>
                    Mã Số Thuế: <strong>0111571986</strong><br>
                    Số Tài Khoản: <strong>111619386868</strong> - VietinBank (CN Thành An - Hội Sở)<br>
                    Đơn vị chuyên nghiệp nhập khẩu, xuất khẩu & phân phối nông sản sỉ cho doanh nghiệp, nhà máy & đại lý.
                </p>
            </div>

            <div class="footer-col">
                <h4>LIÊN KẾT NHANH</h4>
                <div class="footer-links">
                    <a href="{{ route('client.home') }}"><i class="fas fa-chevron-right" style="font-size:0.7rem; color:#059669;"></i> Trang chủ</a>
                    <a href="{{ route('client.about') }}"><i class="fas fa-chevron-right" style="font-size:0.7rem; color:#059669;"></i> Về TGT & Năng lực</a>
                    <a href="{{ route('client.products') }}"><i class="fas fa-chevron-right" style="font-size:0.7rem; color:#059669;"></i> Sản phẩm & Tiêu chuẩn kỹ thuật</a>
                    <a href="{{ route('client.projects') }}"><i class="fas fa-chevron-right" style="font-size:0.7rem; color:#059669;"></i> Dự án & Hợp đồng thực tế</a>
                    <a href="{{ route('client.news') }}"><i class="fas fa-chevron-right" style="font-size:0.7rem; color:#059669;"></i> Báo giá & Thị trường</a>
                    <a href="{{ route('client.careers') }}"><i class="fas fa-chevron-right" style="font-size:0.7rem; color:#059669;"></i> Tuyển dụng</a>
                </div>
            </div>

            <div class="footer-col">
                <h4>SẢN PHẨM MŨI NHỌN</h4>
                <div class="footer-links">
                    <a href="{{ route('client.products') }}">🥔 Khoai Tây Tươi Nhập Khẩu</a>
                    <a href="{{ route('client.products') }}">🍟 Khoai Tây Chiên Đông Lạnh</a>
                    <a href="{{ route('client.products') }}">🧄 Hành Tây & Tỏi Sỉ</a>
                    <a href="{{ route('client.products') }}">🚢 Tìm Nguồn Nông Sản Theo Yêu Cầu</a>
                </div>
            </div>

            <div class="footer-col">
                <h4>THÔNG TIN TRỤ SỞ</h4>
                <div class="footer-info-list">
                    <div class="footer-info-item">
                        <i class="fas fa-location-dot"></i>
                        <span>C39-13 KĐT Geleximco, đường Lê Trọng Tấn, Phường Dương Nội, Thành phố Hà Nội, Việt Nam</span>
                    </div>
                    <div class="footer-info-item">
                        <i class="fas fa-phone-alt"></i>
                        <span>0329575866</span>
                    </div>
                    <div class="footer-info-item">
                        <i class="fas fa-envelope"></i>
                        <span>info@tgt.com.vn</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-bar">
        <div class="container">
            <p>© {{ date('Y') }} CÔNG TY CỔ PHẦN XUẤT NHẬP KHẨU THƯƠNG MẠI TGT (TGT TIMEX). ĐÃ ĐĂNG KÝ BẢN QUYỀN. HÓA ĐƠN VAT ĐẦY ĐỦ.</p>
        </div>
    </div>
</footer>

{{-- FLOATING CONTACT WIDGET --}}
<div class="floating-contact">
    <button id="backToTopBtn" class="float-btn float-backtotop" title="Về Đầu Trang">
        <i class="fas fa-chevron-up"></i>
    </button>
    <a href="https://zalo.me/0921575866" target="_blank" class="float-btn float-zalo" title="Chat Zalo 0921575866">
        <i class="fas fa-comment"></i>
    </a>
    <a href="tel:0329575866" class="float-btn float-phone" title="Gọi đường dây nóng 0329575866">
        <i class="fas fa-phone"></i>
    </a>
</div>
