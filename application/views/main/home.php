<style>
	.info_style p{
		font-size: 13px;
    	line-height: normal;
	}
	.info_style{
		padding:40px 0 0 0;	
	}
	.box_info{
		padding:10px 15px;
		border: 1px rgb(187,184,184) solid;

		-moz-box-shadow:  0px 6px 15px 2px rgb(128,128,128);
		-webkit-box-shadow:  0px 6px 15px 2px rgb(128,128,128);
		box-shadow:  0px 6px 15px 2px rgb(128,128,128);
	}
</style>

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
                    <a href="<?=site_url()?>/home/register" class="sbutton1">Registrasi Sekarang!</a>
                </div>
                 
                 
            </div>
            <!-- end of slide -->
            
        </div>
    </div>

</div><!-- end slider -->
<div class="clearfix"></div>

<div class="feature_section2">
    <div class="container">
    	<div class="one_half">
			<div class="feature_section11" style="background:none; padding: 0px 0px 35px 0px;">
                <div class="animate fadeInUp" data-anim-type="fadeInUp">
                    
                    <strong>Forex Global Service (FGS) ?</strong>
                    <div class="clearfix"></div>
                    <div class="contbox" style="padding:20px 40px 31px 40px">
                    
                    <h5>Forex Global Service (FGS) adalah sebuah program yang memiliki sistem jangka panjang yang berantai yang memiliki potensi bisnis yang sangat besar untuk para member FGS. Sebuah program terbaru yang menggunakan sistem jaringan / network marketing dalam dunia forex yang akan melibatkan ribuan trader yang ada di dalam program ini. </h5>
                    <br><br>
                    <a href="<?=site_url()?>/about_us" class="readmore_but1 nocurve"><i class="fa fa-hand-o-right"></i> &nbsp;Read More..</a>
                    
                    </div>
                    
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-xs-12" style="background:#fff; outline: 10px solid #ffffff;
    outline-offset: 4px;">
    			<div class="row" style="padding:15px; ">
                    <div class="col-sm-4">
                    <a href="ymsgr:SendIM?forexglobalservice" style="background:none; float:none; padding:0; vertical-align:top"><img border="0" src="http://opi.yahoo.com/online?u=forexglobalservice&amp;m=g&amp;t=11"></a>
                    </div>
                    <div class="col-sm-8">
                        <h4 style="margin-bottom:0">FGS Customer Service</h4>
                        <h4><strong>Ayu Carollina</strong></h4>
                        <p>Office Hour : <br>09.00 - 17.00 WIB</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="one_half last">
        <?php if( ! $this->session->userdata('forex_login') ) { ?>

            <div class="reg_form" style="margin: 24px auto 0 auto;">
                <form id="sky-form" class="sky-form" novalidate action="<?=site_url('home/save');?>" method="post">
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
                        <div class="row">
                            <section class="col col-6">
                                <label class="input">
                                    <?php $img_capt=$this->session->userdata('captcha');?>
									<img src="<?=$img_capt['image_src']?>" title="captcha" style="width:137px; height:45px; background-color:#F4AF4B; border-radius:5px;">
                                </label>
                            </section>
                            <section class="col col-6">
                                <label class="input">
                                    <input type="text" name="captcha" required="captcha" placeholder="Captcha">
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
            <?php } ?>
    	</div>   
    </div>
</div><!-- end features section2 -->

<div class="clearfix"></div>



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

<div class="clearfix margin_top5"></div>

<!--<div class="parallax_sec2" style="background:#262626">
    <div class="container">
    
        <h2 style="color:#E9EAED">Video <strong>Tutorial</strong></h2>
        
        <div class="clearfix margin_top3"></div>
        
        <div class="one_half animate" data-anim-type="fadeInLeft">
            <div class="hvideo">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/CIVXsZ4JjtA" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        
        <div class="one_half last animate" data-anim-type="fadeInRight">
            <div class="hvideo right">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/N474HiKru6k" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    
    </div>
</div>--><!-- end parallax sec 2 -->

<div class="clearfix"></div>

<div class="feature_section11" style="background:#262626;">
    <div class="container animate fadeInUp" data-anim-type="fadeInUp">
        
        <strong>Main Broker</strong>
        <div class="clearfix"></div>
        <div class="contbox" style="background: url(<?=base_url()?>/media/images/Arabic-Ornaments-2.jpg) 50%; background-size:100%; color:black">
        	<img src="<?=base_url()?>/media/images/logo_broker/exness.png" alt="" />
            <p>Sejak berdiri di tahun 2008, broker forex Exness melayani perdagangan Forex, CFD, dan Futures. Exness berpusat di Rusia, melebarkan sayap ke Eropa dengan lisensi dari regulator CySEC Siprus, kemudian perlahan Exness mulai berkembang ke China, Malaysia, termasuk Indonesia. Dilihat dari sebarannya, market utama Exness adalah Eropa Timur dan Asia <a href="<?=site_url()?>/exness">read more..</a></p>
        </div>
        
    </div>
</div>

<div class="clearfix"></div>
<div class="feature_section35 info_style">
    <div class="container">
        <h3><strong>Info</strong> Terbaru</h3>
        <div class="row box_info">
        	<div class="one_half">
                <p>Selamat pagi. Informasi terbaru dari <strong>FGS</strong>.</p>
                
                <p><strong>FGS</strong> akan mengadakan Launching dengan Konsep KOPDAR Roadshow di 31 Kota di Indonesia. Insya Allah semua Regional <strong>FGS</strong> akan kami kunjungi. Dengan Tema &quot;Kopdar Santai dan Silaturahmi Keluarga besar <strong>FGS</strong>&quot;</p>
                
                <p>2 Kota pertama yang akan kami kunjungi adalah Bandung (21 Februari) dan Jakarta (28 Februari).</p>
			</div>
			<div class="one_half last">            
                <p>Link Form Pendaftaran Regional Bandung :<br />
                <a href="https://docs.google.com/forms/d/1dp0W_JKbE6czDD9aEqWU4ZNdiK082XYfkae24GgPpp0/viewform" target="_blank">Registrasi Bandung</a></p>
                
                <p>Link Form Pendaftaran Regional Jakarta :<br />
                <a href="https://docs.google.com/forms/d/1opEz5eGVpi_iHfPHLmuydJlId3K5D9H1y4LIgB1RlNQ/viewform" target="_blank">Registrasi Jakarta</a></p>
                <p>Acara <strong>FREE</strong>. Info lengkap hubungi admin.</p>
             </div>
        </div>
    </div>
</div>
<div class="margin_top2"></div> 


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

<!--<script type="text/javascript">
	var i;
	var divs = document.getElementsByTagName('div');
	//var read_btn = document.getElementById('r_more');
	for(i=0;i<divs.length;i++) {
	  if(divs[i].id == 'info_terbaru') {
		divs[i].innerHTML = divs[i].innerHTML.substring(0,200);
	  }
	}
</script>
-->