<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KandidatVote extends Migration
{
	public function up()
	{
		//
		$this->forge>addField(
			[
				'id'	=> [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true
				],
				'count'	=> [
					'type'		=> 'INT',
					'contraint'	=> 3
					'unsigned'	=> true,
					'auto_increment'=> false
				]
			]
		);
		$this->forge->createTable('kandidat_vote');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
		$this->forge->dropTable('kandidat_voto');
	}
}
