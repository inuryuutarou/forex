<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dhuafa extends CI_Controller {
	
	function __construct() 
    {
        parent::__construct();
		$this->load->model('m_home');
    }

	public function index(){
		$data['header']='comp/header';
		$data['footer']='comp/footer';
		$data['content']='main/dhuafa_content';
		$data['active']='others';
		$this->load->view('main/template',$data);
	}
}