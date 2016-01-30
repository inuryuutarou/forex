<div class="footer_graph"></div>

<div class="clearfix"></div>

<div class="footer1">
    <div class="container">
        
        <div class="one_full animate" data-anim-type="fadeInLeft">
            <div class="margin_top5"></div>
            <h4>Our Partners</h4>
            
            <div class="clients">

				<div class="container">
                    <ul id="mycarouselthree" class="jcarousel-skin-tango">

                        <li><img src="<?=base_url()?>/media/images/logo_broker/exness.png" alt="" /></li>                  
                        <li><img src="<?=base_url()?>/media/images/logo_broker/instaforex.png" height="140px" alt="" /></li>
                        <li><img src="<?=base_url()?>/media/images/logo_broker/unnamed.png" alt="" /></li>
                        <li><img src="<?=base_url()?>/media/images/logo_broker/orbex.png" alt="" /></li>
                        <li><img src="<?=base_url()?>/media/images/logo_broker/HotForex-logo.png" alt="" /></li>
            
                    </ul>
				</div>
            </div>
                    
        </div>
        
        <div class="clearfix divider_dashed1"></div>
        
        <div class="one_full animate" data-anim-type="fadeInLeft">
            <h4>Broker Ads</h4>
            
            <div class="clients">

				<div class="container">
                    <p>Space for broker ads</p>
				</div>
            </div>
                    
        </div>
        
        <div class="clearfix divider_dashed1"></div>
        
        <div class="one_third animate" data-anim-type="fadeInUp">
            <ul class="faddress">
                <li><img src="<?=base_url()?>/media/images/logo.png" alt="" width="80px" /></li>
                <li><i class="fa fa-map-marker fa-lg"></i>&nbsp; Jl. Tukad Bilok No. 2, Renon<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Denpasar, Bali</li>
                <li><i class="fa fa-phone"></i>&nbsp; +6281 246 515 082</li>
                <li><a href="mailto:info@yourdomain.com"><i class="fa fa-envelope"></i> info@forexglobalservice.com</a></li>
            </ul>
        </div><!-- end address -->
        
        <div class="one_third animate" data-anim-type="fadeInUp">
            <div class="qlinks">
            
                <h4 class="lmb">Support</h4>
                
                <ul>
                    <li><a href="<?=site_url()?>/contact_us"><i class="fa fa-angle-right"></i> Contact Us</a></li>
                    <li><a href="<?=site_url()?>/faq"><i class="fa fa-angle-right"></i> FAQs</a></li>
                </ul>
                
            </div>
        </div><!-- end links -->
            
        <div class="one_third last animate" data-anim-type="fadeInUp">
            <div class="siteinfo">
            
                <h4 class="lmb">Facebook</h4>
                <div style="padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px; background-color:#fff;">
                	<div class="fb-like" data-href="https://www.facebook.com/FOREX-Global-Service-FGS-792977437492109/?fref=nf" data-layout="standard" data-action="like" data-show-faces="true" data-share="false"></div>
                </div>
                
            </div>
        </div><!-- end site info -->        
        
    </div>
</div><!-- end footer -->

<div class="clearfix"></div>

<div class="copyright_info">
    <div class="container">
    
        <div class="clearfix divider_dashed10"></div>
        
        <div class="one_half animate" data-anim-type="fadeInRight">
        
            Copyright © 2016 Forex Global Service. All rights reserved.  <a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a>
            
        </div>
        
        <div class="one_half last">
            
            <ul class="footer_social_links">
                <li class="animate" data-anim-type="zoomIn"><a href="https://www.facebook.com/FOREX-Global-Service-FGS-792977437492109/?fref=nf"><i class="fa fa-facebook"></i></a></li>
            </ul>
                
        </div>
        
    </div>
</div><!-- end copyright info -->


<a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->

<!-- jquery jcarousel -->
    <script type="text/javascript">
    (function($) {
     "use strict";
    
        jQuery(document).ready(function() {
                jQuery('#mycarouselthree').jcarousel();
				
				<?php if($this->session->flashdata('message')){?>
					alert("<?=$this->session->flashdata('message')?>");
				<?php }?>
        });
        
    })(jQuery);
    </script>