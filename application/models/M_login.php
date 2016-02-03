<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
	
	function check_user($username,$password) {
		return $this->db->where("(username = '$username' OR email = '$username')")
				->where('password',md5($password))
				->where('level_status','1')
				->where("deleted",0)
		 		->get('member');
	}
}