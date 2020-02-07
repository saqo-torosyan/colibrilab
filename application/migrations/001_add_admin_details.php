<?php
defined('BASEPATH') OR exit('Доступ к скриптам запрещен.');

class Migration_Add_admin_details extends CI_Migration
{

	public function up()
	{
		$data = [
			'username' => 'admin',
			'password' => md5('123'),
		];

		$this->db->insert('admin', $data);
	}

	public function down(){
		$this->db->where('password', md5('123'));
		$this->db->delete('admin');
	}
}