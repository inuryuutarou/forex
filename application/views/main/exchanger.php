<style>
	.table>tbody>tr>td {
		vertical-align: middle;
		text-align:center;
	}
	.par_exc{
		padding:15px 10px;
		background: #fff; /* For browsers that do not support gradients */
		background: -webkit-linear-gradient(#CCCCCC,#ffffff); /* For Safari 5.1 to 6.0 */
		background: -o-linear-gradient(#CCCCCC,#ffffff); /* For Opera 11.1 to 12.0 */
		background: -moz-linear-gradient(#CCCCCC,#ffffff); /* For Firefox 3.6 to 15 */
		background: linear-gradient(#CCCCCC,#ffffff); /* Standard syntax */	
		font-size:15px;
		font-weight:bold;
		-webkit-box-shadow: 0px 4px 14px -2px rgba(0,0,0,0.81);
		-moz-box-shadow: 0px 4px 14px -2px rgba(0,0,0,0.81);
		box-shadow: 0px 4px 14px -2px rgba(0,0,0,0.81);
	}
	.par_box{
		padding: 15px 14px 15px 14px;
		color: #999;
		margin-bottom: 4px;
		background-color: #fff;
		border: 1px solid #e3e3e3;
	}
</style>
<div class="margin_top5"></div> 
<div class="container">
<?php isset($side_menu)?$this->load->view($side_menu):'side_menu'?>

    <div class="content_right">
        <div class="row" style="padding-top:0">
            <div class="col-md-12 text-center main-el">
                <h2 class="main-text-color">Exchanger</h2>
                <div class="divider divider-3"></div>
                <div class="form form-1" style="padding:20px" align="justify">
                    <p>FGS disini juga melayani Jual &ndash; Beli atau Deposit / Withdrawal Balance yang dikhususkan untuk seluruh member FGS.</p>
                    
                    <p>FGS membantu trader forex di seluruh jaringan FGS dalam melakukan Deposit &amp; Withdraw secara cepat dan aman dengan harga yang kompetitif.</p>
                    
                    <p>FGS sangat menghargai masukan, saran dan kritik yang akan membantu kami untuk meningkatkan pelayanan kami.</p>
                    
                    <p><strong>Mudah aman dan cepat</strong></p>
                    
                    <p>Dengan Bantuan Customer Support khusus yang selalu siap melayani anda, transaksi anda akan di proses secara cepat.</p>
                    
                    <br><br>
                    <div class="col-xs-12" style="background-color:#F1F1F1; padding:15px">
                    	<h4 style="text-align:center; font-weight:bold">Kurs Jual Beli FGS</h4>
                        <p style="text-align:center">Stok tidak mengikat.<br>Klik kurs BELI untuk menukarkan Rupiah anda dengan E-Currency<br>Klik kurs JUAL untuk menukarkan E-Currency anda dengan rupiah</p>
                        <div class="tablewrap table-responsive">
	                        <table class="table" border="0">
                            	<thead align="center" style="background:#fff; border:none">
                                	<th>JENIS</th>
                                    <th>JUAL</th>
                                    <th>BELI</th>
                                    <th>STOCK</th>
                                </thead>
                                <tbody style="margin-top:20px">
                                <?php foreach($broker as $br){?>
                                	<tr>
                                    	<td>
                                        	<a href="<?=site_url("member/exchange_form/$br->id_broker")?>">
                                            	<div class="par_exc"><?=$br->name?></div>
                                            </a>
                                        </td>
                                        <td>
                                        	<a href="<?=site_url("member/exchange_form/$br->id_broker/1")?>">
                                            	<div class="par_exc">Rp <?=number_format($br->jual)?></div>
                                            </a>
                                        </td>
                                        <td>
                                        	<a href="<?=site_url("member/exchange_form/$br->id_broker/0")?>">
                                            	<div class="par_exc">Rp <?=number_format($br->beli)?></div>
                                            </a>
                                        </td>
                                        <td><div class="par_exc">$ <?=number_format($br->stock,2)?></div></td>
                                    </tr>
                                 <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br><br>
                    <div class="row"> 
                    	<div class="col-md-4">
                            <h4><strong>Waktu</strong> Layanan</h4>
                            <table border="0" cellpadding="0" cellspacing="0" style="width:214px">
                                <tbody>
                                    <tr>
                                        <td colspan="3">
                                        <p><strong>Waktu Proses Order</strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:102px">
                                        <p><strong>Senin-Jumat</strong></p>
                                        </td>
                                        <td style="width:10px">
                                        <p>:</p>
                                        </td>
                                        <td style="width:102px">
                                        <p>09:00-12:00</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p>&nbsp;</p>
                                        </td>
                                        <td>
                                        <p>&nbsp;</p>
                                        </td>
                                        <td>
                                        <p>13:00-17:00</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p>&nbsp;</p>
                                        </td>
                                        <td>
                                        <p>&nbsp;</p>
                                        </td>
                                        <td>
                                        <p>19:30-21:00</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p><strong>Sabtu</strong></p>
                                        </td>
                                        <td>
                                        <p>:</p>
                                        </td>
                                        <td>
                                        <p>09:00-12:00</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p><strong>Minggu/Libur</strong></p>
                                        </td>
                                        <td>
                                        <p>:</p>
                                        </td>
                                        <td>
                                        <p>Proses malam hari</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                        <p>&nbsp;</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                        <p><strong>Waktu Online Support</strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p><strong>Senin-Jumat</strong></p>
                                        </td>
                                        <td>
                                        <p>:</p>
                                        </td>
                                        <td>
                                        <p>09:00-12:00</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p>&nbsp;</p>
                                        </td>
                                        <td>
                                        <p>&nbsp;</p>
                                        </td>
                                        <td>
                                        <p>13:00-17:00</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
						</div>
                        <div class="col-md-8">
                        	<h4><strong>Exchange</strong> History</h4>
                            <br />
                            <div class="par_box">
                                <div class="tablewrap table-responsive">
                                    <table class="table table-bordered" style="background-color:#fff">
                                        <tbody>
                                            <tr>
                                                <td align="center" style="border-top:solid 3px #FDEA00; border-left:1px; border-right:1px; text-align:center; font-size:13px;font-weight:bold">Date</td>
                                                <td align="center" style="border-top:solid 3px #FDEA00; border-left:1px; border-right:1px; text-align:center; font-size:13px;font-weight:bold">Type</td>
                                                <td align="center" style="border-top:solid 3px #FDEA00; border-left:1px; border-right:1px; text-align:center; font-size:13px;font-weight:bold">Jumlah</td>
                                                <td align="center" style="border-top:solid 3px #FDEA00; border-left:1px; border-right:1px; text-align:center; font-size:13px;font-weight:bold">Nominal $</td>
                                                <td align="center" style="border-top:solid 3px #FDEA00; border-left:1px; border-right:1px; text-align:center; font-size:13px;font-weight:bold">Status</td>
                                            </tr>
                                            <?php foreach($history as $row){?>
                                            <tr>
                                                <td style="width:108px">
                                                <p><?=$row->timestamp?></p>
                                                </td>
                                                <td style="width:102px">
                                                <p><?=($row->jenis_transaksi==0)?"BELI":"JUAL"?></p>
                                                </td>
                                                <td style="width:120px">
                                                <p>Rp <?=number_format($row->nilai)?></p>
                                                </td>
                                                <td style="width:120px">
                                                <p>$ <?=number_format($row->nilai/$row->nilai,2)?></p>
                                                </td>
                                                <td style="width:96px">
                                                <p><?=($row->approved==1)?"Pending":"Approved"?></p>
                                                </td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
                <div class="shadow"></div>
            </div>
        </div>
    </div>
</div>
<div class="margin_top5"></div> 