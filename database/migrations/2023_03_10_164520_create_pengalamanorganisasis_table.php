<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengalamanorganisasi', function (Blueprint $table) {
            $table->id_pengalaman();
            $table->id();
            $table->string('organisasi1',30);
            $table->string('tahun1',30);
            $table->string('jabatan1',30);
            $table->string('organisasi2',30);
            $table->string('tahun2',30);
            $table->string('jabatan2',30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengalamanorganisasi');
    }
};
