<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Secure_area extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('forex_login') == FALSE)
		redirect('home');
	}
}
?>