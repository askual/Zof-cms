
@extends('admin.layout')


@section('content')
<div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Contact us requests
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">enquiry</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        



          <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Content</th>
                  <th>From</th>
                </tr>
                @foreach($enquiries as $k=>$e)
                <tr>
                  <td>{{$k+1}}.</td>
                  <td>
                    @foreach ($e->body as $k=>$item)
                        {{$k}} : <b>{{$item}}</b> ,
                    @endforeach
                  </td>
                  <td>{{$e->from}}</td>
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