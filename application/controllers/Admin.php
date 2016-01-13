<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once("Admin_secure_area.php");

class Admin extends Admin_secure_area {
	
	function __construct() 
    {
        parent::__construct();
		$this->load->model('m_admin');
    }

	public function index(){
		$data['aktif']='dashboard';
		$data['view']='admin/dashboard';
		$this->load->view('admin/template',$data);
	}
	
	public function member(){
		$data['aktif']	= 'member';
		$data['member'] = $this->m_admin->get_data('*','vw_member','level_status = 0');
		$data['view']='admin/member';
		$this->load->view('admin/template',$data);
	}
	
	public function approve($id_member=-1) {
		$this->m_admin->update_data($id_member,'id_member',array("valid"=>'3'),'member');
	}
	
	public function detail_member($id_member=-1){
		$get_member = $this->m_admin->get_data('*','vw_member',"id_member = $id_member AND deleted = '0'");
		if($get_member->num_rows() == 0)
		exit('Member tidak ditemukan');
		$data['member'] = $get_member->row();
		$this->load->view('admin/detail_member',$data);
	}
	
	public function broker(){
		$data['aktif']='broker';
		$data['broker'] = $this->m_admin->get_data('*','broker','deleted = 0');
		$data['view']='admin/broker';
		$this->load->view('admin/template',$data);
	}
	
	public function insert_broker(){
		$this->load->view('admin/insert_broker');
	}
	public function update_broker($id_broker=-1){
		$get_broker = $this->m_admin->get_data('*','broker',"id_broker = $id_broker AND deleted = '0'");
		if($get_broker->num_rows() == 0)
		exit('Broker tidak ditemukan');
		$data['broker'] = $get_broker->row();
		$this->load->view('admin/update_broker',$data);
	}
	
	public function save_broker($id_broker=-1) {
		if($id_broker != -1) {
			$get_broker = $this->m_admin->get_data('*','broker',"id_broker = $id_broker AND deleted = '0'");
			if($get_broker->num_rows() == 0)
			exit('Broker tidak ditemukan');
		}
		$db_data = array(
			"name" => $this->input->post('broker_name'),
			"link_ib" => $this->input->post('link_ib'),
			"link_client" => $this->input->post('link_client')
		);
		if($id_broker == -1)
		$this->m_admin->save_data($db_data,"broker");
		else
		$this->m_admin->update_data($id_broker,'id_broker',$db_data,"broker");
		echo 'ok';
	}
	
	public function delete_broker($id_broker=-1) {
		$this->m_admin->update_data($id_broker,'id_broker',array('deleted'=>'1'),"broker");
	}
	
	public function config(){
		$data['aktif']='config';
		$data['view']='admin/config';
		$this->load->view('admin/template',$data);
	}
	public function save_config(){
		extract($_POST);
		if($auto_refferal=="fgs" or $auto_refferal=="random")
			$value=$auto_refferal;
		else
			$value=$auto_refferal_text;
		$this->m_admin->update_data('auto_refferal','config_name',array("value"=>$value),"config");
		redirect('admin/config');
	}
	
	public function logout() {
		$session_data = array(
			'admin_forex_login' => "",
			'id_user'	 => "",
			'username'	 => ""
		);
		$this->session->set_userdata($session_data);
		redirect('login');
	}
}