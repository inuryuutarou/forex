<style type="text/css">
@import "<?php echo base_url('media/css/base/jquery.ui.all.css'); ?>";
</style>
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
                <td style="width: 200px">Auto refferal</td>
                <td>
					<select id="rev_opt" name="auto_refferal" class="form-control" style="width:100px; display: inline-block">
                    	<option <?=$config=='random'?'selected':''?> >random</option>
                    	<option <?=$config=='fgs'?'selected':''?> >fgs</option>
                    	<option <?=($config!='random')?(($config!='fgs')?'selected':''):''?> >other</option>
                    </select>
                    <input id="ref_other" type="text" name="auto_refferal_text" class="form-control" style="width:170px; display: none" value="<?=$auto_member_ref;?>" />
                    <input type="hidden" name="hdn_ref_member_id" id="hdn_ref_member_id" value="<?=$auto_member_ref_id;?>" />
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
<script src="<?=base_url()?>/media/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>media/js/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?=base_url()?>media/js/dataTables.bootstrap.js" type="text/javascript"></script>

<script type="text/javascript">
  
  $(document).ready(function(){   
	 $('#rev_opt').change(function(){
		selval=$('#rev_opt option:selected').html();
		if(selval=='other'){
			$("#ref_other").css('display','inline-block');
		}
		else{
			$("#ref_other").css('display','none');
		}
	 });
	 
	 $('#rev_opt').trigger('change');
	 
	 $( "#ref_other" ).autocomplete({
      source: function(request,response){
		  ajaxtext = 'Mencari anggota..';
		  $.ajax({
          url: "<?php echo site_url('admin/suggest_member'); ?>",
		  method: 'post',
          dataType: "json",
          data: {
            term: request.term
          },
          success: function( res ) {
			response($.map(res.response, function (value, key) {
                return {
                    label: value.value,
                    value: value.value,
					id_member : value.id_member,
					id_card_number : value.nomor_identitas
                };
            }));
          }
        });
	  	/*$.post('<?php //echo site_url('resource/cari_anggota'); ?>',function(res){
			return res.response;
		},'json');*/
	  },
      focus: function( event, ui ) {
        return false;
      },
      select: function( event, ui ) {
 		$("#hdn_ref_member_id").val(ui.item.id_member);
		$("#ref_other").val(ui.item.value);
        return false;
      }
    })
    .data( "ui-autocomplete" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<a>" + item.label + "<br>" + item.id_card_number + "</a>" )
        .appendTo( ul );
    };
	 
  });		 
</script>
