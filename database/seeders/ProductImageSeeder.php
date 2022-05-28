<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $products = Product::all();
        $image_types = ['product', 'cover', 'hover', 'thumb'];

        foreach ($products as $product) {
            for ($i = 1; $i < 4; $i++) {
                $ProductImages = new ProductImage();
                $ProductImages->path = 'assets/images/demos/demo-9/products/product-' . $i . '-' . rand(1, 3);
                $ProductImages->product_id = $product['id'];
                $ProductImages->image_type = $image_types[rand(0, 2)];
                $ProductImages->created_at = now()->subHours(rand(1, 12));
                $ProductImages->save();
            }
        }

        foreach ($products as $product) {
            for ($i = 1; $i < 4; $i++) {
                $ProductImages = new ProductImage();
                $ProductImages->path = 'assets/images/demos/demo-9/products/thumb/' . $i . '-' . rand(1, 3);
                $ProductImages->product_id = $product['id'];
                $ProductImages->image_type = $image_types[3];
                $ProductImages->created_at = now()->subHours(rand(1, 12));
                $ProductImages->save();
            }
        }
    }
}
