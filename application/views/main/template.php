<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forex</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?=base_url()?>/media/resources/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?=base_url()?>/media/resources/fontello/fontello.css">
    <link rel="stylesheet" href="<?=base_url()?>/media/css/animation.css">
    <link href="<?=base_url()?>/media/includes/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link type="text/css" href="<?=base_url()?>/media/vendors/MEplayer/mediaelementplayer.min.css" rel="stylesheet" />
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/media/vendors/rs-plugin/css/settings.css" media="screen" />
    <link href="<?=base_url()?>/media/vendors/smoothdivscroll/smoothDivScroll.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>/media/vendors/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="<?=base_url()?>/media/css/aspect.css">
    <link rel="stylesheet" href="<?=base_url()?>/media/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>/media/css/responsive.css">
    <link rel="stylesheet" href="<?=base_url()?>/media/css/par.css">

    <script type="text/javascript" src="<?=base_url()?>/media/includes/modernizr/modernizr.custom.27667.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?=base_url()?>/media/includes/html5shiv/html5shiv.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/media/includes/respond/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" type="image/png" href="<?=base_url()?>/media/favicon.png">

    <script type="text/javascript" src="<?=base_url()?>/media/vendors/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/media/vendors/jquery/jquery-ui-1.10.4.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/media/includes/ajax/ajax-post-loader.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/media/includes/bootstrap/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div id="main">
    <?php isset($header)?$this->load->view($header):'no_header'?>  
    <?php isset($content)?$this->load->view($content):'no_content'?>
    <?php isset($footer)?$this->load->view($footer):'no_footer'?>

    </div>
    
    
    
    <script type="text/javascript" src="<?=base_url()?>/media/vendors/isotope/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/media/vendors/isotope/jquery.isotope.sloppy-masonry.min.js"></script>
    
    <script type="text/javascript" src="<?=base_url()?>/media/vendors/cycle/jquery.cycle.all.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/media/vendors/mixitup-1.5.5/src/jquery.mixitup.js"></script>
    
    <script type="text/javascript" src="<?=base_url()?>/media/vendors/smoothdivscroll/jquery.smoothdivscroll-1.3-min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/media/vendors/stellar/jquery.stellar.min.js"></script>
    
    <script type="text/javascript" src="<?=base_url()?>/media/vendors/MEplayer/mediaelement-and-player.min.js"></script>
    
    <script type="text/javascript" src="<?=base_url()?>/media/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- jQuery REVOLUTION Slider  -->
    <script type="text/javascript" src="<?=base_url()?>/media/vendors/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/media/vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/media/js/script.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/media/includes/retina/retina-1.1.0.min.js"></script>
    <!--[if gte IE 9]>
    <script type="text/javascript" src="js/ie9.js"></script>
    <![endif]-->
    <!--additional script by par-->
    <script type="text/javascript" src="<?=base_url()?>/media/js/par.js"></script>
    <!---->
</body>
</html>
