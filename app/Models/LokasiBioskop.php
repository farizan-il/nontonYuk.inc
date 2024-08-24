<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LokasiBioskop extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'LokasiBioskop';
    protected $primaryKey = 'lokasiBioskopId';
    protected $fillable = [
        'provinsi',
        'kota',
        'user_credentials_id'
    ];

    public function credentials (){
        return $this->belongsTo(UserCredentials::class, 'user_credentials_id', 'credentialsId');
    }
}
