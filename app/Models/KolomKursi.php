<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class KolomKursi extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'KolomKursi';
    protected $primaryKey = 'kolomKursiId';
    protected $fillable = [
        'kolom'
    ];

    public function detailkursi() {
        return $this->hasMany(DetailKursi::class, 'kolom_kursi_id');
    }
}

