<div class="container">
    <div class="row">
    	<div class="col-md-3">
            <?php isset($side_menu)?$this->load->view($side_menu):'side_menu'?>
        </div> 
        <div class="col-md-9">
        	<div class="call">
            	<h4>My Client</h4>
                <div>
                	<?php foreach($list_client->result() as $cl){?>
                	<div>
                    	<?=$cl->username?><br>
                        <?=$cl->first_name?> <?=$cl->last_name?><br>
                        <a href="javascript:void(0)" title="detail client"><?=$cl->id_member?></a>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>          
    </div>
</div>