<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('mastercategory')->insert([
            ['PerusahaanNo' => 639, 'DeviceID' => 1356, 'CategoryDeviceNo' => 1, 'CategoryID' => 1, 'CategoryName' => 'Makanan Utama'],
            ['PerusahaanNo' => 639, 'DeviceID' => 1356, 'CategoryDeviceNo' => 2, 'CategoryID' => 2, 'CategoryName' => 'Minuman'],
        ]);
    }
}
