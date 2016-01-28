<div class="margin_top5"></div> 
<div class="container">
	<?php isset($side_menu)?$this->load->view($side_menu):'side_menu'?>
    <div class="content_right">
        <div class="call">
            <h4 style="text-align:center">Exchange Form</h4>
            <br>
            <br>
            <form class="form-horizontal" enctype="multipart/form-data" action="<?=site_url("member/exchange_process")?>" method="post">
            	<div>
            	<a href="<?=site_url("member/exchange_form/$broker->id_broker")?>"><img src="<?=base_url()?>/media/images/logo_broker/broker-<?=$broker->id_broker?>.png" alt="" /></a>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Exchange type</label>
                  <div class="col-sm-7">
                    <select class="form-control" id="jenis_transaksi" name="jenis_transaksi" required>
                    	<option value="">-Pilih transaksi-</option>
                    	<option value="0">BELI</option>
                    	<option value="1">JUAL</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jumlah</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="nilai" name="nilai" required>
                    <span id="nilai_tukar"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Saldo $</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="saldo" name="saldo" disabled><br>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No Akun Trading</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="no_akun_trading" name="no_akun_trading" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Akun Trading</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="nama_akun_trading" name="nama_akun_trading" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Bank</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="nama_bank" name="nama_bank" value="<?=$member->bank_name?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No Rekening</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="no_rek" name="no_rek" value="<?=$member->bank_acc_num?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Rekening</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="nama_rek" name="nama_rek" value="<?=$member->bank_acc_name?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Notes</label>
                  <div class="col-sm-7">
                    <textarea class="form-control" id="notes" name="notes"></textarea>
                  </div>
                </div>
                <br>
                <div class="form-group" align="center">
                  <div class="col-sm-12 submit_btn">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <input type="hidden" name="id_broker" value="<?=$broker->id_broker?>">
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
	var tukar=1;
	$("#jenis_transaksi").change(function(){
		sele=$("#jenis_transaksi option:selected").val();
		if(sele==0)
			tukar=<?=$broker->beli?>;
		else
			tukar=<?=$broker->jual?>;
			
		$("#nilai").val(tukar);
		$("#nilai_tukar").html("Rp "+tukar);
		jml=($("#nilai").val()=="")?0:$("#nilai").val();
		$("#saldo").val((jml/tukar));
	});
	$("#nilai").keyup(function(){
		jml=($("#nilai").val()=="")?0:$("#nilai").val();
		$("#saldo").val((jml/tukar));
	});
})

</script>