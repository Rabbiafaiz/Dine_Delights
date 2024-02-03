<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions


        // create roles and assign created permissions
        $role = Role::create(['name' => 'admin']);
        $role->syncPermissions(Permission::all());

        $role = Role::create(['name' => 'chef']);
        $role->givePermissionTo(Permission::all());

        $user1 = new User;
        $user1->name = 'Admins';
        $user1->email = 'admin@gmail.com';
        $user1->email_verified_at = '2023-02-28 15:12:23';
        $user1->password = Hash::make('admin123');
        $user1->save();
        $user1->assignRole('admin');

        $user2 = new User;
        $user2->name = 'chefs';
        $user2->email = 'chef@gmail.com';
        $user2->email_verified_at = '2023-02-28 15:12:23';
        $user2->password = Hash::make('chef123');
        $user2->introduction = 'A chef is a highly skilled culinary professional
         responsible for creating, planning, and executing a diverse range of
         dishes in various culinary settings such as restaurants, hotels,
         or catering establishments. Beyond expertise in cooking techniques
         and flavor profiles, chefs play a pivotal role in menu planning, ingredient
         selection, and kitchen management. Their creativity is showcased in the
         innovative design of menus and visually appealing food presentations.';
        $user2->phone_no = '03158767987';
        $user2->save();
        $user2->assignRole('chef');

            $user3 = new User;
            $user3->name = 'member';
            $user3->email = 'member@gmail.com';
            $user3->email_verified_at = '2023-02-28 15:12:23';
            $user3->password = Hash::make('123456789');
            $user3->introduction = 'A chef is a highly skilled culinary professional
             responsible for creating, planning, and executing a diverse range of
             dishes in various culinary settings such as restaurants, hotels,
             or catering establishments. Beyond expertise in cooking techniques
             and flavor profiles, chefs play a pivotal role in menu planning, ingredient
             selection, and kitchen management. Their creativity is showcased in the
             innovative design of menus and visually appealing food presentations.';
            $user3->phone_no = '03158767947';
            $user3->save();



    }
}
