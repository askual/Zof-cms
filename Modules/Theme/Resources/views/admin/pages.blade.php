@extends('zof::layouts.admin')


@section('content')

<!-- Content Wrapper. Contains page content -->
{{-- <div class="content-wrapper"> --}}
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Pages
            <small>customize your pages</small>
          </h1>
          {{-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
          </ol> --}}
        </section>
    
        <!-- Main content -->
        <section class="content">
            <div class="col-sm-6">
                <div class="box box-solid">
                    <div class="box-header with-border">
                    {{-- <i class="fa fa-text-width"></i> --}}
                    <h3 class="box-title">
                      Create
                    <form method="POST" action="{{route('admin.theme.page.create')}}">
                        @csrf
                      <input type="text" name="title">
                      <select name="page_type">
                        @foreach ($page_types as $item)
                          <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                      </select>
                      <button type="submit" class="btn btn-primary btn-sm">New</button>
                      </form>
                    </h3>
                    </div>
                    <div class="box-body">
                          <ol>
                            @foreach ($pages as $page)
                          <form action="{{route('admin.theme.page_edit')}}" method="post">
                                @csrf
                                  <li>   
                                    <div class="jumbotron">
                                        <input name="id" value="{{$page->id}}" hidden>    
                                      Title: {{$page->title}}<br>
                                      Slug: {{$page->slug}} <br>
                                      type: {{$page->page_type->name}} <br>
                                      @if($page->page_type->name == 'custom')
                                      Body: <input name="body" value="{{$page->tags }}">
                                      <button type="submit" class="btn btn-primary">Edit</button>
                                      @endif  
                                    </div>
                                  </li>
                            </form>
                            @endforeach
                          </ol>
                    </div>
                </div>
              </div>
              <div class="col-sm-6">
                  <div class="box box-solid">
                      <div class="box-header with-border">
                      <i class="fa fa-text-width"></i>
          
                      <h3 class="box-title">Widgets</h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">  
                      <ol>
                              @foreach ($widgets as $widget)
                               <li>   {{$widget->name}}  </li>
                              @endforeach
                      </ol>
                      </div>
                      <!-- /.box-body -->
                  </div>
                </div>
        


        </section>
{{-- </div> --}}

@endsection