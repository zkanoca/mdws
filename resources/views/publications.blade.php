@extends('master')

@section('page_title')
Publications
@stop

@section('nav_scientific_studies_current')
current
@stop

@section('content')

<section class="section_offset">

    @foreach($publications as $k => $v)

    {{ $k }} => {{ $v }}

    @endforeach

</section>

@stop
