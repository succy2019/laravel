

<?php $__env->startSection('content'); ?>
<!-- END SIDEBAR--><div class="content-wrapper">
  <!-- START PAGE CONTENT-->
      <div class="page-heading">
          <h1 class="page-title" style="color: #FFF;">Fund Account</h1>
          <ol class="breadcrumb">
              <li class="breadcrumb-item">
                  <a href="index.php"><i class="la la-home font-20"></i></a>
              </li>
              <!-- <li class="breadcrumb-item">DataTables</li> -->
          </ol>
      </div>
      <div class="page-content fade-in-up">
          <div class="ibox" style="background: #1d1d1d !important; padding: 0px !important;">
            <div class="ibox-body clearfix" style="padding: 0px !important;">
              
              <div class="_seg_pay">
                <h4 class="_phh">Bitcoin</h4>
                <center><img class="_seg_pay_img_" src="./deposit_files/bitcoin.png"></center>
                <div class="_gwAA _nnp_btn" data-toggle="modal" data-target="#pay_btc" style="border-radius: 3px;">Deposit</div>
              </div>

              <div class="_seg_pay">
                <h4 class="_phh">Ethereum</h4>
                <center><img class="_seg_pay_img_" src="./deposit_files/ethereum.png"></center>
                <div class="_gwAA _nnp_btn" data-toggle="modal" data-target="#pay_eth">Deposit</div>
              </div>
              
              <div class="_seg_pay">
                <h4 class="_phh">USDT</h4>
                <center><img class="_seg_pay_img_" src="./deposit_files/usdt.png"></center>
                <div class="_gwAA _nnp_btn" data-toggle="modal" data-target="#pay_usdt">Deposit</div>
              </div>
              
              <div class="_seg_pay">
                <h4 class="_phh">PayPal</h4>
                <center><img class="_seg_pay_img_" src="./deposit_files/paypal.png"></center>
                <div class="_gwAA _nnp_btn" data-toggle="modal" data-target="#pay_paypal">Deposit</div>
                </div>
                <div class="_seg_pay">
                <h4 class="_phh">Bank Deposit</h4>
                <center><img class="_seg_pay_img_" src="./deposit_files/bank.png"></center>
                <div class="_gwAA _nnp_btn" data-toggle="modal" data-target="#pay_bank">Deposit</div>
              </div>
              
                            
            </div>
          </div>
      </div>
      
      <div class="page-content fade-in-up">
          <div class="ibox">
              <div class="ibox-head">
                  <div class="ibox-title">My Deposit History</div>
              </div>
              <div class="ibox-body table-responsive">   
              
              <div class="box-body">
                    <div class="table-responsive">
                      <table id="example2" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                      <thead>
                        <tr>
                          
	          
                        <th>Status</th>
                                           <th>Trans Type</th>
                                           <th>Withdraw Method</th>
                                           <th>Amount</th>
                                           <th>Date</th>
              
	          
	        
                             </tr>
                      </thead>
                      <tbody>
                                                                                          
                      
                                            </tbody>          
                    </table>
                    </div> 
                    	             
                  </div>
                  
              </div>
          </div>
      </div>
      <!-- END PAGE CONTENT-->
     <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/deposit.blade.php ENDPATH**/ ?>