<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'Transaksi';
    protected $primaryKey = 'transaksiId';
    protected $fillable = [
        'jumlahTiket',
        'totalHarga',
        'buktiPembayaran',
        'statusTransaksi',
        'detail_transaksi_id',
        'jam_mulai_id',
        'user_credentials_id'
    ];

    public function detailtransaksi(){
        return $this->belongsTo(DetailKursi::class, 'detail_transaksi_id', 'detailTransaksiId');
    }

    public function jammulai(){
        return $this->belongsTo(JadwalTayang::class, 'jam_mulai_id', 'jadwalTayangId');
    }
}
