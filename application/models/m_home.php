<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_home extends CI_Model
{

    function __construct() {
        parent::__construct();
    }
    
    public function register($data){
		$q1=$this->db->insert('member',$data);
		$id_member=$this->db->insert_id();
		$upd['flag']=$this->db->where('id_member',$data['id_refferer'])->get('member')->row()->flag;
		$upd['flag']=$upd['flag']-1;
		$q2=$this->update_member($data['id_refferer'],$upd);
		if($q1 and $q2)
			return true;
		else
			return false;
	}
        
    public function update_member($id_member, $data){
		return $this->db->where('id_member',$id_member)
						->update('member',$data);
    }
    public function refferer(){
		return $this->db->where('`flag` >',0)
						->order_by('rand()')
						->limit(1)
						->get('member');
	}
    public function cek_username_email($check,$type='mail'){
		if($type=='mail')
			$this->db->where('email',$check);
		else if($type=='username')
			$this->db->where('username',$check);
		return $this->db->get('member');
    }
}