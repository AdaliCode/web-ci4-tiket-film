<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class MovieCastSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        function getMovieCast($movie_id, $cast_id)
        {
            return ['movie_id' => $movie_id, 'cast_id' => $cast_id,  'created_at' => Time::now(), 'updated_at' => Time::now()];
        }
        array_push($data, getMovieCast(3, 1));
        array_push($data, getMovieCast(3, 2));
        array_push($data, getMovieCast(2, 3));
        array_push($data, getMovieCast(2, 4));
        $this->db->table('movie_casts')->insertBatch($data);
    }
}
