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
        // total film 21
        array_push($data, getMovie('Despicable Me 4', hour_duration: 1, minutes_duration: 34));
        array_push($data, getMovie('Ipar adalah Maut', minutes_duration: 11));
        array_push($data, getMovie('Escape', 'escape.jpeg', hour_duration: 1, minutes_duration: 34, trailer: '9mPzDILlt5g'));
        array_push($data, getMovie('Twisters', minutes_duration: 2));
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 17; $i++) {
            array_push($data, getMovie($faker->sentence(2)));
        }
        $this->db->table('movies')->insertBatch($data);
    }
}
