<div class="margin_top5"></div> 
<div class="container">
	<?php isset($side_menu)?$this->load->view($side_menu):'side_menu'?>
    <div class="content_right">
        <div class="call">
            <h4 style="text-align:center">My Profile &nbsp;<a id="edit_btn" style="cursor:pointer"><i class="fa fa-gear"></i></a></h4>
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
                    <img src="<?=base_url("media/img/member_id/id_card_".$member->id_member.".jpg")?>" class="col-xs-10">
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
    </div>          
</div>
<div class="margin_top5"></div> 

<script>
flag=1;
$(document).ready(function()
{
	$('.disabling').attr('disabled', 'disabled');
	$('.submit_btn').css('display', 'none');
	$("#edit_btn").click(function(){
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