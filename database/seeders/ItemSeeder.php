<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item=new Item();
        $item->item_category_id='1';
        $item->price='900';
        $item->image='https://images.pexels.com/photos/1410235/pexels-photo-1410235.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2';
        $item->name='Beaf Burgur';
        $item->decription='Chefs are proficient in the techniques and
        principles of cooking. They understand various cuisines, cooking methods,
         and flavor profiles,
        allowing them to create delicious and well-balanced dishes.';

        $item = new Item();
        $item->item_category_id = '2';
        $item->price = '1600';
        $item->image = 'https://images.pexels.com/photos/1410235/pexels-photo-1410235.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2';
        $item->name = 'Chiken Karhai';
        $item->decription = 'Chefs are proficient in the techniques and
        principles of cooking. They understand various cuisines, cooking methods,
         and flavor profiles,
        allowing them to create delicious and well-balanced dishes.';

    }
}
