<footer role="contentinfo" class="bg_light_3">
    <!--top part-->
    <section class="footer_top_part">
        <div class="container relative">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-4 m_bottom_20 m_sm_bottom_30 fw_light">
                    <h5 class="color_dark m_bottom_20">Shortly About Me</h5>
                    <article class="clearfix">
                        <img src="/images/mithatdurak.jpg" class="img-circle d_block f_left m_right_10"
                             style="width:80px;height:auto"/>

                        <div class="m_bottom_12 fw_light">
                            @foreach(\App\Helpers\Helper::shortly_about() as $a)
                            {!!
                            substr($a->content, 0, strpos($a->content, '<p>', 2))
                                !!}
                                @endforeach

                        </div>
                    </article>
                    <a href="/about" class="btn btn-warning btn-sm color_light_hover">Read More</a>
                </div>
                <!--twitter-->
                <div class="col-lg-4 col-md-4 col-sm-4 m_bottom_20 m_sm_bottom_30">
                    <h5 class="color_dark fw_light m_bottom_20">Latest News</h5>
                    <?php $ln = \App\Helpers\Helper::latest_news(5); ?>



                    @foreach($ln as $n)
                    <article class="m_bottom_15 m_xs_bottom_20 clearfix">

                        @if($n->resim != '')
                        <a href="/news/{{$n->slug}}" class="d_block f_left wrapper m_right_10">
                            <img src="/images/news/{{$n->resimler}}/{{$n->resim}}" style="width:80px;height:60px"
                                 alt="{{$n->baslik}}">
                        </a>
                        @endif
                        <a href="/news/{{$n->slug}}"
                           class="color_dark m_bottom_5 d_block lh_small fw_light fs_small">{{$n->baslik}}</a>

                        <p class="fs_small color_grey"><i>{{date('j M', strtotime($n->tarih))}}</i></p>
                    </article>

                    @endforeach


                </div>

                <div class="col-lg-4 col-md-4 m_bottom_20 m_sm_bottom_30 fw_light">

                    <h5 class="color_dark fw_light m_bottom_15">Latest Publications</h5>
                    <ul class="vr_list_type_2 color_dark fw_light">
                        <?php $lp = \App\Helpers\Helper::latest_publications(4); ?>
                        @foreach($lp as $p)
                        <li class="m_bottom_10">

                            <div class="icon_wrap_size_0 circle color_grey_light_5 f_left">
                                <i class="icon-doc-text"></i>
                            </div>
                            <a href="/scientific-studies/publications/{{$p->slug}}"
                               class="color_dark color_dark_hover fs_small">
                                {{$p->baslik}}
                            </a>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </section>
    <!--bottom part-->
    <section class="footer_bottom_part t_align_c color_grey bg_light_4 fw_light">
        <p>© <?php echo date('Y'); ?> Mithat DURAK. All Rights Reserved.</p>
    </section>
</footer>
