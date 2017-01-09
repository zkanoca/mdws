@extends('master')

@section('page_title')
Publications
@stop

@section('nav_scientific_studies_current')
current
@stop

@section('content')
<section class="page_title translucent_bg_purple t_align_c">
    <div class="container">
        <h1 class="color_light fw_light m_bottom_5">Publications</h1>
        <!--breadcrumbs-->
        <ul class="hr_list d_inline_m breadcrumbs">
            <li class="m_right_8 f_xs_none"><a href="/" class="color_grey_light_3 d_inline_m m_right_10">Home</a><i
                    class="icon-angle-right d_inline_m color_grey_light_3 fs_small"></i>
            </li>
            <li class="m_right_8 f_xs_none">
                <a href="/scientific-studies" class="color_grey_light_3 d_inline_m m_right_10">Scientific Studies</a>
            </li>

        </ul>
    </div>
</section>

<section class="section_offset">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php $kategori = ""; ?>
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
                            class="color_purple color_purple_hover"
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


