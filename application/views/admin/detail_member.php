<div class="modal-body">
	<div class="row" id="box-form-detail-member">
    	<div class="col-xs-12">
        	<div class="box">
                <div class="box-header with-border" align="center">
                  <h3 class="box-title"><strong>Detail Member</strong></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                	<div class="form-group">
                      <label>Tanggal Daftar</label>
                      <input type="text" class="form-control" value="<?=date('d/m/Y, H:i:s',strtotime($member->register_date));?>" disabled/>
                    </div>
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" value="<?=$member->username;?>" disabled/>
                    </div>
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" value="<?=$member->first_name.' '.$member->last_name;?>" disabled/>
                    </div>
                    <!--<div class="form-group">
                      <label>ID Member</label>
                      <input type="text" class="form-control" value="<?=$member->id_member;?>" disabled/>
                    </div>-->
                    <div class="form-group">
                      <label>Nomor Identitas</label>
                      <input type="text" class="form-control" value="<?=$member->id_card_number;?>" disabled/>
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control" rows="4" disabled><?=$member->address;?></textarea>
                    </div>
                    <div class="form-group">
                      <label>Negara</label>
                      <input class="form-control" rows="4" disabled value="<?=$member->country;?>" />
                    </div>
                    <div class="form-group">
                      <label>Provinsi</label>
                      <input class="form-control" rows="4" disabled value="<?=$member->province;?>" />
                    </div>
                    <div class="form-group">
                      <label>Kota</label>
                      <input class="form-control" rows="4" disabled value="<?=$member->city;?>" />
                    </div>
                    <div class="form-group">
                      <label>Kode Pos</label>
                      <input class="form-control" rows="4" disabled value="<?=$member->postal;?>" />
                    </div>
                    <div class="form-group">
                      <label>Nama Bank</label>
                      <input class="form-control" rows="4" disabled value="<?=$member->bank_name;?>" />
                    </div>
                    <div class="form-group">
                      <label>Cabang Bank</label>
                      <input class="form-control" rows="4" disabled value="<?=$member->bank_branch;?>" />
                    </div>
                    <div class="form-group">
                      <label>Nama Akun Bank</label>
                      <input class="form-control" rows="4" disabled value="<?=$member->bank_acc_name;?>" />
                    </div>
                    <div class="form-group">
                      <label>Nomor Akun Bank</label>
                      <input class="form-control" rows="4" disabled value="<?=$member->bank_acc_num;?>" />
                    </div>
                    <div class="form-group">
                      <label>FB Username</label>
                      <input class="form-control" rows="4" disabled value="<?=$member->fb_username;?>" />
                    </div>
                    <div class="form-group">
                      <label>Last Update</label>
                      <input class="form-control" rows="4" disabled value="<?=date('d/m/Y, H:i:s',strtotime($member->last_update));?>" />
                    </div>
                    <div class="form-group">
                      <label>Refferer</label>
                      <input type="text" class="form-control" value="<?=$member->refferer_first_name.' '.$member->refferer_last_name;?>" 
                      disabled/>
                    </div>
                    <div class="form-group">
                      <label>Broker</label>
                      <div>
                      <?php
					  if($member_broker->num_rows() > 0) {
						 $data_broker = $member_broker->row();
						 echo $data_broker->member_broker; 
					  } else {
						 echo '-'; 
					  }
					  ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Kartu Identitas</label>
                      <div>
						  <?php
                          if(is_file("media/img/member_id/id_card_".$member->id_member.".jpg"))
                          echo img(array("src"=>"media/img/member_id/id_card_".$member->id_member.".jpg","width"=>"400"));
                          else
                          echo 'not uploaded';
                          ?>
                      </div>
                    </div>
                    <div class="form-group">
                    	<button type="button" id="button-edit-member" class="btn btn-primary btn-md">Edit</button>
                        <button type="button" id="button-update-member" class="btn btn-primary btn-md" disabled>Save</button>
                    </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(function(){
	$("#button-edit-member").click(function(){
		$("#box-form-detail-member input, #box-form-detail-member textarea").attr("disabled",false);
		$("#button-update-member").attr("disabled",false);
	});
});
</script>