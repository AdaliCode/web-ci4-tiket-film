<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Movie extends Migration
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
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'unique'     => true
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'cast' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'cover' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'release' => [
                'type' => 'DATE',
            ],
            'hour_duration' => [
                'type' => 'INT',
                'constraint' => 2,
            ],
            'minutes_duration' => [
                'type' => 'INT',
                'constraint' => 2,
            ],
            'trailer' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
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
        $this->forge->createTable('movies');
    }

    public function down()
    {
        $this->forge->dropTable('movies');
    }
}
