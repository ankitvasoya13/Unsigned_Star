
<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Coupons List</h1>
        </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Coupons list</li>
            </ol>
          </div>
      </div>
      <div class="row">
        <?php if(Session::has('flash_message_error')): ?>
            <div class="alert alert-error alert-block col-md-12">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong><?php echo session('flash_message_error'); ?></strong>
            </div>
        <?php endif; ?>   
        <?php if(Session::has('success')): ?>
            <div class="alert alert-success alert-block col-md-12">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong><?php echo session('success'); ?></strong>
            </div>
        <?php endif; ?>
      </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
      <div class="row">
        <div class="col-12">
          
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">              
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Coupon Code</th>
                  <th>Plan ID</th>
                  <th>Discount Type</th>
                  <th>Amount</th>
                  <th>Expirire Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($coupon->coupon_code); ?></td>
                      <td><?php echo e($coupon->plan_id); ?></td>
                      <td><?php echo e($coupon->type); ?></td>
                      <td><?php echo e($coupon->amount); ?></td>
                      <td><?php echo e($coupon->expiry_date); ?></td>
                      <td><?php echo e(($coupon->status) == '1' ? 'ACTIVE':'INACTIVE'); ?></td>
                      <td class="center">                        
                        <a href="<?php echo e(url('/admin/coupons/edit/'.$coupon->id)); ?>" class="btn btn-primary btn-mini">Edit</a>
                        <a href="<?php echo e(url('/admin/coupons/edit/'.$coupon->id)); ?>" class="btn btn-danger btn-mini">Delete</a>
                        
                      </td>
                    </tr>      
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>