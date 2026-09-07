<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(string $locale): View
    {
        $categories = Category::query()
            ->where('is_active', true)
            ->where('slug', '!=', 'chua-phan-loai')
            ->whereHas('products', fn ($q) => $q->where('is_active', true))
            ->orderBy('sort_order')
            ->get();

        $products = Product::query()
            ->where('is_active', true)
            ->with('category')
            ->orderBy('sort_order')
            ->get();

        return view('client.pages.home', [
            'categories' => $categories,
            'products' => $products,
        ]);
    }
}
