<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_secure_area extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('admin_forex_login') == FALSE)
		redirect('login');
	}
}
?>