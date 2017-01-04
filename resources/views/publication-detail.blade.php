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
                    {{ strip_tags($p->keywords) }}

                </div>
                <div role="tabpanel" class="tab-pane" id="ozet">

                    <h4 class="m_top_35 m_bottom_20">Özet</h4>
                    {!! $p->oz !!}


                    <h5 class="m_top_35 m_bottom_20">Anahtar Kelimeler</h5>
                    {{ strip_tags($p->anahtar_kelimeler) }}

                </div>
            </div>

            <div class="text-success m_top_35">
                {{$p->yayin_numarasi}}
            </div>
        </div>
    </div>
</section>
<section class="section_offset image_bg_10">
    <div class="container">
        <div class="row">
            <h4 class="color_dark fw_normal m_bottom_35">Citation Styles for this publication</h4>
            <ul class="list-group">
                <li class="list-group-item">
                    <h5 class="list-group-item-heading color_pink m_top_35">APA 6<sup>th</sup></h5>

                    {!! $p->apa6th !!}
                </li>
                <li class="list-group-item">
                    <h5 class="list-group-item-heading color_pink m_top_35">MLA</h5>

                    <p>{!! $p->mla !!}</p>
                </li>
                <li class="list-group-item">

                    <h5 class="list-group-item-heading color_pink m_top_35">AMA</h5>

                    <p>{!! $p->ama !!}</p>
                </li>

                <li class="list-group-item">

                    <h5 class="list-group-item-heading color_pink m_top_35">Turabian-Chicago 15<sup>th</sup></h5>

                    <p>{!! $p->turabian !!}</p>
                </li>

                <li class="list-group-item">

                    <h5 class="list-group-item-heading color_pink m_top_35">Vancouver</h5>

                    <p>{!! $p->vancouver !!}</p>
                </li>

            </ul>
            @endforeach
        </div>
    </div>
</section>

<section class="section_offset">
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
            <ul class="list-unstyled color_dark fw_light">


                @endif

                <li id="citation-{{$c->id}}" class="m_bottom_12 counter_inc">{!!$c->atif!!}</li>

                @endforeach
        </div>
    </div>
</section>


@stop