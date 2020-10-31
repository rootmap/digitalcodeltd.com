<?php $__env->startSection('title'); ?>
    Inclusive Meal Settings
<?php $__env->stopSection(); ?>

<?php $__env->startSection('barcum'); ?>
<h1>
    Inclusive Meal Settings
</h1>
<ol class="breadcrumb">
    <li><a href="#" class="active">Inclusive Meal Settings</a></li>
</ol>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('extra.msg', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-plus"></i> Change Settings</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" role="form" enctype="multipart/form-data" action="<?php echo e(url('admin-ecom/inclusive-meal/settings')); ?>">
                <div class="box-body">
                    
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="form-group">

                        <input type="checkbox"  class="minimal"  name="inclusive_meal" 
                        <?php if(isset($edit)): ?>
                            <?php if($edit->inclusive_meal=="1"): ?>
                                checked="checked" 
                            <?php endif; ?> 
                        <?php endif; ?> 
                        placeholder="Enter Name"> <label style="margin-left: 5px;" for="exampleInputPassword1"> Is Active</label>
                    </div>
                </div>
                
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Create</button> 
                    <button type="reset" class="btn btn-danger"><i class="fa fa-times-circle"></i> Reset</button>
                </div>
            </form>
        </div>
        <!-- /.box -->
    </div>
    <!--/.col (left) -->
</div>
<!-- /.row -->
<!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>