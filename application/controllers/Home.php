<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct() 
    {
        parent::__construct();
		date_default_timezone_set('Asia/Makassar');
		$this->load->model('m_home');
    }

	public function index(){
		$this->load->model('m_captcha');
		$this->session->set_userdata('captcha',$this->m_captcha->simple_php_captcha());
		$data['header']='comp/header';
		$data['footer']='comp/footer';
		$data['content']='main/home';
		$data['active']='home';
		$this->load->view('main/template',$data);
	}
	
	public function signin(){
		if($this->session->userdata('forex_login') == TRUE)
			redirect('member');
		if($this->session->userdata('admin_forex_login') == TRUE)
			redirect('admin');

		$data['header']='comp/header';
		$data['footer']='comp/footer';
		$data['content']='main/login';
		$data['active']='home';
		$this->load->view('main/template',$data);	
	}
	
	public function register(){
		if($this->session->userdata('forex_login') == TRUE)
			redirect('member');
		if($this->session->userdata('admin_forex_login') == TRUE)
			redirect('admin');
			
		$this->load->model('m_captcha');
		$this->session->set_userdata('captcha',$this->m_captcha->simple_php_captcha());
		$data['header']='comp/header';
		$data['footer']='comp/footer';
		$data['content']='main/register';
		$data['active']='home';
		$this->load->view('main/template',$data);	
	}
	
	public function sign_in() {
		if($this->session->userdata('forex_login') == TRUE)
			redirect('member');
		if($this->session->userdata('admin_forex_login') == TRUE)
			redirect('admin');
		extract($_POST);
		$get_member = $this->m_home->sign_in($username,$password);
		if($get_member->num_rows() == 1) {
			$user_data = $get_member->row();
			$session_data = array(
				"forex_login" => TRUE,
				"id_member" => $user_data->id_member,
				"username" => $user_data->username,
				'email'	 => $user_data->email,
				"valid" => $user_data->valid
			);
			$this->session->set_userdata($session_data);
			redirect('member/account_verification');
		} else {
			$this->session->set_flashdata('message','Login Failed');
			redirect('home/signin');
		}
	}
	
	public function sign_out() {
		$session_data = array(
			"forex_login" => "",
			"id_member" => "",
			"member_last_name" => ""
		);
		$this->session->set_userdata($session_data);
		$this->session->sess_destroy();
		redirect('home');
	}
	
	public function save($id_member=-1){
		if($this->session->userdata('forex_login') == TRUE)
			redirect('member');
		if($this->session->userdata('admin_forex_login') == TRUE)
			redirect('admin');
		
		if($this->m_home->cek_username_email($this->input->post('email'))->num_rows()!=0){
			$this->session->set_flashdata('message','Email alredy registered');
			redirect('home/register');
		}
		if($this->m_home->cek_username_email($this->input->post('username'),'username')->num_rows()!=0){
			$this->session->set_flashdata('message','Username alredy registered');
			redirect('home/register');
		}
		$answer = strtoupper($this->input->post('captcha'));
		$code=$this->session->userdata('captcha');
		$word = strtoupper($code['code']);
		if($word!=$answer){
			$this->session->set_flashdata('message','Captcha salah');
			redirect('home/register');
		}
		
		if(!$this->input->cookie('id_referral')){
			$config=$this->m_home->get_config('auto_refferal');
			if($config=='random'){
				$id_refferer=$this->m_home->refferer();
				if($id_refferer->num_rows()!=0){
					$id_refferer=$id_refferer->row();
					$this->m_home->update_member($id_refferer->id_member, array('flag'=>($id_refferer->flag-1)));
					$id_refferer=$id_refferer->id_member;
				}
				else
					$id_refferer=NULL;
			}
			else if($config=="fgs")
				$id_refferer=NULL;
			else
				$id_refferer=$config;
		}else{
			$id_refferer=$this->input->cookie('id_referral');
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
			$get_member = $this->m_home->sign_in($db_data['username'],$this->input->post('password'));
			if($get_member->num_rows() == 1) {
				$user_data = $get_member->row();
				$session_data = array(
					"forex_login" => TRUE,
					"id_member" => $user_data->id_member,
					"username" => $user_data->username,
					'email'	 => $user_data->email,
					"valid" => $user_data->valid
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
				{$this->session->set_flashdata('message',"Message sent");}
				delete_cookie("id_referral");
				redirect('member/account_verification');
			} else {
				$this->session->set_flashdata('message','Login Failed');
			}
		}
		else
			$this->m_home->update_member($db_data);
		redirect('home/register');
	}

	public function forgot_password(){
		if($this->session->userdata('forex_login') == TRUE)
			redirect('member');
		if($this->session->userdata('admin_forex_login') == TRUE)
			redirect('admin');
			
		$this->load->model('m_captcha');
		$this->session->set_userdata('captcha',$this->m_captcha->simple_php_captcha());
		$data['header']='comp/header';
		$data['footer']='comp/footer';
		$data['content']='main/forgot_password';
		$data['active']='home';
		$this->load->view('main/template',$data);	
	}

	public function forgot_process(){
		extract($_POST);
		$answer = strtoupper($captcha);
		$code=$this->session->userdata('captcha');
		$word = strtoupper($code['code']);
		if($word!=$answer){
			$this->session->set_flashdata('message','Captcha salah');
			redirect('home/forgot_password');
			exit;
		}
		
		$user=$this->db->where('email',$email)->get('member');
		if($user->num_rows()==0){
			$this->session->set_flashdata('message','Email tidak terdaftar');
			redirect('home/reset_success/forgot');
			exit;
		}
		$user=$user->row();
		$data=array(
				"forgot_time"=>date('Y-m-d H:i:s'),
				"forgot_token"=>md5($user->id_member.date('Y-m-d H:i:s').$user->username),
			);
		$this->db->where('email',$email)->update('member',$data);
		
		$to = $user->email;
		$sender_name = "no-reply@forexglobalservice.com";		
		$subject = 'Forgot Password';		
		$from = "no-reply@forexglobalservice.com";		
		$headers = 'To: <'.$to.'>' . "\r\n";		
		$headers .= 'From: '.$sender_name."\r\n";		
		
		$message = "Dear, ".$user->first_name." ".$user->last_name." \n";
		$message.= "Akun anda di forexglobalservice.com dengan username ".$user->username." telah melakukan permintaan untuk reset password \n";
		$message.= "Silahkan klik pada link berikut untuk melakukan reset password pada akun forexglobalservice.com anda \n\n";
		$message.= site_url("home/reset_form/".$data['forgot_token'])." \n\n";
		$message.= "Jika anda tidak merasa melakukan permintaan ini silahkan abaikan/hapus email ini \n";
		$message.= "Permintaan ini dilakukan melalui IP address : ".$this->input->ip_address()." \n";
		$message.= "\n \n \n";
		$message.= "Team FGS, \n forexglobalservice.com";
		$message = str_replace("\n.", "\n..", $message);
		
		$send = mail($to, $subject, $message, $headers);
		if($send)
			$this->session->set_flashdata('message',"Email reset password terkirim, silahkan periksa email anda.");
		delete_cookie("id_referral");
		redirect('home');
	}
	
	public function reset_form($token){
		$acc=$this->db->where("forgot_token",$token)->where('forgot_time >=',date('Y-m-d H:i:s',strtotime("-6 hours")))->get('member');
		if($acc->num_rows()==0)
			$data['valid']='expired';
		else
			$acc=$acc->row();
			
		if($this->session->userdata('forex_login') == TRUE)
			redirect('member');
		if($this->session->userdata('admin_forex_login') == TRUE)
			redirect('admin');
			
		$this->load->model('m_captcha');
		$this->session->set_userdata('captcha',$this->m_captcha->simple_php_captcha());
		$data['user']=$acc;
		$data['header']='comp/header';
		$data['footer']='comp/footer';
		$data['content']='main/reset_form';
		$data['active']='home';
		$this->load->view('main/template',$data);	
	}
	
	public function reset_process(){
		extract($_POST);
		$answer = strtoupper($captcha);
		$code=$this->session->userdata('captcha');
		$word = strtoupper($code['code']);
		if($word!=$answer){
			$this->session->set_flashdata('message','Captcha salah');
			redirect("home/reset_form/$token");
			exit;
		}
		$data=array(
				"forgot_time"=>"",
				"forgot_token"=>"",
				"password"=>md5($password),
			);
		$this->db->where('email',$email)->update('member',$data);
		$this->session->set_flashdata('message','Password updated, Silahkan login memakai password baru anda.');
		redirect("home/reset_success");
	}
	public function reset_success($type='reset'){
		$data['type']=$type;
		$data['header']='comp/header';
		$data['footer']='comp/footer';
		$data['content']='main/reset_success';
		$data['active']='home';
		$this->load->view('main/template',$data);	
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