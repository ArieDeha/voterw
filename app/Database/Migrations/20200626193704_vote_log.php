<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class VoteLog extends Migration
{
	public function up()
	{
		//
		$this->forge->addField(
			[
				'id'    => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true
				],
				'vote' => [
					'type'          => 'TINYINT',
					'contraint'     => 1
					'unsigned'      => true,
					'auto_increment'=> false
				],
				'nonce'    => [
					'type'           => 'VARCHAR',
					'constraint'     => 20,
					'unique'         => true 
				],
			]
		);
		$this->forge->addField('`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
		$this->forge->createTable('vote_log');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
		$this->forge->dropTable('vote_log');
	}
}
