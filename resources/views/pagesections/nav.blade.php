<button id="menu_button" class="r_corners tr_all color_blue db_centered m_bottom_20 d_none d_xs_block">
    <i class="icon-menu"></i>
</button>
<nav role="navigation"
     class="d_inline_m f_left f_xs_none d_xs_none m_xs_right_0 m_right_15 m_sm_right_5 t_align_l m_xs_bottom_15">
    <ul class="hr_list main_menu type_2 fw_light">
        <li class="@yield('nav_home_current')">
            <a class="d_block fs_large color_dark" href="/{{App::getLocale()}}">{{trans('nav.home')}}</a>
        </li>
        <li class=" @yield('nav_about_current') container3d relative f_xs_none m_xs_bottom_5">
            <a class="color_dark fs_large relative r_xs_corners" href="/{{App::getLocale()}}/about">{{trans('nav.about')}}
                <i class="icon-angle-down d_inline_m"></i>
            </a>
            <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                <li class="@yield('nav_who_am_i_current')">
                    <a href="/{{App::getLocale()}}/about/who-am-i"
                       class="d_block color_dark relative">{{trans('nav.who_am_i')}}</a>
                </li>
                <li class="@yield('nav_what_i_want_current')">
                    <a href="/{{App::getLocale()}}/about/what-i-want" class="d_block color_dark relative">{{trans('nav.what_i_want')}}</a>
                </li>
            </ul>
        </li>
        <li class=" @yield('nav_scientific_studies_current') container3d relative f_xs_none m_xs_bottom_5">
            <a class="color_dark fs_large relative r_xs_corners" href="/{{App::getLocale()}}/scientific-studies">{{trans('nav.scientific_studies')}}
                <i class="icon-angle-down d_inline_m"></i>
            </a>
            <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                <li class="@yield('nav_publications_current')">
                    <a href="/{{App::getLocale()}}/scientific-studies/publications" class="d_block color_dark relative">{{trans('nav.publications')}}</a>
                </li>
                <li class="@yield('nav_projects_current')">
                    <a href="/{{App::getLocale()}}/scientific-studies/projects"
                       class="d_block color_dark relative">{{trans('nav.projects')}}</a>
                </li>
                <li class="@yield('nav_public_studies_current')">
                    <a href="/{{App::getLocale()}}/scientific-studies/public-studies"
                       class="d_block color_dark relative">{{trans('nav.public_studies')}}</a>
                </li>
            </ul>
        </li>
        <li class="  @yield('nav_psychology_current') container3d relative f_xs_none m_xs_bottom_5">
            <a class="color_dark fs_large relative r_xs_corners" href="/{{App::getLocale()}}/psychology">{{trans('nav.psychology')}}
                <i class="icon-angle-down d_inline_m"></i>
            </a>
            <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                <li class="@yield('nav_clinical_psychology_current')">
                    <a href="/{{App::getLocale()}}/psychology/clinical-psychology" class="d_block color_dark relative">{{trans('nav.clinical_psychology')}}</a>
                </li>
                <li class="@yield('nav_geropsychology_current')">
                    <a href="/{{App::getLocale()}}/psychology/geropsychology" class="d_block color_dark relative">{{trans('nav.geropsychology')}}</a>
                </li>
                <li class="@yield('nav_trauma_psychology_current')">
                    <a href="/{{App::getLocale()}}/psychology/trauma-psychology" class="d_block color_dark relative">{{trans('nav.trauma_psychology')}}</a>
                </li>
                <li class="@yield('nav_clinical_psychology_current')">
                    <a href="/{{App::getLocale()}}/psychology/forensic-clinical-psychology"
                       class="d_block color_dark relative">{{trans('nav.forensic_clinical_psychology')}}</a>
                </li>
            </ul>
        </li>
        <li class=" @yield('nav_services_current') container3d relative f_xs_none m_xs_bottom_5">
            <a class="color_dark fs_large relative r_xs_corners" href="/{{App::getLocale()}}/services">{{trans('nav.services')}}
                <i class="icon-angle-down d_inline_m"></i>
            </a>
            <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                <li class="@yield('nav_trainings_current')">
                    <a href="/{{App::getLocale()}}/services/trainings" class="d_block color_dark relative">{{trans('nav.trainings')}}</a>
                </li>
                <li class="@yield('nav_consultancy_current')">
                    <a href="/{{App::getLocale()}}/services/consultancy" class="d_block color_dark relative">{{trans('nav.consultancy')}}</a>
                </li>
                <li class="@yield('nav_psychotherapy_current')">
                    <a href="/{{App::getLocale()}}/services/psychotherapy"
                       class="d_block color_dark relative">{{trans('nav.psychotherapy')}}</a>
                </li>
                <li class="@yield('nav_supervision_current')">
                    <a href="/{{App::getLocale()}}/services/supervision" class="d_block color_dark relative">{{trans('nav.supervision')}}</a>
                </li>
            </ul>
        </li>
        <li class="@yield('nav_measurement_and_evaluation_current')">
            <a class=" d_block fs_large color_dark"
               href="/{{App::getLocale()}}/measurement_and_evaluation">{{trans('nav.measurement_evaluation')}}</a>
        </li>

        <li class="@yield('nav_contact_current')">
            <a class="d_block fs_large color_dark" href="/{{App::getLocale()}}/contact">{{trans('nav.contact')}}</a>
        </li>
    </ul>
</nav>