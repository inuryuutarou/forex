<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {
	
	function __construct() 
    {
        parent::__construct();
		$this->load->model('m_home');
    }

	public function index(){
		$this->load->model('m_captcha');
		$this->session->set_userdata('captcha',$this->m_captcha->simple_php_captcha());
		$data['header']='comp/header';
		$data['footer']='comp/footer';
		$data['content']='main/contact';
		$data['active']='support';
		$this->load->view('main/template',$data);
	}
	public function send(){
		$answer = strtoupper($this->input->post('captcha'));
		$code=$this->session->userdata('captcha');
		$word = strtoupper($code['code']);
		$this->session->set_flashdata('message',"Captcha salah");
		if($word==$answer){
			extract($_POST);
			$to = "info@forexglobalservice.com";
			$sender_name = $email;		
			$subject = $subject;		
			$from = $email;		
			$headers = 'To: <'.$to.'>' . "\r\n";		
			$headers .= 'From: '.$sender_name."\r\n";		
			$message = $message;
			$message = str_replace("\n.", "\n..", $message);
			
			$send = mail($to, $subject, $message, $headers);
			if($send)
			{$this->session->set_flashdata('msg',"Message sent");}
		}
		redirect('contact_us');
	}	
}