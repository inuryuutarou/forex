<div class="modal-body">
	<div class="row" id="box-form-detail-member">
    	<div class="col-xs-12">
        	<div class="box">
                <div class="box-header with-border" align="center">
                  <h3 class="box-title"><strong>Broker List</strong></h3>
                </div><!-- /.box-header -->

                    <table style="width: 100%" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Link IB</th>
                            <th>Link Client</th>
                            <th>Broker Username</th>
                            <th>Real Account</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if($get_broker_detail->num_rows() > 0) {
                        foreach($get_broker_detail->result() as $row) { ?>
                            <tr>
                                <td><?=$row->link_ib;?></td>
                                <td><?=$row->link_client;?></td>
                                <td><?=$row->broker_username;?></td>
                                <td><?=$row->real_account;?></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                    </tbody>
                    </table>

			</div>
        </div>
    </div>
</div>