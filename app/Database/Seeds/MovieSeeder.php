<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class MovieSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        function getMovie($title)
        {
            $slug = strtolower(url_title($title, '-'));
            return ['title' => $title, 'slug' => $slug, 'created_at' => Time::now(), 'updated_at' => Time::now()];
        }
        array_push($data, getMovie('Despicable Me 4'));
        array_push($data, getMovie('Ipar adalah Maut'));
        array_push($data, getMovie('Escape'));
        array_push($data, getMovie('Twisters'));
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 6; $i++) {
            array_push($data, getMovie($faker->sentence(2)));
        }
        $this->db->table('movies')->insertBatch($data);
    }
}
