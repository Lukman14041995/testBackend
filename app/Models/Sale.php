<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sale';
    protected $fillable = [
        'PerusahaanNo',
        'DeviceID',
        'DeviceNo',
        'TransactionID',
        'SaleDate'
    ];
}
