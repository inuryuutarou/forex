<div class="container">

	<div class="content_fullwidth lessmar">
    
		
      <div class="login_form">
      	<?php if(isset($valid)){
        	if($valid=='expired'){?>
            	<p style="text-align:center">Link Expired</p>
        <?php }}else{?>
			<form id="sky-form" class="sky-form" action="<?=site_url('home/reset_process');?>" method="post">
				<header>Reset password form</header>
				
				<fieldset>					
					<section>
						<div class="row">
							<label class="label col col-4">Password Baru</label>
							<div class="col col-8">
								<label class="input">
									<i class="icon-append icon-user"></i>
									<input type="password" id="password" name="password">
								</label>
							</div>
						</div>
					</section>
					
					<section>
						<div class="row">
							<label class="label col col-4">Konfirmasi Password</label>
							<div class="col col-8">
								<label class="input">
									<i class="icon-append icon-lock"></i>
									<input type="password" name="repeat_password">
								</label>
								<!--<div class="note"><a href="#sky-form2" class="modal-opener">Forgot password?</a></div>-->
							</div>
						</div>
					</section>
                    
					<section>
						<div class="row">
							<section class="col col-6">
                                <label class="input">
                                    <?php $img_capt=$this->session->userdata('captcha');?>
                                    <img src="<?=$img_capt['image_src']?>" title="captcha" style="width:137px; height:45px; background-color:#F4AF4B; border-radius:5px;">
                                </label>
                            </section>
                            <section class="col col-6">
                                <label class="input">
                                    <input type="text" name="captcha" placeholder="Captcha" required>
                                    <input type="hidden" name="email" value="<?=$user->email?>">
                                </label>
                            </section>
						</div>
					</section>
					
				</fieldset>
				<footer>
					<div class="fright">
                    <button type="submit" class="button" name="token" value="<?=$user->forgot_token?>">Reset Password</button>
                    </div>
					
				</footer>
			</form>
            <?php }?>
		</div>

	</div>

</div><!-- end content area -->
<div class="margin_top5"></div> 

<script src="<?=base_url()?>/media/js/form/jquery.form.min.js"></script>
<script src="<?=base_url()?>/media/js/form/jquery.validate.min.js"></script>
<script src="<?=base_url()?>/media/js/form/jquery.modal.js"></script>

<script type="text/javascript">
(function($) {
 "use strict";

	$(function()
	{
		// Validation for login form
		$("#sky-form").validate(
		{					
			// Rules for form validation
			rules:
			{
				password : {
					required: true,
                    minlength: 3,
					maxlength: 20
                },
                repeat_password : {
                    minlength: 3,
					maxlength: 20,
                    equalTo : "#password"
                }
			},
								
			// Messages for form validation
			messages:
			{
				repeat_password:
				{
					required: 'Please repeaet your new password',
					equalTo: 'Password don not match check your typing and caps lock'
				},
				password:
				{
					required: 'Please enter your password'
				}
			},					
			
			// Do not change code below
			errorPlacement: function(error, element)
			{
				error.insertAfter(element.parent());
			}
		});
		
	});			

})(jQuery);
</script>