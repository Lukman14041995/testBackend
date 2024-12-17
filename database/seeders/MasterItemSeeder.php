<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('masteritem')->insert([
            ['PerusahaanNo' => 639, 'DeviceID' => 1356, 'DeviceNo' => 1, 'CategoryID' => 1, 'ItemID' => 101, 'ItemName' => 'Nasi Goreng'],
            ['PerusahaanNo' => 639, 'DeviceID' => 1356, 'DeviceNo' => 1, 'CategoryID' => 1, 'ItemID' => 102, 'ItemName' => 'Mie Ayam'],
            ['PerusahaanNo' => 639, 'DeviceID' => 1356, 'DeviceNo' => 2, 'CategoryID' => 2, 'ItemID' => 201, 'ItemName' => 'Es Teh Manis'],
            ['PerusahaanNo' => 639, 'DeviceID' => 1356, 'DeviceNo' => 2, 'CategoryID' => 2, 'ItemID' => 202, 'ItemName' => 'Jus Jeruk'],
        ]);
    }
}
