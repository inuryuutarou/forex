<style>
	.panel-body{
		border-bottom:1px solid #ddd;
		border-left:1px solid #ddd;
		border-right:1px solid #ddd;	
		padding: 15px 30px;
	}
	.control-label{
		font-weight:normal;	
	}
	.alert{
		padding: 15px;
		margin-bottom: 20px;
		border: 1px solid transparent;
		border-radius: 4px;
	}
	.alert-info{
		color: #31708f;
		background-color: #d9edf7;
		border-color: #bce8f1;
	}
</style>
<div class="margin_top5"></div> 
<div class="container">
	<?php isset($side_menu)?$this->load->view($side_menu):'side_menu'?>

    <div class="content_right">
        <div class="call">
        
        	<div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">My Profile</a></li>
                            <?php $i=1;foreach($broker->result() as $row){$i++;?>
                            <li><a href="#tab<?=$i?>default" data-toggle="tab"><?=$row->name?></a></li>
                            <?php }?>
                            <li><a href="#tabdeposit" data-toggle="tab">Deposit Awal (Wajib)</a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">
                        	<div class="margin_top3"></div> 
                            <h4 style="text-align:center">My Profile &nbsp;<a class="edit_btn" style="cursor:pointer"><i class="fa fa-gear"></i></a></h4>
                            <br>
                            <br>
                            <form class="form-horizontal" enctype="multipart/form-data" action="<?=site_url("member/update_profile")?>" method="post">
                                <?php if($member->valid==3){ ?>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Refferal link</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control" onClick="this.setSelectionRange(0, this.value.length)" value="<?=site_url("home/referral/$member->id_member")?>" readonly>
                                  </div>
                                </div>
                                <?php }?>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Username</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control" id="username" name="username" value="<?=$member->username?>" disabled readonly>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Email</label>
                                  <div class="col-sm-7">
                                    <input type="email" class="form-control" id="email" name="email" value="<?=$member->email?>" disabled readonly>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Name</label>
                                  <div class="col-sm-3">
                                    <input type="text" class="form-control disabling" id="first_name" name="first_name" value="<?=$member->first_name?>" required>
                                  </div>
                                  <div class="col-sm-3">
                                    <input type="text" class="form-control disabling" id="last_name" name="last_name" value="<?=$member->last_name?>" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Facebook Name</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control disabling" id="fb_username" name="fb_username" value="<?=$member->fb_username?>" >
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Facebook URL</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control disabling" id="fb_link" name="fb_link" value="<?=$member->fb_link?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Address</label>
                                  <div class="col-sm-7">
                                    <textarea class="form-control disabling" id="address" name="address" required><?=$member->address?></textarea>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">City</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control disabling" id="city" name="city" value="<?=$member->city?>" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Province</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control disabling" id="province" name="province" value="<?=$member->province?>"  required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Postal Code</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control disabling" id="postal" name="postal" value="<?=$member->postal?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Country</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control disabling" id="country" name="country" value="<?=$member->country?>" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Phone Number</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control disabling" id="phone" name="phone" value="<?=$member->phone?>" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Instant Messenger</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control disabling" id="im" name="im" value="<?=$member->im?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">ID Card Number (KTP)</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control disabling" id="id_card_number" name="id_card_number" value="<?=$member->id_card_number?>" required>
                                  </div>
                                </div>
                                <?php if(is_file("media/img/member_id/id_card_".$member->id_member.".jpg")){?>
                                <div class="form-group">
                                  <div class="col-sm-2"> </div>
                                  <div class="col-sm-7">
                                    <img src="<?=base_url("media/img/member_id/id_card_".$member->id_member.".jpg?ver=".md5($member->last_update))?>" class="col-xs-10">
                                  </div>
                                </div>
                                <?php }?>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">ID Card (KTP) File</label>
                                  <div class="col-sm-7">
                                    <input type="file" class="form-control disabling" id="ktp_file" name="ktp_file">
                                  </div>
                                </div>
                                <div class="call">
                                    <h5 class="col-sm-12">Bank Data</h5>
                                    <div class="form-group">
                                    
                                      <label class="col-sm-2 control-label">Bank Name</label>
                                      <div class="col-sm-7">
                                        <input type="text" class="form-control disabling" id="bank_name" name="bank_name" value="<?=$member->bank_name?>" required>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                    
                                      <label class="col-sm-2 control-label">Bank Account Name</label>
                                      <div class="col-sm-7">
                                        <input type="text" class="form-control disabling" id="bank_acc_name" name="bank_acc_name" value="<?=$member->bank_acc_name?>" required>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                    
                                      <label class="col-sm-2 control-label">Bank Account Number</label>
                                      <div class="col-sm-7">
                                        <input type="text" class="form-control disabling" id="bank_acc_num" name="bank_acc_num" value="<?=$member->bank_acc_num?>" required>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                    
                                      <label class="col-sm-2 control-label">Bank Branch</label>
                                      <div class="col-sm-7">
                                        <input type="text" class="form-control disabling" id="bank_branch" name="bank_branch" value="<?=$member->bank_branch?>" required>
                                      </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group" align="center">
                                  <div class="col-sm-12 submit_btn">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                                </div>
                            </form>
                        </div>
                        <!--=======================================================-->
                        <!--Tab untuk form-->
                        <?php $i=1;foreach($broker->result() as $row){$i++;
								$chk=$this->m_member->check_broker($this->session->userdata('id_member'),$row->id_broker,NULL);
								$chk_dta=($chk->num_rows()!=0)?$chk->row():'';
						?>
                        <div class="tab-pane fade" id="tab<?=$i?>default">
                        	<div class="margin_top3"></div> 
                            <h4 style="text-align:center"><?=$row->name?> &nbsp;<a class="edit_btn" style="cursor:pointer"><i class="fa fa-gear"></i></a></h4>
                            <br>
                            <form class="form-horizontal" action="<?=site_url("member/broker_add")?>" method="post">
                            <p>Masuk melalui semua link berikut ini ketika mendaftar</p>
                            <div class="alert alert-info" role="alert"><a href="<?=($row->absolute_ib==0)?$row->link_ib:$row->link_ib_main?>" target="_blank"><h4>Buka akun IB <?=$row->name?> disini !</h4></a></div>
							<?php if($row->link_client!=""){?>
                            <div class="alert alert-info" role="alert"><a href="<?=($row->absolute_client==0)?$row->link_client:$row->link_client_main?>" target="_blank"><h4>Buka akun trading <?=$row->name?> disini !</h4></a></div>
                            <?php }?>
                            <p>Setelah melakukan daftar, pastikan akun IB dan Akun trading anda telah diverifikasi oleh broker, 
                            dan pastikan Link IB dan data akun trading yang anda masukkan benar pada form dibawah</p>
                            <br>
                            <?php if($row->absolute_ib==0){?>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">IB Link</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control disabling" id="link_ib" name="link_ib" value="<?=($chk_dta!='')?$chk_dta->link_ib:''?>" placeholder="Input link IB anda disini !" required>
                              </div>
                            </div>
                            <?php }else{?>
                                <input type="hidden" readonly class="form-control" name="link_ib" value="<?=$row->link_ib_main?>">
							<?php }
							if($row->absolute_client==0){
								if($row->link_client!=""){?>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Client Link</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control disabling" id="link_client" name="link_client" value="<?=($chk_dta!='')?$chk_dta->link_client:''?>" placeholder="Input link afiliasi untuk akun trading anda disini !" required>
                              </div>
                            </div>
							<?php }else{?>
                                <input type="hidden" value="" readonly class="form-control" name="link_client">
                            <?php } }else{?>
                            	<input type="hidden" readonly class="form-control" name="link_client" value="<?=$row->link_client_main?>">
                            <?php }?>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Nama Akun Trading</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control disabling" id="broker_username" value="<?=($chk_dta!='')?$chk_dta->broker_username:''?>" name="broker_username" placeholder="Input nama akun trading anda" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Nomor Akun Trading</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control disabling" id="real_account" value="<?=($chk_dta!='')?$chk_dta->real_account:''?>" name="real_account" placeholder="Input nomer akun trading anda disini !" required>
                              </div>
                            </div>
                            <div class="form-group">
                            	<div class="col-sm-12 submit_btn" align="center">
                                	<button type="submit" class="btn btn-primary" id="finish">Submit</button>
                                    <input type="hidden" name="id_broker" value="<?=$row->id_broker?>">
                                </div>
                            </div>
                            </form>
                        </div>
                        <?php }?>
                        <!--=======================================================-->
                        <!--Tab untuk Deposit Awal-->
                        <div class="tab-pane fade" id="tabdeposit">
                        	<div class="margin_top3"></div> 
                            <h4 style="text-align:center">Deposit Awal (Wajib) &nbsp;<a class="edit_btn" style="cursor:pointer"><i class="fa fa-gear"></i></a></h4>
                            <br>
                            <form class="form-horizontal" enctype="multipart/form-data" action="<?=site_url("member/depo_awal")?>" method="post">
                            <div class="alert alert-info" role="alert"><p>Sebagai persyaratan awal, calon member wajib melakukan deposit Minimal $10 di salah satu broker (Broker bebas). Dan wajib di tradingkan. Deposit ini sebagai syarat pertama kali saja diawal pendaftaran menjadi member FGS.</p></div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Pilih Broker</label>
                              <div class="col-sm-7">
                              	<select class="form-control disabling" name="id_broker" required>
                                	<?php foreach($broker->result() as $row){?>
                                  	<option <?=$member->id_broker==$row->id_broker?"selected":""?> value="<?=$row->id_broker?>"><?=$row->name?></option>
                                  	<?php }?>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Nominal Deposit US$</label>
                              <div class="col-sm-7">
                                <input min="10" value="<?=$member->nominal_deposit?>" type="number" class="form-control disabling" id="nominal_deposit" name="nominal_deposit" placeholder="Input nominal deposit anda disini !" required>
                              </div>
                            </div>
                            <div class="form-group">
                            	<div class="col-sm-12 submit_btn" align="center">
                                	<button type="submit" class="btn btn-primary" id="finish">Submit</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>          
</div>
<div class="margin_top5"></div> 

<script>
flag=1;
$(document).ready(function()
{
	$('.disabling').attr('disabled', 'disabled');
	$('.submit_btn').css('display', 'none');
	$(".edit_btn").click(function(){
		if(flag==1){
			$('.disabling').removeAttr('disabled', 'disabled');
			$('.submit_btn').css('display', 'block');
			flag=0;
		}else{
			$('.disabling').attr('disabled','disabled');
			$('.submit_btn').css('display', 'none');
			flag=1;
		}
	});
})

</script>