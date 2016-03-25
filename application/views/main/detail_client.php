<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                    	<div class="margin_top2"></div> 
                        <div class="box-header with-border" align="center">
                          <h3 class="box-title"><strong>Detail Member</strong></h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="form-group">
                              <label>Username</label>
                              <input type="text" class="form-control" value="<?=$member->username?>" disabled/>
                            </div>
                            <div class="form-group">
                              <label>Nama</label>
                              <input type="text" class="form-control" value="<?=$member->first_name?> <?=$member->last_name?>" disabled/>
                            </div>
                            <div class="form-group">
                              <label>ID Member</label>
                              <input type="text" class="form-control" value="<?=$member->id_member?>" disabled/>
                            </div>
                             <div class="form-group">
                              <label>Status registrasi</label>
                              <input type="text" class="form-control" value="<?=($member->valid==3)?"approved":"pending"?>" disabled/>
                            </div>
                           <div class="form-group">
                              <label>Facebook Name</label>
                              <input type="text" class="form-control" value="<?=$member->fb_username?>" disabled>
                            </div>
                            <div class="form-group">
                              <label>Facebook URL</label>
                              <input type="text" class="form-control" value="<?=$member->fb_link?>" disabled>
                            </div>
                            <div class="form-group">
                              <label>Address</label>
                              <textarea class="form-control" disabled><?=$member->address?></textarea>
                            </div>
                            <div class="form-group">
                              <label>City</label>
                              <input type="text" class="form-control" value="<?=$member->city?>" disabled>
                            </div>
                            <div class="form-group">
                              <label>Province</label>
                              <input type="text" class="form-control" value="<?=$member->province?>" disabled>
                            </div>
                            <div class="form-group">
                              <label>Postal Code</label>
                              <input type="text" class="form-control" value="<?=$member->postal?>" disabled>
                            </div>
                            <div class="form-group">
                              <label>Country</label>
                              <input type="text" class="form-control" value="<?=$member->country?>" disabled>
                            </div>
                            <div class="form-group">
                              <label>Phone Number</label>
                              <input type="text" class="form-control" value="<?=$member->phone?>" disabled>
                            </div>
                            <div class="form-group">
                              <label>Instant Messenger</label>
                                <input type="text" class="form-control" value="<?=$member->im?>" disabled>
                            </div>
                            <?php if(is_file("media/img/member_id/id_card_".$member->id_member.".jpg")){?>
                            <div class="form-group">
                                <img src="<?=site_url("member/file_get/".$member->id_member)?>" alt="KTP" class="col-xs-10">
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>