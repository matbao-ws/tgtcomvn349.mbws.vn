<?php

namespace Database\Seeders;

use App\Models\FeatureSetting;
use App\Models\ProjectSetting;
use App\Support\PermissionRegistry;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use RuntimeException;
use Illuminate\Support\Str;

class FoundationSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            FeatureSeeder::class,
            PermissionSeeder::class,
            AddonSeeder::class,
        ]);

        \App\Models\Category::query()->updateOrCreate(
            ['slug' => 'chua-phan-loai'],
            [
                'name' => [
                    'vi' => 'Chưa phân loại',
                    'en' => 'Uncategorized',
                ],
                'description' => [
                    'vi' => 'Danh mục mặc định cho các sản phẩm chưa được phân loại.',
                    'en' => 'Default category for uncategorized products.',
                ],
                'is_active' => true,
                'sort_order' => 0,
            ]
        );

        foreach (config('features.codes', []) as $featureCode) {
            FeatureSetting::query()->updateOrCreate(
                ['feature_code' => $featureCode],
                [
                    'is_enabled' => true,
                    'limit_value' => null,
                    'config' => null,
                    'updated_at' => now(),
                ]
            );
        }

        $superadminRole = Role::query()->updateOrCreate(
            ['name' => 'Superadmin'],
            ['permissions' => ['*'], 'is_system' => true]
        );

        // Everything except permission management and language configuration,
        // which stay with the superadmin.
        $adminRole = Role::query()->updateOrCreate(
            ['name' => 'Admin'],
            [
                'permissions' => array_values(array_filter(
                    PermissionRegistry::codes(),
                    static fn (string $code): bool => ! str_starts_with($code, 'roles.')
                        && ! str_starts_with($code, 'languages.'),
                )),
                'is_system' => false,
            ]
        );

        // The client layout asks for the `primary` menu, so the install always
        // has one to fill in rather than a missing key.
        \App\Models\Menu::query()->updateOrCreate(
            ['key' => 'primary'],
            ['name' => 'Menu chính', 'is_active' => true],
        );

        $adminPassword = env('ADMIN_PASSWORD');
        if (blank($adminPassword) && ! app()->environment('testing')) {
            throw new RuntimeException('ADMIN_PASSWORD must be set before running the foundation seed.');
        }
        $adminPassword = $adminPassword ?: Str::random(40);

        User::query()->updateOrCreate(
            ['email' => env('ADMIN_EMAIL', 'admin@example.com')],
            [
                'role_id' => $superadminRole->id,
                'name' => env('ADMIN_NAME', 'Admin'),
                'password' => $adminPassword,
                'is_active' => true,
            ]
        );

        if (\Illuminate\Support\Facades\Schema::hasTable('languages')) {
            \App\Models\Language::query()->updateOrCreate(
                ['code' => 'vi'],
                ['name' => 'Vietnamese', 'native_name' => 'Tiếng Việt', 'regional' => 'vi_VN', 'flag_path' => 'admin-assets/images/flag/Flag_of_Vietnam.svg.png', 'is_active' => true, 'is_default' => true, 'is_content_fallback' => true, 'sort_order' => 0],
            );
            \App\Models\Language::query()->updateOrCreate(
                ['code' => 'en'],
                ['name' => 'English', 'native_name' => 'English', 'regional' => 'en_US', 'flag_path' => 'admin-assets/images/flag/icon-flag-en.svg', 'is_active' => true, 'is_default' => false, 'is_content_fallback' => false, 'sort_order' => 10],
            );
        }

        $settings = [
            'shop_name' => 'CÔNG TY CỔ PHẦN XUẤT NHẬP KHẨU THƯƠNG MẠI TGT',
            'logo_url' => 'client-assets/images/logo-tgt.png',
            'favicon_url' => 'client-assets/images/logo-tgt.png',
            'contact' => [
                'phone' => '0329575866',
                'email' => 'info@tgt.com.vn',
                'address' => 'C39-13 KĐT Geleximco, đường Lê Trọng Tấn, Phường Dương Nội, Thành phố Hà Nội, Việt Nam',
                'tax_id' => '0111571986',
                'bank_name' => 'Ngân hàng TMCP Công Thương Việt Nam (VietinBank) - Chi nhánh Thành An - Hội Sở',
                'account_number' => '111619386868',
                'account_holder' => 'CÔNG TY CỔ PHẦN XUẤT NHẬP KHẨU THƯƠNG MẠI TGT',
            ],
            'theme' => [
                'primary_color' => '#059669',
                'layout' => 'default',
            ],
            'seo' => [
                'title' => 'CÔNG TY CỔ PHẦN XUẤT NHẬP KHẨU THƯƠNG MẠI TGT (TGT TIMEX)',
                'description' => 'TGT TIMEX - Đối tác thương mại & xuất nhập khẩu nông sản B2B hàng đầu Việt Nam.',
            ],
            'social_links' => [],
            'multilingual' => [
                'enabled' => true,
                'mode' => 'manual',
                'gtranslate' => [
                    'target_locales' => ['en'],
                    'widget_look' => 'float',
                    'position' => 'bottom_right',
                    'detect_browser_language' => false,
                    'native_language_names' => true,
                ],
            ],
        ];

        foreach ($settings as $key => $value) {
            ProjectSetting::query()->updateOrCreate(
                ['setting_key' => $key],
                [
                    'setting_value' => $value,
                    'updated_at' => now(),
                ]
            );
        }
    }
}
