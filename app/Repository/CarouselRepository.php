<?php

namespace App\Repository;

use App\Api\Data\CarouselInterface;
use App\Models\Carousel;
use Illuminate\Support\Facades\DB;

class CarouselRepository implements \App\Api\CarouselRepositoryInterface
{

    public function getById(int $id)
    {
        return Carousel::find($id);
    }

    public function getList()
    {
        return Carousel::all();
    }

    public function save(CarouselInterface $carousel)
    {
        $carousel->save();
    }

    public function delete(CarouselInterface $carousel)
    {
        $carousel->delete();
    }
}
