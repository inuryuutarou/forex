<div class="hidden-sm hidden-xs">
    <div class="advertising">
        <div class="container" style="padding:0">
            <div class="info">
                <?php if($this->session->userdata('forex_login') == TRUE){?>
                <div class="text">
                    <a href="<?=site_url()?>/member/my_profile" style="text-decoration:none; font-weight:600">Username</a>
                    &nbsp;&nbsp;&nbsp;<a style="text-decoration:none"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 0</a>
                    &nbsp;&nbsp;&nbsp;<a style="text-decoration:none"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span> 0</a>
                </div>
                <?php }else{?>
                <div class="text">
                    <a href="<?=site_url()?>/home/signin_form" style="text-decoration:none" data-toggle="modal" data-target="#sign_in"> Sign In/Register </a>
                    &nbsp;&nbsp;&nbsp;<a style="text-decoration:none"> Forgot Password ? </a>
                </div>
                <?php }?>
            </div>
            <div class="variants">
                
            </div>
        </div>
    </div>
</div>
<header class="head-1">
    <div class="container menu-bar" role="navigation">
        <div class="large-header">
            <div class="logo-wrapper">
                <a class="logo-box" href="<?=site_url()?>">
                    <!--<img class="img-responsive" alt="Corex" src="<?=base_url()?>/media/images/logo.png">-->NO LOGO
                </a>
            </div>

            <ul class="nav navbar-nav">
                <li><a>Forex Broker</a></li>
                <li><a>Bonus & Promotions</a></li>
                <li><a>Affiliate Program</a></li>
                <li><a>About Us</a></li>
                <li class="uber-dropdown dropdown">
                    <a> Support <span class="main-text-color light"></span> </a>
                    <div id="uber-menu-2" class="uber-menu panel-collapse">
                        <div class="container">
                            <div class="main-wrap">
                                <div class="items-wrap clearfix">
                                    <div class="col-xs-3 col">
                                        <h3>Support</h3>
                                        <p style="line-height:15px">Contact our support team any time during the business week with any questions you have.</p>
                                    </div>

                                    <div class="col-xs-3 col">
                                        <h4>Support Options</h4>
                                        <a href="#"><span class="main-text-color"></span>Contact Us</a>
                                        <a href="#"><span class="main-text-color"></span>FAQ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a>Webinar</a></li>
            </ul>
        </div>

        <div class="mobile-header">
            <div class="logo-wrapper">
                <a class="logo-box" href="../homepages/home-corp1.php">
                    <!--<img class="img-responsive" alt="Corex" src="<?=base_url()?>/media/images/logo.png">-->NO LOGO
                </a>
            </div>

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar main-bg-color"></span>
                <span class="icon-bar main-bg-color"></span>
                <span class="icon-bar main-bg-color"></span>
            </button>

            <ul class="main-menu" id="navbar-collapse-1">
                <li class="main alt-bg-color">
                    <button type="button" class="collapsed fa fa-times" data-toggle="collapse" data-target="#navbar-collapse-1"></button>
                </li>

                <li>
                    <a>About Us</a>
                </li>

                <li>
                    <a>Support</a>
                    <ul class="submenu">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

</header>

<div class="modal fade" id="sign_in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="sign_in-modal">
        <div class="modal-content"></div>
        <!-- /.modal-content -->
    </div>
</div>