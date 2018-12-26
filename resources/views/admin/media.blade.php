@extends('admin.layout')


@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Media
        <small>images, files, video, audio</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-edit"></i>
                    <h3 class="box-title">Media</h3>
                </div>
                <div class="box-body pad table-responsive">
                    <p>
                    <form action="{{route('admin.media.post')}}" enctype="multipart/form-data" method="POST">@csrf <input type="file" class="col-md-3" name="zfile"><button class="btn btn-primary btn-sm col-md-3" type="submit">upload</button></form>
                    </p>
                    <table class="table table-bordered text-center">
                    {{-- <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> --}}
                    @foreach($media as $mm)
                    <tr>
                        @foreach($mm as $m)
                        <td>
                                {{$m->title}}
                        <img src="{{route('storage',['name'=>$m->name])}}" class="img-responsive" height="100px" width="200px">
                        </td>
                        @endforeach
                    </tr>
                    @endforeach     
                    <tr>
                            {{-- {{ $media->links() }} --}}
                    </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection