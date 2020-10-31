<?php $__env->startSection('title'); ?>
    <?php if(isset($edit)): ?>
        Edit Page Info
    <?php else: ?>
        New Page Info
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('barcum'); ?>
<?php if(isset($edit)): ?>
<h1>
    Create New Page
    <small>Create new extra page</small>
</h1>
<?php else: ?>
<h1>
    Modify New Page
    <small>edit new extra page</small>
</h1>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('extra.msg', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>
<!-- Main content -->
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-danger">
            
            <div class="box-header with-border">
                <?php if(isset($edit)): ?>
                    <h3 class="box-title"><i class="fa fa-plus"></i> Edit New Page</h3>
                <?php else: ?>
                    <h3 class="box-title"><i class="fa fa-plus"></i> Create New Page</h3>
                <?php endif; ?>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php if(isset($edit)): ?>
            <form method="post" role="form" enctype="multipart/form-data" action="<?php echo e(url('admin-ecom/new-extra-page/update/'.$edit->id)); ?>">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Page Name</label>
                        <input type="text" class="form-control" value="<?php echo e($edit->name); ?>" id="exampleInputEmail1" name="name" placeholder="Enter Name">
                    </div>

                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea class="form-control" id="editor" name="description" placeholder="Enter Description"><?php echo e($edit->description); ?></textarea>
                    </div>
                    <div class="form-group">
                        
                        <input type="checkbox" 

                        <?php if($edit->isactive==1): ?>
                            checked="checked" 
                        <?php endif; ?>
                         class="minimal"  name="isactive" placeholder="Enter Name"> <label style="margin-left: 5px;" for="exampleInputPassword1"> Is Active</label>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button> 
                    <button type="reset" class="btn btn-danger"><i class="fa fa-times-circle"></i> Reset</button>
                </div>
            </form>
            <?php else: ?>
            <form method="post" role="form" enctype="multipart/form-data" action="<?php echo e(url('admin-ecom/new-extra-page')); ?>">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Page Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Name">
                    </div>

                    
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                   
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea class="form-control" id="editor" name="description" placeholder="Enter Description"></textarea>
                    </div>
                    <div class="form-group">
                        
                        <input type="checkbox" 

                         class="minimal"  name="isactive" placeholder="Enter Name"> <label style="margin-left: 5px;" for="exampleInputPassword1"> Is Active</label>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Create</button> 
                    <button type="reset" class="btn btn-danger"><i class="fa fa-times-circle"></i> Reset</button>
                </div>
            </form>
            <?php endif; ?>


        </div>
        <!-- /.box -->

    </div>
    <!--/.col (left) -->
</div>

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-table"></i> New Page List</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
                <div class="box-body">                
                    <div id="grid"></div>

                </div>
                <!-- /.box-body -->
            </form>
        </div>
        <!-- /.box -->

    </div>
    <!--/.col (left) -->
</div>
<!-- /.row -->
<!-- /.content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(url('plugins/iCheck/all.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(url('plugins/iCheck/icheck.min.js')); ?>"></script>
<?php echo $__env->make('extra.kendo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script id="edit_client" type="text/x-kendo-template">
    <a class="k-button k-button-icontext k-grid-delete" href="<?php echo e(url('admin-ecom/new-extra-page')); ?>/#= id #"><span class="k-icon k-edit"></span>Edit</a> 
    <a class="k-button k-button-icontext k-grid-delete" href="<?php echo e(url('admin-ecom/new-extra-page/delete')); ?>/#= id #" ><span class="k-icon k-delete"></span>Delete</a>
    </script>  
   

<script type="text/javascript">
    $(document).ready(function () {
//$("#brandimage").kendoUpload();

    


    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
    });

    $(".customlayout").fadeOut();
        $(".iscustomlayout .iCheck-helper").click(function () {
            var colorAc = $(this).parent('div').attr('aria-checked');
            //alert(colorAc);        
            if (colorAc == 'true')
            {
                $(".customlayout").fadeIn();
            } else
            {
                $(".customlayout").fadeOut();
            }
    });

    var totalURL="<?php echo e(url('admin-ecom/extra-page-data')); ?>";

    var dataSource = new kendo.data.DataSource({
    transport: {
    read: {
    url: totalURL,
            type: "GET",
            datatype: "JSON"

    }
    },
            autoSync: false,
            schema: {
            data: "data",
                    total: "total",
                    model: {
                    id: "id",
                            fields: {
                            id: {nullable: true},
                                    name: {type: "string"},
                                    description: {type: "string"},
                                    isactive: {type: "string"},
                                    created_at: {type: "string"},
                                    updated_at: {type: "string"}

                            }
                    }
            },
            pageSize: 10,
            serverPaging:false,
            serverFiltering: false,
            serverSorting: false
    });
    $("#grid").kendoGrid({
    dataSource: dataSource,
            filterable: true,
            pageable: {
            refresh: true,
                    input: true,
                    numeric: false,
                    pageSizes: true,
                    pageSizes:[10, 20, 50, 100, 200, 400]
            },
            sortable: true,
            groupable: true,
            columns: [
            {field: "id", title: "BID", width: "80px"},
            {field: "name", title: "Name", width: "150px"},
            {field: "isactive", title: "Is Active", width: "150px"},
            {
            title: "Action", width: "290px",
                    template: kendo.template($("#edit_client").html())
            }
            ],
    });
    });

</script>

<script>
    $(document).ready(function () {
        function onPaste(e) {
            kendoConsole.log("paste :: " + kendo.htmlEncode(e.html));
        }
        $("#editor, #editor1").kendoEditor({
            tools: [
                "bold",
                "italic",
                "underline",
                "strikethrough",
                "justifyLeft",
                "justifyCenter",
                "justifyRight",
                "justifyFull",
                "insertUnorderedList",
                "insertOrderedList",
                "indent",
                "outdent",
                "createLink",
                "unlink",
                "insertImage",
                "insertFile",
                "subscript",
                "superscript",
                "tableWizard",
                "createTable",
                "addRowAbove",
                "addRowBelow",
                "addColumnLeft",
                "addColumnRight",
                "deleteRow",
                "deleteColumn",
                "viewHtml",
                "formatting",
                "cleanFormatting",
                "fontName",
                "fontSize",
                "foreColor",
                "backColor",
                "print"
            ]
        });
    });

</script> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>