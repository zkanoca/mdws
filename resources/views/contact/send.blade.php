<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 16.01.2017
 * Time: 12:18
 */
?>
@foreach($formData as $k => $v)
    <ul>
        <li>{{$k}}: {{$v}}</li>
    </ul>
@endforeach
