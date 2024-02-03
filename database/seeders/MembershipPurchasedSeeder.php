<?php

namespace Database\Seeders;

use App\Models\MembershipPurchased;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembershipPurchasedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $member1 = new MembershipPurchased();
        $member1->user_id = 3;
        $member1->membership_id = 1;
        $member1->expiry_date = '8-12-2024';
        $member1->payment_status = '1';
        $member1->active = '0';
        $member1->save();
        $member2 = new MembershipPurchased();
        $member2->user_id = 3;
        $member2->membership_id = 2;
        $member2->expiry_date = '8-12-2023';
        $member2->payment_status = '0';
        $member2->active = '1';
        $member2->save();


    }
}
