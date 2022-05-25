<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
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

        foreach (range(1, 50) as $user) {
            $userModel = new User();
            $userModel->name = $faker->userName() . ' / ' . $user;
            $userModel->email = $faker->email();
            $userModel->email_verified_at = now()->subMonth(rand(1, 12));
            $userModel->password = $faker->password();
            // $userModel->remember_token = $faker->uuid();
            $userModel->remember_token = $faker->password(20, 30);
            $userModel->phone_number = $faker->phoneNumberWithExtension();
            $userModel->created_at = now()->subHours(rand(1, 12));
            $userModel->deleted_at = $deleted_at[rand(0, 1)];
            $userModel->save();
        }
    }
}
