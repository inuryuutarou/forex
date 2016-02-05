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
                            <li class="active"><a href="#tab1default" data-toggle="tab">Account Verification</a></li>
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
                            <h4 style="text-align:center">Account Verification</h4>
                            <br>
                            <form class="form-horizontal" enctype="multipart/form-data" action="<?=site_url("member/update_profile")?>" method="post">
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Username</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?=$member->username?>" disabled readonly>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Email</label>
                                  <div class="col-sm-7">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?=$member->email?>" disabled readonly>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">PIN Deposit/Withdraw*</label>
                                  <div class="col-sm-7">
                                    <input type="password" class="form-control" id="pin" name="pin" maxlength="4" <?=($member->pin!='')?'placeholder="PIN already set" readonly':'placeholder="PIN" required'?>>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">First Name*</label>
                                  <div class="col-sm-4">
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="<?=$member->first_name?>" required>
                                  </div>
                                  <label class="col-sm-2 control-label">Last Name*</label>
                                  <div class="col-sm-4">
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"  value="<?=$member->last_name?>" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Facebook Name</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control" id="fb_username" name="fb_username" value="<?=$member->fb_username?>" placeholder="Facebook Name">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Facebook URL</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control" id="fb_link" name="fb_link" value="<?=$member->fb_link?>" placeholder="Facebook Link">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Address*</label>
                                  <div class="col-sm-7">
                                    <textarea class="form-control" id="address" name="address" placeholder="Address" required><?=$member->address?></textarea>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">City*</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control" id="city" name="city" value="<?=$member->city?>" placeholder="City" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Province*</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control" id="province" name="province" value="<?=$member->province?>" placeholder="Province" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Postal Code</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control" id="postal" name="postal" value="<?=$member->postal?>" placeholder="Postal">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Country*</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control" id="country" name="country" value="<?=$member->country?>" placeholder="Country" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Phone Number*</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control" id="phone" name="phone" value="<?=$member->phone?>" placeholder="Phone" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Instant Messenger</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control" id="im" name="im" value="<?=$member->im?>" placeholder="Instant Messenger">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">ID Card Number (KTP)*</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control" id="id_card_number" name="id_card_number" value="<?=$member->id_card_number?>" placeholder="ID Card (KTP)" required>
                                  </div>
                                </div>
								<?php if(is_file("media/img/member_id/id_card_".$member->id_member.".jpg")){?>
                                <div class="form-group">
                                  <div class="col-sm-2"> </div>
                                  <div class="col-sm-7">
                                    <img src="<?=base_url("media/img/member_id/id_card_".$member->id_member.".jpg")?>" class="col-xs-10">
                                  </div>
                                </div>
                                <?php }?>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">ID Card (KTP) File*</label>
                                  <div class="col-sm-7">
                                    <input type="file" class="form-control" id="ktp_file" name="ktp_file" placeholder="ID Card (KTP) File">
                                  </div>
                                </div>
                                <div class="call">
                                    <h5 class="col-sm-12">Bank Data</h5>
                                    <div class="form-group">
                                    
                                      <label class="col-sm-2 control-label">Bank Name*</label>
                                      <div class="col-sm-7">
                                        <input type="text" class="form-control" id="bank_name" name="bank_name" value="<?=$member->bank_name?>" placeholder="Bank Name" required>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                    
                                      <label class="col-sm-2 control-label">Bank Account Name*</label>
                                      <div class="col-sm-7">
                                        <input type="text" class="form-control" id="bank_acc_name" name="bank_acc_name" value="<?=$member->bank_acc_name?>" placeholder="Bank Account Name" required>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                    
                                      <label class="col-sm-2 control-label">Bank Account Number*</label>
                                      <div class="col-sm-7">
                                        <input type="text" class="form-control" id="bank_acc_num" name="bank_acc_num" value="<?=$member->bank_acc_num?>" placeholder="Bank Account Number" required>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                    
                                      <label class="col-sm-2 control-label">Bank Branch*</label>
                                      <div class="col-sm-7">
                                        <input type="text" class="form-control" id="bank_branch" name="bank_branch" value="<?=$member->bank_branch?>" placeholder="Bank Branch" required>
                                      </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                  <div class="col-sm-12" align="center">
                                    <input type="hidden" name="verify" value="<?=$member->id_member?>">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                                </div>
                            </form>
                        </div>
                        <!--=======================================================-->
                        <!--Tab untuk form-->
                        <?php $i=1;foreach($broker->result() as $row){$i++;
								$chk=$this->m_member->check_broker($this->session->userdata('id_member'),$row->id_broker);
								$chk_dta=($chk->num_rows()!=0)?$chk->row():'';
						?>
                        <div class="tab-pane fade" id="tab<?=$i?>default">
                        	<div class="margin_top3"></div> 
                            <h4 style="text-align:center"><?=$row->name?></h4>
                            <br>
                            <form class="form-horizontal" action="<?=site_url("member/broker_add")?>" method="post">
                            <p>Masuk melalui semua link berikut ini ketika mendaftar</p>
                            <div class="alert alert-info" role="alert"><a href="<?=$row->link_ib?>" target="_blank"><h4>Buka akun IB <?=$row->name?> disini !</h4></a></div>
							<?php if($row->link_client!=""){?>
                            <div class="alert alert-info" role="alert"><a href="<?=$row->link_client?>" target="_blank"><h4>Buka akun trading <?=$row->name?> disini !</h4></a></div>
                            <?php }?>
                            <p>Setelah melakukan daftar, pastikan akun IB dan Akun trading anda telah diverifikasi oleh broker, 
                            dan pastikan Link IB dan data akun trading yang anda masukkan benar pada form dibawah</p>
                            <br>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">IB Link</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="link_ib" name="link_ib" value="<?=($chk_dta!='')?$chk_dta->link_ib:''?>" placeholder="Input link IB anda disini !" required>
                              </div>
                            </div>
							<?php if($row->link_client!=""){?>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Client Link</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="link_client" name="link_client" value="<?=($chk_dta!='')?$chk_dta->link_client:''?>" placeholder="Input link afiliasi untuk akun trading anda disini !" required>
                              </div>
                            </div>
							<?php }else{?>
                                <input type="hidden" value="" readonly class="form-control" name="link_client" value="<?=($chk_dta!='')?$chk_dta->link_client:''?>">
                            <?php }?>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Nama Akun Trading</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="broker_username" value="<?=($chk_dta!='')?$chk_dta->broker_username:''?>" name="broker_username" placeholder="Input nama akun trading anda" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Nomor Akun Trading</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="real_account" value="<?=($chk_dta!='')?$chk_dta->real_account:''?>" name="real_account" placeholder="Input nomer akun trading anda disini !" required>
                              </div>
                            </div>
                            <div class="form-group">
                            	<div class="col-sm-12" align="center">
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
                            <h4 style="text-align:center">Deposit Awal (Wajib)</h4>
                            <br>
                            <form class="form-horizontal" enctype="multipart/form-data" action="#" method="post">
                            <div class="alert alert-info" role="alert"><p>Sebagai persyaratan awal, calon member wajib melakukan deposit Minimal $10 di salah satu broker (Broker bebas). Dan wajib di tradingkan. Deposit ini sebagai syarat pertama kali saja diawal pendaftaran menjadi member FGS.</p></div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Pilih Broker</label>
                              <div class="col-sm-7">
                              	<select class="form-control" required>
                                  <option>Exness</option>
                                  <option>Instaforex</option>
                                  <option>XM</option>
                                  <option>Orbex</option>
                                  <option>Hotforex</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Nominal Deposit</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="nominal_deposit" name="nominal_deposit" placeholder="Input nominal deposit anda disini !" required>
                              </div>
                            </div>
                            <div class="form-group">
                            	<div class="col-sm-12" align="center">
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
