<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductCategoryProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductCategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $Products = Product::all();
        $ProductCategories = ProductCategory::whereNotNull('parent')->get();


        $productsArrayLength = count($Products) / 4;

        foreach ($ProductCategories as $ProductCategory) {
            for ($i = 0; $i < $productsArrayLength; $i++) {
                $productCategoryProduct = new ProductCategoryProduct();
                $productCategoryProduct->category_id = $ProductCategory['id'];
                $productCategoryProduct->product_id = $Products[rand(1, count($Products) - 1)]['id'];
                $productCategoryProduct->created_at = now()->subHours(rand(1, 12));
                $productCategoryProduct->save();
            }
        }
    }
}
