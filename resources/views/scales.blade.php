@extends('master')

@section('page_title')
    {{trans('nav.measurement_evaluation')}}
@stop

@section('nav_measurement_and_evaluation_current')
    current
@stop

@section('content')
    <section class="page_title image_bg_5 translucent_bg_red t_align_c">
        <div class="container">
            <h1 class="color_light fw_light m_bottom_5">{{trans('nav.measurement_evaluation')}}</h1>
            <!--breadcrumbs-->
            <ul class="hr_list d_inline_m breadcrumbs">
                <li class="m_right_8 f_xs_none">
                    <a href="/{{App::getLocale()}}"
                       class="color_grey_light_3 d_inline_m m_right_10">{{trans('nav.home')}}</a>
                </li>
            </ul>
        </div>
    </section>
    <section class="section_offset_3">
        <div class="container">
            <div class="row">
                <?php $kategori = ""; ?>

                @foreach($scales as $s)
                @if($kategori != $s->olcek_kategorisi)
                @if(strlen($kategori) > 1)
                </ul>
                @endif
                <?php $kategori = $s->olcek_kategorisi; ?>

                <h4 id="scale-category-{{$s->scid}}" class="color_dark fw_light m_bottom_15 page-header">
                    {{ trans('scale.'. $s->olcek_kategorisi)}}
                </h4>
                <ul class="vr_list_type_3 counter color_dark fw_light">
                    @endif

                    <li id="scale-{{$s->id}}" class="m_bottom_12 counter_inc"><a
                                class="color_red color_red_hover"
                                href="/{{App::getLocale()}}/measurement-and-evaluation/{{$s->slug}}">{{$s->baslik}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </section>

@stop