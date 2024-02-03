<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = new Order();
        $order->user_id = 3;
        $order->chef_id = 2;
        $order->table_id = 1;
        $order->price = '1300';
        $order->status = 'preparing';
        $order->payment_gateway = 'stripe';
        $order->payment_gateway_id = 1;
        $order->payment_status = 'Paied';
        $order->save();



    }
}
