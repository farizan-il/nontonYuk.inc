<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasTeater extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'KelasTeater';
    protected $primaryKey = 'kelasTeaterId';
    protected $fillable = [
        'namaKelas',
        'harga'
    ];
}
