@extends('master')

@section('page_title')
    @foreach($scale as $s)
        {{$s->baslik}}
    @endforeach
@stop

@section('nav_measurement_and_evaluation_current')
    current
@stop

@section('content')

    @foreach($scale as $s)
        <section class="page_title image_bg_5 translucent_bg_red t_align_c">
            <div class="container">
                <h1 class="color_light fw_light m_bottom_5">{{$s->baslik}}</h1>

                <ul class="hr_list d_inline_m breadcrumbs">
                    <li class="m_right_8 f_xs_none">
                        <a href="/{{App::getLocale()}}"
                           class="color_grey_light_3 d_inline_m m_right_10">{{trans('nav.home')}}</a>
                        <i class="icon-angle-right d_inline_m color_grey_light_3 fs_small"></i>
                    </li>
                    <li class="m_right_8 f_xs_none">
                        <a href="/{{App::getLocale()}}/measurement-and-evaluation"
                           class="color_grey_light_3 d_inline_m m_right_10">
                            {{trans('nav.measurement_evaluation')}}
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <section class="section_offset_3">
            <div class="container">
                <div class="row">
                    <h3 class="fw_light color_dark page-header" id="scale-{{$s->sid}}">{{$s->baslik}}</h3>

                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a aria-controls="info" data-toggle="tab" role="tab"
                                                                  href="#info">{{trans('scale.about_scale')}}</a></li>
                        <li role="presentation"><a aria-controls="info" data-toggle="tab" role="tab"
                                                   href="#questionnary">{{trans('scale.questionnaire')}}</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="info">
                            @if($s->yonerge != '')
                                <div id="instructions" class="m_top_20">
                                    <h4 class="color_black">{{trans('scale.instructions')}}</h4>

                                    <div class="m_bottom_15 m_top_15">{!!$s->yonerge!!}</div>
                                </div>
                            @endif
                            @if($s->original != '')
                                <div id="original" class="m_top_20">
                                    <h4 class="color_black">{{trans('scale.original')}}</h4>

                                    <div class="m_bottom_15 m_top_15">{!!$s->original!!}</div>
                                </div>
                            @endif
                            @if($s->uygulama != '')
                                <div id="implementation" class="m_top_20">
                                    <h4 class="color_black">{{trans('scale.implementation')}}</h4>

                                    <div class="m_bottom_15 m_top_15">{!!$s->uygulama!!}</div>
                                </div>
                            @endif
                            @if($s->uyg_nitelikler != '')
                                <div id="implementation-attributes" class="m_top_20">
                                    <h4 class="color_black">{{trans('scale.implementation_attributes')}}</h4>

                                    <div class="m_bottom_15 m_top_15">{!!$s->uyg_nitelikler!!}</div>
                                </div>
                            @endif
                            @if($s->puan_yorum != '')
                                <div id="scoring-and-interpretation" class="m_top_20">
                                    <h4 class="color_black">{{trans('scale.scoring_and_interpretation')}}</h4>

                                    <div class="m_bottom_15 m_top_15">{!!$s->puan_yorum!!}</div>
                                </div>
                            @endif
                            @if($s->guvenirlik != '')
                                <div id="reliability-and-validity" class="m_top_20">
                                    <h4 class="color_black">{{trans('scale.reliability_and_validity')}}</h4>

                                    <div class="m_bottom_15 m_top_15">{!!$s->guvenirlik!!}</div>
                                </div>
                            @endif
                            @if($s->kull_arastirma_yayin != '')
                                <div id="researches-and-publications-in-which-scale-was-used" class="m_top_20">
                                    <h4 class="color_black">
                                        {{trans('scale.researches_and_publications_in_which_the_scale_was_used')}}
                                        Researches and Publications in which Scale was Used</h4>

                                    <div class="m_bottom_15 m_top_15">{!!$s->kull_arastirma_yayin!!}</div>
                                </div>
                            @endif
                            @if($s->kaynak != '')
                                <div id="references" class="m_top_20">
                                    <h4 class="color_black">{{trans('scale.references')}}</h4>

                                    <div class="m_bottom_15 m_top_15">{!!$s->kaynak!!}</div>
                                </div>
                            @endif
                        </div>
                        <div class="tab-pane" role="tabpanel" id="questionnary">
                            <div class="container">
                                <div class="row">
                                    <?php $i = 1; ?>
                                    @foreach($scaleQuestions as $sq)
                                        <div class="color_light_hover bg_color_yellow_hover">
                                            <div class="col-md-12 col-lg-12 m_bottom_15 m_xs_bottom_10 m_top_15 m_xs_top_10">
                                                <strong>{{$i++}}. {{$sq->soru}}</strong>
                                            </div>
                                            <div class="col-md-12 col-lg-12">
                                                <div
                                                        class="btn-group btn-group-justified btn-group-sm  m_bottom_10 m_xs_bottom_10"
                                                        data-toggle="buttons">
                                                    @foreach($scaleOptions as $so)
                                                        <label class="btn btn-default">
                                                            <input id="option-{{$so->id}}" type="radio"
                                                                   name="options-{{$sq->id}}"
                                                                   autocomplete="off"/> {{$so->aciklama}}
                                                        </label>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@stop