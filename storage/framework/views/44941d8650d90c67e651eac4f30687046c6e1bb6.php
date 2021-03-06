<?php $__env->startSection('title'); ?>
QRCode Info
<?php $__env->stopSection(); ?>
<?php $__env->startSection('barcum'); ?>
<h1>
    QRCode Info
    <small>QRCode</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#" class="active">QRCode Info</a></li>
</ol>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('extra.msg', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>
<?php if(isset($data)): ?>
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-plus"></i> Change QRCode</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form method="post" role="form" enctype="multipart/form-data" action="<?php echo e(url('admin-ecom/qrcode-update')); ?>">
                <div class="box-body">

                    
                    <input type="hidden" name="id" value="<?= $data->id ?>" />
                    <input type="hidden" name="exqrcode" value="<?= $data->qrcode ?>" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Change QRCode Image</label>
                        <input type="file" class="form-control" id="qrcode" name="qrcode" placeholder="Enter Name">
                    </div>  
                    
                    <?php if(!empty($data->qrcode)): ?>
                    <div class="form-group">
                        <img height="200" src="<?php echo e(url('upload/qrcode')); ?>/<?= $data->qrcode ?>">
                    </div> 
                    <?php endif; ?>

                    
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    
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
<?php else: ?>
<!-- Main content -->
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-plus"></i> Upload New QRCode</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form method="post" role="form" enctype="multipart/form-data" action="<?php echo e(url('admin-ecom/qrcode-add')); ?>">
                <div class="box-body">

                    
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">QRCode Image</label>
                        <input type="file" class="form-control" id="qrcode" name="qrcode" placeholder="Enter Name">
                    </div>  
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    
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
<?php endif; ?>

<!-- /.row -->
<!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>