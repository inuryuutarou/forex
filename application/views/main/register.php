<div class="container">

	<div class="content_fullwidth lessmar">
    
		
      <div class="login_form">		
			<form id="sky-form" class="sky-form" novalidate action="<?=site_url('home/save');?>" method="post">
                <header>Register Form</header>
                
                <fieldset>					
                    <section>
                        <label class="input">
                            <i class="icon-append icon-user"></i>
                            <input type="text" name="username" placeholder="Username">
                            <b class="tooltip tooltip-bottom-right">Needed to enter the website</b>
                        </label>
                    </section>
                    <section>
                        <label class="input">
                            <i class="icon-append icon-envelope-alt"></i>
                            <input type="email" name="email" placeholder="Email address">
                            <b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
                        </label>
                    </section>
                    
                    <section>
                        <label class="input">
                            <i class="icon-append icon-lock"></i>
                            <input type="password" name="password" placeholder="Password" id="password">
                            <b class="tooltip tooltip-bottom-right">Don't forget your password</b>
                        </label>
                    </section>
                    
                    <section>
                        <label class="input">
                            <i class="icon-append icon-lock"></i>
                            <input type="password" name="passwordConfirm" placeholder="Confirm password">
                            <b class="tooltip tooltip-bottom-right">Don't forget your password</b>
                        </label>
                    </section>
                </fieldset>
                    
                <fieldset>
                    <div class="row">
                        <section class="col col-6">
                            <label class="input">
                                <input type="text" name="first_name" placeholder="First name">
                            </label>
                        </section>
                        <section class="col col-6">
                            <label class="input">
                                <input type="text" name="last_name" placeholder="Last name">
                            </label>
                        </section>
                    </div>
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
                    <section>
                        <label class="checkbox"><input type="checkbox" name="terms" id="terms"><i></i>I agree with the Terms and Conditions</label>
                    </section>
                </fieldset>
                <footer>
                    <button type="submit" class="button">Submit</button>
                </footer>
            </form>			
		</div>

	</div>

</div><!-- end content area -->

<script src="<?=base_url()?>/media/js/form/jquery.form.min.js"></script>
<script src="<?=base_url()?>/media/js/form/jquery.validate.min.js"></script>
<script src="<?=base_url()?>/media/js/form/jquery.modal.js"></script>

<script type="text/javascript">
(function($) {
 "use strict";

	$(function()
	{
		// Validation		
		$("#sky-form").validate(
		{					
			// Rules for form validation
			rules:
			{
				username:
				{
					required: true
				},
				email:
				{
					required: true,
					email: true
				},
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
				},
				firstname:
				{
					required: true
				},
				lastname:
				{
					required: true
				},
				gender:
				{
					required: true
				},
				terms:
				{
					required: true
				}
			},
			
			// Messages for form validation
			messages:
			{
				login:
				{
					required: 'Please enter your login'
				},
				email:
				{
					required: 'Please enter your email address',
					email: 'Please enter a VALID email address'
				},
				password:
				{
					required: 'Please enter your password'
				},
				passwordConfirm:
				{
					required: 'Please enter your password one more time',
					equalTo: 'Please enter the same password as above'
				},
				firstname:
				{
					required: 'Please select your first name'
				},
				lastname:
				{
					required: 'Please select your last name'
				},
				gender:
				{
					required: 'Please select your gender'
				},
				terms:
				{
					required: 'You must agree with Terms and Conditions'
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