<style>
	.broker_progress{display:none;}
	#broker1{display:block;}
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
                        <p>Masuk melalui semua link berikut ini ketika mendaftar</p>
                        <a href="<?=$brkr->link_ib?>" target="_blank"><h4><?=$brkr->link_ib?></h4></a>
                        <?php if($brkr->link_client!=""){?>
                        <br>
                        <a href="<?=$brkr->link_client?>" target="_blank"><h4><?=$brkr->link_client?></h4></a>
                        <?php }?>
                        <br>
                        <p>Setelah melakukan daftar, pastikan akun IB dan Akun trading anda telah diverifikasi oleh broker, 
                        dan pastikan Link IB dan data akun trading yang anda masukkan benar pada form dibawah</p>
						<br>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Affiliation Link</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="link_ib" name="link_ib[]" placeholder="Affiliation Link" required>
                          </div>
                        </div>
                        <?php if($brkr->link_client!=""){?>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Client Link</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="link_client" name="link_client[]" placeholder="Client Link" required>
                          </div>
                        </div>
                        <?php }else{?>
                            <input type="hidden" value="" readonly class="form-control" name="link_client[]">
                        <?php }?>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Broker Username</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="broker_username" name="broker_username[]" placeholder="Broker Username" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Real Account</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="real_account" name="real_account[]" placeholder="Real Account" required>
                            <input type="hidden" name="id_broker[]" value="<?=$brkr->id_broker?>">
                          </div>
                        </div>
                    </div>
                    <?php }?>

                    <br>
                    <div id="alert"></div>
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
		$("#next").click(function(){
			i=i+1;
			check_pos(i);
			$(".broker_progress").css("display","none");
			$("#broker"+i).css("display","block");
		});
		$("#back").click(function(){
			i=i-1;
			check_pos(i);
			$(".broker_progress").css("display","none");
			$("#broker"+i).css("display","block");
		});
		$("#finish").click(function(){
			$("#alert").html("Pastikan SEMUA DATA telah terisi sebelum klik finish");
		});

		function check_pos(i){
			if(i!=1){
				$("#back").css("display", "block");
			}
			else{
				$("#back").css("display", "none");
			}
			if(i!=<?=$broker->num_rows()?>){
				$("#finish").css("display","none");
				$("#next").css("display","block");
			}
			else{
				$("#finish").css("display","block");
				$("#next").css("display","none");
			}
		}
	});
</script>