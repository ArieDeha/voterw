<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class VoteDetails extends Migration
{
	public function up()
	{
		//
		$this->forge>addField(
			[
				'id'    => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true
				],
				'dpt_count' => [
					'type'          => 'INT',
					'constraint'     => 3,
					'unsigned'      => true,
					'auto_increment'=> false,
					'nullable'	=> false,
					'default'	=> '0'
				],
				'unused_vote_paper' => [
					'type'		=> 'INT',
					'constraint'	=> 3,
					'unsigned'	=> true,
					'default'	=> '0',
					'nullable'	=> false
				],
				'collected_vote_paper' => [
					'type'          => 'INT',
					'constraint'     => 3,
					'unsigned'      => true,
					'auto_increment'=> false,
					'nullable'	=> false,
					'default'	=> '0'
				],
				'accepted_vote_1'	=> [
					'type'          => 'INT',
					'constraint'     => 3,
					'unsigned'      => true,
					'auto_increment'=> false,
					'nullable'      => false,
					'default'       => '0'
				],
				'accepted_vote_2'	=> [
					'type'          => 'INT',
					'constraint'     => 3,
					'unsigned'      => true,
					'auto_increment'=> false,
					'nullable'      => false,
					'default'       => '0'
				],
				'rejected_vote'		=> [
					'type'          => 'INT',
					'constraint'     => 3,
					'unsigned'      => true,
					'auto_increment'=> false,
					'nullable'      => false,
					'default'       => '0'
				],
				'rejection_notes'	=> [
					'type'		=> 'TEXT',
					'default'	=> ' ' // spaced
				],
				'final_notes'		=> [
					'type'		=> 'TEXT',
					'default'	=> ' '
				]

			]
		);
		$this->forge->createTable('vote_details');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('vote_details');

	}
}
