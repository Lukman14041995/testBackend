<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterCategory extends Model
{
    protected $table = 'mastercategory';
    protected $fillable = [
        'PerusahaanNo',
        'DeviceID',
        'CategoryDeviceNo',
        'CategoryID',
        'CategoryName'
    ];
}
