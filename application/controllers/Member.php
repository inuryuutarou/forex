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
		if($member->valid==0){
			redirect('member/account_verification');
		}
		else if($member->valid==1){
			redirect('member/broker_verification');
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
		foreach($list_client->result() as $clt)
		echo "
		<tr>
			<td>$clt->username</td>
			<td>$clt->first_name $clt->last_name</td>
			<td>$clt->id_member</td>
			<td><a href='".site_url('/member/detail_client/'.$clt->id_member)."' data-toggle='modal' data-target='#detail_client' title='detail client'>View Detail</a></td>
		</tr>";	
	}
	
	public function detail_client($id_member){
		$data['member'] = $this->m_member->get_ib($id_member)->row();
		$this->load->view('main/detail_client',$data);	
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
			"bank_acc_num" => $this->input->post('bank_acc_num'),
			"bank_acc_name" => $this->input->post('bank_acc_name'),
			"fb_username" => $this->input->post('fb_username'),
			"fb_link" => $this->input->post('fb_link'),
			"last_update" => date('Y-m-d H:i:s')
			);
		if(isset($_POST['verify']) and $_FILES['ktp_file']['tmp_name']==''){
			$this->session->set_flashdata('error',"KTP harus di upload untuk proses verifikasi");
			redirect("member/account_verification");
		}
		if(isset($_POST['verify'])){
			$data["valid"]=1;
		}
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
		
		$this->m_member->update_member($this->session->userdata('id_member'),$data);
		if(!isset($_POST['verify']))
			redirect("member/my_profile");
		else
			redirect("member/broker_verification");
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
	
	public function broker_verification(){
		$data['member'] = $this->m_member->get_ib($this->session->userdata('id_member'))->row();
		if($data['member']->valid!=1){
			redirect('member/my_profile');
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
		$data['content']='main/broker_verification';
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
		$chk=$this->m_member->check_broker($this->session->userdata('id_member'),$row->id_broker);
		if($chk->num_rows()==0)
			$this->m_member->insert_broker($data);
		else
			$this->m_member->update_broker($data);
		//update member status	
		if($data['member']->id_refferer!='')
			$broker=$this->m_member->get_broker_refferal($data['member']->id_refferer);
		else
			$broker=$this->m_member->get_broker();
		$member=$this->m_member->get_ib($this->session->userdata('id_member'))->row();
		if($broker->num_rows()==$chk->num_rows() and $member->valid==1)
			$this->m_member->update_member($this->session->userdata('id_member'),array('valid'=>2));
		redirect("member/account_verification");
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
		$this->session->set_flashdata('message',"Captcha salah");
		if($word!=$answer){
			$this->session->set_flashdata('message','Captcha salah');
			redirect("member/exchange_form/$id_broker/$jenis_transaksi");
		}
		$broker = $this->m_member->get_broker($id_broker)->row();
		$nil_tukar=($jenis_transaksi==0)?$broker->beli:$broker->jual;
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
				);
		$this->m_member->insert_exchange($data);
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
}
include_once('simpleimage.php');
