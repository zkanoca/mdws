<section class="header_top_part">
    <div class="container">
        <div class="row">
            <!--contact info-->
            <div class="col-lg-6 col-md-6 col-sm-6 t_xs_align_c">
                <ul class="hr_list fs_small color_grey_light">
                    <li class="m_right_20 f_xs_none m_xs_right_0 m_xs_bottom_5">
                        <span class="circle icon_wrap_size_1 d_inline_m m_right_8"><i class="icon-phone-1"></i></span>+90
                        (374)-254-1000
                        (1297)
                    </li>
                    <li class="m_right_20 f_xs_none m_xs_right_0 m_xs_bottom_5">
                        <a href="mailto:#" class="color_grey_light d_inline_b color_black_hover"><span
                                    class="circle icon_wrap_size_1 d_inline_m m_right_8"><i
                                        class="icon-mail-alt"></i></span>mithat@mithatdurak.com</a>
                    </li>
                    <!--li class="m_right_20 f_xs_none m_xs_right_0 m_xs_bottom_5">
                        <span class="circle icon_wrap_size_1 d_inline_m m_right_8"><i class="icon-skype-1"></i></span>skype.name
                    </li-->
                </ul>
            </div>
            <!--social icons-->
            <div class="col-lg-6 col-md-6 col-sm-6 t_align_r t_xs_align_c m_xs_bottom_10">
                <ul class="hr_list d_inline_b social_icons">
                    <li class="m_right_8"><a href="#" class="color_grey_light facebook circle icon_wrap_size_1 d_block"><i
                                    class="icon-facebook-1"></i></a></li>
                    <li class="m_right_8"><a href="#"
                                             class="color_grey_light twitter circle icon_wrap_size_1 d_block"><i
                                    class="icon-twitter-1"></i></a></li>
                    <li class="m_right_8"><a href="#"
                                             class="color_grey_light googleplus circle icon_wrap_size_1 d_block"><i
                                    class="icon-gplus-1"></i></a></li>
                    <li class="m_right_8"><a href="#"
                                             class="color_grey_light pinterest circle icon_wrap_size_1 d_block"><i
                                    class="icon-pinterest"></i></a></li>
                    <li class="m_right_8"><a href="#" class="color_grey_light dribbble circle icon_wrap_size_1 d_block"><i
                                    class="icon-dribbble"></i></a></li>
                    <li class="m_right_8"><a href="#" class="color_grey_light flickr circle icon_wrap_size_1 d_block"><i
                                    class="icon-flickr-1"></i></a></li>
                    <li class="m_right_8"><a href="#"
                                             class="color_grey_light youtube circle icon_wrap_size_1 d_block"><i
                                    class="icon-youtube-play"></i></a></li>
                    <li class="m_right_8"><a href="#" class="color_grey_light vimeo circle icon_wrap_size_1 d_block"><i
                                    class="icon-vimeo"></i></a></li>
                    <li class="m_right_8"><a href="#"
                                             class="color_grey_light instagram circle icon_wrap_size_1 d_block"><i
                                    class="icon-instagramm"></i></a></li>
                    <li class="m_right_8"><a href="#" class="color_grey_light linkedin circle icon_wrap_size_1 d_block"><i
                                    class="icon-linkedin-squared"></i></a></li>
                </ul>
                <div class="relative f_right m_right_10 dropdown_2_container login">
                    <button class="icon_wrap_size_2 color_grey_light circle tr_all">
                        <i class="icon-language color_grey_light_2 tr_inherit"></i>
                    </button>
                    <div class="dropdown_2 bg_light_2 tr_all">
                        <h5 class="fw_light color_dark m_bottom_5">{{trans('master.select_language')}}</h5>
                        <a role="button"
                           class="button_type_5 t_xs_align_c d_inline_b tr_all r_corners color_blue transparent fs_medium"
                           href="{{App\Helpers\Helper::switch_language()->url}}">
                            {{App\Helpers\Helper::switch_language()->languageName}}
                        </a>
                    </div>
                </div>
                <div class="relative f_right m_right_10 dropdown_2_container login">
                    <button class="icon_wrap_size_2 color_grey_light circle tr_all">
                        <i class="icon-lock color_grey_light_2 tr_inherit"></i>
                    </button>
                    <div class="dropdown_2 bg_light shadow_1 tr_all">
                        <h5 class="fw_light color_dark m_bottom_23">{{trans('membership.oturum_ac')}}</h5>
                        <form class="login_form m_bottom_20">
                            <ul>
                                <li class="m_bottom_10 relative">
                                    <i class="icon-mail login_icon fs_medium color_grey_light_2"></i>
                                    <input type="text" placeholder="{{trans('membership.mail_address')}}"
                                           class="r_corners color_grey w_full fw_light">
                                </li>
                                <li class="m_bottom_10 relative">
                                    <i class="icon-lock login_icon fs_medium color_grey_light_2"></i>
                                    <input type="password" placeholder="{{trans('membership.password')}}"
                                           class="r_corners color_grey w_full fw_light">
                                </li>
                                <li class="m_bottom_23">
                                    <input type="checkbox" checked id="checkbox_1" name="" class="d_none">
                                    <label for="checkbox_1"
                                           class="d_inline_m fs_medium fw_light">{{trans('membership.remember_me')}}</label>
                                </li>
                                <li class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">
                                        <button class="button_type_5 tr_all color_blue transparent fs_medium r_corners">
                                            {{trans('membership.oturum_ac')}}
                                        </button>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8 t_align_r lh_medium">
                                        <a href="#"
                                           class="color_scheme color_purple_hover fs_small">{{trans('membership.forgot_password')}}</a>
                                    </div>
                                </li>
                            </ul>
                        </form>
                        <div class="bg_light_2 im_half_container sc_footer">
                            <h5 class="fw_light color_dark d_inline_m half_column">{{trans('membership.new_member')}}</h5>
                            <div class="half_column t_align_r d_inline_m">
                                <a href="/{{App::getLocale()}}/create-account"
                                   class="button_type_5 t_xs_align_c d_inline_b tr_all r_corners color_purple transparent fs_medium">
                                    {{trans('membership.create_account')}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



