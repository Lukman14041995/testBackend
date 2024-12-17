<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NutacloudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // MasterCategory


        DB::table('mastercategory')->insert([
            ['PerusahaanNo' => 639, 'DeviceID' => 1356, 'CategoryDeviceNo' => 1, 'CategoryID' => 1, 'CategoryName' => 'Makanan Utama'],
            ['PerusahaanNo' => 639, 'DeviceID' => 1356, 'CategoryDeviceNo' => 2, 'CategoryID' => 2, 'CategoryName' => 'Minuman'],
        ]);

        // MasterItem
        DB::table('masteritem')->insert([
            ['PerusahaanNo' => 639, 'DeviceID' => 1356, 'DeviceNo' => 1, 'CategoryID' => 1, 'ItemID' => 101, 'ItemName' => 'Nasi Goreng'],
            ['PerusahaanNo' => 639, 'DeviceID' => 1356, 'DeviceNo' => 1, 'CategoryID' => 1, 'ItemID' => 102, 'ItemName' => 'Mie Ayam'],
            ['PerusahaanNo' => 639, 'DeviceID' => 1356, 'DeviceNo' => 2, 'CategoryID' => 2, 'ItemID' => 201, 'ItemName' => 'Es Teh Manis'],
            ['PerusahaanNo' => 639, 'DeviceID' => 1356, 'DeviceNo' => 2, 'CategoryID' => 2, 'ItemID' => 202, 'ItemName' => 'Jus Jeruk'],
        ]);

        // Sale
        DB::table('sale')->insert([
            ['PerusahaanNo' => 639, 'DeviceID' => 1356, 'DeviceNo' => 1, 'TransactionID' => 1, 'SaleDate' => '2017-05-11'],
            ['PerusahaanNo' => 639, 'DeviceID' => 1356, 'DeviceNo' => 2, 'TransactionID' => 2, 'SaleDate' => '2017-05-11'],
        ]);

        // SaleItemDetail
        DB::table('saleitemdetail')->insert([
            ['PerusahaanNo' => 639, 'DeviceID' => 1356, 'TransactionDeviceNo' => 1, 'TransactionID' => 1, 'ItemDeviceNo' => 1, 'ItemID' => 101, 'Qty' => 10, 'SubTotal' => 50000],
            ['PerusahaanNo' => 639, 'DeviceID' => 1356, 'TransactionDeviceNo' => 2, 'TransactionID' => 2, 'ItemDeviceNo' => 2, 'ItemID' => 201, 'Qty' => 5, 'SubTotal' => 25000],
        ]);
    }
}
