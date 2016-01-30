<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secret_reg extends CI_Controller {
	
	function __construct() 
    {
        parent::__construct();
		$this->load->model('m_home');
    }

	public function index(){
		$this->load->view('main/register_secret');	
	}
	
	public function save(){
		if($this->m_home->cek_username_email($this->input->post('email'))->num_rows()!=0){
			$this->session->set_flashdata('message','Email alredy registered');
			redirect('secret_reg');
		}
		if($this->m_home->cek_username_email($this->input->post('username'),'username')->num_rows()!=0){
			$this->session->set_flashdata('message','Username alredy registered');
			redirect('secret_reg');
		}
		$id_refferer=NULL;
		$db_data = array(
			"id_refferer" => $id_refferer,
			"username" => $this->input->post('username'),
			"email" => $this->input->post('email'),
			"password" => md5($this->input->post('password')),
			"first_name" => $this->input->post('first_name'),
			"last_name" => $this->input->post('last_name'),
		);
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

			$to = $this->input->post('email');
			$sender_name = "no-reply@forexglobalservice.com";		
			$subject = 'Registration complete';		
			$from = "no-reply@forexglobalservice.com";		
			$headers = 'To: <'.$to.'>' . "\r\n";		
			$headers .= 'From: '.$sender_name."\r\n";		
			
			$message = "Dear, ".$this->input->post('first_name')." \n";
			$message.= "Terimakasih telah mendaftar pada forexglobalservice.com \n";
			$message.= "Silahkan melakukan login sebagai member pada website forexglobalservice.com menggunakan email dan password sesuai data registrasi anda \n";
			$message.= "Username: ".$this->input->post('username')." \n";
			$message.= "Email: ".$this->input->post('email')." \n";
			$message.= "Nama: ".$this->input->post('first_name')." ".$this->input->post('last_name')." \n";
			$message.= "\n \n \n";
			$message.= "Team FGS, \n forexglobalservice.com";
			$message = str_replace("\n.", "\n..", $message);
			
			$send = mail($to, $subject, $message, $headers);
			if($send)
			{$this->session->set_flashdata('msg',"Message sent");}
			redirect('member/account_verification');
		}
		redirect('home');
	}
}