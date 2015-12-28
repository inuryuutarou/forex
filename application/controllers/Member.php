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
	
	public function update_profile(){
		$data=array(
			"pin" => md5($this->input->post('pin')),
			"country" => $this->input->post('country'),
			"province" => $this->input->post('province'),
			"city" => $this->input->post('city'),
			"address" => $this->input->post('address'),
			"postal" => $this->input->post('postal'),
			"id_card_number" => $this->input->post('id_card_number'),
			"phone" => $this->input->post('phone'),
			"bank_name" => $this->input->post('bank_name'),
			"bank_branch" => $this->input->post('bank_branch'),
			"bank_acc_name" => $this->input->post('bank_acc_name'),
			"fb_username" => $this->input->post('fb_username'),
			"fb_link" => $this->input->post('fb_link')
			);
		if($_FILES['ktp_file']['tmp_name']!=''){
			//buatin fungsi upload gung jadiin jpg taro di media/img/member_id
			//nama file nya "id_card_".$this->input->post('id_member') .".jpg" atau dibalik jadi ID di depan jg gpp
			//:D
		}
		
		$this->m_member->update_member($this->input->post('id_member'),$data);
		redirect("member/my_profile");
	}
	
	public function account_verification(){
		$data['active']='account_verification';
		$data['header']='comp/header';
		$data['footer']='comp/footer';
		$data['side_menu']='comp/side_menu';
		$data['content']='main/account_verification';
		$data['member'] = $this->m_member->get_ib($this->session->userdata('id_member'));
		$this->load->view('main/template',$data);
	}
}