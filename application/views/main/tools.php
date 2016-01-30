<style>
	.panel-body{
		border-bottom:1px solid #ddd;
		border-left:1px solid #ddd;
		border-right:1px solid #ddd;	
		padding: 15px 30px;
	}
	.control-label{
		font-weight:normal;	
	}
	.alert{
		padding: 15px;
		margin-bottom: 20px;
		border: 1px solid transparent;
		border-radius: 4px;
	}
	.alert-info{
		color: #31708f;
		background-color: #d9edf7;
		border-color: #bce8f1;
	}
</style>
<div class="margin_top5"></div> 
<div class="container">
	<?php isset($side_menu)?$this->load->view($side_menu):'side_menu'?>

    <div class="content_right">
        <div class="call">
        
        	<div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">Free Tools</a></li>
                            <li><a href="#tab2default" data-toggle="tab">Paid Tools</a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">
                        	<div class="margin_top3"></div> 
                            <h4 style="text-align:center">Free Tools</h4>
                            <div class="col-xs-12" style="background-color:#F1F1F1; padding:15px">
                                <div class="tablewrap table-responsive">
                                    <table class="table" border="0">
                                        <thead align="center" style="background:#fff; border:none">
                                            <th>Nama File</th>
                                            <th>Keterangan</th>
                                            <th>Author</th>
                                            <th></th>
                                        </thead>
                                        <tbody style="margin-top:20px">
                                            <tr>
                                                <td>abc</td>
                                                <td>abc</td>
                                                <td>abc</td>
                                                <td align="center"><button class="btn btn-primary">Download</button></td>
                                            </tr>
                                            <tr>
                                                <td>abc</td>
                                                <td>abc</td>
                                                <td>abc</td>
                                                <td align="center"><button class="btn btn-primary">Download</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--=======================================================-->
                        <!--Tab untuk Paid Tools-->
                        <div class="tab-pane fade" id="tab2default">
                        	<div class="margin_top3"></div> 
                            <h4 style="text-align:center">Paid Tools</h4>
                            <div class="row">
                                <div class="col-md-4 animate" data-anim-type="fadeIn">
                                    <img src="http://placehold.it/250x180" alt="" class="img_left1" />
                                    <h3>$12/month</h3>
                                    <p>Lorem Ipsum as their default model the and a search for lorem ipsum will uncover many web sites the stilin infancy versions have evolved over the years.</p>
                                    
                                    <br />
                                    
                                </div>
                                
                                <div class="col-md-4 animate" data-anim-type="fadeIn">
                                    <img src="http://placehold.it/250x180" alt="" class="img_left1" />
                                    <h3>$12/month</h3>
                                    <p>Lorem Ipsum as their default model the and a search for lorem ipsum will uncover many web sites the stilin infancy versions have evolved over the years.</p>
                                    
                                    <br />
                                    
                                </div>
                                
                                <div class="col-md-4 last animate" data-anim-type="fadeIn">
                                    <img src="http://placehold.it/250x180" alt="" class="img_left1" />
                                    <h3>$12/month</h3>
                                    <p>Lorem Ipsum as their default model the and a search for lorem ipsum will uncover many web sites the stilin infancy versions have evolved over the years.</p>
                                    
                                    <br />
                                    
                                </div>
                                
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>          
</div>
<div class="margin_top5"></div> 
