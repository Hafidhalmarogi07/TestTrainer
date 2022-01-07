<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ListSeeder extends Seeder
{
    public function run()
    {
        $data = [
			[
				'description'          =>  'Moster Group',
			],
			[
				'description'          =>  'Test',
			],
			[
				'description'          =>  'BCA Syariah',
			]
		];
		$this->db->table('todo')->insertBatch($data);
    }
}
