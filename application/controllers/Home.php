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
	
	public function sign_in() {
		extract($_POST);
		$get_member = $this->m_home->sign_in($username,$password);
		
		if($get_member->num_rows() == 1) {
			$user_data = $get_member->row();
			$session_data = array(
				"forex_login" => TRUE,
				"id_member" => $user_data->id_member,
				"username" => $user_data->username
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
		if($this->m_home->cek_username_email($this->input->post('email'))->num_rows()!=0){
			$this->session->set_flashdata('message','Email alredy registered');
			redirect('home');
		}
		if($this->m_home->cek_username_email($this->input->post('username'),'username')->num_rows()!=0){
			$this->session->set_flashdata('message','Username alredy registered');
			redirect('home');
		}
		
		if(! $this->input->cookie('id_refferer')){
			$id_refferer=$this->m_home->refferer();
			if($id_refferer->num_rows()!=0){
				$id_refferer=$id_refferer->row();
				$this->m_home->update_member($id_refferer->id_member, array('flag'=>($id_refferer->flag-1)));
				$id_refferer=$id_refferer->id_member;
			}
			else
				$id_refferer=NULL;
		}else{
			$id_refferer=$this->input->cookie('id_refferer');
		}
		
		$db_data = array(
			"id_refferer" => $id_refferer,
			"username" => $this->input->post('username'),
			"email" => $this->input->post('email'),
			"password" => md5($this->input->post('password')),
			"first_name" => $this->input->post('first_name'),
			"last_name" => $this->input->post('last_name'),
		);
		if($id_member == -1) {
			$this->m_home->register($db_data);
			$get_member = $this->m_home->sign_in($db_data['username'],$db_data['password']);
			
			if($get_member->num_rows() == 1) {
				$user_data = $get_member->row();
				$session_data = array(
					"forex_login" => TRUE,
					"id_member" => $user_data->id_member,
					"username" => $user_data->username
				);
				$this->session->set_userdata($session_data);
				redirect('member/account_verification');
			} else {
				$this->session->set_flashdata('message','Login Failed');
			}
		}
		else
		$this->m_home->update_member($db_data);
		redirect('home');
	}
	
	public function referral($id_referral=-1) {
		$cookie = array(
			'name'   => 'id_referral',
			'value'  => "$id_referral",
			'expire' => '0'
		);
		
		$this->input->set_cookie($cookie);
		redirect('home');
	}	
}