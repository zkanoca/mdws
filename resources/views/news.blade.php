@extends('master')

@section('page_title')
News
@stop

@section('nav_scientific_studies_current')
current
@stop

@section('content')

<section class="page_title translucent_bg_purple t_align_c">
    <div class="container">
        <h1 class="color_light fw_light m_bottom_5">News</h1>
        <!--breadcrumbs-->
        <ul class="hr_list d_inline_m breadcrumbs">
            <li class="m_right_8 f_xs_none">
                <a href="/{{App::getLocale()}}"
                   class="color_grey_light_3 d_inline_m m_right_10">{{trans('nav.home')}}</a>
            </li>
        </ul>
    </div>
</section>
<section class="section_offset">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                @foreach($news as $n)

                <h4 class="color_dark fw_light m_bottom_15 page-header">
                    <a href="/{{App::getLocale()}}/news/{{$n->slug}}">{{ $n->baslik }}
                </h4>

                @endforeach

            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
</section>

@stop