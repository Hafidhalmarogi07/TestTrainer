<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Todo extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'note'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
		]);

		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('todos', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('todos');
    }
}
