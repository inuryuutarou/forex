<style>
	#broker1{display:block;}
	#broker2{display:none;}
	#broker3{display:none;}
	#next{display:block}
	#back{display:none}
	#finish{display:none}
</style>
<div class="container">
    <div class="row">
    	<div class="col-md-3">
            <?php isset($side_menu)?$this->load->view($side_menu):'side_menu'?>
        </div> 
        <div class="col-md-9">
        	<div class="call">
                <form class="form-horizontal" action="<?=site_url("member/broker_batch")?>" method="post">
                	<?php $i=0;foreach($broker->result() as $brkr){$i++;?>
                    <div id="broker<?=$i?>" class="broker_progress">
                        <h4><?=$brkr->name?></h4>
                        <br>
                        <h4><?=$brkr->link_ib?></h4>
                        <br>
                        <h4><?=$brkr->link_client?></h4>
                        <br>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Affiliation Link</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="link_ib" name="link_ib[]" placeholder="Affiliation Link">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Client Link</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="link_client" name="link_client[]" placeholder="Client Link">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Broker Username</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="broker_username" name="broker_username[]" placeholder="Broker Username">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Real Account</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="real_account" name="real_account[]" placeholder="Real Account">
                            <input type="hidden" name="id_broker[]" value="<?=$brkr->id_broker?>">
                          </div>
                        </div>
                    </div>
                    <?php }?>

                    <br>
                    <div class="form-group">
                      <div class="col-sm-6" align="left">
                        <a href="#" id="back" class="btn btn-primary" style="width:80px">Back</a>
                      </div>
                      <div class="col-sm-6" align="right">
                        <a href="#" id="next" class="btn btn-primary" style="width:80px">Next</a>
                        <button type="submit" class="btn btn-primary" id="finish">Finish</button>
                      </div>
                    </div>
                </form>
            </div>
        </div>          
    </div>
</div>
<script>
	$(document).ready(function(){
		var i=1;
		var j=1;
		$("#next").click(function(){
			i=i+1;
			$("#back").css("display", "block");
			$(".broker_progress").css("display","none");
			$("#broker"+i).css("display","block");
			i=i+1;
			if(i>2){
				$("#next").css("display","none");
				$("#finish").css("display","block");
			}
		});
		$("#back").click(function(){
			i=i-1;
			$("#finish").css("display","none");
			$("#next").css("display","block");
			$("#broker"+(j)).css("display","none");
			$("#broker"+(j-1)).css("display","block");
			if(j<2){
				$("#back").css("display","none");	
			}
		});
	});
</script>