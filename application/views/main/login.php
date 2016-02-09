<div class="container">

	<div class="content_fullwidth lessmar">
    
		
      <div class="login_form">		
			<form id="sky-form" class="sky-form" action="<?=site_url('home/sign_in');?>" method="post">
				<header>Login form</header>
				
				<fieldset>					
					<section>
						<div class="row">
							<label class="label col col-4">E-mail</label>
							<div class="col col-8">
								<label class="input">
									<i class="icon-append icon-user"></i>
									<input type="email" name="username">
								</label>
							</div>
						</div>
					</section>
					
					<section>
						<div class="row">
							<label class="label col col-4">Password</label>
							<div class="col col-8">
								<label class="input">
									<i class="icon-append icon-lock"></i>
									<input type="password" name="password">
								</label>
								<div class="note"><a href="<?=site_url("home/forgot_password")?>" class="modal-opener">Forgot password?</a></div>
							</div>
						</div>
					</section>
					
					<!--<section>
						<div class="row">
							<div class="col col-4"></div>
							<div class="col col-8">
								<label class="checkbox"><input type="checkbox" name="remember" checked><i></i>Keep me logged in</label>
							</div>
						</div>
					</section>-->
				</fieldset>
				<footer>
					<div class="fright">
                    <a href="<?=site_url()?>/home/register" class="button button-secondary">Register</a>
                    <button type="submit" class="button">Log in</button>
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
				username:
				{
					required: true,
					email: true
				},
				password:
				{
					required: true,
					minlength: 3,
					maxlength: 20
				}
			},
								
			// Messages for form validation
			messages:
			{
				username:
				{
					required: 'Please enter your email address',
					email: 'Please enter a VALID email address'
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