<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DaftarFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genre = (string) Str::uuid();
        DB::table('GenreFilm')->insert([
            'genreFilmId' => $genre,
            'namaGenre' => 'Action',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Data film yang akan dimasukkan
        $films = [
            [
                'judulFilm' => 'Inception',
                'sampulFilm' => 'inception.jpg',
                'sinopsis' => 'Seorang pencuri yang sangat terampil dalam ekstraksi informasi dari mimpi orang lain berusaha untuk melakukan tugas yang tampaknya tidak mungkin: menanamkan ide ke dalam pikiran target.',
                'durasi' => '148 minutes',
                'rating' => 'PG',
                'produser' => 'Emma Thomas',
                'director' => 'Christopher Nolan',
                'penulis' => 'Christopher Nolan',
                'pemeran' => 'Leonardo DiCaprio, Joseph Gordon-Levitt, Ellen Page',
                'distributor' => 'Warner Bros.',
            ],
            [
                'judulFilm' => 'The Matrix',
                'sampulFilm' => 'the_matrix.jpg',
                'sinopsis' => 'Programmer komputer menemukan bahwa dunia yang dia tinggali adalah ilusi yang dikendalikan oleh mesin dan bergabung dengan pemberontak untuk melawan mereka.',
                'durasi' => '136 minutes',
                'rating' => 'NC-17',
                'produser' => 'Joel Silver',
                'director' => 'The Wachowskis',
                'penulis' => 'The Wachowskis',
                'pemeran' => 'Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss',
                'distributor' => 'Warner Bros.',
            ],
            [
                'judulFilm' => 'The Shawshank Redemption',
                'sampulFilm' => 'the_shawshank_redemption.jpg',
                'sinopsis' => 'Seorang bankir yang dihukum atas pembunuhan istrinya dan kekasihnya membentuk persahabatan dengan seorang narapidana lain di penjara Shawshank.',
                'durasi' => '142 minutes',
                'rating' => 'NC-17',
                'produser' => 'Frank Darabont',
                'director' => 'Frank Darabont',
                'penulis' => 'Frank Darabont',
                'pemeran' => 'Tim Robbins, Morgan Freeman',
                'distributor' => 'Columbia Pictures',
            ],
            [
                'judulFilm' => 'The Godfather',
                'sampulFilm' => 'the_godfather.jpg',
                'sinopsis' => 'Kisah keluarga mafia Corleone dan bagaimana kepala keluarga, Don Vito Corleone, berjuang untuk melindungi keluarganya.',
                'durasi' => '175 minutes',
                'rating' => 'PG',
                'produser' => 'Albert S. Ruddy',
                'director' => 'Francis Ford Coppola',
                'penulis' => 'Mario Puzo, Francis Ford Coppola',
                'pemeran' => 'Marlon Brando, Al Pacino, James Caan',
                'distributor' => 'Paramount Pictures',
            ],
            [
                'judulFilm' => 'Pulp Fiction',
                'sampulFilm' => 'pulp_fiction.jpg',
                'sinopsis' => 'Film ini menceritakan beberapa kisah yang saling terkait dalam dunia kejahatan Los Angeles yang penuh warna.',
                'durasi' => '154 minutes',
                'rating' => 'R',
                'produser' => 'Lawrence Taub',
                'director' => 'Quentin Tarantino',
                'penulis' => 'Quentin Tarantino',
                'pemeran' => 'John Travolta, Uma Thurman, Samuel L. Jackson',
                'distributor' => 'Miramax',
            ],
            [
                'judulFilm' => 'Interstellar',
                'sampulFilm' => 'interstellar.jpg',
                'sinopsis' => 'Seorang pilot pesawat luar angkasa bersama timnya melakukan perjalanan melalui lubang cacing di luar tata surya untuk mencari tempat tinggal baru bagi umat manusia.',
                'durasi' => '169 minutes',
                'rating' => 'NC-17',
                'produser' => 'Emma Thomas',
                'director' => 'Christopher Nolan',
                'penulis' => 'Jonathan Nolan, Christopher Nolan',
                'pemeran' => 'Matthew McConaughey, Anne Hathaway, Jessica Chastain',
                'distributor' => 'Paramount Pictures',
            ],
            [
                'judulFilm' => 'Fight Club',
                'sampulFilm' => 'fight_club.jpg',
                'sinopsis' => 'Seorang pria yang tidak puas dengan hidupnya menemukan tujuan baru melalui klub pertarungan bawah tanah yang radikal.',
                'durasi' => '139 minutes',
                'rating' => 'PG-13',
                'produser' => 'Art Linson',
                'director' => 'David Fincher',
                'penulis' => 'Jim Uhls',
                'pemeran' => 'Brad Pitt, Edward Norton, Helena Bonham Carter',
                'distributor' => '20th Century Fox',
            ],
        ];

        foreach ($films as $film) {
            DB::table('DaftarFilm')->insert([
                'daftarFilmId' => (string) Str::uuid(),
                'judulFilm' => $film['judulFilm'],
                'sampulFilm' => $film['sampulFilm'],
                'sinopsis' => $film['sinopsis'],
                'durasi' => $film['durasi'],
                'rating' => $film['rating'],
                'produser' => $film['produser'],
                'director' => $film['director'],
                'penulis' => $film['penulis'],
                'pemeran' => $film['pemeran'],
                'distributor' => $film['distributor'],
                'genre_film_id' => $genre,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
