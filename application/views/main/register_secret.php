<!DOCTYPE html>
<html lang="en">
<head>
    <title>FX Global Service</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?=base_url()?>/media/images/logo.png">
	
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
   	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- ######### CSS STYLES ######### -->
	
    <link rel="stylesheet" href="<?=base_url()?>/media/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="<?=base_url()?>/media/css/style.css" type="text/css" />
    
    <link rel="stylesheet" href="<?=base_url()?>/media/css/font-awesome/css/font-awesome.min.css">
    
    <!-- responsive devices styles -->
	<link rel="stylesheet" media="screen" href="<?=base_url()?>/media/css/responsive-leyouts.css" type="text/css" />
    
    <!-- animations -->
    <link href="<?=base_url()?>/media/js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />
    
    <!-- mega menu -->
    <link href="<?=base_url()?>/media/js/mainmenu/sticky.css" rel="stylesheet">
    <link href="<?=base_url()?>/media/js/mainmenu/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>/media/js/mainmenu/demo.css" rel="stylesheet">
    <link href="<?=base_url()?>/media/js/mainmenu/menu.css" rel="stylesheet">
    
    <!-- slide panel -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/media/js/slidepanel/slidepanel.css">
    
	<!-- Master Slider -->
    <link rel="stylesheet" href="<?=base_url()?>/media/js/masterslider/style/masterslider.css" />
    <link rel="stylesheet" href="<?=base_url()?>/media/js/masterslider/skins/default/style.css" />
    <link rel="stylesheet" href="<?=base_url()?>/media/js/masterslider/style.css" />

	<!-- cubeportfolio -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/media/js/cubeportfolio/cubeportfolio.min.css">
    
	<!-- tabs -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/media/js/tabs/assets/css/responsive-tabs.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/media/js/tabs/assets/css/responsive-tabs2.css">

	<!-- carousel -->
    <link rel="stylesheet" href="<?=base_url()?>/media/js/carousel/flexslider.css" type="text/css" media="screen" />
 	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/media/js/carousel/skin.css" />
    
    <!-- accordion -->
    <link rel="stylesheet" href="<?=base_url()?>/media/js/accordion/accordion.css" type="text/css" media="all">
    
    <!-- Lightbox -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/media/js/lightbox/jquery.fancybox.css" media="screen" />
    
    <!-- forms -->
    <link rel="stylesheet" href="<?=base_url()?>/media/js/form/sky-forms.css" type="text/css" media="all">
    
    <!-- ######### JS FILES ######### -->
    <!-- get jQuery from the google apis -->
    <script type="text/javascript" src="<?=base_url()?>/media/js/universal/jquery.js"></script>
	<script type="text/javascript" src="<?=base_url()?>/media/includes/bootstrap/js/bootstrap.min.js"></script>
    
</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="site_wrapper">

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

    </div>
        
    <!-- animations -->
    <script src="<?=base_url()?>/media/js/animations/js/animations.min.js" type="text/javascript"></script>
    
    
    <!-- slide panel -->
    <script type="text/javascript" src="<?=base_url()?>/media/js/slidepanel/slidepanel.js"></script>
    
    <!-- Master Slider -->
    <script src="<?=base_url()?>/media/js/masterslider/jquery.easing.min.js"></script>
    <script src="<?=base_url()?>/media/js/masterslider/masterslider.min.js"></script>
    <script type="text/javascript">
		(function($) {
		 "use strict";
		
		var slider = new MasterSlider();
		 slider.setup('masterslider' , {
			 width: 1400,    // slider standard width
			 height:580,   // slider standard height
			 space:0,
			 speed:45,
			 fullwidth:true,
			 loop:true,
			 preload:0,
			 autoplay:true,
			 view:"basic"
		});
		// adds Arrows navigation control to the slider.
		slider.control('arrows');
		slider.control('bullets');
		
		})(jQuery);
    </script>
    
    <!-- mega menu -->
    <script src="<?=base_url()?>/media/js/mainmenu/bootstrap.min.js"></script> 
    <script src="<?=base_url()?>/media/js/mainmenu/customeUI.js"></script> 
    
    <!-- jquery jcarousel -->
    <script type="text/javascript" src="<?=base_url()?>/media/js/carousel/jquery.jcarousel.min.js"></script>
    
    <!-- scroll up -->
    <script src="<?=base_url()?>/media/js/scrolltotop/totop.js" type="text/javascript"></script>
    
    <!-- tabs -->
    <script src="<?=base_url()?>/media/js/tabs/assets/js/responsive-tabs.min.js" type="text/javascript"></script>
    
    
    
    
    <!-- accordion -->
    <script type="text/javascript" src="<?=base_url()?>/media/js/accordion/custom.js"></script>
    
    <!-- sticky menu -->
    <script type="text/javascript" src="<?=base_url()?>/media/js/mainmenu/sticky.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/media/js/mainmenu/modernizr.custom.75180.js"></script>
    
    <!-- cubeportfolio -->
    <script type="text/javascript" src="<?=base_url()?>/media/js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/media/js/cubeportfolio/main3.js"></script>
	<script type="text/javascript" src="<?=base_url()?>/media/js/cubeportfolio/main6.js"></script>

    
    <!-- carousel -->
    <script defer src="<?=base_url()?>/media/js/carousel/jquery.flexslider.js"></script>
    <script defer src="<?=base_url()?>/media/js/carousel/custom.js"></script>
    
    <!-- lightbox -->
    <script type="text/javascript" src="<?=base_url()?>/media/js/lightbox/jquery.fancybox.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/media/js/lightbox/custom.js"></script>
</body>
</html>
