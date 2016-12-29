<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('page_title')</title>

    <!-- Bootstrap -->
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
          crossorigin="anonymous">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        #main {
            background-color: #ffffff;
            min-height: 600px;

        }

        #main_content {
            background-color: #fcfcfc;
        }

        #side_content {
            background-color: #f7f7f7;
        }

        header {
            background-image: url("{{URL::asset('/images/header-bg.png')}}");
            /*background-image: url('https://subtlepatterns.com/patterns/congruent_outline.png');*/
            /*background-image: url('https://subtlepatterns.com/patterns/diagmonds.png');*/
        }

        footer {
            color: #ccc;
            background: #333;
        }

    </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid" id="main">
    <div class="row">
        <header>
            @include('pagesections.header')
        </header>
        <section>@include('pagesections.nav')</section>
        <section>


            <div id="main_content" class="col-md-10 col-md-offset-1">
                <h1 id="heading" class="page-header">@yield('title')</h1>
                @yield('content')
            </div>
            <div id="side_content" class="col-md-10 col-md-offset-1">@yield('side')</div>
        </section>
        <section>@include('pagesections.footer')</section>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script
    src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>

</body>
</html>
