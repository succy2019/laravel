<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->startSection('content'); ?>

<div class="main-content">

    <section class="section">

      <div class="section-header">
        <h1><i class="fa fa-users" style="font-size:30px"></i> Users Details</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="">Name</a></div>
             <div class="breadcrumb-item"></div>
        </div>
      </div>
  
      <div class="col-md-12 col-sm-12 col-sx-12">
        <?php if(session()->has('status')): ?>
        <div class="alert alert-success"><?php echo e(session('status')); ?></div>
        <?php endif; ?>
          
           <div class="table-responsive">
                 <table class="display"  id="example">
                                <thead>
                                    <tr>
                                        <th>ACCOUNT NAME</th>
                                        <th>EMAIL</th>
                                        <th>PHONE</th>
                                         <th>COUNTRY</th>
                                     
                                         <th style="display:none">email </th>
                                         <th>ACTION</th>
                                         <th>ACTION</th>
                                        
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr class="odd gradeX">
                                    <td><?php echo e($user->name); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><?php echo e($user->phone); ?></td>
                                    <td><?php echo e($user->country); ?></td>
                                    <td><a href="<?php echo e(url('admin/detail/'.$user->id)); ?>" style="width:100%" class="btn btn-info">-View</a></td>
                                    <td><a href="<?php echo e(url('admin/detail')); ?>" style="width:100%" class="btn btn-danger">DElete </a></td>
                                  </tr>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 
                               

                                 </tbody> 
                            </table>
                        </div>
                    </div>
                  

  </div>
  </div>
  </div> 
  </div>
  </div>
  </div>
  </div>
  </section>
  </div>
  </div>  



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/admin/index.blade.php ENDPATH**/ ?>