<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Exchanger extends CI_Controller {
	
	function __construct() 
    {
        parent::__construct();
		$this->load->model('m_home');
		$this->load->model('m_member');
    }

	public function index(){
		$data['broker'] = $this->m_member->get_broker()->result();
		$data['header']='comp/header';
		$data['footer']='comp/footer';
		$data['content']='main/exchanger_content';
		$data['active']='exchanger';
		$this->load->view('main/template',$data);
	}
}