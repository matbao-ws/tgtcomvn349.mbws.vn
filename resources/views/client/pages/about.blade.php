@extends('client.layouts.app')

@section('title', 'Giới Thiệu Công Ty Cổ Phần Xuất Nhập Khẩu Thương Mại TGT (TGT TIMEX)')
@section('meta_description', 'Tìm hiểu về TGT TIMEX - Đơn vị chuyên nhập khẩu & phân phối nông sản B2B hàng đầu Việt Nam.')

@section('content')
<!-- PAGE TITLE BANNER -->
    <section class="hero-section" style="padding:3.5rem 0;">
        <div class="hero-bg-overlay" style="opacity:0.6;"></div>
        <div class="container" style="position:relative; z-index:2; text-align:center;">
            <span class="badge badge-orange mb-2">Hồ Sơ Doanh Nghiệp & Năng Lực</span>
            <h1 style="font-size:2.25rem; color:#0F233D; font-weight:700;">CÔNG TY CỔ PHẦN XUẤT NHẬP KHẨU THƯƠNG MẠI TGT</h1>
            <p style="color:#475569; max-width:700px; margin:0.5rem auto 0 auto;">TGT TIMEX - Đối tác thương mại & nhập khẩu nông sản B2B có đầy đủ năng lực pháp lý, kho vận & kiểm định chất lượng.</p>
        </div>
    </section>


    <!-- LEGAL BUSINESS INFO & OVERVIEW -->
    <section class="section-padding bg-white">
        <div class="container">
            <div style="display:grid; grid-template-columns: 1fr 1fr; gap:3rem; align-items:center;">
                <div>
                    <span class="badge badge-green mb-2">Thông tin pháp lý XNK</span>
                    <h2 class="section-title text-left mb-3">TGT TIMEX – NĂNG LỰC CUNG ỨNG NÔNG SẢN THỰC TẾ</h2>
                    <p style="color:#334155; font-size:1rem; margin-bottom:1rem; line-height:1.65;">
                        <strong>CÔNG TY CỔ PHẦN XUẤT NHẬP KHẨU THƯƠNG MẠI TGT (TGT TIMEX)</strong> là doanh nghiệp hoạt động chuyên sâu trong lĩnh vực xuất nhập khẩu, thương mại & phân phối nông sản sỉ cho các nhà máy chế biến, bếp ăn công nghiệp, chợ đầu mối & đối tác XNK toàn quốc.
                    </p>

                    <!-- Legal Detail Box -->
                    <div style="background:#F8FAFC; border:1px solid #E2E8F0; border-radius:10px; padding:1.25rem; margin-bottom:1.5rem;">
                        <h4 style="font-size:1.05rem; color:#0F233D; margin-bottom:0.75rem;"><i class="fas fa-file-contract" style="color:#059669;"></i> HỒ SƠ PHÁP LÝ DOANH NGHIỆP</h4>
                        <div style="display:grid; grid-template-columns: 1fr 1fr; gap:0.65rem; font-size:0.875rem;">
                            <div style="grid-column: 1 / -1;"><strong style="color:#64748B;">Tên pháp lý:</strong> <span style="color:#0F233D; font-weight:700;">CÔNG TY CỔ PHẦN XUẤT NHẬP KHẨU THƯƠNG MẠI TGT</span></div>
                            <div><strong style="color:#64748B;">Mã Số Thuế (Tax Code):</strong> <span style="color:#059669; font-weight:700; font-size:1.05rem; letter-spacing:0.5px;">0111571986</span></div>
                            <div><strong style="color:#64748B;">Điện thoại (Tel):</strong> <span style="color:#EA580C; font-weight:700;">0329575866</span></div>
                            <div style="grid-column: 1 / -1;"><strong style="color:#64748B;">Địa chỉ trụ sở (Address):</strong> <span style="color:#0F233D;">C39-13 KĐT Geleximco, đường Lê Trọng Tấn, Phường Dương Nội, Thành phố Hà Nội, Việt Nam</span></div>
                            <div style="grid-column: 1 / -1;"><strong style="color:#64748B;">Số tài khoản (Account No.):</strong> <span style="color:#0F233D; font-weight:700;">111619386868</span> tại Ngân hàng TMCP Công Thương Việt Nam (VietinBank) - Chi nhánh Thành An - Hội Sở</div>
                            <div><strong style="color:#64748B;">Hóa đơn VAT:</strong> <span style="color:#059669; font-weight:700;">Hợp lệ 100% (Xuất hóa đơn điện tử)</span></div>
                            <div><strong style="color:#64748B;">Hộp thư điện tử:</strong> <span style="color:#0F233D; font-weight:600;">info@tgt.com.vn</span></div>
                        </div>
                    </div>

                    <div style="display:grid; grid-template-columns: 1fr 1fr; gap:1rem;">
                        <div style="background:#ECFDF5; padding:1.1rem; border-radius:8px; border-left:4px solid #059669;">
                            <h4 style="font-size:1rem; color:#0F233D; margin-bottom:0.25rem;">NĂNG LỰC SẢN LƯỢNG</h4>
                            <p style="font-size:0.875rem; color:#475569;">Cung ứng 5,000+ Tấn/Tháng theo container lạnh cho nhà máy & đại lý.</p>
                        </div>
                        <div style="background:#FFF7ED; padding:1.1rem; border-radius:8px; border-left:4px solid #EA580C;">
                            <h4 style="font-size:1rem; color:#0F233D; margin-bottom:0.25rem;">KHO VẬN & VẬN TẢI LẠNH 24/7</h4>
                            <p style="font-size:0.875rem; color:#475569;">Bảo quản kho lạnh chuẩn nhiệt độ, xe tải container chuyên dụng.</p>
                        </div>
                    </div>
                </div>

                <div>
                    <img src="{{ asset('client-assets/images/cold_storage_warehouse.png') }}" alt="Kho bãi nông sản TGT TIMEX" style="border-radius:12px; box-shadow:0 8px 24px rgba(0,0,0,0.08);">
                </div>
            </div>
        </div>
    </section>

    <!-- VISION MISSION VALUES -->
    <section class="section-padding bg-green-soft">
        <div class="container">
            <div class="section-header">
                <span class="badge badge-navy">Tầm Nhìn & Sứ Mệnh</span>
                <h2 class="section-title">KIM CHỈ NAM PHÁT TRIỂN CỦA TGT TIMEX</h2>
                <p class="section-subtitle">Xây dựng chuỗi giá trị nông sản bền vững từ vùng trồng đến các đối tác thương mại.</p>
            </div>

            <div class="usp-grid">
                <div class="usp-card">
                    <div class="usp-header-row">
                        <div class="usp-icon-box"><i class="fas fa-eye"></i></div>
                        <span class="badge badge-navy">Chiến Lược</span>
                    </div>
                    <h3>TẦM NHÌN DOANH NGHIỆP</h3>
                    <p>Trở thành tập đoàn thương mại xuất nhập khẩu nông sản B2B uy tín hàng đầu tại Việt Nam và kết nối giao thương nông sản toàn cầu.</p>
                </div>
                <div class="usp-card">
                    <div class="usp-header-row">
                        <div class="usp-icon-box"><i class="fas fa-bullseye"></i></div>
                        <span class="badge badge-green">Sứ Mệnh</span>
                    </div>
                    <h3>SỨ MỆNH CUNG ỨNG</h3>
                    <p>Cung cấp giải pháp nguồn hàng nông sản chất lượng cao, giá thành cạnh tranh, đáp ứng linh hoạt mọi quy cách đặt hàng của doanh nghiệp.</p>
                </div>
                <div class="usp-card">
                    <div class="usp-header-row">
                        <div class="usp-icon-box"><i class="fas fa-gem"></i></div>
                        <span class="badge badge-orange">Giá Trị</span>
                    </div>
                    <h3>GIÁ TRỊ CỐT LÕI</h3>
                    <p><strong>Uy Tín – Linh Hoạt – Chất Lượng – Tiến Độ</strong>. Luôn đặt lợi ích phát triển lâu dài của khách hàng B2B lên trọng tâm hành động.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
