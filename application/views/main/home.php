<div class="bannercontainer">
    <div class="banner shop-slider">
        <ul>
            <li id="slide1" data-transition="fade" data-slotamount="1">
                <img src="<?=base_url()?>/media/images/banner.jpg" alt="">
            </li>
        </ul>
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
        <div class="col-md-12 text-center main-el">
            <h2 class="main-text-color">Forex Global Service (FGS) ?  </h2>
            <div class="divider divider-3"></div>
            <p>Forex Global Service (FGS) adalah sebuah program yang memiliki sistem jangka panjang yang berantai yang memiliki potensi bisnis yang sangat besar untuk para member FGS. Sebuah program terbaru yang menggunakan sistem jaringan / network marketing dalam dunia forex yang akan melibatkan ribuan trader yang ada di dalam program ini. Program ini adalah sebuah terobosan besar dalam dunia Forex saat ini.
			<br><br>
Pada dasarnya FGS didirikan berdasarkan sebuah mimpi besar tentang adanya sebuah wadah bagi para pelaku trading forex di Indonesia yang memberikan segala fasilitas yang dibutuhkan dalam melakukan aktivitas trading forex secara gratis dalam jangka waktu yang panjang. Dan dengan pelayanan yang maksimal. FGS dibangun dengan konsep multi level marketing dalam hal ini jaringan FGS memiliki kedalaman yang tidak terbatas, fungsi dari metode jaringan ini di buat tidak lain adalah demi memberi pelayanan yang maksimal dalam hal pembagian Bonus rebates, edukasi dll kepada seluruh member FGS dan memperbesar jaringan FGS kedepannya. Sistem ini akan saling memberi keuntungan baik untuk semua member dalam jangka panjang.

            </p>
        </div>
        <div class="col-xs-12 visible-xs main-el">
            
        </div>
    </div>
</div>
<div id="parteners">
    <div class="parteners carousel content">
        <div class="container">
            <div class="feed cycle-slideshow" data-cycle-carousel-fluid="true" data-cycle-fx="carousel" data-cycle-timeout="2000" style="height:150px">
                <img src="<?=base_url()?>/media/images/logo_broker/HotForex-logo.png" class="img-responsive" alt="" data-toggle="tooltip" title="HotForex">
                <!--<img src="<?=base_url()?>/media/images/logo_broker/hotforex.jpe" class="img-responsive" alt="" data-toggle="tooltip" title="HotForex">
                <img src="<?=base_url()?>/media/images/logo_broker/hotforex-debit-card.jpg" class="img-responsive" alt="" data-toggle="tooltip" title="HotForex">
                <img src="<?=base_url()?>/media/images/logo_broker/HotForex-logo.png" class="img-responsive" alt="" data-toggle="tooltip" title="HotForex">
                <img src="<?=base_url()?>/media/images/logo_broker/images.jpe" class="img-responsive" alt="" data-toggle="tooltip" title="XM">
                <img src="<?=base_url()?>/media/images/logo_broker/Logo_of_financial_services_firm_XM.png" class="img-responsive" alt="" data-toggle="tooltip" title="XM">-->
                <img src="<?=base_url()?>/media/images/logo_broker/unnamed.png" class="img-responsive" alt="" data-toggle="tooltip" title="XM">
            </div>
    
            <div class="fade-l">
            </div>
            <div class="fade-r">
            </div>
    
        </div>
    </div>
</div>