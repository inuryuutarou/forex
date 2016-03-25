<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once('Secure_area.php');

class Member extends Secure_area {

	function __construct() 
    {
        parent::__construct();
		$this->load->model(array('m_home','m_member'));
    }
	
	public function index(){
		$member = $this->m_member->get_ib($this->session->userdata('id_member'))->row();
		if($member->valid==0 or $member->valid==1){
			redirect('member/account_verification');
		}
		redirect('member/wall');
	}
	public function wall(){
		$data['wall'] = $this->m_member->get_wall()->result();
		$data['active']='dashboard';
		$data['header']='comp/header';
		$data['footer']='comp/footer';
		$data['side_menu']='comp/side_menu';
		$data['content']='main/wall';
		$this->load->view('main/template',$data);	
	}
	public function update_wall(){
		extract($_POST);
		$data=array(
					'id_member'=>$this->session->userdata('id_member'),
					'content'=>$content,
					'timestamp'=>date("Y-m-d H:i:s"),
				);
		$this->m_member->insert_wall($data);
		redirect("member/wall");
	}
	public function my_profile(){
		$data['member'] = $this->m_member->get_ib($this->session->userdata('id_member'))->row();

		if($data['member']->id_refferer!='')
			$broker=$this->m_member->get_broker_refferal($data['member']->id_refferer);
		else
			$broker=$this->m_member->get_broker();
		$data['broker'] = $broker;
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
	public function ajax_grandchild($id_member){
		$list_client= $this->m_member->list_client($id_member);
		foreach($list_client->result() as $clt){
			$sts=($clt->valid==3)?"approved":"pending";
			echo "
			<tr>
				<td>$clt->username</td>
				<td>$clt->first_name $clt->last_name</td>
				<td>$clt->id_member</td>
				<td>$sts</td>
				<td><a href='".site_url('/member/detail_client/'.$clt->id_member)."' data-toggle='modal' data-target='#detail_client' title='detail client'>View Detail</a></td>
			</tr>";	
		}
	}
	
	public function detail_client($id_member){
		$data['member'] = $this->m_member->get_ib($id_member)->row();
		$this->load->view('main/detail_client',$data);	
	}
	
	public function update_profile(){
		$data=array(
			"country" => $this->input->post('country'),
			"province" => $this->input->post('province'),
			"city" => $this->input->post('city'),
			"address" => $this->input->post('address'),
			"postal" => $this->input->post('postal'),
			"id_card_number" => $this->input->post('id_card_number'),
			"phone" => $this->input->post('phone'),
			"im" => $this->input->post('im'),
			"bank_name" => $this->input->post('bank_name'),
			"bank_branch" => $this->input->post('bank_branch'),
			"bank_acc_num" => $this->input->post('bank_acc_num'),
			"bank_acc_name" => $this->input->post('bank_acc_name'),
			"fb_username" => $this->input->post('fb_username'),
			"fb_link" => $this->input->post('fb_link'),
			"last_update" => date('Y-m-d H:i:s')
			);
		if($this->input->post('pin')!='')
			$data["pin"] =  md5($this->input->post('pin'));	
		if(isset($_POST['verify']) and $_FILES['ktp_file']['tmp_name']=='' ){
			if(!is_file("media/img/member_id/id_card_".$this->session->userdata('id_member').".jpg")){
				$this->m_member->update_member($this->session->userdata('id_member'),$data);
				$this->session->set_flashdata('error',"KTP harus di upload untuk proses verifikasi");
				redirect("member/account_verification");
			}
		}
		$this->m_member->update_member($this->session->userdata('id_member'),$data);
		if($_FILES['ktp_file']['tmp_name']!=''){
			$path="media/img/member_id/";
			$tmp = $_FILES['ktp_file']['tmp_name'];
			$size = getimagesize($tmp);
			$img_name ="id_card_".$this->session->userdata('id_member').".jpg";
			$image = new SimpleImage();
			$image->load($tmp);
			if($size[0] > 535)
			{$image->resizeToWidth(535);}
			$image->save($path.$img_name);
		}
		
		if(!isset($_POST['verify']))
			redirect("member/my_profile");
		else{
			$this->_is_valid();
			redirect("member/account_verification");
		}
	}
	public function depo_awal(){
		$data=array(
			"id_broker" => $this->input->post('id_broker'),
			"nominal_deposit" => $this->input->post('nominal_deposit'),
			"last_update" => date('Y-m-d H:i:s')
			);
		$this->m_member->update_member($this->session->userdata('id_member'),$data);
		if(!isset($_POST['verify']))
			redirect("member/my_profile");
		else{
			$this->_is_valid();
			redirect("member/account_verification");
		}
	}
	
	public function account_verification(){
		$data['member'] = $this->m_member->get_ib($this->session->userdata('id_member'))->row();
		if($data['member']->valid==3){
			redirect('member');
		}
		if($data['member']->id_refferer!='')
			$broker=$this->m_member->get_broker_refferal($data['member']->id_refferer);
		else
			$broker=$this->m_member->get_broker();
		$data['broker'] = $broker;
		$data['active']='account_verification';
		$data['header']='comp/header';
		$data['footer']='comp/footer';
		$data['side_menu']='comp/side_menu';
		$data['content']='main/account_verification';
		$this->load->view('main/template',$data);
	}
	
	public function broker_add(){
		extract($_POST);
		$data=array(
					'id_member'=>$this->session->userdata('id_member'),
					'id_broker'=>$id_broker,
					'link_ib'=>$link_ib,
					'link_client'=>(isset($link_client)?$link_client:''),
					'broker_username'=>$broker_username,
					'real_account'=>$real_account,
				);
		$chk=$this->m_member->check_broker($this->session->userdata('id_member'),$id_broker,NULL);
		if($chk->num_rows()==0)
			$this->m_member->insert_broker($data);
		else
			$this->m_member->update_broker($data);
		//update member status	
		$member=$this->m_member->get_ib($this->session->userdata('id_member'))->row();
			
		if(!isset($_POST['verify']))
			redirect("member/my_profile");
		else{
			$this->_is_valid();
			redirect("member/account_verification");
		}
	}
	public function _is_valid(){
		$member=$this->m_member->get_ib($this->session->userdata('id_member'))->row();
		//check profile
		if($member->pin=='' or $member->first_name=='' or $member->last_name=='' or $member->country=='' or $member->province=='' or $member->city=='' or $member->phone==''  or $member->id_card_number==''  or $member->bank_name==''  or $member->bank_branch==''  or $member->bank_acc_name==''  or $member->bank_acc_num=='' or !is_file("media/img/member_id/id_card_".$this->session->userdata('id_member').".jpg")){
			//$this->session->set_flashdata('error','mohon lengkapi field yang wajib diisi pada profil anda');
			return false;
		}
		else{
			$this->m_member->update_member($this->session->userdata('id_member'),array('valid'=>1));
		}
		//check broker n depo
		if($member->id_refferer!=''){
			$this->db->where('required',1);
			$broker=$this->m_member->get_broker_refferal($member->id_refferer);
		}
		else{
			$this->db->where('required',1);
			$broker=$this->m_member->get_broker();
		}
		$chk=$this->m_member->check_broker($this->session->userdata('id_member'));
		if($broker->num_rows()==$chk->num_rows() and $member->id_broker!='')
			$this->m_member->update_member($this->session->userdata('id_member'),array('valid'=>2));
		return true;
	}
	public function webinar(){
		$data['header']='comp/header';
		$data['footer']='comp/footer';
		$data['side_menu']='comp/side_menu';
		$data['content']='main/webinar';
		$data['active']='others';
		$this->load->view('main/template',$data);
	}
	
	public function exchanger(){
		$data['broker']=$this->m_member->get_broker()->result();
		$data['history']=$this->m_member->get_exchange($this->session->userdata('id_member'))->result();
		$data['header']='comp/header';
		$data['footer']='comp/footer';
		$data['side_menu']='comp/side_menu';
		$data['content']='main/exchanger';
		$data['active']='exchanger';
		$this->load->view('main/template',$data);
	}
	public function exchange_form($id_broker,$type=NULL){
		$this->load->model('m_captcha');
		$this->session->set_userdata('captcha',$this->m_captcha->simple_php_captcha());
		$data['broker'] = $this->m_member->get_broker($id_broker)->row();
		$data['member'] = $this->m_member->get_ib($this->session->userdata('id_member'))->row();
		$data['type']=$type;
		$data['header']='comp/header';
		$data['footer']='comp/footer';
		$data['side_menu']='comp/side_menu';
		$data['content']='main/exchange_form';
		$data['active']='exchanger';
		$this->load->view('main/template',$data);
	}
	public function exchange_process(){
		extract($_POST);
		$answer = strtoupper($this->input->post('captcha'));
		$code=$this->session->userdata('captcha');
		$word = strtoupper($code['code']);
		if($word!=$answer){
			$this->session->set_flashdata('message','Captcha salah');
			redirect("member/exchange_form/$id_broker/$jenis_transaksi");
		}
		$broker = $this->m_member->get_broker($id_broker)->row();
		$nil_tukar=($jenis_transaksi==0)?$broker->beli:$broker->jual;
		$status_exchange=($jenis_transaksi==0)?2:0;
		$data=array(
					'id_member'=>$this->session->userdata('id_member'),
					'id_broker'=>$id_broker,
					'jenis_transaksi'=>$jenis_transaksi,
					'nilai'=>$nilai*$nil_tukar,
					'nilai_tukar'=>$nil_tukar,
					'no_akun_trading'=>$no_akun_trading,
					'nama_akun_trading'=>$nama_akun_trading,
					'nama_bank'=>$nama_bank,
					'no_rek'=>$no_rek,
					'nama_rek'=>$nama_rek,
					'notes'=>$notes,
					'timestamp'=>date("Y-m-d H:i:s"),
					"approved"=>$status_exchange
				);
		$this->m_member->insert_exchange($data);
		redirect("member/exchanger");
	}
	public function confirm_trnf($id_changer){
		$ex=$this->m_member->get_exchange($this->session->userdata('id_member'),$id_changer)->row();
		if($ex->approved==2 and $ex->jenis_transaksi==0)
			$this->m_member->update_exchange($id_changer,array("approved"=>0));
		redirect("member/exchanger");
	}
	public function dhuafa(){
		$data['header']='comp/header';
		$data['footer']='comp/footer';
		$data['side_menu']='comp/side_menu';
		$data['content']='main/dhuafa';
		$data['active']='others';
		$this->load->view('main/template',$data);
	}
	public function tools(){
		$data['header']='comp/header';
		$data['footer']='comp/footer';
		$data['side_menu']='comp/side_menu';
		$data['content']='main/tools';
		$data['active']='others';
		$this->load->view('main/template',$data);
	}
	public function file_get($file_name){
		$IB_id=$this->session->userdata('id_member');
		$client=$this->m_member->get_ib($file_name)->row();
		$granchild=$this->m_member->get_ib($client->id_refferer)->row();
		if($IB_id==$file_name or $client->id_refferer==$IB_id or $granchild->id_refferer==$IB_id){  // login check
			$file = 'media/img/member_id/id_card_'.$file_name.".jpg";
			if (is_file($file)){ // check the file is existing 
				$this->load->helper('file');
				header('Content-Type: '.get_mime_by_extension($file));
				readfile($file);
			}else 
				echo "error file";
		}else
			echo "error";
	}
}
include_once('simpleimage.php');
