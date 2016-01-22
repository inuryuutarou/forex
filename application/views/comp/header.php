<header id="header">

	<!-- Top header bar -->
	<div id="topHeader">
    
        <div class="wrapper">
             
            <div class="top_nav">
                <div class="container">
                        
                    <div class="right">
                        <?php if($this->session->userdata('forex_login') == TRUE){?>
                        <ul>
                            <li class="link"><a href="<?=site_url()?>/member/my_profile"><i class="fa fa-user"></i> <?=$this->session->userdata('username')?></a></li>
                            <li><a href="mailto:info@yourdomain.com"><i class="fa fa-envelope"></i> info@sitedomain.com</a></li>
                            <li><i class="fa fa-phone"></i> +88 123 456 7890</li>
                            
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                        <?php }else{?>
                        <ul>
                            <li class="link"><a href="<?=site_url()?>/home/signin"><i class="fa fa-lock"></i> Sign In</a></li>
                            <li class="link"><a href="<?=site_url()?>/home/register"><i class="fa fa-edit"></i> Register</a></li>
                            <li><a href="mailto:info@yourdomain.com"><i class="fa fa-envelope"></i> info@sitedomain.com</a></li>
                            <li><i class="fa fa-phone"></i> +88 123 456 7890</li>
                            
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                        <?php }?>
                        
                    </div><!-- end right social links -->
                
                </div>
            </div>
                
        </div>
    
	</div><!-- end top navigation -->
	
    
	<div id="trueHeader">
    
        <div class="wrapper">
        
         <div class="container">
        
            <!-- Logo -->
            <div class="logo"><a href="<?=site_url()?>" id="logo"></a></div>
            
            <!-- Menu -->
            <div class="menu_main">
                
                <div class="navbar yamm navbar-default">
            
                    <div class="container">
                      <div class="navbar-header">
                        <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1"  > 
                          <button type="button" > <i class="fa fa-bars"></i></button>
                        </div>
                      </div>
                  
                      <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right">
                      
                        <ul class="nav navbar-nav">
                        
                            <li class="dropdown yamm-fw"> <a href="#" data-toggle="dropdown" class="dropdown-toggle <?=($active=='broker')?'active':'';?>"><i class="fa fa-paper-plane"></i> Forex Broker</a>
                                <ul class="dropdown-menu">
                                  <li> 
                                    <div class="yamm-content">
                                      <div class="row">
                                      
                                        <ul class="col-sm-6 col-md-3 list-unstyled ">
                                          <li>
                                            <a href="<?=site_url()?>/xm"><p>XM</p></a>
                                            <!--<a href="#"><p>XM</p></a>-->
                                          </li>
                                          <li>
                                          <img src="<?=base_url()?>/media/images/logo_broker/unnamed.png" alt="" class="img_left4" /></li>
                                        </ul>
                                        <ul class="col-sm-6 col-md-3 list-unstyled ">
                                          <li>
                                            <a href="<?=site_url()?>/hotforex"><p>HotForex</p></a>
                                            <!--<a href="#"><p>HotForex</p></a>-->
                                          </li>
                                          <li>
                                          <img src="<?=base_url()?>/media/images/logo_broker/HotForex-logo.png" alt="" class="img_left4" /></li>
                                        </ul>
                                        
                                      </div>
                                    </div>
                                  </li>
                                </ul>
                            </li>
                            <li><a href="<?=site_url()?>/bonus_and_promotions" class="<?=($active=='bonus')?'active':'';?>"><i class="fa fa-trophy"></i> Bonus & Promotions</a></li>
                            <li><a href="<?=site_url()?>/affiliate_program" class="<?=($active=='affiliate')?'active':'';?>"><i class="fa fa-group"></i> Affiliate Program</a></li>
                            <li><a href="<?=site_url()?>/about_us" class="<?=($active=='about')?'active':'';?>"><i class="fa fa-info"></i> About Us</a></li>
                            <li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle <?=($active=='support')?'active':'';?>"><i class="fa fa-support"></i> Support</a>
                                <ul class="dropdown-menu" role="menu">
                                  <li> <a href="<?=site_url()?>/contact_us">Contact Us</a> </li>
                                  <li> <a href="<?=site_url()?>/faq">FAQ</a> </li>
                                </ul>
                            </li>
                        	<li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle <?=($active=='others')?'active':'';?>"><i class="fa fa-tachometer"></i> Others</a>
                                <ul class="dropdown-menu" role="menu">
                                  <li> <!--<a href="<?=site_url()?>/dhuafa">Dhuafa Program</a>--><a href="#">Dhuafa Program</a> </li>
                                  <li> <!--<a href="<?=site_url()?>/exchanger">Exchanger</a>--><a href="#">Exchanger</a> </li>
                                  <li> <!--<a href="<?=site_url()?>/webinar">Webinar</a>--><a href="#">Webinar</a> </li>
                                  <li> <!--<a href="<?=site_url()?>/gallery">Gallery</a>--><a href="#">Gallery</a> </li>
                                </ul>
                            </li>
                        
                        </ul>                
                      </div>
                  </div>
             	</div>
         
        	</div><!-- end menu -->
            
        </div>
            
        </div>
    
	</div>
    
</header>

<div class="modal fade" id="sign_in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="sign_in-modal">
        <div class="modal-content"></div>
        <!-- /.modal-content -->
    </div>
</div>