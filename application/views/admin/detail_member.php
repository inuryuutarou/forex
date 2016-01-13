<div class="modal-body">
	<div class="row">
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
                    <div class="form-group">
                      <label>ID Member</label>
                      <input type="text" class="form-control" value="<?=$member->id_member;?>" disabled/>
                    </div>
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
                      <input type="text" class="form-control" value="<?=$member->refferer_first_name.' '.$member->refferer_last_name;?>" disabled/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>