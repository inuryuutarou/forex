<div class="container">

	<div class="content_fullwidth lessmar">
    
		
      <div class="login_form">
      	<p style="text-align:center">
      	<?php if($type=="reset"){?>
			Reset password sukses, <br>silahkan melakukan login dengan password baru anda melalui form login atau ikuti link berikut.
            <a href="<?=site_url("home/signin")?>">Login disini</a>
         <?php }else{?>
			Request reset password sukses,<br>silahkan cek email anda untuk link reset password.
         <?php }?>
         </p>
		</div>

	</div>

</div><!-- end content area -->
<div class="margin_top5"></div> 