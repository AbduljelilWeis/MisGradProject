<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProductCategorySeeder::class,
            UserSeeder::class,
            OrderStatusSeeder::class,
            ShippingCompanySeeder::class,
            ProductVariationSeeder::class,
            ProductVariationOptionSeeder::class,
            ProductSeeder::class,
            ProductCategoryProductSeeder::class,
            ProductImageSeeder::class
        ]);
    }
}
