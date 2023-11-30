<?php

namespace App\Repository;

use App\Api\Data\ProductInterface;
use App\Api\ProductRepositoryInterface;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductRepository implements ProductRepositoryInterface
{

    public function getBySku(string $sku)
    {
        return Product::find($sku);
    }

    public function getList()
    {
        return Product::all();
    }

    public function save(ProductInterface $product): void
    {
        $product->save();
    }

    public function delete(ProductInterface $product): void
    {
        $product->delete();
    }
}
