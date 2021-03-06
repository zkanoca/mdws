@extends('master')

@section('page_title')
    {{trans('about.about')}}
@stop

@section('nav_about_current')
    current
@stop

@section('content')

    <section class="page_title translucent_bg_color_scheme image_fixed t_align_c relative wrapper">
        <div class="container">
            <h1 class="color_light fw_light m_bottom_5">{{trans('about.about_mithat_durak')}}</h1>
            <!--breadcrumbs-->
            <ul class="hr_list d_inline_m breadcrumbs">
                <li class="m_right_8 f_xs_none">
                    <a href="/{{App::getLocale()}}" class="color_grey_light_3 d_inline_m m_right_10">
                        {{trans('nav.home')}}
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="section_offset">
        <main class="container t_align_c">
            <h3 class="color_dark fw_light m_bottom_25 heading_1">
                @foreach($about as $a)
                    {!! $a->title !!}
                @endforeach
            </h3>

            <div class="row">

                <div class="  t_align_l">
                    <div class="m_bottom_15 fw_light fs_medium">
                        @foreach($about as $a)
                            {!! $a->content !!}
                        @endforeach
                    </div>
                </div>
            </div>
        </main>
    </section>

@stop

