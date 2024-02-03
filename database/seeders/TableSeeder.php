<?php

namespace Database\Seeders;

use App\Models\Table;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table1 = new Table;
        $table1->seats = 4;
        $table1->types = 'VIP';
        $table1->qr = QrCode::size(120)->generate('https://www.binaryboxtuts.com/');
        $table1->save();
    }
}
