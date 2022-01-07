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
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'description'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
		]);

		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('todo', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('todo');
    }
}
