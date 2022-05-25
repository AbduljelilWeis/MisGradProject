<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $deleted_at = [now(), null];
        foreach (range(1, 10) as $category) {
            $parentCategory = new ProductCategory();
            $parentCategory->name = 'parentCategory ' . $category;
            $parentCategory->description = 'Parent Category description / ' . $faker->words(2, true);
            $parentCategory->parent = null;
            $parentCategory->deleted_at = $deleted_at[rand(0, 1)];
            $parentCategory->created_at = now()->subHours(rand(1, 12));
            $parentCategory->save();
        }

        $parentCategories = ProductCategory::whereNull('parent')->get();
        foreach ($parentCategories as $category) {
            for ($i = 0; $i < 4; $i++) {
                $newCategory = new ProductCategory();
                $newCategory->name = 'child category ' . $i;
                $newCategory->description = 'description / ' . $faker->words(3, true);;
                $newCategory->parent = $category['id'];
                $newCategory->save();
            }
        }
    }
}
