<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_home extends CI_Model
{

    function __construct() {
        parent::__construct();
    }
    
    public function register($data){
		return $this->db->insert('member',$data);
	}
	
	public function get_ib($id_member){
		return $this->db->where('id_member',$id_member)
						->get('vw_member');
	}
	
	public function sign_in($username,$password){
		return $this->db->where("username",$username)
						->or_where("email",$username)
						->where("password",md5($password))
						->get('vw_member');
	}
	
    public function update_member($id_member, $data){
		return $this->db->where('id_member',$id_member)
						->update('member',$data);
    }
    public function refferer(){
		return $this->db->where('`flag` >',0)
						->order_by('rand()')
						->limit(1)
						->get('vw_member');
	}
    public function cek_username_email($check,$type='mail'){
		if($type=='mail')
			$this->db->where('email',$check);
		else if($type=='username')
			$this->db->where('username',$check);
		return $this->db->get('vw_member');
    }
}