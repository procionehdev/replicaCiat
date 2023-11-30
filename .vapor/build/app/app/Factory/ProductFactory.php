<?php

namespace App\Factory;

use App\Models\Product;

class ProductFactory
{
    public static function make(string $sku, string $name, string $designer, float $price, int $carouselId, string $imageLocation)
    {
        return Product::factory()->make([
            'sku' => $sku,
            'name' => $name,
            'designer' => $designer,
            'price' => $price,
            'carousel_id' => $carouselId,
            'img' => $imageLocation
        ]);
    }
}
