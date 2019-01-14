@extends('zof::layouts.admin')


@section('content')
<section class="content-header">
    <h1>
      Account 
      <small> </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">account</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">All Accounts</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <table class="table">
            <tr>
              <th style="width: 10px">#</th>
              <th>Name</th>
              <th>Yeah</th>
              <th>Action</th>
            </tr>
            @foreach($users as $k=>$u)
            <tr>
              <td>{{$k+1}}.</td>
              <td>{{$u->name}}</td>  
              <td> </td>
            <td>
              <a href="" class="btn btn-secondary btn-sm">Edit</a> 
              <a href="" class="btn btn-danger btn-sm">Delete</a> 
              
            </td>
            </tr>
            @endforeach

          </table>
        </div>
        <!-- /.box-body -->
      </div>
    </div>




  </section>
  <!-- /.content -->
</div>

@endsection







@section('css')

@endsection


@section('js')
<script type="text/javascript">
$( "#accounts" ).addClass( "active" );
$( "#accounts-All" ).addClass( "active" );
</script>
@endsection