<div class="modal-body">
	<div class="row">
    	<div class="col-xs-12">
        	<div class="box">
                <div class="box-header with-border" align="center">
                  <h3 class="box-title"><strong>Insert Broker</strong></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                	<form enctype="multipart/form-data" id="form_update_broker" action="<?=site_url('admin/save_broker');?>" method="post">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="broker_name" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Link IB</label>
                      <input type="text" name="link_ib" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Link IB sama untuk seluruh member?</label><br>
                      <label><input type="radio" name="absolute_ib" style="vertical-align: top" value="0" checked> Tidak</label>&nbsp; | &nbsp;
                      <label><input type="radio" name="absolute_ib" style="vertical-align: top" value="1" > Ya</label>
                    </div>
                    <div class="form-group">
                      <label>Link Client</label>
                      <input type="text" name="link_client" class="form-control"/>
                    </div>
                     <div class="form-group">
                      <label>Link Client sama untuk seluruh member?</label><br>
                      <label><input type="radio" name="absolute_client" style="vertical-align: top" value="0" checked> Tidak</label>&nbsp; | &nbsp;
                      <label><input type="radio" name="absolute_client" style="vertical-align: top" value="1" > Ya</label>
                    </div>
                     <div class="form-group">
                      <label>Wajib diisi untuk konfirm member?</label><br>
                      <label><input type="radio" name="required" style="vertical-align: top" value="0"> Tidak</label>&nbsp; | &nbsp;
                      <label><input type="radio" name="required" style="vertical-align: top" value="1" checked> Ya</label>
                    </div>
                   <div class="form-group">
                        <div class="row">
                            <div class="col-xs-4">
                              <label>Jual</label>
                              <input type="number" step="any" name="jual" class="form-control" required />
                            </div>
                            <div class="col-xs-4">
                              <label>Beli</label>
                              <input type="number" step="any" name="beli" class="form-control" required />
                            </div>
                            <div class="col-xs-4">
                              <label>Stock</label>
                              <input type="number" step="any" name="stock" class="form-control" required />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                    	<label>Logo</label>
                        <input type="file" name="logo_broker" accept="image/x-png" />
                    </div>
                    <div class="form-group">
						<button type="submit" id="btn_add_broker" class="btn btn-block btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<script type="text/javascript" src="<?=base_url('media/js/jquery.form.min.js');?>"></script>
<script type="text/javascript">
	$(function(){
		$("#form_update_broker").ajaxForm({
			beforeSubmit : function(){
				$("#btn_add_broker").text('Submitting..').attr('disabled',true);
			},
			success : function(res){
				$("#btn_add_broker").text('Submit').attr('disabled',false);
				if(res != 'ok')
				alert('Error insert data');
				else
				document.location.reload();
			}
		});
	});
</script>-->