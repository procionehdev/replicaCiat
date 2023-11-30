<?php

namespace App\Api;

use App\Api\Data\CarouselInterface;

interface CarouselRepositoryInterface
{
    public function getById(int $id);
    public function getList();
    public function save(CarouselInterface $carousel);
    public function delete(CarouselInterface $carousel);
}
