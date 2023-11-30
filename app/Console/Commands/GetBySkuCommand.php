<?php

namespace App\Console\Commands;

use App\Repository\ProductRepository;
use Illuminate\Console\Command;
use function Laravel\Prompts\text;

class GetBySkuCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:get-by-sku';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(ProductRepository $productRepository)
    {
        $sku = text("Insert the product SKU");
        $product = $productRepository->getBySku($sku);
        dd($product->toArray());
    }
}
