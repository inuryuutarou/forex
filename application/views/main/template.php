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
    
<!-- just remove the below comments witch color skin you want to use -->
    <!--<link rel="stylesheet" href="css/colors/red.css" />-->
    <!--<link rel="stylesheet" href="css/colors/green.css" />-->
    <!--<link rel="stylesheet" href="css/colors/cyan.css" />-->
    <!--<link rel="stylesheet" href="css/colors/orange.css" />-->
    <!--<link rel="stylesheet" href="css/colors/lightblue.css" />-->
    <!--<link rel="stylesheet" href="css/colors/pink.css" />-->
    <!--<link rel="stylesheet" href="css/colors/purple.css" />-->
    <!--<link rel="stylesheet" href="css/colors/bridge.css" />-->
    <!--<link rel="stylesheet" href="css/colors/slate.css" />-->
    <!--<link rel="stylesheet" href="css/colors/yellow.css" />-->
    <!--<link rel="stylesheet" href="css/colors/darkred.css" />-->

<!-- just remove the below comments witch bg patterns you want to use --> 
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-default.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-one.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-two.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-three.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-four.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-five.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-six.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-seven.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-eight.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-nine.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-ten.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-eleven.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-twelve.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-thirteen.css" />-->
    
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
    <?php isset($header)?$this->load->view($header):'no_header'?>  
    <div class="clearfix"></div>
    <?php isset($content)?$this->load->view($content):'no_content'?>
    <div class="clearfix"></div>
    <?php isset($footer)?$this->load->view($footer):'no_footer'?>

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
