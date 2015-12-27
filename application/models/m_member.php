<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_member extends CI_Model
{

    function __construct() {
		parent::__construct();
	}
    
    public function list_client($id_member){
		return $this->db->where('id_refferer',$id_member)
						->get('member');
	}
	
	public function get_ib($id_member){
		return $this->db->where('id_member',$id_member)
						->get('member');
	}
	
    public function update_member($id_member, $data){
		return $this->db->where('id_member',$id_member)
						->update('member',$data);
    }
	
	public function get_broker(){
		return $this->db->where('deleted',0)
						->get('broker');
	}
	
	public function insert_broker($data){
		return $this->db->insert('member_broker',$data);
	}

	public function update_broker($data){
		return $this->db->where('id_member',$data['id_member'])
						->where('id_broker',$data['id_broker'])
						->update('member_broker',$data);
	}
}