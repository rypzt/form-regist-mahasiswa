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
        Schema::create('datakeluarga', function (Blueprint $table) {
            $table->id_dakel();
            $table->id();
            $table->string('nama_ayah',30);
            $table->string('pek_ayah',30);
            $table->string('no_ayah',30);
            $table->string('nama_ibu',30);
            $table->string('pek_ibu',30);
            $table->string('no_ibu',30);
            $table->string('saudara1',30);
            $table->string('saudara2',30);
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
        Schema::dropIfExists('datakeluarga');
    }
};
