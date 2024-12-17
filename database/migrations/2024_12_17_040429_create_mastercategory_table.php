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
        Schema::create('mastercategory', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('PerusahaanNo');
            $table->integer('DeviceID');
            $table->integer('CategoryDeviceNo');
            $table->integer('CategoryID');
            $table->string('CategoryName');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mastercategory');
    }
};
