
<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Dashboard | pipsbull-earners</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link rel="icon" type="image/icon" href="img/favicon.png">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="./themify-icons/themify-icons.css" rel="stylesheet">
   

    
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/bootstrap.min.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/jquery-jvectormap-2.0.3.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/bootstrap-imageupload.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/sweetalert2.min.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/main.css'); ?>
   
    <!-- PAGE LEVEL STYLES-->
    <!-- SWEET ALERT -->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <style type="text/css">
        ._w89{
         width: 80% !important;
         margin-top: 10px;
         border-radius: 3px;
         display: block;
         overflow: hidden;
      }
      #cWIIT{
         opacity: 0;
         height: 0px;
         width: 0px;
         position: fixed;
         top: 0;
      }
      ._pay_now, ._pay_now_{
         cursor: pointer;
      }
      .up_bx{
        width: 240px;
        /* padding: 20px; */
        display: inline-block;
        /* margin: 5px; */
        background: #FFF;
        border: 1px dashed #00afef;
        box-shadow: 0px 1px 2px rgba(0,0,0,0.1);
        /* border-radius: 2px; */
        margin-bottom: 10px;
      }
      ._upGH{
         font-size: 35px;
         font-weight: 900;
      }
      ._upGP{
         font-size: 24px;
         margin-bottom: 10px;
         color: #00AFEF;
         font-weight: 900;
      }
      ._upTXT{
         font-size: 15px;
         padding: 10px;
         border-top: 1px dashed #00AFEF;
      }
      ._upgrade_{
         background: #00afef;
         padding: 10px;
         font-weight: 800;
         color: #FFF;
         cursor: pointer;
         margin: 0px;
      }
      table{
         margin-right: 15px;
      }
      ._npane{
        width: 100%;
        position: fixed;
        overflow: hidden;
        overflow-y: scroll;
        height: 100%;
        background: rgba(150,150,150,0.5);
        z-index: 10000;
        display: none;
      }
      ._nmod{
        width: 80%;
        margin: 50px auto;
        max-width: 500px;
        background: #FFF;
        box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
        padding: 20px;
        border-radius: 5px;
      }
      ._mod_head{
        width: 100%;
        display: block;
        overflow: hidden;
        font-size: 20px;
        margin-bottom: 10px;
      }
      ._mod_text{
        width: 100%;
        display: block;
        overflow: hidden;
        line-height: 1.2;
        margin-bottom: 10px;
        padding: 10px;
        border-bottom: 1px dashed #9e9e9e;
        border-top: 1px dashed #9e9e9e;
      }
      ._mod_close{
        width: 50%;
        display: block;
        overflow: hidden;
        background: #cddc39;
        padding: 12px 10px;
        border-radius: 5px;
        text-align: center;
        cursor: pointer;
      }
      ._nnp_btn{
        text-align: center;
        padding: 5px 10px;
        cursor: pointer;
        float: right;
        border-radius: 2px;
        background: #1d1d1d;
        color: #FFF;
        display: block;
        overflow: hidden;
        width: 100%;
      }
      ._phh{
        text-align: center;
        font-weight: bolder;
        font-size: 14px;
        margin-bottom: 10px;
      }
      ._seg_pay{
        width: 48%;
        display: inline-block;
        overflow: hidden;
        float: left;
        margin: 1%;
        background: #FFF;
        border-radius: 2px;
        padding: 20px;
      }
      ._seg_pay_img_{
        height: 30px;
        max-width: 100%;
        display: block;
        overflow: hidden;
      }
      ._gwAA{
        margin-top: 20px;
        width: 100%;
      }
    </style>
<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>


</head>
<body class="fixed-navbar sidebar-mini has-animation">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="index.php">
                    <span class="brand">pipsbull-earners                        <!-- <span class="brand-tip">CAST</span> -->
                    </span>
                    <span class="brand-mini">RIO</span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i style="color: white;" class="fa fa-menu"></i></a>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-inbox">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i>
                            <span class="badge badge-primary envelope-badge">6</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <li class="dropdown-menu-header">
                                <div>
                                    <span><strong>6 New</strong> Deposit</span>
                                    <a class="pull-right" href="index.php#ee">+86%</a>
                                </div>
                            </li>
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 240px;"><li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f" style="overflow: hidden; width: auto; height: 240px;">
                                <div>
                                    <a class="list-group-item">
                                      <div class="media">
                                          <div class="media-body">
                                              <h6>€17,129 invested </h6><small class="text-muted">Just now</small>
                                              <div class="font-13" style="color: orange;">TRANSACTION ID: <b>T9NQC</b></div>
                                          </div>
                                      </div>
                                    </a>
                                    <a class="list-group-item">
                                      <div class="media">
                                          <div class="media-body">
                                              <h6>€11,409 invested </h6><small class="text-muted">Just now</small>
                                              <div class="font-13" style="color: orange;">TRANSACTION ID: <b>K2U1M</b></div>
                                          </div>
                                      </div>
                                    </a>
                                    <a class="list-group-item">
                                      <div class="media">
                                          <div class="media-body">
                                              <h6>€3,115 invested </h6><small class="text-muted">Just now</small>
                                              <div class="font-13" style="color: orange;">TRANSACTION ID: <b>EVCNZ</b></div>
                                          </div>
                                      </div>
                                    </a>
                                    <a class="list-group-item">
                                      <div class="media">
                                          <div class="media-body">
                                              <h6>€19,560 invested </h6><small class="text-muted">Just now</small>
                                              <div class="font-13" style="color: orange;">TRANSACTION ID: <b>TOIVZ</b></div>
                                          </div>
                                      </div>
                                    </a>
                                    <a class="list-group-item">
                                      <div class="media">
                                          <div class="media-body">
                                              <h6>€15,637 invested </h6><small class="text-muted">Just now</small>
                                              <div class="font-13" style="color: orange;">TRANSACTION ID: <b>L7K65</b></div>
                                          </div>
                                      </div>
                                    </a>
                                    <a class="list-group-item">
                                      <div class="media">
                                          <div class="media-body">
                                              <h6>€10,043 invested </h6><small class="text-muted">Just now</small>
                                              <div class="font-13" style="color: orange;">TRANSACTION ID: <b>CNDRL</b></div>
                                          </div>
                                      </div>
                                    </a>
                                </div>
                            </li><div class="slimScrollBar" style="background: rgb(113, 128, 143); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.9; z-index: 90; right: 1px;"></div></div>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown" style="color: #23b7e5;">
                            <img src="./index_files/no-photo.png">
                                                        
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="mailto:support@pipsbull-earners.com" target="_blank"><i class="fa fa-support"></i>Support</a>
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER--><!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="./index_files/no-photo.png" width="45px">
            </div>
            <div class="admin-info">
                
                                    <small class="text-success">Unverified</small>
                            </div>
        </div>
        <ul class="side-menu metismenu">
            <li class="heading">FEATURES</li>
            <li>
                <a href="<?php echo e(url('dashboard')); ?>"><i class="sidebar-item-icon fa fa-signal"></i>
                    <span class="nav-label">Trade Center</span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(url('deposit')); ?>"><i class="sidebar-item-icon fa fa-money"></i>
                    <span class="nav-label">Fund Account</span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(url('withdraw')); ?>"><i class="sidebar-item-icon ti-credit-card"></i>
                    <span class="nav-label">Place Withdraw</span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(url('upgrade')); ?>"><i class="sidebar-item-icon fa fa-bolt"></i>
                    <span class="nav-label">Upgrade Trade</span>
                </a>
            </li>
            
            <li>
                <a href="trade-history.php"><i class="sidebar-item-icon fa fa-bar-chart"></i>
                    <span class="nav-label">Trade History</span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(url('verification')); ?>"><i class="sidebar-item-icon fa fa-id-card"></i>
                    <span class="nav-label">ID Verification</span>
                </a>
            </li>
            
            <li>
                <a href="<?php echo e(url('profile')); ?>"><i class="sidebar-item-icon fa fa-user"></i>
                    <span class="nav-label">Profile</span>
                </a>
            </li>
            
            <li>
                <a href="<?php echo e(url('recent-withdraw')); ?>"><i class="sidebar-item-icon fa fa-crown"></i>
                    <span class="nav-label">Recent Withdraw</span>
                </a>
            </li>
            <li>
                
                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>
                
                    <?php if (isset($component)) { $__componentOriginal68cb1971a2b92c9735f83359058f7108 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68cb1971a2b92c9735f83359058f7108 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => route('logout'),'onclick' => 'event.preventDefault();
                                        this.closest(\'form\').submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'onclick' => 'event.preventDefault();
                                        this.closest(\'form\').submit();']); ?>
                        <?php echo e(__('LogOut')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $attributes = $__attributesOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__attributesOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $component = $__componentOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__componentOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
                </form>
            </li>
        </ul>
    </div>
</nav>

<div class="content-wrapper">

    <?php echo $__env->yieldContent('content'); ?>

</div>


 <!-- END PAGE CONTENT-->
 <footer class="page-footer">
    <div class="font-13"><script>document.write(new Date().getFullYear())</script> © <b>cryptbullishinvestment</b> - All rights reserved.</div>
    <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
</footer>
</div>
</div><style>.tradingview-widget-copyright {font-size: 13px !important; line-height: 32px !important; text-align: center !important; vertical-align: middle !important; font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important; color: #9db2bd !important;} .tradingview-widget-copyright .blue-text {color: #2962FF !important;} .tradingview-widget-copyright a {text-decoration: none !important; color: #9db2bd !important;} .tradingview-widget-copyright a:visited {color: #9db2bd !important;} .tradingview-widget-copyright a:hover .blue-text {color: #1E53E5 !important;} .tradingview-widget-copyright a:active .blue-text {color: #1848CC !important;} .tradingview-widget-copyright a:visited .blue-text {color: #2962FF !important;}</style>

<!-- BEGIN PAGA BACKDROPS-->
<div class="sidenav-backdrop backdrop"></div>
<div class="preloader-backdrop" style="display: none;">
<div class="page-preloader">Loading</div>
</div>
<!-- END PAGA BACKDROPS-->
<!-- CORE PLUGINS-->


<?php echo app('Illuminate\Foundation\Vite')('resources/js/jquery.min.js.download'); ?>
<?php echo app('Illuminate\Foundation\Vite')('resources/js/popper.min.js.download'); ?>
<?php echo app('Illuminate\Foundation\Vite')('resources/js/bootstrap.min.js.download'); ?>
<?php echo app('Illuminate\Foundation\Vite')('resources/js/metisMenu.min.js.download'); ?>
<?php echo app('Illuminate\Foundation\Vite')('resources/js/jquery.slimscroll.min.js.download'); ?>
<?php echo app('Illuminate\Foundation\Vite')('resources/js/Chart.min.js.download'); ?>
<?php echo app('Illuminate\Foundation\Vite')('resources/js/jquery-jvectormap-2.0.3.min.js.download'); ?>
<?php echo app('Illuminate\Foundation\Vite')('resources/js/jquery-jvectormap-world-mill-en.js.download'); ?>
<?php echo app('Illuminate\Foundation\Vite')('resources/js/jquery-jvectormap-us-aea-en.js.download'); ?>
<?php echo app('Illuminate\Foundation\Vite')('resources/js/app.min.js.download'); ?>
<?php echo app('Illuminate\Foundation\Vite')('resources/js/dashboard_1_demo.js.download'); ?>
<?php echo app('Illuminate\Foundation\Vite')('resources/js/sweetalert2.min.js.download'); ?>
<?php echo app('Illuminate\Foundation\Vite')('resources/js/trade.js.download'); ?>
<?php echo app('Illuminate\Foundation\Vite')('resources/js/bootstrap-imageupload.js.download'); ?>

<!-- File Upload Preview -->


<script type="text/javascript">
var $imageupload = $('.imageupload');
$imageupload.imageupload({
  allowedFormats: [ 'jpg', 'jpeg', 'png' ],
  maxFileSizeKb: 5096
});
</script>
<script type="text/javascript">
$(document).ready(function () {

$.post("https://blockchain.info/tobtc?currency=USD&value=0", function(data){
  $(".btc__").html(data);
});

$("._pprofile__").click(function () {
Swal.fire({
     // icon: 'info',
     html: "<div style='text-align: left;'><h4>My Profile</h4><br><div><img src='assets/img/admin-avatar.png' width='65px' /><br><br>Full Name: Jane  <br>American Samoa<br>Email: tylerjane205@gmail.com<br>Phone number: 252536363<br>Account Level: MINI<br>Date Joined: 2024-01-20 03:08:08</div>",
     showConfirmButton: true
});
});
})

function copyToClipboard(element) {
var $temp = $("<input>");
$("body").append($temp);
$temp.val($(element).text()).select();
document.execCommand("copy");
$temp.remove();

/* Alert the copied text */
Swal.fire({
icon: 'success',
html: "<b>" + $(element).text() + "</b><br><br> <b style='color: red;'>Copied!</b>",
showConfirmButton: true,
timer: 2500
});
}
</script>
<script src="./index_files/rzdazx5cccm7pndg8r3q89jdrybfqjy9.js.download" async=""></script>
<div class="jvectormap-tip"></div>



<script type="text/javascript">
(function () {
var options = {
    whatsapp: "+", // WhatsApp number
    call_to_action: "Message Us", // Call to action
    position: "left", // Position may be 'right' or 'left'
};
var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();
</script>

</body></html><?php /**PATH C:\xampp\htdocs\laravel\resources\views/layouts/dash.blade.php ENDPATH**/ ?>