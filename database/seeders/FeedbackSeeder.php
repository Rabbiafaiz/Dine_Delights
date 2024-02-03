<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Feedback;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $feedback = new Feedback();
        $feedback->user_id = 3;
        $feedback->feedback = 'Chefs are involved in designing menus
     that reflect the theme and style of the establishment. They
     consider factors such as seasonality, dietary preferences, and
      cost when crafting a menu that
     satisfies the tastes of their target audience.';
        $feedback->save();
    }
}

