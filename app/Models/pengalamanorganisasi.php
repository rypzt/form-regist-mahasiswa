<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengalamanorganisasi extends Model
{
    protected $table = "pengalaman";
    protected $primarykey = "id_pengalaman";
    protected $fillable = [
        'id',
        'organisasi1',
        'tahun1',
        'jabatan1',
        'organisasi2',
        'tahun2',
        'jabatan2'
    ];
}
