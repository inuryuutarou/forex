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
                	<table class="table table-bordered">
                    	<thead bgcolor="#E9E9E9">
                        	<th>Username</th>
                            <th>Name</th>
                            <th>ID Member</th>
                            <th>Action</th>
                        </thead>
                    	<tbody>
                        	<?php foreach($list_client->result() as $cl){?>
                        	<tr>
                            	<td><?=$cl->username?></td>
                                <td><?=$cl->first_name?> <?=$cl->last_name?></td>
                                <td><?=$cl->id_member?></a></td>
                                <td><a href="javascript:void(0)" title="detail client">View Detail</a></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>          
    </div>
</div>