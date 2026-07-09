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
        Schema::create('ibu_hamils', function (Blueprint $table) {

            $table->id();

            $table->string('nik')->unique();

            $table->string('nama_ibu');

            $table->date('tanggal_lahir');

            $table->integer('usia_kehamilan');

            $table->date('hpht');

            $table->integer('berat_badan');

            $table->integer('tinggi_badan');

            $table->text('alamat');

            $table->text('keterangan')->nullable();

            $table->timestamps();

        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibu_hamils');
    }
};