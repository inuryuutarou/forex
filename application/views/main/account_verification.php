<div class="container">
    <div class="row">
    	<div class="col-md-3">
            <?php isset($side_menu)?$this->load->view($side_menu):'side_menu'?>
        </div> 
        <div class="col-md-9">
        	<div class="call">
            	<h4>Account Verification</h4>
                <br>
                <form class="form-horizontal" action="#" method="post">
                	<div class="form-group">
                      <label class="col-sm-2 control-label">Username</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-7">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-7">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">PIN Deposit/Withdraw</label>
                      <div class="col-sm-7">
                        <input type="password" class="form-control" id="pin" name="pin" placeholder="PIN">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">First Name</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                      </div>
                      <label class="col-sm-2 control-label">Last Name</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Facebook Name</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="fb_username" name="fb_username" placeholder="Facebook Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Facebook URL</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="fb_link" name="fb_link" placeholder="Facebook Link">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Address</label>
                      <div class="col-sm-7">
                        <textarea class="form-control" id="address" name="address" placeholder="Address"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">City</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="city" name="city" placeholder="City">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Province</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="province" name="province" placeholder="Province">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Postal Code</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="postal" name="postal" placeholder="Postal">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Country</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="country" name="country" placeholder="Country">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Phone Number</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Instant Messenger</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="im" name="im" placeholder="Instant Messenger">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">ID Card (KTP)</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="id_card_number" name="id_card_number" placeholder="ID Card (KTP)">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">ID Card (KTP) File</label>
                      <div class="col-sm-7">
                        <input type="file" class="form-control" id="ktp_file" name="ktp_file" placeholder="ID Card (KTP) File">
                      </div>
                    </div>
                    <div class="call">
                    	<h5 class="col-sm-12">Bank Data</h5>
                        <div class="form-group">
                        
                          <label class="col-sm-2 control-label">Bank Name</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="Bank Name">
                          </div>
                        </div>
                        <div class="form-group">
                        
                          <label class="col-sm-2 control-label">Bank Account Name</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="bank_acc_name" name="bank_acc_name" placeholder="Bank Account Name">
                          </div>
                        </div>
                        <div class="form-group">
                        
                          <label class="col-sm-2 control-label">Bank Account Number</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="bank_acc_num" name="bank_acc_num" placeholder="Bank Account Number">
                          </div>
                        </div>
                        <div class="form-group">
                        
                          <label class="col-sm-2 control-label">Bank Branch</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="bank_branch" name="bank_branch" placeholder="Bank Branch">
                          </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                      <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                </form>
            </div>
        </div>          
    </div>
</div>