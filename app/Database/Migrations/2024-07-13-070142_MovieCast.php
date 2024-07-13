<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MovieCast extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'movie_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'constraint' => 11,
            ],
            'cast_id' => [
                'unsigned'   => true,
                'constraint' => 11,
                'type'       => 'INT',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('movie_id', 'movies', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('cast_id', 'casts', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('movie_casts');
    }

    public function down()
    {
        $this->forge->dropTable('movie_casts');
    }
}
