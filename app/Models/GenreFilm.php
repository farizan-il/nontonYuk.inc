<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreFilm extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'GenreFilm';
    protected $primaryKey = 'genreFilmId';
    protected $fillable = [
        'genreFilmId',
        'namaGenre',
        'daftar_film_id'
    ];

    public function film()
    {
        return $this->belongsTo(DaftarFilm::class, 'daftar_film_id', 'daftarFilmId');
    }
}
