<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exness extends CI_Controller {
	
	function __construct() 
    {
        parent::__construct();
		$this->load->model('m_home');
    }

	public function index(){
		$data['header']='comp/header';
		$data['footer']='comp/footer';
		$data['content']='main/exness';
		$data['active']='broker';
		$this->load->view('main/template',$data);
	}
}