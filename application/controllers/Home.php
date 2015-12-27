<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$data['header']='comp/header';
		$data['footer']='comp/footer';
		$data['content']='main/home';
		$this->load->view('main/template',$data);
	}
	
	public function sign_in(){
		$this->load->view('pop_up/sign_in');	
	}
}
