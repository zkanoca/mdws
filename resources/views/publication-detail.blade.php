@extends('master')


@section('page_title')
@foreach($publication as $p)
{{$p->baslik}}
@endforeach
@stop

@section('nav_scientific_studies_current')
current
@stop

@section('nav_publications_current')
current
@stop


@section('content')
<section class="page_title translucent_bg_orange t_align_c">
    <div class="container">
        <h1 class="color_light fw_light m_bottom_5">Publications</h1>
        <!--breadcrumbs-->
        <ul class="hr_list d_inline_m breadcrumbs">
            <li class="m_right_8 f_xs_none"><a href="/" class="color_grey_light_3 d_inline_m m_right_10">Home</a><i
                    class="icon-angle-right d_inline_m color_grey_light_3 fs_small"></i></li>
            <li class="m_right_8 f_xs_none"><a href="/scientific_studies"
                                               class="color_grey_light_3 d_inline_m m_right_10">Scientific Studies</a>
                <i class="icon-angle-right d_inline_m color_grey_light_3 fs_small"></i>
            </li>
            <li class="m_right_8 f_xs_none"><a href="/scientific_studies/publications"
                                               class="color_grey_light_3 d_inline_m m_right_10">Publications</a>
                <i class="icon-angle-right d_inline_m color_grey_light_3 fs_small"></i>
            </li>
            <li class="m_right_8 f_xs_none"><a class="color_grey_light_3 d_inline_m m_right_10">
                    @foreach($publication as $p)
                    {{$p->baslik}}
                    @endforeach
                </a>
            </li>

        </ul>
    </div>
</section>
<section class="section_offset">

    <div class="container">
        <div class="row">
            @foreach($publication as $p)

            <h3 id="publication-{{$p->id}}" class="color_dark fw_light m_bottom_15 page-header">{{$p->baslik}}</h3>

            <div class="col-md-6 m_bottom_15">{{ $p->yazar}}</div>
            <div class="col-md-6 m_bottom_15 text-right"><?php echo date('d/m/Y', strtotime($p->tarih)); ?></div>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#abstract" aria-controls="abstract" role="tab"
                                                          data-toggle="tab">Abstract</a></li>
                <li role="presentation"><a href="#ozet" aria-controls="ozet" role="tab" data-toggle="tab">Özet</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="abstract">

                    <h5 class="m_top_35 m_bottom_20">Abstract</h5>
                    {!! $p->abstract !!}

                    <h4 class="m_top_35 m_bottom_15">Keywords</h4>
                    <?php
                    $kw = explode(',', strip_tags($p->keywords));

                    ?>
                    <ul class="list-inline">
                        @foreach($kw as $w)
                        <li><a class="label label-warning color_light_hover" href="#">{{$w}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane" id="ozet">

                    <h4 class="m_top_35 m_bottom_20">Özet</h4>
                    {!! $p->oz !!}


                    <h5 class="m_top_35 m_bottom_20">Anahtar Kelimeler</h5>
                    <?php
                    $ak = explode(',', strip_tags($p->anahtar_kelimeler));

                    ?>
                    <ul class="list-inline">
                        @foreach($ak as $w)
                        <li><a class="label label-warning color_light_hover" href="#">{{$w}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="text-success m_top_35">
                {{$p->yayin_numarasi}}
            </div>
        </div>
    </div>
</section>
<section class="section_offset translucent_bg_orange">
    <div class="container">
        <div class="row">
            <h4 class="color_light_2 fw_normal m_bottom_35">Citation Styles for this publication</h4>
            <ul class="list-group">
                <li class="list-group-item">
                    <h5 class="list-group-item-heading color_orange m_top_20">APA 6<sup>th</sup></h5>

                    {!! $p->apa6th !!}
                </li>
                <li class="list-group-item">
                    <h5 class="list-group-item-heading color_orange m_top_20">MLA</h5>

                    <p>{!! $p->mla !!}</p>
                </li>
                <li class="list-group-item">

                    <h5 class="list-group-item-heading color_orange m_top_20">AMA</h5>

                    <p>{!! $p->ama !!}</p>
                </li>

                <li class="list-group-item">

                    <h5 class="list-group-item-heading color_orange m_top_20">Turabian-Chicago 15<sup>th</sup></h5>

                    <p>{!! $p->turabian !!}</p>
                </li>

                <li class="list-group-item">

                    <h5 class="list-group-item-heading color_orange m_top_20">Vancouver</h5>

                    <p>{!! $p->vancouver !!}</p>
                </li>

            </ul>
            @endforeach
        </div>
    </div>
</section>

<section class="section_offset ">
    <div class="container">
        <div class="row">
            <?php $kategori = ''; ?>

            <h4 class="color_blue fw_normal m_bottom_35">Citations to this publication</h4>

            @foreach($citations as $c)
            @if($kategori != $c->kategori)
            @if(strlen($kategori) > 1)
            </ul>
            @endif
            <?php $kategori = $c->kategori; ?>

            <h5 class="color_pink m_top_35 fw_light m_bottom_15 page-header">
                {{ strtoupper($c->atif_kategorisi) }}. {{ $c->kategori}}
            </h5>
            <ul class="vr_list_type_3 counter  color_dark fw_light">


                @endif


                <li id="citation-{{$c->id}}" class="m_bottom_12 counter_inc m_bottom_20">{{strip_tags($c->atif)}}</li>

                @endforeach
        </div>
    </div>
</section>


@stop