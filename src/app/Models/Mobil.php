<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $table = 'mobil';

    protected $fillable = [
        'nama_mobil',
        'plat_nomor',
        'warna',
        'supir_id',
    ];

    public function supir()
    {
        return $this->belongsTo(Supir::class);
    }
    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }

}
