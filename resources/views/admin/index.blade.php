
@extends('layouts.admin')


@section('content')
{{-- <div class="container"> --}}
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>Zof CMS 0.1</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          {{-- <li><a href="#">Dashboard</a></li> --}}
          <li class="active">Dashboard</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- TABLE: LATEST ORDERS -->
        <div class="col-md-8">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Modules</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    {{-- <th>No.</th> --}}
                    <th>Name</th>
                    <th>Status</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach(Module::all() as $k=>$m)
                  <tr>
                  {{-- <td><a href="">{{$k}}</a></td> --}}
                    <td>{{$m}}</td>
                    <td>
                      @if($m->enabled())
                      <span class="label label-success">Active</span>
                      @else
                      <span class="label label-success">Inactive</span>
                      @endif
                    </td>
                    <td>
                      {{$m->get('description')}}
                    </td>
                    <td>
                    <a class="btn label label-success" href="{{route('admin.module.status_toggle',['module'=>$m])}}" >Change status</a>
                    </td>
                  </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>
        </div>



        <div class="col-md-4">
        <div class="callout callout-info">
          <h4>Tip!</h4>

          <p>Add the layout-top-nav class to the body tag to get this layout. This feature can also be used with a
            sidebar! So use this class if you want to remove the custom dropdown menus from the navbar and use regular
            links instead.</p>
        </div>
        </div>
        <div class="col-md-12">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Blank Box</h3>
          </div>
          <div class="box-body">
            The great content goes here
          </div>
          <!-- /.box-body -->
        </div>
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    {{-- </div> --}}

 @endsection