<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodePembayaran extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'MetodePembayaran';
    protected $primaryKey = 'metodePembayaranId';
    protected $fillable = [
        'metode',
        'noReferensi',
        'namaReferensi'
    ];
}
