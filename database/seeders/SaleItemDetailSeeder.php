<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaleItemDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('saleitemdetail')->insert([
            ['PerusahaanNo' => 639, 'DeviceID' => 1356, 'TransactionDeviceNo' => 1, 'TransactionID' => 1, 'ItemDeviceNo' => 1, 'ItemID' => 101, 'Qty' => 10, 'SubTotal' => 50000],
            ['PerusahaanNo' => 639, 'DeviceID' => 1356, 'TransactionDeviceNo' => 2, 'TransactionID' => 2, 'ItemDeviceNo' => 2, 'ItemID' => 201, 'Qty' => 5, 'SubTotal' => 25000],
        ]);
    }
}
