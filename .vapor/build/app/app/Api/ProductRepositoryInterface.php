<?php

namespace App\Api;

use App\Api\Data\ProductInterface;

interface ProductRepositoryInterface
{
    public function getBySku(string $sku);
    public function getList();
    public function save(ProductInterface $product);
    public function delete(ProductInterface $product);
}
