@extends('master')

@section('page_title')
Publications
@stop

@section('nav_scientific_studies_current')
current
@stop

@section('content')

<?php

$kategori = "";

$i = 0;



?>
<section class="section_offset">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @foreach($publications as $p)
                @if($kategori != $p->kategori)
                @if(strlen($kategori) > 1)
                </ul>
                @endif
                <?php $kategori = $p->kategori; ?>

                <h4 class="color_dark fw_light m_bottom_15 page-header">
                    {{ strtoupper($p->kod) }}. {{ $p->kategori}}
                </h4>
                <ul class="vr_list_type_3 counter color_dark fw_light">


                    @endif

                    <li id="publication-{{$p->id}}" class="m_bottom_12 counter_inc"><a
                            href="/scientific-studies/publications/{{$p->slug}}">{{$p->baslik}}</a></li>

                    @endforeach

            </div>
            <div class="col-md-4">
                Grafikler buraya
            </div>
        </div>
    </div>
</section>

@stop


