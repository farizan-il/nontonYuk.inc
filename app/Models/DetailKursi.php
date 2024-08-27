<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKursi extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'DetailKursi';
    protected $primaryKey = 'detailKursiId';
    protected $fillable = [
        'kolom_kursi_id',
        'nomor_kursi_id',
        'row',
        'seat',
        'isBooking',
        'daftar_teater_id'
    ];

    public function kolom(){
        return $this->belongsTo(KolomKursi::class, 'kolom_kursi_id', 'kolomKursiId');
    }

    public function nomor(){
        return $this->belongsTo(NomorKursi::class, 'nomor_kursi_id', 'nomorKursiId');
    }

    public function teater(){
        return $this->belongsTo(DaftarTeater::class, 'daftar_teater_id', 'daftarTeaterId');
    }
}
