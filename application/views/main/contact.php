<div class="one_full">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.104676251231!2d115.24988424251637!3d-8.68159513634836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2404e8d34dd03%3A0x57d1562bf376524e!2sJl.+Tukad+Bilok+No.2%2C+Denpasar+Sel.%2C+Kota+Denpasar%2C+Bali+80227%2C+Indonesia!5e0!3m2!1sen!2s!4v1454000507765" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe><br /><small><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.104676251231!2d115.24988424251637!3d-8.68159513634836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2404e8d34dd03%3A0x57d1562bf376524e!2sJl.+Tukad+Bilok+No.2%2C+Denpasar+Sel.%2C+Kota+Denpasar%2C+Bali+80227%2C+Indonesia!5e0!3m2!1sen!2s!4v1454000507765" style="color:#0000FF;text-align:left">View Larger Map</a></small>
</div>

<div class="container">

  <div class="content_fullwidth">
  
    <div class="two_third">
    
      <div class="cforms">
      
      <form action="<?=site_url("contact_us/send")?>" method="post" id="sky-form" class="sky-form">
        <header>Send Us a <strong>Message!</strong></header>
        <fieldset>
          <div class="row">
            <section class="col col-6">
              <label class="label">Name</label>
              <label class="input"> <i class="icon-append icon-user"></i>
                <input type="text" name="name" id="name">
              </label>
            </section>
            <section class="col col-6">
              <label class="label">E-mail</label>
              <label class="input"> <i class="icon-append icon-envelope-alt"></i>
                <input type="email" name="email" id="email">
              </label>
            </section>
          </div>
          <section>
            <label class="label">Subject</label>
            <label class="input"> <i class="icon-append icon-tag"></i>
              <input type="text" name="subject" id="subject">
            </label>
          </section>
          <section>
            <label class="label">Message</label>
            <label class="textarea"> <i class="icon-append icon-comment"></i>
              <textarea rows="4" name="message" id="message"></textarea>
            </label>
          </section>
          <div class="row">
			<section class="col col-3">
            <label class="label">Captcha</label>
			<?php $img_capt=$this->session->userdata('captcha');?>
			<img src="<?=$img_capt['image_src']?>" title="captcha" style="width:137px; height:45px; background-color:#F4AF4B; border-radius:5px;">
            </section>
            <section class="col col-4">
            	<label class="label">Input Captcha</label>
                <label class="input"> 
                    <input type="text" name="captcha" required="required" />
                  </label>
            </section>
		  </div>
        </fieldset>
        <footer>
          <button type="submit" class="button">Send message</button>
        </footer>
        <div class="message"> <i class="icon-ok"></i>
          <p>Your message was successfully sent!</p>
        </div>
      </form>
      
      </div>
      
    </div><!-- end section -->
    
    <div class="one_third last">
    
      <div class="address_info two">
      
        <h4><strong>Address</strong></h4>
        <ul>
          <li> <strong>Forex Global Service</strong><br />
            Jl. Tukad Bilok No. 2, Renon, Denpasar, Bali<br />
            Telepon: +6281 246 515 082<br />
            E-mail: <a href="mailto:info@forexglobalservice.com">info@forexglobalservice.com</a><br />
            Website: <a href="<?=site_url()?>">www.forexglobalservice.com</a> </li>
        </ul>
        
      </div><!-- end section -->
      
    </div>
      
  </div>
  
</div><!-- end content area -->