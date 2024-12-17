<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('saleitemdetail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('PerusahaanNo');
            $table->integer('DeviceID');
            $table->integer('TransactionDeviceNo');
            $table->integer('TransactionID');
            $table->integer('ItemDeviceNo');
            $table->integer('ItemID');
            $table->integer('Qty')->default(0);
            $table->decimal('SubTotal', 15, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saleitemdetail');
    }
};
