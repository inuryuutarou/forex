<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if( ! $this->session->userdata('admin_forex_login'))
			$this->load->view('admin/login');
		else
			redirect('admin');
	}

	public function authenticate() {
		$this->load->model(array('M_login','M_admin'));
		$check_user = $this->M_login->check_user($this->input->post('username'),$this->input->post('password'));
		if($check_user->num_rows() != 0) {
			$user_data = $check_user->row();
			$session_data = array(
				'admin_forex_login' => TRUE,
				'id_user'	 => $user_data->id_member,
				'email'	 => $user_data->email,
				'username'	 => $user_data->username
			);
			$this->session->set_userdata($session_data);
			redirect('admin');
		}
		redirect('login');
	}
}