<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterItem extends Model
{
    protected $table = 'masteritem';
    protected $fillable = [
        'PerusahaanNo',
        'DeviceID',
        'DeviceNo',
        'CategoryID',
        'ItemID',
        'ItemName'
    ];
}
