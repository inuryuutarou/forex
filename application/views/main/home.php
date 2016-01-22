
<!-- Slider
======================================= -->  

<div class="container_full">
    
    <div class="slidershadow">&nbsp;</div>
        
        <div class="mstslider">
            <div class="master-slider ms-skin-default" id="masterslider">
        
            <!-- slide -->
            <div class="ms-slide slide-1" data-delay="9">
                 
                <!-- slide background -->
                <img src="<?=base_url()?>/media/js/masterslider/blank.gif" data-src="<?=base_url()?>/media/images/bg-4.jpg" alt="Slide1 background"/>     
                
                <img src="<?=base_url()?>/media/js/masterslider/blank.gif" data-src="<?=base_url()?>/media/images/logo.png" alt=""
                      style="left:112px; top:100px;"
                      class="ms-layer"
                      data-type="image"
                      data-delay="400"
                      data-effect="bottom(300)"
                      data-duration="1800"
                      data-ease="easeOutExpo"
                 />
                
                <h1 class="ms-layer stext1"
                    style="left: 820px; top: 162px;"
                    data-type="text"
                    data-duration="900"
                    data-delay="1000"
                    data-ease="easeOutExpo"
                    data-effect="bottom(40)"
                >
                    Selamat Datang!<br /> 
                    di Official Website<br /> 
                    <strong>Forex Global Service</strong> (FGS).
                </h1>
                
                <div class="ms-layer"
                    style="left: 825px; top: 404px;"
                    data-type="text"
                    data-delay="2000"
                    data-ease="easeOutExpo"
                    data-duration="900"
                    data-effect="scale(1.5,1.6)"
                >
                    <a href="#" class="sbutton1">Registrasi Sekarang!</a>
                </div>
                 
                 
            </div>
            <!-- end of slide -->
            
        </div>
    </div>

</div><!-- end slider -->

<div class="clearfix"></div>

<?php if( ! $this->session->userdata('forex_login') ) { ?>
<div class="feature_section2">
    <div class="container">
    	<div class="one_half">
        	<h2>Main <strong>Broker</strong></h2>
        </div>
        <div class="one_half last">
            <div class="reg_form">
                <form id="sky-form" class="sky-form" novalidate="novalidate" action="<?=site_url('home/save');?>" method="post">
                    <header>Registrasi sekarang !</header>
                    
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
    </div>
</div><!-- end features section2 -->
<?php } ?>

<div class="clearfix"></div>

<div class="parallax_sec2">
    <div class="container">
    
        <h2 style="color:#E9EAED">Video <strong>Tutorial</strong></h2>
        
        <div class="clearfix margin_top3"></div>
        
        <div class="one_half animate" data-anim-type="fadeInLeft">
            <div class="hvideo">
                <iframe src="http://www.youtube.com/embed/1qJRFcDOiKo" allowfullscreen="" frameborder="0"></iframe>
            </div>
        </div>
        
        <div class="one_half last animate" data-anim-type="fadeInRight">
            <div class="hvideo right">
                <iframe src="http://www.youtube.com/embed/WTAHzO1i6Mw" allowfullscreen="" frameborder="0"></iframe>
            </div>
        </div>
    
    </div>
</div><!-- end parallax sec 2 -->

<div class="clearfix"></div>

<div class="feature_section11">
    <div class="container animate fadeInUp" data-anim-type="fadeInUp">
        
        <strong>Forex Global Service (FGS) ?</strong>
        <div class="clearfix"></div>
        <div class="contbox">
        
        <h5>Forex Global Service (FGS) adalah sebuah program yang memiliki sistem jangka panjang yang berantai yang memiliki potensi bisnis yang sangat besar untuk para member FGS. Sebuah program terbaru yang menggunakan sistem jaringan / network marketing dalam dunia forex yang akan melibatkan ribuan trader yang ada di dalam program ini. Program ini adalah sebuah terobosan besar dalam dunia Forex saat ini.</h5>
        <br><br>
        <a href="<?=site_url()?>/about_us" class="readmore_but1 nocurve"><i class="fa fa-hand-o-right"></i> &nbsp;Read More..</a>
        
        </div>
        
    </div>
</div>

<div class="clearfix"></div>
<div class="feature_section35">
    <div class="container">
    
        <div class="left animate fadeInUp" data-anim-type="fadeInUp"><img src="<?=base_url()?>/media/images/affiliates-image.png" alt=""></div>
        
        <div class="right">
            
            <br>
            
            <h2><strong>Affiliate</strong> Program</h2>
            <br>
            <div class="one_full">
                <ul class="list_1">
                    <li><i class="fa fa-chevron-circle-right"></i> Broker sebagai perusahaan pialang memberikan Bonus Rebates kepada IB (Introducing Broker).</li>
                    <li><i class="fa fa-chevron-circle-right"></i> Setiap trader yang mendaftar di jaringan FGS wajib menjadi IB dan client dengan membuka akun live trading.</li>
                    <li><i class="fa fa-chevron-circle-right"></i> Sistem FGS akan secara otomatis menempatkan 2 klien dibawah IB tersebut dari member yang baru saja mendaftar.</li>
                    <li><i class="fa fa-chevron-circle-right"></i> Dan 2 klien tersebut selain mendaftar sebagai klien mereka wajib pula mendaftar sebagai IB.</li>
                </ul>
            </div>
            
            <div class="clearfix"></div>
            <br><br>
            <a href="<?=site_url()?>/affiliate_program" class="readmore_but1">Read More..</a>
                
        </div>
    </div>
</div>


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