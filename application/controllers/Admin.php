<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once("Admin_secure_area.php");

class Admin extends Admin_secure_area {
	
	var $per_page = 20;
	
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
	
	
	public function suggest_member(){
		$data = array(
						'error' => 'no',
						'response' => array()
					);
		
		$keyword = $this->input->post('term');
		$q = "SELECT * 
				FROM (
						SELECT *, CONCAT( first_name, ' ', last_name) AS member_name FROM `vw_member`
					) AS member
				WHERE member_name LIKE '%$keyword%'";
		
		$get_anggota = $this->db->query($q);
		
		if($get_anggota->num_rows() > 0){
			foreach($get_anggota->result() as $row)	{
				$data['response'][] = array(
				'label' => $row->member_name,
				'value' => $row->member_name,
				'id_member' => $row->id_member,
				'nomor_telepon' => $row->phone,
				'nomor_identitas' => $row->id_card_number
				);
			}
		}
		echo json_encode($data);
	}
	
	public function member(){
		$this->load->library('pagination');
		
		$page = ($this->input->get('per_page')) ? $this->input->get('per_page') : '1';
		// Pagination Settings
		$config['use_page_numbers'] = TRUE;
		$config['page_query_string'] = TRUE;
		$config['full_tag_open'] = '<div class="ci_pagination">';
		$config['full_tag_close'] = '</div>';
		$config['num_links'] = 5;
		$config['base_url'] = site_url("admin/member");
		
		
		if($this->input->post('search_member'))
		$this->db->like('first_name',$this->input->post('search_member'))->or_like('last_name',$this->input->post('search_member'));
		$config['total_rows'] = $this->m_admin->get_data('*','vw_member','level_status = 0')->num_rows();
		
		$config['per_page'] = $this->per_page;
		$this->pagination->initialize($config);
		$offset = ($page-1) * $this->per_page;
		
		$data['aktif']	= 'member';
		if($this->input->post('search_member'))
		$this->db->like('first_name',$this->input->post('search_member'))->or_like('last_name',$this->input->post('search_member'));
		$this->db->limit($this->per_page,$offset);
		$this->db->order_by('first_name','asc');
		$data['member'] = $this->m_admin->get_data('*','vw_member');
		
		$data['search_member'] = ($this->input->post('search_member')) ? $this->input->post('search_member') : '';
		$data['view']='admin/member';
		$this->load->view('admin/template',$data);
	}
	
	public function approve($id_member=-1) {
		$this->m_admin->update_data($id_member,'id_member',array("valid"=>'3'),'member');
	}
	
	public function detail_member($id_member=-1){
		$get_member = $this->m_admin->get_data('*','vw_member',"id_member = $id_member AND deleted = '0'");
		$data['member_broker'] = $this->m_admin->get_data("GROUP_CONCAT(`name`) AS member_broker",
			"vw_member_broker","id_member = $id_member AND deleted = '0'");
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
			$this->session->set_flashdata('message','Broker tidak ditemukan');
			//exit('Broker tidak ditemukan');
		}
		$db_data = array(
			"name" => $this->input->post('broker_name'),
			"link_ib" => $this->input->post('link_ib'),
			"link_client" => $this->input->post('link_client'),
			"jual" => $this->input->post('jual'),
			"beli" => $this->input->post('beli'),
			"stock" => $this->input->post('stock'),
			"absolute_ib" => $this->input->post('absolute_ib'),
			"absolute_client" => $this->input->post('absolute_client'),
			"required" => $this->input->post('required')
		);
		
		if($id_broker == -1) {
			$this->m_admin->save_data($db_data,"broker");
			$id_broker = $this->db->insert_id();
		}
		else
		$this->m_admin->update_data($id_broker,'id_broker',$db_data,"broker");
		
		if($_FILES['logo_broker']['name'] != "") {
			move_uploaded_file($_FILES['logo_broker']['tmp_name'],"media/images/logo_broker/".$id_broker.".png");
		}
		redirect('admin/broker');
		//echo 'ok';
	}
	
	public function delete_broker($id_broker=-1) {
		$this->m_admin->update_data($id_broker,'id_broker',array('deleted'=>'1'),"broker");
	}
	
	public function config(){
		$data['aktif']='config';
		$data['view']='admin/config';
		$get_ref_config = $this->m_admin->get_data('*','config',"config_name = 'auto_refferal'")->row();
		$auto_member_ref = $this->m_admin->get_data('*','vw_member',"id_member = '".$get_ref_config->value."'");
		if($auto_member_ref->num_rows() == 1)
		$member_ref_data = $auto_member_ref->row();
		else
		$member_ref_data = FALSE;
		
		$data['auto_member_ref_id'] = ($member_ref_data !== FALSE) ? $member_ref_data->id_member : '';
		$data['auto_member_ref'] = ($member_ref_data !== FALSE) ? $member_ref_data->first_name.' '.$member_ref_data->last_name : '';
		$this->load->view('admin/template',$data);
	}
	public function save_config(){
		extract($_POST);
		if($auto_refferal=="fgs" or $auto_refferal=="random")
			$value=$auto_refferal;
		else
			$value=$hdn_ref_member_id;
		$this->m_admin->update_data('auto_refferal','config_name',array("value"=>$value),"config");
		redirect('admin/config');
	}
	public function changer(){
		$data['aktif']='config';
		$data['view']='admin/changer';
		$data['changer']=$this->m_admin->get_data("*","vw_changer","approved = 0");
		$this->load->view('admin/template',$data);
	}
	public function approve_changer($id_changer=-1){
		$this->m_admin->update_data($id_changer,'id_changer',array("approved"=>1,"approve_time" => date('Y-m-d H:i:s')),"changer");
		redirect('admin/changer');
	}
	public function detail_changer($id_changer=-1) {
		$get_changer = $this->m_admin->get_data('*','vw_changer',"id_changer = $id_changer");
		if($get_changer->num_rows() == 0)
		exit('Changer tidak ditemukan');
		$data['changer'] = $get_changer->row();
		$this->load->view('admin/changer_detail',$data);
	}
	public function logout() {
		$session_data = array(
			'admin_forex_login' => "",
			'id_user'	 => "",
			'username'	 => ""
		);
		$this->session->set_userdata($session_data);
		$this->session->sess_destroy();
		redirect('login');
	}
}