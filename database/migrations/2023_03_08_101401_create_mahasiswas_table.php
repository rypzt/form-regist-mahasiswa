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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nik',20);
            $table->string('nama',100);
            $table->string('jenis_kelamin',20);
            $table->string('tempat_lahir',30);
            $table->date('tgllhr');
            $table->string('bb',20);
            $table->string('tb',20);
            $table->string('agama',20);
            $table->string('goldar',20);
            $table->string('status',20);
            $table->string('alamat',100);
            $table->string('kel',20);
            $table->string('kec',20);
            $table->string('kota',20);
            $table->string('prov',20);
            $table->string('negara',20);
            $table->string('no_hp',20);
            $table->string('email',30);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
};
