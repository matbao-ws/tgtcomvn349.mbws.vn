@extends('client.layouts.app')

@section('title', 'Danh Mục Nông Sản B2B - Khoai Tây, Hành Tây, Tỏi, Nông Sản Khô & Chế Biến | TGT TIMEX')
@section('meta_description', 'Đầy đủ thông tin sản phẩm, tiêu chuẩn kỹ thuật, quy cách đóng gói và hồ sơ kiểm định nông sản B2B.')

@section('content')
<!-- PAGE TITLE BANNER -->
    <section class="hero-section" style="padding:3.5rem 0;">
        <div class="hero-bg-overlay" style="opacity:0.6;"></div>
        <div class="container" style="position:relative; z-index:2; text-align:center;">
            <span class="badge badge-orange mb-2">Bảng Tiêu Chuẩn Kỹ Thuật Nông Sản</span>
            <h1 style="font-size:2.25rem; color:#0F233D; font-weight:700;">DANH MỤC NÔNG SẢN & THÔNG TIN CUNG ỨNG</h1>
            <p style="color:#475569; max-width:720px; margin:0.5rem auto 0 auto;">Đầy đủ thông tin về nông sản tươi, nông sản khô, nông sản chế biến, xuất khẩu & hàng hóa xuất nhập khẩu theo quy cách B2B.</p>
        </div>
    </section>


    <!-- PRODUCT CATALOG WITH DATA SHEETS -->
    <section class="section-padding bg-white">
        <div class="container">
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
@endsection
