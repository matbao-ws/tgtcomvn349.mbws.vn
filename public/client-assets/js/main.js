/* ==========================================================================
   TGT TIMEX - B2B Import & Export Trade JS Architecture
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {
    initHeaderScroll();
    initMobileMenu();
    initBackToTop();
    initProductFilter();
    initProductModal();
    initRfqModal();
    initStatsCounter();
    initFormHandlers();
    initJobModals();
});

/* 1. Header Sticky Effect */
function initHeaderScroll() {
    const header = document.querySelector('.header-nav');
    if (!header) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 30) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
}

/* 2. Mobile Drawer Navigation */
function initMobileMenu() {
    const toggleBtn = document.querySelector('.mobile-toggle');
    const navMenu = document.querySelector('.nav-menu');
    if (!toggleBtn || !navMenu) return;

    toggleBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        const isOpen = navMenu.classList.contains('active');
        
        if (isOpen) {
            navMenu.classList.remove('active');
            document.body.classList.remove('menu-open');
            toggleBtn.innerHTML = '<i class="fas fa-bars"></i>';
        } else {
            navMenu.classList.add('active');
            document.body.classList.add('menu-open');
            toggleBtn.innerHTML = '<i class="fas fa-xmark"></i>';
        }
    });

    // Close on link click
    navMenu.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            navMenu.classList.remove('active');
            document.body.classList.remove('menu-open');
            toggleBtn.innerHTML = '<i class="fas fa-bars"></i>';
        });
    });

    // Close on click outside drawer
    document.addEventListener('click', (e) => {
        if (navMenu.classList.contains('active') && !navMenu.contains(e.target) && !toggleBtn.contains(e.target)) {
            navMenu.classList.remove('active');
            document.body.classList.remove('menu-open');
            toggleBtn.innerHTML = '<i class="fas fa-bars"></i>';
        }
    });
}

/* 3. Back to Top Button Logic */
function initBackToTop() {
    const backToTopBtn = document.getElementById('backToTopBtn');
    if (!backToTopBtn) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 280) {
            backToTopBtn.classList.add('show');
        } else {
            backToTopBtn.classList.remove('show');
        }
    });

    backToTopBtn.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

/* 4. Product Filtering System */
function initProductFilter() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('.product-card');

    if (!filterBtns.length || !productCards.length) return;

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filterValue = btn.getAttribute('data-filter');

            productCards.forEach(card => {
                const category = card.getAttribute('data-category');
                if (filterValue === 'all' || category === filterValue) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
}

/* 5. Product Quick View Modal & B2B Data Sheet */
const productDatabase = {
    'potato-fresh': {
        title: 'Khoai tây tươi Hà Lan / Trung Quốc / Đà Lạt (Tiêu Chuẩn Kỹ Thuật)',
        category: 'Nông sản tươi',
        origin: 'Hà Lan / Trung Quốc / Việt Nam',
        desc: 'Khoai tây củ to, vỏ mỏng vàng ươm, ruột đặc, độ khô tiêu chuẩn cao (≥ 20%). Chuyên cung ứng số lượng lớn theo container lạnh cho nhà máy chế biến thực phẩm & khoai tây sấy, bếp ăn công nghiệp, chợ đầu mối & chuỗi siêu thị.',
        specs: [
            { label: 'Quy cách kích cỡ', val: '45–55mm / 55–65mm / 65–75mm' },
            { label: 'Mục đích sử dụng', val: 'Nhà máy chế biến, Nhà hàng Khách sạn, Bán lẻ' },
            { label: 'Tỷ lệ củ lỗi / dập', val: '≤ 0.5% (Kiểm định LAS-NN)' },
            { label: 'Độ khô tiêu chuẩn', val: '≥ 20%' },
            { label: 'Nhiệt độ bảo quản', val: '4°C - 8°C (Chuỗi kho lạnh 24/7)' },
            { label: 'Quy cách đóng gói', val: 'Bao lưới 10kg, 20kg hoặc Bao Jumbo 1 Tấn' },
            { label: 'Đặt hàng tối thiểu', val: '5 Tấn (Nội địa) / 1 Container 40ft (XNK)' },
            { label: 'Năng lực cung ứng', val: '5,000 Tấn / Tháng' },
            { label: 'Chứng từ kèm theo', val: 'Phytosanitary, VietGAP, CQ, Kiểm nghiệm' }
        ],
        img: '/client-assets/images/fresh_produce.png'
    },
    'onion-fresh': {
        title: 'Hành tây vàng & đỏ nhập khẩu thương hạng',
        category: 'Nông sản tươi',
        origin: 'Hà Lan / Ấn Độ / Việt Nam',
        desc: 'Hành tây vỏ khô mỏng, củ chắc đét, không dập thối, độ cay nồng chuẩn. Cung ứng hợp đồng định kỳ cho các nhà máy gia vị, bếp ăn công nghiệp & đại lý sỉ.',
        specs: [
            { label: 'Đường kính củ', val: 'Size 6cm – 9cm' },
            { label: 'Độ ẩm vỏ', val: '≤ 12% (Vỏ khô giòn)' },
            { label: 'Đóng gói', val: 'Bao túi lưới 10kg / 20kg / 25kg' },
            { label: 'Bảo quản', val: '0°C – 4°C, Độ ẩm 65%' },
            { label: 'Đặt hàng tối thiểu', val: '3 Tấn / 1 Container' },
            { label: 'Năng lực cung ứng', val: '3,000 Tấn / Tháng' },
            { label: 'Chứng từ', val: 'Phytosanitary, Hóa đơn VAT, CO' }
        ],
        img: '/client-assets/images/fresh_produce.png'
    },
    'garlic-fresh': {
        title: 'Tỏi trắng & Gừng già Trung Quốc / Myanmar / Việt Nam',
        category: 'Nông sản tươi',
        origin: 'Trung Quốc / Myanmar / Việt Nam',
        desc: 'Tỏi tép to đều, tép mẩy đanh, gừng già cay nồng, nhập khẩu chính ngạch từ Trung Quốc, Myanmar & nguồn hàng chất lượng tại Việt Nam. Cung ứng sỉ theo container cho nhà máy chế biến gia vị, bếp ăn & chợ đầu mối toàn quốc.',
        specs: [
            { label: 'Kích cỡ tép tỏi', val: '4.5cm – 6.0cm' },
            { label: 'Đóng gói', val: 'Bao lưới 10kg, Thùng 10kg, Túi lưới 1kg' },
            { label: 'Điều kiện bảo quản', val: '-1°C – 1°C kho lạnh khô' },
            { label: 'Đặt hàng tối thiểu', val: '2 Tấn' },
            { label: 'Năng lực cung ứng', val: '2,000 Tấn / Tháng' },
            { label: 'Hóa đơn & Chứng từ', val: 'Hóa đơn VAT đầy đủ, Phytosanitary' }
        ],
        img: '/client-assets/images/fresh_produce.png'
    },
    'cantaloupe-fruit': {
        title: 'Dưa vàng Hoàng Kim VietGAP & Trái cây theo mùa',
        category: 'Nông sản tươi',
        origin: 'Nông trại TGT / Bình Thuận / Nhập khẩu',
        desc: 'Dưa vàng vỏ lưới nổi đẹp mắt, thịt giòn ngọt rụm, độ ngọt Brix > 13°. Ngoài ra TGT cung cấp táo, lê, nho & trái cây nhập khẩu theo mùa phục vụ chuỗi siêu thị, nhà hàng cao cấp và xuất khẩu.',
        specs: [
            { label: 'Trọng lượng quả', val: '1.2kg – 2.2kg / quả' },
            { label: 'Độ ngọt (Brix)', val: '≥ 13° Brix' },
            { label: 'Đóng gói', val: 'Thùng carton 10kg có mút xốp định hình' },
            { label: 'Chứng nhận', val: 'VietGAP, GlobalGAP, Truy xuất QR' }
        ],
        img: '/client-assets/images/fresh_fruits.png'
    },
    'sesame-seeds': {
        title: 'Vừng đen, Vừng trắng & Vừng vàng nguyên chất B2B',
        category: 'Nông sản khô',
        origin: 'Myanmar / Ấn Độ / Việt Nam',
        desc: 'Hạt vừng đều màu, mẩy đanh, hàm lượng dầu cao, được làm sạch tạp chất và khử khuẩn theo tiêu chuẩn an toàn thực phẩm. Cung cấp nguyên liệu cho nhà máy dầu ăn, bánh kẹo, gia vị & xuất khẩu.',
        specs: [
            { label: 'Chủng loại', val: 'Vừng đen, vừng trắng, vừng vàng' },
            { label: 'Độ tinh khiết', val: '≥ 99.0% (Lọc sạch cát bụi)' },
            { label: 'Độ ẩm', val: '≤ 8.0%' },
            { label: 'Tạp chất', val: '≤ 0.5%' },
            { label: 'Hàm lượng dầu', val: '≥ 48 - 52%' },
            { label: 'Quy cách đóng gói', val: 'Bao PP / Kraft 25kg, 50kg' },
            { label: 'Đặt hàng tối thiểu', val: '1 Tấn' },
            { label: 'Năng lực cung ứng', val: '1,000 Tấn / Tháng' }
        ],
        img: '/client-assets/images/dried_produce.png'
    },
    'mung-beans': {
        title: 'Đậu xanh nguyên hạt còn vỏ / Tách đôi bỏ vỏ / Tách đôi nguyên vỏ',
        category: 'Nông sản khô',
        origin: 'Myanmar / Việt Nam',
        desc: 'Đậu xanh hạt mẩy tròn, không mọt, không nấm mốc, màu sắc tươi sáng. Phân loại theo 3 quy cách: Đậu xanh nguyên hạt có vỏ, Đậu xanh tách đôi bỏ vỏ (xát vỏ làm nhân bánh, chè) và Đậu xanh tách đôi còn vỏ.',
        specs: [
            { label: 'Quy cách phân loại', val: 'Nguyên hạt có vỏ / Tách vỏ / Tách đôi còn vỏ' },
            { label: 'Độ ẩm tiêu chuẩn', val: '≤ 12.5%' },
            { label: 'Tỷ lệ hạt lép / sâu', val: '≤ 0.5%' },
            { label: 'Tạp chất', val: '≤ 0.2%' },
            { label: 'Mục đích sử dụng', val: 'Xưởng bánh kẹo, làm giá đỗ, bột dinh dưỡng, bếp ăn' },
            { label: 'Quy cách đóng gói', val: 'Bao PP dệt 25kg, 50kg có lót PE chống ẩm' },
            { label: 'Đặt hàng tối thiểu', val: '2 Tấn' },
            { label: 'Năng lực cung ứng', val: '1,500 Tấn / Tháng' }
        ],
        img: '/client-assets/images/dried_produce.png'
    },
    'soybeans': {
        title: 'Đậu tương (Đậu nành hạt chất lượng cao)',
        category: 'Nông sản khô',
        origin: 'Việt Nam / Nhập khẩu',
        desc: 'Đậu tương hạt vàng sáng, đồng đều, hàm lượng protein và chất béo tự nhiên cao. Chuyên cung cấp sỉ cho các nhà máy sữa hạt, sản xuất đậu phụ, thực phẩm chay và chế biến thức ăn chăn nuôi.',
        specs: [
            { label: 'Hàm lượng Protein', val: '≥ 36.0% - 38.0%' },
            { label: 'Hàm lượng dầu', val: '≥ 18.0%' },
            { label: 'Độ ẩm', val: '≤ 13.0%' },
            { label: 'Tỷ lệ hạt vỡ / hỏng', val: '≤ 2.0%' },
            { label: 'Đóng gói', val: 'Bao 25kg, 50kg hoặc Bao Jumbo 1 Tấn' },
            { label: 'Đặt hàng tối thiểu', val: '3 Tấn / 1 Container' },
            { label: 'Năng lực cung ứng', val: '2,000 Tấn / Tháng' }
        ],
        img: '/client-assets/images/dried_produce.png'
    },
    'dried-mushrooms': {
        title: 'Mộc nhĩ & Nấm hương khô chọn lọc',
        category: 'Nông sản khô',
        origin: 'Việt Nam / Nhập khẩu',
        desc: 'Mộc nhĩ cánh dày nở giòn sần sật, nấm hương cánh tròn đều, thơm nồng đặc trưng, sấy khô tiệt trùng tiêu chuẩn xuất khẩu. Cung cấp cho chuỗi nhà hàng, bếp ăn công nghiệp và xưởng chế biến nem, chả, giò.',
        specs: [
            { label: 'Chủng loại', val: 'Mộc nhĩ đen cánh dày / Nấm hương khô chọn lọc' },
            { label: 'Độ ẩm', val: '≤ 12.0%' },
            { label: 'Quy cách', val: 'Cắt chân sạch sẽ, không vụn nát, không chất bảo quản' },
            { label: 'Đóng gói', val: 'Thùng carton 10kg, 20kg hoặc túi hút chân không' },
            { label: 'Hạn dùng', val: '24 tháng' }
        ],
        img: '/client-assets/images/dried_produce.png'
    },
    'refined-sugar': {
        title: 'Đường tinh luyện thương mại B2B',
        category: 'Nông sản khô',
        origin: 'Việt Nam / Nhập khẩu',
        desc: 'Đường cát trắng tinh luyện tiêu chuẩn công nghiệp, độ tinh khiết Pol ≥ 99.8%, hạt mịn tan nhanh. Cung ứng sỉ số lượng lớn cho nhà máy chế biến thực phẩm, nước giải khát, bánh kẹo và gia vị.',
        specs: [
            { label: 'Độ Pol (Tinh khiết)', val: '≥ 99.80°Z' },
            { label: 'Độ ẩm', val: '≤ 0.05%' },
            { label: 'Hàm lượng tro', val: '≤ 0.03%' },
            { label: 'Màu sắc', val: 'Trắng tinh khiết (≤ 30 ICUMSA)' },
            { label: 'Đóng gói', val: 'Bao PP/PE 50kg có tem nhãn ATTP' },
            { label: 'Đặt hàng tối thiểu', val: '5 Tấn' }
        ],
        img: '/client-assets/images/dried_produce.png'
    },
    'marquise-1010': {
        title: 'Khoai Tây Bỉ Marquise Cọng 10/10 (Túi 1kg & Thùng 10kg)',
        category: 'Nông sản chế biến',
        origin: 'Vương quốc Bỉ (Marquise - Clarebout)',
        desc: 'Khoai tây đông lạnh nhập khẩu trực tiếp từ Bỉ thương hiệu Marquise Gastro (thuộc Clarebout). Cọng lớn 10x10mm đầy đặn, giàu tinh bột, giữ nóng và giòn lâu, thơm bùi chuẩn vị châu Âu.',
        specs: [
            { label: 'Xuất xứ', val: 'Vương quốc Bỉ (Clarebout Potatoes)' },
            { label: 'Kích thước cọng', val: '10 x 10 mm (Cắt thẳng cọng dày)' },
            { label: 'Quy cách đóng gói', val: 'Túi 1kg / Thùng 10 túi (10kg)' },
            { label: 'Giá tham khảo', val: '49.000 đ / Túi 1kg (Sỉ: Báo giá theo thùng/tấn)' },
            { label: 'Nhiệt độ bảo quản', val: '≤ -18°C (Hạn dùng 24 tháng)' },
            { label: 'Hướng dẫn chiên', val: 'Chiên ngập dầu 175°C trong 3-5 phút (không cần rã đông)' }
        ],
        img: '/client-assets/images/marquise_10_10.jpg'
    },
    'marquise-77': {
        title: 'Khoai Tây Chiên Bỉ Marquise Cọng 7/7 (Túi 1kg & Thùng 10kg)',
        category: 'Nông sản chế biến',
        origin: 'Vương quốc Bỉ (Marquise - Clarebout)',
        desc: 'Khoai tây chiên đông lạnh nhập khẩu Bỉ sợi mỏng Shoestring 7x7mm. Chiên vàng ươm giòn rụm, bùi ngậy tự nhiên, ít ngấm dầu, rất được chuỗi nhà hàng fastfood & cafe ưa chuộng.',
        specs: [
            { label: 'Xuất xứ', val: 'Vương quốc Bỉ (Clarebout Potatoes)' },
            { label: 'Kích thước cọng', val: '7 x 7 mm (Shoestring)' },
            { label: 'Quy cách đóng gói', val: 'Túi 1kg / Thùng 10 túi (10kg)' },
            { label: 'Giá tham khảo', val: '49.000 đ / Túi 1kg (Sỉ: Báo giá theo thùng/tấn)' },
            { label: 'Nhiệt độ bảo quản', val: '≤ -18°C (Hạn dùng 24 tháng)' },
            { label: 'Hướng dẫn chiên', val: 'Chiên trực tiếp từ đông lạnh 175°C trong 3-4 phút' }
        ],
        img: '/client-assets/images/marquise_7_7.jpg'
    },
    'french-fries': {
        title: 'Khoai tây chiên đông lạnh cắt thẳng & cắt sóng',
        category: 'Nông sản chế biến',
        origin: 'Bỉ / Hà Lan',
        desc: 'Khoai tây chiên đông lạnh nhập khẩu chuẩn Châu Âu (Bỉ, Hà Lan), sợi giòn lâu, vàng ruộm, không ngấm dầu. Chủ lực cho các nhà hàng, khách sạn, chuỗi đồ ăn nhanh & dịch vụ ẩm thực.',
        specs: [
            { label: 'Quy cách cắt', val: '7mm / 9mm / 10mm (Thẳng & Sóng)' },
            { label: 'Quy cách đóng gói', val: 'Túi 2.5kg x 4 túi/Thùng (10kg)' },
            { label: 'Nhiệt độ bảo quản', val: '-18°C đông lạnh sâu' },
            { label: 'Hạn sử dụng', val: '24 tháng kể từ ngày sản xuất' },
            { label: 'Đặt hàng tối thiểu', val: '50 Thùng (Giao xe lạnh tận nơi)' }
        ],
        img: '/client-assets/images/processed_potatoes.png'
    },
    'potato-wedges': {
        title: 'Khoai tây múi cau (Potato Wedges) & Khoai tây nghiền',
        category: 'Nông sản chế biến',
        origin: 'Bỉ / Hà Lan',
        desc: 'Khoai tây múi cau tẩm gia vị / không gia vị và khoai tây nghiền nhập khẩu, cấp đông IQF giữ trọn hương vị tươi ngon. Chuyên dùng cho chuỗi nhà hàng Steakhouse, BBQ, Fastfood.',
        specs: [
            { label: 'Quy cách', val: 'Khoai tây cắt múi cau có vỏ / Khoai tây nghiền' },
            { label: 'Đóng gói', val: 'Túi 2.5kg x 4 túi/Thùng (10kg)' },
            { label: 'Bảo quản', val: '-18°C đông lạnh' },
            { label: 'Chứng nhận', val: 'HACCP, ISO, BRC Food' }
        ],
        img: '/client-assets/images/processed_potatoes.png'
    },
    'vn-export-produce': {
        title: 'Nông sản Việt Nam xuất khẩu (Tỏi, Gừng, Dưa vàng, Nông sản khô)',
        category: 'Nông sản xuất khẩu',
        origin: 'Vùng trồng Việt Nam (VietGAP / GlobalGAP)',
        desc: 'TGT TIMEX đóng gói và xuất khẩu nông sản Việt Nam đạt chuẩn sang các thị trường quốc tế: Tỏi củ, gừng tươi củ già, dưa lưới VietGAP, các loại đậu hạt & vừng mè chọn lọc.',
        specs: [
            { label: 'Thị trường mục tiêu', val: 'Châu Á, Trung Đông, Châu Âu, Mỹ' },
            { label: 'Chứng từ xuất khẩu', val: 'Phytosanitary, CO Form E/AK/AJ/EUR1, Test Report' },
            { label: 'Đóng gói xuất khẩu', val: 'Thùng carton in ấn theo thương hiệu / Bao lưới trên pallet' },
            { label: 'Điều kiện giao hàng', val: 'FOB Hải Phòng/Cát Lái, CIF cảng đến' }
        ],
        img: '/client-assets/images/fresh_fruits.png'
    },
    'sourcing-b2b': {
        title: 'Hàng hóa XNK & Dịch vụ tìm nguồn theo yêu cầu',
        category: 'Hàng hóa xuất nhập khẩu',
        origin: 'Toàn Cầu (Bỉ, Hà Lan, Ấn Độ, Trung Quốc, Myanmar & Quốc tế)',
        desc: 'TGT TIMEX nhận săn tìm, thẩm định vùng trồng & nhập khẩu/xuất khẩu nông sản trực tiếp từ Bỉ, Hà Lan, Ấn Độ, Trung Quốc, Myanmar & các thị trường quốc tế theo đúng quy cách, tiêu chuẩn kỹ thuật & tiến độ của doanh nghiệp.',
        specs: [
            { label: 'Phạm vi tìm kiếm', val: 'Nông sản tươi, nông sản khô, củ quả, đông lạnh' },
            { label: 'Tiêu chuẩn đáp ứng', val: 'HACCP, ISO 22000, GlobalGAP, Organic' },
            { label: 'Quy trình hợp tác', val: 'Báo giá → Gửi mẫu → Kiểm định → Hợp đồng' },
            { label: 'Điều kiện giao nhận', val: 'FOB, CIF, CFR, DDP tận kho khách' }
        ],
        img: '/client-assets/images/cold_storage_warehouse.png'
    }
};

function initProductModal() {
    const modal = document.getElementById('productDetailModal');
    if (!modal) return;

    const closeBtn = modal.querySelector('.modal-close');
    const quickViewBtns = document.querySelectorAll('.btn-quickview');

    quickViewBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const card = btn.closest('.product-card');
            const title = btn.getAttribute('data-product-name') || card?.querySelector('.product-title')?.innerText || '';
            const category = btn.getAttribute('data-category-name') || card?.querySelector('.product-category-tag')?.innerText || 'Nông Sản B2B';
            const origin = btn.getAttribute('data-product-origin') || card?.querySelector('.product-origin-badge')?.innerText || 'Nhập Khẩu Chính Ngạch';
            const desc = btn.getAttribute('data-product-desc') || card?.querySelector('.product-desc')?.innerText || '';
            const img = btn.getAttribute('data-product-img') || card?.querySelector('img')?.src || '/client-assets/images/fresh_produce.png';
            const specsRaw = btn.getAttribute('data-product-specs') || '';

            const prodKey = btn.getAttribute('data-product');
            const legacyData = prodKey && typeof productDatabase !== 'undefined' ? productDatabase[prodKey] : null;

            if (title || legacyData) {
                const finalTitle = title || legacyData.title;
                document.getElementById('modalProdTitle').innerText = finalTitle;
                document.getElementById('modalProdCategory').innerText = category || legacyData.category;
                document.getElementById('modalProdOrigin').innerText = origin || legacyData.origin;
                document.getElementById('modalProdDesc').innerText = desc || legacyData.desc;
                document.getElementById('modalProdImg').src = img || legacyData.img;

                // Sync product name to modal RFQ trigger button
                const modalRfqBtn = modal.querySelector('.trigger-rfq-modal');
                if (modalRfqBtn) {
                    modalRfqBtn.setAttribute('data-product-name', finalTitle);
                }

                const specsContainer = document.getElementById('modalProdSpecs');
                specsContainer.innerHTML = '';

                // Extract specs from card items or raw string or legacy database
                const cardSpecs = card?.querySelectorAll('.product-spec-item');
                if (cardSpecs && cardSpecs.length > 0) {
                    cardSpecs.forEach(spec => {
                        const label = spec.querySelector('label')?.innerText || '';
                        const val = spec.querySelector('span')?.innerText || spec.innerText;
                        specsContainer.innerHTML += `
                            <div class="product-spec-item" style="border-bottom:1px dashed #E2E8F0; padding:0.4rem 0;">
                                <label style="color:#64748B; font-weight:500;">${label}</label>
                                <span style="color:#0F233D; font-weight:700;">${val}</span>
                            </div>
                        `;
                    });
                } else if (specsRaw) {
                    specsRaw.split('\n').forEach(line => {
                        line = line.trim();
                        if (!line) return;
                        let label = 'Thông số:';
                        let val = line;
                        if (line.includes(':')) {
                            const parts = line.split(':');
                            label = parts[0].trim() + ':';
                            val = parts.slice(1).join(':').trim();
                        }
                        specsContainer.innerHTML += `
                            <div class="product-spec-item" style="border-bottom:1px dashed #E2E8F0; padding:0.4rem 0;">
                                <label style="color:#64748B; font-weight:500;">${label}</label>
                                <span style="color:#0F233D; font-weight:700;">${val}</span>
                            </div>
                        `;
                    });
                } else if (legacyData && legacyData.specs) {
                    legacyData.specs.forEach(spec => {
                        specsContainer.innerHTML += `
                            <div class="product-spec-item" style="border-bottom:1px dashed #E2E8F0; padding:0.4rem 0;">
                                <label style="color:#64748B; font-weight:500;">${spec.label}:</label>
                                <span style="color:#0F233D; font-weight:700;">${spec.val}</span>
                            </div>
                        `;
                    });
                }

                modal.classList.add('active');
            }
        });
    });


    if (closeBtn) {
        closeBtn.addEventListener('click', () => {
            modal.classList.remove('active');
        });
    }

    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.remove('active');
        }
    });
}

/* 6. RFQ Quote Modal System with Smart B2B Segmentation */
function initRfqModal() {
    const rfqModal = document.getElementById('rfqModal');
    if (!rfqModal) return;

    const rfqBtns = document.querySelectorAll('.trigger-rfq-modal');
    const closeBtn = rfqModal.querySelector('.modal-close');

    rfqBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const prodName = btn.getAttribute('data-product-name');
            if (prodName) {
                const noteTextarea = rfqModal.querySelector('textarea');
                if (noteTextarea) {
                    noteTextarea.value = `Yêu cầu báo giá cho sản phẩm: ${prodName}. `;
                }
            }
            rfqModal.classList.add('active');
        });
    });

    if (closeBtn) {
        closeBtn.addEventListener('click', () => {
            rfqModal.classList.remove('active');
        });
    }

    rfqModal.addEventListener('click', (e) => {
        if (e.target === rfqModal) {
            rfqModal.classList.remove('active');
        }
    });
}

/* 7. Animated Stats Counter */
function initStatsCounter() {
    const statNumbers = document.querySelectorAll('.stat-number');
    if (!statNumbers.length) return;

    let animated = false;

    const checkScroll = () => {
        const statsBanner = document.querySelector('.stats-banner');
        if (!statsBanner) return;

        const rect = statsBanner.getBoundingClientRect();
        if (rect.top <= window.innerHeight && !animated) {
            animated = true;
            statNumbers.forEach(stat => {
                const target = parseInt(stat.getAttribute('data-target') || '0', 10);
                const suffix = stat.getAttribute('data-suffix') || '';
                let current = 0;
                const increment = Math.ceil(target / 40);

                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    stat.innerHTML = `${current.toLocaleString()}${suffix}`;
                }, 40);
            });
        }
    };

    window.addEventListener('scroll', checkScroll);
    checkScroll();
}

/* 8. Form Handlers & Smart Lead Notification */
function initFormHandlers() {
    const forms = document.querySelectorAll('form:not([data-no-ajax])');
    forms.forEach(form => {
        form.addEventListener('submit', async (e) => {
            e.preventDefault();

            let valid = true;
            const requiredInputs = form.querySelectorAll('[required]');
            requiredInputs.forEach(input => {
                if (!input.value.trim()) {
                    valid = false;
                    input.style.borderColor = '#EF4444';
                } else {
                    input.style.borderColor = '#CBD5E1';
                }
            });

            if (!valid) {
                showToast('Vui lòng điền đầy đủ các thông tin bắt buộc!', 'error');
                return;
            }

            const submitBtn = form.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn ? submitBtn.innerHTML : '';
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Đang gửi yêu cầu...';
            }

            try {
                // Collect form data
                const formData = new FormData(form);
                const data = {};
                formData.forEach((value, key) => {
                    data[key] = value;
                });

                // Auto-map fields if missing standard keys
                const name = data.name || form.querySelector('input[type="text"]')?.value || 'Khách hàng';
                const phone = data.phone || form.querySelector('input[type="tel"]')?.value || '';
                const email = data.email || form.querySelector('input[type="email"]')?.value || '';
                const message = data.message || form.querySelector('textarea')?.value || 'Yêu cầu tư vấn báo giá B2B';

                const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

                const response = await fetch('/api/public/contact', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken || ''
                    },
                    body: JSON.stringify({
                        name: name,
                        phone: phone,
                        email: email,
                        message: message,
                        ...data
                    })
                });

                const result = await response.json();

                if (response.ok && result.success) {
                    showToast(result.message || 'Gửi yêu cầu thành công! Chuyên viên TGT TIMEX sẽ liên hệ lại với Quý khách trong vòng 15 phút.');
                    form.reset();
                    
                    const rfqModal = document.getElementById('rfqModal');
                    const prodModal = document.getElementById('productDetailModal');
                    const jdModal = document.getElementById('jobDetailModal');
                    const applyModal = document.getElementById('jobApplyModal');
                    
                    if (rfqModal) rfqModal.classList.remove('active');
                    if (prodModal) prodModal.classList.remove('active');
                    if (jdModal) jdModal.classList.remove('active');
                    if (applyModal) applyModal.classList.remove('active');
                } else {
                    const msg = result.message || 'Không thể gửi yêu cầu lúc này. Vui lòng thử lại!';
                    showToast(msg, 'error');
                }
            } catch (err) {
                console.error('Submit error:', err);
                showToast('Gửi thông tin thành công! Chuyên viên TGT TIMEX sẽ liên hệ lại với Quý khách sớm nhất.');
                form.reset();
            } finally {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnText;
                }
            }
        });
    });
}


/* 9. RECRUITMENT SYSTEM & 4 DETAILED JOB MODALS */
const jobDatabase = {
    'purchasing-staff': {
        title: 'CHUYÊN VIÊN MUA HÀNG & TÌM NGUỒN NÔNG SẢN',
        dept: 'Phòng Mua Hàng & Xuất Nhập Khẩu',
        badge: 'Toàn Thời Gian',
        salary: '10 – 15 Triệu + Thưởng 10-20% Tiết Kiệm Giá + KPI (Thu nhập 15 – 25 Triệu+)',
        workLocation: 'C39-13 KĐT Geleximco, đường Lê Trọng Tấn, Phường Dương Nội, Thành phố Hà Nội, Việt Nam',
        workTime: '8:30 – 17:30, từ Thứ 2 đến Thứ 7',
        purpose: 'Tìm kiếm, đánh giá và đàm phán với các nhà cung cấp nông sản (khoai tây, hành tây, tỏi, gừng, trái cây...) trong nước & quốc tế, tối ưu giá vốn và đảm bảo nguồn hàng đạt chuẩn chất lượng.',
        duties: [
            'Tìm kiếm và phát triển mạng lưới nhà cung cấp nông sản uy tín (Bỉ, Hà Lan, Ấn Độ, Trung Quốc, Myanmar & các thị trường quốc tế).',
            'Khảo sát giá thị trường hàng ngày, so sánh báo giá, đàm phán hợp đồng thương mại & điều khoản thanh toán (FOB, CIF, CFR, DDP).',
            'Phối hợp kiểm định mẫu nông sản thực tế, kiểm soát hồ sơ kiểm dịch thực vật (Phytosanitary), CO/CQ và tiêu chuẩn kỹ thuật.',
            'Theo dõi tiến độ giao hàng, đối soát kho và giải quyết các khiếu nại phát sinh về chất lượng/hao hụt hàng hóa.',
            'Đề xuất chiến lược thu mua đón đầu mùa vụ và kế hoạch dự trữ kho lạnh tối ưu.'
        ],
        requirements: [
            'Tốt nghiệp Cao đẳng/Đại học chuyên ngành Kinh tế, Ngoại thương, Thương mại, Xuất nhập khẩu hoặc Nông nghiệp.',
            'Ưu tiên ứng viên có kinh nghiệm thu mua nông sản, thực phẩm tươi sống hoặc đàm phán quốc tế.',
            'Kỹ năng đàm phán, giao tiếp tốt; tiếng Anh hoặc tiếng Trung là lợi thế lớn.',
            'Trung thực, nhạy bén với giá cả thị trường, chịu được áp lực tiến độ mùa vụ.'
        ],
        benefits: [
            'Lương cứng: 10.000.000 – 15.000.000 VNĐ/tháng.',
            'Thưởng theo lợi nhuận đầu vào: 10 – 20% trên số tiền tiết kiệm được so với kế hoạch.',
            'Thưởng nhà cung cấp mới: 500.000 – 1.000.000 VNĐ/NCC phát sinh đơn/chiến lược.',
            'Thưởng KPI tháng: 2 – 10 triệu đồng/tháng theo mức độ hoàn thành chỉ tiêu.',
            'Đầy đủ chế độ BHXH, BHYT, phép năm, thưởng lễ tết và du lịch công ty hàng năm.'
        ]
    },
    'sales-executive': {
        title: 'NHÂN VIÊN KINH DOANH NÔNG SẢN B2B',
        dept: 'Phòng Kinh Doanh',
        badge: 'Toàn Thời Gian',
        salary: '7 – 15 Triệu + Hoa Hồng 10% Lợi Nhuận Gộp + Thưởng KH Mới (Thu nhập 15 – 30+ Triệu)',
        workLocation: 'C39-13 KĐT Geleximco, đường Lê Trọng Tấn, Phường Dương Nội, Thành phố Hà Nội, Việt Nam',
        workTime: '8:30 – 17:30, từ Thứ 2 đến Thứ 7',
        purpose: 'Khai thác, mở rộng thị trường và phát triển sản lượng bán sỉ nông sản (khoai tây tươi/đông lạnh, hành, tỏi, củ quả) cho các nhà máy chế biến, bếp ăn công nghiệp, chợ đầu mối, đại lý và chuỗi siêu thị/HORECA.',
        duties: [
            'Tìm kiếm, tiếp cận và tư vấn báo giá cho khách hàng doanh nghiệp, đại lý sỉ, nhà máy chế biến toàn quốc.',
            'Gửi mẫu test thực tế, đàm phán và chốt hợp đồng cung ứng định kỳ theo container / xe tải lạnh.',
            'Theo dõi tiến độ giao hàng, chăm sóc khách hàng và thúc đẩy tỷ lệ tái mua hàng định kỳ.',
            'Cập nhật thông tin thị trường hàng ngày (giá cả, chất lượng, đối thủ cạnh tranh) trong khu vực được phân công.',
            'Phối hợp với Kế toán theo dõi và đôn đốc thu hồi công nợ khách hàng an toàn.'
        ],
        requirements: [
            'Tốt nghiệp Trung cấp trở lên, đam mê kinh doanh và giao tiếp khách hàng B2B.',
            'Không yêu cầu kinh nghiệm sâu — ưu tiên ứng viên từng làm sales B2B, telesales hoặc thị trường thực phẩm, nông sản, F&B.',
            'Kỹ năng giao tiếp, đàm phán và thuyết phục tốt; có phương tiện cá nhân đi thị trường khi cần.',
            'Trung thực trong báo cáo số liệu, chủ động, chịu khó và có tinh thần đồng đội cao.'
        ],
        benefits: [
            'Lương cứng: 7.000.000 – 15.000.000 VNĐ/tháng (xét theo năng lực).',
            'Hoa hồng: 10% theo lợi nhuận gộp đơn hàng.',
            'Thưởng nóng khi phát triển được khách hàng doanh nghiệp / đại lý mới.',
            'Lộ trình Onboarding 7 ngày đào tạo chuyên sâu về kiến thức nông sản và kỹ năng chốt sales B2B.',
            'Cơ hội thăng tiến lên Trưởng phòng Kinh doanh hoặc Trưởng kênh phân phối mới.'
        ]
    },
    'sales-admin': {
        title: 'CHUYÊN VIÊN HỖ TRỢ KINH DOANH (SALES ADMIN)',
        dept: 'Phòng Kinh Doanh',
        badge: 'Toàn Thời Gian (Nữ 25-35 tuổi)',
        salary: '10 – 12 Triệu + Thưởng 2% Lợi Nhuận Gộp (Thu nhập 15 – 20 Triệu)',
        workLocation: 'C39-13 KĐT Geleximco, đường Lê Trọng Tấn, Phường Dương Nội, Thành phố Hà Nội, Việt Nam',
        workTime: '8:30 – 17:30, từ Thứ 2 đến Thứ 7',
        purpose: 'Quản trị hệ thống CRM, theo dõi pipeline bán hàng, hỗ trợ đội ngũ sales soạn báo giá/hợp đồng và quản lý quy trình đơn hàng chính xác, kịp thời.',
        duties: [
            'Quản lý dữ liệu CRM: tạo mới, cập nhật và phân loại khách hàng (Đại lý, Chợ đầu mối, Nhà máy, Bếp ăn, Siêu thị).',
            'Theo dõi Pipeline kinh doanh: Khảo sát → Báo giá → Gửi mẫu → Hợp đồng → Giao hàng → Tái mua; phát hiện và nhắc nhở khách hàng tồn đọng.',
            'Soạn thảo báo giá, hợp đồng đầu ra/đầu vào, đơn đặt hàng và biên bản giao nhận hàng hóa.',
            'Quản lý đơn hàng xuyên suốt từ xuất kho, điều phối vận tải đến thanh toán và cập nhật trạng thái đơn hàng.',
            'Thu thập và tổng hợp dữ liệu giá thị trường nông sản hàng ngày báo cáo Ban Giám đốc.',
            'Theo dõi doanh số theo nhân viên/mặt hàng và phối hợp theo dõi công nợ đến hạn.'
        ],
        requirements: [
            'Giới tính Nữ, độ tuổi từ 25 – 35. Tốt nghiệp Cao đẳng/Đại học các ngành QTKD, Kinh tế, Kế toán, Thương mại, Logistics...',
            'Bắt buộc thành thạo Word, Excel, Google Sheet. Ưu tiên có kinh nghiệm dùng phần mềm CRM, Canva, ChatGPT/AI.',
            'Cẩn thận, tỉ mỉ, tư duy logic, yêu thích làm việc với số liệu, chủ động và ham học hỏi.'
        ],
        benefits: [
            'Lương cứng: 10.000.000 – 12.000.000 VNĐ/tháng.',
            'Thưởng: 2% lợi nhuận gộp toàn phòng kinh doanh.',
            'Thu nhập mục tiêu: 15.000.000 – 20.000.000 VNĐ/tháng.',
            'Môi trường làm việc văn minh, đồng nghiệp thân thiện, đầy đủ BHXH và phúc lợi.'
        ]
    },
    'accountant': {
        title: 'NHÂN VIÊN KẾ TOÁN DOANH NGHIỆP XUẤT NHẬP KHẨU',
        dept: 'Phòng Kế Toán',
        badge: 'Toàn Thời Gian',
        salary: '8 – 12 Triệu + Thưởng 0.5% Lợi Nhuận Gộp + Thưởng Thành Tích (Thu nhập 12 – 18 Triệu)',
        workLocation: 'C39-13 KĐT Geleximco, đường Lê Trọng Tấn, Phường Dương Nội, Thành phố Hà Nội, Việt Nam',
        workTime: '8:30 – 17:30, từ Thứ 2 đến Thứ 7',
        purpose: 'Quản trị dòng tiền an toàn, ghi nhận và kiểm soát thu chi, công nợ khách hàng & nhà cung cấp, kiểm soát hóa đơn chứng từ thuế và hỗ trợ Ban Giám đốc bằng số liệu tài chính thực tế.',
        duties: [
            'Theo dõi, ghi nhận thu - chi, kiểm soát tồn quỹ tiền mặt và số dư tài khoản ngân hàng hàng ngày.',
            'Quản lý công nợ khách hàng (phối hợp Sales) và công nợ nhà cung cấp (phối hợp Thu mua), kiểm soát nợ quá hạn dưới 3%.',
            'Kiểm tra tính hợp lệ và lưu trữ đầy đủ hóa đơn VAT, chứng từ kế toán, tờ khai hải quan nhập/xuất.',
            'Kê khai thuế GTGT, thuế nhập khẩu và các nghĩa vụ thuế xuất nhập khẩu đúng quy định.',
            'Đối soát số liệu kho trung chuyển, tính toán giá vốn hàng bán chính xác theo từng lô hàng nông sản.',
            'Lập báo cáo tài chính, báo cáo dòng tiền và tổng hợp số liệu lợi nhuận gộp định kỳ cho Ban Giám đốc.'
        ],
        requirements: [
            'Tốt nghiệp Cao đẳng/Đại học chuyên ngành Kế toán, Tài chính, Kiểm toán.',
            'Ưu tiên có kinh nghiệm kế toán trong doanh nghiệp thương mại hoặc xuất nhập khẩu nông sản.',
            'Thành thạo Excel, phần mềm kế toán (MISA, Fast Accounting hoặc tương đương).',
            'Cẩn thận, tỉ mỉ, trung thực, nắm vững chuẩn mực kế toán và quy định thuế hiện hành.'
        ],
        benefits: [
            'Lương cứng: 8.000.000 – 12.000.000 VNĐ/tháng.',
            'Thưởng: 0.5% lợi nhuận gộp công ty + Thưởng thu hồi công nợ xuất sắc.',
            'Thu nhập mục tiêu: 12.000.000 – 18.000.000 VNĐ/tháng.',
            'Chế độ BHXH, BHYT, lương tháng 13 và thưởng lễ tết đầy đủ theo quy định.'
        ]
    }
};

function initJobModals() {
    const jdModal = document.getElementById('jobDetailModal');
    const applyModal = document.getElementById('jobApplyModal');
    
    // View JD Buttons
    const viewJdBtns = document.querySelectorAll('.btn-view-jd');
    viewJdBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const jobId = btn.getAttribute('data-job-id');
            const job = jobDatabase[jobId];
            if (job && jdModal) {
                document.getElementById('modalJdTitle').innerText = job.title;
                document.getElementById('modalJdDept').innerText = job.dept;
                document.getElementById('modalJdBadge').innerText = job.badge;
                document.getElementById('modalJdSalary').innerText = job.salary;
                document.getElementById('modalJdLocation').innerText = job.workLocation;
                document.getElementById('modalJdTime').innerText = job.workTime;
                document.getElementById('modalJdPurpose').innerText = job.purpose;

                // Duties list
                const dutiesContainer = document.getElementById('modalJdDuties');
                dutiesContainer.innerHTML = '';
                job.duties.forEach(item => {
                    dutiesContainer.innerHTML += `<li>${item}</li>`;
                });

                // Requirements list
                const reqContainer = document.getElementById('modalJdRequirements');
                reqContainer.innerHTML = '';
                job.requirements.forEach(item => {
                    reqContainer.innerHTML += `<li>${item}</li>`;
                });

                // Benefits list
                const benContainer = document.getElementById('modalJdBenefits');
                benContainer.innerHTML = '';
                job.benefits.forEach(item => {
                    benContainer.innerHTML += `<li>${item}</li>`;
                });

                // Set job-id on the Apply Button inside the modal
                const modalApplyBtn = jdModal.querySelector('.btn-apply-from-modal');
                if (modalApplyBtn) {
                    modalApplyBtn.setAttribute('data-job-id', jobId);
                    modalApplyBtn.setAttribute('data-job-title', job.title);
                }

                jdModal.classList.add('active');
            }
        });
    });

    // Apply Job Buttons
    const applyBtns = document.querySelectorAll('.btn-apply-job, .btn-apply-from-modal');
    applyBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const jobId = btn.getAttribute('data-job-id');
            const jobTitle = btn.getAttribute('data-job-title');

            if (jdModal) jdModal.classList.remove('active');

            if (applyModal) {
                const selectPos = applyModal.querySelector('#applyJobPosition');
                if (selectPos && jobId) {
                    selectPos.value = jobId;
                }
                const titleHeader = applyModal.querySelector('#applyModalTitle');
                if (titleHeader && jobTitle) {
                    titleHeader.innerText = `ỨNG TUYỂN: ${jobTitle}`;
                }
                applyModal.classList.add('active');
            }
        });
    });

    // Close Modals
    document.querySelectorAll('.modal-overlay').forEach(modal => {
        const closeBtn = modal.querySelector('.modal-close');
        if (closeBtn) {
            closeBtn.addEventListener('click', () => {
                modal.classList.remove('active');
            });
        }
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.remove('active');
            }
        });
    });
}

function showToast(message, type = 'success') {
    let toastContainer = document.querySelector('.toast-container');
    if (!toastContainer) {
        toastContainer = document.createElement('div');
        toastContainer.className = 'toast-container';
        toastContainer.style.cssText = `
            position: fixed;
            top: 24px;
            right: 24px;
            z-index: 3000;
            display: flex;
            flex-direction: column;
            gap: 10px;
        `;
        document.body.appendChild(toastContainer);
    }

    const toast = document.createElement('div');
    const bgColor = type === 'success' ? '#10B981' : '#EF4444';
    toast.style.cssText = `
        background-color: ${bgColor};
        color: white;
        padding: 14px 20px;
        border-radius: 8px;
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 0.9rem;
        font-weight: 600;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        display: flex;
        align-items: center;
        gap: 10px;
        min-width: 280px;
        max-width: 440px;
    `;

    toast.innerHTML = `
        <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'}"></i>
        <span>${message}</span>
    `;

    toastContainer.appendChild(toast);

    setTimeout(() => {
        toast.style.opacity = '0';
        toast.style.transform = 'translateX(50px)';
        toast.style.transition = 'all 0.3s ease';
        setTimeout(() => toast.remove(), 300);
    }, 4500);
}
