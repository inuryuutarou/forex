<div class="side-menu pinned">
    <ul class="side-menu nav">
        <li class="element"><a>Dashboard</a></li>
        <li class="element <?=($active=='account_verification')?'active':''?>"><a href="<?=site_url()?>/member/account_verification">Account Verification</a></li>
        <li class="element <?=($active=='my_profile')?'active':''?>"><a href="<?=site_url()?>/member/my_profile">My Profile</a></li>
        <li class="element"><a>Inbox</a></li>
        <li class="element <?=($active=='my_client')?'active':''?>"><a href="<?=site_url()?>/member/my_client">My Clients</a></li>
        <li class="element"><a href="<?=site_url()?>/home/sign_out">Sign Out</a></li>
    </ul>
</div>