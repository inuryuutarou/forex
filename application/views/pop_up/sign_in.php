<div class="modal-body">
  <div class="row">
      <div class="col-sm-6">
          <h3>Login</h3>
          <form action="<?=site_url('home/sign_in');?>" method="post" class="form-horizontal">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" name="username" class="form-control" id="inputEmail3" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Remember me
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button>
              </div>
            </div>
          </form>
      </div>
      <div class="col-sm-6" style="border-left:solid 1px #BBBBBB">
          <h3>Register</h3>
          <form class="form-horizontal" action="<?=site_url('home/save');?>" method="post">
              <div class="form-group">
                <label class="col-sm-3 control-label">Username</label>
                <div class="col-sm-9">
                  <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">First Name</label>
                <div class="col-sm-9">
                  <input type="text" name="first_name" class="form-control" id="inputEmail3" placeholder="First Name">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Last Name</label>
                <div class="col-sm-9">
                  <input type="text" name="last_name" class="form-control" id="inputEmail3" placeholder="Last Name">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                  <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Password</label>
                <div class="col-sm-9">
                  <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
              </div>
              <div class="form-group">
              <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Sign Up</button>
              </div>
            </div>
          </form>
      </div>
  </div>    
</div>