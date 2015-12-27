<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once('secure_area.php');

class Member extends Secure_area {

	function __construct() 
    {
        parent::__construct();
		$this->load->model(array('m_home','m_member'));
    }
	
	public function index(){
		
	}
	
	public function my_profile(){
		$data['active']='my_profile';
		$data['header']='comp/header';
		$data['footer']='comp/footer';
		$data['side_menu']='comp/side_menu';
		$data['content']='main/my_profile';
		$this->load->view('main/template',$data);	
	}
	
	public function my_client(){
		$data['active']='my_client';
		$data['header']='comp/header';
		$data['footer']='comp/footer';
		$data['side_menu']='comp/side_menu';
		$data['content']='main/my_client';
		$data['list_client'] = $this->m_member->list_client($this->session->userdata('id_member'));
		$this->load->view('main/template',$data);	
	}
	
	public function account_verification(){
		$data['active']='account_verification';
		$data['header']='comp/header';
		$data['footer']='comp/footer';
		$data['side_menu']='comp/side_menu';
		$data['content']='main/account_verification';
		$this->load->view('main/template',$data);
	}
}