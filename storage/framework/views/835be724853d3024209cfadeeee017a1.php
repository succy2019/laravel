<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-md-12 col-sm-12 col-sx-12" >
    <div class="box box-default">
      <div class="box-header with-border">

  
    <h4 align="center"><i class="fa fa-refresh"></i> EDIT USERS DETAILS</h4>
    </br>
<div class="col-md-9 col-sm-12 col-sx-12" >
    <!-- Widget: user widget style 1 -->
    <div class="box box-widget widget-user-2">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-white" >
       

        <form class="form-horizontal" action="<?php echo e(url('update-data/'.$users->id)); ?>" method="POST" >
                    <?php echo e(csrf_field()); ?>

                    <?php echo method_field('PUT'); ?>
                <div class="form-group">
                  <label>FULLNAME</label>
                <input type="text"  name="fname"   value="<?php echo e($users->name); ?>" class="form-control">

                </div>

                <div class="form-group">
                  <label>Phone</label>
                <input type="text"  name="phone"   value="<?php echo e($users->phone); ?>" class="form-control">

                </div>
                <div class="form-group">
                  <label>EMAIL</label>
                <input type="text"  name="email"   value="<?php echo e($users->email); ?>" class="form-control">

                </div>
                <div class="form-group">
                  <label>COUNTRY</label>
                <input type="text"  name="country"   value="<?php echo e($users->country); ?>" class="form-control">

                </div>



                <div class="form-group">
                <input type="submit"  name="update" value="UPDATE USER ACCOUNT" class="btn btn-warning">

                </div>
                </form>


                      </div>
                    </div>

                  </div>
                  
                      </div>
                    </div>

                  </div>     </div>
  
    </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/admin/detail.blade.php ENDPATH**/ ?>