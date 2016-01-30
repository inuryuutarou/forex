<div class="margin_top5"></div> 
<div class="container">
<?php isset($side_menu)?$this->load->view($side_menu):'side_menu'?>

    <div class="content_right">
        <div class="row" style="padding-top:0">
            <div class="col-md-12 text-center main-el">
                <h2 class="main-text-color">Wall Post</h2>
                <div class="divider divider-3"></div>
                <div class="form form-1" style="padding:20px" align="justify">
                	<h4 style="margin-bottom:0">Apa yang anda pikirkan?</h4>
                    <div class="cforms">
                    <form class="sky-form" enctype="multipart/form-data" action="<?=site_url("member/update_wall")?>" method="post">
                    <fieldset>
                    	<section style="margin-bottom:0">
                    	<label class="textarea"> <i class="icon-append icon-envelope-alt"></i>
                            <textarea name="content" rows="5"></textarea>
                          </label>
                        </section>
                        <footer style="text-align:right">
                          <button type="submit" class="button">Send</button>
                        </footer>
                    </fieldset>
                    </form>
                    </div>
                    <br><br>
                    <div class="col-xs-12" style="background-color:#F1F1F1; padding:15px">
                    <?php foreach($wall as $w){?>
                    	<div style="border:thin solid #CCCCCC; margin-bottom:20px; padding:15px; border-radius:3px">
							<p><?=$w->content?></p>
                            <p style="font-size:12px; text-align:right"><?=$w->first_name." ".$w->last_name?><br>
                            <?=$w->timestamp?></p>
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