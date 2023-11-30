<?php

namespace App\Console\Commands;

use App\Facade\CarouselManagement;
use App\Repository\CarouselRepository;
use Illuminate\Console\Command;
use function Laravel\Prompts\text;

class GetProductsByCarouselCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'carousel:get-products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(CarouselRepository $carouselRepository, CarouselManagement $carouselManagement)
    {
        $id = text("Insert Carousel id");
        $carousel = $carouselRepository->getById($id);
        dd($carouselManagement->getProducts($carousel)->toArray());
    }
}
