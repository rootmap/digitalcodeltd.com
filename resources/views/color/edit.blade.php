 @extends('layout.master')
 @section('title')
    Modify Color Info
 @endsection
 @section('barcum')
 <h1>
    Edit Color Info
    <small>Modify Color Info</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{url('admin-ecom')}}"><i class="fa fa-cogs"></i> Product Setting</a></li>
    <li><a href="{{url('admin-ecom/color')}}">Color Info</a></li>
    <li><a href="#" class="active">Modify Color</a></li>
  </ol>
 @endsection

 @include('extra.msg')

 @section('content')
 <!-- Main content -->
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-pencil-square-o"></i> Edit Color</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form method="post" role="form" action="{{url('admin-ecom/color-update')}}">
              <div class="box-body">
                <div class="form-group">
                  <input type="hidden" name="id" value="<?= $data->id ?>" />
                  <label for="exampleInputEmail1">Color Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Name" value="<?= $data->name ?>">
                </div>
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square"></i> Modify</button> 
                <button type="reset" class="btn btn-danger"><i class="fa fa-times-circle"></i> Reset</button>
                <a class="btn btn-info pull-right" href="{{url('admin-ecom/color')}}"><i class="fa fa-table"></i> Back To List</a>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
      </div>

      
      <!-- /.row -->
    <!-- /.content -->
    @endsection

