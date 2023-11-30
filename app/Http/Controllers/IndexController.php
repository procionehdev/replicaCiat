<?php

namespace App\Http\Controllers;

use App\Repository\CarouselRepository;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show(CarouselRepository $carouselRepository)
    {
        return view('index.combined', [
            'carousels' => $carouselRepository->getList()
        ]);
    }
}
