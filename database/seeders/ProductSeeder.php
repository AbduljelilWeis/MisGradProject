<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $orderStatuses = [
            'Yurtiçi Kargo', 'Sürat Kargo', 'Aras Kargo',
            'MNG Kargo', 'Ptt Kargo'
        ];

        foreach (range(1, 100) as $num) {
            $productModel = new Product();
            $productModel->name =  'Product ' . $num . ' Name / ' . $faker->name();
            $productModel->description =  'Product ' . $num . ' description / ' . $faker->sentence(3);
            $productModel->related_products =  $faker->sentence(5);
            $productModel->created_at = now()->subHours(rand(1, 12));
            $productModel->save();
        }
    }
}
