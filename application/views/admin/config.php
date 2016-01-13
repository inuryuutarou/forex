<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Config
    <small></small>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="box">
      <div class="box-header">
        <h3 class="box-title">Setup config</h3>
      </div><!-- /.box-header -->
      <div class="box-body">
      	<form action="<?=site_url('admin/save_config')?>" method="post">
        <table class="table table-bordered table-striped">
          <tbody>
            <tr>
            	<?php $config=$this->m_admin->get_data('*','config',"Config_name='auto_refferal'")->row()->value;?>
                <td>Auto refferal</td>
                <td>
					<select id="rev_opt" name="auto_refferal">
                    	<option <?=$config=='random'?'selected':''?> >random</option>
                    	<option <?=$config=='fgs'?'selected':''?> >fgs</option>
                    	<option <?=($config!='random')?(($config!='fgs')?'selected':''):''?> >other</option>
                    </select>
                    <input id="ref_other" type="text" name="auto_refferal_text" value="<?=$config;?>">
                </td>
            </tr>
          </tbody>
        </table>
        <div class="form-group">
          <div class="col-sm-12 submit_btn">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
        </form>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
</section><!-- /.content -->

<div class="modal fade" id="insert_broker" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    </div>
  </div>
</div>

<div class="modal fade" id="update_broker" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    </div>
  </div>
</div>

<!-- DATA TABES SCRIPT -->
<script src="<?=base_url()?>media/js/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?=base_url()?>media/js/dataTables.bootstrap.js" type="text/javascript"></script>

<script type="text/javascript">
  
  $(document).ready(function(){   
	 $('#rev_opt').change(function(){
		selval=$('#rev_opt option:selected').html();
		if(selval=='other'){
			$("#ref_other").css('display','block');
		}
		else{
			$("#ref_other").css('display','none');
		}
	 });
	 
	 $('#rev_opt').trigger('change');
	 
  });		 
</script>
