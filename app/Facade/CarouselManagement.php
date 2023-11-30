<?php

namespace App\Facade;

use App\Api\CarouselManagementInterface;
use App\Api\Data\CarouselInterface;

class CarouselManagement implements CarouselManagementInterface
{

    public function getProducts(CarouselInterface $carousel)
    {
        return $carousel->products()->get();
    }
}
