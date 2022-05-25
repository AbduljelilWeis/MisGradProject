<?php

namespace Database\Seeders;

use App\Models\ShippingCompany;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ShippingCompanySeeder extends Seeder
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

        foreach ($orderStatuses as $orderStatus) {
            $shippingCompanyModel = new ShippingCompany();
            $shippingCompanyModel->name = $orderStatus;
            $shippingCompanyModel->logo_path = $faker->imageUrl(360, 360, $orderStatus, false, '', false, 'jpg');
            $shippingCompanyModel->save();
        }
    }
}
