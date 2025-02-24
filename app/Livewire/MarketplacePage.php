<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;
use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use Jantinnerezo\LivewireAlert\LivewireAlert;

#[Title('Marketplace 🚴‍♀️')]

class MarketplacePage extends Component
{
    use LivewireAlert;
    use WithPagination;

    #[Url]
    public $selected_categories = [];

    #[Url]
    public $selected_brands = [];

    #[Url]
    public $featured = [];

    #[Url]
    public $on_sale = [];

    #[Url]
    public $is_active = [];

    #[Url]
    public $in_stock = [];

    #[Url]
    public $price_range = 300000;

    #[Url]
    public $sort = 'latest';

    public function addToCart($product_id)
    {
        $total_count = CartManagement::addItemToCart($product_id);

        $this->dispatch('update-cart-count', total_count: $total_count)->to(Navbar::class);

        $this->alert('success', 'Item added to cart', [
            'position' =>  'bottom-end',
            'timer' =>  2000,
            'toast' =>  true,
        ]);
    }


    public function render()
    {
        $productQuery = Product::query()
            ->where('is_active', true);

        if (!empty($this->selected_categories)) {
            $productQuery->whereIn('category_id', $this->selected_categories);
        }

        if (!empty($this->selected_brands)) {
            $productQuery->whereIn('brand_id', $this->selected_brands);
        }

        if (!empty($this->featured)) {
            $productQuery->where('is_featured', true);
        }

        if (!empty($this->on_sale)) {
            $productQuery->where('on_sale', true);
        }

        if (!empty($this->in_stock)) {
            $productQuery->where('in_stock', true);
        }

        if (!empty($this->is_active)) {
            $productQuery->where('is_active', true);
        }

        if (($this->price_range)) {
            $productQuery->whereBetween('price', [0, $this->price_range]);
        }

        if ($this->sort === 'latest') {
            $productQuery->latest();
        }

        if ($this->sort === 'price') {
            $productQuery->orderBy("price");
        }



        return view('livewire.marketplace-page', [
            'products' => $productQuery->paginate(6),
            'brands' => Brand::where('is_active', 1)->get(['id', 'name', 'slug']),
            'categories' => Category::where('is_active', 1)->get(['id', 'name', 'slug']),
        ]);
    }
}
