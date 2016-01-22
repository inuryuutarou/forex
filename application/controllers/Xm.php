<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Xm extends CI_Controller {
	
	function __construct() 
    {
        parent::__construct();
		$this->load->model('m_home');
    }

	public function index(){
		$data['header']='comp/header';
		$data['footer']='comp/footer';
		$data['content']='main/xm';
		$data['active']='broker';
		$this->load->view('main/template',$data);
	}
}