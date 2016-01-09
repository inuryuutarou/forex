<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct() 
    {
        parent::__construct();
		$this->load->model('m_home');
    }

	public function index(){
		$data['aktif']='dashboard';
		$data['view']='admin/dashboard';
		$this->load->view('admin/template',$data);
	}
	
	public function member(){
		$data['aktif']='member';
		$data['view']='admin/member';
		$this->load->view('admin/template',$data);
	}
	public function detail_member(){
		$this->load->view('admin/detail_member');
	}
	
	public function broker(){
		$data['aktif']='broker';
		$data['view']='admin/broker';
		$this->load->view('admin/template',$data);
	}
	
	public function insert_broker(){
		$this->load->view('admin/insert_broker');
	}
	public function update_broker(){
		$this->load->view('admin/update_broker');
	}
}