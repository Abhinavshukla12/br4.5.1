<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateReservationsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_id'           => [
                'type'           => 'INT',
                'unsigned'       => true,
            ],
            'train_number'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '10',
            ],
            'departure_station' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'arrival_station'   => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'departure_date'    => [
                'type'           => 'DATE',
            ],
            'seat_number'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '10',
            ],
            'created_at'        => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at'        => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('reservations');
    }

    public function down()
    {
        $this->forge->dropTable('reservations');
    }
}
