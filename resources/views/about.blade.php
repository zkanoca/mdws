@extends('master')


@section('nav_about_class')
	active
@stop

@section('title')
    @foreach($about as $a)
        {{$a->title}}
    @endforeach
@stop

@section('content')
    @foreach($about as $a)
        {!! $a->content !!}
    @endforeach
@stop

