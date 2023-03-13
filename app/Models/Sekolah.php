<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $table = "sekolah";
    protected $primarykey = "id_sek";
    protected $fillable = [
        'id',
        'sd',
        'smp',
        'sma',
        'kuliah'
    ];

    
}
?>