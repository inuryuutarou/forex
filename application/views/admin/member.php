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
            <tr>
                <td>Tes</td>
                <td>Tes</td>
                <td>Tes</td>
                <td>Waiting Approval</td>
                <td align="center"><a href="<?=site_url()?>/admin/detail_member" data-toggle="modal" data-target="#detail_member"><span><i class="glyphicon glyphicon-list-alt"></i></span> Lihat Detail</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><button class="btn btn-primary btn-md btn-par">Approve</button></a></td>
            </tr>
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
  });		 
</script>
