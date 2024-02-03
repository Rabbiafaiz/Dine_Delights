<?php

namespace Database\Seeders;

use App\Models\MembershipPayment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembershipPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment1=new MembershipPayment;
        $payment1->membership_id=1;
        $payment1->user_id=3;
        $payment1->payment_status='true';
        $payment1->save();

    }
}
