<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TestSeeder extends Seeder
{
    public function run()
    {
        $this->call('MovieSeeder');
        $this->call('CastSeeder');
        $this->call('MovieCastSeeder');
    }
}
