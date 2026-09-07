@extends('client.layouts.app')

@section('title', 'Liên Hệ Báo Giá B2B & Tìm Nguồn Nông Sản | TGT TIMEX')
@section('meta_description', 'Gửi yêu cầu báo giá B2B, tìm nguồn nông sản theo yêu cầu tại TGT TIMEX.')

@section('content')
<!-- PAGE TITLE BANNER -->
    <section class="hero-section" style="padding:3.5rem 0;">
        <div class="hero-bg-overlay" style="opacity:0.6;"></div>
        <div class="container" style="position:relative; z-index:2; text-align:center;">
            <span class="badge badge-orange mb-2">Trung Tâm Liên Hệ & Tư Vấn B2B</span>
            <h1 style="font-size:2.25rem; color:#0F233D; font-weight:700;">LIÊN HỆ PHÒNG KINH DOANH & XUẤT NHẬP KHẨU TGT</h1>
            <p style="color:#475569; max-width:700px; margin:0.5rem auto 0 auto;">Nhận báo giá nông sản sỉ số lượng lớn, hợp đồng định kỳ & tư vấn kỹ thuật đóng gói theo yêu cầu.</p>
        </div>
    </section>


    <!-- CONTACT DETAILS & FORM -->
    <section class="section-padding bg-white">
        <div class="container">
            <div style="display:grid; grid-template-columns: 1fr 1.2fr; gap:3rem; align-items:start;">
                <!-- Contact Info Left -->
                <div>
                    <span class="badge badge-green mb-2">Thông Tin Trụ Sở</span>
                    <h2 class="section-title text-left mb-3">CÔNG TY CỔ PHẦN XUẤT NHẬP KHẨU THƯƠNG MẠI TGT</h2>
                    <p style="color:#475569; margin-bottom:1.5rem; line-height:1.65;">
                        Quý khách hàng doanh nghiệp, nhà máy chế biến, đại lý nông sản & đơn vị nhà hàng khách sạn cần báo giá sỉ hoặc đặt mẫu nông sản vui lòng liên hệ theo các kênh chính thức:
                    </p>

                    <div style="display:flex; flex-direction:column; gap:1.25rem; margin-bottom:2rem;">
                        <div style="display:flex; align-items:flex-start; gap:0.85rem;">
                            <div style="width:42px; height:42px; background:#ECFDF5; color:#059669; border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                                <i class="fas fa-building"></i>
                            </div>
                            <div>
                                <h4 style="font-size:1rem; color:#0F233D; margin-bottom:2px;">THÔNG TIN PHÁP LÝ</h4>
                                <span style="font-size:0.9rem; color:#475569;">CTCP XNK TM TGT (Mã số thuế: <strong>0111571986</strong>) - VAT Hợp Lệ</span>
                            </div>
                        </div>

                        <div style="display:flex; align-items:flex-start; gap:0.85rem;">
                            <div style="width:42px; height:42px; background:#ECFDF5; color:#059669; border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                                <i class="fas fa-location-dot"></i>
                            </div>
                            <div>
                                <h4 style="font-size:1rem; color:#0F233D; margin-bottom:2px;">ĐỊA CHỈ TRỤ SỞ CHÍNH</h4>
                                <span style="font-size:0.9rem; color:#475569;">C39-13 KĐT Geleximco, đường Lê Trọng Tấn, Phường Dương Nội, Thành phố Hà Nội, Việt Nam</span>
                            </div>
                        </div>

                        <div style="display:flex; align-items:flex-start; gap:0.85rem;">
                            <div style="width:42px; height:42px; background:#ECFDF5; color:#059669; border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <h4 style="font-size:1rem; color:#0F233D; margin-bottom:2px;">ĐƯỜNG DÂY NÓNG B2B / ZALO TƯ VẤN</h4>
                                <span style="font-size:1.1rem; font-weight:700; color:#EA580C;">0329575866</span>
                            </div>
                        </div>

                        <div style="display:flex; align-items:flex-start; gap:0.85rem;">
                            <div style="width:42px; height:42px; background:#ECFDF5; color:#059669; border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                                <i class="fas fa-credit-card"></i>
                            </div>
                            <div>
                                <h4 style="font-size:1rem; color:#0F233D; margin-bottom:2px;">TÀI KHOẢN NGÂN HÀNG (VIETINBANK)</h4>
                                <span style="font-size:0.9rem; color:#475569;">Số TK: <strong style="color:#0F233D; font-weight:700;">111619386868</strong> tại Ngân hàng TMCP Công Thương Việt Nam - CN Thành An - Hội Sở</span>
                            </div>
                        </div>

                        <div style="display:flex; align-items:flex-start; gap:0.85rem;">
                            <div style="width:42px; height:42px; background:#ECFDF5; color:#059669; border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4 style="font-size:1rem; color:#0F233D; margin-bottom:2px;">HÒM THƯ ĐIỆN TỬ NHẬN BÁO GIÁ</h4>
                                <span style="font-size:0.9rem; color:#475569; font-weight:600;">info@tgt.com.vn</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Right -->
                <div class="rfq-box">
                    <span class="badge badge-orange mb-2">Form Báo Giá Chuyên Nghiệp</span>
                    <h3 style="font-size:1.35rem; color:#0F233D; margin-bottom:1.25rem;">GỬI THÔNG TIN YÊU CẦU B2B</h3>

                    <form>
                        <div class="form-grid">
                            <div class="form-group">
                                <label>HỌ & TÊN NGƯỜI LIÊN HỆ *</label>
                                <input type="text" class="form-control" placeholder="Nguyễn Văn A" required>
                            </div>
                            <div class="form-group">
                                <label>TÊN DOANH NGHIỆP / CƠ SỞ *</label>
                                <input type="text" class="form-control" placeholder="Công ty / Đại lý..." required>
                            </div>
                            <div class="form-group">
                                <label>SỐ ĐIỆN THOẠI / ZALO *</label>
                                <input type="tel" class="form-control" placeholder="09xxxxxxx" required>
                            </div>
                            <div class="form-group">
                                <label>THƯ ĐIỆN TỬ (EMAIL) NHẬN BÁO GIÁ *</label>
                                <input type="email" class="form-control" placeholder="email@domain.com" required>
                            </div>
                            <div class="form-group">
                                <label>MÔ HÌNH KINH DOANH?</label>
                                <select class="form-control">
                                    <option value="nhamay">Nhà máy chế biến</option>
                                    <option value="daily">Chợ đầu mối / Đại lý sỉ</option>
                                    <option value="horeca">Nhà hàng, Khách sạn & Ẩm thực (HORECA)</option>
                                    <option value="bepan">Bếp ăn công nghiệp</option>
                                    <option value="sieuthi">Siêu thị / Bán lẻ</option>
                                    <option value="xnk">Doanh nghiệp XNK</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>THỜI GIAN CẦN HÀNG?</label>
                                <select class="form-control">
                                    <option value="ngay">Ngay lập tức (1-3 ngày)</option>
                                    <option value="tuan">Trong 1-7 ngày</option>
                                    <option value="thang">Trong 7-30 ngày</option>
                                    <option value="daihan">Hợp đồng dài hạn</option>
                                </select>
                            </div>
                            <div class="form-group full-width">
                                <label>GHI CHÚ QUY CÁCH & SẢN LƯỢNG NÔNG SẢN</label>
                                <textarea class="form-control" placeholder="Ghi chú loại nông sản, kích cỡ củ, số lượng tấn/container cần..."></textarea>
                            </div>
                        </div>
                        <div style="margin-top:1.25rem;">
                            <button type="submit" class="btn btn-primary btn-lg" style="width:100%;">
                                <i class="fas fa-paper-plane"></i> Gửi Yêu Cầu Báo Giá Ngay
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
