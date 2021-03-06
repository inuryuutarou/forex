<!-- DATA TABLES -->
<link href="<?=base_url()?>/media/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Member
    <small>Halaman ini menampilkan daftar member yang melakukan registrasi pada sistem, baik member yang sudah diapprove maupun yang masih menunggu diapproved </small>
    <!--<span class="pull-right">
  		<a href="<?=site_url()?>/admin/tambah_peserta" data-toggle="modal" data-target="#tambah_peserta"><button class="btn btn-block btn-primary">Tambah Peserta</button></a>
  	</span>-->
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="box">
      <div class="box-header">
        <h3 class="box-title">Daftar Member</h3>
        <div class="form-inline" style="float: right">
        <?=form_open('admin/member');?>
            <button type="submit" class="btn btn-primary btn-sm pull-right"><i class="fa fa-fw fa-search"></i> search</button>
            <input type="text" name="search_member" class="form-control input-sm pull-right" value="<?=$search_member;?>" placeholder="search name" 
            	style="margin-right: 5px">
                <select name="filter_status" id="filter_status" class="form-control input-sm pull-right" style="margin-right: 5px">
                    <option value="">-filter status-</option>
                    <option value="3">Valid</option>
                    <option value="2">Admin Valid</option>
                    <option value="1">Update Broker</option>
                    <option value="0">New</option>
                </select>
          <?=form_close();?>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body">
        <table id="member_table" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Username</th>
              <th>Name</th>
              <th>ID Member</th>
              <th>Status</th>
              <th style="text-align:right">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
		  if($member->num_rows() > 0) {
			  foreach($member->result() as $row) { 
			  $disabled = "disabled";
			  if($row->valid == '0')
			  $valid = "New";
			  if($row->valid == '1')
			  $valid = "Update Broker";
			  if($row->valid == '2')
			  $valid = "Admin Valid";
			  if($row->valid == '3')
			  $valid = "Valid";
			  ?>
            <tr>
                <td><?=$row->username;?></td>
                <td><?=$row->first_name.' '.$row->last_name;?></td>
                <td><?=$row->id_member;?></td>
                <td><?=$valid;?></td>
                <td align="right" id="td_action">
                <?php if($row->valid == '2') { $disabled = ''; } ?>
                <?php
				if($row->valid < 3) { ?>
                <a href="<?=site_url()?>/admin/approve/<?=$row->id_member;?>" class="link-approve <?=$disabled;?>" style="margin-right: 10px">
                	<button <?=$disabled;?> class="btn btn-primary btn-md btn-par">Approve</button></a>
                <?php
				} ?>
                <a href="<?=site_url()?>/admin/detail_member/<?=$row->id_member;?>" data-toggle="modal" data-target="#detail_member"><span><i class="glyphicon glyphicon-list-alt" title="detail member"></i></span></a>&nbsp; &nbsp;
                <a href="<?=site_url()?>/admin/member_broker_detail/<?=$row->id_member;?>" data-toggle="modal" data-target="#detail_member"><span><i class="glyphicon glyphicon-user" title="broker detail"></i></span></a>&nbsp; &nbsp;
                <a href="<?=site_url()?>/admin/delete_member/<?=$row->id_member;?>" class="link-delete-member"><span><i class="glyphicon glyphicon-trash" title="hapus"></i></span></a>
            </tr></td><?php
			  }
		  } ?>
          <tr>
          	<td colspan="5"><?=$this->pagination->create_links();?></td>
          </tr>
          </tbody>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
</section><!-- /.content -->

<div class="modal fade" id="detail_member" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width: 70%">
    <div class="modal-content">
    </div>
  </div>
</div>

<!-- DATA TABES SCRIPT -->
<script src="<?=base_url()?>media/js/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?=base_url()?>media/js/dataTables.bootstrap.js" type="text/javascript"></script>

<script type="text/javascript">
  
  $(document).ready(function(){
	 $('#detail_member').on('hidden.bs.modal', function() {  
		  $(this).removeData('bs.modal');  
	 });
	 $(".link-approve").click(function(event){
		  event.preventDefault();
		  if($(this).hasClass('disabled'))
		  return false;
		  var confirmApprove = confirm('Approve member ini?');
		  if(confirmApprove === false)
		  return false;
		  
		  var url = $(this).attr('href');
		  $.post(url,function(){
			  document.location.reload();
		  });
	 });
	 $(".link-delete-member").click(function(event){
		 event.preventDefault();
		 var confirmDelete = confirm('Apakah anda yakin akan mengahapus member ini?');
		 if(confirmDelete) {
			 var url = $(this).attr("href");
			 $.post(url);
			 $(this).parent().parent().remove();
		 }
	 });
	 
	 <?php if($filter_status != "" || $filter_status !== FALSE) { ?>
	
	$("#filter_status").val('<?=$filter_status;?>');
	
		 <?php
	 } ?>
	 
  });		 
</script>
