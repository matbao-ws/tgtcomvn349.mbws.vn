@extends('client.layouts.app')

@section('title', 'Tuyển Dụng Nhân Sự & Gia Nhập Đội Ngũ TGT TIMEX')
@section('meta_description', 'Cơ hội nghề nghiệp & tuyển dụng nhân sự tại CÔNG TY CỔ PHẦN XUẤT NHẬP KHẨU THƯƠNG MẠI TGT.')

@section('content')
<!-- PAGE TITLE BANNER -->
    <section class="hero-section" style="padding:3.5rem 0;">
        <div class="hero-bg-overlay" style="opacity:0.6;"></div>
        <div class="container" style="position:relative; z-index:2; text-align:center;">
            <span class="badge badge-orange mb-2">Cơ Hội Nghề Nghiệp & Tuyển Dụng</span>
            <h1 style="font-size:2.25rem; color:#0F233D; font-weight:700;">GIA NHẬP ĐỘI NGŨ PHÁT TRIỂN NÔNG SẢN TGT TIMEX</h1>
            <p style="color:#475569; max-width:700px; margin:0.5rem auto 0 auto;">Cơ hội làm việc chuyên nghiệp trong lĩnh vực thương mại & chuỗi cung ứng nông sản hàng đầu.</p>
        </div>
    </section>

    <!-- 4 RECRUITMENT POSITIONS (BASED ON DOCX JDS) -->
    <section id="tuyen-dung-vi-tri" class="section-padding bg-white">
        <div class="container">
            <div class="section-header">
                <span class="sub-tag"><i class="fas fa-briefcase"></i> Vị Trí Đang Tuyển Dụng Tháng 08/2026</span>
                <h2 class="section-title">4 CƠ HỘI NGHỀ NGHIỆP TRỌNG ĐIỂM TẠI TGT TIMEX</h2>
                <p class="section-subtitle">Chế độ đãi ngộ cạnh tranh, thưởng minh bạch theo lợi nhuận gộp & lộ trình phát triển rõ ràng.</p>
            </div>

            <div class="job-grid">
                <!-- Job 1: Mua Hàng -->
                <div class="job-card">
                    <div class="job-card-header">
                        <span class="badge badge-green">Phòng Mua Hàng & XNK</span>
                        <div class="job-salary-tag"><i class="fas fa-coins"></i> 15 - 25 Triệu+</div>
                    </div>
                    <h3 class="job-title">CHUYÊN VIÊN MUA HÀNG & TÌM NGUỒN NÔNG SẢN</h3>
                    <div class="job-meta-list">
                        <span class="job-meta-item"><i class="fas fa-clock"></i> Toàn thời gian</span>
                        <span class="job-meta-item"><i class="fas fa-location-dot"></i> Hà Đông, Hà Nội</span>
                        <span class="job-meta-item"><i class="fas fa-briefcase"></i> Ưu tiên XNK / Nông sản</span>
                    </div>
                    <p class="job-summary">Tìm kiếm, thẩm định & đàm phán với nhà cung cấp nông sản quốc tế (Bỉ, Hà Lan, Ấn Độ, Trung Quốc, Myanmar) & nội địa, tối ưu giá vốn và kiểm soát chất lượng kiểm dịch.</p>
                    <div class="job-actions-row">
                        <button class="btn btn-outline-navy btn-sm btn-view-jd" data-job-id="purchasing-staff">
                            <i class="fas fa-file-lines"></i> Xem Chi Tiết JD
                        </button>
                        <button class="btn btn-primary btn-sm btn-apply-job" data-job-id="purchasing-staff" data-job-title="Chuyên Viên Mua Hàng & Tìm Nguồn Nông Sản">
                            <i class="fas fa-paper-plane"></i> Ứng Tuyển Ngay
                        </button>
                    </div>
                </div>

                <!-- Job 2: Kinh Doanh B2B -->
                <div class="job-card">
                    <div class="job-card-header">
                        <span class="badge badge-navy">Phòng Kinh Doanh</span>
                        <div class="job-salary-tag"><i class="fas fa-coins"></i> 15 - 30+ Triệu</div>
                    </div>
                    <h3 class="job-title">NHÂN VIÊN KINH DOANH NÔNG SẢN B2B</h3>
                    <div class="job-meta-list">
                        <span class="job-meta-item"><i class="fas fa-clock"></i> Toàn thời gian</span>
                        <span class="job-meta-item"><i class="fas fa-location-dot"></i> Hà Đông, Hà Nội</span>
                        <span class="job-meta-item"><i class="fas fa-award"></i> Onboarding 7 ngày đào tạo</span>
                    </div>
                    <p class="job-summary">Khai thác và phát triển sản lượng bán sỉ nông sản (khoai tây tươi/đông lạnh, hành, tỏi, gừng) cho các nhà máy chế biến, bếp ăn công nghiệp, đại lý và chuỗi siêu thị toàn quốc.</p>
                    <div class="job-actions-row">
                        <button class="btn btn-outline-navy btn-sm btn-view-jd" data-job-id="sales-executive">
                            <i class="fas fa-file-lines"></i> Xem Chi Tiết JD
                        </button>
                        <button class="btn btn-primary btn-sm btn-apply-job" data-job-id="sales-executive" data-job-title="Nhân Viên Kinh Doanh Nông Sản B2B">
                            <i class="fas fa-paper-plane"></i> Ứng Tuyển Ngay
                        </button>
                    </div>
                </div>

                <!-- Job 3: Sales Admin -->
                <div class="job-card">
                    <div class="job-card-header">
                        <span class="badge badge-orange">Phòng Kinh Doanh</span>
                        <div class="job-salary-tag"><i class="fas fa-coins"></i> 15 - 20 Triệu</div>
                    </div>
                    <h3 class="job-title">CHUYÊN VIÊN HỖ TRỢ KINH DOANH (SALES ADMIN)</h3>
                    <div class="job-meta-list">
                        <span class="job-meta-item"><i class="fas fa-clock"></i> Nữ (25 - 35 tuổi)</span>
                        <span class="job-meta-item"><i class="fas fa-location-dot"></i> Hà Đông, Hà Nội</span>
                        <span class="job-meta-item"><i class="fas fa-laptop-code"></i> CRM & Dữ liệu Excel</span>
                    </div>
                    <p class="job-summary">Quản trị CRM & pipeline bán hàng, soạn thảo báo giá/hợp đồng, theo dõi tiến độ đơn hàng và thu thập dữ liệu giá thị trường nông sản hàng ngày cho Ban Giám đốc.</p>
                    <div class="job-actions-row">
                        <button class="btn btn-outline-navy btn-sm btn-view-jd" data-job-id="sales-admin">
                            <i class="fas fa-file-lines"></i> Xem Chi Tiết JD
                        </button>
                        <button class="btn btn-primary btn-sm btn-apply-job" data-job-id="sales-admin" data-job-title="Chuyên Viên Hỗ Trợ Kinh Doanh (Sales Admin)">
                            <i class="fas fa-paper-plane"></i> Ứng Tuyển Ngay
                        </button>
                    </div>
                </div>

                <!-- Job 4: Kế Toán -->
                <div class="job-card">
                    <div class="job-card-header">
                        <span class="badge badge-green">Phòng Kế Toán</span>
                        <div class="job-salary-tag"><i class="fas fa-coins"></i> 12 - 18 Triệu</div>
                    </div>
                    <h3 class="job-title">NHÂN VIÊN KẾ TOÁN DOANH NGHIỆP XUẤT NHẬP KHẨU</h3>
                    <div class="job-meta-list">
                        <span class="job-meta-item"><i class="fas fa-clock"></i> Toàn thời gian</span>
                        <span class="job-meta-item"><i class="fas fa-location-dot"></i> Hà Đông, Hà Nội</span>
                        <span class="job-meta-item"><i class="fas fa-calculator"></i> MISA & Thuế XNK</span>
                    </div>
                    <p class="job-summary">Quản trị dòng tiền thu chi an toàn, theo dõi công nợ khách hàng và nhà cung cấp, kiểm soát hóa đơn chứng từ thuế GTGT/nhập khẩu và lập báo cáo quản trị định kỳ.</p>
                    <div class="job-actions-row">
                        <button class="btn btn-outline-navy btn-sm btn-view-jd" data-job-id="accountant">
                            <i class="fas fa-file-lines"></i> Xem Chi Tiết JD
                        </button>
                        <button class="btn btn-primary btn-sm btn-apply-job" data-job-id="accountant" data-job-title="Nhân Viên Kế Toán Doanh Nghiệp Xuất Nhập Khẩu">
                            <i class="fas fa-paper-plane"></i> Ứng Tuyển Ngay
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY JOIN TGT TIMEX SECTION -->
    <section class="section-padding bg-grey">
        <div class="container">
            <div class="section-header">
                <span class="sub-tag"><i class="fas fa-heart"></i> Phúc Lợi & Đãi Ngộ Vượt Trội</span>
                <h2 class="section-title">VÌ SAO BẠN NÊN ĐỒNG HÀNH CÙNG TGT TIMEX?</h2>
                <p class="section-subtitle">Chúng tôi xây dựng môi trường tôn trọng sự đóng góp, chia sẻ thành quả kinh doanh và phát triển con người.</p>
            </div>

            <div class="usp-grid">
                <div class="usp-card">
                    <div class="usp-header-row">
                        <div class="usp-icon-box"><i class="fas fa-money-bill-trend-up"></i></div>
                        <span class="badge badge-green">Thu Nhập Đột Phá</span>
                    </div>
                    <h3>THƯỞNG MINH BẠCH THEO KẾT QUẢ</h3>
                    <p>Cơ chế lương cứng vững chắc cộng thưởng % lợi nhuận gộp, thưởng tiết kiệm giá vốn, thưởng nóng khách hàng mới và thưởng KPI hàng tháng.</p>
                </div>

                <div class="usp-card">
                    <div class="usp-header-row">
                        <div class="usp-icon-box"><i class="fas fa-graduation-cap"></i></div>
                        <span class="badge badge-navy">Đào Tạo Bài Bản</span>
                    </div>
                    <h3>LỘ TRÌNH ONBOARDING 7 NGÀY</h3>
                    <p>Nhân sự mới được đào tạo chuyên sâu về kỹ năng thương mại quốc tế, kiến thức quy cách nông sản, quy trình CRM và kỹ năng đàm phán hợp đồng B2B.</p>
                </div>

                <div class="usp-card">
                    <div class="usp-header-row">
                        <div class="usp-icon-box"><i class="fas fa-stairs"></i></div>
                        <span class="badge badge-orange">Cơ Hội Thăng Tiến</span>
                    </div>
                    <h3>LỘ TRÌNH NGHỀ NGHIỆP RÕ RÀNG</h3>
                    <p>Nhân sự xuất sắc có cơ hội phát triển lên Trưởng phòng Kinh doanh, Trưởng bộ phận Thu mua hoặc phụ trách mở rộng kênh phân phối mới của công ty.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4-STEP RECRUITMENT PROCESS -->
    <section class="section-padding bg-white">
        <div class="container">
            <div class="section-header">
                <span class="sub-tag"><i class="fas fa-route"></i> Quy Trình Chuẩn Chỉnh</span>
                <h2 class="section-title">4 BƯỚC ỨNG TUYỂN & GIA NHẬP TGT TIMEX</h2>
                <p class="section-subtitle">Quy trình tuyển dụng tinh gọn, phản hồi nhanh chóng trong vòng 24 - 48 giờ làm việc.</p>
            </div>

            <div class="process-grid">
                <div class="process-card">
                    <div class="process-step-num">01</div>
                    <div class="process-icon-box"><i class="fas fa-file-signature"></i></div>
                    <h3>NỘP HỒ SƠ ỨNG TUYỂN</h3>
                    <p>Điền form ứng tuyển trực tuyến trên website hoặc gửi CV trực tiếp qua Zalo / Email phòng nhân sự.</p>
                </div>

                <div class="process-card">
                    <div class="process-step-num">02</div>
                    <div class="process-icon-box"><i class="fas fa-comments"></i></div>
                    <h3>PHỎNG VẤN TRỰC TIẾP</h3>
                    <p>Trao đổi chuyên môn, tìm hiểu nguyện vọng và đánh giá mức độ phù hợp với Trưởng bộ phận & Ban Giám đốc.</p>
                </div>

                <div class="process-card">
                    <div class="process-step-num">03</div>
                    <div class="process-icon-box"><i class="fas fa-envelope-open-text"></i></div>
                    <h3>NHẬN THƯ MỜI NHẬN VIỆC</h3>
                    <p>Nhận Offer Letter chi tiết về mức lương, thưởng % lợi nhuận và các chính sách đãi ngộ thỏa thuận.</p>
                </div>

                <div class="process-card">
                    <div class="process-step-num">04</div>
                    <div class="process-icon-box"><i class="fas fa-rocket"></i></div>
                    <h3>ONBOARDING & LÀM VIỆC</h3>
                    <p>Tham gia lộ trình đào tạo 7 ngày, tiếp nhận công cụ làm việc và chính thức bắt đầu công việc tại TGT TIMEX.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- RECRUITMENT CONTACT BAR -->
    <section class="section-padding bg-grey">
        <div class="container">
            <div class="recruit-cta-card">
                <div class="recruit-info-side">
                    <span class="badge badge-green mb-2"><i class="fas fa-headset"></i> Phòng Nhân Sự TGT TIMEX</span>
                    <h3>BẠN CẦN TƯ VẤN THÊM VỀ CƠ HỘI NGHỀ NGHIỆP?</h3>
                    <p>
                        Liên hệ trực tiếp với bộ phận tuyển dụng TGT TIMEX để được giải đáp mọi thắc mắc về vị trí công việc, cơ chế lương thưởng hoặc nộp CV nhanh qua Zalo:
                    </p>
                    <div class="recruit-contact-details">
                        <div class="recruit-contact-item">
                            <i class="fas fa-location-dot"></i>
                            <div><strong>Địa chỉ làm việc:</strong> C39-13 KĐT Geleximco, đường Lê Trọng Tấn, Phường Dương Nội, Thành phố Hà Nội, Việt Nam</div>
                        </div>
                        <div class="recruit-contact-item">
                            <i class="fas fa-phone"></i>
                            <div><strong>Đường dây nóng/Zalo Tuyển dụng:</strong> <span style="color:#EA580C; font-weight:700;">0921.575.866 / 0921.595.368</span></div>
                        </div>
                        <div class="recruit-contact-item">
                            <i class="fas fa-envelope"></i>
                            <div><strong>Hòm thư điện tử nhận CV:</strong> <span style="font-weight:600;">info@tgt.com.vn</span> (Tiêu đề: [Họ tên] - Ứng tuyển [Vị trí])</div>
                        </div>
                    </div>
                </div>

                <div class="recruit-action-side">
                    <div class="recruit-action-icon">
                        <i class="fas fa-paper-plane"></i>
                    </div>
                    <h4>Sẵn Sàng Cho Bước Ngoặt Sự Nghiệp?</h4>
                    <p>Hãy gửi thông tin ứng tuyển ngay hôm nay để trở thành một phần của đại gia đình TGT TIMEX.</p>
                    <button class="btn btn-primary btn-apply-job" data-job-id="sales-executive" data-job-title="Nhân Sự TGT TIMEX" style="width:100%;">
                        <i class="fas fa-user-plus"></i> Nộp Hồ Sơ Trực Tuyến
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- MODAL 1: JOB DETAIL POPUP (CHI TIẾT JD ĐẦY ĐỦ) --}}
    <div class="modal-overlay" id="jobDetailModal">
        <div class="modal-card jd-detail-modal-card">
            <div class="modal-header">
                <div>
                    <span class="badge badge-green mb-1" id="modalJdBadge">Toàn Thời Gian</span>
                    <h3 style="font-size:1.35rem; color:#0F233D;" id="modalJdTitle">CHI TIẾT VỊ TRÍ TUYỂN DỤNG</h3>
                    <span style="font-size:0.875rem; color:#64748B;" id="modalJdDept">Phòng Ban</span>
                </div>
                <button class="modal-close"><i class="fas fa-xmark"></i></button>
            </div>
            <div class="modal-body">
                {{-- Quick Info --}}
                <div style="display:grid; grid-template-columns: 1fr 1fr; gap:0.75rem; background:#F8FAFC; border:1px solid #E2E8F0; padding:1rem; border-radius:8px; margin-bottom:1.25rem;">
                    <div><strong style="color:#0F233D;">💰 Thu nhập:</strong> <span id="modalJdSalary" style="color:#EA580C; font-weight:700;">--</span></div>
                    <div><strong style="color:#0F233D;">⏰ Giờ làm việc:</strong> <span id="modalJdTime" style="color:#475569;">--</span></div>
                    <div style="grid-column: 1 / -1;"><strong style="color:#0F233D;">📍 Địa điểm làm việc:</strong> <span id="modalJdLocation" style="color:#475569;">--</span></div>
                </div>

                {{-- Purpose Block --}}
                <div class="jd-block">
                    <div class="jd-block-title"><i class="fas fa-bullseye"></i> Mục Đích Công Việc</div>
                    <p style="color:#334155; font-size:0.925rem; line-height:1.65; margin:0;" id="modalJdPurpose">--</p>
                </div>

                {{-- Duties Block --}}
                <div class="jd-block">
                    <div class="jd-block-title"><i class="fas fa-list-check"></i> Nhiệm Vụ & Trách Nhiệm Chính</div>
                    <ul class="jd-bullet-list" id="modalJdDuties"></ul>
                </div>

                {{-- Requirements Block --}}
                <div class="jd-block">
                    <div class="jd-block-title"><i class="fas fa-user-check"></i> Yêu Cầu Ứng Viên</div>
                    <ul class="jd-bullet-list" id="modalJdRequirements"></ul>
                </div>

                {{-- Benefits Block --}}
                <div class="jd-block">
                    <div class="jd-block-title"><i class="fas fa-gift"></i> Quyền Lợi & Cơ Chế Lương Thưởng</div>
                    <ul class="jd-bullet-list" id="modalJdBenefits"></ul>
                </div>

                <div style="margin-top:1.5rem; display:flex; gap:1rem; justify-content:flex-end;">
                    <button class="btn btn-outline-navy modal-close">Đóng Lại</button>
                    <button class="btn btn-primary btn-apply-from-modal" data-job-id="" data-job-title="">
                        <i class="fas fa-paper-plane"></i> Ứng Tuyển Vị Trí Này
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL 2: DEDICATED JOB APPLICATION FORM (FORM ỨNG TUYỂN) --}}
    <div class="modal-overlay" id="jobApplyModal">
        <div class="modal-card">
            <div class="modal-header">
                <div>
                    <span class="badge badge-orange mb-1">Hồ Sơ Ứng Tuyển Trực Tuyến</span>
                    <h3 style="font-size:1.35rem; color:#0F233D;" id="applyModalTitle">ỨNG TUYỂN VỊ TRÍ</h3>
                </div>
                <button class="modal-close"><i class="fas fa-xmark"></i></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-grid">
                        <div class="form-group full-width">
                            <label>VỊ TRÍ BẠN MUỐN ỨNG TUYỂN *</label>
                            <select class="form-control" id="applyJobPosition" required>
                                <option value="purchasing-staff">Chuyên viên Mua Hàng & Tìm Nguồn Nông Sản</option>
                                <option value="sales-executive">Nhân viên Kinh Doanh Nông Sản B2B</option>
                                <option value="sales-admin">Chuyên viên Hỗ Trợ Kinh Doanh (Sales Admin)</option>
                                <option value="accountant">Nhân viên Kế Toán Doanh Nghiệp XNK</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>HỌ VÀ TÊN CỦA BẠN *</label>
                            <input type="text" class="form-control" placeholder="Nguyễn Văn A" required>
                        </div>
                        <div class="form-group">
                            <label>SỐ ĐIỆN THOẠI / ZALO *</label>
                            <input type="tel" class="form-control" placeholder="09xxxxxxx" required>
                        </div>
                        <div class="form-group">
                            <label>THƯ ĐIỆN TỬ (EMAIL) LIÊN HỆ NHẬN PHẢN HỒI *</label>
                            <input type="email" class="form-control" placeholder="email@domain.com" required>
                        </div>
                        <div class="form-group">
                            <label>NĂM SINH / ĐỘ TUỔI</label>
                            <input type="text" class="form-control" placeholder="Ví dụ: 1998 / 28 tuổi">
                        </div>
                        <div class="form-group full-width">
                            <label>ĐƯỜNG DẪN LINK CV (GOOGLE DRIVE, DROPBOX, TOPCV...) *</label>
                            <input type="url" class="form-control" placeholder="https://drive.google.com/file/d/... hoặc link CV của bạn" required>
                        </div>
                        <div class="form-group full-width">
                            <label>TÓM TẮT KINH NGHIỆM LÀM VIỆC & KỸ NĂNG NỔI BẬT</label>
                            <textarea class="form-control" placeholder="Ghi chú ngắn về số năm kinh nghiệm, các công việc tương tự đã từng làm..."></textarea>
                        </div>
                    </div>
                    <div style="margin-top:1.35rem; text-align:center;">
                        <button type="submit" class="btn btn-primary btn-lg" style="width:100%;">
                            <i class="fas fa-paper-plane"></i> Gửi Hồ Sơ Ứng Tuyển Ngay
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

