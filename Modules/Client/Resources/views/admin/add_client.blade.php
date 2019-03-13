@extends('zof::layouts.admin')


@section('content')
<section class="content-header">
    <h1>
      Create Client <br/>
    <form action="{{route('admin.client.add_client_post')}}" method="POST">
          @csrf
        <input type="input" placeholder="name" name="name"> <br/>
        <input type="input" placeholder="username" name="username"> <br/>
        <button class="btn btn-primary " type="submit">Create</button>
      </form>
      <small> </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">client</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">All Clients</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <table class="table">
            <tr>
              <th style="width: 10px">#</th>
              <th>Name</th>
              <th>Username</th>
              <th>Action</th>
            </tr>
            @foreach($clients as $k=>$u)
            <tr>
              <td>{{$k+1}}.</td>
              <td>{{$u->name}}</td>  
              <td>{{$u->username}} </td>
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