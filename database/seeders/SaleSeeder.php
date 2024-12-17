<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('sale')->insert([
            ['PerusahaanNo' => 639, 'DeviceID' => 1356, 'DeviceNo' => 1, 'TransactionID' => 1, 'SaleDate' => '2017-05-11'],
            ['PerusahaanNo' => 639, 'DeviceID' => 1356, 'DeviceNo' => 2, 'TransactionID' => 2, 'SaleDate' => '2017-05-11'],
        ]);
    }
}
