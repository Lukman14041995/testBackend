<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleItemDetail extends Model
{
    protected $table = 'saleitemdetail';
    protected $fillable = [
        'PerusahaanNo',
        'DeviceID',
        'TransactionDeviceNo',
        'TransactionID',
        'ItemDeviceNo',
        'ItemID',
        'Qty',
        'SubTotal'
    ];
}
