<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
	
	function check_user($username,$password) {
		$this->db->where('username',$username)
		->where('password',md5($password))
		->where('level_status','1');
		$get_user = $this->db->get('member');
		if($get_user->num_rows() == 1)
			return TRUE;
		return FALSE;
	}
}