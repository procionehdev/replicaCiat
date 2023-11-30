<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Factory\CarouselFactory;
use App\Factory\ProductFactory;
use App\Repository\CarouselRepository;
use App\Repository\ProductRepository;
use Illuminate\Database\Seeder;
use Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(CarouselRepository $carouselRepository, ProductRepository $productRepository): void
    {
        //Carosello 1 e 2 per i prodotti
        $faker = Faker\Factory::create("it_IT");
        for ($i = 1; $i <= 2; $i++)
        {
            $carouselRepository->save(CarouselFactory::make());
            for ($j = 0; $j < 8; $j++)
            {
                $sku = rand(0, 5000);
                $product = ProductFactory::make(
                    $sku,
                    "PROD_".$sku,
                    $faker->firstName(),
                    rand(0, 2000),
                    $i,
                    "assets/images/products/placeholder".rand(0,3).".jpg"
                );
                $productRepository->save($product);
            }
        }

        //Carosello Designer
        $carouselRepository->save(CarouselFactory::make());
        for ($j = 0; $j < 5; $j++)
        {
            $sku = rand(0, 100);
            $product = ProductFactory::make(
                "DESIGNER".$sku,
                $faker->name(),
                "",
                0,
                3,
                "assets/images/designer/placeholder".$j.".jpg"
            );
            $productRepository->save($product);
        }

        //Carosello Brand
        $carouselRepository->save(CarouselFactory::make());
        for ($j = 0; $j < 5; $j++)
        {
            $sku = rand(0, 100);
            $brandName = $faker->lastName();
            $product = ProductFactory::make(
                "BRAND".$sku,
                $brandName,
                "$brandName",
                0,
                4,
                "assets/images/brand/placeholder.jpg"
            );
            $productRepository->save($product);
        }

        //Carosello Showroom
        $carouselRepository->save(CarouselFactory::make());
        for ($j = 0; $j < 4; $j++)
        {
            $sku = rand(0, 5000);
            $product = ProductFactory::make(
                $sku,
                "PROD_".$sku,
                $faker->firstName(),
                rand(0, 2000),
                5,
                "assets/images/products/placeholder".rand(0,3).".jpg"
            );
            $productRepository->save($product);
        }
    }
}
