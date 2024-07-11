<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class MovieSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        function getMovie($title, $cover = 'defaultCover.jpg', $release = '2024/7/10', $hour_duration = 2, $minutes_duration = 59, $trailer = 'LtNYaH61dXY', $cast = 'Lee Je Hoon')
        {
            $slug = strtolower(url_title($title, '-'));
            return ['title' => $title, 'slug' => $slug, 'cast' => $cast, 'cover' => $cover, 'release' => $release, 'hour_duration' => $hour_duration, 'minutes_duration' => $minutes_duration, 'trailer' => $trailer, 'created_at' => Time::now(), 'updated_at' => Time::now()];
        }
        array_push($data, getMovie('Despicable Me 4'));
        array_push($data, getMovie('Ipar adalah Maut'));
        array_push($data, getMovie('Escape', 'escape.jpeg', trailer: '9mPzDILlt5g'));
        array_push($data, getMovie('Twisters'));
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 6; $i++) {
            array_push($data, getMovie($faker->sentence(2)));
        }
        $this->db->table('movies')->insertBatch($data);
    }
}
