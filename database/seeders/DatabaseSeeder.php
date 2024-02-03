<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(UserSeeder::class);
        $this->call(TableSeeder::class);
        $this->call(ItemCategorySeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(FeedbackSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderProductSeeder::class);
        $this->call(MembershipSeeder::class);
        $this->call(MembershipPaymentSeeder::class);
        $this->call(MembershipPurchasedSeeder::class);


    }
}
