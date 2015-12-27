<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
		$this->load->model('m_home');
    }
	
	public function index(){
		
	}
	
	public function save($id_member=-1){
		$db_data = array(
			"id_refferer" => $this->input->post('id_refferer'),
			"username" => $this->input->post('username'),
			"email" => $this->input->post('email'),
			"password" => $this->input->post('password'),
			"pin" => $this->input->post('pin'),
			"flag" => $this->input->post('flag'),
			"first_name" => $this->input->post('first_name'),
			"last_name" => $this->input->post('last_name'),
			"country" => $this->input->post('country'),
			"province" => $this->input->post('province'),
			"city" => $this->input->post('city'),
			"address" => $this->input->post('address'),
			"postal" => $this->input->post('postal'),
			"id_card_number" => $this->input->post('id_card_number'),
			"phone" => $this->input->post('phone'),
			"bank_name" => $this->input->post('bank_name'),
			"bank_branch" => $this->input->post('bank_branch'),
			"bank_acc_name" => $this->input->post('bank_acc_name'),
			"fb_username" => $this->input->post('fb_username'),
			"fb_link" => $this->input->post('fb_link'),
			"valid" => '0',
			"valid_date" => '',
			"level_status" => $this->input->post('level_status')
		);
		if($id_member == -1)
		$this->m_home->register($db_data);
		else
		$this->m_home->update_member($db_data);
		redirect('Member');
	}
	
	public function sign_in() {
		$get_member = $this->m_home->sign_in($this->input->post('username'),$this->input->post('password'));
		if($get_member->num_rows() == 1) {
			$user_data = $get_member->row();
			$session_data = array(
				"is_logged_in" => TRUE,
				"id_user" => $user_data->id_member,
				"member_last_name" => $user_data->last_name
			);
			$this->session->set_userdata($session_data);
		} else {
			$this->session->set_flashdata('message','Login Failed');
		}
	}
	
	public function sign_out() {
		$session_data = array(
			"is_logged_in" => TRUE,
			"id_user" => $user_data->id_member,
			"member_last_name" => $user_data->last_name
		);
		$this->session->unset_userdata($session_data);
	}
}