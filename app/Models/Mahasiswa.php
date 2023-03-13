<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";
    protected $primarykey = "id";
    protected $fillable = [
        'id',
        'nik',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tgllhr',
        'bb',
        'tb',
        'agama',
        'goldar',
        'status',
        'alamat',
        'kel',
        'kec',
        'kota',
        'prov',
        'negara',
        'no_hp',
        'email'
    ];
    

}

?>
