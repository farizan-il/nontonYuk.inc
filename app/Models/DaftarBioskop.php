<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarBioskop extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'DaftarBioskop';
    protected $primaryKey = 'daftarBioskopId';
    protected $fillable = [
        'namaBioskop',
        'kategori_bioskop_id',
        'lokasi_bioskop_id'
    ];

    public function kategori () {
        return $this->belongsTo(KategoriBioskop::class, 'kategori_bioskop_id', 'kategoriBioskopId');
    }

    public function lokasi () {
        return $this->belongsTo(LokasiBioskop::class, 'lokasi_bioskop_id', 'lokasiBioskopId');
    }

    public function teater () {
        return $this->hasMany(DaftarTeater::class, 'daftar_bioskop_id');
    }
}
