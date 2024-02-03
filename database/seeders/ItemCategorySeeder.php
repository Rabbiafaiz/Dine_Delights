<?php

namespace Database\Seeders;

use App\Models\ItemCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ItemCategory::updateOrCreate([
        //     'name' => 'Dasi',
        // ],[
        //     'name' => 'Dasi',
        //     'image' => 'https://images.pexels.com/photos/769289/pexels-photo-769289.jpeg',
        // ]);
        $item_category=new ItemCategory;
        $item_category->image='https://images.pexels.com/photos/769289/pexels-photo-769289.jpeg';
        $item_category->name='Dasi';
        $item_category->save();

        $item_category1 = new ItemCategory;
        $item_category1->image = 'https://images.pexels.com/photos/70497/pexels-photo-70497.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2';
        $item_category1->name = 'fast';
        $item_category1->save();

        $item_category2 = new ItemCategory;
        $item_category2->image = 'https://images.pexels.com/photos/70497/pexels-photo-70497.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2';
        $item_category2->name = 'Burgers';
        $item_category2->parent_id=2;
        $item_category2->save();

        $item_category3 = new ItemCategory;
        $item_category3->image = 'https://images.pexels.com/photos/70497/pexels-photo-70497.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2';
        $item_category3->name = 'karhai';
        $item_category3->parent_id = 1;
        $item_category3->save();

    }
}
