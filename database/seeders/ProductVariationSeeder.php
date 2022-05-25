<?php

namespace Database\Seeders;

use App\Models\productVariation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductVariationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $productVariations = [
            'SIze', 'Color', 'Weight', 'Length',
            'Quality', 'Memory', 'Speed', 'Generation'
        ];

        foreach ($productVariations as $productVariation) {
            $productVariationModel = new productVariation();
            $productVariationModel->name = $productVariation;
            $productVariationModel->created_at = now()->subMonth(rand(1, 12));
            $productVariationModel->save();
        }
    }
}
