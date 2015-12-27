<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct() 
    {
        parent::__construct();
		$this->load->model('m_home');
    }

	public function index(){
		$data['header']='comp/header';
		$data['footer']='comp/footer';
		$data['content']='main/home';
		$this->load->view('main/template',$data);
	}
	
	public function signin_form(){
		$this->load->view('pop_up/sign_in');	
	}
	
	public function sign_in($username=NULL,$password=NULL) {
		$par_username = ($username == NULL) ? $this->input->post('username') : $username;
		$par_password = ($password == NULL) ? $this->input->post('password') : $password;
		$get_member = $this->m_home->sign_in($par_username,$par_password);
		
		if($get_member->num_rows() == 1) {
			$user_data = $get_member->row();
			$session_data = array(
				"forex_login" => TRUE,
				"id_member" => $user_data->id_member,
				"member_last_name" => $user_data->last_name
			);
			$this->session->set_userdata($session_data);
			redirect('member/account_verification');
		} else {
			$this->session->set_flashdata('message','Login Failed');
		}
	}
	
	public function sign_out() {
		$session_data = array(
			"forex_login" => "",
			"id_member" => "",
			"member_last_name" => ""
		);
		$this->session->set_userdata($session_data);
		redirect('home');
	}
	
	public function save($id_member=-1){
		$id_refferer = (! $this->input->cookie('id_refferer')) ? $this->m_home->refferer()->row()->id_member : $this->input->cookie('id_refferer');
		
		//echo $id_refferer;
		$db_data = array(
			"id_refferer" => $id_refferer,
			"username" => $this->input->post('username'),
			"email" => $this->input->post('email'),
			"password" => md5($this->input->post('password')),
			"pin" => $this->input->post('pin'),
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
			"fb_link" => $this->input->post('fb_link')
		);
		if($id_member == -1) {
			$this->m_home->register($db_data);
			$this->sign_in($this->input->post('username'),$this->input->post('password'));
		}
		else
		$this->m_home->update_member($db_data);
		redirect('home');
	}
	
	public function fake_login() {
		$this->sign_in('chico','manusia');
	}
}