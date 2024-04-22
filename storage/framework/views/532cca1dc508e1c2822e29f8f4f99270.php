<?php $__env->startSection('content'); ?>

 <!-- START PAGE CONTENT-->
 <div class="page-content fade-in-up">
    <div class="row mb-2">
        <div class="col-md-6 col-xl-3 mb-2">
            <div class="card shadow border-left-primary py-2">
                <div class="card-body bg-black">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>Available Balance</span></div>
                            <div class="font-weight-bold h5 mb-0 text-white">
                              <span style="color: blue; font-weight:bolder;">

                                <?php echo e(number_format(Auth::user()->balance)); ?>

                            
                            </span>
                            </div>
                        </div>
                        <!--<div class="col-auto text-white">-->
                        <!--  <i class="fa fa-usd fa-2x text-gray-300"></i>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-2">
            <div class="card shadow border-left-warning py-2">
                <div class="card-body bg-black">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span>BTC Equivalent</span></div>
                            <div class="font-weight-bold h5 mb-0 text-white">
                                <span style="color: blue; font-weight:bolder;"> <?php  $q=0.000016;
                              $bal =Auth::user()->balance;
                              $c= $q * $bal;
                            echo number_format($c,8);
                            
                            ?>BTC</span>
                            Auth::user()->balance
                            </div>
                        </div>
                        <div class="col-auto text-white">
                          <i class="fa fa-btc fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-2">
            <div class="card shadow border-left-success py-2">
                <div class="card-body bg-black">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>Invested</span></div>
                            <div class="font-weight-bold h5 mb-0 text-white">
                            
                                <span style="color: blue; font-weight:bolder;">

                                    <?php echo e(number_format(Auth::user()->deposit)); ?>

                                
                                </span>
                            </div>
                        </div>
                        <!--<div class="col-auto text-white">-->
                        <!--  <i class="fa fa-usd fa-2x text-gray-300"></i>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-2">
            <div class="card shadow border-left-info py-2">
                <div class="card-body bg-black">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-info font-weight-bold text-xs mb-1"><span>Account Level</span></div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="font-weight-bold h5 mb-0 text-white">
                                      <span>Basic</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto text-white">
                          <i class="fa fa-university fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="col-md-6 col-xl-3 mb-2">
            
                <div class="card-body bg-black">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>Trade in Progress</span></div><p>
                            <div class="font-weight-bold h5 mb-0 text-white">
                                    <p>  <span>0% Completed</span>
                                    </div></p>
                            <div class="progress">
<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
</div>
                        </div>
                        
                    </div>
                </div>
            
        </div>
        
        
    </div>
    
    
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
      <div id="tradingview_19631"></div>
      <div class="tradingview-widget-copyright"></div>
      <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
      <script type="text/javascript">
      new TradingView.widget(
      {
      "width": "auto",
      "height": 498,
      "symbol": "COINBASE:BTCUSD",
      "interval": "D",
      "timezone": "Etc/UTC",
      "theme": "Dark",
      "style": "0",
      "locale": "en",
      "toolbar_bg": "#f1f3f6",
      "enable_publishing": false,
      "allow_symbol_change": true,
      "hotlist": true,
      "container_id": "tradingview_19631"
    }
      );
      </script>
    </div>
    <!-- TradingView Widget END -->

    <div class="row mt-4">
        <div class="col-lg-8">
            <div class="ibox">
                <div class="ibox-body">
                    <div class="flexbox mb-4">
                        <!-- <div>
                            <h3 class="m-0">Statistics</h3>
                            <div>Your shop sales analytics</div>
                        </div> -->
                        <div class="d-inline-flex">
                            <div class="px-3" style="border-right: 1px solid rgba(0,0,0,.1);">
                                <div class="text-muted">WEEKLY DEPOSIT</div>
                                <div>
                                    <span class="h5 m-0">$155,389</span>
                                    <span class="text-success ml-2"><i class="fa fa-level-up"></i> +99%</span>
                                </div>
                            </div>
                            <div class="px-3">
                                <div class="text-muted">WEEKLY WITHDRAW</div>
                                <div>
                                    <span class="h5 m-0">321,642</span>
                    <span class="text-warning ml-2"><i class="fa fa-level-down"></i> -25%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <canvas id="bar_chart" style="height:260px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Statistics</div>
                </div>
                <div class="ibox-body">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <canvas id="doughnut_chart" style="height:160px;"></canvas>
                        </div>
                        <div class="col-md-6">
                            <div class="m-b-20 text-success"><i class="fa fa-circle-o m-r-10"></i>Desktop 74%</div>
                            <div class="m-b-20 text-info"><i class="fa fa-circle-o m-r-10"></i>Tablet 63%</div>
                            <div class="m-b-20 text-warning"><i class="fa fa-circle-o m-r-10"></i>Mobile 27%</div>
                        </div>
                    </div>
                    <ul class="list-group list-group-divider list-group-full">
                        <li class="list-group-item">Chrome
                            <span class="float-right text-success"><i class="fa fa-caret-up"></i> 98%</span>
                        </li>
                        <li class="list-group-item">Firefox
                            <span class="float-right text-success"><i class="fa fa-caret-up"></i> 40%</span>
                        </li>
                        <li class="list-group-item">Opera
                            <span class="float-right text-danger"><i class="fa fa-caret-down"></i> 83%</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
        svg{
            width: 100% !important;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function () {
            $("svg").css({"width": "100%"});
        })
    </script>
    <div class="row">
        <div class="col-lg-8">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Visitors Statistics</div>
                </div>
                <div class="ibox-body">
                    <div id="world-map" style="height: 300px;"></div>
                    <table class="table table-striped m-t-20 visitors-table">
                        <thead>
                            <tr>
                                <th>Country</th>
                                <th>Visits</th>
                                <th>Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img class="m-r-10" src="./index_files/us.png">USA</td>
                                <td>5572</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" style="width:64%; height:5px;" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="progress-parcent">89%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="m-r-10" src="./index_files/Canada.png">Canada</td>
                                <td>8308</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" style="width:25%; height:5px;" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="progress-parcent">99%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="m-r-10" src="./index_files/India.png">India</td>
                                <td>5560</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" style="width:29%; height:5px;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="progress-parcent">90%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="m-r-10" src="./index_files/Australia.png">Australia</td>
                                <td>8998</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" style="width:58%; height:5px;" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="progress-parcent">29%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="m-r-10" src="./index_files/Singapore.png">Singapore</td>
                                <td>7941</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar" role="progressbar" style="width:84%; height:5px;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="progress-parcent">33%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="m-r-10" src="./index_files/uk.png">UK</td>
                                <td>3085</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" style="width:60%; height:5px;" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="progress-parcent">86%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="m-r-10" src="./index_files/UAE.png">UAE</td>
                                <td>3995</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" style="width:29%; height:5px;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="progress-parcent">91%</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Tasks</div>
                    <div>
                        <a class="btn btn-info btn-sm" href="javascript:;">New Task</a>
                    </div>
                </div>
                <div class="ibox-body">
                    <ul class="list-group list-group-divider list-group-full tasks-list">
                        <li class="list-group-item task-item">
                            <div>
                                <label class="ui-checkbox ui-checkbox-gray ui-checkbox-success">
                                    <input type="checkbox">
                                    <span class="input-span"></span>
                                    <span class="task-title">Meeting with Eliza</span>
                                </label>
                            </div>
                            <div class="task-data"><small class="text-muted">10 July 2018</small></div>
                            <div class="task-actions">
                                <a href="javascript:;"><i class="fa fa-edit text-muted m-r-10"></i></a>
                                <a href="javascript:;"><i class="fa fa-trash text-muted"></i></a>
                            </div>
                        </li>
                        <li class="list-group-item task-item">
                            <div>
                                <label class="ui-checkbox ui-checkbox-gray ui-checkbox-success">
                                    <input type="checkbox" checked="">
                                    <span class="input-span"></span>
                                    <span class="task-title">Check your inbox</span>
                                </label>
                            </div>
                            <div class="task-data"><small class="text-muted">22 May 2018</small></div>
                            <div class="task-actions">
                                <a href="javascript:;"><i class="fa fa-edit text-muted m-r-10"></i></a>
                                <a href="javascript:;"><i class="fa fa-trash text-muted"></i></a>
                            </div>
                        </li>
                        <li class="list-group-item task-item">
                            <div>
                                <label class="ui-checkbox ui-checkbox-gray ui-checkbox-success">
                                    <input type="checkbox">
                                    <span class="input-span"></span>
                                    <span class="task-title">Create Financial Report</span>
                                </label>
                                <span class="badge badge-danger m-l-5"><i class="ti-alarm-clock"></i> 1 hrs</span>
                            </div>
                            <div class="task-data"><small class="text-muted">No due date</small></div>
                            <div class="task-actions">
                                <a href="javascript:;"><i class="fa fa-edit text-muted m-r-10"></i></a>
                                <a href="javascript:;"><i class="fa fa-trash text-muted"></i></a>
                            </div>
                        </li>
                        <li class="list-group-item task-item">
                            <div>
                                <label class="ui-checkbox ui-checkbox-gray ui-checkbox-success">
                                    <input type="checkbox" checked="">
                                    <span class="input-span"></span>
                                    <span class="task-title">Send message to Mick</span>
                                </label>
                            </div>
                            <div class="task-data"><small class="text-muted">04 Apr 2018</small></div>
                            <div class="task-actions">
                                <a href="javascript:;"><i class="fa fa-edit text-muted m-r-10"></i></a>
                                <a href="javascript:;"><i class="fa fa-trash text-muted"></i></a>
                            </div>
                        </li>
                        <li class="list-group-item task-item">
                            <div>
                                <label class="ui-checkbox ui-checkbox-gray ui-checkbox-success">
                                    <input type="checkbox">
                                    <span class="input-span"></span>
                                    <span class="task-title">Create new page</span>
                                </label>
                                <span class="badge badge-success m-l-5">2 Days</span>
                            </div>
                            <div class="task-data"><small class="text-muted">07 Dec 2018</small></div>
                            <div class="task-actions">
                                <a href="javascript:;"><i class="fa fa-edit text-muted m-r-10"></i></a>
                                <a href="javascript:;"><i class="fa fa-trash text-muted"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Latest Withdraw</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item">option 1</a>
                            <a class="dropdown-item">option 2</a>
                        </div>
                    </div>
                </div>
                <div class="ibox-body" style="overflow: hidden; overflow-x: scroll;">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>TRANS. ID</th>
                                <th>Customer ID</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th width="91px">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="index.php#">AT556B</a>
                                </td>
                                <td>#5ED2199GHE4FI</td>
                                <td>€257,100</td>
                                <td>
                                    <span class="badge badge-success">Approved</span>
                                </td>
                                <td>28/07/2023</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="index.php#">AT9ASJ</a>
                                </td>
                                <td>#5ED219JCMTYO56</td>
                                <td>€102,900</td>
                                <td>
                                    <span class="badge badge-success">Approved</span>
                                </td>
                                <td>02/08/2023</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="index.php#">AT4DFQ</a>
                                </td>
                                <td>#5ED219A4HSDJ2</td>
                                <td>€96,400</td>
                                <td>
                                     <span class="badge badge-success">Approved</span>
                                </td>
                                <td>12/08/2023</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <style>
        .visitors-table tbody tr td:last-child {
            display: flex;
            align-items: center;
        }

        .visitors-table .progress {
            flex: 1;
        }

        .visitors-table .progress-parcent {
            text-align: right;
            margin-left: 10px;
        }
    </style>
</div>
<!-- END PAGE CONTENT-->
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/dashboard.blade.php ENDPATH**/ ?>