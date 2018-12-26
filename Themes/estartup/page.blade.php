@extends('theme2.layout')


@section('content')



{{-- @foreach ($widgets as $widget) --}}
@foreach ($page->body as $widget)
    @include('theme2.components.'.$widget)
@endforeach


@endsection         