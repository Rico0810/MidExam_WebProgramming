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
        Schema::create('history1s', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal');
            $table->string('invoice');
            $table->string('coffee_name');
            $table->string('gambar');
            $table->text('coffee_desc');
            $table->string('coffee_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history1s');
    }
};
