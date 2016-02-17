<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_member extends CI_Model
{

    function __construct() {
		parent::__construct();
	}
    
    public function list_client($id_member){
		return $this->db->where('id_refferer',$id_member)
						->where('deleted',0)
						->get('member');
	}
	
	public function get_ib($id_member){
		return $this->db->where('id_member',$id_member)
						->where('deleted',0)
						->get('member');
	}
	
    public function update_member($id_member, $data){
		return $this->db->where('id_member',$id_member)
						->update('member',$data);
    }
	
	public function get_broker($id_broker=NULL){
		if($id_broker!=NULL)
			$this->db->where('id_broker',$id_broker);
		return $this->db->where('deleted',0)
						->select("*, link_client as link_client_main, link_ib as link_ib_main")
						->get('broker');
	}
	public function get_broker_refferal($id_member){
		return $this->db->where('id_member',$id_member)
						->where('deleted_broker',0)
						->get('vw_member_broker');
	}
	public function check_broker($id_member,$id_broker=NULL,$req=1){
		if($id_broker!=NULL)
			$this->db->where('id_broker',$id_broker);
		if($req==1)
			$this->db->where('required',1);
		return $this->db->where('id_member',$id_member)
						->where('deleted_broker',0)
						->get('vw_member_broker');
	}
	
	public function insert_broker($data){
		return $this->db->insert('member_broker',$data);
	}
	
	public function update_broker($data){
		return $this->db->where('id_member',$data['id_member'])
						->where('id_broker',$data['id_broker'])
						->update('member_broker',$data);
	}
	public function get_wall($start=NULL,$offset=NULL,$id_wall_post=NULL){
		if($start!=NULL)
			$this->db->limit($start,$offset);
		if($id_wall_post!=NULL)
			$this->db->where("id_wall_post",$id_wall_post);
		return $this->db->where('deleted',0)
						->order_by('id_wall_post','desc')
						->get('vw_wall_post');
	}
	public function insert_wall($data){
		return $this->db->insert('wall_post',$data);
	}
	public function update_wall($id_wall_post,$data){
		return $this->db->where("id_wall_post",$id_wall_post)
						->update("wall_post",$data);
	}
	public function get_exchange($id_member,$id_changer=NULL){
		if($id_changer!=NULL)
			$this->db->where("id_changer",$id_changer);
		return $this->db->where("id_member",$id_member)
						->get("vw_changer");
	}
	public function insert_exchange($data){
		return $this->db->insert('changer',$data);
	}
	public function update_exchange($id_changer,$data){
		return $this->db->where("id_changer",$id_changer)->update('changer',$data);
	}
}