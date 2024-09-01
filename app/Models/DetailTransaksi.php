<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'DetailTransaksi';
    protected $primaryKey = 'detailTransaksiId';
    protected $fillable = [
        'detailTransaksiId',
        'namaPembeli',
        'username',
        'email',
        'judulFilm',
        'namaBioskop',
        'namaTeater',
        'tanggalTayang',
        'kolomKursi',
        'nomorKursi',
        'jamTayang',
        'metode_pembayaran_id',
    ];
}
