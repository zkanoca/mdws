@extends('master')

@section('page_title')
    {{trans('nav.psychology')}}
@stop

@section('nav_psychology_current')
current
@stop

@section('content')
<section class="page_title translucent_bg_green t_align_c">
    <div class="container">
        <h1 class="color_light fw_light m_bottom_5">{{trans('nav.psychology')}}</h1>
        <ul class="hr_list d_inline_m breadcrumbs">
            <li class="m_right_8 f_xs_none"><a href="/{{App::getLocale()}}"
                                               class="color_grey_light_3 d_inline_m m_right_10">{{trans('nav.home')}}</a>
            </li>
        </ul>
    </div>
</section>
<section class="section_offset_2">
    <div class="container">
        <div class="row">
            @foreach($psychologyCategories as $pc)
                <a href="/{{App::getLocale()}}/psychology/{{$pc->slug}}">
                <div class="col-lg-3 col-md-3 col-sm-3 m_bottom_45 m_xs_bottom_30">
                    <div class="p_table border_grey r_corners_2 bg_color_blue_hover t_align_c">
                        <!--title-->
                        <h5 class="color_green m_bottom_15 pt_title">{{trans('psychology.' . $pc->category)}}</h5>
                        <!--icon-->
                        <div class="pt_icon color_light bg_color_green r_corners_2 db_centered vc_child m_bottom_10"><i
                                    class="{{$pc->icon}} d_inline_m"></i></div>

                    </div>

                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>


@stop