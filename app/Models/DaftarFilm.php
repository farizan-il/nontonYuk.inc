<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarFilm extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'DaftarFilm';
    protected $primaryKey = 'daftarFilmId';
    protected $fillable = [
        'daftarFilmId',
        'judulFilm',
        'sampulFilm',
        'sinopsis',
        'durasi',
        'rating',
        'produser',
        'director',
        'penulis',
        'pemeran',
        'distributor',
        'genre_film_id'
    ];

    public function genre()
    {
        return $this->belongsTo(GenreFilm::class, 'genre_film_id', 'genreFilmId');
    }
}
