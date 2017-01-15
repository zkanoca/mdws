<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 13.01.2017
 * Time: 23:08
 */

$uniList = array();
$uniList['0'] = trans('membership.seciniz');
$uniList['999'] = trans('membership.bunlardan_baska');

foreach ($universities as $u) {
    $uniList[$u->id] = $u->universite;
}
?>
@extends('master')

@section('page_title')
    {{trans('membership.create_account')}}
@stop

@section('script_css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.7.0/bootstrap-slider.min.js"
            integrity="sha256-9bHlI6GWwrFSVZnjhryGZCh4mTG3d7oegMdyOmK0iw4=" crossorigin="anonymous"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.7.0/css/bootstrap-slider.min.css"
          integrity="sha256-+FBCj9WGOc2GgRSiBKQLV/7+WS1AFUzqQSv1MzTY7+0=" crossorigin="anonymous"/>

    <script>
        $(function () {

            $("#lisans_select")
                .change(function () {
                    if ($(this).val() == 999) {
                        $('#lisans_diger_universite').removeAttr('disabled');
                    }
                    else {
                        $('#lisans_diger_universite').attr('disabled', 'disabled').val('');
                    }
                });
            $("#yuksek_lisans_select")
                .change(function () {
                    if ($(this).val() == 999) {
                        $('#yuksek_lisans_diger_universite').removeAttr('disabled');
                    }
                    else {
                        $('#yuksek_lisans_diger_universite').attr('disabled', 'disabled').val('');
                    }
                });
            $("#doktora_select")
                .change(function () {
                    if ($(this).val() == 999) {
                        $('#doktora_diger_universite').removeAttr('disabled');
                    }
                    else {
                        $('#doktora_diger_universite').attr('disabled', 'disabled').val('');
                    }
                });


            $('#egitim_durumu_slider').slider({
                formatter: function (value) {
                    return 'Current value: ' + value;
                },
                tooltip: 'always'
            });


            $('#lisans_bilgileri').hide();
            $('#yuksek_lisans_bilgileri').hide();
            $('#doktora_bilgileri').hide();


            $('#egitim_durumu_slider').change(
                function () {
                    if ($(this).val() === "0") {
                        $('#lisans_bilgileri').hide();
                        $('#yuksek_lisans_bilgileri').hide();
                        $('#doktora_bilgileri').hide();
                    }
                    else if ($(this).val() === "1") {
                        $('#lisans_bilgileri').show();
                        $('#yuksek_lisans_bilgileri').hide();
                        $('#doktora_bilgileri').hide();
                    }
                    else if ($(this).val() === "2") {
                        $('#lisans_bilgileri').show();
                        $('#yuksek_lisans_bilgileri').show();
                        $('#doktora_bilgileri').hide();
                    }
                    else if ($(this).val() === "3") {
                        $('#lisans_bilgileri').show();
                        $('#yuksek_lisans_bilgileri').show();
                        $('#doktora_bilgileri').show();
                    }
                });


        });


    </script>
    <style>
        .slider {
            width: 100% !important;
        }


    </style>


@stop

@section('content')
    <script src="/js/bootstrap-datepicker.min.js" type="text/javascript" language="JavaScript"></script>
    <script src="/js/bootstrap-datepicker.{{App::getLocale()}}.min.js" type="text/javascript"
            language="JavaScript"></script>
    <link href="/css/bootstrap-datepicker3.standalone.min.css" rel="stylesheet">
    <section class="page_title image_bg_7 t_align_c">
        <div class="container">
            <h1 class="color_light fw_light m_bottom_5">{{trans('membership.create_account')}}</h1>
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
                <h3 class="page-header">{{trans('membership.create_account')}}</h3>
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

                {!!Form::open(['class' => 'form'])!!}
                <div class="col-lg-5 col-md-5">
                    <div class="form-group">
                        {!! Form::label('email', trans('membership.mail_address')) !!}
                        {!! Form::email('email', null, ['placeholder' => trans('membership.mail_address'),
                        'class' =>'form-control',
                        'required' => 'required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password', trans('membership.password')) !!}
                        {!! Form::password('password',  ['placeholder' => trans('membership.password'),
                        'class' =>'form-control',
                        'required' => 'required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password2', trans('membership.password_again')) !!}
                        {!! Form::password('password2', ['placeholder' => trans('membership.password_again'),
                        'class' =>'form-control',
                        'required' => 'required'])!!}
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-lg-offset-1 col-md-offset-1">
                    <div class="form-group">
                        {!! Form::label('adi', trans('membership.your_name')) !!}
                        {!! Form::email('adi', null, ['placeholder' => trans('membership.your_name'),
                        'class' =>'form-control',
                        'required' => 'required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('soyadi', trans('membership.your_surname')) !!}
                        {!! Form::text('soyadi', null, ['placeholder' => trans('membership.your_surname'),
                        'class' =>'form-control',
                        'required' => 'required'])!!}
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                {!! Form::label('dogum_tarihi', trans('membership.date_of_birth')) !!}

                                <div id="date_of_birth" class='input-group date' id='datetimepicker1'>

                                    {!! Form::text('dogum_tarihi', null, ['placeholder' => trans('membership.date_format'),
                                    'class' =>'form-control',
                                    'required' => 'required'])!!}
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </div>
                                </div>

                                <script type="text/javascript">
                                    $('#date_of_birth').datepicker({
                                        format: "yyyy-mm-dd",
                                        startDate: "1907-01-01",
                                        endDate: "2007-12-31",
                                        todayBtn: "linked",
                                        language: "{{App::getLocale()}}",
                                        //orientation: "top auto",
                                        todayHighlight: true
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="col-md-6">
                            {!! Form::label('cinsiyet', trans('membership.gender')) !!}
                            <div class="btn-group btn-group-justified" data-toggle="buttons">
                                <label class="btn btn-default">
                                    {!! Form::radio('cinsiyet', null, ['autocomplete' => 'off', 'value' => '1']) !!}
                                    <i class="fa fa-mars fa-lg"></i> {{trans('membership.gender_male')}}
                                </label>
                                <label class="btn btn-default">
                                    {!! Form::radio('cinsiyet', null, ['autocomplete' => 'off', 'value' => '2']) !!}
                                    <i class="fa fa-venus fa-lg"></i> {{trans('membership.gender_female')}}
                                </label>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4  col-lg-4 ">
                    <div class="form-group">
                        {!! Form::label('sehir', trans('membership.sehir')) !!}
                        {!! Form::text('sehir', null, ['placeholder' => trans('membership.sehir'),
                        'class' =>'form-control',
                        'required' => 'required'])!!}
                    </div>
                </div>
                <div class="col-md-4  col-lg-4 ">
                    <div class="form-group">
                        {!! Form::label('ulke', trans('membership.ulke')) !!}
                        {!! Form::text('ulke', null, ['placeholder' => trans('membership.ulke'),
                        'class' =>'form-control',
                        'required' => 'required'])!!}
                    </div>
                </div>
                <div class="col-md-4  col-lg-4 ">
                    <div class="form-group">
                        {!! Form::label('meslek', trans('membership.meslek')) !!}
                        {!! Form::text('meslek', null, ['placeholder' => trans('membership.meslek'),
                        'class' =>'form-control',
                        'required' => 'required'])!!}
                    </div>
                </div>


                <div class="form-group" id="egitim_durumu_selector">

                    {!! Form::label('egitim_durumu', trans('membership.egitim_durumu')) !!}
                    <div>
                        <input id="egitim_durumu_slider"
                               name="egitim_durumu"
                               type="text"
                               data-slider-min="0"
                               data-slider-max="3"
                               data-slider-step="1"
                               data-slider-value="0"
                               data-provide="slider"
                               data-slider-ticks="[0, 1, 2, 3]"
                               data-slider-ticks-labels='[
                                    "<button type=\"button\" class=\"btn btn-default btn-sm \">{{trans("membership.lise_mezunu")}}</button>",
                                    "<button type=\"button\" class=\"btn btn-info btn-sm \">{{trans("membership.lisans_ogrencisi_veya_mezunu")}}</button>",
                                    "<button type=\"button\" class=\"btn btn-warning btn-sm \">{{trans('membership.yuksek_lisans_ogrencisi_veya_mezunu')}}</button>",
                                    "<button type=\"button\" class=\"btn btn-success btn-sm \">{{trans('membership.doktora_ogrencisi_veya_mezunu')}}</button>"]'


                        />
                    </div>

                </div>

                <div class="col-md-4 col-lg-4" id="lisans_bilgileri">
                    <div class="form-group">
                        {!! Form::label('lisans', trans('membership.lisans')) !!}
                        {!! Form::select('lisans',
                        [
                        '99' => trans('membership.donem_seciniz'),
                        '0' => trans('membership.mezun'),
                        '8' => trans('membership.donem_8_veya_ustu'),
                        '7' => trans('membership.donem_7'),
                        '6' => trans('membership.donem_6'),
                        '5' => trans('membership.donem_5'),
                        '4' => trans('membership.donem_4'),
                        '3' => trans('membership.donem_3'),
                        '2' => trans('membership.donem_2'),
                        '1' => trans('membership.donem_1')
                        ],
                        null, //seçili öğe değeri
                         [
                         'class' => 'form-control',
                         ]

                        )!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('lisans_universite', trans('membership.universite')) !!}
                        {!! Form::select('lisans_universite',
                        $uniList,
                        null, //seçili öğe değeri
                         ['class' => 'form-control',
                         'id' => 'lisans_select'
                         ]
                        )!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('lisans_diger_universite', trans('membership.diger_universite')) !!}
                        {!! Form::text('lisans_diger_universite', null, ['placeholder' => trans('membership.diger_universite'),
                        'class' =>'form-control', 'id' => 'lisans_diger_universite',
                        'disabled' => 'disabled'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('lisans_bolum', trans('membership.bolum')) !!}
                        {!! Form::text('lisans_bolum', null, ['placeholder' => trans('membership.bolum'),
                        'class' =>'form-control'])!!}
                    </div>
                </div>
                <div class="col-md-4 col-lg-4" id="yuksek_lisans_bilgileri">
                    <div class="form-group">
                        {!! Form::label('yuksek_lisans', trans('membership.yuksek_lisans')) !!}
                        {!! Form::select('yuksek_lisans',
                        [
                        '99' => trans('membership.donem_seciniz'),
                        '0' => trans('membership.mezun'),
                        '8' => trans('membership.donem_8_veya_ustu'),
                        '7' => trans('membership.donem_7'),
                        '6' => trans('membership.donem_6'),
                        '5' => trans('membership.donem_5'),
                        '4' => trans('membership.donem_4'),
                        '3' => trans('membership.donem_3'),
                        '2' => trans('membership.donem_2'),
                        '1' => trans('membership.donem_1')
                        ],
                        null, //seçili öğe değeri
                         ['class' => 'form-control']
                        )!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('yuksek_lisans_universite', trans('membership.universite')) !!}
                        {!! Form::select('yuksek_lisans_universite',
                        $uniList,
                        null, //seçili öğe değeri
                         ['class' => 'form-control', 'id' => 'yuksek_lisans_select']
                        )!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('yuksek_lisans_diger_universite', trans('membership.diger_universite')) !!}
                        {!! Form::text('yuksek_lisans_diger_universite', null, ['placeholder' => trans('membership.diger_universite'),
                        'class' =>'form-control', 'id' => 'yuksek_lisans_diger_universite',
                        'disabled' => 'disabled'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('yuksek_lisans_bolum', trans('membership.bolum')) !!}
                        {!! Form::text('yuksek_lisans_bolum', null, ['placeholder' => trans('membership.bolum'),
                        'class' =>'form-control'])!!}
                    </div>
                </div>
                <div class="col-md-4 col-lg-4" id="doktora_bilgileri">
                    <div class="form-group">
                        {!! Form::label('doktora', trans('membership.doktora')) !!}
                        {!! Form::select('doktora',
                        [
                        '99' => trans('membership.donem_seciniz'),
                        '0' => trans('membership.mezun'),
                        '8' => trans('membership.donem_8_veya_ustu'),
                        '7' => trans('membership.donem_7'),
                        '6' => trans('membership.donem_6'),
                        '5' => trans('membership.donem_5'),
                        '4' => trans('membership.donem_4'),
                        '3' => trans('membership.donem_3'),
                        '2' => trans('membership.donem_2'),
                        '1' => trans('membership.donem_1')
                        ],
                        null, //seçili öğe değeri
                         ['class' => 'form-control', 'id' => 'doktora_select']
                        )!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('doktora_universite', trans('membership.universite')) !!}
                        {!! Form::select('doktora_universite',
                        $uniList,
                        null, //seçili öğe değeri
                         ['class' => 'form-control', 'id' => 'doktora_select']
                        )!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('doktora_diger_universite', trans('membership.diger_universite')) !!}
                        {!! Form::text('doktora_diger_universite', null, ['placeholder' => trans('membership.diger_universite'),
                        'class' =>'form-control', 'id' => 'doktora_diger_universite',
                        'disabled' => 'disabled'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('doktora_lisans_bolum', trans('membership.bolum')) !!}
                        {!! Form::text('doktora_bolum', null, ['placeholder' => trans('membership.bolum'),
                        'class' =>'form-control'])!!}
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-9 col-lg-9">
                    <ul class="vr_list_type_3 counter color_dark fw_light">
                        <li class="counter_inc m_bottom_20">{!! trans('membership.terms1', ['aopen' => '<a href="https://www.psikolog.org.tr/turkey-code-tr.pdf" target="_blank">', 'aclose' => '</a>'])!!}</li>
                        <li class="counter_inc m_bottom_20">{{trans('membership.terms2')}}</li>
                    </ul>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="1" name="accept"
                                   required="required"> {{trans('membership.i_accept_terms')}}
                        </label>
                    </div>
                
                    {!! Form::button('<i class="fa fa-floppy-o fa-lg"></i> &nbsp; '.trans('membership.kaydet'),  ['class' => 'btn btn-primary btn-lg', 'type' => 'submit']) !!}
                </div>
            </div>
            {!!Form::close()!!}
        </div>
    </section>
@stop
