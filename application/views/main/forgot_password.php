<div class="container">

	<div class="content_fullwidth lessmar">
    
		
      <div class="login_form">		
            <form id="sky-form" class="sky-form" action="<?=site_url('home/forgot_process');?>" method="post">
				<header>Lupa Password Form</header>
				<p style="text-align:center">Masukkan alamat email anda</p>
				<fieldset>					
					<section>
						<div class="row">
							<label class="label col col-3">E-mail</label>
							<div class="col col-9">
								<label class="input">
									<i class="icon-append icon-user"></i>
									<input type="email" name="email">
								</label>
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
                                </label>
                            </section>
						</div>
					</section>
				</fieldset>
				<footer>
					<div class="fright">
                    <button type="submit" class="button">Request reset password</button>
                    </div>
					
				</footer>
			</form>			
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
				email:
				{
					required: true,
					email: true
				}
			},
								
			// Messages for form validation
			messages:
			{
				email:
				{
					required: 'Please enter your email address',
					email: 'Please enter a VALID email address'
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