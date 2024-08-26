<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarTeater extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'DaftarTeater';
    protected $primaryKey = 'daftarTeaterId';
    protected $fillable = [
        'namaTeater',
        'kelas_teater_id',
        'daftar_bioskop_id'
    ];

    public function kelas(){
        return $this->belongsTo(KelasTeater::class, 'kelas_teater_id', 'kelasTeaterId');
    }

    public function bioskop(){
        return $this->belongsTo(DaftarBioskop::class, 'daftar_bioskop_id', 'daftarBioskopId');
    }
}

