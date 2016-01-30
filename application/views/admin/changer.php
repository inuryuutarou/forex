<!-- DATA TABLES -->
<link href="<?=base_url()?>/media/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Changer
    <small></small>
    <span class="pull-right">
  	</span>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="box">
      <div class="box-header">
        <h3 class="box-title">Daftar Changer Request</h3>
      </div><!-- /.box-header -->
      <div class="box-body">
        <table id="broker_table" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Name</th>
              <th>Tipe</th>
              <th>Jumlah</th>
              <th>Nilai Tukar</th>
              <th>Total $</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
		  if($changer->num_rows() > 0) {
			  foreach($changer->result() as $row) {
			  ?>
            <tr>
                <td><?=$row->first_name;?> <?=$row->last_name;?></td>
                <td><?=($row->jenis_transaksi==1)?"Jual":"Beli";?></td>
                <td><?=number_format($row->nilai);?></td>
                <td><?=number_format($row->nilai_tukar);?></td>
                <td><?=number_format(($row->nilai/$row->nilai_tukar),2);?></td>
                <td align="left">
                <a href="<?=site_url()?>/admin/detail_changer/<?=$row->id_changer;?>" class="link-detail-changer" data-toggle="modal" data-target="#modal_changer"><span><i class="glyphicon glyphicon-eye-open"></i></span> Detail</a>&nbsp;&nbsp;
                <!--<a href="<?=site_url()?>/admin/delete_changer/<?=$row->id_changer;?>" class="link-delete-changer" onclick="return confirm('Yakin akan menghapus broker ini ?')"><span><i class="glyphicon glyphicon-trash"></i></span> Delete</a>-->
                <?php
				if($row->approved == '0') { ?>
                &nbsp;&nbsp;
                <a href="<?=site_url()?>/admin/approve_changer/<?=$row->id_changer;?>" class="link-approve-changer" onclick="return confirm('Approve changer ini ?')"><span><i class="glyphicon glyphicon-check"></i></span> Approve</a></td>
                <?php
				} ?>
            </tr>
            <?php
			  }
		  } ?>
          </tbody>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
</section><!-- /.content -->

<div class="modal fade" id="modal_changer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
	 /*$('#insert_broker, #update_broker').on('hidden.bs.modal', function() {  
		  $(this).removeData('bs.modal');  
	 });
	 $(".link-delete-broker").click(function(event){
		 event.preventDefault();
		  var e = $(this);
		  var url = e.attr('href');
		  $.post(url);
		  e.parent().parent().remove();
	 });*/
	 
	 $(".link-approve-changer").click(function(){
	 	 event.preventDefault();
		  var e = $(this);
		  var url = e.attr('href');
		  $.post(url,function(){
		  	  document.location.reload();
		  });
	 });
  });		 
</script>
