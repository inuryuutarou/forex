<div class="container">

	<div class="content_fullwidth lessmar">
    
		
      <div class="login_form">		
            <form id="sky-form" class="sky-form" action="#" method="post">
				<header>Reset Password Form</header>
				<fieldset>					
					<section>
						<div class="row">
							<label class="label col col-4">Password Baru</label>
							<div class="col col-8">
								<label class="input">
									<i class="icon-append icon-lock"></i>
									<input type="password" name="password">
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
									<input type="password" name="cpassword">
								</label>
							</div>
						</div>
					</section>
				</fieldset>
				<footer>
					<div class="fright">
                    <button type="submit" class="button">Send</button>
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
				password:
				{
					required: true,
					minlength: 3,
					maxlength: 20
				},
				passwordConfirm:
				{
					required: true,
					minlength: 3,
					maxlength: 20,
					equalTo: '#password'
				}
				
			},
								
			// Messages for form validation
			messages:
			{
				password:
				{
					required: 'Please enter your password'
				},
				passwordConfirm:
				{
					required: 'Please enter your password one more time',
					equalTo: 'Please enter the same password as above'
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