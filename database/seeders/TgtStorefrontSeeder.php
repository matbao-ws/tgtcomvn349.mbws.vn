<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TgtStorefrontSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Categories
        $categoriesData = [
            [
                'slug' => 'nong-san-tuoi',
                'name' => ['vi' => 'Nông sản tươi', 'en' => 'Fresh Produce'],
                'description' => ['vi' => 'Khoai tây, hành tây, tỏi tươi nhập khẩu trực tiếp.', 'en' => 'Imported fresh potatoes, onions, and garlic.'],
                'sort_order' => 1,
            ],
            [
                'slug' => 'nong-san-kho',
                'name' => ['vi' => 'Nông sản khô', 'en' => 'Dried Produce'],
                'description' => ['vi' => 'Vừng đen, vừng trắng, đậu xanh, đậu tương chọn lọc.', 'en' => 'Sesame seeds, mung beans, and soybeans.'],
                'sort_order' => 2,
            ],
            [
                'slug' => 'nong-san-che-bien',
                'name' => ['vi' => 'Nông sản chế biến', 'en' => 'Processed Produce'],
                'description' => ['vi' => 'Khoai tây chiên đông lạnh Bỉ, Hà Lan cắt thẳng và cắt sóng.', 'en' => 'Frozen french fries from Belgium and the Netherlands.'],
                'sort_order' => 3,
            ],
            [
                'slug' => 'nong-san-xuat-khau',
                'name' => ['vi' => 'Nông sản xuất khẩu', 'en' => 'Export Produce'],
                'description' => ['vi' => 'Nông sản Việt Nam xuất khẩu đạt chuẩn VietGAP, GlobalGAP.', 'en' => 'Vietnamese agricultural products for export.'],
                'sort_order' => 4,
            ],
            [
                'slug' => 'hang-hoa-xnk',
                'name' => ['vi' => 'Hàng hóa XNK', 'en' => 'Import-Export & Sourcing'],
                'description' => ['vi' => 'Dịch vụ tìm nguồn nông sản theo yêu cầu và quy cách kỹ thuật.', 'en' => 'Custom agricultural sourcing and import-export.'],
                'sort_order' => 5,
            ],
        ];

        $categories = [];
        foreach ($categoriesData as $catData) {
            $cat = Category::query()->updateOrCreate(
                ['slug' => $catData['slug']],
                [
                    'name' => $catData['name'],
                    'description' => $catData['description'],
                    'sort_order' => $catData['sort_order'],
                    'is_active' => true,
                ]
            );
            $categories[$catData['slug']] = $cat;
        }

        // 2. Products
        $productsData = [
            // Nông sản tươi
            [
                'category_slug' => 'nong-san-tuoi',
                'name' => ['vi' => 'KHOAI TÂY TƯƠI NHẬP KHẨU HÀ LAN / TRUNG QUỐC', 'en' => 'Imported Fresh Potatoes (Netherlands / China)'],
                'sku' => 'TGT-POTATO-FRESH',
                'price' => 0,
                'short_description' => ['vi' => 'Khoai củ to vàng, ruột đặc, độ khô cao. Cung ứng số lượng lớn theo container lạnh cho nhà máy chip & chợ đầu mối.', 'en' => 'High dry-matter fresh potatoes for chip factories and wholesale.'],
                'description' => ['vi' => "Kích cỡ củ: 45-55 / 55-65 / 65-75mm\nĐóng gói: Bao lưới 10kg/20kg/Jumbo 1T\nBảo quản: 4°C - 8°C (Kho lạnh 24/7)\nĐặt hàng tối thiểu: 5 Tấn / 1 Container", 'en' => 'Specification: Size 45-75mm, Pack 10kg/20kg/1T.'],
                'image_url' => 'client-assets/images/fresh_produce.png',
                'is_featured' => true,
                'sort_order' => 1,
            ],
            [
                'category_slug' => 'nong-san-tuoi',
                'name' => ['vi' => 'HÀNH TÂY VÀNG NHẬP KHẨU HÀ LAN / ẤN ĐỘ', 'en' => 'Imported Yellow Onions (Netherlands / India)'],
                'sku' => 'TGT-ONION-YELLOW',
                'price' => 0,
                'short_description' => ['vi' => 'Củ chắc đét, vỏ mỏng khô giòn, kháng thối hỏng tốt. Thích hợp cho bếp ăn công nghiệp & nhà máy gia vị.', 'en' => 'Crisp yellow onions for industrial kitchens and seasoning processors.'],
                'description' => ['vi' => "Đường kính: Size 6cm - 9cm\nĐóng gói: Túi lưới 10kg/20kg/25kg\nBảo quản: 0°C - 4°C, Độ ẩm 65%\nĐặt hàng tối thiểu: 3 Tấn / 1 Container", 'en' => 'Size 6-9cm, mesh bag 10-25kg.'],
                'image_url' => 'client-assets/images/fresh_produce.png',
                'is_featured' => true,
                'sort_order' => 2,
            ],
            [
                'category_slug' => 'nong-san-tuoi',
                'name' => ['vi' => 'TỎI TRẮNG / TỎI TÍM NHẬP KHẨU TRUNG QUỐC & MYANMAR', 'en' => 'Imported Garlic (China & Myanmar)'],
                'sku' => 'TGT-GARLIC-IMP',
                'price' => 0,
                'short_description' => ['vi' => 'Tép tỏi mẩy đều, tinh dầu cay nồng đặc trưng, củ khô ráo sạch rễ. Đóng túi lưới hoặc thùng carton.', 'en' => 'Plump garlic cloves with high pungency and dry skin.'],
                'description' => ['vi' => "Kích cỡ: 4.5cm / 5.0cm / 5.5cm / 6.0cm+\nĐóng gói: Thùng 10kg / Túi lưới 10kg/20kg\nChứng nhận: Kiểm dịch thực vật Phytosanitary\nĐặt hàng tối thiểu: 1 Container (28 Tấn)", 'en' => 'Size 4.5-6.0cm+, 10kg carton / mesh bag.'],
                'image_url' => 'client-assets/images/fresh_produce.png',
                'is_featured' => false,
                'sort_order' => 3,
            ],
            [
                'category_slug' => 'nong-san-tuoi',
                'name' => ['vi' => 'DƯA VÀNG HOÀNG KIM / DƯA LƯỚI B2B', 'en' => 'Golden Melon / Cantaloupe B2B'],
                'sku' => 'TGT-MELON-GOLD',
                'price' => 0,
                'short_description' => ['vi' => 'Độ ngọt Brix ≥ 13-15%, thịt quả giòn thơm, vỏ vàng căng bóng đồng đều. Cung cấp cho hệ thống siêu thị & HORECA.', 'en' => 'High-brix sweet melons for supermarkets and HORECA.'],
                'description' => ['vi' => "Trọng lượng: 1.2kg - 2.0kg / quả\nĐóng gói: Thùng carton 5 lớp 10-15kg có lót xốp\nBảo quản: 8°C - 12°C\nGiao hàng: Xe lạnh tận kho", 'en' => 'Weight 1.2-2.0kg/fruit, 10-15kg carton.'],
                'image_url' => 'client-assets/images/fresh_fruits.png',
                'is_featured' => false,
                'sort_order' => 4,
            ],

            // Nông sản khô
            [
                'category_slug' => 'nong-san-kho',
                'name' => ['vi' => 'VỪNG ĐEN, VỪNG TRẮNG & VỪNG VÀNG NGUYÊN CHẤT', 'en' => 'Natural Sesame Seeds (Black, White, Yellow)'],
                'sku' => 'TGT-SESAME-ALL',
                'price' => 0,
                'short_description' => ['vi' => 'Hạt vừng mẩy đanh, hàm lượng dầu cao (≥ 48-52%), lọc sạch bụi cát và tạp chất. Cung ứng cho nhà máy dầu, bánh kẹo & gia vị.', 'en' => 'High-oil cleaned sesame seeds for oil and food manufacturing.'],
                'description' => ['vi' => "Chủng loại: Vừng đen / Vừng trắng / Vừng vàng\nĐộ tinh khiết: ≥ 99.0% (Lọc sạch cát)\nĐộ ẩm: ≤ 8.0%\nĐóng gói: Bao PP / Kraft 25kg, 50kg", 'en' => 'Purity >= 99%, Moisture <= 8%.'],
                'image_url' => 'client-assets/images/dried_produce.png',
                'is_featured' => true,
                'sort_order' => 5,
            ],
            [
                'category_slug' => 'nong-san-kho',
                'name' => ['vi' => 'ĐẬU XANH NGUYÊN HẠT / TÁCH ĐÔI BỎ VỎ / VỠ ĐÔI', 'en' => 'Mung Beans (Whole, Split Peeled, Split with Husk)'],
                'sku' => 'TGT-MUNG-BEAN',
                'price' => 0,
                'short_description' => ['vi' => 'Đậu xanh hạt mẩy bóng tròn, không mọt mốc. Đầy đủ 3 quy cách: nguyên vỏ, tách đôi bỏ vỏ làm bánh chè & tách đôi nguyên vỏ.', 'en' => 'Premium mung beans available in whole and split forms.'],
                'description' => ['vi' => "Quy cách: Nguyên hạt / Tách vỏ / Vỡ đôi\nĐộ ẩm: ≤ 12.5%\nTạp chất: ≤ 0.2%\nĐóng gói: Bao PP 25kg, 50kg có lót PE", 'en' => 'Whole, split-peeled, split-with-husk.'],
                'image_url' => 'client-assets/images/dried_produce.png',
                'is_featured' => true,
                'sort_order' => 6,
            ],
            [
                'category_slug' => 'nong-san-kho',
                'name' => ['vi' => 'ĐẬU TƯƠNG / ĐẬU NÀNH HẠT CHẤT LƯỢNG CAO', 'en' => 'Non-GMO Soybeans'],
                'sku' => 'TGT-SOYBEAN',
                'price' => 0,
                'short_description' => ['vi' => 'Hạt đậu tương tuyển chọn, hàm lượng đạm protein ≥ 36-38%, tỷ lệ nảy mầm cao. Nguồn nguyên liệu cho nhà máy đậu phụ, sữa hạt.', 'en' => 'High-protein soybeans for tofu and soy milk processing.'],
                'description' => ['vi' => "Đạm Protein: ≥ 36.0% - 38.0%\nĐộ ẩm: ≤ 13.0%\nHạt sâu mọt: ≤ 0.5%\nĐóng gói: Bao 25kg / 50kg / Jumbo 1 Tấn", 'en' => 'Protein >= 36-38%, Moisture <= 13%.'],
                'image_url' => 'client-assets/images/dried_produce.png',
                'is_featured' => false,
                'sort_order' => 7,
            ],
            [
                'category_slug' => 'nong-san-kho',
                'name' => ['vi' => 'MỘC NHĨ & NẤM HƯƠNG KHÔ THƯƠNG MẠI', 'en' => 'Dried Wood Ear & Shiitake Mushrooms'],
                'sku' => 'TGT-MUSHROOM-DRIED',
                'price' => 0,
                'short_description' => ['vi' => 'Mộc nhĩ cánh dày nở to, nấm hương thơm đậm mùi đặc trưng, sấy khô tự nhiên đạt chuẩn xuất khẩu & chế biến giò chả.', 'en' => 'Dried wood ear and shiitake mushrooms for culinary use.'],
                'description' => ['vi' => "Kích cỡ cánh nấm: Size 2-3cm / 3-5cm / 5cm+\nĐộ ẩm: ≤ 12.0%\nĐóng gói: Bao ép hút chân không 10kg/20kg\nChứng nhận: ATTP & Nguồn gốc rõ ràng", 'en' => 'Vacuum-sealed 10-20kg bags.'],
                'image_url' => 'client-assets/images/dried_produce.png',
                'is_featured' => false,
                'sort_order' => 8,
            ],
            [
                'category_slug' => 'nong-san-kho',
                'name' => ['vi' => 'ĐƯỜNG TINH LUYỆN THƯƠNG MẠI B2B (RE / RS)', 'en' => 'Refined Sugar RE / RS (Commercial B2B)'],
                'sku' => 'TGT-SUGAR-RE',
                'price' => 0,
                'short_description' => ['vi' => 'Đường kính trắng tinh luyện hạt đều, độ tinh khiết Pol ≥ 99.8%, không vón cục. Cung cấp theo tấn/xe cho nhà máy sản xuất bánh kẹo.', 'en' => 'Refined white sugar for food and beverage factories.'],
                'description' => ['vi' => "Độ Pol: ≥ 99.80°Z\nĐộ ẩm: ≤ 0.05%\nĐóng gói: Bao PP 50kg có lót PE chống ẩm\nVận chuyển: Giao xe tải/container tận nhà máy", 'en' => 'Pol >= 99.8%, Moisture <= 0.05%.'],
                'image_url' => 'client-assets/images/dried_produce.png',
                'is_featured' => false,
                'sort_order' => 9,
            ],

            // Nông sản chế biến
            [
                'category_slug' => 'nong-san-che-bien',
                'name' => ['vi' => 'KHOAI TÂY BỈ MARQUISE CỌNG 10/10 (TÚI 1KG & THÙNG 10KG)', 'en' => 'Marquise Belgian Frozen French Fries 10/10 (1kg / 10kg Carton)'],
                'sku' => 'TGT-MARQUISE-1010',
                'price' => 49000,
                'short_description' => ['vi' => 'Khoai tây đông lạnh nhập khẩu trực tiếp từ Vương quốc Bỉ thương hiệu Marquise Gastro (thuộc Clarebout). Cọng lớn 10x10mm đầy đặn, giữ nóng và giòn lâu, thơm bùi chuẩn vị châu Âu.', 'en' => 'Premium Belgian frozen french fries 10x10mm by Marquise Gastro (Clarebout). Crisp outside, fluffy inside.'],
                'description' => ['vi' => "Xuất xứ: Vương quốc Bỉ (Thương hiệu Marquise Gastro - Tập đoàn Clarebout)\nKích thước cọng: 10 x 10 mm (Cắt thẳng cọng dày, đầy tinh bột, giữ giòn lâu)\nQuy cách đóng gói: Túi 1kg / Thùng 10 túi (10kg) / Container lạnh theo yêu cầu\nThành phần: Khoai tây Bỉ tự nhiên, dầu thực vật. Không chất bảo quản\nNhiệt độ bảo quản: ≤ -18°C (Hạn sử dụng 24 tháng)\nChế biến: Chiên trực tiếp không rã đông ở 175°C (3-5 phút), nồi chiên không dầu / lò nướng", 'en' => 'Origin: Belgium (Marquise Gastro - Clarebout). Size 10x10mm, 1kg bag / 10kg carton.'],
                'image_url' => 'client-assets/images/marquise_10_10.jpg',
                'is_featured' => true,
                'sort_order' => 10,
            ],
            [
                'category_slug' => 'nong-san-che-bien',
                'name' => ['vi' => 'KHOAI TÂY CHIÊN BỈ MARQUISE CỌNG 7/7 (TÚI 1KG & THÙNG 10KG)', 'en' => 'Marquise Belgian Shoestring French Fries 7/7 (1kg / 10kg Carton)'],
                'sku' => 'TGT-MARQUISE-77',
                'price' => 49000,
                'short_description' => ['vi' => 'Khoai tây chiên đông lạnh nhập khẩu Bỉ sợi mỏng Shoestring 7x7mm. Chiên vàng ươm giòn rụm, thơm ngậy bùi tự nhiên, ít ngấm dầu, rất được chuỗi nhà hàng fastfood & cafe ưa chuộng.', 'en' => 'Belgian shoestring fries 7x7mm by Marquise Gastro. Fast cooking, extra crispy, ideal for fast-food chains & cafes.'],
                'description' => ['vi' => "Xuất xứ: Vương quốc Bỉ (Thương hiệu Marquise Gastro - Tập đoàn Clarebout)\nKích thước cọng: 7 x 7 mm (Cắt sợi nhỏ Shoestring, giòn tan rụm và nhanh chín)\nQuy cách đóng gói: Túi 1kg / Thùng 10 túi (10kg) / Container lạnh theo yêu cầu\nThành phần: Khoai tây Bỉ tự nhiên, dầu thực vật (hướng dương). Không chất bảo quản\nNhiệt độ bảo quản: ≤ -18°C (Hạn sử dụng 24 tháng)\nChế biến: Chiên trực tiếp từ đông lạnh ở 175°C (3-4 phút); Nồi chiên không dầu 180-200°C (10-12 phút)", 'en' => 'Origin: Belgium (Marquise Gastro - Clarebout). Size 7x7mm Shoestring, 1kg bag / 10kg carton.'],
                'image_url' => 'client-assets/images/marquise_7_7.jpg',
                'is_featured' => true,
                'sort_order' => 11,
            ],
            [
                'category_slug' => 'nong-san-che-bien',
                'name' => ['vi' => 'KHOAI TÂY CHIÊN ĐÔNG LẠNH CẮT THẲNG / SÓNG', 'en' => 'Frozen French Fries (Straight & Crinkle Cut)'],
                'sku' => 'TGT-FRIES-STRAIGHT',
                'price' => 0,
                'short_description' => ['vi' => 'Khoai tây chiên đông lạnh nhập khẩu Bỉ/Hà Lan, sợi giòn lâu, không ngấm dầu. Chủ lực cho chuỗi nhà hàng khách sạn & đồ ăn nhanh.', 'en' => 'Premium Belgian/Dutch frozen fries for restaurant chains.'],
                'description' => ['vi' => "Cắt sợi: 7mm / 9mm / 10mm (Cắt thẳng & sóng)\nĐóng gói: Túi 2.5kg x 4 túi/Thùng (10kg/Thùng)\nBảo quản: -18°C đông lạnh sâu\nHạn dùng: 24 tháng", 'en' => 'Size 7mm/9mm/10mm, 2.5kg x 4 bags/carton.'],
                'image_url' => 'client-assets/images/processed_potatoes.png',
                'is_featured' => true,
                'sort_order' => 12,
            ],
            [
                'category_slug' => 'nong-san-che-bien',
                'name' => ['vi' => 'KHOAI TÂY MÚI CAU TẨM GIA VỊ / WEDGE POTATOES', 'en' => 'Seasoned Potato Wedges'],
                'sku' => 'TGT-POTATO-WEDGES',
                'price' => 0,
                'short_description' => ['vi' => 'Khoai tây múi cau giữ nguyên vỏ tẩm ướp gia vị ớt bột & thảo mộc, hương vị thơm bùi đậm đà cho menu quán bia, bar & nhà hàng.', 'en' => 'Skin-on seasoned wedges for pubs, bars and restaurants.'],
                'description' => ['vi' => "Quy cách: Múi cau 8 phần tẩm gia vị nhẹ\nĐóng gói: Túi 2.5kg x 4 túi / Thùng carton\nBảo quản: -18°C\nChiên nhanh: 3.5 - 4 phút ở 175°C", 'en' => 'Seasoned wedges 10kg/carton.'],
                'image_url' => 'client-assets/images/processed_potatoes.png',
                'is_featured' => false,
                'sort_order' => 13,
            ],

            // Nông sản xuất khẩu
            [
                'category_slug' => 'nong-san-xuat-khau',
                'name' => ['vi' => 'NÔNG SẢN VIỆT NAM XUẤT KHẨU (TỎI, GỪNG, DƯA LƯỚI, NÔNG SẢN KHÔ)', 'en' => 'Vietnamese Produce Export (Garlic, Ginger, Melons, Grains)'],
                'sku' => 'TGT-VN-EXPORT',
                'price' => 0,
                'short_description' => ['vi' => 'Đóng gói và xuất khẩu nông sản Việt Nam đạt chuẩn VietGAP/GlobalGAP: Tỏi, gừng già, dưa vàng, đậu hạt & vừng mè chọn lọc theo container.', 'en' => 'Certified Vietnamese agricultural exports for global markets.'],
                'description' => ['vi' => "Thị trường xuất: Châu Á, Trung Đông, EU, Mỹ\nChứng từ: Phytosanitary, CO Form E/AK/EUR1\nQuy cách: Thùng carton / Pallet xuất khẩu\nĐiều kiện: FOB Cảng VN, CIF Cảng đến", 'en' => 'FOB VN Ports, CIF destination ports.'],
                'image_url' => 'client-assets/images/fresh_fruits.png',
                'is_featured' => true,
                'sort_order' => 14,
            ],

            // Hàng hóa XNK
            [
                'category_slug' => 'hang-hoa-xnk',
                'name' => ['vi' => 'HÀNG HÓA XNK & DỊCH VỤ TÌM NGUỒN THEO YÊU CẦU', 'en' => 'Import-Export Sourcing on Demand'],
                'sku' => 'TGT-SOURCING-B2B',
                'price' => 0,
                'short_description' => ['vi' => 'TGT tìm kiếm nguồn hàng, thẩm định mẫu, kiểm định chỉ tiêu vi sinh & giao hàng tận kho theo quy cách riêng của bạn.', 'en' => 'Complete sourcing and procurement from international markets.'],
                'description' => ['vi' => "Nguồn tìm kiếm: Bỉ, Hà Lan, Ấn Độ, TQ, Myanmar...\nTiêu chuẩn: HACCP, ISO 22000, VietGAP\nQuy trình: Mẫu test → Hợp đồng → Giao\nĐiều kiện: FOB, CIF, CFR, DDP", 'en' => 'Sourcing from EU, India, China, Myanmar.'],
                'image_url' => 'client-assets/images/cold_storage_warehouse.png',
                'is_featured' => true,
                'sort_order' => 15,
            ],
        ];

        foreach ($productsData as $pData) {
            $cat = $categories[$pData['category_slug']] ?? null;
            if (! $cat) {
                continue;
            }

            Product::query()->updateOrCreate(
                ['sku' => $pData['sku']],
                [
                    'category_id' => $cat->id,
                    'name' => $pData['name'],
                    'slug' => Str::slug($pData['name']['vi']),
                    'short_description' => $pData['short_description'],
                    'description' => $pData['description'],
                    'image_url' => $pData['image_url'],
                    'price' => $pData['price'],
                    'is_active' => true,
                    'is_featured' => $pData['is_featured'],
                    'sort_order' => $pData['sort_order'],
                    'published_at' => now(),
                ]
            );
        }

        // 3. Post Categories & Posts
        $postCat = PostCategory::query()->updateOrCreate(
            ['slug' => 'thi-truong-nong-san'],
            [
                'name' => ['vi' => 'Thị trường nông sản', 'en' => 'Agricultural Market'],
                'description' => ['vi' => 'Tin tức và biến động giá nông sản B2B.', 'en' => 'News and price trends in B2B agriculture.'],
                'is_active' => true,
            ]
        );

        $postsData = [
            [
                'title' => ['vi' => 'BẢNG GIÁ KHOAI TÂY HÀ LAN & ẤN ĐỘ CONTAINER THÁNG NÀY', 'en' => 'Dutch & Indian Potato Price Update'],
                'slug' => 'bang-gia-khoai-tay-ha-lan-an-do',
                'summary' => ['vi' => 'Cập nhật giá cước vận chuyển và giá sỉ khoai tây tươi nhập khẩu các cỡ 45-55mm, 55-65mm mới nhất.', 'en' => 'Latest wholesale price for imported fresh potatoes.'],
                'content' => ['vi' => '<p>Tổng quan tình hình thị trường khoai tây nhập khẩu tháng này...</p>', 'en' => '<p>Market overview for imported potatoes...</p>'],
                'image_url' => 'client-assets/images/fresh_produce.png',
            ],
            [
                'title' => ['vi' => 'TIÊU CHUẨN ĐỘ KHÔ VÀ QUY CÁCH KHOAI TÂY CHO NHÀ MÁY CHẾ BIẾN', 'en' => 'Dry Matter Standards for Processing Potatoes'],
                'slug' => 'tieu-chuan-do-kho-khoai-tay-nha-may',
                'summary' => ['vi' => 'Cách TGT TIMEX kiểm soát chất lượng độ khô ≥ 20% và hàm lượng đường khử cho các nhà máy snack khoai tây.', 'en' => 'How TGT TIMEX controls dry matter >= 20% for factories.'],
                'content' => ['vi' => '<p>Chỉ tiêu kỹ thuật cho nhà máy sản xuất bánh và khoai sấy...</p>', 'en' => '<p>Technical specs for food manufacturing...</p>'],
                'image_url' => 'client-assets/images/cold_storage_warehouse.png',
            ],
            [
                'title' => ['vi' => 'XU HƯỚNG NHẬP KHẨU HÀNH TỎI VÀ NÔNG SẢN KHÔ CUỐI NĂM', 'en' => 'Import Trends for Onion, Garlic & Grains'],
                'slug' => 'xu-huong-nhap-khau-hanh-toi-nong-san-kho',
                'summary' => ['vi' => 'Dự báo nguồn cung hành tây Ấn Độ, tỏi Myanmar và các loại hạt vừng đậu phục vụ mùa sản xuất cao điểm.', 'en' => 'Supply forecast for onion, garlic and grains.'],
                'content' => ['vi' => '<p>Phân tích chuỗi cung ứng nông sản khô và gia vị...</p>', 'en' => '<p>Supply chain analysis for dried agricultural produce...</p>'],
                'image_url' => 'client-assets/images/fresh_produce.png',
            ],
        ];

        foreach ($postsData as $p) {
            Post::query()->updateOrCreate(
                ['slug' => $p['slug']],
                [
                    'category_id' => $postCat->id,
                    'title' => $p['title'],
                    'summary' => $p['summary'],
                    'content' => $p['content'],
                    'image_url' => $p['image_url'],
                    'is_active' => true,
                    'published_at' => now(),
                ]
            );
        }
    }
}
