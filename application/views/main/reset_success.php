<div class="container">

	<div class="content_fullwidth lessmar">
    
		
      <div class="login_form">
      	<?php if($type=="reset"){?>
			Reset password sukses, silahkan melakukan login dengan password baru anda melalui form login atau ikuti link berikut.
            <a href="<?=site_url("home/signin")?>">Login disini</a>
         <?php }else{?>
			Request reset password sukses, silahkan cek email anda untuk link reset password.
         <?php }?>
		</div>

	</div>

</div><!-- end content area -->
<div class="margin_top5"></div> 