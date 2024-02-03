<?php

namespace Database\Seeders;

use App\Models\Membership;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $membership = new Membership();
        $membership->membership_type = 'Gold';
        $membership->membership_details = 'Duration of 1 year';
        $membership->duration = '1';
        $membership->discount_type = 'lwdkwcwio ioejfowheuf';
        $membership->discount = '20';
        $membership->save();

        $membership1 = new Membership();
        $membership1->membership_type = 'silver';
        $membership1->membership_details = 'Duration of 1 year';
        $membership1->duration = '1';
        $membership1->discount_type = 'lwdkwcwio ioejfowheuf';
        $membership1->discount = '20';
        $membership1->save();

        $membership2 = new Membership();
        $membership2->membership_type = 'Bronze';
        $membership2->membership_details = 'Duration of 1 year';
        $membership2->duration = '1';
        $membership2->discount_type = 'lwdkwcwio ioejfowheuf';
        $membership2->discount = '20';
        $membership1->save();





    }
}
