<style>
	table.innertable
	{
		display: none;
	}
</style>
<div class="container">
    <div class="row">
    	<div class="col-md-3">
            <?php isset($side_menu)?$this->load->view($side_menu):'side_menu'?>
        </div> 
        <div class="col-md-9">
        	<div class="call">
            	<h4>My Client</h4>
                <br>
                <div class="table-responsive">
                	<table class="tablesorter table table-bordered">
                    	<thead bgcolor="#E9E9E9">
                        	<th></th>
                        	<th>Username</th>
                            <th>Name</th>
                            <th>ID Member</th>
                            <th>Action</th>
                        </thead>
                    	<tbody>
                        	<?php foreach($list_client->result() as $cl){?>
                        	<tr>
                            	<td><a href="javascript:void(0)" class="expand" data-id='<?=$id?>'>+</a></td>
                            	<td><?=$cl->username?></td>
                                <td><?=$cl->first_name?> <?=$cl->last_name?></td>
                                <td><?=$cl->id_member?></a></td>
                                <td><a href="javascript:void(0)" title="detail client">View Detail</a></td>
                            </tr>
                            <tr>
                                <td colspan="100">
                                <table class="innertable table table-bordered">
                                    <thead bgcolor="#E9E9E9">
                                        <th>Username</th>
                                        <th>Name</th>
                                        <th>ID Member</th>
                                        <th>Action</th> 
                                    </thead>
                                
                                    <tbody class="inu_detail" data-ajax="no">
                                        <tr>
                                            <td>tes</td>
                                            <td>tes</td>
                                            <td>tes</td>
                                            <td><a href="javascript:void(0)" title="detail client">View Detail</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>          
    </div>
</div>

<script type="text/javascript" language="javascript">
$(document).ready(function()
{
	$(".tablesorter a.expand").click(function(event)
	{
		/*id=$(this).attr('data-id');
		if($(event.target).parent().parent().next().find(".inu_detail").attr('data-ajax')=='no' && id!=0){
			$(event.target).parent().parent().next().find(".inu_detail").html("<tr><td colspan='9'>Loading...<td></tr>");
			$.ajax({
					url: "<?=site_url('/reports/ajax_detailed_sales')?>/"+id,
					success: function(data){
						$(event.target).parent().parent().next().find(".inu_detail").html(data);
						$(event.target).parent().parent().next().find(".inu_detail").attr('data-ajax','yes');
					}
			});
		}*/
		$(event.target).parent().parent().next().find('.innertable').toggle();
		
		if ($(event.target).text() == '+')
		{
			$(event.target).text('-');
		}
		else
		{
			$(event.target).text('+');
		}
	});
	
});
</script>