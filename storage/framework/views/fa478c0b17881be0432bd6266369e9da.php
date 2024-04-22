

<?php $__env->startSection('content'); ?>
<!-- END SIDEBAR--><div class="content-wrapper">
    <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title" style="color: #FFF;">Place a Withdraw</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php"><i class="la la-home font-20"></i></a>
                </li>
                <li class="breadcrumb-item">Place a withdrawal</li>
            </ol>
        </div>
        <div class="page-content fade-in-up">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Your balance is <?php echo $row['currency'] ?><?php echo $row['balance'] ?></div>
                </div>
                <div class="ibox-body">
                    <form method="POST" action="" style="max-width: 500px;">  
                    <input class="form-control" name="email" type="hidden" value="<?php echo $row['email']?>">                     
                        <div class="form-group">
                            <label>Withdrawal Method</label>
                            <select class="form-control" name="witmethod" id="withdrawalMethod" required="">
                                <option value="">---Choose---</option>
                                <option value="Bitcoin">Bitcoin</option>
                                <option value="Ethereum">Ethereum</option>
                                <option value="Bitcoin Cash">Bitcoin Cash</option>
                                <option value="Litecoin">Litecoin</option>
                                <option value="PayPal">PayPal</option>
                                <option value="Bank Transfer">Bank Transfer</option>
                            </select>
                        </div>
                        <div class="form-group" id="beneficiaryField1" style="display: none">
                            <div class="input-group-icon">
                                <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                                <input class="form-control" type="text" name="wallet_address" placeholder="Wallet address">
                            </div>
                        </div> 
                        <div class="form-group" id="beneficiaryField2" style="display: none">
                            <div class="input-group-icon">
                                <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                                <input class="form-control" type="text" name="paypal_email" placeholder="PayPal Mail">
                            </div>
                        </div> 
                        <div class="form-group" id="beneficiaryField3" style="display: none">
                            <div class="input-group-icon">
                                <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                                <input class="form-control" type="text" name="bank_name" placeholder="Bank Name">
                            </div>
                        </div> 
                        <div class="form-group" id="beneficiaryField4" style="display: none">
                            <div class="input-group-icon">
                                <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                                <input class="form-control" type="text" name="acct_name" placeholder="Account Name">
                            </div>
                        </div> 
                        <div class="form-group" id="beneficiaryField5" style="display: none">
                            <div class="input-group-icon">
                                <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                                <input class="form-control" type="text" name="acct_no" placeholder="Account Number">
                            </div>
                        </div> 
                        <div class="form-group" id="beneficiaryField6" style="display: none">
                            <div class="input-group-icon">
                                <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                                <input class="form-control" type="text" name="acct_swift" placeholder="Swift Code">
                            </div>
                        </div> 
                        <div class="form-group">
                            <div class="input-group-icon">
                                <div class="input-icon"><i class="fa fa-money text-primary font-15"></i></div>
                                <input class="form-control" name="amount" type="text" placeholder="Amount" required="">
                            </div>
                        </div>
                        <input type="text"  name="date_generated" value="07:27:14 PM" hidden>
                <input type="hidden" name="ref_no" value="159167">
                        <button class="btn btn-warning btn-block" type="submit" name="submits">Proceed</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="page-content fade-in-up">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">My Withdraw History</div>
                </div>
           
              <div class="ibox-body table-responsive">   
                  <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                         <thead>
                             <tr>
                                
                              <th>Status</th>
                                           <th>Trans Type</th>
                                           <th>Withdraw Method</th>
                                           <th>Amount (<?php echo $row['currency'] ?>)</th>
                                           <th>Date</th>
                              </tr>
 </thead>
                      <tbody>
                              
                        <?php

                        $sql=mysqli_query($conn,"SELECT * FROM dep INNER JOIN users ON dep.trans_email=users.email WHERE dep.trans_type='withdraw' AND users.id='".$_SESSION['userSession']."'");

                        while($r=mysqli_fetch_assoc($sql)){                                                  
                                                                            
                                         echo '                                    

                                          <tr>
       <td>
                                                         <b class="_pay_now" style="float: left; width: 100px; text-align: center; background: grey;">'.$r['trans_status'].'</b>
                                                         
                                                    </td>
       
       <td>'.$r['trans_type'].'</td>
       <td>'.$r['wmethod'].'</td>
       <td>'.$r['currency'].''.$r['amount'].'</td>
       <td>'.$r['trans_date'].'</td>
   
   </tr>';
}
     ?>                                                                    
                                                </tbody>
                  </table>
              </div>
          </div>
      </div>
            
    <!-- END PAGE CONTENT-->
           <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/withdraw.blade.php ENDPATH**/ ?>