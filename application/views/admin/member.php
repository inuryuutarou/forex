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
        <div class="box-tools">
        <?=form_open('admin/member');?>
          <div class="input-group" style="width: 200px;">
            <input type="text" name="search_member" class="form-control input-sm pull-right" value="<?=$search_member;?>" placeholder="search name">
            <div class="input-group-btn">
              <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
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
              <th>Action</th>
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
			  $valid = "Update Profile";
			  if($row->valid == '2')
			  $valid = "Update Broker";
			  if($row->valid == '3')
			  $valid = "Valid";
			  ?>
            <tr>
                <td><?=$row->username;?></td>
                <td><?=$row->first_name.' '.$row->last_name;?></td>
                <td><?=$row->id_member;?></td>
                <td><?=$valid;?></td>
                <td align="right">
                <?php if($row->valid == '2') { $disabled = ''; } ?>
                <a href="<?=site_url()?>/admin/approve/<?=$row->id_member;?>" class="link-approve <?=$disabled;?>" style="margin-right: 10px">
                	<button <?=$disabled;?> class="btn btn-primary btn-md btn-par">Approve</button></a>
                <a href="<?=site_url()?>/admin/detail_member/<?=$row->id_member;?>" data-toggle="modal" data-target="#detail_member"><span><i class="glyphicon glyphicon-list-alt"></i></span> Lihat Detail</a>
            </tr></td><?php
			  }
		  } ?>
          </tbody>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
</section><!-- /.content -->

<div class="modal fade" id="detail_member" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
  });		 
</script>
