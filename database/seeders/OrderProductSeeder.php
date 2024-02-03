<?php

namespace Database\Seeders;

use App\Models\OrderProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orderproducts=new OrderProduct();
        $orderproducts->order_id=1;
        $orderproducts->quantity=2;
        $orderproducts->price='1200';
        $orderproducts->save();


        $orderproducts1 = new OrderProduct();
        $orderproducts1->order_id = 1;
        $orderproducts1->quantity = 2;
        $orderproducts1->price = '1200';
        $orderproducts1->save();

        $orderproducts2 = new OrderProduct();
        $orderproducts2->order_id = 1;
        $orderproducts2->quantity = 2;
        $orderproducts2->price = '1200';
        $orderproducts2->save();


    }
}
