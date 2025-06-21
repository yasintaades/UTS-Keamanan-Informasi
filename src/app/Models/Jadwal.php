<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal';

    protected $fillable = [
        'mobil_id',
        'supir_id',
        'tanggal_jalan',
        'tujuan',
    ];

    public function mobil()
    {
        return $this->belongsTo(Mobil::class);
    }

    public function supir()
    {
        return $this->belongsTo(Supir::class);
    }
}
