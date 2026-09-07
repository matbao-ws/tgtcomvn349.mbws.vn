{{-- TOP ANNOUNCEMENT BAR --}}
<div class="top-bar">
    <div class="container">
        <div class="top-bar-info">
            <div class="top-bar-info-item">
                <i class="fas fa-location-dot"></i>
                <span>C39-13 KĐT Geleximco, Lê Trọng Tấn, Hà Nội</span>
            </div>
            <div class="top-bar-info-item">
                <i class="fas fa-phone-alt"></i>
                <span>Đường dây nóng/Zalo: 0329575866</span>
            </div>
        </div>
        <div class="top-bar-actions">
            @if(request()->routeIs('client.careers*'))
                <a href="#tuyen-dung-vi-tri" class="top-bar-rfq-link">
                    <i class="fas fa-user-plus"></i> Xem 4 Vị Trí Đang Tuyển
                </a>
            @else
                <a href="#" class="top-bar-rfq-link trigger-rfq-modal">
                    <i class="fas fa-file-invoice-dollar"></i> Nhận Báo Giá B2B
                </a>
            @endif
        </div>
    </div>
</div>
