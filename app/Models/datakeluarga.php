<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datakeluarga extends Model
{
    protected $table = "datakeluarga";
    protected $primarykey = "id_dakel";
    protected $fillable = [
        'id',
        'nama_ayah',
        'pek_ayah',
        'no_ayah',
        'nama_ibu',
        'pek_ibu',
        'no_ibu',
        'saudara1',
        'saudara2'
    ];

    public function datakeluarga(){
        return $this->hasMany(datakeluarga::class);
    }
    
}
