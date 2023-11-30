<?php

namespace App\Factory;

use App\Models\Carousel;

class CarouselFactory
{
    public static function make()
    {
        return Carousel::factory()->make();
    }
}
