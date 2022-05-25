<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class OrderStatusSeeder extends Seeder
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
            'preparing', 'Canceled', 'Missing Items', 'Lost',
            'Ready', 'Shipped', 'Modified'
        ];

        foreach ($orderStatuses as $orderStatus) {
            $orderStatusModel = new OrderStatus();
            $orderStatusModel->name = $orderStatus;
            $orderStatusModel->created_at = now()->subMonth(rand(1, 12));
            $orderStatusModel->save();
        }
    }
}
