@extends('master')

@section('nav_contact_class')
active
@stop

@section('title')
Contact
@stop

@section('content')
<div class="row row-eq-height">


    <div class="col-md-6">


        <h3>Send Message</h3>

        <p><em>Have any question? Drop me a message. I will get back to you soon.</em></p>
        {!! Form::open(['url'=>'contact/sendMessage']) !!}
        <div class="form-group row">
            <div class="col-md-4">

                {!!Form::text('name', null,
                ['class' => 'form-control', 'required'=>'required', 'placeholder'=>'Your Name']) !!}
            </div>
            <div class="col-md-4">
                {!!Form::email('email', null,
                ['class' => 'form-control', 'required'=>'required', 'placeholder'=>'Your Email']) !!}
            </div>
            <div class="col-md-4">
                {!!Form::text('phone', null,
                ['class' => 'form-control', 'placeholder'=>'Your Phone Number' ]) !!}
            </div>

        </div>
        <div class="form-group">
            {!!Form::text('subject', null,
            ['class' => 'form-control', 'required'=>'required', 'placeholder'=>'Subject']) !!}

        </div>

        <div class="form-group">
            {!!Form::textarea('message', null,
            ['class' => 'form-control', 'required'=>'required', 'placeholder'=>'Your Message']) !!}
        </div>
        <div class="form-group">
            {!!Form::button('<i class="fa fa-paper-plane"></i> Send Message',
            ['class' => 'btn btn-primary', 'type'=>'submit']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    <div class="col-md-6">

        <div class="row">
            <div class="col-md-6">
                <h3><i class="fa fa-map-marker"></i> Address</h3>

                <div class="alert alert-warning">

                    <address>
                        <p>{!!$veri->adres !!}<br>
                            {{$veri->posta_kodu}} {{$veri->ilce}} {{$veri->il}} {{$veri->ulke}}
                        </p>
                    </address>
                </div>


            </div>
            <div class="col-md-6">
                <h3><i class="fa fa-comments-o"></i> Contact Me</h3>

                <div class="well">

                    <ul class="list-unstyled">
                        <li><i class="fa fa-envelope-o"></i> {{$veri->eposta1}}</li>
                        <li><i class="fa fa-phone"></i> {{$veri->telefon1}}</li>
                        <li><i class="fa fa-fax"></i> {{$veri->faks1}}</li>
                        <li>&nbsp;</li>
                    </ul>

                </div>
            </div>
        </div>
        <h3><i class="fa fa-map"></i> Find Me</h3>

        <div class="alert alert-info">


        </div>
    </div>
</div>

@stop