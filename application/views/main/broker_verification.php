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
                <form class="form-horizontal" action="#" method="post">
                    <div id="broker1">
                        <h4>Broker 1</h4>
                        <br>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Affiliation Link</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="link_ib" name="link_ib" placeholder="Affiliation Link">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Broker Username</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="broker_username" name="broker_username" placeholder="Broker Username">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Real Account</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="real_account" name="real_account" placeholder="Real Account">
                          </div>
                        </div>
                    </div>
                    <div id="broker2">
                        <h4>Broker 2</h4>
                        <br>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Affiliation Link</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="link_ib" name="link_ib" placeholder="Affiliation Link">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Client Link</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="link_client" name="link_client" placeholder="Client Link">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Broker Username</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="broker_username" name="broker_username" placeholder="Broker Username">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Real Account</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="real_account" name="real_account" placeholder="Real Account">
                          </div>
                        </div>
                    </div>
                    <div id="broker3">
                        <h4>Broker 3</h4>
                        <br>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Affiliation Link</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="link_ib" name="link_ib" placeholder="Affiliation Link">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Client Link</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="link_client" name="link_client" placeholder="Client Link">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Broker Username</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="broker_username" name="broker_username" placeholder="Broker Username">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Real Account</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="real_account" name="real_account" placeholder="Real Account">
                          </div>
                        </div>
                    </div>

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
			$("#back").css("display", "block");
			$("#broker"+(i)).css("display","none");
			$("#broker"+(i+1)).css("display","block");
			i=i+1;
			j=i;
			if(i>2){
				$("#next").css("display","none");
				$("#finish").css("display","block");
			}
		});
		$("#back").click(function(){
			$("#finish").css("display","none");
			$("#next").css("display","block");
			$("#broker"+(j)).css("display","none");
			$("#broker"+(j-1)).css("display","block");
			j=j-1;
			i=j;
			if(j<2){
				$("#back").css("display","none");	
			}
		});
	});
</script>