<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;


class Supir extends Model
{
     use HasFactory;

    protected $table = 'supir';

    protected $fillable = [
        'nama',
        'nomor_hp',
        'sim',
        'alamat',
    ];
     public function setSimAttribute($value)
    {
        $this->attributes['sim'] = Crypt::encryptString($value);
    }

    // Accessor: dekripsi saat baca dari DB
    public function getSimAttribute($value)
    {
        try {
            return Crypt::encryptString($value);
        } catch (\Exception $e) {
            return $value;
        }
    }


    public function mobil()
    {
        return $this->hasMany(Mobil::class);
    }
    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }

}
