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
        Schema::create('nilai_mhs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',45);
            $table->string('nim');
            $table->string('jurusan_id');
            $table->string('kota',50);
            $table->string('provinsi',50);
            $table->string('matakuliah_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_mhs');
    }
};
