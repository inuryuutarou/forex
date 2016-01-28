<div class="margin_top5"></div> 
<div class="container">
<?php isset($side_menu)?$this->load->view($side_menu):'side_menu'?>

    <div class="content_right">
        <div class="row" style="padding-top:0">
            <div class="col-md-12 text-center main-el">
                <h2 class="main-text-color">Wall Post</h2>
                <div class="divider divider-3"></div>
                <div class="form form-1" style="padding:20px" align="justify">
                	Apa yang anda pikirkan?
                    <form class="form-horizontal" enctype="multipart/form-data" action="<?=site_url("member/update_wall")?>" method="post">
                    	<textarea name="content"></textarea>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <br><br>
                    <div class="col-xs-12" style="background-color:#F1F1F1; padding:15px">
                    <?php foreach($wall as $w){?>
                    	<div style="border:thin solid #767373; margin-bottom:20px;">
							<?=$w->content?><br>
                            <?=$w->first_name." ".$w->last_name?><br>
                            <?=$w->timestamp?>
						</div>
					<?php }?>
                    </div>
                </div>
                <div class="shadow"></div>
            </div>
        </div>
    </div>
</div>
<div class="margin_top5"></div> 