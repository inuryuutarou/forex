<div class="bannercontainer">
    <div class="banner shop-slider">
        
    </div>
</div>

<div class="content">
    <div class="container">
        <div class="row">
        
        <?php if( ! $this->session->userdata('forex_login') ) { ?>
            <div class="col-md-12 main-el">
                <div class="call">
                    <h3>Register Now !</h3>
                    <form class="form-inline" action="<?=site_url('home/save');?>" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-default">Sign Up</button>
                    </form>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 main-el hidden-xs">
            
        </div>
        <div class="col-xs-12 visible-xs main-el">
            
        </div>
    </div>
    <div class="row">
        
    </div>
</div>