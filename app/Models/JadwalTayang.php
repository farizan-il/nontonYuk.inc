<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalTayang extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'JadwalTayang';
    protected $primaryKey = 'jadwalTayangId';
    protected $fillable = [
        'jamTayang',
        'tanggal',
        'daftar_film_id',
        'daftar_teater_id'
    ];

    public function film(){
        return $this->belongsTo(DaftarFilm::class, 'daftar_film_id', 'daftarFilmId');
    }

    public function teater(){
        return $this->belongsTo(DaftarTeater::class, 'daftar_teater_id', 'daftarTeaterId');
    }
}
