@extends('client.layouts.app')

@section('title', 'TGT TIMEX - CÔNG TY CỔ PHẦN XUẤT NHẬP KHẨU THƯƠNG MẠI TGT | Nông Sản B2B & Tìm Nguồn Hàng')
@section('meta_description', 'TGT TIMEX - Đơn vị xuất nhập khẩu, thương mại & phân phối nông sản B2B hàng đầu Việt Nam.')

@section('content')
<!-- HERO BANNER SECTION -->
    <section class="hero-section">
        <div class="hero-bg-overlay"></div>
        <div class="container">
            <div class="hero-content-wrapper">
                <div class="hero-text-box">
                    <span class="sub-tag"><i class="fas fa-shield-halved"></i> Đối Tác Cung Ứng Nông Sản B2B Hàng Đầu</span>
                    <h1>TGT TIMEX – NGUỒN HÀNG NÔNG SẢN <span>SỐ LƯỢNG LỚN THEO QUY CÁCH</span></h1>
                    <p>Chuyên nhập khẩu trực tiếp & phân phối <strong>Khoai Tây Hà Lan, Khoai Tây Chiên Bỉ, Hành Tây Ấn Độ, Tỏi Myanmar & Trung Quốc</strong>, Trái cây & Nông sản chế biến. Chủ động tìm nguồn hàng từ Bỉ, Hà Lan, Ấn Độ, Trung Quốc, Myanmar & các thị trường quốc tế theo đúng chỉ tiêu kỹ thuật & tiến độ của doanh nghiệp.</p>
                    
                    <div class="hero-actions">
                        <button class="btn btn-primary btn-lg trigger-rfq-modal">
                            <i class="fas fa-file-signature"></i> Nhận Báo Giá B2B Ngay
                        </button>
                        <a href="{{ route('client.products') }}" class="btn btn-outline-navy btn-lg">
                            <i class="fas fa-boxes-stacked"></i> Xem Bảng Thông Số Kỹ Thuật
                        </a>
                    </div>

                </div>

                <div class="hero-feature-card">
                    <h3><i class="fas fa-award" style="color:#10B981;"></i> CAM KẾT NĂNG LỰC CUNG ỨNG B2B</h3>
                    <div class="hero-feature-list">
                        <div class="hero-feature-item">
                            <div class="hero-feature-icon"><i class="fas fa-cubes"></i></div>
                            <div class="hero-feature-info">
                                <h4>SẢN LƯỢNG LỚN THEO CONTAINER</h4>
                                <p>Cung ứng 5,000+ Tấn/Tháng theo quy cách Size 45-75mm cho nhà máy & đại lý.</p>
                            </div>
                        </div>
                        <div class="hero-feature-item">
                            <div class="hero-feature-icon"><i class="fas fa-snowflake"></i></div>
                            <div class="hero-feature-info">
                                <h4>CHUỖI KHO LẠNH 24/7 CHUẨN NHIỆT ĐỘ</h4>
                                <p>Hệ thống kho lạnh giữ chất lượng nông sản tươi mới, không nấm mốc.</p>
                            </div>
                        </div>
                        <div class="hero-feature-item">
                            <div class="hero-feature-icon"><i class="fas fa-file-contract"></i></div>
                            <div class="hero-feature-info">
                                <h4>ĐẦY ĐỦ CHỨNG TỪ XNK & VAT</h4>
                                <p>Cung cấp Phytosanitary, VietGAP, CQ, CO & Hóa đơn VAT hợp lệ 100%.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS BANNER -->
    <section class="stats-banner">
        <div class="container">
            <div class="stats-card-grid">
                <div class="stat-box">
                    <div class="stat-number" data-target="5000" data-suffix=" Tấn+">0</div>
                    <div class="stat-label">Sản Lượng Cung Ứng / Tháng</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number" data-target="100" data-suffix="+">0</div>
                    <div class="stat-label">Đối Tác Cung Ứng Toàn Cầu</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number" data-target="300" data-suffix=" Đối Tác">0</div>
                    <div class="stat-label">Nhà Máy, Đại Lý & Nhà Hàng</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number" data-target="100" data-suffix="%">0</div>
                    <div class="stat-label">Kiểm Định Đạt Tiêu Chuẩn</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3 CORE PILLARS SECTION -->
    <section class="section-padding bg-white">
        <div class="container">
            <div class="section-header">
                <span class="sub-tag"><i class="fas fa-star"></i> Sản Phẩm Mũi Nhọn & Năng Lực Khác Biệt</span>
                <h2 class="section-title">3 TRỤ CỘT NĂNG LỰC CUNG ỨNG CHỦ LỰC CỦA TGT TIMEX</h2>
                <p class="section-subtitle">TGT tập trung vào các nhóm hàng nông sản củ thương mại số lượng lớn & dịch vụ tìm nguồn hàng theo quy cách doanh nghiệp.</p>
            </div>

            <div class="usp-grid">
                <!-- Pillar 1 -->
                <div class="usp-card">
                    <div class="usp-header-row">
                        <div class="usp-icon-box"><i class="fas fa-cubes"></i></div>
                        <span class="badge badge-green">Sản Phẩm Chủ Lực #1</span>
                    </div>
                    <h3>KHOAI TÂY TƯƠI & ĐÔNG LẠNH</h3>
                    <p>Nhập khẩu trực tiếp Hà Lan, Trung Quốc, Đà Lạt. Phân loại chuẩn Cỡ củ 45–55mm, 55–65mm, 65–75mm với độ khô tiêu chuẩn ≥ 20%. Cung cấp khoai tây chiên đông lạnh Bỉ/Hà Lan cho nhà hàng khách sạn & nhà máy chế biến thực phẩm, khoai tây sấy.</p>
                    <div class="usp-card-footer">
                        <button class="btn btn-outline-navy btn-sm trigger-rfq-modal" data-product-name="Khoai tây tươi & đông lạnh" style="width:100%;">
                            <i class="fas fa-file-invoice-dollar"></i> Nhận báo giá khoai tây
                        </button>
                    </div>
                </div>

                <!-- Pillar 2 -->
                <div class="usp-card">
                    <div class="usp-header-row">
                        <div class="usp-icon-box"><i class="fas fa-seedling"></i></div>
                        <span class="badge badge-navy">Nhóm Củ Thương Mại #2</span>
                    </div>
                    <h3>HÀNH TÂY, TỎI, GỪNG & CÀ RỐT</h3>
                    <p>Nguồn hàng sỉ số lượng lớn nhập khẩu Hà Lan, Ấn Độ, Trung Quốc, Myanmar & nông sản Việt Nam. Đóng gói bao lưới 10kg/20kg/25kg, tép mẩy củ chắc, bảo quản kho lạnh tiêu chuẩn cho bếp ăn công nghiệp & đại lý.</p>
                    <div class="usp-card-footer">
                        <button class="btn btn-outline-navy btn-sm trigger-rfq-modal" data-product-name="Hành tây, tỏi, gừng & cà rốt" style="width:100%;">
                            <i class="fas fa-file-invoice-dollar"></i> Nhận báo giá hành tỏi Gừng
                        </button>
                    </div>
                </div>

                <!-- Pillar 3 -->
                <div class="usp-card">
                    <div class="usp-header-row">
                        <div class="usp-icon-box"><i class="fas fa-globe"></i></div>
                        <span class="badge badge-orange">Năng Lực Khác Biệt #3</span>
                    </div>
                    <h3>TÌM NGUỒN NÔNG SẢN THEO YÊU CẦU</h3>
                    <p>Không chỉ bán sản phẩm sẵn có, TGT chủ động săn tìm nguồn nông sản từ Bỉ, Hà Lan, Ấn Độ, Trung Quốc, Myanmar & các thị trường quốc tế theo đúng quy cách, tiêu chuẩn kiểm định & tiến độ hợp đồng (FOB, CIF, CFR, DDP).</p>
                    <div class="usp-card-footer">
                        <button class="btn btn-primary btn-sm trigger-rfq-modal" data-product-name="Tìm Nguồn Nông Sản Theo Yêu Cầu" style="width:100%;">
                            <i class="fas fa-paper-plane"></i> Gửi Yêu Cầu Tìm Nguồn Ngay
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6 TARGET CUSTOMER SEGMENTS -->
    <section class="section-padding bg-grey">
        <div class="container">
            <div class="section-header">
                <span class="sub-tag"><i class="fas fa-users"></i> Thị Trường & Khách Hàng Mục Tiêu</span>
                <h2 class="section-title">GIẢI PHÁP CUNG ỨNG NÔNG SẢN PHÙ HỢP CHO TỪNG NHÓM KHÁCH HÀNG</h2>
                <p class="section-subtitle">Mỗi nhóm khách hàng B2B có tiêu chuẩn kỹ thuật & phương thức giao hàng riêng biệt.</p>
            </div>

            <div class="segments-grid">
                <!-- Segment 1 -->
                <div class="segment-card">
                    <div class="segment-header-box">
                        <div class="segment-icon-box"><i class="fas fa-industry"></i></div>
                        <h3 class="segment-title">1. NHÀ MÁY CHẾ BIẾN</h3>
                    </div>
                    <p class="segment-desc">Nhà máy sản xuất thực phẩm, khoai tây sấy, bánh, gia vị & đồ đóng hộp cần chỉ tiêu kỹ thuật chính xác.</p>
                    <div class="segment-tags">
                        <span class="segment-tag-item">Cỡ chuẩn 55-65mm</span>
                        <span class="segment-tag-item">Độ khô ≥ 20%</span>
                        <span class="segment-tag-item">Hợp đồng dài hạn</span>
                    </div>
                </div>

                <!-- Segment 2 -->
                <div class="segment-card">
                    <div class="segment-header-box">
                        <div class="segment-icon-box"><i class="fas fa-utensils"></i></div>
                        <h3>2. BẾP ĂN CÔNG NGHIỆP</h3>
                    </div>
                    <p class="segment-desc">Các đơn vị cung cấp suất ăn công nghiệp, khu công nghiệp cần nguồn hàng ổn định giá tốt.</p>
                    <div class="segment-tags">
                        <span class="segment-tag-item">Giao hàng định kỳ</span>
                        <span class="segment-tag-item">Đầy đủ ATTP</span>
                        <span class="segment-tag-item">Xuất hóa đơn VAT</span>
                    </div>
                </div>

                <!-- Segment 3 -->
                <div class="segment-card">
                    <div class="segment-header-box">
                        <div class="segment-icon-box"><i class="fas fa-hotel"></i></div>
                        <h3>3. NHÀ HÀNG & KHÁCH SẠN</h3>
                    </div>
                    <p class="segment-desc">Nhà hàng, khách sạn, chuỗi ẩm thực yêu cầu củ quả đồng đều, khoai tây đông lạnh chiên giòn lâu.</p>
                    <div class="segment-tags">
                        <span class="segment-tag-item">Khoai tây chiên Bỉ</span>
                        <span class="segment-tag-item">Giao xe lạnh 24/7</span>
                        <span class="segment-tag-item">Mẫu test thực tế</span>
                    </div>
                </div>

                <!-- Segment 4 -->
                <div class="segment-card">
                    <div class="segment-header-box">
                        <div class="segment-icon-box"><i class="fas fa-store"></i></div>
                        <h3>4. CHỢ ĐẦU MỐI & ĐẠI LÝ SỈ</h3>
                    </div>
                    <p class="segment-desc">Các thương lái, đại lý nông sản miền Bắc & toàn quốc nhập hàng giá sỉ trực tiếp từ container.</p>
                    <div class="segment-tags">
                        <span class="segment-tag-item">Giá sỉ tận gốc</span>
                        <span class="segment-tag-item">Giao theo container</span>
                        <span class="segment-tag-item">Bao lưới 10-25kg</span>
                    </div>
                </div>

                <!-- Segment 5 -->
                <div class="segment-card">
                    <div class="segment-header-box">
                        <div class="segment-icon-box"><i class="fas fa-cart-shopping"></i></div>
                        <h3>5. SIÊU THỊ & BÁN LẺ</h3>
                    </div>
                    <p class="segment-desc">Các chuỗi siêu thị, cửa hàng thực phẩm sạch yêu cầu tem nhãn barcode & chứng nhận nguồn gốc.</p>
                    <div class="segment-tags">
                        <span class="segment-tag-item">VietGAP / GlobalGAP</span>
                        <span class="segment-tag-item">Mã QR truy xuất</span>
                        <span class="segment-tag-item">Bao bì chuẩn kệ</span>
                    </div>
                </div>

                <!-- Segment 6 -->
                <div class="segment-card">
                    <div class="segment-header-box">
                        <div class="segment-icon-box"><i class="fas fa-ship"></i></div>
                        <h3>6. DOANH NGHIỆP XNK</h3>
                    </div>
                    <p class="segment-desc">Đối tác thương mại xuất nhập khẩu (XNK) quốc tế giao dịch theo các điều kiện Incoterms chuyên nghiệp.</p>
                    <div class="segment-tags">
                        <span class="segment-tag-item">FOB / CIF / CFR / DDP</span>
                        <span class="segment-tag-item">Phytosanitary & CO</span>
                        <span class="segment-tag-item">Container Lạnh Chuyên Dụng</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCT SHOWCASE WITH DATA SHEETS -->
    <section class="section-padding bg-white">
        <div class="container">
            <div class="section-header">
                <span class="sub-tag"><i class="fas fa-box-open"></i> Danh Mục Nông Sản B2B</span>
                <h2 class="section-title">DANH MỤC NÔNG SẢN & THÔNG TIN CUNG ỨNG</h2>
                <p class="section-subtitle">Đầy đủ thông tin về sản phẩm, tiêu chuẩn, quy cách đóng gói và hồ sơ kiểm định.</p>
            </div>

            <div class="filter-tabs">
                <button class="filter-btn active" data-filter="all">Tất cả sản phẩm</button>
                @if(isset($categories) && $categories->isNotEmpty())
                    @foreach($categories as $cat)
                        <button class="filter-btn" data-filter="{{ $cat->slug }}">{{ $cat->name }}</button>
                    @endforeach
                @else
                    <button class="filter-btn" data-filter="nong-san-tuoi">Nông sản tươi</button>
                    <button class="filter-btn" data-filter="nong-san-kho">Nông sản khô</button>
                    <button class="filter-btn" data-filter="nong-san-che-bien">Nông sản chế biến</button>
                    <button class="filter-btn" data-filter="nong-san-xuat-khau">Nông sản xuất khẩu</button>
                    <button class="filter-btn" data-filter="hang-hoa-xnk">Hàng hóa XNK</button>
                @endif
            </div>

            <div class="product-grid">
                @if(isset($products) && $products->isNotEmpty())
                    @foreach($products as $product)
                        @php
                            $catSlug = $product->category?->slug ?? 'nong-san-tuoi';
                            $catName = $product->category?->name ?? 'Nông Sản B2B';
                            $imgUrl = $product->image_url ? asset($product->image_url) : asset('client-assets/images/fresh_produce.png');
                            $descLines = array_filter(array_map('trim', explode("\n", (string)$product->description)));
                        @endphp
                        <div class="product-card" data-category="{{ $catSlug }}">
                            <div class="product-img-wrapper {{ str_contains($imgUrl, 'marquise') ? 'img-contain' : '' }}">
                                <img src="{{ $imgUrl }}" alt="{{ $product->name }}" loading="lazy">
                                <span class="product-category-tag">{{ $catName }}</span>
                                @if($product->brand)
                                    <span class="product-origin-badge">{{ $product->brand->name }}</span>
                                @elseif(str_contains($imgUrl, 'marquise'))
                                    <span class="product-origin-badge">Bỉ (Belgium)</span>
                                @elseif($catSlug === 'nong-san-xuat-khau')
                                    <span class="product-origin-badge">Việt Nam</span>
                                @endif
                            </div>
                            <div class="product-content">
                                <h3 class="product-title" title="{{ $product->name }}">{{ $product->name }}</h3>
                                <p class="product-desc" title="{{ $product->short_description }}">{{ $product->short_description }}</p>
                                
                                @if(!empty($descLines))
                                    <div class="product-specs-list">
                                        @foreach(array_slice($descLines, 0, 4) as $line)
                                            @if(str_contains($line, ':'))
                                                @php [$k, $v] = explode(':', $line, 2); @endphp
                                                <div class="product-spec-item">
                                                    <label>{{ mb_strtoupper(trim($k)) }}:</label>
                                                    <span title="{{ trim($v) }}">{{ trim($v) }}</span>
                                                </div>
                                            @else
                                                <div class="product-spec-item"><span>{{ $line }}</span></div>
                                            @endif
                                        @endforeach
                                    </div>
                                @endif

                                <div class="product-price-bar {{ $product->price > 0 ? 'has-price' : '' }}">
                                    @if($product->price > 0)
                                        <div class="price-val">
                                            <strong>{{ number_format($product->price, 0, ',', '.') }} đ</strong>
                                            <span class="price-sub">/ Túi 1kg</span>
                                        </div>
                                        <span class="badge-quote">Sỉ: Báo Giá</span>
                                    @else
                                        <div class="price-val b2b-quote">
                                            <i class="fas fa-handshake me-1" style="font-size:0.85rem;"></i> Báo Giá Sỉ B2B
                                        </div>
                                        <span class="badge-quote-b2b">Theo Container</span>
                                    @endif
                                </div>

                                <div class="product-actions">
                                    <button class="btn btn-outline-navy btn-sm btn-quickview" 
                                        data-product-sku="{{ $product->sku }}"
                                        data-product-name="{{ $product->name }}"
                                        data-product-desc="{{ $product->short_description }}"
                                        data-product-specs="{{ $product->description }}"
                                        data-product-img="{{ $imgUrl }}"
                                        data-category-name="{{ $catName }}"
                                        style="flex:1;">
                                        <i class="fas fa-file-lines"></i> Xem Thông Số
                                    </button>
                                    <button class="btn btn-primary btn-sm trigger-rfq-modal" data-product-name="{{ $product->name }}" style="flex:1;">
                                        <i class="fas fa-paper-plane"></i> Báo Giá
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="text-center py-5" style="grid-column: 1 / -1;">
                        <i class="fas fa-boxes-stacked fa-3x text-muted mb-3"></i>
                        <p class="text-muted">Đang cập nhật danh mục sản phẩm. Vui lòng liên hệ hotline để nhận báo giá chi tiết.</p>
                    </div>
                @endif
            </div>

        </div>
    </section>

    <!-- CASE STUDIES & EVIDENCE SECTION -->
    <section class="section-padding bg-grey">
        <div class="container">
            <div class="section-header">
                <span class="sub-tag"><i class="fas fa-circle-check"></i> Bằng chứng năng lực thực tế</span>
                <h2 class="section-title">KHÁCH HÀNG VÀ HỢP ĐỒNG TIÊU BIỂU</h2>
                <p class="section-subtitle">Minh chứng bằng số liệu khối lượng, tiến độ giao hàng & tiêu chuẩn thực tế TGT đã hoàn thành.</p>
            </div>

            <div class="case-study-grid">
                <!-- Case 1 -->
                <div class="case-study-card">
                    <div class="case-study-content">
                        <span class="case-study-badge">KHÁCH HÀNG ĐẠI LÝ #01</span>
                        <h3 class="case-study-title">CUNG ỨNG 28 TẤN KHOAI TÂY HÀ LAN CHO ĐẠI LÝ MIỀN BẮC</h3>
                        <p style="font-size:0.875rem; color:#64748B; margin-bottom:1rem;">Giao container lạnh tận kho đại lý trong vòng 3 ngày kể từ khi ký hợp đồng báo giá.</p>
                        
                        <div class="case-study-specs">
                            <div class="case-study-spec-row"><label>SẢN PHẨM:</label> <span>Khoai Tây Tươi Hà Lan</span></div>
                            <div class="case-study-spec-row"><label>SẢN LƯỢNG:</label> <span>28 Tấn (1 Container 40ft)</span></div>
                            <div class="case-study-spec-row"><label>QUY CÁCH:</label> <span>Bao lưới 10kg (Cỡ củ 55-65mm)</span></div>
                            <div class="case-study-spec-row"><label>THỜI GIAN GIAO:</label> <span>3 Ngày (Hà Nội)</span></div>
                        </div>

                        <span class="badge badge-green" style="align-self:flex-start;"><i class="fas fa-check"></i> Đã Giao Hàng & Hoàn Tất VAT</span>
                    </div>
                </div>

                <!-- Case 2 -->
                <div class="case-study-card">
                    <div class="case-study-content">
                        <span class="case-study-badge">KHÁCH HÀNG NHÀ MÁY #02</span>
                        <h3 class="case-study-title">TÌM NGUỒN 100 TẤN KHOAI TÂY CHUẨN QUY CÁCH NHÀ MÁY</h3>
                        <p style="font-size:0.875rem; color:#64748B; margin-bottom:1rem;">Chủ động tìm nguồn hàng từ Hà Lan đạt chỉ tiêu độ khô ≥ 20% cho nhà máy sản xuất thực phẩm & khoai tây sấy.</p>
                        
                        <div class="case-study-specs">
                            <div class="case-study-spec-row"><label>NHU CẦU:</label> <span>100 Tấn / Tháng</span></div>
                            <div class="case-study-spec-row"><label>CHỈ TIÊU:</label> <span>Độ khô ≥ 20%, Cỡ củ 60-70mm</span></div>
                            <div class="case-study-spec-row"><label>CHỨNG TỪ:</label> <span>Phytosanitary + Test LAS-NN</span></div>
                            <div class="case-study-spec-row"><label>HỢP ĐỒNG:</label> <span>6 Tháng định kỳ</span></div>
                        </div>

                        <span class="badge badge-green" style="align-self:flex-start;"><i class="fas fa-check"></i> Hợp Đồng Cung Ứng Dài Hạn</span>
                    </div>
                </div>

                <!-- Case 3 -->
                <div class="case-study-card">
                    <div class="case-study-content">
                        <span class="case-study-badge">KHÁCH HÀNG BẾP ĂN CÔNG NGHIỆP #03</span>
                        <h3 class="case-study-title">CUNG ỨNG HÀNH TÂY & TỎI SỈ CHO CHUỖI BẾP ĂN CÔNG NGHIỆP</h3>
                        <p style="font-size:0.875rem; color:#64748B; margin-bottom:1rem;">Cấp hàng tuần 15 tấn cho chuỗi bếp ăn cung cấp suất ăn khu công nghiệp Bắc Ninh, Thái Nguyên.</p>
                        
                        <div class="case-study-specs">
                            <div class="case-study-spec-row"><label>SẢN PHẨM:</label> <span>Hành tây Hà Lan & Tỏi trắng</span></div>
                            <div class="case-study-spec-row"><label>SẢN LƯỢNG:</label> <span>15 Tấn / Tuần</span></div>
                            <div class="case-study-spec-row"><label>ĐÓNG GÓI:</label> <span>Bao 20kg dán tem ATTP</span></div>
                            <div class="case-study-spec-row"><label>PHƯƠNG THỨC:</label> <span>Xe tải lạnh giao tận bếp</span></div>
                        </div>

                        <span class="badge badge-green" style="align-self:flex-start;"><i class="fas fa-check"></i> Giao Hàng Định Kỳ Hàng Tuần</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- B2B CTA BANNER & UPGRADED RFQ FORM (NỀN SÁNG CAO CẤP) -->
    <section class="section-padding b2b-cta-section" id="b2b-cta" style="background: linear-gradient(180deg, #F8FAFC 0%, #ECFDF5 50%, #F1F5F9 100%); padding: 4.5rem 0;">
        <div class="container">
            <div class="b2b-cta-card" style="background:#FFFFFF; border:1px solid #E2E8F0; border-radius:18px; padding:3.5rem 3rem; box-shadow:0 15px 40px rgba(15, 35, 61, 0.06); border-top:4px solid #059669;">
                <div class="b2b-cta-grid" style="display:grid; grid-template-columns: 1fr 1.15fr; gap:3.5rem; align-items:center;">
                    <div class="b2b-cta-info">
                        <span class="sub-tag mb-2" style="background:rgba(5,150,105,0.1); color:#059669; border:1px solid rgba(5,150,105,0.25); display:inline-flex; align-items:center; gap:0.45rem; padding:0.4rem 0.85rem; border-radius:20px; font-size:0.825rem; font-weight:700; text-transform:uppercase; margin-bottom:1.25rem;">
                            <i class="fas fa-paper-plane"></i> Form Nhận Báo Giá B2B Nhanh
                        </span>
                        <h2 class="b2b-cta-title" style="font-size:2.25rem; color:#0F233D !important; margin-bottom:1.15rem; line-height:1.25; font-weight:800;">
                            GỬI YÊU CẦU TÌM NGUỒN HÀNG & BÁO GIÁ B2B
                        </h2>
                        <p class="b2b-cta-desc" style="color:#475569 !important; font-size:1.025rem; line-height:1.7; margin-bottom:2rem;">
                            Chuyên viên kinh doanh B2B của TGT TIMEX sẽ liên hệ lại báo giá chi tiết, gửi mẫu sản phẩm kiểm định & phương án vận chuyển trong vòng <strong style="color:#0F233D;">15 phút</strong>.
                        </p>
                        
                        <div class="b2b-cta-contacts" style="display:flex; flex-direction:column; gap:1rem;">
                            <div class="b2b-contact-item" style="display:flex; align-items:center; gap:1rem; background:#F8FAFC; border:1px solid #E2E8F0; padding:1.1rem 1.25rem; border-radius:12px;">
                                <div class="b2b-contact-icon" style="width:46px; height:46px; border-radius:10px; background:#ECFDF5; color:#059669; display:flex; align-items:center; justify-content:center; font-size:1.2rem; flex-shrink:0; border:1px solid rgba(5,150,105,0.2);">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="b2b-contact-text">
                                    <div class="b2b-contact-label" style="font-size:0.8rem; color:#64748B; font-weight:700; text-transform:uppercase; letter-spacing:0.02em;">Đường dây nóng Tư Vấn Nguồn Hàng:</div>
                                    <div class="b2b-contact-value" style="font-size:1.05rem; color:#0F233D; font-weight:700; margin-top:2px;">0329575866 / 0921575866</div>
                                </div>
                            </div>
                            <div class="b2b-contact-item" style="display:flex; align-items:center; gap:1rem; background:#F8FAFC; border:1px solid #E2E8F0; padding:1.1rem 1.25rem; border-radius:12px;">
                                <div class="b2b-contact-icon" style="width:46px; height:46px; border-radius:10px; background:#ECFDF5; color:#059669; display:flex; align-items:center; justify-content:center; font-size:1.2rem; flex-shrink:0; border:1px solid rgba(5,150,105,0.2);">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="b2b-contact-text">
                                    <div class="b2b-contact-label" style="font-size:0.8rem; color:#64748B; font-weight:700; text-transform:uppercase; letter-spacing:0.02em;">Thư điện tử (Email) nhận báo giá:</div>
                                    <div class="b2b-contact-value" style="font-size:1.05rem; color:#0F233D; font-weight:700; margin-top:2px;">info@tgt.com.vn</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- UPGRADED FORM WITH B2B SMART FIELDS -->
                    <div class="rfq-box" style="background:#F8FAFC; border:1px solid #E2E8F0; border-radius:16px; padding:2.25rem; box-shadow:0 4px 15px rgba(0,0,0,0.03);">
                        <span class="badge badge-orange mb-2" style="background:#FEF3C7; color:#D97706; border:1px solid rgba(217,119,6,0.25); font-size:0.775rem; font-weight:700; padding:0.35rem 0.75rem; border-radius:20px; text-transform:uppercase; display:inline-block; margin-bottom:0.75rem;">Form B2B Chuyên Nghiệp</span>
                        <h3 class="rfq-box-title" style="font-size:1.4rem; color:#0F233D !important; margin-bottom:1.35rem; font-weight:800;">NHẬN BÁO GIÁ & MẪU ĐỢT NÀY</h3>
                        
                        <form>
                            <div class="form-grid" style="display:grid; grid-template-columns:repeat(2, 1fr); gap:1.25rem;">
                                <div class="form-group" style="display:flex; flex-direction:column; gap:0.4rem;">
                                    <label style="font-size:0.8rem; font-weight:700; color:#0F233D; text-transform:uppercase;">HỌ & TÊN NGƯỜI LIÊN HỆ *</label>
                                    <input type="text" class="form-control" placeholder="Nguyễn Văn A" required style="background:#FFFFFF; border:1px solid #CBD5E1; border-radius:8px; height:46px; padding:0 1rem; color:#0F172A;">
                                </div>

                                <div class="form-group" style="display:flex; flex-direction:column; gap:0.4rem;">
                                    <label style="font-size:0.8rem; font-weight:700; color:#0F233D; text-transform:uppercase;">TÊN DOANH NGHIỆP / MÔ HÌNH *</label>
                                    <input type="text" class="form-control" placeholder="Công ty / Đại lý / Bếp ăn..." required style="background:#FFFFFF; border:1px solid #CBD5E1; border-radius:8px; height:46px; padding:0 1rem; color:#0F172A;">
                                </div>

                                <div class="form-group" style="display:flex; flex-direction:column; gap:0.4rem;">
                                    <label style="font-size:0.8rem; font-weight:700; color:#0F233D; text-transform:uppercase;">SỐ ĐIỆN THOẠI / ZALO *</label>
                                    <input type="tel" class="form-control" placeholder="09xxxxxxx" required style="background:#FFFFFF; border:1px solid #CBD5E1; border-radius:8px; height:46px; padding:0 1rem; color:#0F172A;">
                                </div>

                                <div class="form-group" style="display:flex; flex-direction:column; gap:0.4rem;">
                                    <label style="font-size:0.8rem; font-weight:700; color:#0F233D; text-transform:uppercase;">THƯ ĐIỆN TỬ (EMAIL) NHẬN BÁO GIÁ *</label>
                                    <input type="email" class="form-control" placeholder="email@domain.com" required style="background:#FFFFFF; border:1px solid #CBD5E1; border-radius:8px; height:46px; padding:0 1rem; color:#0F172A;">
                                </div>

                                <div class="form-group" style="display:flex; flex-direction:column; gap:0.4rem;">
                                    <label style="font-size:0.8rem; font-weight:700; color:#0F233D; text-transform:uppercase;">BẠN THUỘC MÔ HÌNH NÀO?</label>
                                    <select class="form-control" style="background:#FFFFFF; border:1px solid #CBD5E1; border-radius:8px; height:46px; padding:0 1rem; color:#0F172A;">
                                        <option value="nhamay">Nhà máy chế biến</option>
                                        <option value="daily">Chợ đầu mối / Đại lý sỉ</option>
                                        <option value="horeca">Nhà hàng, Khách sạn & Ẩm thực (HORECA)</option>
                                        <option value="bepan">Bếp ăn công nghiệp</option>
                                        <option value="sieuthi">Siêu thị / Bán lẻ</option>
                                        <option value="xnk">Doanh nghiệp XNK</option>
                                        <option value="khac">Khác</option>
                                    </select>
                                </div>

                                <div class="form-group" style="display:flex; flex-direction:column; gap:0.4rem;">
                                    <label style="font-size:0.8rem; font-weight:700; color:#0F233D; text-transform:uppercase;">THỜI GIAN CẦN HÀNG?</label>
                                    <select class="form-control" style="background:#FFFFFF; border:1px solid #CBD5E1; border-radius:8px; height:46px; padding:0 1rem; color:#0F172A;">
                                        <option value="ngay">Ngay lập tức (1-3 ngày)</option>
                                        <option value="tuan">Trong vòng 1-7 ngày</option>
                                        <option value="thang">Trong 7-30 ngày</option>
                                        <option value="daihan">Hợp đồng giao định kỳ dài hạn</option>
                                    </select>
                                </div>

                                <div class="form-group full-width" style="grid-column: span 2; display:flex; flex-direction:column; gap:0.4rem;">
                                    <label style="font-size:0.8rem; font-weight:700; color:#0F233D; text-transform:uppercase;">QUY CÁCH NÔNG SẢN & SẢN LƯỢNG CẦN (TẤN/CONTAINER)</label>
                                    <textarea class="form-control" placeholder="Ví dụ: Cần 20 Tấn khoai tây Hà Lan size 55-65mm, giao Hà Nội tháng 9..." style="background:#FFFFFF; border:1px solid #CBD5E1; border-radius:8px; min-height:85px; padding:0.75rem 1rem; color:#0F172A;"></textarea>
                                </div>
                            </div>

                            <div style="margin-top:1.35rem;">
                                <button type="submit" class="btn btn-primary btn-lg" style="width:100%; height:50px; background:linear-gradient(135deg, #059669 0%, #047857 100%); color:#FFFFFF; border:none; border-radius:8px; font-weight:700; font-size:1rem; cursor:pointer; display:flex; align-items:center; justify-content:center; gap:0.5rem; box-shadow:0 4px 14px rgba(5,150,105,0.3);">
                                    <i class="fas fa-paper-plane"></i> Gửi Yêu Cầu Báo Giá B2B
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
