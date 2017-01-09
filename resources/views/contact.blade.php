@extends('master')


@section('page_title')

{{trans('nav.contact')}}

@stop


@section('nav_contact_current')
current
@stop


@section('content')


<section class="page_title translucent_bg_color_scheme image_fixed image_bg_14 t_align_c relative wrapper">
    <div class="container">
        <h1 class="color_light fw_light m_bottom_5">{{trans('nav.contact')}}</h1>
        <!--breadcrumbs-->
        <ul class="hr_list d_inline_m breadcrumbs">
            <li class="m_right_8 f_xs_none"><a href="/{{App::getLocale()}}"
                                               class="color_grey_light_3 d_inline_m m_right_10">{{trans('nav.home')}}</a>
            </li>
        </ul>
    </div>
</section>

<section class="section_offset">


<div class="container clearfix">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30">
    <h3 class="color_dark fw_light m_bottom_15 heading_1 t_align_c">{{trans('contact.contact_information')}}</h3>

    <p class="m_bottom_35 heading_2 t_align_c"></p>

    <p class="fw_light m_bottom_23"></p>

    <div class="row">
        <ul class="col-lg-6 col-md-6 col-sm-6 fw_light w_break m_bottom_45 m_xs_bottom_30">
            <li class="m_bottom_8">
                <div class="d_inline_m icon_wrap_size_1 color_pink circle m_right_10">
                    <i class="icon-phone-1"></i>
                </div>
                {{$veri->telefon1}}
            </li>
            <li class="m_bottom_8">
                <div class="d_inline_m icon_wrap_size_1 color_pink circle m_right_10">
                    <i class="icon-print-1"></i>
                </div>
                {{$veri->faks1}}
            </li>


            <li class="m_bottom_8">
                <div class="d_inline_m icon_wrap_size_1 color_pink circle m_right_10">
                    <i class="icon-mail-alt"></i>
                </div>
                <a href="mailto:mithat@mithatdurak.com" class="color_black color_pink_hover">{{$veri->eposta1}}</a>
            </li>
            <?php /*li>
                        <div class="d_inline_m icon_wrap_size_1 color_pink circle m_right_10">
                            <i class="icon-skype-1"></i>
                        </div>
                        skype.name
                    </li */
            ?>
        </ul>
        <ul class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30 vr_list_type_5">
            <li class="m_bottom_8 fw_light">
                <div class="f_left icon_wrap_size_1 color_pink circle">
                    <i class="icon-location"></i>
                </div>
                <address>
                    <p>{!!$veri->adres !!}<br>
                        {{$veri->posta_kodu}} {{$veri->ilce}} {{$veri->il}} {{$veri->ulke}}
                    </p>
                </address>
            </li>
            <?php /*li class="fw_light">
                        <div class="f_left icon_wrap_size_1 color_pink circle">
                            <i class="icon-lifebuoy"></i>
                        </div>
                        <a href="#" class="color_dark color_pink_hover">Support Center</a>
                    </li */
            ?>
        </ul>
    </div>
    <h5 class="color_dark m_bottom_20 fw_light">{{trans('contact.stay_connected')}}</h5>
    <ul class="hr_list social_icons">
        <!--tooltip_container class is required-->
        <li class="m_right_15 m_bottom_15 tooltip_container">
            <!--tooltip-->
                        <span
                            class="d_block r_corners color_default tooltip fs_small tr_all">Follow Us on Facebook</span>
            <a href="#" class="d_block facebook icon_wrap_size_2 circle color_grey_light_2">
                <i class="icon-facebook fs_small"></i>
            </a>
        </li>
        <li class="m_right_15 m_bottom_15 tooltip_container">
            <!--tooltip-->
                        <span
                            class="d_block r_corners color_default tooltip fs_small tr_all">Follow Us on Twitter</span>
            <a href="#" class="d_block twitter icon_wrap_size_2 circle color_grey_light_2">
                <i class="icon-twitter fs_small"></i>
            </a>
        </li>
        <li class="m_right_15 m_bottom_15 tooltip_container m_xs_right_15">
            <!--tooltip-->
            <span class="d_block r_corners color_default tooltip fs_small tr_all">Google Plus</span>
            <a href="#" class="d_block googleplus icon_wrap_size_2 circle color_grey_light_2">
                <i class="icon-gplus-1 fs_small"></i>
            </a>
        </li>
        <li class="m_right_15 m_bottom_15 tooltip_container">
            <!--tooltip-->
            <span class="d_block r_corners color_default tooltip fs_small tr_all">Pinterest</span>
            <a href="#" class="d_block pinterest icon_wrap_size_2 circle color_grey_light_2">
                <i class="icon-pinterest fs_small"></i>
            </a>
        </li>
        <li class="m_bottom_15 m_right_15 m_md_right_15 tooltip_container">
            <!--tooltip-->
            <span class="d_block r_corners color_default tooltip fs_small tr_all">Dribbble</span>
            <a href="#" class="d_block dribbble icon_wrap_size_2 circle color_grey_light_2">
                <i class="icon-dribbble fs_small"></i>
            </a>
        </li>
        <li class="m_right_15 m_bottom_15 tooltip_container m_sm_right_0 m_xs_right_15">
            <!--tooltip-->
            <span class="d_block r_corners color_default tooltip fs_small tr_all">Flickr</span>
            <a href="#" class="d_block flickr icon_wrap_size_2 circle color_grey_light_2">
                <i class="icon-flickr-1 fs_small"></i>
            </a>
        </li>
        <li class="m_right_15 m_bottom_15 tooltip_container">
            <!--tooltip-->
            <span class="d_block r_corners color_default tooltip fs_small tr_all">Youtube</span>
            <a href="#" class="d_block youtube icon_wrap_size_2 circle color_grey_light_2">
                <i class="icon-youtube-play fs_small"></i>
            </a>
        </li>
        <li class="m_right_15 m_bottom_15 tooltip_container">
            <!--tooltip-->
            <span class="d_block r_corners color_default tooltip fs_small tr_all">Vimeo</span>
            <a href="#" class="d_block vimeo icon_wrap_size_2 circle color_grey_light_2">
                <i class="icon-vimeo fs_small"></i>
            </a>
        </li>
        <li class="m_right_15 m_bottom_15 tooltip_container">
            <!--tooltip-->
            <span class="d_block r_corners color_default tooltip fs_small tr_all">Instagram</span>
            <a href="#" class="d_block instagram icon_wrap_size_2 circle color_grey_light_2">
                <i class="icon-instagramm fs_small"></i>
            </a>
        </li>
        <li class="m_bottom_15 tooltip_container">
            <!--tooltip-->
            <span class="d_block r_corners color_default tooltip fs_small tr_all">LinkedIn</span>
            <a href="#" class="d_block linkedin icon_wrap_size_2 circle color_grey_light_2">
                <i class="icon-linkedin-squared fs_small"></i>
            </a>
        </li>
    </ul>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30">
    @if($errors->any())

    <div class="row">

        <ul class="alert alert-danger alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span>
            </button>
            @foreach($errors->all() as $e)
            <li>{{$e}}</li>
            @endforeach

        </ul>

    </div>

    @endif
    <h3 class="color_dark fw_light m_bottom_15 heading_1 t_align_c">{{trans('contact.contact_form')}}</h3>

    <p class="m_bottom_35 heading_2 t_align_c">{{trans('contact.have_any_question')}}</p>

    {!! Form::open(['url'=>'contact/sendMessage']) !!}
    <div class="form-group row">
        <div class="col-md-4">

            {!!Form::text('name', null,
            ['class' => 'w_full r_corners fw_light', 'required'=>'required', 'placeholder'=>trans('contact.your_name')])
            !!}
        </div>
        <div class="col-md-4">
            {!!Form::email('email', null,
            ['class' => 'w_full r_corners fw_light', 'required'=>'required',
            'placeholder'=>trans('contact.your_email')])
            !!}
        </div>
        <div class="col-md-4">
            {!!Form::text('phone', null,
            ['class' => 'w_full r_corners fw_light', 'placeholder'=>trans('contact.your_phone_number') ]) !!}
        </div>

    </div>
    <div class="form-group">
        {!!
        Form::text('subject', null, [ 'class' => 'w_full r_corners fw_light',
        'placeholder'=>trans('contact.subject'),
        'required' => 'required'
        ]
        )
        !!}

    </div>

    <div class="form-group">
        {!!Form::textarea('message', null,
        ['class' => 'w_full r_corners fw_light height_3', 'required'=>'required',
        'placeholder'=>trans('contact.your_message')])
        !!}
    </div>
    <div class="form-group">
        {!!Form::button('<i class="glyphicon glyphicon-send"></i> ' . trans("contact.send_message") ,
        ['class' => 'button_type_5 color_blue transparent r_corners fs_medium tr_all m_right_10
        m_sm_bottom_10',
        'type'=>'submit']) !!}
    </div>
    {!! Form::close() !!}
</div>
</div>
</div>
</section>
@stop