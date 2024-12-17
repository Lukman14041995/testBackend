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
        Schema::create('masteritem', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('PerusahaanNo');
            $table->integer('DeviceID');
            $table->integer('DeviceNo');
            $table->integer('CategoryID');
            $table->integer('ItemID');
            $table->string('ItemName');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masteritem');
    }
};
