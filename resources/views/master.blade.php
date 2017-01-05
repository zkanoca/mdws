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


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <meta name="author" content="Özkan ÖZLÜ - ozkanozlu@hotmail.com">
    <meta name="keywords" content="Psikoloji, Psychology, geropsikoloji, geropsychology, mithat durak">
    <meta name="description" content="Mithat Durak's personal web site">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('/images/favicon.png')}}">
    <!--web fonts-->

    <link
        href='http://fonts.googleapis.com/css?family=Oxygen:100,300,400,700,900,100italic,300italic,400italic&amp;subset=latin-ext'
        rel='stylesheet' type='text/css'>
    <!--libs css-->
    <link rel="stylesheet" type="text/css" media="all" href="/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" type="text/css" media="all" href="/plugins/colorpicker/colorpicker.css">
    <link rel="stylesheet" type="text/css" media="all" href="/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" media="all" href="/plugins/owl-carousel/owl.transitions.css">
    <link rel="stylesheet" type="text/css" media="all" href="/plugins/jackbox/css/jackbox.min.css">
    <!--theme css-->
    <link rel="stylesheet" type="text/css" media="all" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="/css/theme-animate.css">
    <link rel="stylesheet" type="text/css" media="all" href="/css/style.css">
    <!--head libs-->
    <script src="/js/jquery-2.1.0.min.js" type="text/javascript"></script>
    <script src="/plugins/jquery.queryloader2.min.js" type="text/javascript"></script>
    <script src="/plugins/modernizr.js" type="text/javascript"></script>
    <script>

        $('html').addClass('d_none');
        $(document).ready(function () {
            $('html').show();
            $("body").queryLoader2({
                backgroundColor: '#fff',
                barColor: '#35eef6',
                barHeight: 4,
                percentage: true,
                deepSearch: true,
                minimumTime: 1000
            });
        });
    </script>
</head>
<body>

<div class="wide_layout bg_light">
    <!--header markup-->
    <header role="banner" class="relative type_2">
        <span class="gradient_line"></span>
        <!--top part-->
        @include('pagesections.toppart')
        <hr class="m_xs_bottom_15">
        <!--header bottom part-->
        <section class="header_bottom_part bg_light">
            <div class="container">
                <!--logo-->
                <div class="d_table w_full d_xs_block t_xs_align_c">
                    <div
                        class="col-lg-4 col-md-4 col-sm-4 d_table_cell d_xs_block p_xs_hr_0 v_align_m f_none m_xs_bottom_10">
                        <a href="/" class="d_inline_m">
                            <img src="/images/logo.png" alt="Mithat DURAK">
                        </a>
                    </div>
                    <div
                        class="col-lg-8 col-md-6 col-sm-8 d_table_cell d_xs_block p_xs_hr_0 v_align_m f_none t_xs_align_c">
                        <!--advertising area-->
                        <div
                            class="advertising_area type_4 d_inline_b color_grey m_top_10 m_bottom_10 m_xs_bottom_0">
                            <div class="vc_child">
                                <div class="d_inline_m translucent fw_light lh_medium">
                                    <span class="color_black">İnsanlığın geleceği etik değerlerle bezenmiş bilimsel çalışmalara bağlıdır.
                                    <br>Bilimden bağımsız gelecek sadece korku yaratır.</span>
                                    <br><span class="color_purple pull-right">Mithat DURAK, 05.02.2009, Bolu</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="d_xs_none">
        <section class="sticky_part bg_light shadow_light">
            <div class="container clearfix relative">
                <!--main navigation-->
                @include('pagesections.nav')
                @include('pagesections.search')
            </div>
        </section>
    </header>

    @yield('content')

    @include('pagesections.footer')
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

    <script src="/plugins/flexslider/jquery.flexslider-min.js" type="text/javascript"></script>
    <script src="/plugins/jquery.appear.js" type="text/javascript"></script>
    <script src="/plugins/afterresize.min.js" type="text/javascript"></script>
    <script src="/plugins/jquery.easytabs.min.js" type="text/javascript"></script>
    <script src="/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
    <script src="/plugins/jackbox/js/jackbox-packed.min.js" type="text/javascript"></script>
    <script src="/plugins/twitter/jquery.tweet.min.js" type="text/javascript"></script>
    <script src="/plugins/flickr.js" type="text/javascript"></script>
    <script src="/plugins/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="/plugins/colorpicker/colorpicker.js" type="text/javascript"></script>
    <script src="/js/styleswitcher.js" type="text/javascript"></script>

    <!--Theme Initializer-->
    <script src="/js/theme.plugins.js" type="text/javascript"></script>
    <script src="/js/theme.js" type="text/javascript"></script>
</body>
</html>
