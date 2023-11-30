<?php

namespace App\Api;

use App\Api\Data\CarouselInterface;

interface CarouselManagementInterface
{
    public function getProducts(CarouselInterface $carousel);
}
