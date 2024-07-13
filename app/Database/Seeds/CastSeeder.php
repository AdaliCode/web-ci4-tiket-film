<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class CastSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        function getCast($name, $cover = 'defaultCast.jpeg')
        {
            return ['name' => $name, 'cover' => $cover,  'created_at' => Time::now(), 'updated_at' => Time::now()];
        }
        array_push($data, getCast('Lee Je-Hoon'));
        array_push($data, getCast('Koo Kyo-Hwan'));
    }
}
