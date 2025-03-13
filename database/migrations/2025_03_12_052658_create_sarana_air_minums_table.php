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
        Schema::create('sarana_air_minums', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kecamatan');
            $table->string('puskesmas');
            $table->integer('jumlah_desa_kelurahan');
            $table->integer('jumlah_sarana_air_minum');
            $table->integer('jumlah_sarana_air_aman');
            $table->float('jumlah_persentase');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sarana_air_minums');
    }
};
