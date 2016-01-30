<div class="modal-body">
	<div class="row">
    	<div class="col-xs-12">
        	<div class="box">
                <div class="box-header with-border" align="center">
                  <h3 class="box-title"><strong>Detail Changer</strong></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="broker_name" class="form-control" value="<?=$changer->first_name.' '.$changer->last_name;?>" />
                    </div>
                    <div class="form-group">
                      <label>Broker</label>
                      <input type="text" name="link_ib" class="form-control" value="<?=$changer->name;?>" />
                    </div>
                    <div class="form-group">
                    	<div class="row">
                            <div class="col-xs-4">
                              <label>Jumlah</label>
                              <input type="text" name="jual" class="form-control" value="<?=number_format($changer->nilai,2);?>" required />
                            </div>
                            <div class="col-xs-4">
                              <label>Nilai Tukar</label>
                              <input type="text" name="beli" class="form-control" value="<?=number_format($changer->nilai_tukar,2);?>" required />
                            </div>
                            <div class="col-xs-4">
                              <label>Total $</label>
                              <input type="text" name="stock" class="form-control" value="<?=number_format(($changer->nilai/$changer->nilai_tukar),2);?>" required />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                    	<div class="row">
                            <div class="col-xs-6">
                              <label>Nomor Akun Trading</label>
                              <input type="text" name="jual" class="form-control" value="<?=$changer->no_akun_trading;?>" required />
                            </div>
                            <div class="col-xs-6">
                              <label>Nama Akun Trading</label>
                              <input type="text" name="beli" class="form-control" value="<?=$changer->nama_akun_trading;?>" required />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label>Nama Bank</label>
                      <input type="text" name="link_client" class="form-control" value="<?=$changer->nama_bank;?>" />
                    </div>
                    <div class="form-group">
                    	<div class="row">
                            <div class="col-xs-6">
                              <label>Nomor Rekening</label>
                              <input type="text" name="jual" class="form-control" value="<?=$changer->no_rek;?>" required />
                            </div>
                            <div class="col-xs-6">
                              <label>Nama Rekening</label>
                              <input type="text" name="beli" class="form-control" value="<?=$changer->nama_rek;?>" required />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                    	<div class="row">
                            <div class="col-xs-6">
                              <label>Tanggal Mulai</label>
                              <input type="text" name="jual" class="form-control" value="<?=$changer->timestamp;?>" required />
                            </div>
                            <div class="col-xs-6">
                              <label>Tanggal Approve</label>
                              <input type="text" name="beli" class="form-control" value="<?=$changer->approve_time;?>" required />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>