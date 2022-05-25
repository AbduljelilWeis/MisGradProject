<?php

namespace Database\Seeders;

use App\Models\productVariation;
use App\Models\ProductVariationOptions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductVariationOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $productVariations = productVariation::all();


        foreach ($productVariations as $productVariation) {
            for ($i = 0; $i < 4; $i++) {
                $ProductVariationOptionModel = new ProductVariationOptions();
                $ProductVariationOptionModel->name = $productVariation['name'] . ' Option ' . $i;
                $ProductVariationOptionModel->product_variation = $productVariation['id'];
                $ProductVariationOptionModel->save();
            }
        }
    }
}
